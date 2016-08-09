<?php

class Empregador_model extends CI_Model {

    //CADASTRAR EMPREGADOR
    function cadastrarEmpregador($data) {
        $this->db->insert("empregador", $data);
    }

    //CONSULTANDO CATEGORIA POR ID
    function getEmpregador($idEmpregador) {
        $idEmpregador = (int) $idEmpregador;
        $this->db->where('id_empregador', $idEmpregador);
        return $this->db->get('empregador');
    }

}
