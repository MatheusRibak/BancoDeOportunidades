<?php

class LinkedIdLattes_model extends CI_Model {

    public function salvaLinkedIdLattes($data){
      $this->db->insert('linkedId_lattes', $data);
    }
    
    public function getLinkedIdLattes($id_usuario){
      $this->db->where('id_usuario', $id_usuario);
      return $this->db->get('linkedId_lattes');
    }
    
    public function getLattes($id){
    $id_usuario = $this->session->userdata('id_usuario');
    $this->db->where('id_obs', $id);
    $this->db->where('id_usuario', $id_usuario);
    return $this->db->get('linkedId_lattes');
    
    }
    
    public function editaLattes($data, $id){
      $id_usuario = $this->session->userdata('id_usuario');
        $this->db->where('id_obs', $id);
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('linkedId_lattes', $data);
    }
    


}
