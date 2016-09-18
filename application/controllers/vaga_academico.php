<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vaga_academico extends CI_Controller {

    public function index() {
        $this->load->view('busca');
    }

    public function vagaCompleta($id_dado_vaga, $id_empregador){


      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
      $this->load->model('Empregador_model');
      $id_academico = $this->session->userdata('id_academico');
      $data = array(
          "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
          "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
          "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result(),
          "dadosVaga" => $this->Academico_model->getVagaSozinha($id_dado_vaga),
          "dadosEmpregador" => $this->Academico_model->getEmpregadorSozinho($id_empregador)
      );

      $this->load->view('vaga_completa', $data);


    }

    public function cadastraCandidato(){
      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
      $this->load->model('Empregador_model');
      $this->load->model('Vaga_academico_model');

      $id_empregador = $this->input->post('id_empregador');
      $id_vaga = $this->input->post('id_vaga');
      $id_academico = $this->session->userdata('id_academico');

      $this->db
              ->select("*")
              ->from("dados_candidato")
              ->where("id_academico", $id_academico)
              ->where("id_vaga", $id_vaga);

      $dadosCandidato = $this->db->get();

      if ($dadosCandidato->num_rows() > 0) {
          redirect('Painel_academico/carregaBusca/?aviso=5');
      } else {
        $this->Vaga_academico_model->cadastrarCandidato([
            "id_academico" => $id_academico,
            "id_vaga" => $id_vaga,
            "id_empregador" => $id_empregador,
            "status_vaga" => "Esperando Reposta do Empregador"
        ]);
          redirect('Painel_academico/carregaBusca/?aviso=4');

      }


    }

    public function getVagas(){

      $teste = $this->input->post('input_busca');

      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
      $id_academico = $this->session->userdata('id_academico');
      $data = array(
          "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
          "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
          "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result(),
          "dados" => $this->Academico_model->getVagas($teste)
      );


      $this->db
              ->select("*")
              ->from("dados_vaga")
              ->like('cargo',$teste);


      $gambiarra = $this->db->get();

      if ($gambiarra->num_rows() == 0) {
        $data2 = 1;
          $this->load->view('resultado_busca', $data, $data2);
      }

      else {
        $this->load->view('resultado_busca', $data);
      }


    }

    public function minhasVaga(){
      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
      $this->load->model('Vaga_academico_model');
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

    public function excluir($id_vaga, $id_academico){
      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
      $this->load->model('Vaga_academico_model');
      $id_academico = $this->session->userdata('id_academico');
      $data = array(
          "excluir" => $this->Vaga_academico_model->excluir($id_academico, $id_vaga)
      );

      redirect('Painel_academico/index/?aviso=3');
    }

}
