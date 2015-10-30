<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>编辑友情链接</title>
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
URL = 'http://localhost/11/1101/index.php/Admin/Link/edit/lid/1';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/hdphp/Extend';
MODULE = 'http://localhost/11/1101/index.php/Admin';
CONTROLLER = 'http://localhost/11/1101/index.php/Admin/Link';
ACTION = 'http://localhost/11/1101/index.php/Admin/Link/edit';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/Link';
HISTORY = 'http://localhost/11/1101/index.php/Admin/Link/index';
</script>
</head>
<body>
    <div class='wrap'>
        <div class="menu_list">
            <ul>
                <li><a href="<?php echo U('index');?>"  class="action">链接列表</a></li>
                <li><a href="javascript:void();">修改链接</a></li>
            </ul>
        </div> 
    	<form method='post' class="hd-form">
            <input type="hidden" name='lid' value="<?php echo $data['lid'];?>">
                <div class="title-header">修改链接</div>
                    <table class='table1'>
                        <tr>
                            <th>企业名称</th>
                            <td>
                                <input type="text" name="name" value="<?php echo $data['name'];?>">
                            </td>
                        </tr>
                        <tr>
                            <th class='w100'>企业网址</th>
                            <td>
                                <input type="text" name='url' class='w300'  value="<?php echo $data['url'];?>">
                            </td>
                        </tr>
                        <tr>
                            <th>缩略图</th>
                            <td>
                                <link rel="stylesheet" type="text/css" href="http://localhost/11/1101/hdphp/hdphp/Extend/Org/Uploadify/uploadify.css" />
            <script type="text/javascript" src="http://localhost/11/1101/hdphp/hdphp/Extend/Org/Uploadify/jquery.uploadify.min.js"></script>
            <script type="text/javascript">
            var HDPHP_CONTROL         = "http://localhost/11/1101/index.php?m=Admin&c=Link&lid=1&a=hd_uploadify";
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
        hd_uploadify_options.formData ={type:"*.gif;*.jpg;*.png;*.jpeg",water : "0",fileSizeLimit:2097152, someOtherKey:1,PHPSESSID:"onl0jnlh6onnqc1ul7gqfl7911",upload_dir:"",hdphp_upload_thumb:""};
        hd_uploadify_options.thumb_width =200;
        hd_uploadify_options.thumb_height          =150;
        hd_uploadify_options.uploadsSuccessNums = 0;
        $("#hd_uploadify_thumb").uploadify(hd_uploadify_options);
        });
</script>
<input type="file" name="up" id="hd_uploadify_thumb"/><div class="hd_uploadify_thumb_msg num_upload_msg"></div><div id="hd_uploadify_thumb_queue"></div>
        <div class="hd_uploadify_thumb_files uploadify_upload_files" input_file_id ="hd_uploadify_thumb">
            <ul><?php
            $_uploadImageData=$data['thumb'];
            $_uploadStr="";//编译文件需要的PHP字符串表示
            $upFileId=0;//第几张图片
            if(!empty($_uploadImageData)){
            //读取图片数据
            foreach ($_uploadImageData as $f) {
                //图片不存在
                if(empty($f["path"]) || !is_file($f["path"]))continue;
                $upFileId++;
                $url = 'http://localhost/11/1101/' . $f["path"];
        $_uploadStr.="<li><div class='delUploadFile'></div>";
        $_uploadStr.="<img src=" . $url . " path=" . $f["path"] . " width='200px' height='150px'/>";
        //显示图片alt
        if(isset($f["alt"])){
        $_uploadStr.="<div class='upload_title'>
<input type='text'  value='".$f["alt"]."' name='thumb[".$upFileId."][alt]'>
</div>";
        }
        //显示原图
                $_uploadStr.="<input t='file' type='hidden' name='thumb[".$upFileId."][path]' value='" . $f["path"] . "'/>";
                //缩略图
                if(isset($f["thumb"])){
                    foreach($f["thumb"] as $thumbFile){
                        $_uploadStr.="<input t='file' type='hidden' name='thumb[".$upFileId."][thumb][]' value='" . $thumbFile. "'/>";
                    }
                }
                $_uploadStr.="</li>";
            }
            }
        echo $_uploadStr;
        ;
        ?></ul>
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
    	<script type="text/javascript" src="http://localhost/11/1101/NQCMS/Admin/View/Link/Js/js.js"></script>
    </body>
</html>