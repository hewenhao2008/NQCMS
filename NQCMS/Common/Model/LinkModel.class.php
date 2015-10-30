<?php
//友情链接模型
	class LinkModel extends Model{
		public $table='link';
		//自动完成
		public $auto=array(
			array('thumb','_autoThumb','method',2,3)
			);
		//自动完成缩略
		public function _autoThumb($v){
			if(empty($v)) return $v;
			$v=current($v);
			P($v);
			return $v['path'];
		}
		//获得所有连接
		public function getAll(){
			return $this->order("lid asc")->all();
		}
		//添加链接
		public function addLink(){
			if($this->create()){
				if(substr($_POST['url'],0,7)!='http://'){
					$_POST['url']='http://'.$_POST['url'];
				}
				if($this->add($_POST)){
					return true;
				}else{
					$this->error='添加友情链接失败';
				}
			}
			
		}
		//编辑友情链接
		public function editLink(){
			$lid=Q('lid');
			if($this->create()){
				if($this->where("lid=$lid")->update($_POST)){
					return true;
				}else{
					$this->error='编辑友情链接失败';
				}
			}
			
		}
		//删除友情链接
		public function deleteLink(){
			$lid=Q('lid');
			if($this->where("lid=$lid")->del()){
				return true;
			}else{
				$this->error='删除友情链接失败';
			}
		}
	}



?>