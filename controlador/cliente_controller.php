<?php
require_once(__DIR__ . '/../modelo/cliente_model.php');
require_once(__DIR__ . '/BaseController.php');

class cliente_controller extends BaseController {

    private $model;

    public function __construct(){
        $this->model = new cliente_model();
    }
     public function formulario(){
        $this->view('registro_usuario');
    }

    public function registrar(){
        
        $this->model->registrar(
            $_POST['nombre'],
            $_POST['dui'],
            $_POST['direccion'],
            $_POST['correo'],
            $_POST['telefono']
        );
    
        header("Location: index.php?m=clientes");
    }

    public function clientes(){
        $datos = $this->model->get();
        $this->view('inventario/cliente', ['datos'=>$datos]);
    }
    
}
