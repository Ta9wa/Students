<?php
include 'dbconnexion.php';
$id=$_GET['id']; 
$cnx->exec("DELETE FROM students WHERE id='$id' ");

header("Refresh:; url=index.php");
?>