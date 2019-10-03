<?php

class Bib{
    public function fetch_all($case_number) {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM bibliographies WHERE bib_case = ".$case_number.";");
        $query->execute();

        return $query->fetchAll();
    }
}

?>