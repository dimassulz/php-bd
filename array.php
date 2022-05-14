<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Trabalhando com arrays</h1>
    <h2>Arrays indexados</h2>
    <?php
    // Indexed arrays - Arrays indexados exemplo abaixo onde usamos o indice para trabalhar
    $saboresPasteis = ['queijo', 'carne', 'frango', 'palmito']; // 0 -> queijo, 1 -> carne, 2 -> frango ...

    echo $saboresPasteis[0] . '<br>'; // [0] esse é o índice 0
    echo $saboresPasteis[1] . '<br>'; // [1] esse é o índice 1
    echo $saboresPasteis[2] . '<br>'; // [2] esse é o índice 2
    echo $saboresPasteis[3] . '<br>'; // [3] esse é o índice 3

    echo '<h2>Arrays associativo</h2>';
    /**
     * Associative arrays - Arrays associativos trabalha com a associacao de nomes no indice 
     * */
    $usuario = ['Peter' => 40, 'Mary' => 25, 'Fernando' => 33, 'Joe' => 22];

    echo $usuario['Peter'] . '<br>'; // ['Peter'] esse é associado a Peter
    echo $usuario['Mary'] . '<br>'; // ['Mary'] esse é associado a Mary
    echo $usuario['Fernando'] . '<br>'; // ['Fernando'] esse é associado a Fernando
    echo $usuario['Joe'] . '<br>'; // ['Joe'] esse é associado a Joe

    
    echo '<h1> ****Arrays multidimensional**** </h1>';
    echo "<hr>";
    /**
     *  Arrays Multidimensional
     */

    $tabelaVenda = [ // [ inicia o array principal
        ['Volvo', 22, 18], //linha 1 composta por um outro array com as informacoes
        ['BMW', 15, 13], //linha 2 composta por um outro array com as informacoes
        ['Saad', 5, 2], //linha 3 composta por um outro array com as informacoes
        ['Land Rover', 17, 15], //linha 4 composta por um outro array com as informacoes
    ]; // ] termina o array principal

    echo "<h3> Tabela de venda </h3>";
    echo "Marca " . $tabelaVenda[0][0]; // acessa a primeira linha e a primeira coluna
    echo " - Quantidade de Venda " . $tabelaVenda[0][2]; // acessa a primeira linha e a ultima coluna
    echo "<br>"; // quebra de linha
    echo "Marca " . $tabelaVenda[1][0];
    echo " - Quantidade de Venda " . $tabelaVenda[1][2];
    echo "<br>";
    echo "Marca " . $tabelaVenda[2][0];
    echo " - Quantidade de Venda " . $tabelaVenda[2][2];
    echo "<br>";
    echo "Marca " . $tabelaVenda[3][0];
    echo " - Quantidade de Venda " . $tabelaVenda[3][2];
    echo "<br>";

    echo "<h3> Tabela de médico </h3>";
    $tabelaMedico = [ // [ inicia o array principal
        [1, '20012/DF', 'Olinda Campos'], //linha 1 composta por um outro array com as informacoes
        [2, '20013/DF', 'Vitória Muniz'], //linha 2 composta por um outro array com as informacoes
        [3, '20014/DF', 'Joana Darck'], //linha 3 composta por um outro array com as informacoes
        [4, '20015/DF', 'Gabriel Souza'], //linha 4 composta por um outro array com as informacoes
    ]; // ] termina o array principal
    
    echo "Médico: " . $tabelaMedico[2][2];
    echo "<br>";
    echo "CRM da Vitoria Muniz: " . $tabelaMedico[1][1];

    echo "<h3> Tabela de médico BD - MELHORADO</h3>";
    $tabelaMedico = [ // [ inicia o array principal
        ['COD_MED' => 1, 'CRM' => '20012/DF', 'NOME_MED' => 'Olinda Campos'], //linha 1 composta por um outro array com as informacoes
        ['COD_MED' => 2, 'CRM' => '20013/DF', 'NOME_MED' => 'Vitória Muniz'], //linha 2 composta por um outro array com as informacoes
        ['COD_MED' => 3, 'CRM' => '20014/DF', 'NOME_MED' => 'Joana Darck'], //linha 3 composta por um outro array com as informacoes
        ['COD_MED' => 4, 'CRM' => '20015/DF', 'NOME_MED' => 'Gabriel Souza'], //linha 4 composta por um outro array com as informacoes
    ]; // ] termina o array principal
    
    echo "Médico: " . $tabelaMedico[3]['NOME_MED'];
    echo "<br>";
    echo "CRM da Vitoria Muniz: " . $tabelaMedico[1]['CRM'];
    ?>

</body>

</html>