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
		$data = array(
			"idUsuario" =>1,
			"creacion" =>$this->input->post('creacion'),
			"fin" =>$this->input->post('fin'),
			"descriptivo" =>$this->input->post('descriptivo'),
			/*"cantidad" =>$this->input->post('cantidad'),*/
			"producto" =>$this->input->post('producto')
		);
		$this->load->model("licitaciones_model");
		$this->licitaciones_model->guardar($data);
		$this->index();
		
	}
	public function cargar_formulario_ver_licitacion()
	{	$this->load->view("formulario_ver_licitacion");
		
	}
	public function ver()
	{
		$data = array(
			"descriptivo" =>$this->input->post('descriptivo')
		);
		$this->load->model("licitaciones_model");
		$this->licitaciones_model->ver_coincidencias($data);
		$this->index();
	}
}