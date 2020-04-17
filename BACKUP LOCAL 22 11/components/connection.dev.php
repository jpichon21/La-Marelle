<?php

try{
    $pdo = new PDO('mysql:host=lamarellzguser.mysql.db;dbname=lamarellzguser', 'lamarellzguser', 'Rnk213bn');
} catch (PDOException $e) {
        exit('DB error !');
}

?>