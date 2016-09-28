<?php

class Vaga_empregador extends CI_Model {

    //CADASTRAR EMPREGADOR
    function cadastrarVaga($data) {
        $this->db->insert("dados_vaga", $data);
    }

    //CONSULTANDO VAGAS POR IDEMPREGADOR
    function getVagas($idUsuario) {
        $idUsuario = (int) $idUsuario;
        $this->db->where('id_usuario', $idUsuario);
        return $this->db->get('dados_vaga');
    }
    
    //CONSULTANDO VAGAS ATIVAS POR IDEMPREGADOR
    function getVagasAtivas($idUsuario) {
        $idUsuario = (int) $idUsuario;
        $this->db->where('id_usuario', $idUsuario);
        $this->db->where('status', 'ATIVO');
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
    
    function buscaCurriculosPorVaga($id_usuario){
        $this->db->select("*");
        $this->db->from("dados_candidato");
        $this->db->join('dados_vaga', 'dados_vaga.id_dado_vaga = dados_candidato.id_vaga');
        $this->db->join('usuario', 'dados_candidato.id_academico = usuario.id_usuario');
        $this->db->where('dados_candidato.id_empregador', $id_usuario);
        return $query = $this->db->get();
    }

}
