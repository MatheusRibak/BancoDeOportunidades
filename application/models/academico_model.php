<?php

class Academico_model extends CI_Model {


     public function Salvar($data) {
         $this->db->insert('academico', $data);
    }

    function getAcademico($id_academico) {
        $id_academico = (int) $id_academico;
        $this->db->where('id_academico', $id_academico);
        return $this->db->get('academico');
    }





}
