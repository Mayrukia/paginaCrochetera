<?php
    header("Content-type: application/json");
    $pdo= new PDO('mysql:host=localhost;dbname=todoCrocheting','root','');

    $pdo->exec("set names utf8");
    $statement=$pdo->prepare('SELECT * FROM producto');
    $statement->execute();
    if (!$statement){
        echo 'Error al ejecutar la consulta';
    }else{
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);
    }
?>