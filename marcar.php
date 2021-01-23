<?php
$id = $_GET["id"];
$marcar="realizado";
include_once "base_de_datos.php";
$sentencia1 = $base_de_datos->prepare("UPDATE pedidos SET status = ? WHERE folio = ?;");
$resultado1 = $sentencia1->execute([$marcar, $id]);
if($resultado1 === TRUE) echo "Cambios guardados <br> <a href=paneldecontrol.html>Volver<a>";
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario   <br> <a href=mainpage.html>Volver<a>";
#Si la persona existe, se ejecuta esta parte del código
?>