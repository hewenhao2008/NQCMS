<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章列表</title>
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
URL = 'http://localhost/11/1101/index.php/Admin/Content/index/page/2';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/Content';
ACTION = 'http://localhost/11/1101/index.php/Admin/Content/index';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/Content';
HISTORY = 'http://localhost/11/1101/index.php/Admin/Content/index';
</script>
</head>
<body>
	<div class='wrap'>
		<div class="menu_list">
		    <ul>
		        <li><a href="<?php echo U('index');?>"  class="action">文章列表</a></li>
		        <li><a href="<?php echo U('add');?>">添加文章</a></li>
		    </ul>
		</div> 
	<table class='table2'>
		<thead>
			<tr>
				<td class='w30'>AID</td>
				<td>标题</td>
				<td>栏目</td>
				<td>发表时间</td>
				<td class='w200'>操作</td>
			</tr>
		</thead>
		<tbody>
			<?php $hd["list"]["d"]["total"]=0;if(isset($data['data']) && !empty($data['data'])):$_id_d=0;$_index_d=0;$lastd=min(1000,count($data['data']));
$hd["list"]["d"]["first"]=true;
$hd["list"]["d"]["last"]=false;
$_total_d=ceil($lastd/1);$hd["list"]["d"]["total"]=$_total_d;
$_data_d = array_slice($data['data'],0,$lastd);
if(count($_data_d)==0):echo "";
else:
foreach($_data_d as $key=>$d):
if(($_id_d)%1==0):$_id_d++;else:$_id_d++;continue;endif;
$hd["list"]["d"]["index"]=++$_index_d;
if($_index_d>=$_total_d):$hd["list"]["d"]["last"]=true;endif;?>

				<tr>
					<td><?php echo $d['aid'];?></td>
					<td><?php echo $d['title'];?></td>
					<td><?php echo $d['catname'];?></td>
					<td><?php echo date('Y-m-d',$d['addtime']);?></td>
					<td>
						<a href="<?php echo U('edit',array('aid'=>$d['aid']));?>">编辑</a> |
						<a href="<?php echo U('delete',array('aid'=>$d['aid']));?>" onclick='return confirm("确定删除子目录与所有文章吗?")'>删除</a> |
						<a href="">查看</a>
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
	<!-- 显示页码 -->
	<div class='page1'>
		<?php echo $data['page'];?>
	</div>
	</div>
</body>
</html>