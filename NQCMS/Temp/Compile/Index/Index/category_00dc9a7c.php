<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!doctype html>
<html>
<head>
<meta charset="utf8">
<title>新闻资讯</title>
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
		<h2><a href="#"><?php echo $cms['catname'];?><br><span>News information</span></a></h2>
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
					<dt><a href="<?php echo $field['url'];?>" title="<?php echo $field['catname'];?>"><?php echo $field['catname'];?></a></dt>		
				<?php endforeach;?>
		</dl>
		<ul class="list_left_btn">
			<li><a href="<?php echo U('Index/Index/category',array('cid'=>2));?>"><img src="http://localhost/11/1101/Template/default/images/btn_products.jpg"></a></li>
			<li><a href="<?php echo U('Index/Index/content',array('aid'=>25,'cid'=>8));?>"><img src="http://localhost/11/1101/Template/default/images/btn_contact.jpg"></a></li>
			<li><img src="http://localhost/11/1101/Template/default/images/btn_rexian.jpg"></li>
		</ul>
		<div class="list_left">
			<p class="title">重点推荐</p>
			<ul>
			<relativelist cid="<?php echo $_GET['cid'];?>" row="4" >
				<li><a href="<?php echo $field['url'];?>">·<?php echo $field['title'];?></a></li>
			</relativelist >	
				<!-- <li><a href="content.html">·临汾水果柜/不同食品的最佳存</a></li> -->
			</ul>
		</div>
	</div>
	<div class="c_r">
		<div class="pos">
			<h2><?php echo $cms['catname'];?></h2>
			<p> <a href="<?php echo U('Index/Index/index');?>">首页</a> > <a href="<?php echo U('Index/Index/category',array('cid'=>$parentcatedata['cid']));?>">新闻资讯</a> > </p>
		</div>
		<div class="list_news">
					<?php
				$cid=$_GET['cid'];
				$row=5;
				$len=120;
				//对栏目表进行操作
				$db=M('category');
				//找到当前栏目下所有的子栏目
				$allCid=Data::channelList($db->all(),$cid);
				//获得所有子栏目cid
				$data=array_keys($allCid);
				//压入当前栏目的cid
				$data[]=$cid;
				//对文章表进行操作
				$cdb=K('Content');
				//条件是当前cid下所有子栏目的新闻都列出来
				$page=new Page($cdb->where("cc.cid in (".implode(',', $data).")")->count(),$row);
				$contentdata=$cdb->where("cc.cid in (".implode(',', $data).")")->limit($page->limit())->all();
				//为每一篇文章存入一个路径
				foreach($contentdata as  $field):
					$field['url']=getContentUrl($field);
					//截取文章的字数
					$field['content']=mb_substr($field['content'],0,$len,'utf-8');
			?>
		<dl class="clearfix">
				<dt><?php echo date('d',$field['addtime']);?><span><?php echo date('Y-m',$field['addtime']);?></span></dt>
				<dd>
					<h2><a href="<?php echo $field['url'];?>"><b><?php echo $field['title'];?></b></a></h2>
					<p class="intro"><?php echo $field['content'];?>... </p>
					<p class="btn_more"><a href="<?php echo $field['url'];?>"><img src="http://localhost/11/1101/Template/default/images/btn_right_more.jpg"></a></p>
				</dd>
		</dl>
		<?php endforeach;?>

		</div>
		<div class="pages"> 
		<!-- 分页 -->
			<?php echo $page->show();?>

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
