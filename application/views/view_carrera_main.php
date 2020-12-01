<br>
<br>
 <h5 class="text-center">Lista de Carreras</h5>
<div class=" d-flex justify-content-center">    
<nav class="navbar navbar-expand-lg " style="width: 50%;" >

<ul class="nav nav-masthead ml-auto">

  <li id="buscar_proyecto" class="nav-item dropdown">
    <a href="<?php echo base_url();?>login/add_carrera" ><span class=" icon-plus" title="Agregar Carrera"></span></a>
  </li>
</ul>
</nav>
</div>
 
  <table class="table table-hover table-condensed" style="width: 50%;">
  <thead class="bg-info text-muted">
    <tr class="text-center">
      <th scope="col">Id</th>
      <th scope="col" >Nombre de la carrera</th>
      <th scope="col-sm-2" colspan="3" >Opciones</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td class="text-center">0001</td>
      <td class="text-center">Licenciatura en informática</td>
      <td class="text-center"><a href="<?php echo base_url();?>login/edit_carrera" ><span class="icon-edit" title="Editar Carrera" style="margin-right: 5px;"></span></a><a href="" ><span class="icon-trash" title="Eliminar Carrera" style="margin-left: 5px;"></span></a></td>
    
    </tr>
  </tbody>
</table>

