<?php

class Bib{
    public function fetch_all() {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM bibliographies");
        $query->execute();

        return $query->fetchAll();
    }
}

?>