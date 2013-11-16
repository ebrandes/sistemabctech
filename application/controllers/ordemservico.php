<?php

class OrdemServico extends CI_Controller {
    
    function __construct() {
       parent::__construct();
       $this->load->library('table');
       $this->load->helper('url');
       $this->load->library('loadScript');
       $this->load->helper('date');
       $this->load->model('ordemServico_model');
       $this->load->library("Messages");
    }
    
    public function index(){
        
    }
    
    public function lista(){
        
    }
    
    public function cadastro(){
        
        $data['css'] = array ('bemVindo.css','ordemServico.css','jquery.dataTables_themeroller.css','jquery.dataTables.css');
        $data['js'] = array('ordemServico.js','jquery.dataTables.min.js');
        
        $this->load->view("templates/header",$data);
        $this->load->view("cadastro_ordemServicos");
        $this->load->view("templates/footer");
    }
    
    public function salvar(){
        
    }
    
}