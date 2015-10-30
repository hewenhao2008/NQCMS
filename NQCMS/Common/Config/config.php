<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
$base=require APP_CONFIG_PATH.'base.php';
$db=require APP_CONFIG_PATH.'db.inc.php';
$config= array(
    /********************************数据库********************************/
    'DB_DRIVER'                     => 'mysqli',    //数据库驱动
    'DB_CHARSET'                    => 'utf8',      //数据库字符集
    'DB_PORT'                       => 3306,        //数据库连接端口
    'DB_PREFIX'                     =>'hd_',        //后缀
    'DB_BACKUP'                     => 'backup/',   //数据库备份目录
    'UPLOAD_PATH'                   =>'Upload/'.date("Y/m/d"),//存储图片的路径
    'TPL_TAGS'                      =>array('ContentTag'),//模板标签
    // 'URL_TYPE'                      =>2,                  //页面访问类型
    'AUTO_LOAD_FILE'                =>array('functions.php'),//自动加载函数库
    'Hook'                          => array(                //钩子目录
                                        'APP_INIT'=>array('InitHook')
                                    )
);
if(intval($base['WEB_REWRITE'])&& (empty($_GET['m'])||$_GET['m']=='Index')){
    // $config['URL_REWRITE']=1;
    $config['ROUTE']=array(
            '/^(\d+).html$/'=>"m=Index&c=Index&a=content&aid=#1",//伪静态内容页
            '/^(\d).html$/'=>"m=Index&c=Index&a=category&cid=#1",//伪静态列表页

        );
}
return array_merge($config,$base,$db);
?>