<?php

class Empregador_model extends CI_Model {

    //CADASTRAR EMPREGADOR
    function cadastrarEmpregador($data) {
        $this->db->insert("usuario", $data);
    }

    //CONSULTANDO CATEGORIA POR ID
    function getEmpregador($idUsuario) {
        $idUsuario = (int) $idUsuario;
        $this->db->where('id_usuario', $idUsuario);
        return $this->db->get('usuario');
    }

    //UPDATE DE INFORMAÇÕES
    function atualizaEmpregador($id, $data) {
        $this->db->where(['id_usuario' => $id]);
        $this->db->update("usuario", $data);
    }

}
