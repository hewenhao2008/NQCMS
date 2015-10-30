<?php
//用户模型
	class UserModel extends Model{
		public $table='admin';
		//获得管理员信息
		public function getAll(){
			return $this->order("uid")->all();
		}
		//添加用户
		public function addUser(){
			if($this->create()){
				if($_POST['password']!=$_POST['repassword']){
					$this->error='两次输入的密码不一致';
				}else{
					//管理员令牌
					$_POST['code']=md5(mt_rand(1,1000).time());
					$_POST['password']=md5($_POST['password'].$_POST['code']);
					if($this->insert($_POST)){
						return true;
					}else{
						$this->error='添加用户失败';
					}
				}	
			}
		}
		//编辑用户信息
		public function editUser(){
			$uid=Q('uid',0,'intval');
			if($this->create()){
				$_POST['password']=md5($_POST['password']);
				unset($_POST['newpassword']);
				unset($_POST['oldpassword']);
				if($this->where("uid=$uid")->save($_POST)){
					return true;
				}else{
					$this->error='修改密码失败';
				}
			}
		}
		//删除管理员
		public function deleteUser(){
			$uid=Q('uid',0,'intval');
			if($this->where("uid=$uid")->del()){
				return true;
			}else{
				$this->error='删除管理员失败';
			}
		}
	}



?>