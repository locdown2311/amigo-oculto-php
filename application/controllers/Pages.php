<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('amigooculto_model');
        
    }

    public function index() {
        
        $data['titulo'] = 'Inicio - AMIGO OCULTO';
        //$dados['noticias'] = $this->cnoticia->get_noticias();
        $this->load->view('templates/headernovo', $data);
        $this->load->view('pages/inicioamigo');
        $this->load->view('templates/footernovo');
    }
    public function adicionaPart(){
        $data['titulo'] = 'Cadastro - AMIGO OCULTO';
        $data['fav'] = "echo base_url('assets/img/useradd.ico')";
        $this->load->view('templates/headernovo', $data);
        $this->load->view('pages/cadastro');
        $this->load->view('templates/footernovo');
    }
    
    public function sortear(){
        $dados['nomes'] = $this->amigooculto_model->get_nomes();
        $data['titulo'] = 'Sorteio - AMIGO OCULTO';
        $this->load->view('templates/headernovo', $data);
        $this->load->view('pages/sorteio',$dados);
        $this->load->view('templates/footernovo');
    }
    
    public function efetuaSort(){
        $data['titulo'] = 'Sorteio - AMIGO OCULTO';
        $query['res'] = $this->amigooculto_model->sorteia($this->input->post('opcao'));
        $query['nomes'] = $this->amigooculto_model->get_nomes();
        $this->load->view('templates/headernovo', $data);
        $this->load->view('pages/sorteio',$query);
        $this->load->view('templates/footernovo');
    }
    public function set_par(){
        $data['titulo'] = 'Cadastro - AMIGO OCULTO';
        $query = $this->amigooculto_model->ins_nomes();
        if($query){
            echo "<script> alert('Cadastrado com sucesso') </script>";
        }
        $this->load->view('templates/headernovo', $data);
        $this->load->view('pages/cadastro');
        $this->load->view('templates/footernovo');
    }
    public function ver_res(){
        $data['titulo'] = 'Resultados - AMIGO OCULTO';
        $dados['nomes'] = $this->amigooculto_model->resultados();
        
        $this->load->view('templates/headernovo', $data);
        $this->load->view('pages/resultados',$dados);
        $this->load->view('templates/footernovo');
    }
}
