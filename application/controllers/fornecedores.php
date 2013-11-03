<?php
    
class fornecedores extends CI_Controller {

 public function __construct() {
     parent::__construct();
 }
 
 public function index(){
     
     $this->lista();
     
 }

 public function cadastro() {
     
        $data['css'] = array('fornecedores.css','bemVindo.css');
        $data['js'] = "";
        
        $this->load->view('templates/header',$data);
        $this->load->view('cadastro_foencedores');
        $this->load->view('templates/footer');
     
 }
 
public function lista() {
    
    
    
    $this->load->view('templates/header',$data);
    $this->load->view('lista_fornecedores');
    $this->load->view('templates/footer');;
    
}
 
}
