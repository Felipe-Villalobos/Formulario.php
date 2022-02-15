<html>

<head>
<title>Problema</title>
</head>

<body>
<?php
$conexion = mysqli_connect("localhost",
"root", "", "CLIENTES") or
die("Problemas con la conexión");
mysqli_query($conexion, "update Usuarios

set


nombres='$_REQUEST[newnombres]',
sexo='$_REQUEST[newsexo]',
direccion='$_REQUEST[newdireccion]',
correo='$_REQUEST[newcorreo]',
fechanacimiento='$_REQUEST[newfechanacimiento]',
movil='$_REQUEST[newmovil]',
edad='$_REQUEST[newedad]'


where

identificacion='$_REQUEST[newidentificacion]'") or
die("Problemas en el select:" .
mysqli_error($conexion));
echo "Los datos han sido actualizados con exito!";
?>


</body>

</html>


