<?php
        require ('../logica/Usuario.php');

        $usu = $_POST["usuario"];
        $clave = $_POST["clave"];

        $ObjUsuario = new Usuario();

        $resul= $ObjUsuario->login($usu,$clave);

        if($resul == 1){
            require("../vista/formulario.php");
        }else if($resul == 2){
            require("../vista/cliente.php");
       }else if($resul == 3){
            requiere("..cliente.php");
        }else{
            echo 'ingreso '.$resul;

        }

    ?>