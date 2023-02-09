<?php
$name_server="localhost";
$user_server="root";
$password="";
$db_name="bd_login";
$db_connection=mysqli_connect($name_server,$user_server,$password,$db_name);
if(mysqli_connect_errno()){
    echo "No pudiste conectarte porque:".mysqli.connect_error();
}

?>