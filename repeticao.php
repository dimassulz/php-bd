<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Trabalhando com arrays - ESTRUTURA DE REPETICAO - for</h1>
    <?php
    $tabelaMedico = [ // [ inicia o array principal
        ['COD_MED' => 1, 'CRM' => '20012/DF', 'NOME_MED' => 'Olinda Campos'], //linha 1 composta por um outro array com as informacoes
        ['COD_MED' => 2, 'CRM' => '20013/DF', 'NOME_MED' => 'Vitória Muniz'], //linha 2 composta por um outro array com as informacoes
        ['COD_MED' => 3, 'CRM' => '20014/DF', 'NOME_MED' => 'Joana Darck'], //linha 3 composta por um outro array com as informacoes
        ['COD_MED' => 4, 'CRM' => '20015/DF', 'NOME_MED' => 'Gabriel Souza'], //linha 4 composta por um outro array com as informacoes
        ['COD_MED' => 5, 'CRM' => '20016/DF', 'NOME_MED' => 'Andreia Cardoso'], //linha 5 composta por um outro array com as informacoes
    ]; // ] termina o array principal

    for ($indiceArray = 0; $indiceArray <= 4; $indiceArray++) {
        echo "Codigo do medico: " . $tabelaMedico[$indiceArray]['COD_MED'];
        echo " - CRM do medico: " . $tabelaMedico[$indiceArray]['CRM'];
        echo " - Nome do medico: " . $tabelaMedico[$indiceArray]['NOME_MED'];
        echo "<br>";
    }

    echo "<h1>* Trabalhando com arrays - ESTRUTURA DE REPETICAO - foreach *</h1>";

    foreach ($tabelaMedico as $medico) {
        echo "Codigo do medico: " . $medico['COD_MED'];
        echo " - CRM do medico: " . $medico['CRM'];
        echo " - Nome do medico: " . $medico['NOME_MED'];
        echo "<br>";
    }


    ?>

</body>

</html>