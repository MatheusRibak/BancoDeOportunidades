<?php

class Sugestao_model extends CI_Model {

    function cadastrarMensagem($data) {
        $this->db->insert('mensagem', $data);
    }





}
