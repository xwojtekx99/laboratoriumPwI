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
    
    $imie = $_GET['imie']; 
    $nazwisko = $_GET['nazwisko']; 
    $email = $_GET['email']; 
    $rok = $_GET['rok']; 
       
    $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
    $sql = $dbh->prepare('INSERT INTO studenci values("", :imie, :nazwisko, :email, :rok)');
    $sql -> bindValue(':imie', $imie);
    $sql -> bindValue(':nazwisko', $nazwisko);
    $sql -> bindValue(':email', $email);
    $sql -> bindValue(':rok', $rok);
    $sql->execute(); 
    
    
?>

</body>
    
</html>