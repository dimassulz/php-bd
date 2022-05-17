<?php
    require_once 'conexao.php';
    require_once 'tabela/municipio.php'; //importando o arquivo usuario.php (variaveis, funcoes)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela - Municipio</title>
</head>
<body>
    <h1>Tabela de Municípios</h1>
    <table border="1">
        <thead>
            <tr>
                <th>IBGE</th>
                <th>Sigla - UF</th>
                <th>Nome do Municipio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tabelaMunicipio as $municipio) { ?>
            <tr>
                <td><?php echo $municipio['CO_MUNICIPIO_IBGE'];?></td>
                <td><?php echo $municipio['SG_UF'];?></td>
                <td><?php echo $municipio['NO_MUNICIPIO_ACENTUADO'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>