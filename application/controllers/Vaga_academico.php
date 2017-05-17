<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vaga_academico extends CI_Controller {

    public function index() {
        $this->load->view('busca');
    }

    public function vagaCompleta($id_dado_vaga) {

 
        $id_usuario = $this->session->userdata('id_usuario');

        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosVaga" => $this->Vaga_academico_model->getVagaSozinha($id_dado_vaga)->row(),
        );

        $this->load->view('vaga_completa', $data);
    }

     public function cadastraCandidato() {
        $this->load->model('Vaga_academico_model');
        $id_vaga = $this->input->post('id_vaga');
        $id_academico = $this->input->post('id_academico');
        $id_empregador = $this->input->post('id_empregador');
        $data = date('Y/m/d');

        $dados = array(
            "id_vaga" => $id_vaga,
            "id_academico" => $id_academico,
            "id_empregador" =>$id_empregador,
            "data_cadastro" => $data
        );

        $this->Vaga_academico_model->cadastrarCandidato($dados);
        redirect('Painel_academico/carregaBusca/?aviso=4');
    }

    public function getVagas() {

        $id_usuario = $this->session->userdata('id_usuario');
        $search = $this->input->post('input_busca');

        
       $unoesc = 'UNOESC';

      $this->db->select('*')
      ->from('formacao')
      ->where('id_usuario', $id_usuario)
      ->where('instituicao', $unoesc);
      $tem_unoesc = $this->db->get();
      
      if ($tem_unoesc->num_rows() > 0) {
              $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "resultado" => $this->Usuario_model->getVagas($search));

        $this->load->view('resultado_busca', $data); }
          else {
              redirect('Painel_academico/carregaBusca/?aviso=5');
          }


    }

    public function minhasVaga() {
  
        $id_academico = $this->session->userdata('id_academico');
        $data = array(
            "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result(),
            "dados" => $this->Academico_model->getVagas($teste),
            "minhasVagas" => $this->Vaga_academico_model->getMinhasVagas($id_academico)
        );


        $this->load->view('busca', $data);
    }

    public function excluir($id_vaga){
      $this->load->model('Vaga_academico_model');
      $this->Vaga_academico_model->excluir($id_vaga);
      redirect('Painel_academico/index/?aviso=1');
    }

}
