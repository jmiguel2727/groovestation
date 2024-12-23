<?php
$user = 'groove';
$pass = 'groove';
$database = 'GrooveStationBD';

try{
    $dbh =  new PDO('mysql:host=localhost;charset=utf8;dbname='.$database, $user, $pass);
}catch(PDOException $e){
    echo $e;
}

?>