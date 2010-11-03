<?php

/**
 * lastfm actions.
 *
 * @package    gesichtbuch
 * @subpackage lastfm
 * @author     Stefan Koopmanschap
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class lastfmActions extends sfActions
{
  public function executeFriends(sfWebRequest $request)
  {
    $lastfm = new Zend_Service_Audioscrobbler();
    $lastfm->setUser('skoop');
    $this->friends = $lastfm->userGetFriends();
  }
}
