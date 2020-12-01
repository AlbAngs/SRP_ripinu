
<br>
 <h5 class="text-center">Lista de Alumnos</h5>
 <br>
<table class="table table-hover table-condensed ">
  <thead class="bg-info text-muted">
    <tr class="text-center">
      <th scope="col" >Matrícula</th>
      <th scope="col" >Nombre del Alumno</th>
      <th scope="col">Proyecto Asignado</th>
      <th scope="col" >Responsable Inmediato</th>
      <th scope="col" >Opciones</th>
    </tr>
  </thead>
  <tbody id="myTable" class="text-left">
    <tr>
      <td>0115010000</td>
      <td>Maria Isabel Goméz Hernández</td>
      <td>Formulacion de nose que para no se que</td>
      <td>Elizabeth Guadalope Del rosario Perez</td>
      <td class="text-center"><span style="margin-right: 5px"class=" icon-eye" title="Ver Alumno"></span>
       <span style="margin-right: 5px;margin-left: 5px;" class="icon-edit" title="Editar Alumno"></span>
      <span style="margin-right: 5px;"class="icon-trash" title="Eliminar Alumno"></span></td>
    </tr>
    <tr>
      <td>0115010011</td>
      <td>Maria Isabel Goméz Hernández</td>
      <td>Formulacion de nose que para no se que</td>
      <td>Elizabeth Guadalope Del rosario Perez</td>
      <td class="text-center"><span style="margin-right: 5px"class=" icon-eye" title=""></span>
       <span style="margin-right: 5px;margin-left: 5px;" class="icon-edit" title=""></span>
      <span style="margin-right: 5px;"class="icon-trash" title=""></span></td>
    </tr>
    <tr>
      <td>0115010004</td>
      <td>Maria Isabel Goméz Hernández</td>
      <td>Formulacion de nose que para no se que</td>
      <td>Elizabeth Guadalope Del rosario Perez</td>
      <td class="text-center"><span style="margin-right: 5px"class=" icon-eye" title=""></span>
       <span style="margin-right: 5px;margin-left: 5px;" class="icon-edit" title=""></span>
      <span style="margin-right: 5px;"class="icon-trash" title=""></span></td>
    </tr>
    <tr>
      <td>0115010001</td>
      <td>Maria Isabel Goméz Hernández</td>
      <td>Formulacion de nose que para no se que</td>
      <td>Elizabeth Guadalope Del rosario Perez</td>
      <td class="text-center"><span style="margin-right: 5px"class=" icon-eye" title="Ver Alumno"></span>
       <span style="margin-right: 5px;margin-left: 5px;" class="icon-edit" title="Editar Alumno"></span>
      <span style="margin-right: 5px;"class="icon-trash" title="Eliminar Alumno"></span></td>
    </tr>
    <tr>
      <td>0115010005</td>
      <td>Maria Isabel Goméz Hernández</td>
      <td>Formulacion de nose que para no se que</td>
      <td>Elizabeth Guadalope Del rosario Perez</td>
      <td class="text-center"><span style="margin-right: 5px"class=" icon-eye" title=""></span>
      <span style="margin-right: 5px;margin-left: 5px;" class="icon-edit" title=""></span>
      <span style="margin-right: 5px;"class="icon-trash" title=""></span></td>
    </tr>
  </tbody>
</table>

<script>
$(document).ready(function(){
  $("#Buscar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>