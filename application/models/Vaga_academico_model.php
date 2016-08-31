<?php

class Vaga_academico_model extends CI_Model {


    function cadastrarCandidato($data) {
        $this->db->insert("dados_candidato", $data);
    }

  public  function getMinhasVagas($id_academico){
      $id_academico = $this->session->userdata('id_academico');
      $this->db->select('*');
      $this->db->from('dados_vaga');
      $this->db->join('dados_candidato', 'dados_candidato.id_vaga = dados_vaga.id_dado_vaga');
      $this->db->where("id_academico", $id_academico);
      return $this->db->get()->result();

    }

    public function excluir($id_academico, $id_vaga){
      $id_academico = $this->session->userdata('id_academico');
      $this->db->where('id_academico', $id_academico);
      $this->db->where('id_vaga', $id_vaga);
      $this->db->delete('dados_candidato');

    }


}
