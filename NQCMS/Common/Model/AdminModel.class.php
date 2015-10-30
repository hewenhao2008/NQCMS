<?php
	class AdminModel extends Model{
		public $table='Admin';
		//检测用户登录
		public function check($data){
			if(empty($data['username'])){
				$this->error='请输入用户';
				return false;
			}
			if(empty($data['password'])){
				$this->error='请输入密码';
				return false;
			}
			if(empty($data['code'])){
				$this->error='请输入验证码';
				return false;
			}
			if(strtoupper($data['code'])!=$_SESSION['code']){
				$this->error='验证码输入错误';
				return false;
			}
			$userdata=$this->where("username='{$data['username']}'")->find();
			if(empty($userdata)){
				$this->error='管理员账号不存在';
				return false;
			}
			if($userdata['password']!=md5($data['password'].$userdata['code'])){
				$this->error='密码输入错误';
				return false;
			}
			$_SESSION['uid']=$userdata['uid'];
			$_SESSION['username']=$userdata['username'];
			return true;
		}

	}




?>