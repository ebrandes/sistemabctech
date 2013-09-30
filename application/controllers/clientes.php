<?php

class Clientes extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('loadScript');
          $this->load->helper('date');
    }
    
    public function index() {
        
        $data['css'] = array ('bemVindo.css','cadastroCliente.css');
        $data['js'] = 'cadastroCliente.js';
        
        $this->load->view('templates/header',$data);
        $this->load->view('clientes_cadastro');
        $this->load->view('templates/footer');
    }
    
}


?>
