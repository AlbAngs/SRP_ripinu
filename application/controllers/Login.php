<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('login');		
	}

	public function loginUser(){

		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_login');		
	}
	

	public function proyectos(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_proyectos');
	}

	public function alumnos(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('navbar_alumnos');
		$this->load->view('view_alumnos');
	}

	public function verarchivo(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_archivo');
	}

	public function editararchivo(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_modificar');
	}

	public function carrera(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_carrera_main');
		//$this->load->view('view_carrera');
	}
	public function add_carrera(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_carrera');
	}
	public function edit_carrera(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_edit_carrera');
	}
	public function grupo(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_listgrupo');
	}

public function editarGrupo(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_grupo');
	}
public function addGrupo(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_admin');
		$this->load->view('view_editar_grupo');
	}






	
	



}
