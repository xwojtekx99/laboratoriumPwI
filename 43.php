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
    $sql = "SELECT studenci.imie, studenci.nazwisko, rok.kierunek, rok.stopien FROM studenci INNER JOIN rok ON studenci.id_rok_studiow=rok.id;";
    foreach ($dbh->query($sql) as $row) {
    print $row['imie'] . "\t";
    print $row['nazwisko'] . "\t";
    print $row['kierunek'] . "\n";
    print $row['stopien'] . "\n";
    print("<br>");
    }
      
?>
    
    
</body>
</html>
