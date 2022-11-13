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
        <li><a href="vista_alumno_busqueda_patrocinadores.php">Lista de patrocinadores</a></li>
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
                      <th class="lead">Empresa</th>
                      <th class="lead">Patrocinador</th>
                      <th class="lead">Correo</th>
                      <th class="lead">Telefono</th>
                      <th class="lead">Imagen</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach($ptr as $key => $ptr) :?>
                    <!-- EN TR style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr"<!-->
                  <tr>
                      <td class="lead" ><?php echo $ptr['nombre_publico_empresa'] ?></td>
                      <td class="lead"><?php echo $ptr['titulo']." ".$ptr['nombres']." ".$ptr['apellidos'] ?></td>
                      <td class="lead"><?php echo $ptr['correo_electronico'] ?></td>
                      <td class="lead"><?php echo $ptr['numero_telefono'] ?></td>
                      <td><img src="<?php echo $ptr['ruta_imagen'] ?>"alt=""style="width:100px;height:100px"></td>
                  </tr>
              <?php endforeach;?>
              </tbody>
          </table>
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