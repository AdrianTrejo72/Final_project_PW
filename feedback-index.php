<!DOCTYPE html>
<html>
<head>
<title>FeedbacK</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="cssfeed/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
    <h1 class="agile_head text-center">Formulario Feedback</h1>
    <div class="w3layouts_main wrap">
	  <h3>Porfavor ayudanos a mejorar, tomate un momento y escribenos. </h3>
	    <form action="feedback.php" method="post" class="agile_form">
		  <h2>¿Que tan satisfecho esta con el servicio?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excelente</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> Bueno</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">pobre</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>Si tienes una retroalimentacion especifica, porfavor escribela.</h2>
			<textarea placeholder="Añadir comentarios" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Tu nombre (opcional)" name="name"  />
			<input type="email" placeholder="Tu e-mail (opcional)" name="email"/>
			<input type="text" placeholder="Tu numero (opcional)" name="num"  /><br>
			<center><input type="submit" value="Enviar Feedback" class="agileinfo" /></center>

	  </form>
	</div>
	<div class="agileits_copyright text-center">
		<li><a href="index.html">Regresar a pagina principal</a></li>
			<p>© INSTITUTO TECNOLOGICO REGIONAL DE SAN LUIS POTOSI 2021</p>
	</div>
</body>
</html>

