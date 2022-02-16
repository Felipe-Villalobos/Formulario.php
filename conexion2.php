<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
  <?php
$conexion = mysqli_connect("localhost", "root", "", "clientes") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select *from usuarios 
where identificacion=$_REQUEST[identificacion]") or

die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {

?>
  <div class="container" >
        <div class="row1">
            <div class="col-md-8" >
            <div class="Sign">
                          <div class="panel-heading">
            <h4 class="panel-title" >
                Clientes</h4>
             </div>
             <form class="form" action="conexion2.1.php" method="post">
                <div class="form-group row">
                  <label for="inputfirstname" class="col-md-4 col-form-label">Identificación</label>
                  <div class="col-md-6">
                    
                    <input type="number" name="newidentificacion" class="form-control"value="<?php echo $reg['identificacion'] ?>">
                  </div>
                 </div>
                    <div class="form-group row">
                    <label for="inputlastname" class="col-md-4 col-form-label">Nombres</label>
                    <div class="col-md-6">
                      <input type="text" name="newnombres" class="form-control" value="<?php echo $reg['nombres'] ?>">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputUsername" class="col-md-4">
                         Sexo</label>
                     <div class="col-md-6">
                         <input type="text" name="newsexo" class="form-control" value="<?php echo $reg['sexo'] ?>"   >
                     </div>
                </div>

                  <div class="form-group row">
                    <label for="inputscreenname" class="col-md-4 col-form-label">Dirección</label>
                    <div class="col-md-6">
                      <input type="text" name="newdireccion" class="form-control"value="<?php echo $reg['direccion'] ?>">
                    </div>
                  </div>
                    

                
                
                  <div class="form-group row">
                    <label for="inputfirstname" class="col-md-4 col-form-label">Correo</label>
                    <div class="col-md-6">
                      <input type="email" name="newcorreo" class="form-control" value="<?php echo $reg['correo']?>">
                    </div>
                   </div>

                   
                    <div class="form-group row">
                      <label for="birthday" class="col-md-4 col-form-label">Fecha de nacimiento</label>
                      <div class="col-md-6">
                        <input type="date" name="newfechanacimiento" class="form-control" id="birthday" value="<?php echo $reg['fechanacimiento'] ?>"  >
                      </div>
                     </div>
                <div class="form-group row" >
                    <label for="inputfirstname" class="col-md-4">    
                       Movil</label>
                    <div class="col-md-6">
                       <input type="number" name="newmovil" class="form-control" value="<?php echo $reg['movil'] ?>">
                    </div>
               </div>
               <div class="form-group row">
                    <label for="age" class="col-md-4">
                      Edad</label>
                    <div class="col-md-6">
                        <input type="number" name="newedad" class="form-control" value="<?php echo $reg['edad'] ?>">
                    </div >
               </div>
               
               
                       <div class="d-flex justify-content-center"  style="padding: 2%;">
                         <button type="submit" value="registrar" class="btn btn-secondary">actualizar</button>
                        </div>
             </form>
             </div>
        </div>
  </div>
  <?php
} else {
echo "cliente No existe .";
}
mysqli_close($conexion);
?>
</body>
</html>
