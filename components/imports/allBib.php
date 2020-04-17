<?php

class allBib{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM bibliographies ORDER BY bib_case ");
        $query->execute();

        return $query->fetchAll();
    }
}

?>