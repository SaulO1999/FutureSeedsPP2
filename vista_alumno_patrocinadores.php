<?php
    include("response.php");
    $newObj = new Patrocinador();
    $ptr = $newObj->getPatrocinador();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Future Seeds - Alumno</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Add custom CSS here -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="home.html">Future Seeds</a></li>
        <li><a href="vista_alumno_perfil.html">Perfil</a></li>
        <li><a href="vista_alumno_mensajeria.html">Mensajeria</a></li>
        <li><a href="vista_alumno_grupo.html">Acceso a grupo</a></li>
        <li><a href="vista_alumno_patrocinadores.html">Lista patrocinadores</a></li>
      </ul>
    </div>

    <!-- Page content -->
    <div id="page-content-wrapper">
      <div class="content-header">
        <h1>
          <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
          Patrocinadores
        </h1>
      </div>
      <!-- Keep all page content within the page-content inset div! -->
      <div class="page-content inset">
          <table id="patrocinadores" class="table" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>Empresa</th>
                      <th>Patrocinador</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                      <th>Imagen</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach($ptr as $key => $ptr) :?>
                  <tr>
                      <td><?php echo $ptr['nombre_publico_empresa'] ?></td>
                      <td><?php echo $ptr['titulo']." ".$ptr['nombres']." ".$ptr['apellidos'] ?></td>
                      <td><?php echo $ptr['correo_electronico'] ?></td>
                      <td><?php echo $ptr['numero_telefono'] ?></td>
                      <td><img src="<?php echo $ptr['ruta_imagen'] ?>"alt=""></td>
                  </tr>
              <?php endforeach;?>
              </tbody>
          </table>
          <!-- 
          <div class="row" style="padding-top: 2%; padding-bottom: 2%">
            <div class="col-md-3" style="display:block">
              <img src="./Imagenes/Patrocinadores/superSelectos.jpeg" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Super selectos</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/diseñoDibujo.png" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Diseño</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/farmaciasSanNicolas.png" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Farmacia San Nicolás</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/alcaldiaAntiguoCuscatlan.jpg" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: 50%;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Alcaldía de Antiguo Cuscatlán</a></p>
            </div>
          </div>
          <div class="row" style="padding-top: 2%; padding-bottom: 2%">
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/alcaldiaSanSalvador.jpg" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Alcaldía de San Salvador</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/despensaDonJuan.png" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">La despensa de Don Juan</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/despensaFamiliar.png" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Despensa Familiar</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/panSinai.png" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Pan Sinaí</a></p>
            </div>
          </div>
          <div class="row" style="padding-top: 2%; padding-bottom: 2%">
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/libreriaIberica.png" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Librería La Iberica</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/grupoRoble.png" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: 50%;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Grupo Roble</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/Patrocinadores/construMarket.png" width="100%"
                style="display: inherit; margin-left: auto; margin-right:auto; max-width: fit-content;">
              <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">ConstruMarket</a></p>
            </div>
            <div class="col-md-3" style="display:block;">
              <img src="./Imagenes/fotoperfil.png" width="45%"
                style="display: inherit; margin-left: auto; margin-right:auto">
                <p style="text-align: center;" class="lead"><a href="vista_patrocinador_perfil.html">Patrocinador X</a></p>
            </div>
          </div> -->


          <!-- <p class="lead">This simple sidebar template has a hint of JavaScript to make the template responsive. It also includes Font Awesome icon fonts.</p> -->
          <!-- <div class="col-md-6">
              <p class="well">The template still uses the default Bootstrap rows and columns.</p>
            </div>
            <div class="col-md-6">
              <p class="well">But the full-width layout means that you wont be using containers.</p>
            </div>
            <div class="col-md-2">
              <p class="well">Three Column Example</p>
            </div>
            <div class="col-md-4">
              <p class="well">Three Column Example</p>
            </div>
            <div class="col-md-4">
              <p class="well">You get the idea! Do whatever you want in the page content area!</p>
            </div> -->
        </div>
      </div>
    </div>

  </div>

  <!-- JavaScript -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.js"></script>

  <!-- Custom JavaScript for the Menu Toggle -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("active");
    });
  </script>
</body>

</html>