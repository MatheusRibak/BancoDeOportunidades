<?php

include_once '../abstract/Abstrata.php';
include_once '../iCRUD/iCRUD.php';


class vaga extends Abstrata implements iCRUD {

    private $id;
    private $id_empregador;
    private $descricao;
    private $faixa_salarial;
    private $local_vaga;
    private $areas_abrangidas;
    private $nivel_vaga;
    private $periodo;
    private $funcao_exercida;
    private $requisitos;
    private $beneficios;
    private $data_cadatro;
    private $status;
    
    function __construct($id, $id_empregador, $descricao, $faixa_salarial, $local_vaga, $areas_abrangidas, $nivel_vaga, $periodo, $funcao_exercida, $requisitos, $beneficios, $data_cadatro, $status) {
        $this->id = $id;
        $this->id_empregador = $id_empregador;
        $this->descricao = $descricao;
        $this->faixa_salarial = $faixa_salarial;
        $this->local_vaga = $local_vaga;
        $this->areas_abrangidas = $areas_abrangidas;
        $this->nivel_vaga = $nivel_vaga;
        $this->periodo = $periodo;
        $this->funcao_exercida = $funcao_exercida;
        $this->requisitos = $requisitos;
        $this->beneficios = $beneficios;
        $this->data_cadatro = $data_cadatro;
        $this->status = $status;
    }

    function getId() {
        return $this->id;
    }

    function getId_empregador() {
        return $this->id_empregador;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getFaixa_salarial() {
        return $this->faixa_salarial;
    }

    function getLocal_vaga() {
        return $this->local_vaga;
    }

    function getAreas_abrangidas() {
        return $this->areas_abrangidas;
    }

    function getNivel_vaga() {
        return $this->nivel_vaga;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    function getFuncao_exercida() {
        return $this->funcao_exercida;
    }

    function getRequisitos() {
        return $this->requisitos;
    }

    function getBeneficios() {
        return $this->beneficios;
    }

    function getData_cadatro() {
        return $this->data_cadatro;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_empregador($id_empregador) {
        $this->id_empregador = $id_empregador;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setFaixa_salarial($faixa_salarial) {
        $this->faixa_salarial = $faixa_salarial;
    }

    function setLocal_vaga($local_vaga) {
        $this->local_vaga = $local_vaga;
    }

    function setAreas_abrangidas($areas_abrangidas) {
        $this->areas_abrangidas = $areas_abrangidas;
    }

    function setNivel_vaga($nivel_vaga) {
        $this->nivel_vaga = $nivel_vaga;
    }

    function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    function setFuncao_exercida($funcao_exercida) {
        $this->funcao_exercida = $funcao_exercida;
    }

    function setRequisitos($requisitos) {
        $this->requisitos = $requisitos;
    }

    function setBeneficios($beneficios) {
        $this->beneficios = $beneficios;
    }

    function setData_cadatro($data_cadatro) {
        $this->data_cadatro = $data_cadatro;
    }

    function setStatus($status) {
        $this->status = $status;
    }



}
