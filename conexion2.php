<html>
<head>
<title>Consulta</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "", "clientes") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select nombres,sexo,direccion,correo,fechanacimiento,movil,edad
from usuarios where identificacion=$_REQUEST[identificacion]") or

die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
echo "nombres:" . $reg['nombres'] . "<br>";
echo "sexo:" . $reg['sexo'] . "<br>";
echo "direccion:" . $reg['direccion'] . "<br>";
echo "Correo:" . $reg['correo'] . "<br>";
echo "fechanacimiento:" . $reg['fechanacimiento'] . "<br>";
echo "movil:" . $reg['movil'] . "<br>";
echo "edad:" . $reg['edad'] . "<br>";


} else {
echo "cliente No existe .";
}
mysqli_close($conexion);
?>
</body>
</html>