<?php

require ('Conexion.php');

class Usuario{
  //const $con = new Conexion();
    
    function login($usua, $clave){

        $con = new Conexion();
        $cn = $con->conectar();      

      if ($cn ->connect_error) {
        die("Connection failed: " . $cn ->connect_error);
      }else{

        try{
         

        $resultado = mysqli_query($cn,  "select nivelUsu from Usuarios where rut='$usua' and clave='$clave';");
           
       
        
          while ($row = $resultado->fetch_assoc()) {
            $nivel = $row['nivelUsu'];
        }
        
        if($nivel==1){         
        $rs = 1;             
        }else if($nivel==2){
            $rs = 2;
        }else{
        $rs = 0;
        }
   
        }catch(exception $e){
          
        }

      }
      return $rs;

      // return $rs;
    }

    function registrar($rut, $nombre, $apellidoPaterno,$apellidoMaterno,$domicilio,$sexo){

      $con = new Conexion();

      $cn = $con->conectar();
    

      if ($cn ->connect_error) {
        die("Connection failed: " . $cn ->connect_error);
      }else{

        try{       
        
        $sql = "INSERT INTO DatosPersonales (rut, nombre, apellidoPaterno,apellidoMaterno,domicilio,sexo) VALUES ('$rut', '$nombre', '$apellidoPaterno','$apellidoMaterno','$domicilio','$sexo')";

        if (mysqli_query($cn, $sql)) {
            $rs= "OK";
        } else {
            $rs =  "Error: " . $sql. mysqli_error($cn);
        }         
  
        }catch(exception $e){
          $rs = $e->getMessage();
        }

      }
     return $rs;
    }

  function Listar(){

    $con = new Conexion();
    $cn = $con->conectar();      

    if ($cn ->connect_error) {
      die("Connection failed: " . $cn ->connect_error);
    }else{

      try{
      

      $resultado = mysqli_query($cn,  "SELECT * FROM DatosPersonales;");
      
      
    }catch(exception $e){
        
      }

    }
    return $resultado ;
  }

  function Eliminar($rut){

    $con = new Conexion();

    $cn = $con->conectar();


    if ($cn ->connect_error) {
      die("Connection failed: " . $cn ->connect_error);
    }else{

      try{       
      
      $sql = "DELETE FROM DatosPersonales WHERE rut='$rut'";

      if (mysqli_query($cn, $sql)) {
          $rs= "OK";
      } else {
          $rs =  "Error: " . $sql. mysqli_error($cn);
      }         

      }catch(exception $e){
        $rs = $e->getMessage();
      }

    }
   return $rs;
  }

  function Buscar($valor){

    $con = new Conexion();
    $cn = $con->conectar();      

    if ($cn ->connect_error) {
      die("Connection failed: " . $cn ->connect_error);
    }else{

      try{
      // WHERE ruc like '%$valor%' or nombre like like '%$valor%' 

       $resultado = mysqli_query($cn,  "SELECT * FROM DatosPersonales WHERE rut like '%$valor%'or nombre like '%$valor%';");      
      
      }catch(exception $e){
        print("Error");
        print($e);   
      }

    }
    return $resultado ;
  }

  function Actualizar($rut, $nombre, $apellidoPaterno,$apellidoMaterno,$domicilio,$sexo){

    $con = new Conexion();

    $cn = $con->conectar();
  

    if ($cn ->connect_error) {
      die("Connection failed: " . $cn ->connect_error);
    }else{

      try{       
      
      $sql = "UPDATE DatosPersonales SET nombre = '$nombre', apellidoPaterno ='$apellidoPaterno' ,apellidoMaterno='$apellidoMaterno',domicilio='$domicilio',sexo='$sexo' WHERE rut = '$rut'";

      if (mysqli_query($cn, $sql)) {
          $rs= "OK";
      } else {
          $rs =  "Error: " . $sql. mysqli_error($cn);
      }         

      }catch(exception $e){
        $rs = $e->getMessage();
      }

    }
   return $rs;
}

}

?>