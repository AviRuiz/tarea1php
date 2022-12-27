<?php
/* En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor de la compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es blanca no se le hará descuento alguno, si es verde se le hará un 10% de descuento, si es amarilla un 25%, si es azul un sex y si es roja un 100%. Determinar la cantidad final que un cliente deberá pagar por su compra. Se sabe que sólo hay bolitas de los colores mencionados. "

*/

$totalCompra= 0;
$decuento = 0;
$colorBolita = '';
$totalPago =0;

if (isset($_POST['procesar'])) {
$totalCompra = $_POST['totalCompra'];
$colorBolita = $_POST['colorBolita'];

switch ($colorBolita) {
    case 'blanca':
        $decuento = 0;
        break;

        case 'verde':
            $decuento = $totalCompra *0.1;
            break;
    
            case 'amarilla':
                $decuento= $totalCompra *0.25;
            break;

            case 'azul':
                $decuento= $totalCompra *0.5;
            break;

            case 'roja':
                $decuento= $totalCompra *0.1;
            break;

 default:
 echo 'No Existe Color Valido de la Bolita Seleccionada';
 break;
}
$totalPago = $totalCompra - $decuento;

}
?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculo de Descuento Compra</title>

 </head>

 <body>
 <header class="container">

</header>

<main class="container">

<section>

<h3>FORMARIO DE REGISTRO</h3>

<form action="ejercicio6.php" method="POST">

<fieldset class="row g-3">

<legend>REGISTRO DE COMPRAS CON DESCUENTO</legend>

<div class="col-md-4"> 
<label for= "totalCompra" class="form-label">Total Compras: </label>

<input type="text" class="form-control" name="totalCompra" required min="0" id="hora"

placeholder="0">
</div>

<div class="col-md-4">
 <label for="precio" class="form-label"> seleccione una bolita</label>

<select class="form-select" name="colorBolita" aria-label="Default select example">
<option value="">Seleccione...</option>
<coption value= "blanca">Blanca</option>
<option value= "verde">Verde</option> 
<coption values="amarilla">Amarillac</cption>
<option value="azul">Azul</option>
<option value="roja">Roja</option>

</select>



</fieldset>


<div class= "col-12 my-2">

<button type="submit" name="procesar" class="btn btn-success">PROCESAR  ✔❤</button>
</div>


</form>

<div class="alert alert-primary" role="alert">

<strong>TOTAL COMPRA: </strong>

<?php echo $totalCompra; ?>


<strong>COLOR BOLITA SELECIONADA: </strong>

<?php echo $colorBolita; ?>
<br>
<strong>DESCUENTO: </strong>
 <?php echo $decuento; ?>
<br>
<strong>TOTAL A PAGAR POR EL CLIENTE $: </strong> 
<?php echo $totalPago; ?>
<br>

</div>

</section>
</main>


</body>

</html>

