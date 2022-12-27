<?php 
/* Elaborar un sistema de facturación que pida el nombre del vendedor, nombre del cliente, fecha de factura, número de factura y suma de ventas realizadas. A la suma de ventas realizadas, se les hará un descuento según la siguiente tabla:

100 <- V <- 500-15%

3500 < V < 1000- 20%

V > 1000-30%
*/

 $descuento = 0;
 $nombreV ='';
 $nombreC ='';
 $fechaf ='';
$numf = '';
$ventas = 0;
$totalPagar = 0; 

  if(isset($_POST['enviar'])) {
 $nombreV = $_POST['nombrev'];
 $nombreC = $_POST['nombrec'];
$fechaf = $_POST['fechaf'];
$numf = $_POST ['numf'];
$ventas= $_POST['ventas'];



if($ventas > 0 && $ventas < 100){
$descuento = 0;
} elseif ($ventas >= 100 && $ventas <= 500){
$descuento = $ventas * 0.15;

}elseif ($ventas > 500 && $ventas <= 1000) {
$descuento = $ventas * 0.2;

} else {
     $descuento = $ventas *0.3;
}
$totalPagar = $ventas - $descuento;
  }

?>

 <!DOCTYPE html>
<html lang="es">
 <head >
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity ="sha384-rbsA2VBKQhggwzxd7pPCqO46MgOMSW1RWH61DGLZJEdK2Kadq2F9C665" crossorigin="anonymous">
<title>Sistema de facturación</title> 
 </head> 
 <body>

<header class="container"> 
    <h1>Sistema de facturación</h1>
 </header>

<main class="container">
<section style="background-color: #f9f919;">
<form class="row g-3" method="POST" action="ejercicio7.php">
<div class="col-md-6">
<label for= "nombrev" class="form-label">Nombre Vendedor</label>
 <input type="text" class="form-control" id="nombrev" name="nombrev"
placeholder="Escriba el nombre del vendedor" required>
</div>
<div class="col-md-6">
<label for ="nombrec" class="form-label">Nombre Cliente</label>
<input type ="text" class="form-control" id="nombrec" name="nombrec"
placeholder="Escriba el nombre del Cliente" required>
</div>

<div class="col-md-6">
     <label for="fechaf" class="form-label">Fecha Factura</label>
<input type="date" class="form-control" id="fechaf" name="fechaf" value="<?php echo date(
 'Y-m-d'
); ?>">
</div>

<div class="col-md-4">
<label for ="numf" class="form-label">N° de Facturación</label>
<input type="text" class="form-control" id="numf" name="numf" placeholder= "FACT-8081">
</div>

<div class="col-md-2">

<label for="ventas" class="form-label">Ventas</label>
<input type= "text" class="form-control" id="ventas" name="ventas" placeholder="0.00">
</div>

<div class= "col-12">
<button type="submit" class="btn btn-primary" name="enviar">Calcular facturación</button>
</div>
</form>

<div class="alert alert-primary" role="alert">

<strong>
Nostre Vendedor:
</strong>

<?php echo $nombreV; ?>
<br>
<strong>
Nombre Cliente:
</strong>
<?php echo $nombreC; ?>
<br>
<strong>
Fecha de Facturación:
</strong>
<?php echo $fechaf; ?>
<br>
<strong>
N° de Facturación:
</strong>

<?php echo $numf; ?>
<br>
<strong> VENTAS: $
</strong>

<?php echo $ventas; ?>

<strong> Descuentos: $
</strong>
 <?php echo $descuento; ?>
<br>
<strong>
TOTAL A PAGAR ES: $ 
</strong>

<?php echo $totalPagar; ?> 


</section>


 </body>

 </html>

