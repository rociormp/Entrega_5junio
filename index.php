<?php include('cabeza.php');?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
	<h1>Títulos y Grados en Diseño</h1>
<p>Listado de los Títulos Profesionales y Grados Académicos que se pueden obtener en diseño según el tipo y la duración de la carrera.</p>

<?php
$csv = array_map('str_getcsv', file('data/rocio.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

	<table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>Carrera</th>
				<th>Institución</th>
				<th>Duración Formal</th>
				<th>Título Profesional</th>
				<th>Salida Intermedia</th>
				<th>Grado Académico</th>
			</tr>
		</thead>
		<tbody>

			<?php for($a = 0; $a < $total = count($csv); $a++){?>

			<tr>
				<td><?php echo($csv[$a]["carrera"])?></td>
				<td><?php echo($csv[$a]["institucion"])?></td>
				<td><?php echo($csv[$a]["duracion_formal"])?></td>
				<td><?php echo($csv[$a]["titulo_profesional"])?></td>
				<td><?php echo($csv[$a]["salida_intermedia"])?></td>
				<td><?php echo($csv[$a]["grado_academico"])?></td>
			</tr>

			<?php };?>

		</tbody>
	</table>



</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php include('pie.php');?>
