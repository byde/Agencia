<?php

class Upload extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
	}
	
	function index()
	{

		//$this->load->view('upload_form',array('error'=>''));
		//$this->load->view('ofertar_licitacion',array('error'=>''));
		
		
	}
	
	function do_upload($idlicitacion)
	{
		$config['upload_path']='././uploads/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='0';
		$config['max_width']='1024';
		$config['max_height']='768';
		
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error'=> $this->upload->display_errors());
			$this->load->view('upload_form',$error);
			
			
		}
		else 
		{
			$data = array('upload_data'=>$this->upload->data());
			//$this->load->view('upload_success',$data);
			echo "<script>alert('La imagen ha sido guardada');</script>";
			$this->load->model("licitaciones_model");
		$data["licitacion"] = $this->licitaciones_model->get_licitacion($idlicitacion);
		$data["campos"] = $this->licitaciones_model->get_campos($idlicitacion);
		$this->load->view("licitaciones/ofertar_licitacion", $data);
		}
	}

 


}

?>


