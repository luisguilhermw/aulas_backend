<?php 

require_once "../conexao.php";
 require_once "../controla_sessao/controla.php"; 

if(isset($_POST["codigo"]) && isset($_POST["nome"]) 
        && isset($_POST["sexo"]))
{


$codigo = $_POST["codigo"];
$nome= $_POST["nome"];
$sexo = $_POST["sexo"];
$polo = ["polo"];
$areaformacao = ["areaformacao"];
$tipo = ["tipo"];

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `tutor` ('codigo', `nome`, `sexo`, `polo`, `areaformacao`, 'tipo') 
VALUES (?, ?, ?, ?, ?);";
echo $sql;


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adciona valores nos parâmetros 
$comando->bind_param("ssds", $nome, $descricao, $preco, $foto);

//executa o SQL - comando no bancos de dados
$comando->execute();

}
//abre o arquivo produtos.php
header("Location: index.php");

