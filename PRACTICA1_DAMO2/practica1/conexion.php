<?php

$mysql = new mysqli("localhost", "root", "", "dbuca");
if($mysql->connect_error){
    echo"Error: ";
    die("error de conexion");
}
else{
    echo"Conexion exitosa";
}
?>