<?php
        require ('../logica/Usuario.php');

        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["apePat"];
        $apellidoMaterno = $_POST["apeMat"];
        $rut = $_POST["rutUsu"];
        $domicilio = $_POST["domicilio"];
        $sexo = $_POST["sexo"];
        $ObjUsuario = new Usuario();

        $resul= $ObjUsuario-> Actualizar($rut, $nombre, $apellidoPaterno,$apellidoMaterno,$domicilio,$sexo);

        
        require("../vista/formulario.php");
        
?>