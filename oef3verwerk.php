<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oef3verwerk</title>
</head>
<body>
</body>
</html>

<?php
$dbPw = 'root';
$dbUser = "root";
$dbServer = "localhost";
$dbName = "examen";
$bookID = $_POST['selection'];
try {
    $pdo = new PDO("mysql:host=localhost;dbname=$dbName",$dbUser,$dbPw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare('DELETE FROM book WHERE id = :id');
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->bindParam(':id', $bookID, PDO::PARAM_INT);
    $statement->execute();
} catch (Exception $ex) {
}