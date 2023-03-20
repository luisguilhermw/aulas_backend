<h2>Exercício</h2>
<p>
    Crie uma página em PHP para gerar a tabuda do "x". 
    O "x", número da tabuada deve ser enviada via GET.
</p>

<?php
     for($contador = 0; $contador <= 10; $contador++){
        $resultado = $_GET ['n1'] * $contador;
        echo $_GET ['n1'] . "x $contador = $resultado <br>";
     };

?>
