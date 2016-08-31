<?php

class Formacao_model extends CI_Model {


    function salvaFormacao($data) {
        $this->db->insert("formacao", $data);
    }

    function getFormacao($id_academico){
      $id_academico = (int) $id_academico;
      $this->db->where('id_academico', $id_academico);
      return $this->db->get('formacao');

    }

    public function editFormacao($data, $id_formacao) {
    $id_academico = $this->session->userdata('id_academico');
   $this->db
   ->where('id_academico', $id_academico)
   ->where('id_formacao', $id_formacao);
   $this->db->set($data);
   return $this->db->update('formacao');
   }

}
