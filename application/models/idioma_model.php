<?php

class Idioma_model extends CI_Model {

    public function salvaIdioma($data){
      $this->db->insert('idioma', $data);
    }

    public function getIdiomas($id_usuario){
      $this->db->where('id_usuario', $id_usuario);
      return $this->db->get('idioma');
    }

    public function getEditarIdioma($id_idioma){
      $this->db->select('*')
      ->from('idioma')
      ->where('id_idioma', $id_idioma);
      return $this->db->get()->result();
    }

    public function editaIdioma($data, $id_idioma){
        $id_usuario = $this->session->userdata('id_usuario');
        $this->db->where('id_idioma', $id_idioma);
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('idioma', $data);

    }




}
