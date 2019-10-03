<?php

class Fiche{
    public function fetch_all() {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM pdfdocs");
        $query->execute();

        return $query->fetchAll();
    }
}

?>