<!DOCTYPE HTML> 
<html lang="pl">
<head>
    <meta charset="utf-8"/>
</head>
<body>

<?php

    for($i=1;$i<=15;$i++){
        echo $i." "; 
    } 
    echo "<br>"; 
    $liczby=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15); 
    foreach ($liczby as $liczba){
        echo $liczba." "; 
    }
    
    echo "<br>";
    $k=1; 
    while($k<=15){
        echo $k++." "; 
        
    }
    
    
?>
    
    


</body>
    
</html>