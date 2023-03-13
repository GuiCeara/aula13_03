<!doctype html>
<html lang="PT-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

      .nav-link{
        border: none;
        background-color: '#F8F9FA';
      }

    </style>

  <title>Aula 13/03</title>
</head>

<body>
  <form class="navbar navbar-expand-lg navbar-light bg-light" method="get">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cálculos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cubo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><button class="dropdown-item" name="areaC">Área</button></li>
              <li><button class="dropdown-item" name="volumeC">Volume</button></li>
            </ul>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Esfera
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><button class="dropdown-item" name="areaE">Área</button></li>
              <li><button class="dropdown-item" name="volumeE">Volume</button></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#IMC" name="IMC">IMC</a>
          </li>

        </ul>
      </div>
    </div>
  </form>

  <?php
  
    if(isset($_GET['areaC'])){
      require_once "./components/cubo/CAC.php";
    };

    if(isset($_GET['volumeC'])){
      require_once "./components/cubo/CVC.php";
    };

    if(isset($_GET['areaE'])){
      require_once "./components/esfera/CAE.php";
    };

    if(isset($_GET['volumeC'])){
      require_once "./components/esfera/CVE.php";
    };

    if(isset($_GET['IMC'])){
      require_once "./components/imc.php";
    };

  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>