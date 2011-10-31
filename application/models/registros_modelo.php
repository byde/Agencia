<?php

/**
  modelo que contiene los metodos basicos referentes al registro, ingreso y/o autenticacion
 */
class Registros_modelo extends CI_Model {
    /*
      function __construct()
      {

      parent::__construct();
      $this ->load->database();
      }
     */

    /*
      function obtener_todos()
      {
      $query= $this->db->get('registros');
      if($query->num_rows>0)
      {
      foreach($query->result() as $fila)
      {
      $datos[]=$fila;
      }
      return $datos;
      }
      }
     */

    function insercion() {
        $_POST['password'] = md5($_POST['password']);
        $this->db->insert('usuarios', $_POST);
    }

    function obtenerpor_id($id) {
        $porId = $this->db->get_where('usuarios', array('nombre_usuario' => $id));
        return $porId->row_array();
    }

    function obtener_checar($id) {
        $porId = $this->db->get_where('usuarios', array('nombre_usuario' => $id));
        if ($porId->num_rows == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function modificar_perfil_modelo($id2) {

        $this->db->where('nombre_usuario', $id2);
        $this->db->update('usuarios', $_POST);
    }
    
    function is_logged()
    {
        session_start();
		if(isset($_SESSION['nombreocorreo']))
            $r = true;
        else
            $r = false;
        
        return $r;
    }
    
    function get_user()
    {	//session_register('idd');
		$dat=$this->obtenerpor_id($_SESSION['nombreocorreo']);
		$_SESSION['idd']=$dat['idUsuario'];
        return $_SESSION['nombreocorreo'];
    }
	
}

?>