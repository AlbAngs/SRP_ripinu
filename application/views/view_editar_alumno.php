<div class="container ">
  
  <div class="row" >
  <div class="col-sm-6 mx-auto  card-body shadow p-3 mb-1 bg-light rounded">
    <h4 class="card-title mb-4 mt-1 text-center">Editar Alumno</h4>
  <form style="padding: 10px 10px;">
      <div class="form-group">
        <label>Identificador del Proyecto</label>
        <input type="text" value="01" disabled class="form-control">
      </div> 
      <div class="form-group">
        <label>Nombre del Proyecto</label>
        <input type="text" value="Proyecto1" disabled class="form-control">
      </div> 
    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Nombre *</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre">
      </div>
    <div class="form-group col-md-4">
      <label>Apellido Paterno *</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apellido paterno">
    </div>

    <div class="form-group col-md-4">
      <label>Apellido Materno *</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apellido materno">
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
      <div class="form-group col-md-6">
        <label>Semestre *</label>
        <select id="inputState" class="form-control">
          <option selected>Seleccione Semestre</option>
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
          <label>Fecha de Inicio *</label>
          <input type="date" class="form-control"/>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Fecha de termino *</label>
          <input type="date" class="form-control"/>
        </div>
      </div>
    </div>
    <small class="form-text text-danger">*Campos Obligatorios</small>
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