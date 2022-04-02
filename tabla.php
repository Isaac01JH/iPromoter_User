<?php
//Iniciar Sesión
session_start();

include("Conexion.php");

$consulta = "SELECT * from usuario";
	
$rs 		= mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
$filas 		= mysqli_fetch_assoc($rs);
$totalFilas = mysqli_num_rows($rs);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="bootstrap/css/kfichas.css" rel="stylesheet" />
   <!--  <link href="../bootstrap/css/all.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    
    <title>Usuarios ipromoter</title>
    <link rel="icon" href="../imagenes/utsv32.png" />

    
    <script src="bootstrap/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/jquery/jquery.dataTables.min.js"></script>
    <script src="bootstrap/jquery/dataTables.bootstrap4.min.js"></script>
    <script src="bootstrap/jquery/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
$(document).ready(function() {
   var table = $('#example').DataTable();
 /*
    $('#example tbody').on( 'click', 'tr', function () {        
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
   */ 
} );
    </script>
  </head>
  <body>

<!-- Start Content -->
<div class="container" style="padding: 20px 20px;">
<div class="container" style="width:100%">
        <nav aria-label="breadcrumb" style="width:100%">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" style="color:black"> <b>Administración</b></li>
  </ol>
</nav>
</div>

<div class="container"  style="width:100%">

<h3 style="color:#4772e7"><i class="fa fa-map" style="color:#4772e7"></i>
Listado de Usuarios</h3>
<!--<i class="fab fa-cc-paypal"></i>  class="fas fa-clipboard-list"  -->
</div>
<br>

<div class="container"  style="width:100%;border-color:#4772e7">
        <table id="example" class="table table-striped table-bordered" style="width:100%;border-color:#4772e7">
        <thead style="font-size:14px">
        <tr>
            <th>ID_USUARIO</th>
            <th>NOMBRE</th> 
            <th>APELLIDO PATERNO</th>
            <th>APELLIDO MATERNO</th>
            <th>CORREO</th>
            <th>CONTRASEÑA</th>        
		</tr>
        </thead>
        <tbody style="font-size:14px">
        
        <?php

                            do
                            {
								if($totalFilas>0)
								{
                        ?> 
					<tr class="gradeX">
						<td><?php echo $filas['idUsuario']; ?></td>
                        <td><?php echo $filas['nombre']; ?></td>
                        <td><?php echo $filas['apellidoPaterno']; ?></td>
                        <td><?php echo $filas['apellidoMaterno']; ?></td>
                        <td><?php echo $filas['correo']; ?></td>
                        <td><?php echo $filas['contraseña']; ?></td>

                                
				  </tr>			                         <?php
								}
                           }while($filas = mysqli_fetch_array($rs));                          
                        ?>                                                         
        
           
        </tbody>
        
    </table>
		</div>
		</div><!-- container -->
   <BR>
   <BR>   
   <?php
     mysqli_close($conexion); 
 ?> 
  </body>
</html>