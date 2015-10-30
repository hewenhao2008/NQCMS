<?php
//登录控制器
	class LoginController extends Controller{
		private $db;
		public function __init(){
			$this->db=K('Admin');
		}
		//管理员登录验证
		public function login(){
			if(IS_POST){
				if($this->db->check($_POST)){
					$this->success('登录成功','Index/index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				$this->display();
			}	
		}
		//验证码
		public function code(){
			$code=new Code;
			$code->show();
		}
		//退出
		public function out(){
			unset($_SESSION['uid']);
			unset($_SESSION['username']);
			$this->success('退出成功');
			go('login');
		}
	}




?>