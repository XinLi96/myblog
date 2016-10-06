<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this -> load -> model('blog_category_model');
        $this -> load -> model('blog_model');

        $cate_id = $this -> input -> get('cateId');
        if(!$cate_id){
            //查所有的文章
            $blogs = $this -> blog_model -> get_all();
        }else{
            //根据类别查询文章
            $blogs = $this -> blog_model -> get_by_category($cate_id);
        }
        //查所有的文章类别
        $categories = $this -> blog_category_model -> get_all();

        //跳转页面
		$this->load->view('index',array(
		    'categories' => $categories,
            'blogs' => $blogs
        ));

	}
	public function view_blog(){
	    $blog_id = $this -> input -> get('blogId');
        $this -> load -> model('blog_model');
        $this -> load -> model('comment_model');
        $blog = $this -> blog_model -> get_by_id($blog_id);
        $blog -> comments = $this -> comment_model -> get_by_blog($blog_id);
        if($blog){
            $this -> load -> view('blog_detail', array(
                'blog' => $blog
            ));
        }else{
            echo "未查到指定文章！";
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */