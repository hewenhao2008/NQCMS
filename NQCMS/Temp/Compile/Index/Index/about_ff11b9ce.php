<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>
<!doctype html>
<html>
<head>
<meta charset="utf8">
<title>公司简介</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link href="http://localhost/11/1101/Template/default/css/main.css" rel="stylesheet" type="text/css">
<script src="http://localhost/11/1101/Template/default/js/jquery.min.1.8.2.js"></script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a.js"></script>
<script type="text/javascript">DD_belatedPNG.fix('*');</script>
<![endif]-->
</head>
<body>
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><div id="top">
	<div class="warp clearfix">
		<div class="logo"><a href="http://www.cssmoban.com"><img src="http://localhost/11/1101/Template/default/images/logo.png"></a></div>
		<ul class="nav clearfix">
		    <li class="shouye">
				<a href="<?php echo U('Index/index');?>" title="首页"><span>首页</span></a>
			</li>
			<li onMouseOver="$('.nav .bg1 span').addClass('cur');" onMouseOut="$('.nav .bg1 span').removeClass('cur');">
			<a href="<?php echo U('about',array('aid'=>'24','cid'=>'3'));?>" title="公司简介" class="bg1" ><span>公司简介</span></a>
			</li>
			<li onMouseOver="$('.nav .bg3 span').addClass('cur');" onMouseOut="$('.nav .bg3 span').removeClass('cur');">
			<a href="<?php echo U('category',array('cid'=>'2'));?>" title="新闻资讯" class="bg3" ><span>新闻资讯</span></a>
			</li>
			<li onMouseOver="$('.nav .bg6 span').addClass('cur');" onMouseOut="$('.nav .bg6 span').removeClass('cur');">
			<a href="<?php echo U('content',array('aid'=>25,'cid'=>8));?>" title="联系我们" class="bg6" ><span>联系我们</span></a>
			</li>
		</ul>
	</div>
	<div class="subnav">
	</div>
</div>;
<div id="banner_inner">
	<div style="background-image:url(http://localhost/11/1101/Template/default/images/banner_inner.jpg);">　</div>
	<div class="warp">
		<h2><a href="/gongsijianjie">关于我们<br><span>About us</span></a></h2>
	</div>
</div>
<div class="warp clearfix">
	<div class="c_l">
	<dl class="left_nav">					
						<?php
					$cid=$_GET['cid'];
					$type='son';
					$db=M('category');
					switch ($type) {
						//获得同级栏目
						case 'self':
							$categorydata=$db->where("cid in (".$cid.")")->all();
							break;
						// 获得子级栏目
						case 'son':
							$categorydata=$db->where("pid in (".$cid.")")->all();
							break;
					}
					foreach ($categorydata as  $field):
						$field['url']=getCategoryUrl($field);	
				?>			
			<dt><a href="<?php echo $field['caturl'];?>" title="<?php echo $field['catname'];?>"><?php echo $field['catname'];?></a></dt>
		<?php endforeach;?>		
	</dl>
		<ul class="list_left_btn">
			<li><a href="<?php echo U('Index/Index/category',array('cid'=>2));?>"><img src="http://localhost/11/1101/Template/default/images/btn_products.jpg"></a></li>
			<li><a href="<?php echo U('Index/Index/content',array('aid'=>25));?>"><img src="http://localhost/11/1101/Template/default/images/btn_contact.jpg"></a></li>
			<li><img src="http://localhost/11/1101/Template/default/images/btn_rexian.jpg"></li>
		</ul>
		<div class="list_left">
			<p class="title">重点推荐</p>
			<ul>
								<?php
					$aid=$_GET['aid'];
					$row=4;
					$len=15;
					$db=K('Content');
					//获得当前文章的文章内容
					$data=$db->find($aid);
					//获得与当前文章属同一栏目的文章
					$contentdata=$db->where("cc.cid=".$data['cid'])->all();
					foreach ($contentdata as  $field):
						//为该标题提供文章连接
						$field['url']=getContentUrl($field);
						//截取固定文章标题的长度
						$field['title']=mb_substr($field['title'],0,$len,'utf-8');
				?>
				<li><a href="<?php echo $field['url'];?>">·<?php echo $field['title'];?></a></li>
				<?php endforeach;?>

			</ul>
		</div>
	</div>
	<div class="c_r">
		<div class="pos2">
			<p><a href="<?php echo U('Index/Index');?>">首页</a> > <a href="<?php echo U('Index/Index/about',array('aid'=>24));?>">公司简介</a></p>
		</div>
		<h1 class="dis_title"><?php echo $data['title'];?></h1>
		<div class="dis_content2">
			<?php echo $data['content'];?>　　
		</div>
	</div>
</div>
<div id="footer">
	<div class="warp">
		<p>合肥宝尼尔电器有限公司：专业的<a href="http://www.cssmoban.com">冷柜</a>、<a href="http://www.cssmoban.com">冷藏柜</a>、<a href="http://www.cssmoban.com">保鲜柜</a>、<a href="http://www.cssmoban.com">展示柜</a>、<a href="http://www.cssmoban.com">超市陈列柜</a>等产品供应商。&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<p>业务一部：0592-123456789 / 0592-123456789&nbsp;&nbsp;&nbsp;&nbsp;	业务二部：0592-123456789 / 0592-123456789  </p>
		<p>业务三部：0592-123456789 / 0592-123456789&nbsp;&nbsp;&nbsp;&nbsp;	业务四部：0592-123456789 / 0592-123456789  </p>

	</div>
</div>


</body>
</html>
