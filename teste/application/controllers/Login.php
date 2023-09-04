<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($err = null)
	{
        $data = array(
            'err'   => $err,
        );
        
        if($this->session->userdata('logged_in')){
            $this->session->set_userdata('logged_in', FALSE);
        }

        $header = array(
            'title' => 'Login'
        );

        $this->load->view('resources/header', $header);
        $this->load->view('login', $data);
        $this->load->view('resources/footer');
	}


    public function logar()
    {
        $this->load->model('LoginModel');

        $user = array(
            'email'     => $this->input->post('email'),
            'senha'     => MD5($this->input->post('senha')),
            'logged_in' => TRUE,
            'tipo'      => null,
        );

        $result = $this->LoginModel->pesquisar($user);

        if($result != null){
            $result = json_decode(json_encode($result), true);
            $user['tipo'] = $result['user_tipo'];
            $this->session->set_userdata($user);
            redirect(base_url('main'), 'refresh');
            
        }else{
            $this->index(1);
        }
    }

    public function logout()
    {
        $this->session->set_userdata('logged_in', FALSE);
        $this->index();
    }
}
