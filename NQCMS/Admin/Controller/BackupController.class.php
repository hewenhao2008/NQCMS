<?php
//数据备份
	class BackupController extends AuthController{
		//显示列表
		public function index(){
			$this->display();
		}
		//数据备份
		public function backup(){
			$result=Backup::backup(array(
				'size'=>200,//每卷大小
				'dir'=>C("DB_BACKUP").date("Ymdhsi")
				)
			);
			if($result['status']=='success'){
				$this->success($result['message'],U('index'));
			}else{
				$this->success($result['message'],$result['url'],0.2);//每个0.2秒备份一次
			}
		}
		//备份列表
		public function backlist(){
			$dirs=Dir::tree('Backup');//遍历文件夹Backup
			// P($dirs);
			$this->assign('dirs',$dirs);
			$this->display();
		}
		//还原数据
		public function recovery(){
			$dir=C('DB_BACKUP').Q("dir");
			$result=Backup::recovery(array('dir'=>$dir));
			// P($result);
			if($result['status']=='success'){
				$this->success($result['message'],U('index'));
			}else{
				$this->success($result['message'],$result['url'],0.2);
			}
		}
		//数据删除
		public function delete(){
			//获得当前要删除的问件目录
			$dir=C('DB_BACKUP').Q('dir');
			//删除数据备份文件
			$status=Dir::del($dir);
			if($status){
				$this->success('删除备份数据成功');
			}else{
				$this->error('删除备份数据失败');
			}
			
		}
	}



?>