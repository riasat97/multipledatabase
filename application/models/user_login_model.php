<?php

class User_Login_Model extends CI_Model {

    public function save_user_info($data)
    {
        $this->db->insert('user',$data);
    }
    public function check_login_info($user_email_address,$user_password)
    {
        $this->load->database('db2', TRUE);

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email_address',$user_email_address);
        $this->db->where('user_password',md5($user_password));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}

?>
