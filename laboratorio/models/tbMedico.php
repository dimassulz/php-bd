<?php
$sql = "SELECT co_medico, nu_crm, no_medico
    FROM tb_medico 
    ORDER BY no_medico";

$stmt = $conn->prepare($sql); //stmt statement (prepara)
$stmt->execute(); //executar o sql
$tbMedico = $stmt->fetchAll(); // trazer todos os dados do sql no formato de array

$conn = null; // libero a conexão (disconnect)



