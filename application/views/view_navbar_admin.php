<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>

  <nav class="navbar navbar-expand-lg navbar-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav nav-masthead mr-auto">
      
      <li <?=echoActiveClassIfRequestMatches("proyectos")?> id="proyectos" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="<?php echo base_url();?>login/proyectos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <font>Buscar Proyecto</font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>login/proyectos"><font>Por Carrera</font></a>
          <a class="dropdown-item" href="<?php echo base_url();?>login/proyectos"><font>Por Profesor</font></a>
          <!--<div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="<?php echo base_url();?>login/proyectos"><font>Por fecha</font></a>
        </div>
      </li>
      <li <?=echoActiveClassIfRequestMatches("alumnos")?> id="alumnos" class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>login/alumnos" tabindex="-1" ><font>Alumnos</font></a>
      </li>
      <li <?=echoActiveClassIfRequestMatches("carrera")?> id="carrera" class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>login/carrera" tabindex="-1" ><font>Carreras</font></a>
      </li>
      <li <?=echoActiveClassIfRequestMatches("grupo")?> id="grupo" class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>login/grupo" tabindex="-1" ><font>Grupos</font></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</head>
<script type="text/javascript">
  $('.nav li a').on('click', function() {
    //alert('clicked');
    $(this).parent().parent().find('.active').removeClass('active');
    $(this).parent().addClass('active');
});
</script>
</div>