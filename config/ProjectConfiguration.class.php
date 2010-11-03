<?php

require_once '/Users/skoop/php/full_symfony/1.4/lib/autoload/sfCoreAutoload.class.php';
require_once dirname(__FILE__).'/../lib/myAutoload.php';
myAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('gbApiPlugin');
  }
}