<?php

require_once('config.php');

try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname;", $username, $password);
    //$conn.setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected!";
} catch (PDOException $e) {
    echo "Connect fail" . $e->getMessage();
}
