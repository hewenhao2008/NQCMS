<?php
//获得栏目的url
	function getCategoryUrl($field){
		switch ($field['url_type']) {
			case 1:
			//静态路径
				return __ROOT__.'/Category/'.$field('html_dir').'index.html';
				break;
			
			default:
				return U('Index/Index/category',array('cid'=>$field['cid']));
				break;
		}
	}
	//获得内容url的路径
	function getContentUrl($field){
		switch ($field['url_type']) {
			case 1:
			//静态路径
				$search=array('{y}','{m}','{d}','{aid}');
				$time=getdate($field['addtime']);
				$replace=array(
					$time['year'],
					$time['mon'],
					$time['mday'],
					$field['aid']
					);
				return __ROOT__.'/Category/'.$field['html_dir'].'/'.str_replace($search, $replace, $field['arc_html_rule']);
				break;
			
			default:
				return U('Index/Index/content',array('aid'=>$field['aid']));
				break;
		}
	}



?>