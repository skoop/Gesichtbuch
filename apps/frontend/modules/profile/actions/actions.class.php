<?php

/**
 * profile actions.
 *
 * @package    gesichtbuch
 * @subpackage profile
 * @author     Stefan Koopmanschap
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class profileActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $this->profile = Doctrine_Core::getTable('sfGuardUser')->getUserByUsername($request->getParameter('username'));
     $this->forward404Unless($this->profile);

     $this->setLayout('frontend');
  }
}
