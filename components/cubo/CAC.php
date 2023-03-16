<?php

        if (isset($_GET['btn_calc'])) {
            
            $val1 = $_GET['val1'];
            $val2 = $_GET['val2'];
            
            $area = ($val1 * $val2)*6;

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=".\CSS\style.css">
</head>
<body>

    <div class="container CAC">
        <h1>Calcular Área do Cubo</h1>
        <form method="get">
            <input type="number" name="val1" class="inputs" placeholder="Altura: ">
            <br>
            <input type="number" name="val2" class="inputs" placeholder="Largura: ">
            <br>
            <input type="text" disabled  id="span" value="<?php echo isset($area)? $area:''; ?>" placeholder="Resultado:">
            <br>
            <button name="btn_calc">Calcular</button>
        </form>
        
    </div>
    
    <!-- <img src=".\imagens\esfera.jpg" class="img_esfera">  -->

    

</body>
</html>