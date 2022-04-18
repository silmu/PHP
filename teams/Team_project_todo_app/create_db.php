<?php

    //Database name is omitted because it's created later
    $host = 'db';
    $dbuser = 'root'; //db username
    $dbpass = 'lionPass';//db pass

    //Connect to MyPhp Admin
    $connection = new mysqli($host, $dbuser, $dbpass /* $dbname */);

    if($connection->error){
        die("<div class='connection'>Connection failed: " . $connection->error) ."</div>";
    } else {
        echo "<div class='connection'>Connected to MySQL server successfully </div>";
    }

    //Check if query was successful
    function queryCheck($query){
        global $connection;
        if ($connection->query($query) === false) {
            echo "Query unsuccessful: " . $connection->error;
          }
    }

    //Drop database if exists
    $query = "drop database if exists todo_app_123";
    queryCheck($query);
    
    //Create database
    $query = "create database todo_app_123";
    queryCheck($query);

    //Use database
    $query = "use todo_app_123";
    queryCheck($query);
    
    //Create table
    $query = "create table todo(
        id integer not null primary key,
        task varchar(50) not null,
        is_done bit not null
        )";
    queryCheck($query);
    
?>