<h2> Exercicio1</h2>
<p> Crie um algoritmo em PHP que recebe como entrada três notas. O algoritmo deve calcular a média aritimética 
    final do aluno e imprimir sua situação final. Se a média for maior ou igual 6 pontos imprimir aprovado, 
    senão se a média for maior que 3 pontos e menor que 6 pontos imprimir em recuperação, senão se a média for menor que 3 pontos imprimir reprovado.
</p>


 <?php 
  $nota1 = 10;
  $nota2 = 3;
  $nota3 = 5;
  
  $media = ($nota1 + $nota2 + $nota3)/3;
  
  echo "Média: $media <br>";

    if($media >= 6){
        echo "Você esta aprovado!";
    }else if($media >3){
        echo "Você esta de recuperação!";
    }
    else{
        echo "Você esta reprovado!";
    }

?>