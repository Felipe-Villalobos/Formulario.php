
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "CLIENTES") or
    die("Problemas con la conexión");
  mysqli_query($conexion, "insert into Usuarios(identificacion,nombres,sexo,direccion,correo,fechanacimiento,movil,edad)
   values ($_REQUEST[identificacion],'$_REQUEST[nombres]','$_REQUEST[sexo]','$_REQUEST[direccion]','$_REQUEST[correo]','$_REQUEST[fechanacimiento]','$_REQUEST[movil]',$_REQUEST[edad])")                       
    or die("Problemas en el select" . mysqli_error($conexion));
  echo "El cliente ha sido registrado ¡exitosamente! ";
  ?>
