<?php
require 'connection.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
$state=$_POST['state'];
$zip=$_POST['zip'];
$insertar_usuario=mysqli_query($db_connection,"INSERT INTO 
usuarios(nombre_usuario,apellido_usuario,email_usuariio,pass_usuariio,estado_usuario,cp_usuario)
VALUES('$first_name','$last_name','$email','$password','$state','$zip')");

if($insertar_usuario==TRUE){
    echo'<script type="text/javascript">
    alert("Usuario guardado con exito");
    window.location.href="login.php";
    </script>';
}else{
    echo'<script type="text/javascript">
    alert("No se pudo crear la cuenta");
    window.location.href="register.php";
    </script>';
}
?>

