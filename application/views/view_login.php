<aside class="col-sm-4  mx-auto"><br><br>
    <article class="card-body shadow p-3 mb-1 bg-light rounded  "><br>
        <h4 class="card-title mb-4 mt-1 text-center">Ingreso al Repositorio</h4>
        <br>
        <form method="POST" action="" >
            <div class="form-group">
                <label>Correo Electrónico *</label>
                <input name="email" class="form-control" placeholder="Correo Electrónico" type="email" required="">
            </div> 
            <div class="form-group">
                <label>Contraseña *</label>
                <input class="form-control" name="password" placeholder="Contraseña" type="password" required="">

            </div><br>
            <div class="form-group"> 
                <a class="float-left" href="#">¿Has olvidado tu contraseña?</a>
            </div><br>
            <small class="form-text text-danger">* Campos Obligatorios</small><br>
            <div class="form-group">
                <a type="submit" class="btn btn-info col-12 " href="<?php echo base_url();?>login/proyectos" >Iniciar Sesión</a>
            </div>   
                                                                
        </form>
    </article>
</aside>