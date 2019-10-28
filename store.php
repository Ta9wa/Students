<?php

include 'dbconnexion.php';
include 'create.php';
if (!empty($_POST)) {
    $id = $_POST['id'];
    $prenom = $_POST['firstname'];
    $nom = $_POST['lastname'];
    $mail = $_POST['email'];
    $num = $_POST['phone'];

    

            $nb = $cnx->exec("INSERT INTO students(id,firstname,lastname,email,phone) VALUES ('$id','$prenom','$nom','$mail','$num')");
?>