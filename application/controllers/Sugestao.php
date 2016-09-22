<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sugestao extends CI_Controller {

    public function index() {
        $this->load->view('sugestao_nao_logado');
    }

    public function salvaMensagem(){

      $nome = $this->input->post('nome');
      $email = $this->input->post('email');
      $mensagem = $this->input->post('mensagem');

      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
      $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[400]');
      $this->form_validation->set_rules('email', 'Email', 'required|max_length[400]');
      $this->form_validation->set_rules('mensagem', 'Mensagem', 'required|max_length[400]');

      if ($this->form_validation->run() == FALSE) {
          $this->index();
          return;
      }
      else {
        $this->Sugestao_model->cadastrarMensagem([
            "nome" => $nome,
            "email" => $email,
            "sugestao" => $mensagem
        ]);
        redirect('Home/index/?aviso=5');
      }


    }




}
