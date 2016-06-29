<?php

include_once '../abstract/Abstrata.php';
include_once '../iCRUD/iCRUD.php';

class dados_curriculo extends Abstrata implements iCRUD {
    private $id;
    private $idAcademico;
    private $graduacao;
    private $instituicao_graduacao;
    private $pos_graduacao;
    private $instituicao_pos_graduacao;
    private $mestrado;
    private $instituicao_mestrado;
    private $cursos_eventos;
    private $outras_experiencias;
    private $data_cadastro;
    private $status;
    
    function __construct($id, $idAcademico, $graduacao, $instituicao_graduacao, $pos_graduacao, $instituicao_pos_graduacao, $mestrado, $instituicao_mestrado, $cursos_eventos, $outras_experiencias, $data_cadastro, $status) {
        $this->id = $id;
        $this->idAcademico = $idAcademico;
        $this->graduacao = $graduacao;
        $this->instituicao_graduacao = $instituicao_graduacao;
        $this->pos_graduacao = $pos_graduacao;
        $this->instituicao_pos_graduacao = $instituicao_pos_graduacao;
        $this->mestrado = $mestrado;
        $this->instituicao_mestrado = $instituicao_mestrado;
        $this->cursos_eventos = $cursos_eventos;
        $this->outras_experiencias = $outras_experiencias;
        $this->data_cadastro = $data_cadastro;
        $this->status = $status;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getIdAcademico() {
        return $this->idAcademico;
    }

    function getGraduacao() {
        return $this->graduacao;
    }

    function getInstituicao_graduacao() {
        return $this->instituicao_graduacao;
    }

    function getPos_graduacao() {
        return $this->pos_graduacao;
    }

    function getInstituicao_pos_graduacao() {
        return $this->instituicao_pos_graduacao;
    }

    function getMestrado() {
        return $this->mestrado;
    }

    function getInstituicao_mestrado() {
        return $this->instituicao_mestrado;
    }

    function getCursos_eventos() {
        return $this->cursos_eventos;
    }

    function getOutras_experiencias() {
        return $this->outras_experiencias;
    }

    function getData_cadastro() {
        return $this->data_cadastro;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdAcademico($idAcademico) {
        $this->idAcademico = $idAcademico;
    }

    function setGraduacao($graduacao) {
        $this->graduacao = $graduacao;
    }

    function setInstituicao_graduacao($instituicao_graduacao) {
        $this->instituicao_graduacao = $instituicao_graduacao;
    }

    function setPos_graduacao($pos_graduacao) {
        $this->pos_graduacao = $pos_graduacao;
    }

    function setInstituicao_pos_graduacao($instituicao_pos_graduacao) {
        $this->instituicao_pos_graduacao = $instituicao_pos_graduacao;
    }

    function setMestrado($mestrado) {
        $this->mestrado = $mestrado;
    }

    function setInstituicao_mestrado($instituicao_mestrado) {
        $this->instituicao_mestrado = $instituicao_mestrado;
    }

    function setCursos_eventos($cursos_eventos) {
        $this->cursos_eventos = $cursos_eventos;
    }

    function setOutras_experiencias($outras_experiencias) {
        $this->outras_experiencias = $outras_experiencias;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

    function setStatus($status) {
        $this->status = $status;
    }
    
    

    public function alterar() {
        
    }

    public function cadastrar() {
        
    }

}
