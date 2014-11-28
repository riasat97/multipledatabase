<?php

session_start();

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Login extends CI_Controller{

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


}

?>
