<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
    
    $host = "localhost"; 
    $db_user = "root"; 
    $db_password = "";
    $db_name = "uczelnia";
        
    $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
    $sql = $dbh->exec("INSERT INTO studenci values(1, 'Alan', 'Kowalski', 'alanik@wp.pl', 1)");
    $sql = $dbh->exec("INSERT INTO studenci values(2, 'Tomasz', 'Nowak', 'tt_nowk@wp.pl', 1)");
    $sql = $dbh->exec("INSERT INTO studenci values(3, 'Robert', 'Juskowiak', 'robojk@wp.pl', 2)");
    $sql = $dbh->exec("INSERT INTO rok values(1, 'Politechnika Warszawska', 'Matematyka', 'inzynier')");
    $sql = $dbh->exec("INSERT INTO rok values(2, 'Uniwersytet Jagiellonski', 'Teologia', 'licencjat')");
    
    
        
?>
        
</body>
</html>
