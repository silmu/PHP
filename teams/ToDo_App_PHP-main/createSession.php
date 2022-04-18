<?php 
/* This is for running "create_db.php" only once. Otherwise, after everytime we submit the file,
it will manually create both todo_app_123 database and todo table */
session_start();

$host = 'db';
$dbuser = 'root'; //db username
$dbpass = 'lionPass';//db pass
$dbname = 'todo_app_123';
$connection = new mysqli($host, $dbuser, $dbpass, "");

// check whether or not the database exists. if it does not exist, destroy the session. 
if (empty(mysqli_fetch_array(mysqli_query($connection,"SHOW DATABASES LIKE '$dbname'")))) 
{
   /* In case users deleted the database in myPHP, they cannot create the database again because the "hello" session is already created. So we need to destroy it */
   unset($_SESSION['hello']);
   // create a new session to mark.
   if(!isset($_SESSION['hello'])){
       $_SESSION['hello'] = 1;
       include_once 'create_db.php';
   }
}

// print_r ($_SESSION);

?>