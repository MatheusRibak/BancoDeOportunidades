<?php

class LinkedIdLattes_model extends CI_Model {

    public function salvaLinkedIdLattes($data){
      $this->db->insert('linkedId_lattes', $data);
    }
    
    public function getLinkedIdLattes($id_usuario){
      $this->db->where('id_usuario', $id_usuario);
      return $this->db->get('linkedId_lattes');
    }


}
