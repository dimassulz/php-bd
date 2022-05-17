<?php
    require_once 'conexao_pdo.php';
    require_once 'tabela/estadopdo.php'; //importando o arquivo usuario.php (variaveis, funcoes)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela - Estado</title>
</head>
<body>
    <h1>Tabela de Estados</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tabelaEstado as $uf) { ?>
            <tr>
                <td><?php echo $uf['SG_UF'];?></td>
                <td><?php echo $uf['NO_UF'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>