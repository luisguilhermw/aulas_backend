<?php 

require_once "../conexao.php";

//verifica se foi enviado o param pela URL
if(isset($_GET['id']))
{

//pega o valor do id que foi enviado pela URL
$id =$_GET['id'];

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `usuario` WHERE  `idusuario`= ? ;";


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adciona valores nos parâmetros 
$comando->bind_param("i", $id);

//executa o SQL - comando no bancos de dados
$comando->execute();

//pegar o comando da consulta
$resultado = $comando->get_result();

//pegar a primeira linha do resultado
$usuario = $resultado->fetch_assoc();


}

