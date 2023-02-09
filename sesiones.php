<?php
session_start();
require 'connection.php';
if(isset($_SESSION['email'])&&(!empty($_SESSION['email']))){
    $email=$_SESSION['email'];
    $get_data_user=mysqli_query($db_connection,"SELECT * FROM usuarios WHERE email_usuariio='$email'" );
    $datos_usuario=mysqli_fetch_assoc($get_data_user);
}else{
    header('Location:login.php');
    exit;
}

?>