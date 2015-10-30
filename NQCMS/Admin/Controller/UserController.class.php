<?php
//用户管理控制器
	class UserController extends AuthController{
		private $db;
		public function __init(){
			$this->db=K('User');
		}
		//用户列表
		public function index(){
			$data=$this->db->getAll();
			$this->assign('data',$data);
			$this->display();
		}
		//添加管理员
		public function add(){
			if(IS_POST){
				
				if($this->db->addUser($_POST)){
					$this->success('添加管理员成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				$this->display();
			}
		}
		//修改管理员信息
		public function edit(){
			if(IS_POST){
				if($this->db->editUser($_POST)){
					$this->success('修改管理员信息信息成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				$uid=Q('uid',0,'intval');
				$data=$this->db->where("uid=$uid")->find();
				$this->assign('data',$data);
				$this->display();
			}
		}
		//删除管理员信息
		public function delete(){
			if($this->db->deleteUser()){
				$this->success('删除管理员信息成功');
			}else{
				$this->error($this->db->error);
			}
		}
	}




?>