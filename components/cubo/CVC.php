<?php

    $url = explode("?", $_SERVER['REQUEST_URI']);
    @$url = explode("&", $url[1]);
    $GET = [];
    
    foreach ($url as $value) {
        $x = explode("=", $value);
        @$GET[$x[0]] = floatval($x[1]);
    };

    if (isset($GET['btn_calc'])) {
        $comprimeto = $GET['val1'];
        $largura = $GET['val2'];
        $altura = $GET['val3'];

        $volume = $comprimeto*$largura*$altura;
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<body>

    <div class="container CAC">
        <h1>Calcular Volume do Cubo</h1>
        <form method="get">
            <input type="number" name="val1" class="inputs" placeholder="Comprimeto (cm): ">
            <br>
            <input type="number" name="val2" class="inputs" placeholder="Largura (cm): ">
            <br>
            <input type="number" name="val3" class="inputs" placeholder="Altura (cm): ">
            <br>
            <input type="text" disabled  id="span" value='<?php echo "Resultado: ", isset($volume)? $volume.' cm³':'0 cm³'; ?>'>
            <br>
            <button name="btn_calc">Calcular</button>
        </form>
        
    </div>     

</body>
</html>