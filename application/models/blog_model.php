<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {
	public function get_all(){
	    $this -> db -> order_by('post_date', 'desc');//排序规则
//        $this -> db -> limit(3);  //限制查询的条数
        return $this -> db -> get('t_blog') -> result();
    }
    public function get_by_category($cate_id){
        $this -> db -> order_by('post_date', 'desc');
        return $this -> db -> get_where('t_blog', array('cate_id' => $cate_id)) -> result();
    }
    public function get_by_id($blog_id){
//        return $this -> db -> get_where('t_blog', array('blog_id' => $blog_id)) -> row();
        $this -> db -> select('blog.*, cate.cate_name');
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_cate cate', 'blog.cate_id=cate.cate_id');
        $this -> db -> where('blog.blog_id', $blog_id);
        return $this -> db -> get() -> row();
    }
}
