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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        #btn-td{
            width: 20%;
        }
    </style>
</head>
<body>
<div class="container ">
    <h1>USER LIST </h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NAME</th>
          <th scope="col">SURNAME</th>
          <th scope="col">AGE</th>
        </tr>
      </thead>
      <tbody>
        
          
         <?php 
         $stmt= $pdo->query('SELECT * FROM userlist');
         $i=1;
         foreach ($stmt as $row)
         {
            echo "<tr>";
            echo "<th scope='row'>$i</th>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['surname']}</td>";
            echo "<td>{$row['age']}</td>"; 
            echo "<td id='btn-td'>
            <a href='http://localhost/U4-W1-D3-BE/delete.php?id=$row[id]'><button>delete</button></a>
            <a href='http://localhost/U4-W1-D3-BE/details.php?id=$row[id]'><button>details</button></a>
            <a href='http://localhost/U4-W1-D3-BE/modify.php'><button>modify</button></a>
            </td>";
           
            echo "</tr>";
            $i++;
        }
       
          
         ?>
       
        
        
      </tbody>
    </table>
</div class="container">
</body>
</html>