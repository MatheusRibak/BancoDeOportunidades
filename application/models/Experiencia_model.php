<?php

class Experiencia_model extends CI_Model {


     public function salvaExp($data) {
         $this->db->insert('experiencia', $data);
    }

    function getExp($id_usuario){
      $id_usuario = (int) $id_usuario;
      $this->db->where('id_usuario', $id_usuario);
      return $this->db->get('experiencia');
    }
    
    function consulta($search) {
        $this->db->select('*');
        $this->db->from('experiencia');
        $this->db->join('usuario', 'experiencia.id_usuario = usuario.id_usuario');
        $this->db->join('formacao', 'formacao.id_usuario = usuario.id_usuario');
        $this->db->like('experiencia.nome_experiencia', $search);
        return $query = $this->db->get()->result(); 
    }

}
