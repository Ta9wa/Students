<?php
    try {
        $cnx = new PDO('mysql:host=localhost;dbname=dsi21', 'root', '');
    } catch (Exception $e) {
        echo 'Erreur: '.$e;
    }
    ?>