<?php

session_start();

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_Admin extends CI_Controller
{   
    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model');
       // $this->load->model('home_model');
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id ==NULL)
        {
           redirect("admin_login","refresh"); 
        }
        
    }
    
    public function index()
    {
        $data=array();
        $data['admin_maincontent']=$this->load->view('admin/dashboard','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function logout()
    {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('login_status');
        session_destroy();
        $sdata=array();
        $sdata['message']="You Are Successfully Logged Out !";
        $this->session->set_userdata($sdata);
        redirect("admin_login");
    }
    public function add_product()
    {
        $data=array();
        $data['admin_maincontent']=$this->load->view('admin/add_product_form','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_product()
    {
        $input = $this->input->post();
        $hashTime = time();
        $data["product_name"] = $input["product_name"];
        $data["product_code"] = $input["product_code"];
        $data["product_price"] = $input["product_price"];
        $data["unit_price"] = $input["unit_price"];
       // $data["purchase_price"] = $input["purchase_price"];
        $data["created_at"] = $hashTime;
        $this->super_admin_model->save_product_info($data);
        $sdata=array();
        $sdata['message']="Product info saved successfully !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/add_product");
        
        // $default= $this->load->database('default', TRUE);
                 //$this->load->database('default', TRUE);
        // $default->insert('multiple_table', $data);
                //$this->db->insert('product', $data);

                 //unset($data["product_name"]);
                 //unset($data["product_code"]);
        //unset($data["purchase_price"]);

        // $db2= $this->load->database('db2', TRUE);
                 // $this->load->database('db2', TRUE);
        // $default->insert('second_multiple', $data);
                 //$this->db->insert('product', $data);

    }
    public function view_product()
    {
        $data=array();
        $data['all_product']=$this->super_admin_model->select_all_product();

        $data['admin_maincontent']=$this->load->view('admin/view_product',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function delete_product($created_at)
    {
        $this->super_admin_model->delete_product_info($created_at);
        redirect("super_admin/view_product");
    }

    public function edit_product($created_at)
    {
        $data=array();
        $data['product_info']=$this->super_admin_model->select_product_by_created_at($created_at);
        $data['admin_maincontent']=$this->load->view('admin/edit_product_form',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_product($created_at)
    {
        $data=array();
        $input = $this->input->post();
       // $hashTime = time();
        $data["product_name"] = $input["product_name"];
        $data["product_code"] = $input["product_code"];
        $data["product_price"] = $input["product_price"];
        $data["unit_price"] = $input["unit_price"];
        // $data["purchase_price"] = $input["purchase_price"];
        //$data["created_at"] = $hashTime;


        $this->super_admin_model->update_product_info($data,$created_at);
        $sdata=array();
        $sdata['message']="Product info updated successfuly !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/edit_product/$created_at");
    }


}
?>
