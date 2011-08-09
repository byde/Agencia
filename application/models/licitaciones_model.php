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
}