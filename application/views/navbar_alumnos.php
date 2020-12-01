<style type="text/css">
  input::-webkit-input-placeholder {
    /*color:    #c00;
    font-weight: bold;*/
    font-size: 14px;
  }
  input::-moz-placeholder {
    /*color:    #c00;
    font-weight: bold;*/
    font-size: 14px;
  }
  .m {
    padding-left: 10px
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav nav-masthead mr-auto">

      <li   class="nav-item  ">
        <select  class="form-control" >
          <option value="" disabled selected>Selecciona Carrera</option>
          <option value="1">Licenciatura en Administración</option>
          <option value="2">Ingeniería en Agronomía</option>
          <option value="3">Licenciatura en Informática</option>
        </select>
      </li>
     
      <li  class="nav-item m"> 
        <select  class="form-control" >
          <option value="" disabled selected>Selecciona Grupo</option>
          <option value="0">1001-A</option>
          <option value="1">301-A</option>
          <option value="2">801-A</option>
          <option value="3">801-B</option>
        </select>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <input id="Buscar" class="form-control mr-sm-2" type="search" placeholder="Buscar por: matrícula/nombre/proyecto/responsable" aria-label="Search">

   </form>
 </div>
</nav>


