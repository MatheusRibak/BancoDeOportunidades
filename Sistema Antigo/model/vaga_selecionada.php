<?php

include_once '../abstract/Abstrata.php';
include_once '../iCRUD/iCRUD.php';

class vaga_selecionada extends Abstrata implements iCRUD {
    private $id;
    private $id_academico;
    private $id_vaga;
    private $data_candidatado;
    private $status;
    private $data_final;
    
    
    
    function __construct($id, $id_academico, $id_vaga, $data_candidatado, $status, $data_final) {
        $this->id = $id;
        $this->id_academico = $id_academico;
        $this->id_vaga = $id_vaga;
        $this->data_candidatado = $data_candidatado;
        $this->status = $status;
        $this->data_final = $data_final;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getId_academico() {
        return $this->id_academico;
    }

    function getId_vaga() {
        return $this->id_vaga;
    }

    function getData_candidatado() {
        return $this->data_candidatado;
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

    function setId_academico($id_academico) {
        $this->id_academico = $id_academico;
    }

    function setId_vaga($id_vaga) {
        $this->id_vaga = $id_vaga;
    }

    function setData_candidatado($data_candidatado) {
        $this->data_candidatado = $data_candidatado;
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
