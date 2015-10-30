<?php
//文章管理模型
//ViewModel它是用于多表关联，是继承Model的类
	class ContentModel extends ViewModel{
		public $table='content';//文章表
		//关联文章表和栏目表
		public $view=array(
			'content'=>array('_type'=>'INNER','_as'=>'cc'),
			'category'=>array('_on'=>'cc.cid=category.cid')
			);
		//自动完成对表单的验证
		public $auto=array(
			//将表单中的时间转换为时间戳并且进行验证
				array('addtime','strtotime','function',2,3 ),
			//自动完成缩略图
				array('thumb','_autoThumb','method',2,3)
			);
		//自动完成缩略图
		public function _autoThumb($v){
			if(empty($v)) return $v;
			$v=current($v);//取当前数据
			return $v['path'];//缩略图路径
		}
		//获得所有文章
		public function getAll(){
			$count=$this->count();//获得文章的总条数
			//分页，没也显示10条
			$page=new Page($count,10);
			$data=$this->order("aid desc")->limit($page->limit())->all();//获取每页显示文章数据
			return array('data'=>$data,'page'=>$page->show());
		}
		//添加文章
		public function addArticle(){
			if($this->create()){
				if($this->add()){
					return true;
				}else{
					$this->error='添加文章失败';
				}
			}
		}
		//编辑文章
		public function editArticle(){
			$aid=Q('aid');
			if($this->create()){
				if($this->where("aid=$aid")->save()){
					return true;
				}else{
					$this->error='修改文章失败';
				}
			}
		}
		//删除文章
		public function deleteArticle(){
			$aid=Q('aid');
			$data=$this->where("aid=$aid")->find();
			//删除文章前删除上传的缩略图
			is_file($data['thumb']) and unlink($data['thumb']);
			if($this->where("aid=$aid")->del()){
				return true;
			}else{
				$this->error='删除文章失败';
			}
		}
	}




?>