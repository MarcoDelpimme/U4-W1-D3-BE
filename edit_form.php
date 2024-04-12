<?php

$host = 'localhost';
$db = 'dbtestusers';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];


$id= $_GET["id"];


$stmt = $pdo->prepare("UPDATE userlist  SET name = :name,   surname = :surname,  age= :age  WHERE id = :id");
$stmt->execute([
    'id' => $id,
    'name' => $name,
    'surname'=> $surname,
    'age' => $age,
]);
header('Location: userlist.php');