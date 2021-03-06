<?php

class Experiencia_model extends CI_Model {

    public function salvaExp($data) {
        $this->db->insert('experiencia', $data);
    }

    function getExp($idExperiencia) {
        $idExperiencia = (int) $idExperiencia;
        $this->db->where('id_experiencia', $idExperiencia);
        return $this->db->get('experiencia');
    }
    
    function getExpAcademico($idAcademico) {
        $idAcademico = (int) $idAcademico;
        $this->db->where('id_usuario', $idAcademico);
        return $this->db->get('experiencia');
    }

    function getExpUsuario($id_usuario) {
        $id_usuario = (int) $id_usuario;
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->get('experiencia');
    }

    function consulta($search) {
        $this->db->select('*');
        $this->db->from('experiencia');
        $this->db->join('usuario', 'experiencia.id_usuario = usuario.id_usuario');
        //$this->db->join('formacao', 'formacao.id_usuario = usuario.id_usuario');
        $this->db->group_by('nome_usuario');
        $this->db->like('experiencia.nome_experiencia', $search);
        return $query = $this->db->get()->result();
    }

    public function editExp($data, $id_experiencia) {
        $this->db
                ->where('id_experiencia', $id_experiencia);
        $this->db->set($data);
        return $this->db->update('experiencia');
    }

}
