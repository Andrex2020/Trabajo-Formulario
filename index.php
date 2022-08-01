<!DOCTYPE html>
<html>
<head>
	<title>Registro MagdaJeans</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    
</head>
<body>
    <form method="post">
    	<h1>¡Suscribete y conoce nuestras novedades!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <input type="text" name="numero" placeholder="Numero">
        <input type="text" name="direccion" placeholder="Direccion">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registro.php");

        ?>

</body>
</html>