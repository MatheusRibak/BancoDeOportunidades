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
    
    //BUSCAR VAGA
    function getVaga($id_dado_vaga) {
        $id_dado_vaga = (int) $id_dado_vaga;
        $this->db->where('id_dado_vaga', $id_dado_vaga);
        return $this->db->get('dados_vaga');
    }
    
    //UPDATE DE INFORMAÇÕES
    function atualizaVaga($id, $data) {
        $this->db->where(['id_dado_vaga' => $id]);
        $this->db->update("dados_vaga", $data);
    }

}
