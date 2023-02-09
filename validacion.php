<?php
require 'connection.php';
$email=$_POST['user'];
$query = mysqli_query($db_connection,"SELECT * FROM usuarios WHERE email_usuariio = '$email'");
if(mysqli_num_rows($query) > 0){
    $row = mysqli_fetch_assoc($query);
    $usuario_db_password = $row['pass_usuariio'];
    $verificar_password = password_verify($_POST['pass'], $usuario_db_password);
    if($verificar_password === TRUE){
        session_regenerate_id(true);
        session_start();
        $_SESSION['email']=$email;
        header('Location:principal.php');
   exit;
    }else{
        echo'<script type="text/javascript">
        alert("clave incorrectas");
        window.location.href="login.php";
        </script>';
    }
}else{
    echo'<script type="text/javascript">
    alert("usuario incorrecto");
    window.location.href="login.php";
    </script>';
}
?>