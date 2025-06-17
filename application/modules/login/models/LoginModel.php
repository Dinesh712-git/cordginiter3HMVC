<?php

class LoginModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();

    }

      public function get_details()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

     public function register($data) {
        return $this->db->insert('user', $data);
    }
}
?>