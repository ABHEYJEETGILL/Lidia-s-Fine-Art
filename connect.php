<?php

// Harsifat Singh
// 2025-04-21
// Description: Database connection for Lidia Codreanu's website

try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=final_db",
        "gilla142_local",
        "3/}}RYB8"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
