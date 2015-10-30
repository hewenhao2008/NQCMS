<?php
//文章管理控制器
	class ContentController extends AuthController{
		private $db;
		public function __init(){
			$this->db=K('Content');
		}

		//获得所有文章
		public function index(){
			$data=$this->db->getAll();
			//分配文章数据
			$this->assign('data',$data);
			$this->display();
		}
		//添加文章
		public function add(){
			if(IS_POST){
				if($this->db->addArticle()){
					$this->success('添加文章成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				//调用栏目数据
				$category=M('Category')->all();
				$this->assign('category',$category);
				//显示添加页面
				$this->display();
			}
		}
		//编辑文章
		public function edit(){
			if(IS_POST){
				if($this->db->editArticle()){
					$this->success('修改文章成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				//调用当前文章数据
					$aid=Q('aid');
					$data=$this->db->field('*,cc.keywords,cc.description')->where("cc.aid=$aid")->find();
					//缩略图数据
					$data['thumb']=array(
							array('alt'=>'','path'=>$data['thumb'])
						);
					//调用栏目数据
					$categorydata=M('category')->all();
					foreach ($categorydata as $id => $cat) {
						//给当前页面一个selected属性
						$categorydata[$id]['selected']=$cat['cid']==$data['cid']?"selected=''":'';
					}
					//分配文章数据
					$this->assign('data',$data);
					//分配栏目数据
					$this->assign('categorydata',$categorydata);
					$this->display();
			}
		}
		public function delete(){
			if($this->db->deleteArticle()){
				$this->success('删除成功');
			}else{
				$this->error($this->db->error);
			}
		}
	}





?>