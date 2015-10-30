<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>添加栏目</title>
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
URL = 'http://localhost/11/1101/index.php/Admin/Category/addchild/pid/2';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/Category';
ACTION = 'http://localhost/11/1101/index.php/Admin/Category/addchild';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/Category';
HISTORY = 'http://localhost/11/1101/index.php/Admin/Category/index';
</script>
</head>
    <body>
    		<div class='wrap'>
                <div class="menu_list">
                    <ul>
                        <li><a href="<?php echo U('index');?>"  class="action">栏目列表</a></li>
                        <li><a href="<?php echo U('add');?>">添加栏目</a></li>
                    </ul>
                </div> 
    			<form method='post'>
    				<div class="title-header">添加子栏目</div>
    				<table class='table1 hd-form'>
    					<tr>
    						<th>父级栏目</th>
    						<td>
    							<select name="pid" class='w200'>
                                <?php $hd["list"]["c"]["total"]=0;if(isset($catedata) && !empty($catedata)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($catedata));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($catedata,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>
    
                                <option value="<?php echo $c['cid'];?>" <?php echo $c['selected'];?>><?php echo $c['catname'];?></option>
                                <?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
    							</select>
    						</td>
    					</tr>
    					<tr>
    						<th class='w100'>栏目名称</th>
    						<td>
    							<input type="text" name='catname' class='w200'>
    						</td>
    					</tr>
    					<tr>
    						<th>关键字</th>
    						<td>
    							<input type="text" name='keywords' class='w200'>
    						</td>
    					</tr>
    					<tr>
    						<th>描述</th>
    						<td>
    							<textarea name="description" class='w200 h80'></textarea>
    						</td>
    					</tr>
                        <tr>
                            <th>列表页模板</th>
                            <td>
                                <input type="text" name='list_tpl' class='w200' value="list.html">
                            </td>
                        </tr>
                        <tr>
                            <th>内容页模板</th>
                            <td>
                                <input type="text" name='content_tpl' class='w200' value="content.html">
                            </td>
                        </tr>
    				</table>
    				<input type="submit" class='hd-success' >
    				</form>
    		</div>
    	<!-- 	<script type="text/javascript" src="http://localhost/11/1101/NQCMS/Admin/View/Category/Js/js.js"></script> -->
    </body>
</html>