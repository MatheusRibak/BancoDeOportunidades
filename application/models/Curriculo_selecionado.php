<?php

class Curriculo_selecionado extends CI_Model {

    //CADASTRAR CURRICULO DE SELECAO
    function cadastrarCurriculoSelecionado($data) {
        $this->db->insert("curriculos_selecionados", $data);
    }

    //LISTAR CADIDATADOS 
    function todos() {
        $this->db->select('*');
        $this->db->from('curriculos_selecionados');
        $this->db->join('usuario', 'curriculos_selecionados.id_academico = usuario.id_usuario');
        $this->db->join('dados_vaga', 'curriculos_selecionados.id_dado_vaga = dados_vaga.id_dado_vaga');
        $this->db->where("dados_vaga.status = 'ATIVO' ");
        return $query = $this->db->get()->result();
    }

    //DELETAR VAGA
    function deletarCurriculo($id_vaga_selecionado) {
        $this->db->where('id_vaga_selecionada', $id_vaga_selecionado);
        $this->db->delete('curriculos_selecionados');
    }

}
