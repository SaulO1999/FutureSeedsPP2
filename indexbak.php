<?php
    include("response.php");
    $newObj = new Patrocinador();
    $ptr = $newObj->getPatrocinador();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Simple table listing using Postgres database</title>
</head>
<body>
  <div class="container">
    <div class="col-sm-6" style="padding-top:50px;">
        <div class="well">
            <h2>Simple table listing using PHP and Postgres database</h2>
        </div>
        <table id="employee_grid" class="table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre empresa</th>
                    <th>DUI de encargado</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ptr as $key => $ptr) :?>
                <tr>
                    <td><?php echo $ptr['nombre_publico_empresa'] ?></td>
                    <td><?php echo $ptr['dui'] ?></td>
                    <td><?php echo $ptr['numero_telefono'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
  </div>
</div>
</body>
</html>
