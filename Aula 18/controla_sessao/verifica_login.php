<?php 

//Verifica se foi enviado os dados de usuário e senha
//do formulário de login
if(isset($_POST['usuario']) and isset($_POST['senha'])){
$usuario = $_POST['usuario'];
$senha =  $_POST['senha'];


require_once "../conexao.php";


//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `usuario` WHERE  `login`=?";


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adciona valores nos parâmetros 
$comando->bind_param("s", $usuario);

//executa o SQL - comando no bancos de dados
$comando->execute();

//pegar o comando da consulta
$resultado = $comando->get_result();

//pegar a primeira linha do resultado
$usuario = $resultado->fetch_assoc();

if($usuario){
    
    if(password_verify($senha, $usuario['senha'])){
        //inicia a sessao
        session_start();

        //cria a variavel de sessao
        $_SESSION['usuario'] = $usuario;
        
        //rerediciona para produtos
        header("Location: ../produto/index.php");
    }else{
        $erro_login = "Senha incorreta";
    }
}else{
        $erro_login = "Não existe usuário com o login informado";
}

 }
?>