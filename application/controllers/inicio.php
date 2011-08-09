<?php
class Inicio extends CI_Controller
{
    public function index()
    {
        $this->load->model("registros_modelo");
        if ($this->registros_modelo->is_logged())
                $data['sesion'] = sprintf ("Bienvenido %s || %s", 
                        anchor(site_url("registros_control/modificar"), $this->registros_modelo->get_user(), array("id"=>"btn_mod")),
                        anchor(site_url("registros_control/salir"), "Salir")
                        );
        else
            $data["sesion"] = sprintf ("%s || %s",
                    anchor(site_url("registros_control/autenticar"), "Iniciar Sesión", array("id"=>"btn_ini")),
                    anchor(site_url("registros_control/registrar"), "Registrarse", array("id" => "btn_reg")));
        $this->load->view("inicio", $data);
    }
}