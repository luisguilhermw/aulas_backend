<p>
    Quando o cliente realiza uma requisição, 
    o servidor executa uma resposta. Para isso é usada o "$_GET", 
    esses dados são coletados do HTTP,
     e para separar a URL dos dados que serão enviadas para o servidor, é usada o "?".

</p>


<?php
  $resultado = $_GET['numero1']  + $_GET['numero2'];
  echo "O resultado da soma é $resultado";

?>