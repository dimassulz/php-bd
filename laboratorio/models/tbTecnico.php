<?php
$sql = "SELECT co_matricula, no_funcionario, nu_cpf, no_funcao, rg_profissional
        FROM tb_funcionario 
        WHERE no_funcao = :no_funcao -- preparement parameter (SEGURANCA)
        ORDER BY no_funcionario";

$stmt = $conn->prepare($sql); //stmt statement (prepara)
$stmt->execute(['no_funcao' => 'Técnico']); //executar o sql
$tbTecnico = $stmt->fetchAll(); // trazer todos os dados do sql no formato de array

$conn = null; // libero a conexão (disconnect)
