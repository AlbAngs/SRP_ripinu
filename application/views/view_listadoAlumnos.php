<br>
<!--agregar icono mas-->
<h5 class="text-center">Lista de Alumnos</h5>
<br>
<h5 class="text-center tamañoTexto">Proyecto: Formulación y Evaluación de Proyectos.</h5>
<div class="d-flex justify-content-center">
  <nav class="navbar navbar-expand-lg navbar-light" style="width: 70%;" >
    <ul class="nav nav-masthead ml-auto">
      <li id="buscar_proyecto" class="nav-item dropdown">
        <a href="<?php echo base_url();?>profesor_controller/agregarAlumnoProyecto" ><span class=" icon-plus" title="Agregar Alumno" ></span></a>
      </li>
    </ul>
  </nav>
</div>

<table class="table table-hover table-condensed" style="width:70%">
  <thead class="bg-info text-muted">
    <tr class="text-center">
      <th scope="col">Matrícula</th>
      <th scope="col" >Nombre del Alumno </th>
      <th scope="col" >Carrera</th>
      <th scope="col" >Semestre</th>
      <th scope="col" >Opciones</th>
    </tr>
  </thead>
  <tbody >
    <tr  >
     <td>0115010004</td>
     <td >Maria Isabel Gomez Hernández</td>
     <td>Licenciatura en Informática</td>
     <td>Octavo</td>
     <td class="text-center">
      <a href="<?php echo base_url();?>profesor_controller/editarAlumnos" title="Editar Alumno " ><span style="margin-right: 5px;" class="icon-edit"></span></a>
      <a href="#" title="Eliminar Alumno " ><span style="margin-right: 5px;margin-left: 5px;" class=" icon-user-delete"></span></a>
    </td>
  </tr>
  <tr >
   <td>0115010005</td>
   <td>Moises Vega  Hernández</td>
   <td>Licenciatura en Informática</td>
   <td>Octavo</td>
   <td class="text-center">
    <a href="#" title="Editar Alumno " ><span style="margin-right: 5px;" class="icon-edit"></span></a>
    <a href="#" title="Eliminar Alumno " ><span style="margin-right: 5px;margin-left: 5px;" class=" icon-user-delete"></span></a>
  </td>
</tr>

</tbody>
</table>


