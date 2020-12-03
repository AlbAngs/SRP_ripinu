  
<nav class="navbar navbar-expand-lg navbar-light shadow-lg p-3 mb-1 bg-light rounded "  >
 <a class="" href="<?php echo base_url();?>login" >
  <img src="<?php echo base_url();?>rec/images/Ripinu.png" width="100" height="40" class="d-inline-block align-top" alt="">
</a>
<ul class="nav nav-masthead ml-auto">

  <li id="buscar_proyecto" class="nav-item dropdown">
    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="icon-user-1"></span><font>Cuenta</font>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="<?php echo base_url();?>loginController/loginUser"><font>Iniciar Sesión</font></a>
      <a class="dropdown-item" href="<?php echo base_url();?>profesor_controller/registroUser"><font>Registrarse</font></a>
    
    </div>
  </li>
</ul>
</nav>
