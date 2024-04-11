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
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Card con Bootstrap</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Dettagli Utente</h5>
        <?php if(isset($user)): ?>
            <p class="card-text">Nome: <?php echo $user['name']; ?></p>
            <p class="card-text">Cognome: <?php echo $user['surname']; ?></p>
            <p class="card-text">Età: <?php echo $user['age']; ?></p>
        <?php else: ?>
            <p class="card-text">Utente non trovato.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>

