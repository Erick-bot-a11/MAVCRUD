<?php

class Connection extends mysqli {
    #
    function __construct()
    {
        parent::__construct("localhost","root","","mavidb");
        $this->set_charset("utf8");
        $this->connect_error == NULL ? "Conexion exitosa a la db" : die("Error"); 
    }
    
}