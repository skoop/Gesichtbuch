<?php

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);

$options = array();

$server = new Zend_Soap_Server(null, $options);
$server->setClass('SoapFoo');

$server->handle();