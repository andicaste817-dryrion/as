<?php
require_once('bd/conexion.php');

class usuario_model {
    private $con;

    public function __construct(){
        $this->con = Conexion::conectar();
    }

    public function login($user,$pass){
        $sql = "SELECT * FROM usuarios WHERE usuario='$user' AND password='$pass'";
        return $this->con->query($sql);
    }
}