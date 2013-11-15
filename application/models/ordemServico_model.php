<?php

class OrdemServico_model extends CI_Model {
    
    private $codCliente,$data,$descricao,$tipoServico,$tipoPeriferico,$indDesconto,$valorFrete,$valorDesconto,$valorTotal;
    
    function __construct() {
        parent::__construct();
    }
    
    public function salvar(){
        
    }
    
    public function imprimir(){
        
    }
    
    public function listar(){
        $query = $this->db->get('tb_ordemServicos');
        return $query->result_array();
    }
    
    
    /*Gets e sets*/
    public function getCodCliente() {
        return $this->codCliente;
    }

    public function setCodCliente($codCliente) {
        $this->codCliente = $codCliente;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getTipoServico() {
        return $this->tipoServico;
    }

    public function setTipoServico($tipoServico) {
        $this->tipoServico = $tipoServico;
    }

    public function getTipoPeriferico() {
        return $this->tipoPeriferico;
    }

    public function setTipoPeriferico($tipoPeriferico) {
        $this->tipoPeriferico = $tipoPeriferico;
    }

    public function getIndDesconto() {
        return $this->indDesconto;
    }

    public function setIndDesconto($indDesconto) {
        $this->indDesconto = $indDesconto;
    }

    public function getValorFrete() {
        return $this->valorFrete;
    }

    public function setValorFrete($valorFrete) {
        $this->valorFrete = $valorFrete;
    }

    public function getValorDesconto() {
        return $this->valorDesconto;
    }

    public function setValorDesconto($valorDesconto) {
        $this->valorDesconto = $valorDesconto;
    }

    public function getValorTotal() {
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal) {
        $this->valorTotal = $valorTotal;
    }


}