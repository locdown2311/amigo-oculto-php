<?php

class Cnoticia extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_noticias() {
        $query = $this->db->get('noticias');
        return $query->result_array();
    }

    public function ins_noticias() {
        $aux = htmlspecialchars($_POST['texto']);
        $dados = array(
            'titulo' => $this->input->post('titulo'),
            'autor' => $this->input->post('autor'),
            'texto' => $aux,
        );
        
        return $this->db->insert('noticias', $dados);
    }

}
