<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oef3</title>
</head>
<body>


<form action="oef3verwerk.php" method="get">
  bookId:
    <select style="width: 100px">
        <?php
        $user     = 'root';
        $password = 'root';
        $database = 'examen';
        $pdo      = null;
        try{
            $pdo = new \PDO("mysql:host=localhost; dbname=$database", $user, $password);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION);
            $statement = $pdo->query('SELECT * FROM book');
            $statement->setFetchMode(\PDO::ATTR_ERRMODE);
            $dbArray = $statement->fetchAll();
        } catch (\PDOException $ex){
            print 'Exception!: ' . $ex->getMessage();
        }
        if($dbArray != null)
        {
            foreach ($dbArray as $book)
            {
                echo "<option value='" .$book['id'] ."' >" . $book['id'] ." ". $book['title'] ."</option>";
            }
        }
        ?>
    </select>
<input type="submit" value="delete"/>
</form>
</body>
</html>
