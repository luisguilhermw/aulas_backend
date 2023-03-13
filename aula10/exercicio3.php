
<h2> Exercício 3</h2> 

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
    for($f=0; $f<3; $f++){
        foreach($tabela[$f] as $Key => $value){
            echo $value . "|";
        }; 
        echo "<br>";
    };

 
?>