<?php
	//模板
	class TplStyleController extends AuthController{
		public function index(){
			$dirs=Dir::tree('Template');//遍历文件夹Template
			
			foreach ($dirs as $id => $dir) {
				//模板风格预览图不存在或模板配置文件不存在
				if(!is_file($dir['path'].'config.xml')||!is_file($dir['path'].'pre.jpg'))
					continue;
				//当current为1时为选中模板
				$dirs[$id]['current']=$dir['filename']==C('WEBSTYLE')?1:0;
				//压入预览图
				$dirs[$id]['image']=__ROOT__.'/Template/'.$dir['filename'].'/pre.jpg';
				//压入配置,将Xml文件存储的数据转为标准数组
				$dirs[$id]['config']=Xml::toArray(file_get_contents($dir['path'].'config.xml'));
			}
			// P($dirs);exit;
			$this->assign('dirs',$dirs);
			$this->display();
		}
		public function set(){
			$db=K('Config');//实例化一个ConfigModel对象
			if($db->setTplStyle()){
				$this->success('模板设置成功');
			}else{
				$this->error($db->error);
			}
		}

	}





?>