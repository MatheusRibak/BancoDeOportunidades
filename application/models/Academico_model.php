<?php

class Academico_model extends CI_Model {

    function cadastrarAcademico($data) {
        $this->db->insert('academico', $data);
    }

    function getAcademico($id_academico) {
        $id_academico = (int) $id_academico;
        $this->db->where('id_academico', $id_academico);
        return $this->db->get('academico');
    }

    function Editar($data) {
        $id_academico = $this->session->userdata('id_academico');
        $this->db->where('id_academico', $id_academico);
        $this->db->set($data);
        return $this->db->update('academico');
    }

    public function cadastrarAtividade($data) {
        $this->db->insert('atividades_complementares', $data);
    }

    public function getAtividade() {
        $id_usuario = $this->session->userdata('id_usuario');
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('tipo', 'Atividades Complementares');
        return $this->db->get('atividades_complementares');
    }
    
    public function getAtividadeEmpregador($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('tipo', 'Atividades Complementares');
        return $this->db->get('atividades_complementares');
    }

    public function getAtividadeSozinha($id_atividade) {
        $id_usuario = $this->session->userdata('id_usuario');
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('id_atividade', $id_atividade);
        return $this->db->get('atividades_complementares');
    }

    public function editarAtividade($id_atividade, $data) {
        $id_usuario = $this->session->userdata('id_usuario');

        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('id_atividade', $id_atividade);
        $this->db->set($data);
        return $this->db->update('atividades_complementares');
    }

}
