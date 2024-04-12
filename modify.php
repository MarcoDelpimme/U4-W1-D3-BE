<?php 

$host = 'localhost';
$db   = 'dbtestusers';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

$id = $_GET['id'];
    

$stmt = $pdo->prepare("SELECT * FROM userlist WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">
    <form class="text-center" method="post" action="http://localhost/U4-W1-D3-BE/edit_form.php?id=<?= $id ?>">
        <h1>EDIT USER INFO</h1>
      <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Name </label>
        <input type="name" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
     
      </div>
      <div class="mb-3">
        <label for="exampleInputSurname1" class="form-label">Surname</label>
        <input type="surname" name="surname" class="form-control" id="exampleInputSurname1">
      </div>
      <div class="mb-3">
        <label for="exampleInputAge1" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" id="exampleInputAge1">
      </div>
      <button type="submit" class="btn btn-primary">EDIT</button>
    </form>
    <div class="mt-3"><a href="http://localhost/U4-W1-D3-BE/userlist.php"><button class="btn btn-info">Show user LIST</button></a></div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>