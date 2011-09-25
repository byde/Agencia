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

	function mostrar_licitacion()
	{
		$this->db->select('licitaciones');
		$query = $this->db->where('idlicitacion',$this->uri->segment(3));
		return $query->result_array();
		
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
///////////////////////////////////////////////
		// Metodos comentarios
		function get_last_licitaciones_comments($idlicitacion)
    	{
    		
			$q = $this->db->get_where("comentarios", array("idlicitacion"=> $idlicitacion));
			if ($q->num_rows() > 0)
                   return $q->result_array();
            return false;
		}
		function guardar_comentario_licitacion()
		{
		// campos: idcomentario idusuario fecha idlicitacion comentario	
		$this->db->set("fecha", "NOW()", false);
		$this->db->set($this->input->post());
		$id = $this->db->insert('comentarios');
		return $this->db->insert_id();
		}
///////////////////////////////////////////////
		// Metodos oferta licitante (proveedor)
		function guardar_oferta_licitacion($data)
		{
		//campos tabla oferta
		//idoferta idusuario idlicitacion precio fecha nota
		$this->db->set("fecha", "NOW()", false);
		$this->db->set($data);
		$id = $this->db->insert('ofertas');
		return $this->db->insert_id();
		}

		function guardar_oferta_campos($idoferta, $idcampo, $valor)
		{
		//campos
		//campos tabla camposoferta idcxo idoferta idcampo valor
                    $this->db->set(array(
                        "idoferta" => $idoferta,
                        "idcampo" => $idcampo,
                        "valor" => $valor
                    ));
                    $id = $this->db->insert('camposofertas');
		}
		
		
		
		

}
