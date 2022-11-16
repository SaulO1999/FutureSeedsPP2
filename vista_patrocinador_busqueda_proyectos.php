<?php
    include("response.php");
    $newObj = new Proyecto();
    $search = "";
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
        <li class="sidebar-brand"><a href="index.php">Future Seeds</a></li>
        <li><a href="vista_patrocinador_perfil.html">Perfil</a></li>
        <li><a href="vista_patrocinador_mensajeria.html">Mensajeria</a></li>
        <li><a href="vista_patrocinador_busqueda_proyectos.php">Lista de patrocinadores</a></li>
      </ul>
    </div>

    <!-- Page content -->
    <div id="page-content-wrapper">
      <div class="content-header">
        <h1>
          <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
          Proyectos
        </h1>
      </div>
      <!-- Keep all page content within the page-content inset div! -->
      <div class="page-content inset">
        <div class="row">
          <div class="col-md-12">
            <form action="" method="GET">
              <div class="row">
                <div class="col-md-4">
                  <p class="lead">Nombre de proyecto: </p>
                </div>
                <div class="col-md-8">
                  <input type="text" name="search" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}else{$_GET['search']="";} ?>" placeholder="Parametros de busqueda">
                </div>
                <div class="col-md-4">
                  <input type="submit" value="Buscar" class="btn-default" style="width: 20%">
                </div>
              </div>
            </form>
          </div>
          <table id="employee_grid" class="table" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th class="lead">Nombre</th>
                    <th class="lead">Presupuesto</th>
                    <th class="lead">Materiales</th>
                    <th class="lead">Correo de contacto</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $pyt = $newObj->filterProyecto($_GET['search']);
                if(isset($pyt)){
                  foreach($pyt as $key => $pyt){ ?>
                    <tr>
                      <td class="lead"><?php echo $pyt['nombre_proyecto'] ?></td>
                      <td class="lead"><?php echo "$".$pyt['presupuesto'] ?></td>
                      <td class="lead"><?php echo $pyt['materiales'] ?></td>
                      <td class="lead"><a href="mailto:erios@mail.com?subject=Solicitud de apoyo a proyecto estudiantil">
                        <?php echo $ptr['correo_electronico'] ?></td>
                    </tr>
                    <?php 
                  }
                } else { ?>
                  <tr>
                    <td>No se encontró registro según la búsqueda</td>
                  </tr>
                  <?php
                }
                ?>
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
