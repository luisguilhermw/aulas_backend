<?php

    if(isset($_POST['numero']) && isset($_POST['n2'])){
    $r = $_POST['numero'] + $_POST['n2'];
    echo $r;
    }else{
        
        header("Location: form2.html"); 
    }
?>