<?php

class Blog_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_post() {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

}
