<!DOCTYPE html>
<html lang="en">
<head>
  <script>
        window.mediana1 = "<?php echo $_GET["m"]; ?>";
         window.grande = "<?php echo $_GET["g"]; ?>";
          window.extra = "<?php echo $_GET["xg"]; ?>";
        // Justo aquí estamos pasando la variable ----^
    </script>
<style>
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.price {
  color: grey;
  font-size: 22px;
}
.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.card button:hover {
  opacity: 0.7;
}
</style>
<script src="funciones.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Mega Pizzas</title>
  <link rel="stylesheet" type="text/css" media="all" href="css.css" title="Normal">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link  rel="icon"   href="pizzaf.png" type="image/png" />
<?php
session_start(); 

$verifica = $_SESSION["verifica"]; 
$nombre = $_POST['nombre1'];
$direccion = $_POST['direccion1'];
$telefono = $_POST['telefono1'];
$precio = $_POST['precio123'];
$especialidad = $_POST['imagen123'];
$tamano = $_POST['tamano123'];
$cantidad=$_POST['cantidad12'];
$status="pendiente";
if ($verifica == 1)  
{  
unset($_SESSION['verifica']);  
include_once "base_de_datos.php";

$sentencia = $base_de_datos->prepare("INSERT INTO pedidos (nombre,direccion,telefono,especialidad,tamano,cantidad,precio,status) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $direccion, $telefono, $especialidad, $tamano, $cantidad, $precio, $status]); 
$sentencia1 = $base_de_datos->query("SELECT * FROM pedidos order by folio desc limit 1");
$pedidos = $sentencia1->fetchAll(PDO::FETCH_OBJ);
}
else  
{  
// Si no viene del formulario o trata de recargar pagina los enviamos al formulario 
echo "<META HTTP-EQUIV='Refresh' CONTENT='0; url=especialidades.html'>"; 
}  
?>


</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
            <a href="mainpage.html" class="rounded"> <img  src="pizzaf.png" width="50px" height="50px" > </a>
      <a class="navbar-brand" href="mainpage.html">Mega Pizzas</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="mainpage.html">Inicio

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sucursales.html">Sucursales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="especialidades.html">Especialidades</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5" style="color:white;">Pedido Realizado</h1>
        <h1 class="lead" style="color: white;">En unos minutos llegara tu pedido ;).</h1>
        <ul class="list-unstyled">
             <div class="card">
              <a href="especialidades.html"><h2>Volver a especialidades</h2></a>
              <h1>Folio</h1>
              <?php foreach($pedidos as $pedido){ ?>
                  <h2><?php echo $pedido->folio  ?></h2>
                      <?php } ?>
<center><img src="palomita.png"alt="Avatar" style="width:300px;height:300px;"></center>
<h1>Especialidad</h1>
<h2> <?php echo $especialidad; ?></h2>
<h1>Tamaño</h1>
<h2 id=tpizza><?php echo $tamano; ?></h2>
<h1>Cantidad</h1>
<h2><?php echo $cantidad; ?></h2>
<h1>Precio final</h1>
<h2 id=tpizza>$<?php echo $precio; ?></h2>
</div>
        </ul>

</div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Mega Pizzas 2021</p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>