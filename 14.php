<!DOCTYPE HTML> 
<html lang="pl">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
    $pierwsza = $_POST['pierwsza']; 
    $druga = $_POST['druga']; 
    echo "Wyniki dla liczb ".$pierwsza." i ".$druga.":"."<br>"; 
    echo "Dodawania --> ".($pierwsza+$druga)."<br>"; 
    echo "Odejmowania --> ".($pierwsza-$druga)."<br>";
    echo "Mnożenia --> ".($pierwsza*$druga)."<br>";
    if($druga==0)
        echo "Dzielenia --> "."Bład(Przypadek dzielenia przez 0)"; 
    else
        echo "Dzielenia --> ".($pierwsza/$druga);
            
?>

</body>
    
</html>