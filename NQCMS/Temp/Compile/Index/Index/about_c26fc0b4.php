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
</div>