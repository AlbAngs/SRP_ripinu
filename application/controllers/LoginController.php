<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('UserModel', 'user', true);
		$this->load->helper('form');
	}

	public function index(){
        $this->load->helper('url');
        $this->load->view('contenido/header');
        $this->load->view('Navbar');
        $this->load->view('login');
         
    }
    public function loginUser(){
    
        if ($this->session->has_userdata(false)) 
		{
            // Regresar el login
            $this->load->view('contenido/header');
            $this->load->view('Navbar');
            $this->load->view('login'); 
	
		} else
		{
               //Regresar la pantalla de inicio
               $this->load->helper('url');
               $this->load->view('contenido/header');
               $this->load->view('Navbar');
               $this->load->view('view_login'); 
            
		}

        		
            }
        		
	/**
	* Método para loguear a un usuario
    **/
    /*
	public function login()
	{
		// Buscamos al usuario
		$user = $this->user->login();
		if ($user === null) 
		{
			$this->session->set_flashdata('error_login','No se ha encontrado el usuario. Verifica tus datos');
			redirect(base_url(), 'refresh');
			//$this->load->view('login');
		} else
		{
			// Guardamos la información del usuario en sesión
			$rol = $this->user->consultar_rol($user->idRol);
			$info_user = array('idUsuario' => $user->idUsuario, 'usuario' => $user->usuario, 'idRol' => $user->idRol, "isLogin" => true,'roles'=>$rol->nombre);
			$this->session->set_userdata($info_user);
			redirect(base_url(), 'refresh');
		}
	}

	/**
	* Método para cerrar sesión
	**/
	public function logout()
	{
		if($this->session->userdata())
			$this->session->sess_destroy();

		redirect(base_url());
	}
}

?>