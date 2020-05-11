<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
    session_start();
    
    $host = "localhost"; 
    $db_user = "root"; 
    $db_password = "";
    $db_name = "uczelnia";
        
    
    $connection = new mysqli($host, $db_user, $db_password,$db_name)
    or die('Brak połączenia z serwerem MySQL');
    
    $ins = "INSERT INTO studenci values(1, 'Alan', 'Kowalski', 'alanik@wp.pl', 1)";
    $ins1 = "INSERT INTO studenci values(2, 'Marek', 'Nowak', 'nowakM1@wp.pl', 1)";
    $ins2 = "INSERT INTO studenci values(3, 'Wiktor', 'Komor', 'wwwkomor@o2.pl', 2)";
    $ins3 = "INSERT INTO rok values(1, 'Politechnika Warszawska', 'Matematyka', 'licencjat')";
    $ins4 = "INSERT INTO rok values(2, 'Uniwersytet Jagiellonski', 'Prawo', 'magistrat')";
    
    @$connection->query($ins);
    @$connection->query($ins1);
    @$connection->query($ins2);
    @$connection->query($ins3);
    @$connection->query($ins4);
    
      
    $connection->close();
    
?>
    
    
</body>
</html>
