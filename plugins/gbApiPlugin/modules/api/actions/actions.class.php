<?php

/**
 * api actions.
 *
 * @package    gesichtbuch
 * @subpackage api
 * @author     Stefan Koopmanschap
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
    public function executeUpdates(sfWebRequest $request)
    {
        $this->gb_updates = Doctrine_Core::getTable('gbUpdate')->getUpdatesForHomepage();
    }
}
