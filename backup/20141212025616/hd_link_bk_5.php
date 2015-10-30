<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."link (`lid`,`name`,`url`,`thumb`)
						VALUES(1,'百度','http://www.baidu.com','')");
$db->exe("REPLACE INTO ".$db_prefix."link (`lid`,`name`,`url`,`thumb`)
						VALUES(2,'后盾网','http://www.houdunwang.com','')");
