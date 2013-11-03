<?php
class fornecedores_model extends CI_Model {
    
   private $nome,$endereco,$telefone1,$telefone2,$email,$descricao;

   
   
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
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

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    
}