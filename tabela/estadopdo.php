<?php
$sql = "SELECT SG_UF, NO_UF 
FROM tb_uf 
ORDER BY SG_UF";

$stmt = $conn->prepare($sql);
$stmt->execute();
$tabelaEstado = $stmt->fetchAll();

$conn = null;