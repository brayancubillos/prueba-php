<?php
session_start();
require 'conexion.php';
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE){
    $db = new MyDatabase();
    $query = "SELECT *  FROM aprendiz;";
    $listaDeUsuarios = $db->result($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de usuarios</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.php">Volver</a> | <a href="registar_aprendiz.php">Agregar usuario</a>
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>alternativa</th>
                                <th>nombres</th>
                                <th>direccion</th>
                                <th>celular</th>
                                <th>tipo_doc</th>
                                <th>num_doc</th>

                                <th>edad</th>
                                <th>apellidos</th>
                                <th>fechainilec</th>
                                <th>fechafinlec</th>
                                <th>fechainiprod</th>
                                <th>fechafinprod</th>
                                <th>telefono</th>
                                <th>correo</th>
                                <th>genero</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaDeUsuarios as $usuario){
                            ?>
                            <tr>
                                <td><?php echo $usuario->id;?></td>
                                <td><?php echo $usuario->username;?></td>
                                <td><?php echo $usuario->password;?></td>
                                <td><?php echo $usuario->alternativa;?></td>
                                <td><?php echo $usuario->nombres;?></td>
                                <td><?php echo $usuario->direccion;?></td>
                                <td><?php echo $usuario->celular;?></td>
                                <td><?php echo $usuario->tipo_doc;?></td>
                                <td><?php echo $usuario->num_doc;?></td>

                                <td><?php echo $usuario->edad;?></td>
                                <td><?php echo $usuario->apellidos;?></td>
                                <td><?php echo $usuario->fechainilec;?></td>
                                <td><?php echo $usuario->fechafinlec;?></td>
                                <td><?php echo $usuario->fechainiprod;?></td>
                                <td><?php echo $usuario->fechafinprod;?></td>
                                <td><?php echo $usuario->telefono;?></td>
                                <td><?php echo $usuario->correo;?></td>
                                <td><?php echo $usuario->genero;?></td>


                                <td>
                                    <a href="editar.php?id=<?php echo $usuario->id;?>" class="btn btn-sm btn-info">Editar</a>
                                    <a href="eliminar.php?id=<?php echo $usuario->id;?>" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            <a href="pdf.php" class="btn btn-sm btn-info">DESCARGAR EN PDF</a>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
} else{
    header('Location: index.php');
    die();
}
