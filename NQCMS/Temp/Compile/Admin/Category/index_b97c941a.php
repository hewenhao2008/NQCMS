<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>栏目管理列表</title>
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
URL = 'http://localhost/11/1101/index.php/Admin/Category/index';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/Category';
ACTION = 'http://localhost/11/1101/index.php/Admin/Category/index';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/Category';
HISTORY = 'http://localhost/11/1101/index.php/Admin/Category/delete/cid/11';
</script>
</head>
<body>
	<div class='wrap'>
		<div class="menu_list">
		    <ul>
		        <li><a href="<?php echo U('index');?>"  class="action">栏目列表</a></li>
		        <li><a href="<?php echo U('add');?>">添加栏目</a></li>
		    </ul>
		    <table class="table2">
		    	<tdead>
		    		<tr>
		    			<td class="w50">CID</td>
		    			<td class="w">栏目名称</td>
		    			<td class="w">分页模板</td>
		    			<td class="w">内容模板</td>
		    			<td class="w">静态页面目录</td>
		    			<td class="w">页面是否静态</td>
		    			<td class="w">描述</td>
		    			<td class="w">关键字</td>
		    			<td >静态页面的命名规则</td>
		    			<td class="w150">操作</td>
		    		</tr>
		    	</tdead>
		    	<tbody>
					<?php $hd["list"]["d"]["total"]=0;if(isset($Catedata) && !empty($Catedata)):$_id_d=0;$_index_d=0;$lastd=min(1000,count($Catedata));
$hd["list"]["d"]["first"]=true;
$hd["list"]["d"]["last"]=false;
$_total_d=ceil($lastd/1);$hd["list"]["d"]["total"]=$_total_d;
$_data_d = array_slice($Catedata,0,$lastd);
if(count($_data_d)==0):echo "";
else:
foreach($_data_d as $key=>$d):
if(($_id_d)%1==0):$_id_d++;else:$_id_d++;continue;endif;
$hd["list"]["d"]["index"]=++$_index_d;
if($_index_d>=$_total_d):$hd["list"]["d"]["last"]=true;endif;?>

		    		<tr>
		    			<td><?php echo $d['cid'];?></td>
		    			<td><?php echo $d['_name'];?></td>
		    			<td><?php echo $d['list_tpl'];?></td>
		    			<td><?php echo $d['content_tpl'];?></td>
		    			<td><?php echo $d['html_dir'];?></td>
		    			<td><?php if($d['url_type'] == 2){?>是<?php }?>
							<?php if($d['url_type'] == 1){?>不是<?php }?>
		    			</td>
		    			<td><?php echo $d['description'];?></td>
		    			<td><?php echo $d['keywords'];?></td>
		    			<td><?php echo $d['arc_html_rule'];?></td>
		    			<td>
		    				<a href="<?php echo U('edit',array('cid'=>$d['cid']));?>">修改</a> | 	
		    				<a href="<?php echo U('addchild',array('pid'=>$d['cid']));?>">添加子栏目</a> | 
		    				<a href="<?php echo U('delete',array('cid'=>$d['cid']));?>" onclick="return confirm('确定要删除该栏目吗？')">删除</a>
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