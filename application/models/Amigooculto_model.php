<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Amigooculto_model extends CI_Model {

    private $sorteadores;
    private $possiveis;

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function sorteia($seunome) {
        $query = $this->db->query('SELECT nome FROM amigooculto WHERE sorteado = 0 ORDER BY RAND() LIMIT 1');
        $aux = NULL;

        foreach ($query->result() as $rs) {
            $aux = $rs->nome;
        }
        while ($aux == $seunome) {
            $query = $this->db->query('SELECT nome FROM amigooculto WHERE sorteado = 0 ORDER BY RAND() LIMIT 1');
            foreach ($query->result() as $rs) {
                $aux = $rs->nome;
            }
        }
        $this->set_sorteado($aux);
        $this->set_res($seunome, $aux);
        echo "<script> alert('Seu amigo oculto é " . ucfirst($aux) . "'); </script>";
    }

    public function get_nomes($param = 'sorteou') {
        $query = $this->db->get_where('amigooculto', array("$param" => 0));
        return $query->result_array();
    }

    public function set_sorteado($usu) {
        $data = array(
            'sorteado' => 1
        );

        $this->db->where('nome', $usu);
        $this->db->update('amigooculto', $data);
    }

    public function set_res($usu, $seg) {
        $data = array(
            'segredo' => $seg,
            'sorteou' => 1
        );
        try {
            $this->db->where('nome', $usu);
            $this->db->update('amigooculto', $data);
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    public function ins_nomes() {
        try {
            $dados = array(
                'nome' => strtoupper($this->input->post('pessoa')),
            );
        } catch (Exception $ex) {
            echo $ex;
        }

        return $this->db->insert('amigooculto', $dados);
    }
    public function resultados(){
        try{
            $query = $this->db->query('SELECT nome , segredo FROM amigooculto');
            return $query->result_array();
        } catch (Exception $ex) {

        }
    }

}
