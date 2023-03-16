<?php

    // var_dump($_SERVER['REQUEST_URI']);

    $url = explode("?", $_SERVER['REQUEST_URI']);
    // var_dump($url[1]);
    $dados = explode("&", $url[1]); 
    $result = ["x"=>10];

    
    foreach ($dados as $value) {
        $x = explode("=",$value);
        $result[$x[0]] = floatval($x[1]);
    }

    if (isset($result['btn_calc'])) {
        $val1 = $result['val1'];
        $val2 = $result['val2'];
        
        $area = ($val1 * $val2)*6;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>

    <div class="container CAC">
        <h1>Calcular Área do Cubo</h1>
        <form method="get">
            <input type="number" name="val1" class="inputs" placeholder="Altura: ">
            <br>
            <input type="number" name="val2" class="inputs" placeholder="Largura: ">
            <br>
            <input type="text" disabled  id="span" value="<?php echo 'Resultado: ', isset($area)? $area:''; ?>" placeholder="Resultado:">
            <br>
            <button name="btn_calc">Calcular</button>
        </form>
        
    </div>
    
    <!-- <img src=".\imagens\esfera.jpg" class="img_esfera">  -->

    

</body>
</html>