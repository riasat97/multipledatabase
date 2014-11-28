<?php

session_start();

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Login extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('user_login_model');

        $user_id=$this->session->userdata('user_id');
        if($user_id !=NULL)
        {
           redirect("super_user","refresh"); 
        }
    }
    public function index()
    {
        $this->load->view('user/user_login');
    }
    public function user_login_check()
    {
        $user_email_address=$this->input->post('user_email_address',true);
        $user_password=$this->input->post('password',true);
        $result=$this->user_login_model->check_login_info($user_email_address,$user_password);
        $sdata=array();
        if($result)
        {
            $sdata['user_name']=$result->user_name;//blogger_id/user_id see here by riasat
            $sdata['user_id']=$result->user_id;
            $sdata['login_status']=TRUE;
            $this->session->set_userdata($sdata);
            redirect('super_user');
        }
        else
        {
            
            $sdata['exception']="User Id / Password Invalid !";
            $this->session->set_userdata($sdata);
            redirect('user_login');
        }
    }
    public function sign_up()
    {
        $data=array();
        $data['all_category']=$this->home_model->select_published_category();
        $data['maincontent']=$this->load->view('sign_up','',true);
        $data['title']='Sign Up';
        $this->load->view('master',$data);
    }
    public function save_blogger()
    {
        $data=array();
        $data['first_name']=$this->input->post('first_name',true);
        $data['last_name']=$this->input->post('last_name',true);
        $data['email_address']=$this->input->post('email_address',true);
        $data['password']=md5($this->input->post('password',true));
        $data['mobile_no']=$this->input->post('mobile_no',true);
        $data['address']=$this->input->post('address',true);
        $data['gender']=$this->input->post('gender',true);
        $data['city']=$this->input->post('city',true);
        $data['country']=$this->input->post('country',true);
        $data['zip_code']=$this->input->post('zip_code',true);
        $this->blogger_login_model->save_blogger_info($data);
        $sdata=array();
        $sdata['message']="User information saved successfully!";
        $this->session->set_userdata($sdata);
        redirect("blogger_login/sign_up");
    }
}

?>
