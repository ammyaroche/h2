<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ciudadanos</title>
</head>
<body class="fondo">
<h1>Ciudadanos </h1>
<br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Ciudadanos
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Departamento Nuevo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('guardar_Ciudadanos')?>" method="post">
                    <div class="mb-3">
                        <label for="txt_mun" class="form-label">DPI</label>
                        <input type="text" class="form-control" id="txt_mun" name="txt_mun" placeholder="Nuevo DPI">
                    </div>
                    <div class="mb-3">
                        <label for="txt_apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Nuevo Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nuevo Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="txt_direc" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="txt_direc" name="txt_direc" placeholder="Nuevo Direccion">
                    </div>
                    <div class="mb-3">
                        <label for="txt_telca" class="form-label">Telefono de casa</label>
                        <input type="text" class="form-control" id="txt_telca" name="txt_telca" placeholder="Nuevo Telefono">
                    </div>
                    <div class="mb-3">
                        <label for="txt_telmo" class="form-label">Telefono movil</label>
                        <input type="text" class="form-control" id="txt_telmo" name="txt_telmo" placeholder="Nuevo Telefonomovil">
                    </div>
                    <div class="mb-3">
                        <label for="txt_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Nuevo email">
                    </div>
                    <div class="mb-3">
                        <label for="txt_fecha" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="txt_fecha" name="txt_fecha" placeholder="Nuevo fecha">
                    </div>
                    <div class="mb-3">
                        <label for="txt_codni" class="form-label">Codigo de nivel</label>
                        <input type="text" class="form-control" id="txt_codni" name="txt_codni" placeholder="Codigo de Nivel">
                    </div>
                    <div class="mb-3">
                        <label for="txt_codmu" class="form-label">Codigo de municipio</label>
                        <input type="text" class="form-control" id="txt_codmu" name="txt_codmu" placeholder="Codigo de municipio">
                    </div>
                    <div class="mb-3">
                        <label for="txt_contra" class="form-label">Constraseña</label>
                        <input type="password" class="form-control" id="txt_contra" name="txt_contra" placeholder="Nuevo contra">
                    </div>
                    <input type="submit" class="btn btn-primary" id="btn_guardar" name="btn_guardar" value="Agregar Nuevo Ciudadanos">
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
        </div>

        <br><br>
   <table border="1">
    <thead>
      <tr>
        <th>dpi</th>
        <th>apellido</th>
        <th>nombre</th>
        <th>direccion</th>
        <th>tel_casa</th>
        <th>tel_movil</th>
        <th>email</th>
        <th>fechanac</th>
        <th>cod_nivel_acad</th>
        <th>cod_muni</th>
        <th>contra</th>
      </tr>
    </thead>
    <tbody>
        <?php
          foreach($ciudadanobd as $registros):
        ?>
       <tr>
        <td><?php echo $registros['dpi'] ?> </td>
        <td><?php echo $registros['apellido'] ?> </td>
        <td><?php echo $registros['nombre'] ?> </td>
        <td><?php echo $registros['direccion'] ?> </td>
        <td><?php echo $registros['tel_casa'] ?> </td>
        <td><?php echo $registros['tel_movil'] ?> </td>
        <td><?php echo $registros['email'] ?> </td>
        <td><?php echo $registros['fechanac'] ?> </td>
        <td><?php echo $registros['cod_nivel_acad'] ?> </td>
        <td><?php echo $registros['cod_muni'] ?> </td>
        <td><?php echo $registros['contra'] ?> </td>
       </tr> 
       <?php
          endforeach
        ?>
    </tbody>
   </table>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>