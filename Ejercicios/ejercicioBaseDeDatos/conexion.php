<?php
$enlace = mysqli_connect("localhost", "root", "", "gestionfiat");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
//echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

$sql = "SELECT * FROM `turnos_registros`";
$resultado = mysqli_query($enlace, $sql);
if(!$resultado) {
    echo mysqli_error($enlace);
}else{
    //echo "Bien";
}

while ($row = mysqli_fetch_assoc($resultado)) {
    //echo $row["ID"];
   // echo $row["REGISTRO"];
   // echo $row["TITULAR"];
   // echo $row["FECHA"];
   // echo $row["HORA"];
}

mysqli_close($enlace);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola</h1>
    <h1> 
        <?php
        echo "Adios";
        ?>
    </h1>
    <h1>Hola</h1>
</body>
</html>