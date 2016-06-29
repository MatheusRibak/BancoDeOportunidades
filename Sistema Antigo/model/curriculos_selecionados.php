<?php

include_once '../abstract/Abstrata.php';
include_once '../iCRUD/iCRUD.php';


class curriculos_selecionados extends Abstrata implements iCRUD {

    private $id;
    private $id_curriculo;
    private $id_empregador;
    private $data_selecao;
    private $status;
    private $data_final;

    function __construct($id, $id_curriculo, $id_empregador, $data_selecao, $status, $data_final) {
        $this->id = $id;
        $this->id_curriculo = $id_curriculo;
        $this->id_empregador = $id_empregador;
        $this->data_selecao = $data_selecao;
        $this->status = $status;
        $this->data_final = $data_final;
    }

    function getId() {
        return $this->id;
    }

    function getId_curriculo() {
        return $this->id_curriculo;
    }

    function getId_empregador() {
        return $this->id_empregador;
    }

    function getData_selecao() {
        return $this->data_selecao;
    }

    function getStatus() {
        return $this->status;
    }

    function getData_final() {
        return $this->data_final;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_curriculo($id_curriculo) {
        $this->id_curriculo = $id_curriculo;
    }

    function setId_empregador($id_empregador) {
        $this->id_empregador = $id_empregador;
    }

    function setData_selecao($data_selecao) {
        $this->data_selecao = $data_selecao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setData_final($data_final) {
        $this->data_final = $data_final;
    }
    
    

    public function alterar() {
        
    }

    public function cadastrar() {
        
    }

}
