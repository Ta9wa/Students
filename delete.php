<?php
include 'dbconnexion.php';
include 'edit.php';
$id = $_POST['id'];
$nom = $_POST['firstname'] ;
$prenom = $_POST['lastname'] ;
$email = $_POST['email'] ;
$num = $_POST['phone'];
$nb_supp = $cnx->query("DELETE FROM students WHERE id.students='$id' ");

?>