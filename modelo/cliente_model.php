<?php
require_once('bd/conexion.php');

class cliente_model {

    private $con;

    public function __construct(){
        $this->con = Conexion::conectar();
    }

    public function registrar($n,$dui,$direc,$correo,$telefono){

        $sql = "INSERT INTO cliente(nombre,dui,direccion,correo,telefono)
                VALUES('$n','$dui','$direc','$correo','$telefono')";

        return $this->con->query($sql);
    }

    public function get(){
        return $this->con->query("SELECT * FROM cliente");
    }
}