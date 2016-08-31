<?php

class Academico_model extends CI_Model {


    function cadastrarAcademico($data) {
        $this->db->insert('academico', $data);
    }

    function getAcademico($id_academico) {
        $id_academico = (int) $id_academico;
        $this->db->where('id_academico', $id_academico);
        return $this->db->get('academico');
    }

    function Editar($data) {
         	$id_academico = $this->session->userdata('id_academico');
        $this->db->where('id_academico', $id_academico);
        $this->db->set($data);
        return $this->db->update('academico');
    }

    function getVagas($teste) {

      $this->db
              ->select("*")
              ->from("dados_vaga")
              ->like('cargo',$teste);


        return  $qr = $this->db->get()->result();

    }

    function getVagaSozinha($id_dado_vaga) {

      $this->db
              ->select("*")
              ->from("dados_vaga")
              ->like('id_dado_vaga',$id_dado_vaga);


        return  $query = $this->db->get()->result();

    }

    function getEmpregadorSozinho($id_empregador) {

      $this->db
              ->select("*")
              ->from("empregador")
              ->where('id_empregador',$id_empregador);


        return  $query2 = $this->db->get()->result();

    }

    function getExperiencia($id_experiencia) {
  $id_academico = $this->session->userdata('id_academico');
      $this->db
              ->select("*")
              ->from("experiencia")
              ->where('id_experiencia',$id_experiencia)
              ->where('id_academico', $id_academico);


        return  $qr = $this->db->get()->result();

    }

    function getformacao($id_formacao) {
      $id_academico = $this->session->userdata('id_academico');
      $this->db
              ->select("*")
              ->from("formacao")
              ->where('id_formacao',$id_formacao)
              ->where('id_academico', $id_academico);


        return  $qr = $this->db->get()->result();

    }

}
