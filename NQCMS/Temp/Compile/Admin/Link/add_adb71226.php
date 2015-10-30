<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
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
URL = 'http://localhost/11/1101/Admin/Link/add';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/Admin';
CONTROLLER = 'http://localhost/11/1101/Admin/Link';
ACTION = 'http://localhost/11/1101/Admin/Link/add';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/Link';
HISTORY = 'http://localhost/11/1101/Admin/Link/index';
</script>
  <title>添加友情链接</title>
</head>
<body>
	<div class='wrap'>
        <div class="menu_list">
            <ul>
                <li><a href="<?php echo U('index');?>"  class="action">链接列表</a></li>
                <li><a href="<?php echo U('add');?>">添加链接</a></li>
            </ul>
        </div> 
		<form method='post' class="hd-form">
                <div class="title-header">添加链接</div>
                	<table class='table1'>
    					<tr>
    						<th>企业名称</th>
    						<td>
    							<input type="text" name="name">
    						</td>
    					</tr>
    					<tr>
    						<th class='w100'>企业网址</th>
    						<td>
    							<input type="text" name='url' class='w300' >
                                    例如：www.baidu.com
    						</td>

    					</tr>
                        <tr>
                            <th>缩略图</th>
                            <td>
                                <link rel="stylesheet" type="text/css" href="http://localhost/11/1101/hdphp/hdphp/Extend/Org/Uploadify/uploadify.css" />
            <script type="text/javascript" src="http://localhost/11/1101/hdphp/hdphp/Extend/Org/Uploadify/jquery.uploadify.min.js"></script>
            <script type="text/javascript">
            var HDPHP_CONTROL         = "http://localhost/11/1101?m=Admin&c=Link&a=hd_uploadify";
            var UPLOADIFY_URL    = "http://localhost/11/1101/hdphp/hdphp/Extend/Org/Uploadify/";
            var HDPHP_UPLOAD_THUMB    ="";
HDPHP_UPLOAD_TOTAL = 0</script>
            <script type="text/javascript" src="http://localhost/11/1101/hdphp/hdphp/Extend/Org/Uploadify/hd_uploadify.js"></script>
<script type="text/javascript">
    $(function() {
        hd_uploadify_options.removeTimeout  =0;//提示框消息时间
        hd_uploadify_options.fileSizeLimit  ="2MB";
        hd_uploadify_options.fileTypeExts   ="*.gif;*.jpg;*.png;*.jpeg";
        hd_uploadify_options.showalt        =0;
        hd_uploadify_options.uploadLimit    =100;
        hd_uploadify_options.input_type    ="input";
        hd_uploadify_options.elem_id    ="";
        hd_uploadify_options.success_msg    ="正在上传...";//上传成功提示文字
        hd_uploadify_options.formData ={type:"*.gif;*.jpg;*.png;*.jpeg",water : "0",fileSizeLimit:2097152, someOtherKey:1,PHPSESSID:"jqmvlb48pmgtp9mp5ruto8prn2",upload_dir:"",hdphp_upload_thumb:""};
        hd_uploadify_options.thumb_width =200;
        hd_uploadify_options.thumb_height          =150;
        hd_uploadify_options.uploadsSuccessNums = 0;
        $("#hd_uploadify_thumb").uploadify(hd_uploadify_options);
        });
</script>
<input type="file" name="up" id="hd_uploadify_thumb"/><div class="hd_uploadify_thumb_msg num_upload_msg"></div><div id="hd_uploadify_thumb_queue"></div>
        <div class="hd_uploadify_thumb_files uploadify_upload_files" input_file_id ="hd_uploadify_thumb">
            <ul></ul>
            <div style="clear:both;"></div>
        </div>
                            </td>
                        </tr>
				    </table>
            	<div class='position-bottom'>
        			<input type="submit" class='hd-success'  value="提交">
        		</div>
            
       </form>
	</div>
  
  
    </body>
</html>