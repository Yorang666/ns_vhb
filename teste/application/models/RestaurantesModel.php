<?php

class RestaurantesModel extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function restaurantes() 
    {
        $query = $this->db->get('restaurantes');
        return $query->result_array();
    }

    public function pratos($id)
    {
        $query = $this->db->get_where('restaurantes', array('restaurante_id' => $id));
        $rest = $query->row();

        $query = $this->db->get_where('pratos', array('prato_restaurante_id' => $id));
        $pratos = $query->result_array();

        $result = array(
            'restaurante'   => json_decode(json_encode($rest), true),
            'pratos'        => $pratos
        );

        return $result;
    }

    public function deletarPrato($id){
        $this->db->where('prato_id', $id);
        $this->db->delete('pratos');
    }

    public function novoProduto($data){
        $this->db->insert('pratos', $data);
    }

    public function editarProduto($data){
        $this->db->where('prato_id', $data['prato_id']);
        $this->db->update('pratos', $data);
    }

    public function deletarRestaurante($id){
        $this->db->where('restaurante_id', $id);
        $this->db->delete('restaurantes');
    }

    public function novoRestaurante($data){
        $this->db->insert('restaurantes', $data);
    }

    public function editarRestaurante($data){
        $this->db->where('restaurante_id', $data['restaurante_id']);
        $this->db->update('restaurantes', $data);
    }
}