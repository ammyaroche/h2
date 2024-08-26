<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="../h2/css/estilo.css">
</head>
<body class="fondo">
    <div>
        <h1>Menu de Consulta</h1>
        <br>
        <ul>
            <li><a href="<?=base_url('ver_nivel')?>"> Niveles académicos </a></li>
            <li><a href="<?=base_url('ver_ciudadano')?>">Ciudadanos</a></li>
            <li><a href="<?=base_url('ver_municipio')?>">Municipios</a></li>
            <li><a href="<?=base_url('ver_departamento')?>">Departamentos</a></li>
            <li><a href="<?=base_url('ver_region')?>">Regiones</a></li>
        </ul>
    </div>
</body>
</html>