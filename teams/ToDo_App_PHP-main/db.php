<?php 
    $host = 'db';
    $dbuser = 'root'; //db username
    $dbpass = 'lionPass';//db pass
    $dbname = 'todo_app_123';

    //Connect to MyPhp Admin
    $connection = new mysqli($host, $dbuser, $dbpass, $dbname);
    if ($connection->error) {
        die("Connection failed: " .$connection->error);
    }
?>