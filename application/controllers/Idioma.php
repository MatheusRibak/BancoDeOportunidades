<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Idioma extends MY_ControllerLogado {

    public function index() {
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "vagas_candidatadas" => $this->Vaga_academico_model->getMinhasVagas($id_usuario)->result(),
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_usuario)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExpUsuario($id_usuario)->result()
        );
        $this->load->view('cadastra_idiomas', $data);
    }

    public function carregaIdiomas(){
      $id_usuario = $this->session->userdata('id_usuario');
      $data = array(
          "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row()
      );
      $this->load->view('cadastra_idiomas', $data);
    }

    public function salvaIdioma(){

      $id_usuario = $this->session->userdata('id_usuario');
      $idioma = $this->input->post('idioma');
      $nivel = $this->input->post('nivel');

        $this->Idioma_model->salvaIdioma([
            "id_usuario" => $id_usuario,
            "idioma" => $idioma,
            "nivel" => $nivel
        ]);

          redirect('Idioma/carregaIdiomas/?aviso=2');


    }

    public function carregaEditarIdioma($id_idioma){

      $id_usuario = $this->session->userdata('id_usuario');

      $data = array(
          "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
          "dadosEditarIdioma" =>   $this->Idioma_model->getEditarIdioma($id_idioma)
      );

      $this->load->view('editar_idioma', $data);

    }

    public function editaIdioma(){

      $id_usuario = $this->session->userdata('id_usuario');

      $id_idioma = $this->input->post('id_idioma');
      $idioma = $this->input->post('idioma');
      $nivel = $this->input->post('nivel');

      $this->Idioma_model->editaIdioma([
          "nivel" => $nivel
      ], $id_idioma);

      redirect('Painel_academico/index/?aviso=4');
    }
    
     public function salvarLinkedIdLattes(){
      $this->load->model('LinkedIdLattes_model');
      $id_usuario = $this->session->userdata('id_usuario');
      $endereco = $this->input->post('endereco');

        $this->LinkedIdLattes_model->salvaLinkedIdLattes([
            "id_usuario" => $id_usuario,
            "endereco" => $endereco,
        ]);
          redirect('Idioma/carregaLinkedIdLattes/?aviso=1');
    }
    
    public function carregaLinkedIdLattes(){
      $id_usuario = $this->session->userdata('id_usuario');
      $data = array(
          "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row()
      );
      $this->load->view('cadastra_linkedid_lattes', $data);
    }
    
    public function carregaEditarLattes($id){
     $this->load->model('LinkedIdLattes_model');
    $id_usuario = $this->session->userdata('id_usuario');
    $data = array(
          "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
          "dadosL" => $this->LinkedIdLattes_model->getLattes($id)->row()
      );
      $this->load->view('edita_linkedid_lattes', $data);
    }
    
    public function salvarEdicaoLinkedIdLattes(){
       $this->load->model('LinkedIdLattes_model');
    $id = $this->input->post('id_obs');
    $endereco = $this->input->post('endereco');
    
    $data['endereco'] = $endereco;
    
     $this->LinkedIdLattes_model->editaLattes($data, $id);
    
     redirect('Painel_academico/index/?aviso=5');
    }

}
