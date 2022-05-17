<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>

    <h1>Estrutura condicional - if</h1>
    <?php
    
        $celular = "Iphone 13";
        $modelos = ["mini", "padrão", "pro", "pro max"];

        if($celular == "Samsung S22"){ //para comparar == ou ===
            echo "O $celular é igual a Samsung S22 <br>";
        }else{
            echo "O modelo é $celular que é diferente do Samsung S22 <br>";
        }

        echo "O celular que comprei foi o $celular e o modelo é o $modelos[3] <br>";

        $hora = 23;
        
        if($hora < 12){
            echo "Tenha um bom dia!";
        }elseif($hora == 12){
            echo "Tenha um ótimo almoço!";
        }elseif($hora < 19){
            echo "Tenha uma ótima tarde!";
        }else{
            echo "Tenha uma boa noite!";
        }


        echo "<h1>Estrutura condicional - switch case</h1>";


        switch ($hora) {
            case 8:
                echo "Hora do café da manhã!";
                break; //obrigatorio
            case 12:
                echo "Hora do almoço!";
                break;
            case 16:
                echo "Hora do lanche!";
                break;
            case 20:
                echo "Hora do jantar!";
                break;
            default:
                echo "Essa refeição está fora de hora: $hora horas!";
        }



    /**
     * Símbolos de comparação (operadores)
     * == igualdade
     * === identico (tipo e valor)
     * != diferente
     * <> diferente
     * !== diferente (tipo e valor)
     * > maior que
     * < menor que
     * >= maior ou igual a
     * <= menor ou igual a
     */
       
    ?>
    
</body>
</html>