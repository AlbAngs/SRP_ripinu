<div class="container ">

  <br>
  <h4 class="card-title mb-4 mt-1 text-center">Nuevo Proyecto</h4>
  <div class="shadow-lg p-3 mb-5 bg-white">
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active text-info" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Agregar Nuevo Proyecto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-info" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Agregar Actividades</a>
      </li>
      <li class="nav-item text-info">
        <a class="nav-link  text-info" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Cronograma</a>
      </li>
      

    </ul>

    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <br>

        <div class="row ">
          <div class="card shadow p-3 mb-1 bg-light rounded col-10 mx-auto">
            <h5 class="card-header bg-light"></h5>

            <br>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Título del Proyecto *</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Introducción a mi Primer Proyecto ">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Objetivo del Proyecto *</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Descripción del Proyecto *</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Resumen del Proyecto *</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
             <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Nombre del Archivo</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Para Subir el Archivo usa el Botón 'Subir Archivo' ">
              </div>
            </div>
            <hr>
            <br>
          <small class="form-text text-danger text-left">* Campos Obligatorios</small>
            <div class="form-group row text-right">
              <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-info text-right">Seleccionar Archivo</button>
              </div>
            </div>


          </div>
        </div>
        <br>
           <div class="form-group row">
              <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-info  col-2 text-center">Aceptar</button>
              </div>
            </div>

      </div>

      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <br>
        <div id="App" class="row pt-5">
          <div class="col-4">
            <div class="card">
              <div class="card-header">
                <h6>Agregar Actividad</h6>
              </div>
              <form id="product-form" class="card-body">
                <div class="form-group">
                  <input type="text" id="name" placeholder="Descripción de Actividad" class="form-control">
                </div>
                <input type="submit" value="Agregar" class="btn btn-info">
              </form>
            </div>
          </div>

          <div id="product-list" class="col-8"></div>
          <script type="text/javascript" src="<?php echo base_url();?>rec/js/App.js"></script>
        </div>
      </div>

      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <br>
       <div class="row">
        <table class="table table-bordered">

          <thead>
             <tr>
              <th></th>
              <td colspan="4" class="text-center">Enero</td>
            </tr>
            <tr>
              <th class="text-center"># Actividades</th>
              <th >Semana 1</th>
              <th >Semana 2</th>
              <th >Semana 3</th>
              <th >Semana 4</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1.- Avance del contenido del proyecto </th>
              <td class="bg-dark"></td>
              <td></td>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <th scope="row">2.- Avance del contenido del proyecto</th>
              <td></td>
              <td class="bg-dark"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">3.- Avance del contenido del proyecto </th>
              <td></td>
              <td></td>
              <td class="bg-dark"></td>
              <td></td>
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
                <a class="page-link bg-light" href="#">Siguiente</a>
              </li>
            </ul>
          </nav>
        </div >
      </div>
    </div>



    <div class="tab-pane fade" id="jueves" role="tabpanel" aria-labelledby="jueves-tab">
     <div class="row">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center"># Actividades</th>
            <th >Semana 1</th>
            <th >Semana 2</th>
            <th >Semana 3</th>
            <th >Semana 4</th>
            <th >Semana 5</th>
            <th >Semana 6</th>
            <th >Semana 7</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1.- Avance del contenido del proyecto </th>
            <td class="bg-dark"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2.- Avance del contenido del proyecto</th>
            <td></td>
            <td class="bg-dark"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3.- Avance del contenido del proyecto </th>
            <td></td>
            <td></td>
            <td class="bg-dark"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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


  <div class="tab-pane fade" id="viernes" role="tabpanel" aria-labelledby="viernes-tab">Modificar cronograma</div>
</div>
</div>
</div>