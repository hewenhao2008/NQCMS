<?php
//测试控制器类
class IndexController extends Controller{
    //动作方法
    public function __init(){
        //定义模板路径常量
        define('__TPL_PATH__',__ROOT__.'/Template/'.C('WEBSTYLE'));
        // p(TPL_PATH);
    	//网站关闭时显示的页面
    	if(!C('WEBSTATUS')){
    		$this->display('web_close');
    		exit;
    	}
    }
    //网站首页
    public function index(){
        //显示视图
        $this->display("Template/".C('WEBSTYLE').'/index.html');
    }
    //关于公司
    public function about(){
        $db=K('Content');
        $aid=Q('aid',0,'intval');
        $data=$db->where("aid=$aid")->find();
        // P($data);
        $this->assign('data',$data);
         $this->display("Template/".C('WEBSTYLE').'/about.html');
    }
    //显示列表页
    public function category(){
        $cid=Q('cid',0,'intval');
        $db=M('category');
        $data=$db->where("cid=$cid")->find();
        //获得父级栏目
        $parentcatedata=$db->where("cid={$data['pid']}")->find();
        if(empty($data)){
            $this->error("该栏目不存在",__ROOT__);
        }
        $this->assign('parentcatedata',$parentcatedata);
        $this->assign('cms',$data);
        $this->display('Template/'.C('WEBSTYLE').'/'.$data['list_tpl']);
    }
    //详情页
    public function content(){
        $aid=Q('aid',0,'intval');
        //实例化一个Content模型对象想
        $db=K('Content');

        $data=$db->where("aid=$aid")->find();
        //父级栏目
        $parentcatedata=M('category')->where("cid={$data['pid']}")->find();
        if(empty($data)){
            $this->error("该文章不存在",__ROOT__);
        }
        // 分配栏目数据
        $this->assign('parentcatedata',$parentcatedata);   
        // 分配文章数据   
        $this->assign('cms',$data);
        $this->assign('url',$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI']);
         $this->display('Template/'.C('WEBSTYLE').'/'.$data['content_tpl']);
    }
    
}
