<?php
$cs = "mysql:host=localhost;dbname=suppers";
    $user = "seforim";
    $password = '1234';
// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// $server = $url["host"];
// $username = $url["user"];
// $password = $url["pass"];
// $db = substr($url["path"], 1);
// $cs = "mysql:host=.$server;dbname=.$db;

    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
         } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    ?>
