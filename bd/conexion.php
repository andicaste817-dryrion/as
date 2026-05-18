<?php
class Conexion {
    public static function conectar(){
        return new mysqli("localhost","root","","dsw21_castellanos");
    }
}