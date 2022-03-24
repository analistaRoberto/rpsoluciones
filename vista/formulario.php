<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <link rel="stylesheet" href="../css/formulario.css">
	</head>
	
	<body>
        <div class="titulo">
                    <h3>NUEVO REGISTRO</h3>
        </div>
        <div class="container">        
            
            <div class="contenedor">
                <form class="form-horizontal" method="POST" action="../controlador/Registrar.php" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>                    
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">Apellido paterno</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="apePat" name="apePat" placeholder="Apellido paterno" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="telefono" class="col-sm-4 control-label">Apellido Materno</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="apeMat" name="apeMat" placeholder="Apellido Materno">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-sm-2 control-label">Rut</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-sm-2 control-label">Domicilio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="domicilio">
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
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="../index.php" class="btn btn-default">Regresar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="contenedor">
                <div class="">               
                    <form class="form-horizontal"  method="POST" action="../controlador/Eliminar.php" autocomplete="off">
                        <input type="text" placeholder="Rut.." id="eliminarRu"  name="eliminarRu">
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                        <a href="../vista/formulario.php" class="btn btn-primary">Refrescar</a>
                        <a href="../index.php" class="btn btn-primary">Salir</a>
                    </form>
                    <br>
                    <form class="form-horizontal"  method="POST" action="../controlador/Buscar.php" autocomplete="off">
                        <input type="text" placeholder="Buscar" id="vbuscar"  name="vbuscar">
                        <button type="submit" class="btn btn-primary">Buscar</button>                        
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