<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.cdnfonts.com/css/neck-romancer" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/andada-sc" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/andada-sc" rel="stylesheet">
                
        <style>
          .card-container {
              display: flex;
              justify-content: space-between 10px; /* Espacio entre las tarjetas */
          }
          .card {
              flex: 1; /* Hace que las tarjetas ocupen el mismo espacio */
              margin: 0 10px; /* Margen entre las tarjetas */
          }
      </style>
  
    <title>luis alonzo briones rodriguez</title>
</head>
<body>

<?php
$username = "root"
$pasword = ""
$servername = "localhost"
$database = "interstelar"

$conexion = new mysqli($username, $pasword, $servername, $database);
if($conexion->conect_error){
    die("conexion fallida: " . $conexion->connect_error);
}
$sql = "SELECT * FROM PERSONAS";
$RESULTADO = $conexion->query($sql);
?>

<nav class="navbar navbar-light" style="background-color: slateblue;" >

    <a class="navbar-brand" href="#" style="color: white;"> inicio </a> 

  

  <div class="dropdown" style="display: flex; justify-content: flex-start;">
    <button style="width:100px; height:60px; padding: 10px; font-size: 18px; background-color: slateblue; color: white;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      unidad 1
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <center>
        
  
          <button  href="" > unidad 1 </button>  <br > 
          <button  href="#" > unidad 2 </button>  <br > 
          <button  href="#" > unidad 3 </button>  <br > 
        
      </center>
    </div>
  </div>
  
  <div class="dropdown" style="display: flex; justify-content: flex-start;">
    <button style="width:100px; height:60px; padding: 10px; font-size: 18px; background-color: slateblue; color: white;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      unidad 2
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <center>
        
  
          <button  href="#" > unidad 1 </button>  <br > 
          <button  href="#" > unidad 2 </button>  <br > 
          <button  href="#" > unidad 3 </button>  <br > 
        
      </center>
    </div>
  </div>
  
  <div class="dropdown" style="display: flex; justify-content: flex-start;">
    <button style="width:100px; height:60px; padding: 10px; font-size: 18px; background-color: slateblue; color: white;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      unidad 3
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <center>
        
  
          <button  href="#" > unidad 1 </button>  <br > 
          <button  href="#" > unidad 2 </button>  <br > 
          <button  href="#" > unidad 3 </button>  <br > 
        
      </center>
    </div>
  </div>

</nav>
<center>

    <div class="jumbotron">
        <h1 class="display-4" style=" font-family: 'NECK ROMANCER', sans-serif; color: red;">cuarto semestre</h1>
        <p class="lead" style="font-family: 'Andada SC', sans-serif;
        ">es una pagina para la materia de base de datos relacionales
        <p style="font-family: 'Andada SC', sans-serif;">luis alonzo briones rodriguez</p>
        <p class="lead">
        </p>
      </div>

    
      
      
</center>
<div class="card-container">
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
      <div class="card-header">practica 1</div>
      <div class="card-body">
          <h5 class="card-title">mySQL</h5>
          <p class="card-text">primera practica para demostrar lo aprendido en clase</p>
      </div>
  </div>
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h5 class="card-title">Secondary card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
</div>



</body>
</html>
