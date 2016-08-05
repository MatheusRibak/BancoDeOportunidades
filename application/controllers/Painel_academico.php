<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Painel_academico extends MY_ControllerLogado {

    public function index() {
        $this->load->model('Academico_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');



        $id_academico = $this->session->userdata('id_academico');
        $data = array(
            "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result()
        );



        $this->load->view('painel_academico', $data);
    }

    public function carregaFormacao(){
      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
        $id_academico = $this->session->userdata('id_academico');
      $data = array(
          "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
          "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
          "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result()
      );
      $this->load->view('cadastra_formacao', $data);
    }

    public function carregaExp(){
      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
        $id_academico = $this->session->userdata('id_academico');
      $data = array(
          "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
          "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
          "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result()
      );

      $this->load->view('cadastra_experiencia', $data);
    }

    public function salvaExp(){
      $nome = $this->input->post('nome');
      $empresa = $this->input->post('empresa');
      $inicio = $this->input->post('inicio');
      $termino = $this->input->post('termino');
      $id_academico =  $this->session->userdata('id_academico');
      $atividade = $this->input->post('atividade');

      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
      $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
      $this->form_validation->set_rules('termino', 'termino', 'max_length[120]');
      $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
      $this->form_validation->set_rules('empresa', 'Empresa', 'required|max_length[120]');
      $this->form_validation->set_rules('atividade', 'atividade', 'required|max_length[120]');

      if ($this->form_validation->run() == FALSE) {
          $this->carregaExp();
          return;
      }

      $this->load->model('Experiencia_model');
      $this->Experiencia_model->salvaExp([
          "id_academico" => $id_academico,
          "nome" => $nome,
          "inicio" => $inicio,
          "termino" => $termino,
          "empresa" => $empresa,
          "atividade" => $atividade
      ]);
      redirect('Painel_academico/carregaExp/?aviso=1');
    }

    public function salvaFormacao(){
    $nome = $this->input->post('nome');
    $tipo = $this->input->post('tipo');
    $inicio = $this->input->post('inicio');
    $termino = $this->input->post('termino');
    $escola = $this->input->post('escola');
    $id_academico =  $this->session->userdata('id_academico');

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
    $this->form_validation->set_rules('tipo', 'Tipo', 'required|max_length[120]');
    $this->form_validation->set_rules('termino', 'termino', 'required|max_length[120]');
    $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
    $this->form_validation->set_rules('escola', 'escola', 'required|max_length[120]');
    if ($this->form_validation->run() == FALSE) {
        redirect('Painel_academico/carregaFormacao/?aviso=2');
        return;
    }
    $this->load->model('Formacao_model');
    $this->Formacao_model->salvaFormacao([
        "id_academico" => $id_academico,
        "nome" => $nome,
        "tipo" => $tipo,
        "inicio" => $inicio,
        "termino" => $termino,
        "escola" => $escola
    ]);
    redirect('Painel_academico/carregaFormacao/?aviso=1');
  }

  public function carregaEditPerfil(){
    $id_academico = $this->session->userdata('id_academico');
    $data = array(
        "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row()
    );
    $this->load->view('editar_perfil_academico', $data);
  }

  function deslogar(){
    $this->session->sess_destroy();
    $this->load->view('index');

}





}
