<?php

	class ContentTag{
		public $tag=array(
			//首页的栏目
			'arclist'=>array('block'=>1,'level'=>4),
			//用于内容页显示栏目
			'channel'=>array('block'=>1,'level'=>4),
			//用于列表页显示栏目
			'channellist'=>array('block'=>1,'level'=>4),
			//用于列表页显示文章列表
			'arccontent'=>array('block'=>1,'level'=>4),
			//用于内容页中重点推荐
			'recommend' =>array('block'=>1,'level'=>4),
			//用于内容页显示上一篇文章
			'prevarc'=>array('block'=>1,'level'=>4),
			//用于内容页显示下一篇文章
			'nextarc'=>array('block'=>1,'level'=>4),
			//用于内容页中显示相关文章
			'relativearc'=>array('block'=>1,'level'=>4),
			//用于列表页中显示相关文章
			'relativelist'=>array('block'=>1,'level'=>4),
			//用于友情链接
			'linkarc'=>array('block'=>1,'level'=>4),
			//分页
			'page'=>array('block'=>0,'level'=>4)
			);
		//用于首页文章
		public function _arclist($attr,$content){
			//接收cid
			$cid=isset($attr['cid'])?$attr['cid']:'';
			//获得文章的条数
			$row=isset($attr['row'])?$attr['row']:7;
			//获得文章标题的的长度
			$titlelen=isset($attr['titlelen'])?$attr['titlelen']:20;
			$php=<<<php
				<?php
					\$cid=$cid;
					\$row=$row;
					\$titlelen=$titlelen;
					//获得所有相同的cid文章
					\$data=K('Content')->where("cc.cid in (".\$cid.")")->order("addtime desc")->limit(\$row)->all();
					foreach (\$data as  \$field):
						\$field['url']=getContentUrl(\$field);
						\$field['title']=mb_substr(\$field['title'],0,\$titlelen,'utf-8');
				?>
php;
				$php.=$content;
				$php.="<?php endforeach;?>";
				return $php;
		}
		//用于内容页显示栏目
		public function _channel($attr,$content){
			//获得aid
			$aid=isset($attr['aid'])?$attr['aid']:'';
			//获得同级栏目还是子级栏目
			$type=isset($attr['type'])?$attr['type']:'self';
			$php=<<<php
				<?php
					\$aid=$aid;
					\$type='$type';
					\$data=K('Content')->where("aid=".\$aid)->find();
					switch (\$type) {
						//获得同级栏目
						case 'self':
							\$categorydata=M('category')->where("cid in (".\$data['cid'].")")->all();
							break;
						// 获得子级栏目
						case 'son':
							\$categorydata=M('category')->where("pid in (".\$data['cid'].")")->all();
							break;
					}
					foreach (\$categorydata as  \$field):
						\$field['url']=getCategoryUrl(\$field);	
				?>			
php;
			$php.=$content;
			$php.="<?php endforeach;?>";
			return $php;
		}
		//用于列表页显示栏目
		public function _channellist($attr,$content){
			//获得aid
			$cid=isset($attr['cid'])?$attr['cid']:'';
			//获得同级栏目还是子级栏目
			$type=isset($attr['type'])?$attr['type']:'self';
			$php=<<<php
				<?php
					\$cid=$cid;
					\$type='$type';
					\$db=M('category');
					switch (\$type) {
						//获得同级栏目
						case 'self':
							\$categorydata=\$db->where("cid in (".\$cid.")")->all();
							break;
						// 获得子级栏目
						case 'son':
							\$categorydata=\$db->where("pid in (".\$cid.")")->all();
							break;
					}
					foreach (\$categorydata as  \$field):
						\$field['url']=getCategoryUrl(\$field);	
				?>			
php;
			$php.=$content;
			$php.="<?php endforeach;?>";
			return $php;
		}

		//用于显示文章列表
		public function _arccontent($attr,$content){
			$cid=isset($attr['cid'])?$attr['cid']:'';
			$row=isset($attr['row'])?$attr['row']:7;
			$len=isset($attr['len'])?$attr['len']:350;
			$php=<<<php
			<?php
				\$cid=$cid;
				\$row=$row;
				\$len=$len;
				//对栏目表进行操作
				\$db=M('category');
				//找到当前栏目下所有的子栏目
				\$allCid=Data::channelList(\$db->all(),\$cid);
				//获得所有子栏目cid
				\$data=array_keys(\$allCid);
				//压入当前栏目的cid
				\$data[]=\$cid;
				//对文章表进行操作
				\$cdb=K('Content');
				//条件是当前cid下所有子栏目的新闻都列出来
				\$page=new Page(\$cdb->where("cc.cid in (".implode(',', \$data).")")->count(),\$row);
				\$contentdata=\$cdb->where("cc.cid in (".implode(',', \$data).")")->limit(\$page->limit())->all();
				//为每一篇文章存入一个路径
				foreach(\$contentdata as  \$field):
					\$field['url']=getContentUrl(\$field);
					//截取文章的字数
					\$field['content']=mb_substr(\$field['content'],0,\$len,'utf-8');
			?>
php;
				$php.=$content;
				$php.="<?php endforeach;?>";
				return $php;
		}
		//内容页的重点推荐
		public function _recommend($attr,$content){
			$aid=isset($attr['aid'])?$attr['aid']:'';
			$row=isset($attr['row'])?$attr['row']:5;
			$len=isset($attr['len'])?$attr['len']:15;
			$php=<<<php
				<?php
					\$aid=$aid;
					\$row=$row;
					\$len=$len;
					\$db=K('Content');
					//获得当前文章的文章内容
					\$data=\$db->find(\$aid);
					//获得与当前文章属同一栏目的文章
					\$contentdata=\$db->where("cc.cid=".\$data['cid'])->all();
					foreach (\$contentdata as  \$field):
						//为该标题提供文章连接
						\$field['url']=getContentUrl(\$field);
						//截取固定文章标题的长度
						\$field['title']=mb_substr(\$field['title'],0,\$len,'utf-8');
				?>
php;
				$php.=$content;
				$php.="<?php endforeach;?>";
				return $php;
		}
		//内容页中显示上一篇
		public function _prevarc($attr,$content){
			//获得当前文章的aid
			$aid=isset($attr['aid'])?$attr['aid']:'';

			$php=<<<php
				<?php
					\$aid=$aid;
					// p(\$aid);
					\$db=K('Content');
					//获得当前文章的文章内容
					\$data=\$db->find(\$aid);
					//获得与当前文章属同一栏目的文章
					\$contentdata=\$db->where("cc.cid=".\$data['cid']." and aid<".\$aid)->order("aid desc")->find();
					if(empty(\$contentdata)){
						\$field['title']='没有了';
					}else{
						\$field['title']=\$contentdata['title'];
						\$field['url']=getContentUrl(\$contentdata);
					}
				?>
php;
			$php.=$content;
			return $php;
		}
		//内容页中显示下一篇
		public function _nextarc($attr,$content){
			//获得当前文章的aid
			$aid=isset($attr['aid'])?$attr['aid']:'';
			$php=<<<php
				<?php
					\$aid=$aid;
					\$db=K('Content');
					//获得当前文章的文章内容
					\$data=\$db->find(\$aid);
					// p(\$data);
					//获得与当前文章属同一栏目的文章
					\$contentdata=\$db->where("cc.cid=".\$data['cid']."  and aid>".\$aid)->order("aid desc")->find();
					// p(\$contentdata);
					if(empty(\$contentdata)){
						\$field['title']='没有了';
					}else{
						\$field['title']=\$contentdata['title'];
						\$field['url']=getContentUrl(\$contentdata);
					}
				?>
php;
			$php.=$content;
			return $php;
		}
		//内容页中显示相关新闻
		public function _relativearc($attr,$content){
			//获得当前文章的aid
			$aid=isset($attr['aid'])?$attr['aid']:'""';
			$row=isset($attr['row'])?$attr['row']:4;
			$php=<<<php
				<?php
					\$aid=$aid;
					\$row=$row;
					\$db=K('Content');
					//获得当前文章信息(传来是aid)
					\$data=\$db->where("aid=".\$aid)->find();
					//获得当前文章同属栏目下的4篇文章
					\$contentdata=\$db->where("cc.cid=".\$data['cid']." and aid<>".\$aid )->limit(\$row)->all();
					foreach (\$contentdata as  \$field):
						//为每篇文章分配链接
						\$field['url']=getContentUrl(\$field);
				?>
php;
			$php.=$content;
			$php.="<?php endforeach;?>";
			return $php;

		}
		//列表页推荐新闻
		public function _relativelist($attr,$content){
			$cid=isset($attr['cid'])?$attr['cid']:'""';
			$row=isset($attr['row'])?$attr['row']:4;
			$php=<<<php
				\$cid=$cid;
				\$row=$row;
				\$db=K('Content');
				//获得当前文章信息(cid)
				\$data=\$db->where("cid=".\$cid)->find();
				//获得当前文章同属栏目下的4篇文章
				\$contentdata=\$db->where("cc.cid=".\$cid." and aid<>".\$data['aid'])->limit(\$row)->all();
				foreach (\$contentdata as  \$field):
					//为每篇文章分配链接
					\$field['url']=getContentUrl(\$field);
php;
			$php.=$content;
			$php.="<?php endforeach;?>";
			return $php;
		}
		//用于友情链接的
		public function _linkarc($attr,$content){
			$row=isset($attr['row'])?$attr['row']:'""';
			$php=<<<php
				<?php
					\$row=$row;
					\$db=M('link');
					//获得$row个友情链接
					\$data=\$db->limit(\$row)->all();
						foreach (\$data as  \$field):
				?>
php;
			$php.=$content;
			$php.="<?php endforeach;?>";
			return $php;
		}
		//分页
		public function _page($attr,$content){
			return "<?php echo \$page->show();?>";
		}
	}
?>