<?php

include('Server/conDB.php');
$operacionDB=new conDB();
$CONQuery=("SElECT * FROM docentes");
$Docentes=$operacionDB->Consultar($CONQuery);
//print_r($Docentes);
//$Docentes[0];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <nav>
        <h1 class="text-center">CRUD DE LA TABLA DOCENTES</h1>
    </nav>
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3 bg-success">
                    <h3>Nuevo Docente</h3>
                    <form action="server/agregar.php" method="post">
                        <input type="text"   class="form-control mb-3" name="idDocente" id="idDocente" placeholder="Identificación">
                        <input type="text"   class="form-control mb-3" name="apellidos" id="apellidos" placeholder="Apellidos">
                        <input type="text"   class="form-control mb-3" name="nombres"   id="nombres"   placeholder="Nombres">
                        <input type="text"   class="form-control mb-3" name="direccion" id="direccion" placeholder="Dirección">
                        <input type="email"  class="form-control mb-3" name="correo"    id="correo"    placeholder="Correo">
                        <input type="number" class="form-control mb-3" name="celular"   id="celular"   placeholder="Celular">
                        <input type="text"   class="form-control mb-3" name="municipio"  id="municipio"  placeholder="Municipio">

                        <input type="submit" class="btn btn-primary" value="Guardar" name="agregar">
                    </form>
                </div>

                <div class="col-md-9 ">
                    <h3 class="text-center">Listado Docentes</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Identificación</td>
                                <td>Apellidos</td>
                                <td>Nombres</td>
                                <td>Dirección</td>
                                <td>Correo</td>
                                <td>Celular</td>
                                <td>Municipio</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($Docentes as $dato):?>
                                    <tr>
                                        <td><?= $dato["IdDocente"] ?> </td>
                                        <td><?= $dato["Apellidos"] ?> </td>
                                        <td><?= $dato["Nombres"] ?> </td>
                                        <td><?= $dato["Direccion"] ?> </td>
                                        <td><?= $dato["Correo"] ?> </td>
                                        <td><?= $dato["Celular"] ?> </td>
                                        <td><?= $dato["Municipio"] ?> </td>  
                                        
                                        <th> <a href="#####" class="bg-warning">Editar</a> </th>
                                        <th> <a href="#####" class="bg-danger">Eliminar</a> </th>
                                    </tr>
                                <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>
