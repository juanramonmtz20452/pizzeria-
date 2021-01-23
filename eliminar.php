<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM pedidos WHERE folio = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE) echo "Eliminado correctamente  <br> <a href=paneldecontrol.html>Volver<a>";
else echo "Algo salió mal  <br> <a href=paneldecontrol.html>Volver<a>";
?>