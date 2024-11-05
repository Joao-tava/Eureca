<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
<body>
<div id="background-image"></div>
   <header>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage.php">EUREKA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="modulos.php ">Modulos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="atividades.php">Atvidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Sair</a>
        </li>
      </ul>
      <div class="logotop">
  <img src="img/laika-removebg-preview.png" alt="Logo" width="95px" height="95px" style="transform: scaleX(-1);">
</div>
    </div>
  </div>
</nav>
  </header>
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <a href="modulos.php"> 
    <div class="card">
      <img src="img/graf.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Modulos</h5>
        <p class="card-text">Uma breve introdução na matemática</p>
      </div>
    </div>
</a>
  </div>
  <div class="col">
  <a href="atividades.php">
  <div class="card">
      <img src="img/statistics-2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Atividades</h5>   
      </div>
    </div>
  </a>
  </div>
</div>
</body>
</html>