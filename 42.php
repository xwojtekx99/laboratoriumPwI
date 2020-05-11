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
      
    $ins = "DELETE FROM studenci WHERE id='2'";
         
    @$connection->query($ins);
              
    $connection->close();
    
?>
    
    
</body>
</html>