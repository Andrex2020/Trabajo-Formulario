<?php 

include("con_bd.php");
if (isset($_POST['register'])) {
if (strlen($_POST['name']) <1 && strlen($_POST['email']) >=1 && strlen($_POST['Celular']) >=1 ) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $numero = trim($_POST['numero']);
    $Direccion = trim($_POST['direccion']);
    
    $consulta = "INSERT INTO leads (usuarios)(Nombre, Email, Celular, Direccion) VALUES ($name,$email,$numero,$Direccion)";

    $resultado=mysqli_query($conex,$consulta);
    if ($resultado){
        ?> 
        <h3 class =" ok " > ¡Te has Registrado Correctamente! </h3 >
       <?php
    }else {
        ?> 
        <h3 class =" bad " > ¡Ups! ha ocurrido un error, intentalo de nuevo </h3 >
       <?php
    }
}else {
        ?> 
        <h3  class =" bad " > Por favor completa los campos </h3 >
       <?php
}
   
}


?>