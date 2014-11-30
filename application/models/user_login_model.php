<?php

class User_Login_Model extends CI_Model {

    public function save_user_info($data)
    {
        $this->db->insert('user',$data);
    }
    public function check_login_info($user_email_address,$user_password)
    {
        $this->load->database('db2', TRUE);

        $result = $this->getUserWithEmailPassword($user_email_address, $user_password);

        if(!$result){
            $this->load->database('db3', TRUE);
            $result = $this->getUserWithEmailPassword($user_email_address, $user_password);
            $this->load->database('db2', TRUE);
        }
        return $result;
    }

    private function getUserWithEmailPassword($email, $password){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email_address',$email);
        $this->db->where('user_password',md5($password));
        $query_result=$this->db->get();
        return $query_result->row();
    }
}

?>
