<html>
<head>
<script type="text/javascript" src="script.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
 <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Sregistro.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  	  <link rel="stylesheet" type="text/css" href="iconos/fonts/style.css">
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
      <a class="navbar-brand" href="#">Mensaje</a>
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
    <br/><br/>
<section>
		<section style="height: 750px;">
			

			<form method="post" name="formulario" onsubmit="return validacion();" action="validar.php" class="Fregistro">
				<h2>Mensaje</h2>

				<div class="alert alert-info" style="text-align:center; background:#101212; border:none; color:white;">Introduce los datos del mensaje</div>

				<div class="icono">

  <span class="icon-comment" style="width:80%;"></span>
<br>
  </div>

	
<div class="form-group">
		<label for="nom">Nombre:</label>
		
		<br>
		<input type="text" id ="nom" name="nom"   autofocus class="form-control"  style="background:#101212; color:white; border: 0;" onkeyup="contador(); " onkeypress="return soloLetras(event);" maxlength="80"/><br>
		<label for="tel">Número telefónico:</label>

		<br>
		<input type="text" id ="tel" name="tel"   autofocus class="form-control"  onkeypress="return soloNumeros(event);"style="background:#101212; color:white; border: 0;" onkeyup="contador();" maxlength="10"/><br>
		<label for="men">Mensaje:</label>
		
		<br>
		<textarea type="text" id ="men" name="men"   autofocus class="form-control"  style="background:#101212; color:white; border: 0;"  onkeyup="contador();" maxlength="150"/></textarea><br>

		

	
<a href="https://api.whatsapp.com/send?phone=523310755802&text=Hola%20solicito%20informes%20de%20la%20UTJ" class="btn btn-success">Whatsapp</a>
		

		<br><br><br>
		<button type="reset" class="btn btn-primary">limpiar</button>
		
		<button type="submit" class="btn btn-success">Siguiente</button>
	
</div>
	</div>

	</form>


		</section>


<!--<footer>&reg; <script>fecha()</script></footer>-->
</body>
 </html>


 
