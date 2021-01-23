<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM pedidos WHERE status='pendiente';");
$pedidos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tabla de ejemplo</title>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
</head>
<body>
	<table class="table table-hover" style="margin-left:30px;">
		<thead>
			<tr>
				<th>Folio</th>
				<th>Nombre</th>
				<th>Direcion</th>
				<th>Telefono</th>
				<th>Especialidad</th>
				<th>Tamaño</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Status</th>
				<th>Fecha</th>
				<th>Marcar como realizado</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<!--
				Atención aquí, sólo esto cambiará
				Pd: no ignores las llaves de inicio y cierre {}
			-->
			<?php foreach($pedidos as $pedido){ ?>
			<tr>
				<td><?php echo $pedido->folio ?></td>
				<td><?php echo $pedido->nombre ?></td>
				<td><?php echo $pedido->direccion ?></td>
				<td><?php echo $pedido->telefono ?></td>
				<td><?php echo $pedido->especialidad ?></td>
				<td><?php echo $pedido->tamano ?></td>
				<td><?php echo $pedido->cantidad ?></td>
				<td><?php echo $pedido->precio ?></td>
				<td><?php echo $pedido->status ?></td>
				<td><?php echo $pedido->fecha ?></td>
				<td><a href="<?php echo "marcar.php?id=" . $pedido->folio?>">Marcar</a></td>
				<td><a href="<?php echo "eliminar.php?id=" . $pedido->folio?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>