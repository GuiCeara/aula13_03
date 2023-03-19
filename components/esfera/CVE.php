<?php
    $url = explode("?", $_SERVER['REQUEST_URI']);
    @$dados = explode("&", $url[1]);
    $PI = 3.14;
    $GET = [];

    foreach ($dados as $value) {
        $x = explode("=", $value);
        @$GET[$x[0]] = floatval($x[1]);
    }

    if (isset($GET['btn_calc'])) {
        $raio = $GET['val1'];
        $volume = (4/3)*$PI*$raio**3;
    }
    




?>

<!DOCTYPE html>
<html lang="pt-br">
<body>

    <div class="container CAC">
        <h1>Calcular Volume de uma Esfera</h1>
        <form method="get">
            <input type="number" name="val1" class="inputs" placeholder="Raio (cm): ">
            <br>
            <input type="text" disabled  id="span" value='<?php echo "Resultado: ", isset($volume)? number_format($volume, 2).' cm³':'0 cm²'; ?>'>
            <br>
            <button name="btn_calc">Calcular</button>
        </form>
        
    </div>     

</body>
</html>