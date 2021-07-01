<html>
<head>
<script type="text/javascript" src="script.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="Sregistro.css">
   <link rel="stylesheet" href="css/bootstrap.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div >
<header><div id="imagen"><IMG id="a1" SRC="imagen/ac.png"><p id="p"></p></div></header>
</div>



<nav class="navbar navbar-inverse" style="background: black; ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Registro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
  
      </ul>
      <ul class="nav navbar-nav navbar-right">
    
      </ul>
    </div>
  </div>
</nav>
</div>

<div id="contenedor">
<section id="r">
<p class="contenido">DATOS ENVIADOS EXITOSAMENTE!!</p>

	<?php
							
							
							$tel=$_POST["tel"];
							$men=$_POST["men"];


							
 
    include "vendor/autoload.php";

    $clients = new SMSGatewayMe\Client\ClientProvider("-- your token--");

    $sendMessageRequest = new SMSGatewayMe\Client\Model\SendMessageRequest([
        'phoneNumber' => $_POST["tel"], 'message' => $_POST["men"], 'deviceId' => 108028
      
    ]);

     

    $sentMessages = $clients->getMessageClient()->sendMessages([$sendMessageRequest]);
                            
?>

<?php
              $nom=$_POST["nom"];
              $tel=$_POST["tel"];
              $men=$_POST["men"];


              

              include("conexion.php");
            
               
                  $_GRABAR_SQL = "INSERT INTO $tabla_db (nombre,telefono,mensaje) values ('$nom','$tel','$men')";
                  mysqli_query($conexion_db,$_GRABAR_SQL);

                  
                  echo "<p style='font-family: arial; font-weight: bold;'>Nombre: </p>".$nom."<br>";
                  echo "<p style='font-family: arial; font-weight: bold;'>Teléfono: </p>".$tel."<br>";
                  echo "<p style='font-family: arial; font-weight: bold;'>mensaje: </p>".$men."<br>";

                  echo "<h2>Datos Guardados correctamente!<h2>";
                
              

              //Cerrar conexión
              include("close_connect.php");


?>


