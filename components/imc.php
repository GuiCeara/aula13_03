<?php

    $url = explode("?", $_SERVER['REQUEST_URI']);
    @$dados = explode("&",$url[1]);
    $GET = [];
    
    foreach ($dados as $value) {
        $x = explode("=", $value);
        $y = urldecode(@$x[1]);
        $GET[$x[0]] = floatval(str_replace(',', '.', $y ));
        // var_dump($GET);
    };

    if (isset($GET['btn_calc'])) {
        $peso = $GET['val1'];
        $altura = $GET['val2'];
        $imc = $peso / ($altura * $altura);
    };

?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
    <div class="container CAC">
        <h1>Calcular IMC</h1>
        <form method="get">
            <input type="text" name="val2" class="inputs" id="input1" placeholder="Altura: " required>
            <br>
            <input type="text" name="val1" class="inputs" id="input2" placeholder="Peso: " required>
            <br>
            <input type="text" disabled  id="span" value='<?php echo "IMC: ", isset($imc)? number_format($imc, 2):''; ?>'>
            <br>
            <button name="btn_calc">Calcular</button>
        </form>
        <br>
        <div class="tabelaIMC">
            
            <table>
                <tr class="span" style="border-radius: 50%;">
                    <td class="center" colspan="3">VEJA A INTERPRETAÇÃO DO IMC</td>
                </tr>

                <tr>
                    <td class="dados ">IMC</td>
                    <td class="dados">CLASSIFICAÇÃO</td>
                    <td class="dados">OBESIDADE (GRAU)</td>
                </tr>

                <tr id="result_calc_1">
                    <td class="dados">MENOR QUE 18,5</td>
                    <td class="dados">MAGREZA</td>
                    <td class="dados center">0</td>
                </tr>

                <tr id="result_calc_2">
                    <td class="dados">ENTRE 18,5 E 24,9</td>
                    <td class="dados">NORMAL</td>
                    <td class="dados center">0</td>
                 </tr>

                <tr id="result_calc_3">
                    <td class="dados">ENTRE 25,0 E 29,9</td>
                    <td class="dados">SOBREPESO</td>
                    <td class="dados center">I</td>
                 </tr>

                <tr id="result_calc_4">
                    <td class="dados">ENTRE 30,0 E 39,9</td>
                    <td class="dados">OBESIDADE</td>
                    <td class="dados center">II</td>
                 </tr>

                <tr id="result_calc_5">
                    <td class="dados">MAIOR QUE 40,0</td>
                    <td class="dados">OBESIDADE GRAVE</td>
                    <td class="dados center">III</td>
                 </tr>

            </table>
        </div>
        <br>
    </div> 
    
    <script>

    const input = document.getElementById('input1');
    input.addEventListener('input', function (event) {
        let value = event.target.value;
        value = value.replace(/[^\d]/g, '');
        if (value.length > 3) {
            value = value.substring(0, 3);
        }
        if (/^\d{3}$/.test(value)) {
            const newValue = value.substring(0, 1) + ',' + value.substring(1);
            event.target.value = newValue;
        } else {
            event.target.value = value.replace(',', '');
        }
    });

    let campoNumero = document.getElementById("input2");
		campoNumero.addEventListener("input", function() {
			let numero = campoNumero.value;
			numero = numero.replace(/\D/g, "");
			numero = numero.substr(0, 5);

			if (numero.length == 5) {
				numero = numero.substr(0, 3) + "," + numero.substr(3);
			}

			else if (numero.length == 4) {
				numero = numero.substr(0, 2) + "," + numero.substr(2);
			}

			else if (numero.length == 3) {
				numero = numero.substr(0, 1) + "," + numero.substr(1);
			}

			campoNumero.value = numero;
		});

        
    let span = document.getElementById("span").value
    span = parseFloat(span.replace('IMC:', ''))
    if (span > 0) {

        let result_calc_1 = document.getElementById("result_calc_1")
        let result_calc_2 = document.getElementById("result_calc_2")
        let result_calc_3 = document.getElementById("result_calc_3")
        let result_calc_4 = document.getElementById("result_calc_4")
        let result_calc_5 = document.getElementById("result_calc_5")
        verificar(span)
        

    }

    function verificar(span) {

        if (span < 18.5) {
            result_calc_1.classList.add("active")
        }

        else if (span > 18.5 && span < 24.9) {
            result_calc_2.classList.add("active")
        }

        else if (span > 25.0 && span < 29.9) {
            result_calc_3.classList.add("active")
        }

        else if (span > 30.0 && span < 39.9) {
            result_calc_4.classList.add("active")
        }

        else {
            result_calc_5.classList.add("active")
        }

    }

    </script>

</body>
</html>