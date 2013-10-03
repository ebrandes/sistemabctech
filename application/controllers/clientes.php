<?php

class Clientes extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('table');
        $this->load->helper('url');
        $this->load->library('loadScript');
          $this->load->helper('date');
    }
    
    public function index() {
        
        $data['css'] = array ('bemVindo.css','clientes.css','jquery.dataTables_themeroller.css','jquery.dataTables.css');
        $data['js'] = "";
        $this->load->view('templates/header',$data);
        $this->load->view('lista_clientes');
        $this->load->view('templates/footer');
    }
    
    public function cadastro(){
        
        $data['css'] = array('clientes.css','bemVindo.css');
        $data['js'] = "";
        
        $this->load->view('templates/header',$data);
        $this->load->view('cadastro_clientes');
        $this->load->view('templates/footer');
        
    }
    
}


?>
