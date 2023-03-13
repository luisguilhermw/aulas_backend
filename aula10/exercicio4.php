<h2> Exercício 4</h2> 

<?php
     $produto1 = [
        "nome" => "Poliana",
        "nota1" => 7,
        "nota2" => 8
    ];
        $produto2 = [
            "nome" => "Murilo",
            "nota1" => 8,
            "nota2" => 5
    ];
        $produto3 = [
            "nome" => "Andre",
            "nota1" => 6,
            "nota2" => 7
    ];

    $tabela = [$produto1, 
           $produto2, 
           $produto3
];
    foreach($tabela as $key => $value){
        echo $value["nome"]. " | ";
        echo $value["nota1"]. " | ";
        echo $value["nota2"] . "<br>";
        
    };
   
?>