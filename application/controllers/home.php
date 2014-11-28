<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

    }
    
    public function index()
    {
        $data['maincontent']=$this->load->view('home_message','',true);
        $data['title']='Home';

        $this->load->view('master',$data);
    }

}
