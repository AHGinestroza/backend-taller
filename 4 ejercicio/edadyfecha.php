<?php 
if (isset($_POST['calcular'])) {
	$fecha_n = $_POST['fecha'];
	$fecha = new dateTime($_POST['fecha']);
	$fecha_act_n = date ('Y-m-d');
	$fecha_act = new dateTime(date ('Y-m-d'));
	$diff = $fecha->diff($fecha_act);
	$año = $diff->y;
	$mes = $diff->m;
	$dia = $diff->d;

	echo 'Fecha de nacimiento = '.$fecha_n.'<br>'.
		 'Fecha de actual = '.$fecha_act_n.'<br>'.
		 'edad ='.$año. 'año(s) '.$mes.'mes(es) y '.$dia.' dia(s)';
	
}

 ?>