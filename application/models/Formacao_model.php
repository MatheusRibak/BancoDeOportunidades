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

}
