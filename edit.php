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
<h3>Modifier vos info :</h3>
<div class="container">
    <form action="update.php" method="post">
    
        <div class="form-group">
            <label for="usr">ID:</label>
            <input type="text" name="id" class="form-control" ><br>
        </div>
        <div class="form-group">
		    <label for="usr">Firstname :</label>
            <input type="text" name="firstname" class="form-control"><br>
        </div>
        <div>
		    <label for="usr">Lastname : </label>
            <input type="text" name="lastname" class="form-control"><br>
        </div>
        <div class="form-group">
		    <label for="usr">Email : </label>
            <input type="email" name="email" class="form-control"><br>
        </div>
        <div class="form-group">
		    <label for="usr">Phone : </label>
            <input type="number" name="phone" class="form-control"><br>
		
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        
        <a href="index.php">

        <input type="button"  type="button" class="btn btn-outline-primary" value="Home" />
        </a>
    </form>
    </div>
  
</body>
</html>