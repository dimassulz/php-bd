<?php
$sql = "SELECT CO_MUNICIPIO_IBGE, SG_UF, NO_MUNICIPIO_ACENTUADO
FROM tb_municipio
ORDER BY SG_UF, NO_MUNICIPIO";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($registroLinha = $result->fetch_assoc()) {
        $tabelaMunicipio[] = $registroLinha; // guardando cada registro dentro da variavel $tabelaEstado
    }
} else {
    $tabelaMunicipio = []; // array sem informacoes
}
$conn->close();
