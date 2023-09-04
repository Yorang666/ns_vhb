<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$this->load->model('RestaurantesModel');
			
			$data = array(
				'restaurantes'	=> $this->RestaurantesModel->restaurantes(),
			);

			if($this->session->userdata('tipo') == 1){
				$header = array(
					'title' 		=> 'Área Administrativa'
				);

				$this->load->view('resources/header', $header);
				$this->load->view('adm', $data);
				$this->load->view('resources/footer');
			}else{
				$header = array(
					'title' 		=> 'Lista de Retaurantes'
				);

				$this->load->view('resources/header', $header);
				$this->load->view('inicio', $data);
				$this->load->view('resources/footer');
			}
		}else{
			redirect(base_url(''), 'refresh');
		}
	}

	public function restaurante()
	{
		if($this->session->userdata('logged_in')){
			$id = $this->uri->segment(2);
			$this->load->model('RestaurantesModel');

			$data = $this->RestaurantesModel->pratos($id);

			$header = array(
				'title' => $data['restaurante']['restaurante_nome']
			);
			
			$this->load->view('resources/header', $header);
			$this->load->view('restaurante', $data);
			$this->load->view('resources/footer');

		}else{
			redirect(base_url(''), 'refresh');
		}
	}

	public function adminRestaurante()
	{
		if($this->session->userdata('logged_in')){
			$id = $this->uri->segment(2);
			$this->load->model('RestaurantesModel');

			$data = $this->RestaurantesModel->pratos($id);

			$header = array(
				'title' => $data['restaurante']['restaurante_nome']
			);
			
			$this->load->view('resources/header', $header);
			$this->load->view('adminRestaurante', $data);
			$this->load->view('resources/footer');

		}else{
			redirect(base_url(''), 'refresh');
		}
	}

	public function deletarPrato()
	{
		if($this->session->userdata('logged_in')){
			$id = $this->uri->segment(2);
			$excluir = $this->uri->segment(3);
			$this->load->model('RestaurantesModel');

			$this->RestaurantesModel->deletarPrato($excluir);
			
			redirect(base_url('adminRestaurante/').$id, 'refresh');
		}else{
			redirect(base_url(''), 'refresh');
		}
	}

	public function novoProduto()
	{
		if($this->session->userdata('logged_in')){
			$id = $this->uri->segment(2);
			$this->load->model('RestaurantesModel');

			$data = array(
		        'prato_restaurante_id' 	=> $id,
		        'prato_nome' 			=> $this->input->post('nome'),
		        'prato_descricao' 		=> $this->input->post('descricao'),
				'prato_preco' 			=> $this->input->post('preco'),
			);

			$this->RestaurantesModel->novoProduto($data);

			redirect(base_url('adminRestaurante/').$id, 'refresh');
		}else{
			redirect(base_url(''), 'refresh');
		}
	}

	public function editarProduto()
	{
		if($this->session->userdata('logged_in')){
			$id = $this->uri->segment(2);
			$this->load->model('RestaurantesModel');

			$data = array(
				'prato_id'				=> $this->input->post('idPrato'),
		        'prato_restaurante_id' 	=> $id,
		        'prato_nome' 			=> $this->input->post('nome'),
		        'prato_descricao' 		=> $this->input->post('descricao'),
				'prato_preco' 			=> $this->input->post('preco'),
			);

			$this->RestaurantesModel->editarProduto($data);

			redirect(base_url('adminRestaurante/').$id, 'refresh');
		}else{
			redirect(base_url(''), 'refresh');
		}
	}

	public function deletarRestaurante()
	{
		if($this->session->userdata('logged_in')){
			$id = $this->uri->segment(2);
			$this->load->model('RestaurantesModel');

			$data = $this->RestaurantesModel->pratos($id);

			foreach($data['pratos'] as $prato){
				$this->RestaurantesModel->deletarPrato($prato['prato_id']);
			}

			$this->RestaurantesModel->deletarRestaurante($id);

			redirect(base_url('main'), 'refresh');
		}else{
			redirect(base_url(''), 'refresh');
		}
	}

	public function novoRestaurante()
	{
		if($this->session->userdata('logged_in')){
			$this->load->model('RestaurantesModel');

			$data = array(
		        'restaurante_nome' 		=> $this->input->post('nome'),
		        'restaurante_descricao'	=> $this->input->post('descricao'),
		        'restaurante_endereco' 	=> $this->input->post('endereco'),
				'restaurante_telefone' 	=> $this->input->post('tel'),
			);

			$this->RestaurantesModel->novoRestaurante($data);

			redirect(base_url('main'), 'refresh');
		}else{
			redirect(base_url(''), 'refresh');
		}
	}

	public function editarRestaurante()
	{
		if($this->session->userdata('logged_in')){
			$this->load->model('RestaurantesModel');

			$data = array(
				'restaurante_id'		=> $this->input->post('idRest'),
		        'restaurante_nome' 		=> $this->input->post('nome'),
		        'restaurante_descricao'	=> $this->input->post('descricao'),
				'restaurante_endereco' 	=> $this->input->post('endereco'),
				'restaurante_telefone' 	=> $this->input->post('tel'),
			);

			$this->RestaurantesModel->editarRestaurante($data);

			redirect(base_url('main'), 'refresh');
		}else{
			redirect(base_url(''), 'refresh');
		}
	}
}
