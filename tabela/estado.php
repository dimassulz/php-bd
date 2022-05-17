<?php
$sql = "SELECT SG_UF, NO_UF 
FROM tb_uf 
ORDER BY SG_UF";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($registroLinha = $result->fetch_assoc()) {
        $tabelaEstado[] = $registroLinha; // guardando cada registro dentro da variavel $tabelaEstado
    }
} else {
    $tabelaEstado = []; // array sem informacoes
}
$conn->close();
