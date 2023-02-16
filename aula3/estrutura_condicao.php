<h2>Estrutura de Condição</h2>
<br>
<p>
    A estrutura de condição é utilizada
    para avaliar qual instrução deve ser
    executada, dada uma condição.

    Se a condição for verdadeira (true) executa a 
    instrução 1, caso contrário executa a instrução 2.

<br>

<strong>Exemplo</strong>
<pre>
    if (<em>condicao</em> ){
        //instrução 1
    }else{
        //instrução 2
    }

</pre>

</p>

<?php 
    /*
        Para passar de ano é necessário tirar no
        mínimo 6 pontos em cada disciplina. Murilo
        tirou .... Ele foi aprovado ou não?
    */
    $nota_do_murilo = 10;
    $faltas = 0;
    if($nota_do_murilo >= 6 && $faltas < 75){
        echo "Murilo foi aprovado!";
    }else{
        echo "Murilo foi reprovado!";
    }
?>

<br>

<strong>Exemplo 2</strong>
<p>
   O aluno para ser aprovado precisa obter 
   nota superiror a 6 pontos, para fazer o exame final
   precisa ter tirado menos que 6 ponbtos e mais que 3 pontos.
   Notas menores que 3 são reprovações diretas.   
</p>

<?php
    $nota = 6;
    if($nota >= 6){
        echo "Aprovado";
    } else if($nota > 3){
        echo "Faz exame final";
    } else {
        echo "Reprovado";
    }
?>    