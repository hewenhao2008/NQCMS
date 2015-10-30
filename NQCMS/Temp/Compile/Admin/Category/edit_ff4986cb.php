<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>编辑栏目</title>
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
URL = 'http://localhost/11/1101/index.php/Admin/Category/edit/cid/2';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/Category';
ACTION = 'http://localhost/11/1101/index.php/Admin/Category/edit';
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
    				<div class="title-header">编辑栏目</div>
    				<table class='table1 hd-form'>
                        <input type="hidden" value="<?php echo $data['cid'];?>" name="cid" />
                        <tr>
                            <th class='w100'>父级栏目名称</th>
                            <td>
                                <select name="pid" id="">
                                    <option value="0" >顶级</option>
                                    <?php $hd["list"]["d"]["total"]=0;if(isset($catedata) && !empty($catedata)):$_id_d=0;$_index_d=0;$lastd=min(1000,count($catedata));
$hd["list"]["d"]["first"]=true;
$hd["list"]["d"]["last"]=false;
$_total_d=ceil($lastd/1);$hd["list"]["d"]["total"]=$_total_d;
$_data_d = array_slice($catedata,0,$lastd);
if(count($_data_d)==0):echo "";
else:
foreach($_data_d as $key=>$d):
if(($_id_d)%1==0):$_id_d++;else:$_id_d++;continue;endif;
$hd["list"]["d"]["index"]=++$_index_d;
if($_index_d>=$_total_d):$hd["list"]["d"]["last"]=true;endif;?>
   
                                    <option value="<?php echo $d['cid'];?>" <?php echo $d['selected'];?> <?php echo $d['disabled'];?> ><?php echo $d['catname'];?></option>
                                    <?php $hd["list"]["d"]["first"]=false;
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
    							<input type="text" name='catname' class='w200' value="<?php echo $data['catname'];?>">
    						</td>
    					</tr>
    					<tr>
    						<th>关键字</th>
    						<td>
    							<input type="text" name='keywords' class='w200' value="<?php echo $data['keywords'];?>">
    						</td>
    					</tr>
    					<tr>
    						<th>描述</th>
    						<td>
    							<textarea name="description" class='w200 h80'><?php echo $data['description'];?></textarea>
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
                        <tr>
                            <th>静态目录</th>
                            <td>
                                <input type="text" name='html_dir' class='w200' value="<?php echo $data['html_dir'];?>">
                            </td>
                        </tr>
                        <tr>
                            <th>内容页面静态规则</th>
                            <td>
                                <input type="text" name='arc_html_rule' class='w200' value="<?php echo $data['arc_html_rule'];?>">
                                {y}年{m}月{d}日{aid}文章aid
                            </td>
                        </tr>
                        <tr>
                            <th>访问方式</th>
                            <td>
                                <lable>
                                <input type="radio" name='url_type' class='w50' value="1" <?php if($data['url_type'] == 1){?> checked=''<?php }?>>静态访问
                                </lable>
                                <lable >
                                    <input type="radio" name='url_type' class='w50' value="2" <?php if($data['url_type'] == 2){?> checked=''<?php }?>>动态访问
                                </lable> 
                            </td>
                        </tr>
    				</table>
    				<input type="submit" class='hd-success' >
    				</form>
    		</div>
            <!-- onclick="return confirm('其栏目下的子栏目也会删除，你确定要删除该栏目吗？') -->
    	<!-- 	<script type="text/javascript" src="http://localhost/11/1101/NQCMS/Admin/View/Category/Js/js.js"></script> -->
    </body>
</html>