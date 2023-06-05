<?php 

require_once "../conexao.php";


//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `produto` where categoria like %?%";


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

$categoria = $_GET['categoria'] ?? "";
$comando->bind_param("s", $categoria);

//executa o SQL - comando no bancos de dados
$comando->execute();

//pegar o comando da consulta
$resultado = $comando->get_result();

//cria um vetor vazio
$produtos=[];

//pegar todas as linhas do resultado
while($produto = $resultado->fetch_assoc()){
    //adiciona o produto (linha resultado) no vetor
    $produtos[] = $produto;

}




