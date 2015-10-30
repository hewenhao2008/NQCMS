<?php
	class AuthController extends Controller{
		public function __construct(){
			parent::__construct();
			if(empty($_SESSION['uid'])){
				$this->error('请登录后再操作。。。',U('Admin/Login/login'));
				
			}
		}


	}




?>