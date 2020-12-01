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
      
      <li <?=echoActiveClassIfRequestMatches("proyectoProfesor")?> id="proyectoProfesor" >
        <a class="nav-link " href="<?php echo base_url();?>profesor_controller/proyectoProfesor" >
          <font>Mis Proyectos</font>
        </a>
      </li>
    
       
      <li <?=echoActiveClassIfRequestMatches("registroAlumno")?> id="registroAlumno" class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>profesor_controller/registroAlumno" tabindex="-1" ><font>Alumnos</font></a>
      </li>
        <li <?=echoActiveClassIfRequestMatches("enviosProfesor")?> id="registroAlumno" class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>profesor_controller/enviosProfesor" tabindex="-1" ><font>Envíos</font></a>
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