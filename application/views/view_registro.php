<br>

<div class="container ">
  
  <div class="row" >
  <div class="col-sm-7 mx-auto  card-body shadow p-3 mb-1 bg-light rounded">
    <h4 class="card-title mb-4 mt-1 text-center">Registro al Repositorio</h4>
  <form style="padding: 10px 10px;">
      <div class="form-group">
        <label>Nombre de Usuario *</label>
        <input type="text" class="form-control col-md-6"  name="user" required placeholder="Nombre de Usuario">
      </div>    
    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Nombre *</label>
        <input type="text" class="form-control" name="name" placeholder="Nombre">
      </div>
    <div class="form-group col-md-4">
      <label>Apellido Paterno *</label>
      <input type="text" class="form-control" name="app" placeholder="Apellido Paterno">
    </div>

    <div class="form-group col-md-4">
      <label>Apellido Materno *</label>
      <input type="text" class="form-control" name="apm" placeholder="Apellido Materno">
    </div>

    </div>
       <div class="form-row">
      <div class="form-group col-md-4">
        <label>Teléfono *</label>
        <input required type="text" class="form-control" name="telefono" placeholder=" Teléfono">
      </div>
    <div class="form-group col-md-4">
      <label> Correo Electrónico *</label>
      <input required type="email" class="form-control" name="email" placeholder=" Correo Electrónico">
    </div>

    <div class="form-group col-md-4">
      <label>Contraseña *</label>
      <input type="password" required class="form-control" name="password" placeholder="Contraseña">
    </div>
</div>
<div class="form-row">
      <div class="form-group col-md-6">
        <label>Carrera *</label>
        <select id="inputState" class="form-control">
          <option selected>Selecciona Carrera</option>
          <option>Ingenieria en Agronomia</option>
          <option>Licenciatura en Informática</option>
          <option>Licenciatura en Administración</option>
        </select>
      </div>
    </div>
   
    <div class="form-group">
        
   <small class="form-text text-danger">* Campos Obligatorios</small><br>
                <a type="submit" class="btn btn-info col-12 " href="<?php echo base_url();?>profesor_controller/proyectoProfesor" >Registrarse</a>
            </div>  
  </form>
  </div>
</div>
</div>