<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="store.php" method="post">
    
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
        <button type="submit" class="btn btn-outline-primary">Valider</button>
        <button type="reset" class="btn btn-secondary">Effacer</button>


    
    

    
    </form>
    </div>
    <?php






    ?>
</body>
</html>