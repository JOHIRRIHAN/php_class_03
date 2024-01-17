<?php
// connect Database 

$serverName = 'localhost';
$userName = 'root';
$password = '222';

$connection = new mysqli($serverName,$userName,$password);

if( $connection-> connection_error){
    die("connection failed". $connection->connection_error);
}else{
    echo "connection failed";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

// create data 

