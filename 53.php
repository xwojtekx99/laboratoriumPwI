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
    
    $id = $_GET['id']; 
           
    $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
    $sql = $dbh->prepare('DELETE FROM studenci WHERE id=:id');
    $sql -> bindValue(':id', $id);
    $sql->execute(); 
    
?>

</body>
    
</html>