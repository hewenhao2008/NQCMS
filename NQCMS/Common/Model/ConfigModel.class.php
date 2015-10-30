<?php

//配置项模型
class ConfigModel extends Model{
	public $table='config';
	//更新配置
	public function updateConfig(){
		// P($_POST);exit;
		foreach ($_POST as $name => $value) {
			$data['value']=$value;
			if(!$this->where("name='$name'")->save($data)){
				$this->error='更新配置项失败';
				return false;
			}
		}
		return $this->createConfigFile();
	}
	//设置模板风格
	public function setTplStyle(){
		$dir=Q('dir');//通过post将模板名称传过来
		M('config')->where("name='WEBSTYLE'")->save(array('value'=>$dir));
		return $this->createConfigFile();
	}
	//向配置项文件中写入配置
	public function createConfigFile(){
			$config=$this->getField('name,value');
			$data="<?php \nreturn ".var_export($config,true).";\n?>";
			return file_put_contents(APP_CONFIG_PATH.'base.php',$data);
	} 


	//获得所有配置项
	public function getAll(){
		$config=$this->all();//获得所有配置项数据
		// P($config);
		foreach ($config as $id => $value) {
			$func='_'.$value['type'];//自定义表单类型函数
			$config[$id]['_html']=$this->$func($value);
		}
		return $config;
	}
	//text表单函数
	public function _text($config){
		return "<input type='text' name='{$config['name']}' value='{$config['value']}'/>";
	}
	//radio表单函数
	public function _radio($config){
		$radio=explode(',', $config['info']);//拆分 $info[0]=1|是;$info[1]=0|否
		// P($radio);
		$html='';
		foreach ($radio as $id => $v) {
			$info=explode('|', $v);
			$checked=$config['value']==$info[0]?"checked=''":'';
			$html.="<lable><input type='radio' name='{$config['name']}' $checked value='{$info[0]}'/>&nbsp&nbsp{$info[1]}</lable>&nbsp&nbsp&nbsp&nbsp";
		}
		return $html;
	}
	public function _textarea($config){
		return "<textarea name='{$config['name']}'>{$config['value']}</textarea>";
	}
}


?>