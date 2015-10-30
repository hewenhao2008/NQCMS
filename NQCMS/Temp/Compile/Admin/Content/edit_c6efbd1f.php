<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>文章编辑</title>
<script type='text/javascript' src='http://localhost/11/1101/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/11/1101/hdphp/Extend/Org/hdjs/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://localhost/11/1101/hdphp/Extend/Org/hdjs/hdui/js/hdui.js'></script>
<link href='http://localhost/11/1101/hdphp/Extend/Org/hdjs/hdvalidate/css/hdvalidate.css' rel='stylesheet' media='screen'>
<script src='http://localhost/11/1101/hdphp/Extend/Org/hdjs/hdvalidate/js/hdvalidate.js'></script>
<script src='http://localhost/11/1101/hdphp/Extend/Org/cal/lhgcalendar.min.js'></script>
<script src='http://localhost/11/1101/hdphp/Extend/Org/hdjs/hdslide/js/hdslide.js'></script>
<script type='text/javascript'>
HOST = 'http://localhost';
ROOT = 'http://localhost/11/1101';
WEB = 'http://localhost/11/1101';
URL = 'http://localhost/11/1101/Admin/Content/edit/aid/25';
APP = 'http://localhost/11/1101/NQCMS';
COMMON = 'http://localhost/11/1101/NQCMS/Common';
HDPHP = 'http://localhost/11/1101/hdphp';
HDPHPDATA = 'http://localhost/11/1101/hdphp/Data';
HDPHPEXTEND = 'http://localhost/11/1101/hdphp/Extend';
MODULE = 'http://localhost/11/1101/Admin';
CONTROLLER = 'http://localhost/11/1101/Admin/Content';
ACTION = 'http://localhost/11/1101/Admin/Content/edit';
STATIC = 'http://localhost/11/1101/Static';
HDPHPTPL = 'http://localhost/11/1101/hdphp/Lib/Tpl';
VIEW = 'http://localhost/11/1101/NQCMS/Admin/View';
PUBLIC = 'http://localhost/11/1101/NQCMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/11/1101/NQCMS/Admin/View/Content';
HISTORY = 'http://localhost/11/1101/Admin/Content/index/page/1';
</script>
</head>
<body>
    <div class='wrap'>
        <div class="menu_list">
            <ul>
                <li><a href="<?php echo U('index');?>"  class="action">文章列表</a></li>
                <li><a href="javascript:void();">修改文章</a></li>
            </ul>
        </div> 
    	<form method='post'>
    		<input type="hidden" name='aid' value="<?php echo $data['aid'];?>">
			<div class="tab">
                <ul class="tab_menu">
                    <li lab="base">
                        <a> 基本设置 </a>
                    </li>
                    <li lab="other" class="action">
                        <a>其他设置 </a>
                    </li>
                </ul>
                <div class="tab_content  hd-form">
                    <div id="base">
           	            <table class='table1'>
        					<tr>
        						<th>栏目</th>
        						<td>
        							<select name="cid" class='w200'>
        								<!-- <option value="0">==选择栏目==</option> -->
        								<?php $hd["list"]["c"]["total"]=0;if(isset($categorydata) && !empty($categorydata)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($categorydata));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($categorydata,0,$lastc);
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
        						<th class='w100'>标题</th>
        						<td>
        							<input type="text" name='title' class='w300' value="<?php echo $data['title'];?>">
        						</td>
        					</tr>
        					<tr>
        						<th>缩略图</th>
        						<td>
        							<link rel="stylesheet" type="text/css" href="http://localhost/11/1101/hdphp/Extend/Org/Uploadify/uploadify.css" />
            <script type="text/javascript" src="http://localhost/11/1101/hdphp/Extend/Org/Uploadify/jquery.uploadify.min.js"></script>
            <script type="text/javascript">
            var HDPHP_CONTROL         = "http://localhost/11/1101?m=Admin&c=Content&aid=25&a=hd_uploadify";
            var UPLOADIFY_URL    = "http://localhost/11/1101/hdphp/Extend/Org/Uploadify/";
            var HDPHP_UPLOAD_THUMB    ="";
