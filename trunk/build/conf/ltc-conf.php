<?php
// This file generated by Propel 1.6.0 convert-conf target
// from XML runtime conf file C:\xampp\xampp\htdocs\ltc\runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'taberna_colonial' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=taberna_colonial',
        'user' => 'root',
        'password' => '070107cadj',
      ),
    ),
    'default' => 'ltc',
  ),
  'generator_version' => '1.6.0',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-ltc-conf.php');
return $conf;