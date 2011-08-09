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
}