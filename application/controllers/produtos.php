<?php


class Produtos extends CI_Controller {
    
    public function __construct() {
    parent::__construct();
    $this->load->library('table');
    $this->load->helper('url');
    $this->load->library('loadScript');
    $this->load->helper('date');
    $this->load->model('produtos_model');
    $this->load->library("Messages");
 }
 
 
 public function index(){
     
     $this->lista();
     
 }

 public function salvar() {
     
    $nome = $this->input->post("nome");
    $descricao = $this->input->post("email");
    $valor = $this->input->post("telefone1");
    $codCategoria = $this->input->post("telefone2") ;
    $imagem = $this->input->post("cep");
   
    $this->produtos_model->setNome($nome).
    $this->produtos_model->setDescricao($descricao);
    $this->produtos_model->setValor($valor);
    $this->produtos_model->setCodCategoria($codCategoria);
    $this->produtos_model->setImagem($imagem);
    
    $retorno = $this->produtos_model->salvar();
    $this->messages->add($retorno,"success");
    
    header('Location: /produtos');
    
 }
 
 public function cadastro() {
     
        $data['css'] = array('produtos.css','bemVindo.css',);
        $data['js'] = "";
        $data['categorias'] = $this->produtos_model->listaCategorias();
        $this->load->view('templates/header',$data);
        $this->load->view('cadastro_produtos');
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

?>
