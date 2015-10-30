<?php
	class IndexController extends Controller{
		public function __init(){
			// define('MODUEL_PATH',__ROOT__.'/Install/')
			//有lock.php文件就不能安装
			if(is_file(MODULE_PATH.'lock.php')){
				$this->display();
			}
		}
		//显示安装界面首页--版权信息
		public function install(){
			$this->display();
		}
		//对数据库配置进行设置
		public function setDb(){
			$this->display();
		}
		//安装数据
		public function insertSql(){
			$status=mysql_connect($_POST['DB_HOST'],$_POST['DB_USER'],$_POST['DB_PASSWORD']);
			if(!$status){
				$this->error('主机连接失败','setDb');
			}
			if(!mysql_select_db($_POST['DB_DATABASE'])){
				$this->error('连接数据库失败','setDb');
			}
			//更新C函数的记录的网站配置
			C($_POST);
			$db=M();
			$db_prefix='hd_';//后缀
			//执行创建表结构的sql文件
			require MODULE_PATH.'Sql/structure.php';
			//遍历Sql目录
			$files=Dir::tree(MODULE_PATH.'Sql');
			foreach ($files as  $file) {
				if(substr($file['filename'],0,3)=='hd_'){
					require $file['path'];
					P($file['path']);
				}
			}
			//更新管理员信息
			$code=md5(mt_rand(1,1000).time());
			$data['uid']=1;
			// P($_POST);exit;
			$data['username']=$_POST['username'];
			$data['password']=md5($_POST['password'].$code);
			$db->table('hd_admin')->save($data);
			//更新配置项
			$config="<?php \nreturn ".var_export($_POST,true).";?>";
			file_put_contents(APP_CONFIG_PATH.'db.inc.php',$config);
			go('finish');//跳转到finish.html
		}
		//安装完成
		public function finish(){
			$this->display();
			touch(MODULE_PATH.'lock.php');

		}
	}




?>