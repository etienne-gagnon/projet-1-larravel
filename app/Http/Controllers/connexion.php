<?php
    $dsn = "mysql:host=localhost;dbname=420-709-AH-PROJET-1;";
    $username = "root";
    $password = "123456";
    
    // CONNEXION
    try{
        date_default_timezone_set('America/Toronto');

        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("set names utf8");
        
        //echo "connexion réussi";
    }catch (PDOException $e){
        echo "erreur de connexion" . $e->getMessage();
        exit;
    }
?>