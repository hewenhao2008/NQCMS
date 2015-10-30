<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`url_type`,`arc_html_rule`)
						VALUES(2,'新闻资讯',0,'新闻资讯','新闻资讯','list.html','content.html','news','1','{y}/{m}/{d}/{aid}.html')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`url_type`,`arc_html_rule`)
						VALUES(3,'公司简介',0,'公司简介','公司简介','list.html','content.html','gongsi','2','{y}/{m}/{d}/{aid}.html')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`url_type`,`arc_html_rule`)
						VALUES(1,'首页',0,'首页','首页','list.html','content.html','index','2','{y}/{m}/{d}/{aid}.html')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`url_type`,`arc_html_rule`)
						VALUES(5,'企业新闻',2,'企业新闻','企业新闻','list.html','content.html','qiyenew','2','{y}/{m}/{d}/{aid}.html')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`url_type`,`arc_html_rule`)
						VALUES(6,'新闻动态',2,'新闻动态','新闻动态','list.html','content.html','newsactive','2','{y}/{m}/{d}/{aid}.html')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`url_type`,`arc_html_rule`)
						VALUES(7,'行业资讯',2,'行业资讯','行业资讯','list.html','content.html','hangye','2','{y}/{m}/{d}/{aid}.html')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`url_type`,`arc_html_rule`)
						VALUES(8,'联系我们',0,'联系我们','联系我们','list.html','content.html','contect','2','{y}/{m}/{d}/{aid}.html')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`catname`,`pid`,`keywords`,`description`,`list_tpl`,`content_tpl`,`html_dir`,`url_type`,`arc_html_rule`)
						VALUES(10,'企业简介',1,'企业简介','企业简介','list.html','about.html','qiyejianjie','2','{y}/{m}/{d}/{aid}.html')");
