<?php

class Experiencia_model extends CI_Model {


     public function salvaExp($data) {
         $this->db->insert('experiencia', $data);
    }

    function getExp($id_academico){
      $id_academico = (int) $id_academico;
      $this->db->where('id_academico', $id_academico);
      return $this->db->get('experiencia');

    }




}
