<?php

class Experiencia_model extends CI_Model {


     public function salvaExp($data) {
         $this->db->insert('experiencia', $data);
    }




}
