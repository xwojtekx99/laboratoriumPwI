<!DOCTYPE HTML> 
<html lang="pl">
<head>
    <meta charset="utf-8"/>
</head>
<body>
    <form action="53.php" method="get">
	<select name="id">
    
<?php
    $host = "localhost"; 
    $db_user = "root"; 
    $db_password = "";
    $db_name = "uczelnia";
    
       
    $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
    $sql = $dbh->query('SELECT id, imie, nazwisko FROM studenci;');
    
        
    while ($row = $sql->fetch()) {
        echo "<option value='" .$row['id']. "'>" .$row['imie']. " " .$row['nazwisko'] . "</option>";
                
    }
    
?>
<input type="submit" value="Usuń"/>
</select>
</form>
</body>
    
</html>
