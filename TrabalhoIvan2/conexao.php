<?php

$host = "127.0.0.1";
$port = "3306";
$user = "root";
$password = "";
$database = "tutor";


$conexao = new mysqli($host,
                      $user,
                      $password,
                      $database, 
                      $port);

//Verifica se houve um erro ao realizar a conexao
if($conexao->connect_error){
    echo "Foi encontrado o erro : " . 
                       $conexao->connect_error;
   die();
}                     
