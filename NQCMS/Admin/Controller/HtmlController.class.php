<?php
//生成静态页面
	class HtmlController extends AuthController{
		public function __init(){
			//定义静态路径
			define('__TPL_PATH__',__ROOT__.'/Template/'.C('WEBSTYLE'));
		}
		//首页静态页面
		public function createIndex(){
			//生成静态原理分析...
			// ob_start();
			// $this->display('template/default/index.html');
			// $html = ob_get_clean();
			// file_put_contents('index.html',$html);
			if(IS_POST){
				//首页静态页面化开始执行
				$status=$this->createHtml('index.html','./','Template/'.C('WEBSTYLE').'/index.html');
				if($status){
					$this->success('生成静态完毕','createindex');
				}else{
					$this->error('生成静态失败','createindex');
				}
			}else{
				$this->display();
			}
		}
		//栏目静态
		public function createCategory(){
			if(IS_POST){
				//获得栏目数据
				$categorydata=M('category')->all();
				foreach ($categorydata as  $cat) {
					//便于通过这种方式Q('cid')请求cid 
					$_REQUEST['cid']=$_GET['cid']=$cat['cid'];
					//设置存储栏目静态页面的目录
					$htmlDir='Html/'.$cat['html_dir'].'/';
					//向视图分配栏目数据
					$this->assign('cms',$cat);
					//实现栏目静态
					$this->createHtml('index.html',$htmlDir,'Template/'.C('WEBSTYLE').'/'.$cat['list_tpl']);
					//分页
					for($page=1;$page<=Page::$staticTotalPage;$page++){
						$_GET['page']=$page;//传页码
						//获得静态页面的路径
						Page::$staticUrl=__ROOT__.'/'.$htmlDir.'{page}.html';
						//实现栏目分页静态
						$this->createHtml($page.".html",$htmlDir,'Template/'.C('WEBSTYLE').'/'.$cat['list_tpl']);
					}
					// P(__TPL_PATH__);
					/**
			       * 生成index.html,没有办法设置Page::$staticUrl
			       * 造成页码链接不对,还是使用动态
			       * 但是1.html就没有问题
			       * 1.html就是index.html  1.html 覆盖index.html
			       */
			      copy($htmlDir.'1.html',$htmlDir.'index.html');
				}
				$this->success('生成静态完毕','createCategory');
			}else{
				$this->display('createIndex.html');
			}

		}
		//内容页静态化
		public function createContent(){
			if(IS_POST){
				$db=K('Content');
				//获得内容数据
				$contentdata=$db->all();
				// P($contentdata);exit;
				foreach ($contentdata as  $con) {
					//便于通过这种方式Q('aid')请求aid 
					$_REQUEST['aid']=$_GET['aid']=$con['aid'];
					//向视图显示
					$this->assign('cms',$con);
					//生成文件名
					$search=array(
						'{y}','{m}','{d}','{"aid"}'
						);
					$time=getdate($con['addtime']);
					// P($time);
					$replace=array(
						$time['year'],//年
						$time['mon'],//月
						$time['mday'],//日
						$con['aid']//文章aid
						);
					//设置内容页的路径
					$file='Html/'.$con['html_dir'].'/'.str_replace($search,$replace, $con['arc_html_rule']);
					//开始实现内容页静态化
					$this->createHtml(basename($file),dirname($file),'Template/'.C('WEBSTYLE').'/'.$con['content_tpl']);
					$this->success('生成静态完毕','createContent');
				}
			}else{
				$this->display('createIndex.html');
			}
		}
	}




?>