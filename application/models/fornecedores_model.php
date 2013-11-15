<?php
class fornecedores_model extends CI_Model {
    
   private $nome,$email,$telefone1,$telefone2,$cep,$endereco,$bairro,$descricao;

   public function __construct() {
       parent::__construct();
       $this->load->database();
   }
   
   public function lista(){
       $query = $this->db->get("tb_fornecedores");
       return $query->result_array();
   }
   
   public function getNome() {
       return $this->nome;
   }

   public function setNome($nome) {
       $this->nome = $nome;
   }

   public function getEmail() {
       return $this->email;
   }

   public function setEmail($email) {
       $this->email = $email;
   }

   public function getTelefone1() {
       return $this->telefone1;
   }

   public function setTelefone1($telefone1) {
       $this->telefone1 = $telefone1;
   }

   public function getTelefone2() {
       return $this->telefone2;
   }

   public function setTelefone2($telefone2) {
       $this->telefone2 = $telefone2;
   }

   public function getCep() {
       return $this->cep;
   }

   public function setCep($cep) {
       $this->cep = $cep;
   }

   public function getEndereco() {
       return $this->endereco;
   }

   public function setEndereco($endereco) {
       $this->endereco = $endereco;
   }

   public function getBairro() {
       return $this->bairro;
   }

   public function setBairro($bairro) {
       $this->bairro = $bairro;
   }

   public function getDescricao() {
       return $this->descricao;
   }

   public function setDescricao($descricao) {
       $this->descricao = $descricao;
   }


}