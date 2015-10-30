<?php
//配置控制器
	class ConfigController extends AuthController{
		private $db;
		public function __init(){
			$this->db=K('Config');//实例化一个ConfigModel对象
		}
		//设置配置项
		public function set(){
			if(IS_POST){
				if($this->db->updateConfig()){
					$this->success('更新配置项成功');
				}else{
					$this->error($this->db->error);
				}
			}else{
				$data=$this->db->getAll();
				$this->assign('data',$data);
				$this->display();
			}
			
		}
		

	}




?>