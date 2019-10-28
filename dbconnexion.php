<?php
    try {
        $cnx = new PDO('mysql:host=localhost;dbname=dsi2x_gy_2019', 'root', '');
    } catch (Exception $e) {
        echo 'Erreur: '.$e;
    }