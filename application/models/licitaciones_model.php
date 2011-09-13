<?php

class Licitaciones_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
	$this->load->database();
    }
    
    function get_last_licitaciones()
    {
        $this->db->order_by('fin', 'desc');
        $q = $this->db->get('licitaciones',10);
        if ($q->num_rows() > 0)
                return $q->result_array();
        return false;
    }
	function guardar()
	{
		$this->db->set("creacion", "NOW()", false);
		$this->db->set($this->input->post());
		$this->db->insert('licitaciones');
		return;
	}
	function ver_conincidencias($data)
	{
		$this->db->select('licitaciones',$data);
		return;
	}
	function mostrar_licitacion()
	{
		$this->db->select('licitaciones');
		$query = $this->db->where('idlicitacion',$this->uri->segment(3));
		return $query->result_array();
		
	}

}