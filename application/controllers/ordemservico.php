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
    
    public function cadastrar(){
        
    }
    
    public function salvar(){
        
    }
    
}