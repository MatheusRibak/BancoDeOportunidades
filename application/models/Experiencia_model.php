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

    public function editExp($data, $id_experiencia) {
    $id_academico = $this->session->userdata('id_academico');
   $this->db
   ->where('id_academico', $id_academico)
   ->where('id_experiencia', $id_experiencia);
   $this->db->set($data);
   return $this->db->update('experiencia');
   }



}
