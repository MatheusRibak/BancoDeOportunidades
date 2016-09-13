<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('index');
    }

    public function doLogin() {
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        //Verificando campos do form
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required');

        //Caso ocorra algum erro na validação do form
        if ($this->form_validation->run() == FALSE) {
            $this->index();
            return;
        }

        $this->db
                ->select("*")
                ->from("usuario")
                ->where("email", $email)
                ->where("senha", md5($senha));

        $dadosAdmin = $this->db->get();
        if ($dadosAdmin->num_rows() > 0) {
            $admin = $dadosAdmin->row();

            $this->session->set_userdata('logadoUsuario', TRUE);
            $this->session->set_userdata('id_usuario', $admin->id_usuario);
            $this->session->set_userdata('nivel', $admin->nivel);
            //echo "login ok: " . $this->session->userdata('id_usuario');
            $nivel = $this->session->userdata('nivel');
            //echo "login ok: " . $nivel;
            //Redirecionando para apagina de painel de administração
            if ($nivel == "ACADEMICO"):
                redirect('/Painel_academico');
            else:
                redirect('/PainelEmpregador');
            endif;
        } else {
            $this->load->view('index', ['login_falhou' => TRUE]);
        }
    }

}
