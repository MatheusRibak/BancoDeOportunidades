<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GeraPdf extends CI_Controller {
    
    public function curriculo() {
        $this->load->model('Usuario_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $this->load->model('Vaga_academico_model');
        $this->load->model('Idioma_model');
        $this->load->model('Idioma_model');
        $this->load->model('linkedIdLattes_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "vagas_candidatadas" => $this->Vaga_academico_model->getMinhasVagas($id_usuario)->result(),
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_usuario)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExpUsuario($id_usuario)->result(),
            "dadosIdioma" => $this->Idioma_model->getIdiomas($id_usuario)->result(),
            "dadosLattesLonkedId" => $this->linkedIdLattes_model->getLinkedIdLattes($id_usuario)->result(),
            "dadosAtividadesComplementares" =>$this->Academico_model->getAtividade()->result()
        );
        $this->load->view('curriculo_pronto', $data);
    }

    public function criaPdf() {
        $this->load->model('Usuario_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $this->load->model('Vaga_academico_model');
        $this->load->model('Idioma_model');
        $this->load->model('Idioma_model');
        $this->load->model('linkedIdLattes_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "vagas_candidatadas" => $this->Vaga_academico_model->getMinhasVagas($id_usuario)->result(),
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_usuario)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExpUsuario($id_usuario)->result(),
            "dadosIdioma" => $this->Idioma_model->getIdiomas($id_usuario)->result(),
            "dadosLattesLonkedId" => $this->linkedIdLattes_model->getLinkedIdLattes($id_usuario)->result(),
            "dadosAtividadesComplementares" =>$this->Academico_model->getAtividade()->result()
        );        
        
        //load the view and saved it into $html variable
        $html = $this->load->view('curriculo_pronto', $data, true);

        //this the the PDF filename that user will get to download
        $pdfFilePath = "curriculo.pdf";

        //load mPDF library
        $this->load->library('m_pdf');

        //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);

        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
    }
    
    public function curriculoEmpregador($id_usuario) {
        $this->load->model('Usuario_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $this->load->model('Vaga_academico_model');
        $this->load->model('Idioma_model');
        $this->load->model('linkedIdLattes_model');
        $data = array(
            "vagas_candidatadas" => $this->Vaga_academico_model->getMinhasVagas($id_usuario)->result(),
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_usuario)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExpUsuario($id_usuario)->result(),
            "dadosIdioma" => $this->Idioma_model->getIdiomas($id_usuario)->result(),
            "dadosLattesLonkedId" => $this->linkedIdLattes_model->getLinkedIdLattes($id_usuario)->result(),
            "dadosAtividadesComplementares" =>$this->Academico_model->getAtividadeEmpregador($id_usuario)->result()
        );
        $this->load->view('curriculo_pronto', $data);
    }

    public function criaPdfEmpregador($id_usuario) {
        $this->load->model('Usuario_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $this->load->model('Vaga_academico_model');
        $this->load->model('Idioma_model');
        $this->load->model('linkedIdLattes_model');
        $data = array(
            "vagas_candidatadas" => $this->Vaga_academico_model->getMinhasVagas($id_usuario)->result(),
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_usuario)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExpUsuario($id_usuario)->result(),
            "dadosIdioma" => $this->Idioma_model->getIdiomas($id_usuario)->result(),
            "dadosLattesLonkedId" => $this->linkedIdLattes_model->getLinkedIdLattes($id_usuario)->result(),
            "dadosAtividadesComplementares" =>$this->Academico_model->getAtividadeEmpregador($id_usuario)->result(),
            "id_usuario" => $id_usuario
        );        
        
        //$this->load->view('curriculo_pronto_empregador', $data);
        //load the view and saved it into $html variable
        $html = $this->load->view('curriculo_pronto_empregador', $data, true);

        //this the the PDF filename that user will get to download
        $pdfFilePath = "Curriculo.pdf";

        //load mPDF library
        $this->load->library('m_pdf');

        //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);

        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
    }

}
