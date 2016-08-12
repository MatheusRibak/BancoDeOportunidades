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

}
