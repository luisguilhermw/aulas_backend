<?php require_once "../conexao.php";


$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$polo = $_POST["polo"];
$areaformacao = $_POST["areaformacao"];
$tipo = $_POST["tipo"];
    
    //string com o comendo sql para ser executoado no db
    $sql = "INSERT INTO `tutor` (`nome`,`sexo`, `polo `, `areaformacao`, `tipo`) VALUES (?, ?, ?, ?, ?);";
    
    //echo $sql;
    //prepara o slq para ser executado no banco de dados
    $comando = $conexao->prepare($sql);
    //adiciona os valores nos parametros
    $comando->bind_param("sssss",  $nome, $sexo, $polo, $areaformacao, $tipo);
    //executa o sql - comando no banco de dados
    $comando->execute();
    //abre o arquivo form.php
    header("location: index.php"); 
 




