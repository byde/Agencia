<?php
class Licitaciones extends CI_Controller
{
    public function index()
    {
        $this->load->model("licitaciones_model");
        $data['licitaciones'] = $this->licitaciones_model->get_last_licitaciones();
        if(!$data['licitaciones'])
            $this->load->view("licitaciones/no_licitaciones");
        else

            $this->load->view("licitaciones/last_licitaciones", $data);

    }
	public function cargar_formulario_nueva_licitacion()
	{	$this->load->view("formulario_nueva_licitacion");
		
	}
	public function nueva()
	{
		// Nombre descriptivo, cantidad
		//de articulos, producto, fecha a finalizar.
		$this->load->model("licitaciones_model");
		echo $this->licitaciones_model->guardar();
		//$this->index();
                
		
	}
	public function nuevacampos($idlicitacion)
	{
		// Nombre descriptivo, cantidad
		//de articulos, producto, fecha a finalizar.
		$this->load->model("licitaciones_model");
                echo "entra " .$this->input->post("campos");
;
                for($n = 1; $n <= $this->input->post("campos"); $n++){
                    $this->licitaciones_model->guardarcampo($idlicitacion, $this->input->post("campovalor".$n),$this->input->post("camponombre".$n));
                //echo $idlicitacion . $this->input->post("campovalor".$n) . $this->input->post("camponombre".$n) . "<br />";
                }
		//$this->index();
                
		
	}
	public function ver($idlicitacion)
	{
		$this->load->model("licitaciones_model");
		$data["licitacion"] = $this->licitaciones_model->get_licitacion($idlicitacion);
		$data["campos"] = $this->licitaciones_model->get_campos($idlicitacion);
                
                $this->load->view("licitaciones/ver", $data);
		
	}
}