<?php 

require_once "../conexao.php";
require_once "../controla_sessao/controla.php";

if(isset($_POST["nome"]) && isset($_POST["login"]) 
        && isset($_POST["senha"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = password_hash( $_POST["senha"],PASSWORD_DEFAULT);
$foto = $nome_arquivo;


//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, `foto`) 
VALUES (?, ?, ?, ?);";
echo $sql;


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adciona valores nos parâmetros 
$comando->bind_param("ssss", $nome, $login, $senha, $foto);

//executa o SQL - comando no bancos de dados
$comando->execute();

}
//abre o arquivo produtos.php
header("Location: index.php");

