<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>
<!doctype html>
<html>
<head>
<meta charset="utf8">
<title><?php echo $cms['title'];?></title>
<meta http-equiv="keywords" content="超市,冷柜,直冷,式,和,风冷,独具一格,冷柜,也,"/>
<meta http-equiv="description" content="冷柜也分直冷和风冷，那么超市冷柜直冷式和风冷式的区别在哪里呢？小编告诉你直冷式就类似您家里用的冰箱，靠冰箱内壁的铜管制冷；而风冷的类似您家里的空调，靠吹出的冷风制冷。 直"/>
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
		<!-- 栏目列表 -->
						<?php
					$aid=$_GET['aid'];
					$type='slef';
					$data=K('Content')->where("aid=".$aid)->find();
					switch ($type) {
						//获得同级栏目
						case 'self':
							$categorydata=M('category')->where("cid in (".$data['cid'].")")->all();
							break;
						// 获得子级栏目
						case 'son':
							$categorydata=M('category')->where("pid in (".$data['cid'].")")->all();
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
								<?php
					$aid=$_GET['aid'];
					$row=3;
					$len=10;
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
				<li><a href="<?php echo $field['url'];?>">.<?php echo $field['title'];?></a></li>
				<?php endforeach;?>
				
			</ul>
		</div>
	</div>
	<div class="c_r">
		<div class="pos2">
			<p><a href='<?php echo U('Index/Index/index');?>'>首页</a> > <a href="<?php echo U('Index/Index/category',array('cid'=>$parentcatedata['cid']));?>"><?php echo $parentcatedata['catname'];?></a> > <a href="<?php echo U('Index/Index/category',array('cid'=>$cms['cid']));?>"><?php echo $cms['catname'];?></a> > <?php echo $cms['title'];?></p>
		</div>
		<h1 class="dis_title"><?php echo $cms['title'];?></h1>
		<div class="dis_time">来源：http://www.cssmoban.com&nbsp;&nbsp;&nbsp;&nbsp; 时间：<?php echo date('Y-m-d H:i',$cms['addtime']);?>&nbsp;&nbsp;&nbsp;&nbsp;浏览数：<?php echo $cms['click'];?><script src="/plus/count.php?view=yes&aid=284&mid=1"type='text/javascript' language="javascript"></script></div>
		<!-- <div class="dis_intro"></div> -->
		<div class="dis_content">
			<?php echo $cms['content'];?>
			<p>文章地址：<a href=""><?php echo $url;?></a></p>
			
		</div>
		<div class="dis_prevnext clearfix">
			<p class="left">上一篇：
								<?php
					$aid=$_GET['aid'];
					// p($aid);
					$db=K('Content');
					//获得当前文章的文章内容
					$data=$db->find($aid);
					//获得与当前文章属同一栏目的文章
					$contentdata=$db->where("cc.cid=".$data['cid']." and aid<".$aid)->order("aid desc")->find();
					if(empty($contentdata)){
						$field['title']='没有了';
					}else{
						$field['title']=$contentdata['title'];
						$field['url']=getContentUrl($contentdata);
					}
				?>
				<a href='<?php echo $field['url'];?>'><?php echo $field['title'];?></a>
				 
			</p>
			<p class="right">下一篇：
								<?php
					$aid=$_GET['aid'];
					$db=K('Content');
					//获得当前文章的文章内容
					$data=$db->find($aid);
					// p($data);
					//获得与当前文章属同一栏目的文章
					$contentdata=$db->where("cc.cid=".$data['cid']."  and aid>".$aid)->order("aid desc")->find();
					// p($contentdata);
					if(empty($contentdata)){
						$field['title']='没有了';
					}else{
						$field['title']=$contentdata['title'];
						$field['url']=getContentUrl($contentdata);
					}
				?>
				<a href='<?php echo $field['url'];?>'><?php echo $field['title'];?></a>
				 
			</p>
		</div>
		<p class="dis_block_title">您可能还需要了解</p>
		<div class="list_liaojie clearfix">
			<ul>
			<li><a href="/xianrougui/176.html"><img src="/uploads/allimg/130304/1-1303041051160-L.jpg" alt="XRG-K2鲜肉柜"></a></li>
<li><a href="/fengmugui/43.html"><img src="/uploads/allimg/130223/1-130223150T20-L.jpg" alt="LFG-13A 风幕柜"></a></li>
<li><a href="/dangaogui/91.html"><img src="/uploads/allimg/130226/1-130226201R20-L.jpg" alt="13CWG 常温蛋糕柜"></a></li>
<li><a href="/shucaishuiguogui/193.html"><img src="/uploads/130304/1-130304153113A2.jpg" alt="LFG-13A 蔬菜水果保鲜柜"></a></li>

			</ul>
		</div>
		<p class="dis_block_title">相关<?php echo $cms['catname'];?></p>
		<ul class="list_xiangguan clearfix">
							<?php
					$aid=$_GET['aid'];
					$row=4;
					$db=K('Content');
					//获得当前文章信息(传来是aid)
					$data=$db->where("aid=".$aid)->find();
					//获得当前文章同属栏目下的4篇文章
					$contentdata=$db->where("cc.cid=".$data['cid']." and aid<>".$aid )->limit($row)->all();
					foreach ($contentdata as  $field):
						//为每篇文章分配链接
						$field['url']=getContentUrl($field);
				?>
				<li>
					<a href="<?php echo $field['url'];?>">·<?php echo $field['title'];?></a>
				</li>
			<?php endforeach;?>
			
		</ul>
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