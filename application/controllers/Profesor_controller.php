<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor_controller extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->helper('url');

}

	public function registroUser(){

		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_registro');		
	}

	public function proyectoProfesor(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_proyectoProfesor');
	}

	public function enviosProfesor(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_proyectosEnviados');

	}
	public function registroAlumno(){
		$this->load->view('contenido/header');
		$this->load->view('Navbar');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_Profesor_verLista_alumno');	
	}

	public function listaAlumnos(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_listadoAlumnos');
	}

	public function agregarAlumnoProyecto(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_agregar_alumno_proyecto');
	}	


	public function editarPassword(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_edit_password');
	}


	public function editarPerfil(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_edit_perfil');
	}

	public function editarAlumnos(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_editar_alumno');
	}

	public function editarProyecto(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_editar_proyecto');
	}

	public function editarCronograma(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_editar_cronograma');
	}

	public function editarActiCronograma(){
		$this->load->view('contenido/header');
		$this->load->view('view_navbar_perfil');
		$this->load->view('view_navbar_profesor');
		$this->load->view('view_editar_actividad_cronograma');
	}

}