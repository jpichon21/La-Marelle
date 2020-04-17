<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=marelle', 'root');
} catch (PDOException $e) {
        exit('DB error !');
}

?>