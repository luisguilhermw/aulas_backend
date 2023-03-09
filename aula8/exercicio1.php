<h2>Ordenação Ordem Alfabética</h2>

<?php
$nomes = [
     "Murilo",
     "Poliana",
     "Dalva",
     "Lavinia",
     "Camila",
     "Kaua"
  ];
  for($c=0; $c<=4; $c++){
     for($i = $c + 1;$i<=5; $i++){
         if($nomes[$c] > $nomes[$i]){
        $celbranco = $nomes[$i];
        $nomes[$i] = $nomes[$c];
        $nomes[$c] = $celbranco;
    }
  }
}
  
    var_dump($nomes);

   //Camila,Dalva,Kaua,Lavinia,Murilo,Poliana
?>