<?php
//栏目管理控制器
	class CategoryController extends AuthController{
		private $db;//CategoryModel对象
		private $Catedata;//栏目数据
		public function __init(){
			$this->db=K('Category');
			//获得所有栏目数据
			$this->Catedata=$this->db->getAll();

		}
		//显示栏目
		public function index(){
			// echo 111;exit;
			$this->assign('Catedata',$this->Catedata);
			$this->display();
		}
		//添加栏目
		public function add(){
			if(IS_POST){
				if($this->db->addcategory()){
					$this->success('添加栏目成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				$this->assign('Catedata',$this->Catedata);
				$this->display();
			}
		}
		//添加子栏目
		public function addchild(){
			if(IS_POST){
				if($this->db->addcategory()){
					$this->success('添加栏目成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				$pid=Q('pid');
				//找到父级目录
				$data=$this->db->where("cid=$pid")->find();
				//获得所有目录
				$catedata=$this->Catedata;
				//给父级目录selected属性
				foreach ($catedata as $id => $cat) {
					$catedata[$id]['selected']=$cat['cid']==$data['cid']?"selected=''":'';
				}
				$this->assign('catedata',$catedata);
				$this->display();
			}
		}
		//编辑栏目
		public function edit(){
			if(IS_POST){
				if($this->db->editcategroy()){
					$this->success('修改栏目成功','index');
				}else{
					$this->error($this->db->error);
				}
			}else{
				$cid=Q('cid');
				//找到父级目录
				$data=$this->db->where("cid=$cid")->find();
				//获得所有目录
				$catedata=$this->Catedata;
				
				foreach ($catedata as $id => $cat) {
					//给父级目录selected属性
					$catedata[$id]['selected']=$cat['cid']==$data['pid']?"selected=''":'';
					//让父级和子级不能选
					$catedata[$id]['disabled']=Data::isChild($catedata,$cat['cid'],$data['pid']) || $cat['cid']==$data['pid']?"disabled=''":'';
				}
				$this->assign('catedata',$catedata);
				$this->assign('data',$data);
				$this->display();
			}
		}
		//删除栏目
		public function delete(){
			if($this->db->deletecategory()){
				$this->success('删除栏目成功');
			}else{
				$this->error($this->db->error);
			}	
		}

	}





?>