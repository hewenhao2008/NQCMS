<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'cid' => 
  array (
    'field' => 'cid',
    'type' => 'smallint(5) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'catname' => 
  array (
    'field' => 'catname',
    'type' => 'char(50)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'pid' => 
  array (
    'field' => 'pid',
    'type' => 'smallint(6)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'keywords' => 
  array (
    'field' => 'keywords',
    'type' => 'varchar(100)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'description' => 
  array (
    'field' => 'description',
    'type' => 'varchar(200)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'list_tpl' => 
  array (
    'field' => 'list_tpl',
    'type' => 'varchar(255)',
    'null' => 'YES',
    'key' => false,
    'default' => 'list.html',
    'extra' => '',
  ),
  'content_tpl' => 
  array (
    'field' => 'content_tpl',
    'type' => 'varchar(255)',
    'null' => 'YES',
    'key' => false,
    'default' => 'content.html',
    'extra' => '',
  ),
  'html_dir' => 
  array (
    'field' => 'html_dir',
    'type' => 'varchar(255)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'url_type' => 
  array (
    'field' => 'url_type',
    'type' => 'varchar(255)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'arc_html_rule' => 
  array (
    'field' => 'arc_html_rule',
    'type' => 'varchar(255)',
    'null' => 'YES',
    'key' => false,
    'default' => '{y}/{m}/{d}/{aid}.html',
    'extra' => '',
  ),
);
?>