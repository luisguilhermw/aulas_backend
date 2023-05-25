<?php 

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) 
        && isset($_POST["preco"]))
{ 
        //inclui o arquivo para salvar a foto do upload
        require_once "salvar_foto.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = $nome_arquivo;


//String com o comando SQL para ser executado no DB
$sql = "UPDATE produto SET `nome`=?, `descricao`=?, `preco`=?, `foto`= ? WHERE  `idproduto`=?;";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adciona valores nos parâmetros 
$comando->bind_param("ssdsi", $nome, $descricao, $preco, $foto, $id);

//executa o SQL - comando no bancos de dados
$comando->execute();

}
//abre o arquivo produtos.php
header("Location: index.php");

