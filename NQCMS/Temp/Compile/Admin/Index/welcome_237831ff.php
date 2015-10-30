<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Document</title>
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
URL = 'http://localhost/11/1101/index.php/Admin/Index/welcome';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/Index';
ACTION = 'http://localhost/11/1101/index.php/Admin/Index/welcome';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/Index';
HISTORY = 'http://localhost/11/1101/?m=admin';
</script>
</head>
<body>
	<div class="wrap">
			<div class="title-header">
				温馨提示
			</div>
			<table class="table2">
				<tr>
					<td style="color:red;font-weight: bold;"> QSCMS是国内唯一真正的百分百免费开源产品，可以用在任何网站（包括商业网站），您不用担心任何版权问题。 </td>
				</tr>
			</table>
			<div class="title-header">
				安全提示
			</div>
			<table class="table2">
				<tr>
					<td>建议将NQcms目录(及子目录)设置为750,文件设置为640</td>
				</tr>
			</table>
			<div style="height:10px;overflow: hidden">
				&nbsp;
			</div>
			<div class="title-header">
				NQCMS动态
			</div>
			<table class="table2">
				<tr>
					<td>
					<a href="http://www.hdphp.com" target="_blank">
						>>查看所有动态
					</a></td>
				</tr>
			</table>
			<div class="title-header">
				BUG反馈
			</div>
			<table class="table2">
				<tr>
					<td style="color:red">
					<a href="http://bbs.houdunwang.com/forum-105-1.html" target="_blank">
						提交反馈
					</a></td>
				</tr>
			</table>
			<div style="height:10px;overflow: hidden">
				&nbsp;
			</div>
			<div class="title-header">
				系统信息
			</div>
			<table class="table2">
				<tr>
					<td class="w100">NQSCMS版本</td>
					<td> <?php echo C("HDCMS_NAME");?> </td>
				</tr>
				<tr>
					<td class="w80">版本号</td>
					<td><font color="red"><?php echo C("HDCMS_VERSION");?></font></td>
				</tr>
				<tr>
					<td class="w80">核心框架</td>
					<td>
					<a href="http://www.hdphp.com" target="_blank">
						HDPHP
					</a>
                    </td>
				</tr>
				<tr>
					<td>PHP版本</td>
					<td><?php echo PHP_OS; ?></td>
				</tr>
				<tr>
					<td>运行环境</td>
					<td> <?php echo $_SERVER['SERVER_SOFTWARE'];?> </td>
				</tr>
				<tr>
					<td>允许上传大小</td>
					<td><?php echo ini_get("upload_max_filesize"); ?></td>
				</tr>
				<tr>
					<td>剩余空间</td>
					<td><?php echo get_size(disk_free_space(".")); ?></td>
				</tr>
			</table>
			<div style="height:10px;overflow: hidden">
				&nbsp;
			</div>
			<div class="title-header">
				程序团队
			</div>
			<table class="table2">
				<tr>
					<td class="w80">版权所有</td>
					<td>
					<a href="http://www.houdunwang.com" target="_blank">
						后盾网
					</a> &
					<a href="http://www.hdphp.com" target="_blank">
						HDCMS
					</a>
                    </td>
				</tr>
				<tr>
					<td>作者</td>
					<td> 后盾网向军 </td>
				</tr>
				<tr>
					<td>鸣谢</td>
					<td>
					<a href="http://bbs.houdunwang.com" target="_blank">
						后盾网所有盾友
					</a>
                    </td>
				</tr>
			</table>
		</div>
        <style type="text/css">
            a{
                color: #666;
            }
            div.wrap{margin-bottom: 0px;}
            h2{
                font-size:12px;
                font-weight: normal;
                margin-bottom: 10px;
            }
            div#RecordSite,div#RecordSite a{
                padding:40px 0px 0px;
                font-size:18px;
                text-align: center;
            }
            div#RecordSite a{
                color:#03565E;
                font-weight: bold;
                padding-left: 10px;
            }
        </style>
        <?php if($updateMessage){?>
            <script>
                var updateMessage='<?php echo $updateMessage;?>';
                $.modal({
                    width:400,
                    height: 180,
                    title:"新版本更新",
                    button: true,
                    button_success: false,
                    button_cancel: "关闭",
                    success: function () {
                        $.removeModal();
                    },
                    content: "<div id='RecordSite'>"+updateMessage+"</div>"
                });
            </script>
        <?php }?>
</body>
</html>