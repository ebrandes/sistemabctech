<?php
    
class fornecedores extends CI_Controller {

 public function __construct() {
    parent::__construct();
    $this->load->library('table');
    $this->load->helper('url');
    $this->load->library('loadScript');
    $this->load->helper('date');
    $this->load->model('fornecedores_model');
    $this->load->library("Messages");
 }
 
 public function index(){
     
     $this->lista();
     
 }

 public function salvar() {
     
    $nome = $this->input->post("nome");
    $email = $this->input->post("email");
    $telefone1 = $this->input->post("telefone1");
    $telefone2 = $this->input->post("telefone2") ;
    $cep = $this->input->post("cep");
    $endereco = $this->input->post("endereco");
    $bairro = $this->input->post("bairro");
   
    $this->fornecedores_model->setNome($nome).
    $this->fornecedores_model->setEmail($email);
    $this->fornecedores_model->setTelefone1($telefone1);
    $this->fornecedores_model->setTelefone2($telefone2);
    $this->fornecedores_model->setEndereco($endereco);
    $this->fornecedores_model->setBairro($bairro);
    
    $retorno = $this->fornecedores_model->salvar();
    $this->messages->add($retorno,"success");
    
    header('Location: /fornecedores');
    
 }
 
 public function cadastro() {
     
        $data['css'] = array('fornecedores.css','bemVindo.css',);
        $data['js'] = "";
        
        $this->load->view('templates/header',$data);
        $this->load->view('cadastro_fornecedores');
        $this->load->view('templates/footer');
     
 }
 
public function lista() {
    
    $data['css'] = array('fornecedores.css','bemVindo.css','jquery.dataTables_themeroller.css','jquery.dataTables.css');
     $data['js'] = array('clientes.js','jquery.dataTables.min.js');
    $data['lista'] = $this->fornecedores_model->lista();
    
    $this->load->view('templates/header',$data);
    $this->load->view('lista_fornecedores');
    $this->load->view('templates/footer');;
    
}
 
}
