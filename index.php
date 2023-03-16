<!doctype html>
<html lang="PT-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/CSS/style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Aula 13/03</title>
</head>

<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cálculos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cubo
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/cubo/area">Área</a></li>
            <li><a class="dropdown-item" href="/cubo/volume">Volume</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Esfera
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">IMC</a>
        </li>
      </ul>
      </div>
    </div>
  </nav>
  
  <?php

    @$url =  explode('/', $_SERVER['REDIRECT_URL']);
  
    if(@$url[1] == 'cubo'){
      if($url[2] == 'area'){
          require_once './components/cubo/CAC.php';
      }
      elseif($url[2] == 'volume'){
        require_once "./components/cubo/CVC.php";
      }
      else{
        require_once "./components/page_error.html";
      }
    }
    elseif(@$url[1] == 'esfera'){
      if ($url[2] == 'area') {
        require_once "./components/esfera/CAE.php";
      }
      elseif ($url[2] == 'volume') {
        require_once "./components/esfera/CVE.php";
      }
      else {
        require_once "./components/page_error.html";
      }
    };
    // if (isset($_GET['btn_calc'])) {
    //   require_once "./components/cubo/CAC.php";
    // }

    // elseif(isset($_GET['areaC'])){
    //   require_once "./components/cubo/CAC.php";
    // }

    // elseif(isset($_GET['volumeC'])){
    //   require_once "./components/cubo/CVC.php";
    // }

    // elseif(isset($_GET['areaE'])){
    //   require_once "./components/esfera/CAE.php";
    // }

    // elseif(isset($_GET['volumeC'])){
    //   require_once "./components/esfera/CVE.php";
    // }

    // elseif(isset($_GET['IMC'])){
    //   require_once "./components/imc.php";
    // };

  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>



</body>

</html>