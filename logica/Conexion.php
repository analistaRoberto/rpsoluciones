<?php

class Conexion{

    function conectar(){
     /* $nombreServidor = "localhost";
      $nombreUsuario = "root";
      $passwordBaseDeDatos = "root";
      $nombreBaseDeDatos = "BDD_nombreapellido";*/

    // $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
     $conn = mysqli_connect("localhost", "root", "", "BDD_robertopena") or die($conn);

     return $conn;
    }

    
}



?>
