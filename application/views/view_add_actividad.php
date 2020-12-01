  
  <div class="container">
        <!-- APPLICATION -->
        <br>
<h5 class="text-center">Agragar actividad al cronograma</h5>
<br>
        <div id="App" class="row pt-5">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Agregar Actividad</h4>
                    </div>
                    <form id="product-form" class="card-body">
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Descripción de actividad" class="form-control">
                        </div>
                        <input type="submit" value="Agregar" class="btn btn-info">
                    </form>
                </div>
            </div>

            <div id="product-list" class="col-8"></div>
            <script type="text/javascript" src="<?php echo base_url();?>rec/js/App.js"></script>
        </div>
    </div>