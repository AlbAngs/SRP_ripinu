<br>
<br>
<h5 class="text-center">Lista de Grupos</h5>
<div class="d-flex justify-content-center">
  <nav class="navbar navbar-expand-lg" style="width: 50%;" >
    <ul class="nav nav-masthead ml-auto">
      <li id="buscar_proyecto" class="nav-item dropdown">
        <a href="<?php echo base_url();?>login/addGrupo" ><span class=" icon-plus" data-toggle="tooltip"  title="Agregar Grupo"></span></a>
      </li>
    </ul>
  </nav>
</div>

<table class="table table-hover table-condensed" style="width:50%">
  <thead class="bg-info text-muted">
    <tr class="text-center">
      <th scope="col" >Id</th>
      <th scope="col" >Grupo</th>
      <th scope="col">Carrera</th>
      <th scope="col-sm-2" colspan="3">Opciones</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td  class="text-center">01</td>
      <td  class="text-center">801A</td>
      <td  class="text-center">Informática</td>
      <td  class="text-center"><a href="<?php echo base_url();?>login/editarGrupo" ><span class="icon-edit" data-toggle="tooltip"  title="Editar Grupo" style="margin-left: 5px;"></span></a><span class="icon-trash" data-toggle="tooltip"  title="Eliminar Grupo" style="margin-left: 5px;"></span></td> 
    </tr>
  </tbody>
</table>


