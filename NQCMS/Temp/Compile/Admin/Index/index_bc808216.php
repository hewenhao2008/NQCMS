<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>NQCMS后台管理中心</title>

<script type='text/javascript' src='http://localhost/11/1101/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/11/1101/hdphp/hdphp/Extend/Org/hdjs/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://localhost/11/1101/hdphp/hdphp/Extend/Org/hdjs/hdui/js/hdui.js'></script>
<link href='http://localhost/11/1101/hdphp/hdphp/Extend/Org/hdjs/hdvalidate/css/hdvalidate.css' rel='stylesheet' media='screen'>
<script src='http://localhost/11/1101/hdphp/hdphp/Extend/Org/hdjs/hdvalidate/js/hdvalidate.js'></script>
<script src='http://localhost/11/1101/hdphp/hdphp/Extend/Org/cal/lhgcalendar.min.js'></script>
<script src='http://localhost/11/1101/hdphp/hdphp/Extend/Org/hdjs/hdslide/js/hdslide.js'></script>
<script type='text/javascript'>
HOST = 'http://localhost';
ROOT = 'http://localhost/11/1101';
WEB = 'http://localhost/11/1101/index.php';
URL = 'http://localhost/11/1101/?m=admin';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/Index';
ACTION = 'http://localhost/11/1101/index.php/Admin/Index/index';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/Index';
</script>
<link type="text/css" rel="stylesheet" href="http://localhost/11/1101/NQCMS/Admin/View/Index/css/css.css"/>
<link type="text/css" rel="stylesheet" href="http://localhost/11/1101/NQCMS/Admin/View/Index/css/quick_menu.css"/>

<!-- 默认跳转 -->
<base target="iframe"/>
<!-- <base target="iframe" /> -->
</head>
<body>
    <div class="nav">
        <!--头部左侧导航-->
        <div class="top_menu"></div>
        <!--头部左侧导航-->
        <!--头部右侧导航-->
        <div class="r_menu">
            <?php echo $_SESSION['username'];?>
            <a href="<?php echo U('Login/out');?>" target="_self">
                [退出]
            </a>
            <span>|</span>
            <a href="javascript:hd_ajax('<?php echo U('updateAllCache');?>');">
            <a nid="999" href="javascript:;" onclick="get_content(this,999)" url="<?php echo U('Cache/index',array('begin'=>1));?>">
                更新全站缓存
            </a>
            <span>|</span>
            <a href="http://localhost/11/1101/index.php" target="_blank">
                前台首页
            </a>
            <span>|</span>
            <a href="<?php echo U('Member/Index/index');?>" target="_blank">
                会员中心
            </a>
        </div>
        <!--头部右侧导航-->
    </div>
    <!--左侧导航-->
    <div class="main">
        <!--主体左侧导航-->
        <div class="left_menu ">
           
            <dl>
                <dt>栏目管理</dt>
                <dd>
                    <a href="<?php echo U('Category/index');?>">栏目列表</a>
                </dd>
            </dl>
            <dl>
                <dt>文章管理</dt>
                <dd>
                    <a href="<?php echo U('Content/index');?>">文章列表</a>
                </dd>
            </dl>
            <dl>
                <dt>配置管理</dt>
                <dd>
                    <a href="<?php echo U('Config/set');?>">配置列表</a>
                </dd>
            </dl>
            <dl>
                <dt>模板管理</dt>
                <dd>
                    <a href="<?php echo U('TplStyle/index');?>">模板列表</a>
                </dd>
            </dl>
            <dl>
                <dt>数据备份/还原</dt>
                <dd>
                    <a href="<?php echo U('Backup/index');?>">数据备份</a>
                </dd>
                <dd>
                    <a href="<?php echo U('Backup/backlist');?>">备份列表</a>
                </dd>
            </dl>
              <dl>
                <dt>页面静态化</dt>
                <dd>
                    <a href="<?php echo U('Html/createIndex');?>">生成静态列表</a>
                </dd>
            </dl>
            <dl>
            <dl>
                <dt>友情链接管理</dt>
                <dd>
                    <a href="<?php echo U('Link/index');?>">友情链接列表</a>
                </dd>
            </dl>
            <dl>
                <dt>管理员管理</dt>
                <dd>
                    <a href="<?php echo U('User/index');?>">管理员列表</a>
                </dd>
            </dl>
        </div>
        <!--主体左侧导航-->
        <!--内容显示区域-->
        <div class="top_content ">
            <iframe src="<?php echo U('welcome');?>" name='iframe' scrolling="auto" frameborder="0" 
            style="height: 100%;width: 100%;"></iframe>
        </div>
    <!--内容显示区域-->
    </div>
</body>
</html>