HDPHP_UPLOAD_TOTAL = 0</script>
            <script type="text/javascript" src="http://localhost/11/1101/hdphp/Extend/Org/Uploadify/hd_uploadify.js"></script>
<script type="text/javascript">
    $(function() {
        hd_uploadify_options.removeTimeout  =0;//提示框消息时间
        hd_uploadify_options.fileSizeLimit  ="2MB";
        hd_uploadify_options.fileTypeExts   ="*.jpg;*.jpeg;*.png;*.gif";
        hd_uploadify_options.showalt        =0;
        hd_uploadify_options.uploadLimit    =1;
        hd_uploadify_options.input_type    ="input";
        hd_uploadify_options.elem_id    ="";
        hd_uploadify_options.success_msg    ="正在上传...";//上传成功提示文字
        hd_uploadify_options.formData ={type:"*.jpg;*.jpeg;*.png;*.gif",water : "0",fileSizeLimit:2097152, someOtherKey:1,PHPSESSID:"cj48out3j1vj251tpk1t2q96o2",upload_dir:"",hdphp_upload_thumb:""};
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
        					<tr>
        						<th>正文</th>
        						<td>
        							<script type="text/javascript" charset="utf-8" src="http://localhost/11/1101/hdphp/Extend/Org/Ueditor/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="http://localhost/11/1101/hdphp/Extend/Org/Ueditor/ueditor.all.min.js"></script><script type="text/javascript">UEDITOR_HOME_URL="http://localhost/11/1101/hdphp/Extend/Org/Ueditor/"</script><script id="hd_content" name="content" type="text/plain"><?php echo $data['content'];?></script>
        <script type='text/javascript'>
        $(function(){
                var ue = UE.getEditor('hd_content',{
                serverUrl:'http://localhost/11/1101?m=Admin&c=Content&aid=25&a=ueditor_upload&water='//图片上传脚本
                ,zIndex : 1000
                ,initialFrameWidth:"100%" //宽度1000
                ,catchRemoteImageEnable:false//关闭远程图片自动保存到本地
                ,initialFrameHeight:"300" //宽度1000
                ,imagePath:''//图片修正地址
                ,autoHeightEnabled:false //是否自动长高,默认true
                ,autoFloatEnabled:false //是否保持toolbar的位置不动,默认true
                ,toolbars:[
            ['fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat', 'formatmatch', 'autotypeset',
            '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', '|',
            'lineheight', '|','paragraph', 'fontfamily', 'fontsize', '|',
             'indent','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
            'link', 'unlink', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'insertimage', 'emotion',   'map',  'insertcode',  'pagebreak','horizontal', '|',
            'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow',  'insertcol',  'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols']
            ]//工具按钮
                ,enableAutoSave: false//关闭自动保存
                ,initialStyle:'p{line-height:1em; font-size: 14px; }'
            });
        })
        </script>
        						</td>
        					</tr>
    				    </table>
                    </div>
                    <div id="other">
                        <table class='table1'>
        					<tr>
        						<th class='w100'>发表时间</th>
        						<td>
        							<input type="text" readonly="readonly" id="addtime" name="addtime"value="<?php echo date('Y/m/d h:i:s',$data['addtime']);?>"class="w150"/>
                                    <script>
                                    	$('#addtime').calendar({format: 'yyyy/MM/dd HH:mm:ss'});
                                     </script>
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
        						<th>点击数</th>
        						<td>
        							<input type="text" name='click' value='100' class='w200' value="<?php echo $data['click'];?>"/>
        						</td>
        					</tr>
                        </table>
                    </div>
                </div>
            </div>
			<div class='position-bottom'>
				<input type="submit" class='hd-success' >
			</div>
    	</form>
    </div>
    	<script type="text/javascript" src="http://localhost/11/1101/NQCMS/Admin/View/Content/Js/js.js"></script>
    </body>
</html>