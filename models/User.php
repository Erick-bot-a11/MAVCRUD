<?php
require_once "../connection/Connection.php";
class User {
        public static function getAll() {
            $db =new Connection();
            $query = "SELECT * FROM clientes";

            $resultado = $db->query($query);
            $datos =[];
            if($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                        $datos[] = [
                           "id" => $row["id"],
                           "nombre" => $row["nombre"],
                           "ap" => $row["ap"] ,
                           "am" => $row["am"], 
                           "fn" => $row["fn"] 
                        ];
                }
                return $datos;
            }
            return $datos;
        }


        public static function getWhere($id_cliente) {
            $db =new Connection();
            $query = "SELECT * FROM clientes WHERE id=$id_cliente";

            $resultado = $db->query($query);
            $datos =[];
            if($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                        $datos[] = [
                           "id" => $row["id"],
                           "nombre" => $row["nombre"],
                           "ap" => $row["ap"] ,
                           "am" => $row["am"], 
                           "fn" => $row["fn"] 
                        ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function insert($nombre,$apellido,$email,$domicilio,$password){
            $db =new Connection();
            $query = "INSERT INTO users (nombre,apellido,domicilio,email,password)
                      VALUES('".$nombre."','".$apellido."','".$domicilio."','".$email."','".$password."')" ;
            $db->query($query);
            if($db->affected_rows){
                return true;
            }
            return false;

        }

        public static function update($id_cliente,$nombre,$ap,$am,$fn){
            $db =new Connection();
            $query = "UPDATE clientes SET
                      nombre)'".$nombre."',ap='".$ap."',am='".$am."',fn='".$fn."'
                      WHERE id=".$id_cliente;
            $db->query($query);
            if($db->affected_rows){
                return true;
            }
            return false;

        }
        public static function delete($id_cliente){
            $db =new Connection();
            $query = "DELETE FROM clientes WHERE id =$id_cliente";

            $db->query($query);
            if($db->affected_rows){
                return true;
            }
            return false;
        }
    }
