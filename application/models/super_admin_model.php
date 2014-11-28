<?php
    class Super_Admin_Model extends CI_Model
    {

        public function save_product_info($data)
        {

            $this->load->database('default', TRUE);

            $this->db->insert('product', $data);

            unset($data["product_name"]);
            unset($data["product_code"]);
            unset($data["product_price"]);

            $this->load->database('db2', TRUE);

            $this->db->insert('product', $data);

            $this->load->database('db3', TRUE);

            $this->db->insert('product', $data);
        }
        public function select_all_product()
        {
            $this->load->database('default', TRUE);

            $this->db->select('*');
            $this->db->from('product');
            $query_result=$this->db->get();
            $result=$query_result->result();
            return $result;
        }
        public function select_unpurchased_product()
        {
            $this->load->database('default', TRUE);

            $this->db->select('*');
            $this->db->from('product');
            $this->db->where(array('purchase_price' => 0));
            $query_result=$this->db->get();
            $result=$query_result->result();
            return $result;
        }
        public function delete_product_info($created_at)
        {
            $this->load->database('default', TRUE);

            $this->db->where('created_at',$created_at);
            $this->db->delete('product');

            $this->load->database('db2', TRUE);

            $this->db->where('created_at',$created_at);
            $this->db->delete('product');

            $this->load->database('db3', TRUE);

            $this->db->where('created_at',$created_at);
            $this->db->delete('product');
        }

        public function select_product_by_created_at($created_at)
        {
            $this->load->database('default', TRUE);
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('created_at',$created_at);
            $query_result=$this->db->get();
            $result=$query_result->row();
            return $result;
        }
        public function update_product_info($data,$created_at)
        {
            $this->load->database('default', TRUE);
            $this->db->where('created_at',$created_at);
            $this->db->update('product',$data);

            unset($data["product_name"]);
            unset($data["product_code"]);
            unset($data["product_price"]);

            $this->load->database('db2', TRUE);

            $this->db->where('created_at',$created_at);
            $this->db->update('product', $data);

            $this->load->database('db3', TRUE);

            $this->db->where('created_at',$created_at);
            $this->db->update('product', $data);
        }

    }
?>
