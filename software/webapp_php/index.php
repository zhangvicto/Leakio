<?php
    $host = '34.130.199.48';
    $user = 'root';
    $pass = 'victor';
    $db = 'leakdb';
    $charset = 'utf8';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
         $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $stmt = $pdo->query('SELECT state FROM leakstate');
    while ($row = $stmt->fetch())
    {
        echo '<div id="hidden">' ;
        echo $row['state'];
        echo '</div>';
    }   

    include 'content.html';
?>
