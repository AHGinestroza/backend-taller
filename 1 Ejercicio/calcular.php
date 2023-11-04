<?php 

$operaciones = $_POST ['lista'];

switch ($operaciones) {
	case 'Sumar':
	$Numeros1=$_POST['Numero1'];
	$Numeros2= $_POST['Numero2'];
	$resultado=$Numeros1+$Numeros2;
	echo "El resultado de la suma $Numeros1 + $Numeros2 es:  $resultado";
	break;
	
	case 'Restar':
	$Numeros1=$_POST['Numero1'];
	$Numeros2= $_POST['Numero2'];
	$resultado=$Numeros1-$Numeros2;
	echo "El resultado de la resta $Numeros1 - $Numeros2 es: $resultado";	
		break;

	case 'Multiplicar':
	$Numeros1=$_POST['Numero1'];
	$Numeros2= $_POST['Numero2'];
	$resultado=$Numeros1*$Numeros2;
	echo "El resultado de la multiplicacion $Numeros1 * $Numeros2 es:  $resultado";	
		break;

	case 'Dividir':
	$Numeros1=$_POST['Numero1'];
	$Numeros2= $_POST['Numero2'];
	$resultado=$Numeros1/$Numeros2;
	echo "El resultado de la division $Numeros1 / $Numeros2 es:  $resultado";
		break;

}

 ?>