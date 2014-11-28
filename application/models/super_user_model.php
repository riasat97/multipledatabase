<?php

    class Super_User_Model extends CI_Model
    {


        public function update_product_info($data,$created_at)
        {
            $this->load->database('db2', TRUE);
            $this->db->where('created_at',$created_at);
            $this->db->update('product',$data);



            $this->load->database('default', TRUE);

            $this->db->where('created_at',$created_at);
            $this->db->update('product', $data);

            $this->load->database('db3', TRUE);

            $this->db->where('created_at',$created_at);
            $this->db->update('product', $data);
        }
        public function delete_product_info($created_at)
        {
            $this->load->database('db2', TRUE);

            $this->db->where('created_at', $created_at);
            $this->db->delete('product');
        }

        public function view_user_profile_info($user_id)
        {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('user_id',$user_id);
            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;
        }
        public function update_user_profile_info($data,$user_id)
        {
            $this->db->where('user_id',$user_id);
            $this->db->update('user',$data);
        }

    }

?>
