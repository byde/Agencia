<?php


/**
Clase controlador, estan los metodos basicos referentes a registro, ingreso  y/o auteticacion
*/
class Registros_control extends CI_Controller
{
	
	/*
	function __construct()
	{
		parent::__construct();	
	}
	*/
	
    
    
	public function index()
	{
		
		$this->load->view('inicio_bienvenida');	
		/*
		$datos['filas']= $this->registros_modelo->obtener_todos();
		$datos['titulo']='listado de registros';
		$this->load->view('registros_vista',$datos);		
		*/
		
	}
        
	
	function registrar()
	{
		   //$this->load->helper('form');
			$this->form_validation->set_rules('nombre_usuario','nombre_usuario','required|trim');
			$this->form_validation->set_rules('apellido_usuario','apellido_usuario','required|trim');
			$this->form_validation->set_rules('correo_electronico','correo_electronico','required|trim');
			$this->form_validation->set_rules('password','password','required|md5');
			$this->form_validation->set_rules('empresa_usuario','empresa_usuario','required');
			$this->form_validation->set_rules('ciudad_usuario','ciudad_usuario','required');
			$this->form_validation->set_rules('estado_usuario','estado_usuario','required');
			
			$this->form_validation->set_message('required','debe introducir el campo de %s');
			$this->form_validation->set_message('valid_email','debe introducir direccion de correo electronico correcto');
		
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('registro');
		}else{
			
			$this->load->model('registros_modelo');
			$exist=$this->registros_modelo->obtener_checar($_POST['usuario']);
			if($exist==TRUE)
			{
				$this->load->view('registro');
				echo '<h3>usuario ya existe!</h3>';
                        }else{
                            
			//$this->load->model('registros_modelo');
			$this->registros_modelo->insercion();
			$this->load->view('inicio_bienvenida');
		   }
		}
		
 	}
        
     
        
        function autenticar()
        {
            $this->form_validation->set_rules('nombrecorreoaut', 'nombrecorreoaut', 'required|trim');
            $this->form_validation->set_rules('passwordaut', 'passwordaut', 'required|trim|md5');
            $this->form_validation->set_message('required', 'debe introducir el campo de %s');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('autenticar_vista');
                
                
            } else {
                $this->load->model('registros_modelo');
                $exist = $this->registros_modelo->obtener_checar($_POST['nombrecorreoaut']);
                if ($exist == FALSE) {
                    //$this->load->view('autenticar_vista');
                    echo '<h3>usuario o contraseña incorrectos</h3>';
                } else {
                    //$this->load->library('session');
                    session_start();
                    $_SESSION['nombreocorreo'] = $_POST['nombrecorreoaut'];
                    //$this->session->set_userdata('usuario',$_POST['nombrecorreoaut'] );
                    //$this->load->view('principal_autenticado'); //esta linea si estaba activa
					redirect('inicio');
					
				}
            }
        }


		function modificar_registrar()
		{

			session_start();
			$id2=$_SESSION['nombreocorreo'];
			$this->load->model('registros_modelo');
			$this->registros_modelo->modificar_perfil_modelo($id2);
			$_SESSION['nombreocorreo']=$_POST['nombre_usuario'];
			$this->load->view('principal_autenticado');
		}

        function modificar()
        {
			session_start();
			$id=$_SESSION['nombreocorreo'];
            $this->load->model('registros_modelo');
            $datos2['perf'] = $this->registros_modelo->obtenerpor_id($id);
            $this->load->view('modificar_perfil',$datos2);	
            
            
        }
		function salir()
	  	{
			session_start();
			session_destroy();
			//$this->load->view('inicio_bienvenida');
			redirect('inicio');
			echo '<h4>cerraste sesion con exito</h4>';
		}

	

	
}
?>