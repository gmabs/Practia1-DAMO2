<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'conexion.php';
        $nombre= $_POST["nombre"];
        $apellido=$_POST["apellido"];
        $carrera= $_POST["carrera"];
        $año=$_POST["año"];
        $my_query = "insert into estudiante(nombre, apellido, carrera, año) values ('".$nombre."', '".$apellido."', '".$carrera."', '".$año."')";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "Realizado con exito";
        }else{
            echo "error";
        }
    }
?>