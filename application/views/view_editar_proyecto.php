<div class="container ">
  
  <br>
  <h4 class="card-title mb-4 mt-1 text-center">Editar proyecto</h4>
  <div class="shadow-lg p-3 mb-5 bg-white">
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active text-info" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Título</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-info" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Descripción</a>
      </li>
      <li class="nav-item text-info">
        <a class="nav-link  text-info" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Resumen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-info" id="jueves-tab" data-toggle="tab" href="#jueves" role="tab" aria-controls="contact" aria-selected="false">Objetivos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-info" id="viernes-tab" data-toggle="tab" href="#viernes" role="tab" aria-controls="contact" aria-selected="false">Crónograma</a>
      </li>

    </ul>

    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row" >
          <div class="col-sm-5 mx-auto">
            <form  style="padding: 20px 20px;">
              <div class="form-group">
                <label>Título *</label>
                <input type="text" class="form-control" placeholder="Ingrese Título">
                <br>
                <small class="form-text text-danger">*Campo obligatorio</small>
              </div>
              <input type="reset" class="btn btn-secondary col-4 offset-1" value="Cancelar">
              <input type="submit" class="btn btn-info col-4 offset-2" value="Aceptar">
            </form>
          </div>
          <br>
        </div>
      </div>

      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="row" >
            <div class="col-sm-5 mx-auto">
              <form  style="padding: 20px 20px;">
                <div class="form-group">
                    <label>Descripción*</label>
                    <textarea rows="5" class="form-control" ></textarea>
                    <br>
                    <small class="form-text text-danger">*Campo obligatorio</small>
                </div>
                <input type="reset" class="btn btn-secondary col-4 offset-1" value="Cancelar">
                <input type="submit" class="btn btn-info col-4 offset-2" value="Aceptar">
              </form>
            </div>
            <br>
          </div>
      </div>

      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="row" >
            <div class="col-sm-5 mx-auto">
              <form  style="padding: 20px 20px;">
                <div class="form-group">
                  <label>Resumen *</label>
                  <textarea rows="5" class="form-control" ></textarea>
                  <br>
                  <small class="form-text text-danger ">*Campo Obligatorio</small>
                </div>
                <input type="reset" class="btn btn-secondary col-4 offset-1" value="Cancelar">
                <input type="submit" class="btn btn-info col-4 offset-2" value="Aceptar">
              </form>
            </div>
            <br>
          </div>
      </div>



      <div class="tab-pane fade" id="jueves" role="tabpanel" aria-labelledby="jueves-tab">
          <div class="row" >
            <div class="col-sm-5 mx-auto">
              <form  style="padding: 20px 20px;">
                <div class="form-group">
                  <label>Objetivos*</label>
                  <textarea rows="5" class="form-control" ></textarea>
                  <br>
                  <small class="form-text text-danger">*Campo obligatorio</small>
                </div>
                <input type="reset" class="btn btn-secondary col-4 offset-1" value="Cancelar">
                 <input type="submit" class="btn btn-info col-4 offset-2" value="Aceptar">
              </form>
            </div>
            <br>
          </div>
      </div>


      <div class="tab-pane fade" id="viernes" role="tabpanel" aria-labelledby="viernes-tab">
        <br><br>
        <div class="row">
          <table class="table table-bordered">
            <thead>
              <tr>
              <th></th>
              <td colspan="5" class="text-center">Enero</td>
            </tr>
              <tr>
                <th class="text-center"># Actividades</th>
                <th >Semana 1</th>
                <th >Semana 2</th>
                <th >Semana 3</th>
                <th >Semana 4</th>
                <th class="text-center">Ópciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1.- Avance del contenido del proyecto </th>
                <td class="bg-dark"></td>
                <td></td>
                <td></td>
                <td></td>
                <td  class="text-center"><a href="<?php echo base_url();?>profesor_controller/editarActiCronograma" ><span class="icon-edit" data-toggle="tooltip"  title="Editar actividad" style="margin-left: 5px;"></span></a><span class="icon-trash" data-toggle="tooltip"  title="Eliminar actividad" style="margin-left: 5px;"></span></td> 
              </tr>
              <tr>
                <th scope="row">2.- Avance del contenido del proyecto</th>
                <td></td>
                <td class="bg-dark"></td>
                <td></td>
                <td></td>
                <td  class="text-center"><a href="" ><span class="icon-edit" data-toggle="tooltip"  title="Editar actividad" style="margin-left: 5px;"></span></a><span class="icon-trash" data-toggle="tooltip"  title="Eliminar actividad" style="margin-left: 5px;"></span></td>
              </tr>
              <tr>
                <th scope="row">3.- Avance del contenido del proyecto </th>
                <td></td>
                <td></td>
                <td class="bg-dark"></td>
                <td></td>
                <td  class="text-center"><a href="" ><span class="icon-edit" data-toggle="tooltip"  title="Editar actividad" style="margin-left: 5px;"></span></a><span class="icon-trash" data-toggle="tooltip"  title="Eliminar actividad" style="margin-left: 5px;"></span></td>
              </tr>
            </tbody>
          </table>
          <br>
          <div class="text-right col-12">
            <nav aria-label="Page navigation example" >
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link bg-light" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link bg-light " href="#">1</a></li>
                <li class="page-item"><a class="page-link bg-light" href="#">2</a></li>
                <li class="page-item"><a class="page-link bg-light" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link bg-light" href="#">Siguente</a>
                </li>
              </ul>
            </nav>
          </div >
        </div>
      </div>
    </div>
  </div>
</div>