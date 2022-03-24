<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/formulario.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	</head>
	
	<body>
        <?php
            /*require ('../logica/Usuario.php');

            $ObjUsuario = new Usuario();

            $resul= $ObjUsuario->Listar();

            while (($fila = $resul-> fetch_assoc ())!== null) {

             
              echo  $fila['nombre'];
          }       */    

        ?>

        <div class="titulo">
                    <h3>INFORMACION DE LOS USUARIOS</h3>
        </div>
        <div class="container">        
            
            <div class="contenedor">
                <div class="">               
                    <form class="form-horizontal"  method="POST" action="../controlador/Eliminar.php" autocomplete="off">
                        <input type="text" placeholder="Rut.." id="eliminarRu"  name="eliminarRu">
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                        <a href="../vista/formulario2.php" class="btn btn-primary">Refrescar</a>
                        <a href="../index.php" class="btn btn-primary">Salir</a>
                    </form>
                </div>
               
                <table class="table table-striped">                    
                        <tr>
                            <th>NOMBRE</th>
                            <th>APELLIDO P</th>
                            <th>APELLIDO M</th>
                            <th>RUT</th>
                            <th>DOMICILIO</th>
                            <th>SEXO</th>
                        </tr>     
                                 
                    <?php 
                    require ('../logica/Usuario.php');

                    $ObjUsuario = new Usuario();
        
                    $resul= $ObjUsuario->Listar();
                    
                        while (($fila = $resul-> fetch_assoc ())!== null){
                        
                    ?>
                    <tr>
                        <td><?php echo $fila['nombre'];?></td>
                        <td><?php echo $fila['apellidoPaterno'];?></td>
                        <td><?php echo $fila['apellidoMaterno'];?></td>
                        <td><?php echo $fila['rut'];?></td>
                        <td><?php echo $fila['domicilio'];?></td>
                        <td><?php echo $fila['sexo'];?></td>

                    </tr>
                   <?php }?>
                </table> 
            </div>
        </div>
    
        <div class="titulo">
                    
        </div>

    </body>
</html>