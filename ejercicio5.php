<?php
/*Un obrero necesita calcular su salario semanal, el cual se obtiene de la siguiente manera:
Si trabaja40 horas o menos se le paga $4 por hora.
Si trabaja m ás de 40 horas se le paga $4 por cada una de las primeras 40 horas y $6 por cada hora extra.
Calcule el nuevo salario del obrero.*/


    $nombre ='';
    $apellido ='';
    $cantidadHoras =0.0;
    $precioNormal =0.0;
    $precioExtra = 0.0;


    $pagoNormal =0;
    $pagoExtra =0;
    $pagoTotal =0;
    $horasExtras =0;
    
$mesgError ='';
if (isset($_POST['procesar'])) {
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $cantidadHoras =$_POST['hora'];
    $precioNormal =$_POST['precio'];
    $precioExtra =$_POST['precioextra'];

    if (empty($nombre) || empty($cantidadHoras)) {
$mesgError = '<div class="alert alert-danger" role="alert">
Campo Nombre o Horas Trabajdas requerido!
</div>';
} else {
  if ($cantidadHoras >= 0 && $cantidadHoras <= 40) {
    $pagoNormal =$cantidadHoras * $precioNormal;
  } elseif ($cantidadHoras > 40) {
    $pagoNormal = 40 * $precioNormal;
    $horasExtras = $cantidadHoras - 40;
    $pagoExtra = $horasExtras * $precioExtra;
  } else {
    echo 'Error en los datos ingresados';
  }
}
    $pagoTotal = $pagoNormal + $pagoExtra;

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CALCUCULO DE HORAS TRABAJASDAS</title>
</head>
<body>
    <header class="container">
        <h2>Calcular sueldo de Empleado segun Horas Trabajadas</h2>
    </header>
   <main class="container">
    <section>
        <h3>FORMULARIOS DE REGISTRO</h3>
   <form action="ejercicios5.php" method="POST">
    <fieldset class="row g-3">
        <legend>DATOS DE EMPLEADO</legend>
  <div class="col-md-6">
    <label for="nota1" class="form-label">Nombre de Empleado</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombre" id="nombre" placeholder="Ingrese su Nombre" placeholder="Ingresar su nombre">
  </div>

  <div class="col-md-6">
    <label for="nota2" class="form-label">Apellido Empleado</label>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su Apellido"placeholder="Ingrese su Nombre" placeholder="Ingresar su apellido">
    
  </div>
  
    
<fieldset class="row g-3">
 <legend>HORAS TRABAJADAS Y PAGO POR HORA</legend>
  <div class="col-md-4">
    <label for="examen" class="form-label">Cantidad de horas Trabajadas</label>
    <input type="number" class="form-control" name="hora" required min="0" id="hora" placeholder="0.00">
  </div>

  <div class="col-md-4">
    <label for="examen" class="form-label">Precio por Hora Normal<label>
    <input type="text" class="form-control" name="precio"  id="precio"  placeholder="0.00" value="4">
  </div>
  <div class="col-md-4">
    <label for="examen" class="form-label">Precio por Hora Extra<label>
    <input type="text" class="form-control" name="precioextra"  id="precioextra"  placeholder="0.00" value="6">
  </div>
</fieldset>
 
  
  <div class="col-12 my-2">
    <button type="submit" name="procesar" class="btn btn-success">PROCESAR ✔❤</button>
    </div>
</form>
 <?php echo $mesgError; ?>
 <strong>Nombre Completo:</strong>
<?php echo $nombre.''. $apellido; ?>
<br>
<strong>CANTIDAD DE HORAS TRABAJADAS:</strong>
<?php echo $cantidadHoras; ?>
<br>
<strong>pago hora normal:</strong>
<?php echo $pagoNormal; ?>
<br>
<strong>PAGO HORA EXTRA:</strong>
<?php echo $pagoExtra; ?>
<br>
<strong>TOTAL:</strong>
<?php echo $pagoTotal; ?>
<br>
</div>
</section>
 </main>
</body>
</html>
