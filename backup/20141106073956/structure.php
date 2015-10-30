<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("DROP TABLE IF EXISTS `".$db_prefix."admin`");
$db->exe("CREATE TABLE `".$db_prefix."admin` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(45) DEFAULT NULL COMMENT '管理员帐号',
  `password` char(40) DEFAULT NULL COMMENT '管理员密码',
  `code` char(40) DEFAULT NULL COMMENT '令牌',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
$db->exe("DROP TABLE IF EXISTS `".$db_prefix."category`");
$db->exe("CREATE TABLE `".$db_prefix."category` (
  `cid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `catname` char(50) NOT NULL DEFAULT '' COMMENT '栏目名称',
  `pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '父ID',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键字',
  `description` varchar(200) DEFAULT NULL COMMENT '栏目描述',
  `list_tpl` varchar(255) DEFAULT 'list.html' COMMENT '列表页模板',
  `content_tpl` varchar(255) DEFAULT 'content.html' COMMENT '详情页模板',
  `html_dir` varchar(255) DEFAULT NULL COMMENT '静态目录',
  `arc_html_rule` varchar(255) DEFAULT NULL COMMENT '文章静态规则',
  `url_type` varchar(255) DEFAULT NULL COMMENT '访问方式',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='栏目表'");
$db->exe("DROP TABLE IF EXISTS `".$db_prefix."config`");
$db->exe("CREATE TABLE `".$db_prefix."config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL COMMENT '配置名',
  `value` varchar(255) DEFAULT NULL COMMENT '值',
  `type` enum('text','radio','textarea') DEFAULT NULL COMMENT '显示类型:text/radio/textarea',
  `info` varchar(255) DEFAULT NULL COMMENT '参数如:radio   1|开启,0|关闭',
  `orderlist` smallint(6) DEFAULT NULL,
  `isshow` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
$db->exe("DROP TABLE IF EXISTS `".$db_prefix."content`");
$db->exe("CREATE TABLE `".$db_prefix."content` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(100) DEFAULT NULL COMMENT '文章标题',
  `content` text COMMENT '文章内容',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `click` mediumint(9) NOT NULL DEFAULT '100' COMMENT '点击次数',
  `cid` int(11) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键字',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
  PRIMARY KEY (`aid`),
  KEY `fk_hd_content_hd_category_idx` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
