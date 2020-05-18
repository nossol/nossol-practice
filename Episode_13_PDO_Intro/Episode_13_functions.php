<?php

function isOldEnough($age) {
    if ($age >20){
        return true;
    } else {
        return false;
    }
}

function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;port=3336;dbname=mytodo', 'root', 'pass123');
    } catch (PDOException $e) {
        die('Could not connect.');
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}