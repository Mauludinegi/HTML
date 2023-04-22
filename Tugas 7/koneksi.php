<?php  
function getConnection()
{
    $host = "localhost";
    $port = "3306";
    $username = "root";
    $password = "";
    $database = "A22100036_Egi Purnama M";
    return $connection = new \PDO("mysql:host=$host:$port; dbname=$database", $username, $password);
}
?>