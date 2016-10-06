<?php

class Formacao_complementar_model extends CI_Model {

    function salvaFormacaoComplementar($data) {
        $this->db->insert("atividades_complementares", $data);
    }

    function getFormacaoComplementar() {
        $id_usuario = $this->session->userdata('id_usuario');
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('tipo', 'Formação Complementar');
        return $this->db->get('atividades_complementares');
    }
    
    function getFormacaoComplementarEmpregador($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('tipo', 'Formação Complementar');
        return $this->db->get('atividades_complementares');
    }

    public function getFormacaoSozinha($id_formacao) {
        $id_usuario = $this->session->userdata('id_usuario');
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('id_atividade', $id_formacao);
        return $this->db->get('atividades_complementares');
    }

    public function editarFormacaoComplementar($id_formacao, $data) {
        $id_usuario = $this->session->userdata('id_usuario');

        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('id_atividade', $id_formacao);
        $this->db->set($data);
        return $this->db->update('atividades_complementares');
    }

}
