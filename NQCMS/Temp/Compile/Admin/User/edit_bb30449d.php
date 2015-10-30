<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>修改管理员信息</title>
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
URL = 'http://localhost/11/1101/index.php/Admin/User/edit/uid/3';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/User';
ACTION = 'http://localhost/11/1101/index.php/Admin/User/edit';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/User';
HISTORY = 'http://localhost/11/1101/index.php/Admin/User/index';
</script>
</head>
<body>
	<div class="warp">
	<form action="" method="post" name="edit">
		<div class="menu_list">
			<ul>
				<li ><a href="<?php echo U('Index');?>" class="action">管理员列表</a></li>
				<li><a href="javascript:">修改管理员信息</a></li>
			</ul>
			
			<table class="table2 hd-form">
				<input type="hidden" name="<?php echo $data['uid'];?>" />
					<tr>
						<td class="w200">用户名</td>
						<td><input type="text" name="username" value="<?php echo $data['username'];?>" /></td>
					</tr>
					<tr>
						<td>新密码</td>
						<td><input type="password" name="password"/></td>
					</tr>
					<tr>
						<td>请再次输入新密码</td>
						<td><input type="password" name="newpassword"/></td>
					</tr>
					<tr>
						<td>旧密码</td>
						<td><input type="password" name="oldpassword"/></td>	
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="提交" class="hd-success" /></td>
					</tr>
			</table>
			
		</div>
		</form>
	</div>
</body>
</html>