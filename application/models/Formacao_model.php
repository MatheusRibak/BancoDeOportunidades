<?php

class Formacao_model extends CI_Model {

    function salvaFormacao($data) {
        $this->db->insert("formacao", $data);
    }

    function getFormacao($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->get('formacao');
    }

    function todos($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->get('formacao');
    }
    
    function buscaFormacao($id_formacao) {
        $this->db->where('id_formacao', $id_formacao);
        return $this->db->get('formacao');
    }

    function consulta($search) {
        $this->db->select('*');
        $this->db->from('formacao');
        $this->db->join('usuario', 'formacao.id_usuario = usuario.id_usuario');
        $this->db->join('experiencia', 'experiencia.id_usuario = usuario.id_usuario');
        $this->db->like('formacao.nome_curso', $search);
        return $query = $this->db->get()->result();
    }

    public function editFormacao($data, $id_formacao) {
        $this->db->where('id_formacao', $id_formacao);
        $this->db->set($data);
        return $this->db->update('formacao');
    }

}
