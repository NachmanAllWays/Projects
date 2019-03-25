<?php
//$cs = "mysql:host=localhost;dbname=suppers";
    //$user = "seforim";
    //$password = '1234';

$cs="mysql:host=us-cdbr-iron-east-03.cleardb.net;dbname=heroku_772f7bcedc89412";
$user="bed585af83e3c6";
$password = "dccce2d4";
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
         } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    ?>
