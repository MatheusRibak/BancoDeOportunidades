<?php

class Vaga_empregador extends CI_Model {

    //CADASTRAR EMPREGADOR
    function cadastrarVaga($data) {
        $this->db->insert("dados_vaga", $data);
    }

    //CONSULTANDO VAGAS POR IDEMPREGADOR
    function getVagas($idEmpregador) {
        $idEmpregador = (int) $idEmpregador;
        $this->db->where('id_empregador', $idEmpregador);
        return $this->db->get('dados_vaga');
    }

}
