<?php
class produtos_model extends CI_Model {
    
   private $nome,$descricao,$imagem,$valor,$codCategoria;

   public function __construct() {
       parent::__construct();
       $this->load->database();
   }
   
   public function listaCategorias(){
       $query = $this->db->get("tb_categorias");
       return $query->result_array();
   }
   
   public function salvar() {
           $data = array(
            'nome' => $this->getNome(),
            'fkcod_categoria' => $this->getCodCategoria(),
            'descricao' => $this->getEmail(),
            'valor' => $this->getCep(),
            'imagem' => $this->getEndereco()
        );
          
         $this->db->insert('tb_produtos', $data);
         
         if(!$this->db->_error_message()){
             $msg = "Registro cadastrado com sucesso.";
         } else {
             $msg = "Não foi possivel incluir o registro";
         }
         
         return $msg;
         
   }
   
   public function lista(){
       $query = $this->db->get("tb_produtos");
       return $query->result_array();
   }
   
   public function getNome() {
       return $this->nome;
   }

   public function setNome($nome) {
       $this->nome = $nome;
   }

   public function getDescricao() {
       return $this->descricao;
   }

   public function setDescricao($descricao) {
       $this->descricao = $descricao;
   }

   public function getImagem() {
       return $this->imagem;
   }

   public function setImagem($imagem) {
       $this->imagem = $imagem;
   }

   public function getValor() {
       return $this->valor;
   }

   public function setValor($valor) {
       $this->valor = $valor;
   }

   public function getCodCategoria() {
       return $this->codCategoria;
   }

   public function setCodCategoria($codCategoria) {
       $this->codCategoria = $codCategoria;
   }

}