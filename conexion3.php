<html>
<head>
<title>Elimicación</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "",
"clientes") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select identificacion
from usuarios
where identificacion=$_REQUEST[identificacion]") or
die("Problemas en el select:" .
mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from usuarios
    where identificacion=$_REQUEST[identificacion]") or
    die("Problemas en el select:" .
    mysqli_error($conexion));
    echo "Se efectuó la elimicación del cliente con el
    documento digitado.";
    } else {
    echo "No existe un cliente con ese numero de documento, lo
    siento intente con otro.";
    }
    mysqli_close($conexion);
    ?>
    </body>
    </html>