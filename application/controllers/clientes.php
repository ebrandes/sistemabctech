<?php

class Clientes extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('table');
        $this->load->helper('url');
        $this->load->library('loadScript');
        $this->load->helper('date');
       $this->load->model('clientes_model');
       $this->load->library("Messages");
    }
    
    public function index() {
        
        $this->lista();

    }
    
    public function cadastro(){
        
        $data['css'] = array('clientes.css','bemVindo.css');
        $data['js'] = "";
        
        $this->load->view('templates/header',$data);
        $this->load->view('cadastro_clientes');
        $this->load->view('templates/footer');
        
    }
    
    public function lista(){
        
        $row = $this->clientes_model->lista();
        
        $data['css'] = array ('bemVindo.css','clientes.css','jquery.dataTables_themeroller.css','jquery.dataTables.css');
        $data['js'] = array('clientes.js','jquery.dataTables.min.js');
        $data['lista'] = $row;
        
        $this->load->view('templates/header',$data);
        $this->load->view('lista_clientes');
        $this->load->view('templates/footer');
        
    }
    
    public function salvar(){
        
        $bairro = $this->input->post("bairro");
        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $celular = $this->input->post("celular");
        $complemento = $this->input->post("complemento");
        $cpf = $this->input->post("cpf") ;
        $telefone = $this->input->post("telefone");
        $numeroComplemento = $this->input->post("numero");
        $cep = $this->input->post("cep");
        $endereco = $this->input->post("endereco");
        
        
        
        $this->clientes_model->setBairro($bairro);
        $this->clientes_model->setNome($nome);
        $this->clientes_model->setEmail($email);
        $this->clientes_model->setCEP($cep);
        $this->clientes_model->setCelular($celular);
        $this->clientes_model->setComplemento($complemento);
        $this->clientes_model->setCpf($cpf);
        $this->clientes_model->setTelefone($telefone);
        $this->clientes_model->setNumeroComplemento($numeroComplemento);
        $this->clientes_model->setEndereco($endereco);
        
        $retorno = $this->clientes_model->salvar();
        
        $this->messages->add($retorno,"success");
        
        header('Location: /clientes');
        
    }
    
    
    public function listaClientesAutoComplete(){
        
        $retorno = $this->clientes_model->listaClientesAutoComplete();
        echo json_encode($retorno);
        
    }
    
    
}


?>
