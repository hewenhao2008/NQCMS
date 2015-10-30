<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>用户列表</title>
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
URL = 'http://localhost/11/1101/index.php/Admin/User/index';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/User';
ACTION = 'http://localhost/11/1101/index.php/Admin/User/index';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/User';
HISTORY = 'http://localhost/11/1101/index.php/Admin/User/delete/uid/3';
</script>
</head>
<body>
	<div class="warp">
		<div class="menu_list">
			<ul>
				<li ><a href="<?php echo U('Index');?>" class="action">管理员列表</a></li>
				<li><a href="<?php echo U('add');?>">添加管理员</a></li>
			</ul>
			<table class="table2 ">
				<thead>
					<tr>
						<td class="w150">UID</td>
						<td>用户名</td>
						<td>密码</td>
						<td>操作</td>
					</tr>
				</thead>
				<tbody>
					<?php $hd["list"]["d"]["total"]=0;if(isset($data) && !empty($data)):$_id_d=0;$_index_d=0;$lastd=min(1000,count($data));
$hd["list"]["d"]["first"]=true;
$hd["list"]["d"]["last"]=false;
$_total_d=ceil($lastd/1);$hd["list"]["d"]["total"]=$_total_d;
$_data_d = array_slice($data,0,$lastd);
if(count($_data_d)==0):echo "";
else:
foreach($_data_d as $key=>$d):
if(($_id_d)%1==0):$_id_d++;else:$_id_d++;continue;endif;
$hd["list"]["d"]["index"]=++$_index_d;
if($_index_d>=$_total_d):$hd["list"]["d"]["last"]=true;endif;?>

					<tr>
						<td><?php echo $d['uid'];?></td>
						<td><?php echo $d['username'];?></td>
						<td><?php echo $d['password'];?></td>
						<td>
							<a href="<?php echo U('edit',array('uid'=>$d['uid']));?>">修改</a>  |  
							<a href="<?php echo U('delete',array('uid'=>$d['uid']));?>">删除</a>
						</td>
					</tr>
					<?php $hd["list"]["d"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>