<?php
function buscarTodosMedicos($conn){
    $sql = "SELECT co_medico, nu_crm, no_medico
    FROM tb_medico 
    ORDER BY no_medico";

    $stmt = $conn->prepare($sql); //stmt statement (prepara)
    $stmt->execute(); //executar o sql
    return $stmt->fetchAll(); // trazer todos os dados do sql no formato de array
}

function insertMedico($conn, $dados){
    $sql = "INSERT INTO tb_medico (nu_crm, no_medico) VALUES (:nu_crm, :no_medico)";
    $stmt= $conn->prepare($sql);
    return $stmt->execute($dados);
}

function editMedico($conn, $dados){
    $sql = "UPDATE tb_medico SET nu_crm = :nu_crm, no_medico = :no_medico WHERE co_medico = :co_medico";
    $stmt= $conn->prepare($sql);
    return $stmt->execute($dados);
}

function deleteMedico($conn,$id){
    $sql = "DELETE FROM tb_medico WHERE co_medico = :co_medico";
    $stmt= $conn->prepare($sql);
    return $stmt->execute(['co_medico' => $id]);
}

