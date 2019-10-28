<?php
include 'dbconnexion.php';
include 'edit.php';
$nom = $_POST['firstname'] ;
$prenom = $_POST['lastname'] ;
$email = $_POST['email'] ;
$num = $_POST['phone'];

$up = $cnx->query("UPDATE students SET firstname = '$nom', lastname = '$prenom',email='$email',phone='$num' WHERE student.id='$id' ");
echo 'c bon !!';
?>
