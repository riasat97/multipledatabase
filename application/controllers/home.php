<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
       // $this->load->model('home_model');
    }
    
    public function index()
    {
        /*$data=array();
        $data['all_category']=$this->home_model->select_published_category();
        $data['recent_post']=$this->home_model->select_recent_post();
        $data['popular_post']=$this->home_model->select_popular_post();
        $data['all_blog']=$this->home_model->select_published_blog();*/
        /*echo '<pre>';
        print_r($data['all_category']);
        exit();*/
        $data['maincontent']=$this->load->view('home_message','',true);
        $data['title']='Home';
        //$data['tempus']=1;
        $this->load->view('master',$data);
    }
 /*   public function blog()
    {
        $data=array();
        $data['all_category']=$this->home_model->select_published_category();
        $data['maincontent']=$this->load->view('blog_view','',true);
        $data['title']='Blog';
        $this->load->view('master',$data);
    }
    public function blog_details($blog_id)
    {
        $data=array();
        $data['blogger_id']=$this->session->userdata('user_id');
        $data['all_category']=$this->home_model->select_published_category();
        $data['recent_post']=$this->home_model->select_recent_post();
        $data['popular_post']=$this->home_model->select_popular_post();
        $data['all_pcomments']=$this->home_model->select_published_comments($blog_id);
        $data['blog_info']=$this->home_model->select_published_blog_by_blog_id($blog_id);
        $view_count=$data['blog_info']->view_count+1;
        $this->home_model->update_view_count_by_blog_id($view_count,$blog_id);
        $data['comments_form'] = $this->load->view('comments_form',$data,true);
        $data['maincontent']=$this->load->view('blog_details',$data,true);
        $data['title']='Blog Details';
        $data['tempus']=1;
        $this->load->view('master',$data);
    }
    public function specific_blog($category_id)
    {
        $data=array();
        $data['all_category']=$this->home_model->select_published_category();
        $data['specific_blog_info']=$this->home_model->select_specific_blog($category_id);
        $data['maincontent']=$this->load->view('specific_blog_details',$data,true);
        $data['title']= 'Blog';
        $this->load->view('master',$data);
    }
    public function save_comments()
    {
        $data = array();
        $data['blog_id'] = $this->input->post('blog_id',true);
        $data['comments_author_name'] = $this->input->post('comments_author_name',true);
        $data['comments_author_email'] = $this->input->post('comments_author_email',true);
        $data['comments_description'] = $this->input->post('comments_description',true);
        $this->home_model->save_comments_info($data);
        $sdata=array();
        $sdata['message']="Waiting for apporval!";
        $this->session->set_userdata($sdata);
        redirect("home/blog_details/$data[blog_id]");
    }
    public function display_category_blog($category_id)
    {
        $data=array();
        $data['all_category']=$this->home_model->select_published_category();
        $data['recent_post']=$this->home_model->select_recent_post();
        $data['popular_post']=$this->home_model->select_popular_post();
        $data['all_blog']=$this->home_model->select_published_blog_by_category_id($category_id);
        $data['maincontent']=$this->load->view('home_message',$data,true);
        $data['title']='Specific Blog';
        $data['tempus']=1;
        $this->load->view('master',$data);
    }
}
*/
}
