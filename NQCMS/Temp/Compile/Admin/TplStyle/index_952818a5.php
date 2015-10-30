<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>模板展示页</title>
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
WEB = 'http://localhost/11/1101';
URL = 'http://localhost/11/1101/Admin/TplStyle/index';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/Admin';
CONTROLLER = 'http://localhost/11/1101/Admin/TplStyle';
ACTION = 'http://localhost/11/1101/Admin/TplStyle/index';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/TplStyle';
HISTORY = 'http://localhost/11/1101/Admin/Index/index';
</script>
</head>
<body>
	<div class="wrap">
		<ul>
			<?php $hd["list"]["d"]["total"]=0;if(isset($dirs) && !empty($dirs)):$_id_d=0;$_index_d=0;$lastd=min(1000,count($dirs));
$hd["list"]["d"]["first"]=true;
$hd["list"]["d"]["last"]=false;
$_total_d=ceil($lastd/1);$hd["list"]["d"]["total"]=$_total_d;
$_data_d = array_slice($dirs,0,$lastd);
if(count($_data_d)==0):echo "";
else:
foreach($_data_d as $key=>$d):
if(($_id_d)%1==0):$_id_d++;else:$_id_d++;continue;endif;
$hd["list"]["d"]["index"]=++$_index_d;
if($_index_d>=$_total_d):$hd["list"]["d"]["last"]=true;endif;?>

				<li <?php if($d['current']){?> class="current"<?php }?> dir="<?php echo $d['filename'];?>">
					<img src="<?php echo $d['image'];?>" alt="" />
					<p><?php echo $d['config']['author'][0];?></p>
					<p><?php echo $d['config']['email'][0];?></p>
				</li>

			<?php $hd["list"]["d"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
		</ul>
	</div>
	<style type="text/css">
		ul li{
			width: 200px;
			height: 250px;
			float: left;
			list-style: none;
			margin: 10px;
			
		}
		ul li.current img{
			width: 200px;
			height: 200px;
			opacity: 1;
			border:2px solid green;
		}
		ul li img{
			width: 200px;
			height: 200px;
			opacity: 0.3;
			border:2px solid #333;
		}
		ul li p{
			line-height: 15px;
		}
	</style>
	<script type="text/javascript">
	$("ul li").click(function(){
		var dirname=$(this).attr('dir');
		$.ajax({
			url: CONTROLLER+'&a=set',
			type: 'POST',
			dataType: 'json',
			data: {dir: dirname},
			success:function(json){
				alert(json.message);
				location.reload();//刷新本页面
			}
			
		})
		
	})
</script>

</body>
</html>