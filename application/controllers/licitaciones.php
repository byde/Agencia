<?php

class Licitaciones extends CI_Controller {

    public function index() {
        
    }
	public function cargar_ultimas_licitaciones(){
		$this->load->model("licitaciones_model");
        $data['licitaciones'] = $this->licitaciones_model->get_last_licitaciones();
        if (!$data['licitaciones'])
            $this->load->view("licitaciones/no_licitaciones");
        else
            $this->load->view("licitaciones/ultimas_licitaciones", $data);
	}
	public function cargar_mis_licitaciones(){
		$this->load->model("licitaciones_model");
        $data['licitaciones'] = $this->licitaciones_model->get_last_licitaciones();
        if (!$data['licitaciones'])
            $this->load->view("licitaciones/no_licitaciones");
        else
            $this->load->view("licitaciones/mis_licitaciones", $data);
	}
	public function cargar_catalogo_productos() {
        $this->load->view("licitaciones/catalogo_productos");
    }
	public function cargar_licitaciones_sugeridas() {
        $this->load->view("licitaciones/licitaciones_sugeridas");
    }
	public function cargar_buscar_licitacion() {
        $this->load->view("licitaciones/buscar_licitacion");
    }
	public function cargar_buscar_producto() {
        $this->load->view("licitaciones/buscar_producto");
    }
    public function cargar_historial() {
        $this->load->view("licitaciones/historial");
    }
	/////////////////////////////////////////////////////
	//Métodos  crear licitacion
	public function cargar_formulario_nueva_licitacion() {
        $this->load->view("formulario_nueva_licitacion");
    }
    public function nueva() {
        // Nombre descriptivo, cantidad
        //de articulos, producto, fecha a finalizar.
        $this->load->model("licitaciones_model");
        echo $this->licitaciones_model->guardar();
    }
    public function nuevacampos($idlicitacion) {
        $this->load->model("licitaciones_model");
        echo "entra " . $this->input->post("campos");

        for ($n = 1; $n <= $this->input->post("campos"); $n++) {
            $this->licitaciones_model->guardarcampo($idlicitacion, $this->input->post("campovalor" . $n), $this->input->post("camponombre" . $n));
            //echo $idlicitacion . $this->input->post("campovalor".$n) . $this->input->post("camponombre".$n) . "<br />";
        }
    }
    public function ver($idlicitacion) {
        $this->load->model("licitaciones_model");
        $data["licitacion"] = $this->licitaciones_model->get_licitacion($idlicitacion);
        $data["campos"] = $this->licitaciones_model->get_campos($idlicitacion);

        $this->load->view("licitaciones/ver", $data);
    }
    ///////////////////////////////////////////////////
    // metodos relacionados con los comentarios
    public function nuevo_comentario_licitacion() {
        $this->load->model("licitaciones_model");
        echo $this->licitaciones_model->guardar_comentario_licitacion();
    }

    public function ver_comentarios_licitacion($idlicitacion) {
        $this->load->model("licitaciones_model");
        $data["licitacion"] = $this->licitaciones_model->get_licitacion($idlicitacion);
        $data["comentarios"] = $this->licitaciones_model->get_last_licitaciones_comments($idlicitacion);

        if (!$data["comentarios"]) {
            $this->load->view("licitaciones/no_comentarios", $data);
        } else {
            $this->load->view("licitaciones/comentarios", $data);
        }
    }
    ///////////////////////////////////////////////////
    // metodos relacionados con licitante (proveedor)
    //metodo que carga formulario para ofertar
    public function ofertar_licitacion($idlicitacion) {
        $this->load->model("licitaciones_model");
        $data["licitacion"] = $this->licitaciones_model->get_licitacion($idlicitacion);
        $data["campos"] = $this->licitaciones_model->get_campos($idlicitacion);
        $this->load->view("licitaciones/ofertar_licitacion", $data);
    }
    public function nueva_oferta_licitacion() {
        $this->load->model("licitaciones_model");
        $idoferta = $this->licitaciones_model->guardar_oferta_licitacion(array(
                    "idlicitacion" => $this->input->post("idlicitacion"),
                    "idusuario" => 0,
                    "precio" => $this->input->post("precio"),
                    "nota" => $this->input->post("nota")
                ));
        foreach ($this->input->post() as $c=>$v)
        {
            if (is_numeric($c) && $v == "on")
                $this->licitaciones_model->guardar_oferta_campos($idoferta, $c, 1);
        }
    }

}