<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('login_empregador');
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
                ->from("empregador")
                ->where("email", $email)
                ->where("senha", md5($senha));

        $dadosAdmin = $this->db->get();
        if ($dadosAdmin->num_rows() > 0) {
            $admin = $dadosAdmin->row();

            $this->session->set_userdata('logadoEmpregador', TRUE);
            $this->session->set_userdata('idAdministrador', $admin->id_empregador);
            //echo "login ok: " . $this->session->userdata('idAdministrador');
            //Redirecionando para apagina de painel de administração
            redirect('/PainelEmpregador');
        } else {
            $this->load->view('login_empregador', ['login_falhou' => TRUE]);
        }
    }

}
