<?php require_once "consultar_todos.php" ?>
 <?php

 require_once "../conexao.php"; 

if(isset($_POST["nome"])  && isset($_POST["sexo"])  && isset($_POST["polo"]) && isset($_POST["areaformacao"]) 
 && isset($_POST["tipo"]))
{

$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$polo = $_POST["polo"];
$areaformacao = $_POST["areaformacao"];
$tipo = $_POST["tipo"];
    
    //string com o comendo sql para ser executoado no db
    $sql = "INSERT INTO tutor (`nome`, `sexo`, `polo`, `areaformacao`, `tipo`) VALUES (?, ?, ?, ?, ?);";
    
    
    //prepara o slq para ser executado no banco de dados
    $comando = $conexao->prepare($sql);

    //adiciona os valores nos parametros
    $comando->bind_param("sssss", $nome, $sexo, $polo, $areaformacao, $tipo);

    //executa o sql - comando no banco de dados
    $comando->execute();

}
    //abre o arquivo form.php
    header("location: index.php"); 
 




