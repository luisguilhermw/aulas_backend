
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $cor[] = "Yellow";
    $cor[] = "Green";
    $cor[] = "Blue";
    $cor[] = "Pink";
    $cor[] = "Red";
    $cor[] = "Purple";
    $cor[] = "Orenge";
    $cor[] = "Grey";
    $cor[] = "White";

    foreach($cor as $Key => $cor){
        echo "<a href = 'pagina.php?cor=$cor'>Mudar pra $cor</a>". "<br>";
    }
    
  ?>
</body>
</html>





