<h2>Exercício 2</h2>

<p>
    Crie um vetor com os nomes, conforme exemplo abaixo:
        <pre>
          --------- 
       0 |Murilo   | 
          --------- 
       1 |Poliana  |
          --------- 
       2 |Dalva    |
          --------- 
       3 |Lavinia  |
          --------- 
       4 |Kaua     |
          --------- 
    </pre>
</p>
<p>
    Imprima os nomes do vetor em formato de lista ordenadacutilzando um laço de repetição: ex:
        <br>
        1. Murilo <br>
        2. Poliana <br>
        3. .... <br>
</p>

<hr>

<?php
    $nomes[] = "Murilo";
    $nomes[] = "Poliana";
    $nomes[] = "Dalva";
    $nomes[] = "Lavinia";
    $nomes[] = "Kaua";

  echo "<ol>";
    for($f=0; $f<5; $f++){
        echo "<li>$nomes[$f]</li>";
    }
   "</ol>"
    
?>