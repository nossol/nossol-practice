<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;port=3336;dbname=mytodo', 'root', 'pass123');
        } catch (PDOException $e) {
            die('Could not connect.');
        }
    }
}