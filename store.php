<?php

include 'dbconnexion.php';
include 'create.php';
if (!empty($_POST)) { 
   
    $prenom = $_POST['firstname'];
    $nom = $_POST['lastname'];
    $mail = $_POST['email'];
    $num = $_POST['phone'];

          
          $cnx->exec("INSERT INTO students(firstname,lastname,email,phone) VALUES ('$prenom','$nom','$email','$num')");

            
 

            header('Location: http://localhost/AT3/'); }

    ?> 