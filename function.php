<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function - Valida CPF</title>
</head>
<body>
    <?php
    function validaCPF($cpf) {
    
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;

    }

    echo "<h1> Função valida CPF </h1>";

    $cpf1 = "15650934029"; //valido

    $cpf2 = "00100200321"; //invalido

    //verfica se o cpf1 é valido
    if(validaCPF($cpf1) === false){
        echo "Cpf1 $cpf1 inválido! <br>";
    }else{
        echo "Cpf1 $cpf1 válido! <br>";
    }

    //verfica se o cpf2 é valido
    if(validaCPF($cpf2) === false){
        echo "Cpf2 $cpf2 inválido! <br>";
    }else{
        echo "Cpf2 $cpf2 válido! <br>";
    }

    ?>
</body>
</html>