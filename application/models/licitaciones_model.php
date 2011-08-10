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
		$id = $this->db->insert('licitaciones');
		return $this->db->insert_id();
	}
        
        function guardarcampo($idlicitacion, $campovalor, $camponombre)
        {
            $data = array(
                "idlicitacion" => $idlicitacion,
                "valor" => $campovalor,
                "nombre" => $camponombre
                );
                $this->db->insert("campos", $data);
                return;
        }
        
	function ver_conincidencias($data)
	{
		$this->db->select('licitaciones',$data);
		return;
	}
        
        function get_licitacion($idlicitacion)
        {
            $q = $this->db->get_where("licitaciones", array("idlicitacion"=> $idlicitacion));
            if ($q->num_rows() > 0)
                    return $q->row_array();
            return false;
        }
        function get_campos($idlicitacion)
        {
            $q = $this->db->get_where("campos", array("idlicitacion"=> $idlicitacion));
            if ($q->num_rows() > 0)
                    return $q->result_array();
            return false;
        }

}