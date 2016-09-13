<?php

class Usuario_model extends CI_Model {

    function cadastrarUsuario($data) {
        $this->db->insert('usuario', $data);
    }
    
    function getUsuario($id_usuario) {
        $id_usuario = (int) $id_usuario;
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->get('usuario');
    }
    
     function Editar($data) {
        $id_usuario = $this->session->userdata('id_usuario');
        $this->db->where('id_usuario', $id_usuario);
        $this->db->set($data);
        return $this->db->update('usuario');
    }
    
    function getVagas($search) {
      $status = 'ATIVO';
      $this->db
              ->select("*")
              ->from("dados_vaga")
              ->like('cargo',$search)
              ->where('status', $status);
        return  $qr = $this->db->get()->result();
    }
}
