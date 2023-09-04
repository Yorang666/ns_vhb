<?php

class LoginModel extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function pesquisar($user) 
    {
        $where = array(
            'user_email' => $user['email'],
            'user_senha' => $user['senha']
        );
        $query = $this->db->get_where('users', $where);
        return $query->row();
    }
}