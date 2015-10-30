<?php
	//友情链接控制器
	class LinkController extends AuthController{
		private $db;
		public function __init(){
			$this->db=K('link');
		}
		//友情链接列表
		public  function index(){
			$data=$this->db->getAll();
			$this->assign('data',$data);
			$this->display();
		}
		//添加友情链接
		public function add(){
			if(IS_POST){
				if($this->db->addLink()){
					$this->success('添加链接成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				$this->display();
			}
		}
		//编辑友情链接
		public function edit(){
			if(IS_POST){
				if($this->db->editLink()){
					$this->success('添加链接成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				//获得要编辑的lid
				$lid=Q('lid');
				//获得要编辑链接的数据
				$data=$this->db->where("lid=$lid")->find();
				$this->assign('data',$data);
				$this->display();
			}
		}
		public function delete(){
			if($this->db->deleteLink()){
				$this->success('删除友情链接成功');
			}else{
				$this->error($this->db->error);
			}
		}
	}



?>