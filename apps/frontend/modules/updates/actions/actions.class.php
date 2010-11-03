<?php

/**
 * updates actions.
 *
 * @package    gesichtbuch
 * @subpackage updates
 * @author     Stefan Koopmanschap
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class updatesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->gb_updates = Doctrine_Core::getTable('gbUpdate')->getUpdatesForHomepage();

    $this->form = new FrontendUpdateForm();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FrontendUpdateForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FrontendUpdateForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeTest(sfWebRequest $request)
  {
    $uri = new Zend_Rest_Client();
    var_dump($uri);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $params = $request->getParameter($form->getName());
    $params['user_id'] = $this->getUser()->getGuardUser()->getId();

    $form->bind($params, $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $gb_update = $form->save();

      $friends = $this->getUser()->getGuardUser()->getFriends();

      foreach($friends as $friend)
      {
          $this->getMailer()->composeAndSend(sfConfig::get('app_email_sender'), $friend->getUser()->getEmailAddress(),
                                             'Your friend has posted a new message',
                                             'Your friend '.$this->getUser()->getGuardUser()->getFirstName() . ' has posted a new message on Gesichtbuch');
      }

      $this->getUser()->setFlash('notice', 'Your update has been saved');

      $this->redirect('updates/index');
    }
  }
}
