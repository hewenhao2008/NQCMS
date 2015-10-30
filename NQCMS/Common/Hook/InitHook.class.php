<?php
	class InitHook{
		//判断该网站系统是否已安装在本地，没有安装就进行安装操作
		public function run(){
			if(Q('m')!='Install' && !is_file('NQCMS/Install/lock.php')){
				go('Install/Index/install');
			}
		} 
	}


?>