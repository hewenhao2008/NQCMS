<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`arc_html_rule`,`url_type`)
						VALUES(2,'新闻资讯',0,'','','list.html','content.html','','','')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`arc_html_rule`,`url_type`)
						VALUES(3,'公司简介',0,'','','list.html','content.html','','','')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`arc_html_rule`,`url_type`)
						VALUES(1,'首页',0,'','','list.html','content.html','','','')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`arc_html_rule`,`url_type`)
						VALUES(5,'企业新闻',2,'','','list.html','content.html','','','')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`arc_html_rule`,`url_type`)
						VALUES(6,'新闻动态',2,'','','list.html','content.html','','','')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`arc_html_rule`,`url_type`)
						VALUES(7,'行业资讯',2,'','','list.html','content.html','','','')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`arc_html_rule`,`url_type`)
						VALUES(8,'联系我们',0,'','','list.html','content.html','','','')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`arc_html_rule`,`url_type`)
						VALUES(10,'企业简介',1,'','','list.html','about.html','','','')");
