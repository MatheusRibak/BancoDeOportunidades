<?php

class Vaga_academico_model extends CI_Model {

    function cadastrarCandidato($data) {
        $this->db->insert("dados_candidato", $data);
    }

    function getVagaSozinha($id_dado_vaga) {
        $this->db->join('usuario', 'dados_vaga.id_usuario = usuario.id_usuario');
        $this->db->where('id_dado_vaga', $id_dado_vaga);
        return $this->db->get("dados_vaga");
    }

    public function getMinhasVagas($id_usuario) {
        $this->db->join('dados_vaga', 'dados_candidato.id_vaga = dados_vaga.id_dado_vaga');
        $this->db->join('usuario', 'dados_vaga.id_usuario = usuario.id_usuario');
        $this->db->where("id_academico", $id_usuario);
        return $this->db->get("dados_candidato");
    }

    public function excluir($id_usuario, $id_vaga) {
        $id_usuario = $this->session->userdata('id_usuario');
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('id_vaga', $id_vaga);
        $this->db->delete('dados_candidato');
    }

}
