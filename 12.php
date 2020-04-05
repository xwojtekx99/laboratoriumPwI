<!DOCTYPE HTML> 
<html lang="pl">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
    $pierwsza = $_GET['pierwsza']; 
    $druga = $_GET['druga']; 
    if($pierwsza==NULL)
        echo "Nie podano pierwszej liczby"."<br>";
    if($druga==NULL)
        echo "Nie podano drugiej liczby"; 
    else {
        echo "(1) ".$pierwsza."<br>"."(2) ".$druga; 
    }
    
    
    
?>

    


</body>
    
</html>