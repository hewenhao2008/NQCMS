<?php
	//栏目模型
	class CategoryModel extends Model{
		public $table='category';//栏目表
		//获得栏目列表
		public function getAll(){
			$data=$this->all();//获取所有栏目
			return Data::tree($data,'catname','cid','pid');
		}
		//添加栏目
		public function addcategory(){
			//create()自动检测
			if($this->create()){
				if($this->add()){
					return true;
				}else{
					$this->error='添加栏目失败';
				}
			}
		}
		//修改栏目
		public function editcategroy(){
			$cid=Q('cid',0,'intval');
			if($this->create()){
				if($this->where("cid=$cid")->save()){
					return true;
				}else{
					$this->error='修改栏目失败';
				}
			}
		}
		//删除栏目
		public function deletecategory(){
			$cid=Q('cid',0,'intval');
			//获得该栏目的子栏目
			$childcategory=Data::channelList($this->all(),$cid);
			//获得所有子栏目的cid
			$allcid=array_keys($childcategory);
			// 压入当前栏目的cid
			$allcid[]=$cid;
			//$map['cid']
			$map['cid']=array('IN',$allcid);
			// P($map);exit;
			//删除该栏目下的文章
			M('content')->where($map)->del();
			//删除栏目
			return $this->where($map)->del();
		}
	}




?>