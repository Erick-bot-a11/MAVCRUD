<?php

require_once "../connection/Connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    header("Content-Type: application/json");
    $array_devolver=[];
    $email = strtolower($_POST['email']);
    $password = $_POST["password"];  //lo del usuario

    //Comprovar si el usuario existe
    $db =new Connection();
    $query = "SELECT * FROM users WHERE email = '". $email ."' LIMIT 1";
    $resultado = $db->query($query);
    $datos =[];

     if($resultado->num_rows){
        while($row = $resultado->fetch_assoc()) {
            $datos[] = [
               "id" => $row["id"],
               "nombre" => $row["nombre"],
               "password" => $row["password"] 
            ];
        }
        if($password == $datos[0]["password"]){ //Las contraseñas coinciden
            session_start();
            $_SESSION["user_id"] =$datos[0]["id"];
            $_SESSION["nombre"] =$datos[0]["nombre"];
            $array_devolver["redirect"] = "http://localhost/MAVICRUD/home.php";
        }else{
            $array_devolver["error"]="error";
        }

     }else{
        $array_devolver["error"]="No tienes cuenta";
     }
     echo json_encode($array_devolver);
}
