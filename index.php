<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="jumbotron">
<h2>Affichage des informations</h2>
</div>

<table class="table table-dark table-hover">
    <thead>
    <tr>
        <th> ID  </th>
        <th> Firstname  </th>
        <th> Lastname  </th>
        <th> Email  </th>
        <th> Phone  </th>
        <th>Action</th>
    </tr>
    </thead>


<tbody>
    <?php
        include'dbconnexion.php';

        $rep = $cnx->query('SELECT * FROM students');

        while($data = $rep->fetch()){
            echo '<tr>';
                echo '<td>'.$data['id'].'</td>';
                echo '<td>'.$data['firstname'].'</td>';
                echo '<td>'.$data['lastname'].'</td>';
                echo '<td>'.$data['email'].'</td>';
                echo '<td>'.$data['phone'].'</td>';
                echo '<td> <a href="update.php">
                <input type="button"  type="button" class="btn btn-outline-primary" value="Modifier" />
                </a>
                <a href="delete.php">
                <button type="button" class="btn btn-outline-danger">Supprimer</button>
                </a></td>';
            echo '<tr>';
        }
        
    ?>
    </tbody>
    
</table>
<a href="create.php">

        <input type="button"  type="button" class="btn btn-outline-primary" value="Inserer" />
        </a>
</div>

</body>
</html>