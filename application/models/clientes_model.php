<?php 

class Clientes_model extends CI_Model {
    
     private $nome,$telefone,$celular,$endereco,$complemento,$numeroComplemento,$bairro,$cpf;
    
     public function __construct() {
         parent::__construct();
          $this->load->database();
     }

     
     
     public function salvar() {

        $data = array(
            'nome' => $this->getNome(),
            'bairro' => $this->getBairro(),
            'telefone' => $this->getTelefone(),
            'celular' => $this->getCelular(),
            'endereco' => $this->getEndereco(),
            'numero' => $this->getNumeroComplemento(),
            'complemento' => $this->getComplemento(),
            'cpf' => $this->getCpf()
        );

         $this->db->insert('Clientes', $data); 
         
         if(!$this->db->_error_message()){
             $msg = "Registro cadastrado com sucesso.";
         } else {
             $msg = "Não foi possivel incluir o registro";
         }
         
         return $msg;
         
         
     }
     
     public function lista(){
         
         $query = $this->db->get('Clientes');
         return $query->result_array();
     }
     
     
     
     public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getNumeroComplemento() {
        return $this->numeroComplemento;
    }

    public function setNumeroComplemento($numeroComplemento) {
        $this->numeroComplemento = $numeroComplemento;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    
}

?>