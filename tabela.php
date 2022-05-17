<?php
    require_once 'tabela/usuario.php'; //importando o arquivo usuario.php (variaveis, funcoes)
    require_once 'funcao/validaCpf.php'; //importando o arquivo usuario.php (variaveis, funcoes)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    <h1>Tabela de Usuários</h1>
    <table border="1">
        <thead>
            <tr>
                <th>CPF</th>
                <th>NOME</th>
                <th>DATA DE NASCIMENTO</th>
                <th>CPF É VÁLIDO?</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tabelaUsuario as $usuario) { ?>
            <tr>
                <td><?php echo $usuario['cpf'];?></td>
                <td><?php echo $usuario['nome'];?></td>
                <td><?php echo $usuario['dataNascimento'];?></td>
                <td><?php echo validaCpf($usuario['cpf']) ? "SIM" : "NÃO"; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>