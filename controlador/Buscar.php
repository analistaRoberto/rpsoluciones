<?php
        require ('../logica/Usuario.php');

        $valor = $_POST["vbuscar"];
       
        $ObjUsuario = new Usuario();

        $resul= $ObjUsuario-> Buscar($valor);
            
       
    ?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/formulario.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	</head>
	
	<body>
		<div class="container">			
                    <div class="contenedor">
                        <form class="form-horizontal" method="POST" action="../controlador/Actualizar.php" autocomplete="off">
                          
                            <?php     
                                
                                while (($fila = $resul-> fetch_assoc ())!== null){
                                
                            ?>

                           <div class="form-group">
                                <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nombre'];?>" placeholder="Nombre" required>
                                </div>                    
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">Apellido paterno</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="apePat" name="apePat" value="<?php echo $fila['apellidoPaterno'];?>"placeholder="Apellido paterno" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="telefono" class="col-sm-4 control-label">Apellido Materno</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="apeMat" name="apeMat" value="<?php echo $fila['apellidoMaterno'];?>" placeholder="Apellido Materno">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefono" class="col-sm-2 control-label">Rut</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="rutUsu" name="rutUsu" value="<?php echo $fila['rut'];?>" placeholder="Rut">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefono" class="col-sm-2 control-label">Domicilio</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="domicilio" name="domicilio" value="<?php echo $fila['domicilio'];?>" placeholder="domicilio">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="estado_civil" class="col-sm-2 control-label">Sexo</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="sexo" name="sexo">
                                        <option value="MASCULINO">Masculino</option>
                                        <option value="FEMENINO">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <?php }?>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="../vista/formulario.php" class="btn btn-default">Regresar</a>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>                        
			</div>
		</div>
	</body>
</html>