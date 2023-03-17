<?php

    // var_dump($_SERVER['REQUEST_URI']);
    $url = explode("?",$_SERVER['REQUEST_URI']);
    // var_dump($url[1]);
    @$dados = explode("&", $url[1]); 
    $result = [];
    
    foreach ($dados as $value) {
        $x = explode("=",$value);
        @$GET[$x[0]] = floatval($x[1]);
        // var_dump($GET);
    }

    if (isset($GET['btn_calc'])) {
        $val1 = $GET['val1'];
        $val2 = $GET['val2'];
        
        $area = ($val1 * $val2)*6;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<body>

    <div class="container CAC">
        <h1>Calcular Área do Cubo</h1>
        <form method="get">
            <input type="number" name="val1" class="inputs" placeholder="Altura (cm): ">
            <br>
            <input type="number" name="val2" class="inputs" placeholder="Largura (cm): ">
            <br>
            <input type="text" disabled  id="span" value='<?php echo "Resultado: ", isset($area)? $area.' cm³':'0 cm³'; ?>'>
            <br>
            <button name="btn_calc">Calcular</button>
        </form>
        
    </div>     

</body>
</html>