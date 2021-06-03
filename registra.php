<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <link href="css2/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--DatePicke-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

  <title>Registrarse</title>
<style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 15px;
    color: #000000;
    background-color: #FFFFFF;
    border-radius: 2px;
    border: 2px solid #000029;
    width: 10em;
  }
  .boton_personalizado:hover{
    color: #FFFFFF;
    background-color: #000000;
  }

  .conteniddo{
      width: 500px;
      height: 500px;
      margin-right: 80px;
      float: right;
      
    }
</style>

<header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="login.html">INICIAR SESION</a>
                    <a class="navbar-brand" href="">SOBRE NOSOTROS</a>
                    <a class="navbar-brand" href="about us.html">DONDE ENCONTRARNOS</a>
                    <a class="navbar-brand" href="index.html">COMPRAS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                                        Compra</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

<?php
include("connex.php");
?>

<form action="" method ="post">
<h1>Registro</h1>

<div class="main">
	
		<div class="shop_top">
	
			<div class="container">

				<div class="register-top-grid">
	
Nombres: <input placeholder="NOMBRE(S)" name= "nombres" type="text"> <br/><br/>
Apellidos: <input placeholder="APELLIDOS" name= "apellidos" type="text"> <br/><br/>
Fecha de Nacimiento: <input placeholder="00/00/0000" name= "edad" type="text"> <br/><br/>
Contraseña: <input placeholder="Considere usar caracteres y numeros mezclados" name= "password" type="text"> <br/><br/>
<br/><br/>
<input   value="si" type= "radio" name= "notificacion"> Vincular correo para recibir notificaciones  <br/><br/>
<input class="boton_personalizado" type="submit"/>

				</div>

			</div>

		</div>

</div>


</form> 

<?php
if ($_POST){
$c=$_POST['nombres'];
$n= $_POST['apellidos'];
$e=$_POST['edad'];
$p=$_POST['password'];
$g=$_POST['notificacion'];
$sql = "INSERT INTO persona (nombres, apellidos, edad, password, notificacion)
VALUES ('$c', '$n', '$e', '$p', '$g')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>