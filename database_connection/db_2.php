<?php

    $host = 'db';
    $dbname = 'loginapp'; //db name
    $dbuser = 'root'; //db username
    $dbpass = 'lionPass';//db pass

    //Two way to connect to database: PDO and MySQL
    $connection = new mysqli($host, $dbuser, $dbpass, $dbname);

    if($connection->error){
        die("Connection failed: " . $connection->error);
    } else {
        echo "Connected to MySQL server successfully <br />";
    }
    
?>
