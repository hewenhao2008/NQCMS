<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'uid' => 
  array (
    'field' => 'uid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'username' => 
  array (
    'field' => 'username',
    'type' => 'char(45)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'password' => 
  array (
    'field' => 'password',
    'type' => 'char(40)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'code' => 
  array (
    'field' => 'code',
    'type' => 'char(40)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>