<?php

session_start();

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_User extends CI_Controller
{   
    public function __construct() {
        parent::__construct();

        $this->load->model('super_admin_model');
        $this->load->model('super_user_model');
        $user_id=$this->session->userdata('user_id');
        if($user_id ==NULL)
        {
           redirect("user_login","refresh");
        }

    }
    public function index()
    {
        $data=array();
        $data['user_maincontent']=$this->load->view('user/user_dashboard','',true);
        $this->load->view('user/user_master',$data);
    }
    public function logout()
    {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('login_status');
        session_destroy();
        $sdata=array();
        $sdata['message']="You Are Successfully Logged Out !";
        $this->session->set_userdata($sdata);
        redirect("blogger_login");
    }


    public function view_product()
    {
        $data=array();
        $data['all_product']=$this->super_admin_model->select_unpurchased_product();
        /*echo '<pre>';
        print_r($data);
        exit();*/

        if($data['all_product']== true)
        {
            $data['user_maincontent'] = $this->load->view('user/view_product', $data, true);
            $this->load->view('user/user_master', $data);

        }
        else
        {
            $data = array();
            $data['exception'] = "No product available to purchase..Please try again later !";
            $this->session->set_userdata($data);
            redirect("super_user");

        }

    }
    public function edit_product($created_at)
    {
        $data=array();
        $data['product_info']=$this->super_admin_model->select_product_by_created_at($created_at);
        $data['user_maincontent']=$this->load->view('user/edit_product_form',$data,true);
        $this->load->view('user/user_master',$data);
    }
    public function update_product($created_at)
    {
        $data=array();
        $input = $this->input->post();

        $data["purchase_price"] = $input["purchase_price"];
        $unit_price = $input["unit_price"];

        if($data["purchase_price"] == $unit_price)
        {
            $this->super_user_model->update_product_info($data, $created_at);
            $sdata = array();
            $sdata['message'] = "Purchased successfuly !";
            $this->session->set_userdata($sdata);
            redirect("super_user/edit_product/$created_at");
        }
        else
        {
            $sdata = array();
            $sdata['exception'] = "Purchase price must be equal to Unit Price..Purchase Again !";
            $this->session->set_userdata($sdata);
            redirect("super_user/edit_product/$created_at");
        }
    }
    public function delete_product($created_at)
    {
        $this->super_admin_model->delete_product_info($created_at);
        redirect("super_user/view_product");
    }
    public function view_user_profile()
    {
        $this->load->database('db2', TRUE);
        $data=array();
        $user_id=$this->session->userdata('user_id');
        $data['user_info']=$this->super_user_model->view_user_profile_info($user_id);
        $data['user_maincontent']=$this->load->view('user/edit_profile_form',$data,true);
        $this->load->view('user/user_master',$data);
    }
    public function update_user_profile($user_id)
    {
        $this->load->database('db2', TRUE);
        $data=array();
        $data['user_name']=$this->input->post('user_name',true);
        $data['user_email_address']=$this->input->post('user_email_address',true);
        $data['user_password']=md5($this->input->post('user_password',true));

        $this->super_user_model->update_user_profile_info($data,$user_id);
        $sdata=array();
        $sdata['message']="User information updated successfully!";
        $this->session->set_userdata($sdata);
        redirect("super_user/view_user_profile");
    }

}

?>
