<?php
    // Connexion à la base de donnée

    // Variables of connection
    Define('DB_USER', 'root');
    Define('DB_PASSWORD', '');
    Define('DB_HOST', '127.0.0.1');
    Define('DB_NAME', 'verifcard');

    $connection = new mysqli(DB_USER, DB_PASSWORD, DB_HOST, DB_NAME);
    // Encodage des données
    mysqli_set_charset($connection, 'utf8');
?>