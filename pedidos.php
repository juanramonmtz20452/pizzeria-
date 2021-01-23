<?php  
session_start(); 
$verifica = 1; 
$_SESSION["verifica"] = $verifica; 
?> 
<!DOCTYPE html>
<html lang="en">

<head>

  <script>
        window.mediana1 = "<?php echo $_GET["m"]; ?>";
         window.grande = "<?php echo $_GET["g"]; ?>";
          window.extra = "<?php echo $_GET["xg"]; ?>";
        // Justo aquí estamos pasando la variable ----^
    </script>
<script type="text/javascript" src="minerva.js"></script>
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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Mega Pizzas</title>
  <link rel="stylesheet" type="text/css" media="all" href="css.css" title="Normal">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link  rel="icon"   href="pizzaf.png" type="image/png" />

</head>
<body onload="iniciar()">
  <script type="text/javascript" src="funciones.js"></script>

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
        <h1 class="mt-5" style="color:white;">Bienvenido/a</h1>
        <h1 class="lead" style="color: white;">Aqui podras realizar tu pedido ;).</h1>
        <ul class="list-unstyled">
        </ul>
        <form action="pedidorealizado.php" method="post">
       <h3 style="color: white;">Nombre.</h3>
     <input type="text" name="nombre1" required><br>
     <h3 style="color: white;">Direccion</h3>
     <input type="text" name="direccion1" required><br>
     <h3 style="color: white;">Telefono de referencia</h3>
     <input type="text" name="telefono1" required><br><br><br>
     <table class="table">
    <thead>
      <tr>
        <th><h2>Especialidad</h2></th>
        <th><h2>Precio</h2></th>
        <th><h2>Cantidad</h2></th>
      </tr>
    </thead>
    <tbody>
<tr>
<td>
     <div class="card">
<center><?php echo '<img src="'.$_GET["v"].'"alt="Avatar" style="width:300px;height:300px;">' ?></center>
<h1><?php echo $_GET["pizza"] ?></h1>
<h1 id=tpizza>Grande</h1>
</div>
</td>
<td>
  <center> 
   <div class="card">
<a><button type="button"id="medianab" style="background-color:#008CBA;color;black;border: 2px solid black;" onclick="mediana();">Mediana $<?php echo $_GET['m']; ?></button></a>
<button type="button" id="grandeb"  style="background-color:#008CBA;color;black;border: 2px solid black;" onclick="grande1();">Grande $<?php echo $_GET["g"]; ?>      &#8226;</button>
<button type="button" id = "extrab"style="background-color:#008CBA;color;black;border: 2px solid black;" onclick="extra1();">Extra Grande $<?php echo $_GET["xg"]; ?></button>
</div>
</center>

</td>
<td>
   <div class="card">
<button  type="button" onclick="aumentar();" style="background-color:#4CAF50;color;black;border: 2px solid black;"  >+</button>
<h1 id="cantidad">1</h1>
<button type="button" onclick="bajar();" style="background-color:#FF0000;color;black;border: 2px solid black;"  >-</button>
</div>

</td>
  </tr>
</tbody>
     </table>
   <div class="card">
<h1>Total</h1>
<h1 id="precio">$<?php echo $_GET['g']; ?></h1>
</div>
     <input type="hidden" value="<?php echo $_GET['g']; ?>" name="precio123" id="precio123" required>
<input type="hidden" value="<?php echo $_GET['pizza']; ?>" name="imagen123" id="imagen123" required>
<input type="hidden" value="1" name="cantidad12" id="cantidad12" required>
<input type="hidden" value="Grande" name="tamano123" id="tamano123" required>
     <br>
<button  style="background-color:#008CBA;color;black;border: 2px solid black;width:200px;" >Confirmar Pedido</button>
</form>
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