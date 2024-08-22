<?php
    require_once "../models/User.php";
    header("Content-Type: application/json");
    $array_devolver=[];
    switch($_SERVER["REQUEST_METHOD"]){
        
        case "GET":
            if(isset($_GET["id"])){
                echo json_encode(User::getWhere($_GET["id"]));
            }
            echo json_encode(User::getAll());

            break;
        case "POST":
            
            if($_POST['nombre'] != null) {
                if(User::insert($_POST['nombre'],$_POST['apellido'], $_POST['domicilio'],$_POST['email'],$_POST['password'])){
                    http_response_code(200);

                }else{
                    http_response_code(400);
                }
            }
            else {
                http_response_code(405);
            }
            break;
        default: break;
    }