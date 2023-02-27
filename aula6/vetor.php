<h2>Vetores (array)</h2>
<p>
    São estruturas de armazenamentos compostas heterogêneas (1-dim),
    que podem ser indexadas
    númericamente ou textualmente.
</p>

<?php
    //exemplo variável simples
    $nota = 6;
    $nota = 3;
    echo $nota . "<br>"; //. é um joi - concatenador

    //exemplo vetor indexado númericamente
    $notas = []; //outra forma $notas = array();
    $notas[] = 6;
    $notas[] = 3;
   //var_dump($notas);
   //imprimir só a primeira nota
   echo ($notas[0] + $notas[1]) / 2;

    //vetores com índice textual
    $notas = []; //cria um veotr vazio
    $notas ["Débora"] = 7;
    $notas ["Murilo"] = 7.8;
    $notas ["Poliana"] = 9;
    echo "<p></p>";
    echo "A Poliana tirou nota " . $notas["Poliana"] . "<br> <br>";

    //imprimindo o conteúdo de um vetor numérico.
    $valores = [];
    $valores[] = 2;
    $valores[] = 4;
    $valores[] = 8;
    $valores[] = 10;
    $valores[] = 12;
    $valores[] = 14;
    $valores[] = 16;
   

   //ou - $valores =  [2,4,8,10,12,14,16];

    //imprimindo o conteúdo de um vetor numérico
   // echo $valores[0] . "<br>";

/* echo $valores[1] . "<br>";
    echo $valores[2] . "<br>";
    echo $valores[3] . "<br>";
    echo $valores[4] . "<br>";
    echo $valores[5] . "<br>";
    echo $valores[6] . "<br>";*/

    for($i = 0; $i <= 6; $i++){
         echo $valores[$i] . "<br>";
    }

    //somar os valores de um vetor
    $acumulador = 0;
    for($i=0; $i<=6; $i++){
        $acumulador = $acumulador + $valores[$i]; 
    }    
    echo "A soma dos valores é $acumulador";
?>