<?php


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cad_img";
//$port = 3306;

try{
    //Efetuado conexão  com banco de dados utilizando porta
    //$conn = new PDO("mysql:host=$host; port=$port;  dbname=" . $dbname, $user, $pass);
    
    //Efetuando conexão com banco de dados sem utilizar porta
    $conn = new PDO("mysql:host=$host; dbname=" . $dbname, $user, $pass);
    
} catch (PDOException $err) {
    echo "Erro: Conexão com banco de dados não realizada. Erro gerado " . $err->getMessage();
    
}


