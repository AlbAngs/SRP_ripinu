<br><div class="container ">
  
  <div class="row" >
  <div class="col-sm-7 mx-auto  card-body shadow p-3 mb-1 bg-light rounded">
    <h4 class="card-title mb-4 mt-1 text-center">Agregar Alumno al Proyecto</h4>
  <form style="padding: 10px 10px;">
      <div class="form-group">
        <label>Identificador del Proyecto </label>
        <input type="text" value="01" disabled class="form-control">
      </div> 
     <div class="form-group">
        <label>Nombre del Proyecto </label>
        <input type="text" value="Nombre del Proyecto" disabled class="form-control">
      </div>   
    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Nombre del Alumno *</label>
        <input required type="text" class="form-control" name="name" placeholder="Nombre del Alumno">
      </div>
    <div class="form-group col-md-4">
      <label>Apellido Paterno *</label>
      <input required type="text" class="form-control" name="app" placeholder="Apellido Paterno">
    </div>

    <div class="form-group col-md-4">
      <label>Apellido Materno *</label>
      <input required type="text" class="form-control" name="apm" placeholder="Apellido Materno">
    </div>

    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Carrera *</label>
        <select class="form-control" required>
          <option disabled selected>Selecciona Carrera</option>
          <option>Ingenieria en Agronomia</option>
          <option>Licenciatura en Informática</option>
          <option>Licenciatura en Administración</option>
        </select>
      </div>

      <div class="form-group col-md-6">
        <label>Semestre *</label>
        <select class="form-control" required>
          <option selected disabled>Selecciona Semestre</option>
          <option>1er Semestre</option>
          <option>2do Semestre</option>
          <option>3er Semestre</option>
          <option>4to Semestre</option>
          <option>5to Semestre</option>
          <option>6to Semestre</option>
          <option>8vo Semestre</option>
          <option>9no Semestre</option>
          <option>10mo Semestre</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>Fecha de Inicio </label>
          <input type="date" class="form-control"/>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Fecha de Término </label>
          <input type="date" class="form-control"/>
        </div>
      </div>
      <br><small class="form-text text-danger">* Campos Obligatorios</small>
    </div>
   <br>
   
    <div class="form-row">
       <div class="col-sm-6">
        <div class="form-group">
          <input type="reset" class="btn btn-secondary form-control" value="Cancelar">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <input type="submit" class="btn btn-info form-control " value="Aceptar">
        </div>
      </div>
  </div>
  </form>
  </div>
</div>
</div>