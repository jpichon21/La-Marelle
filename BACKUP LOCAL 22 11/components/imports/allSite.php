<?php

class allSite{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM sites ORDER BY site_case");
        $query->execute();

        return $query->fetchAll();
    }
}

?>