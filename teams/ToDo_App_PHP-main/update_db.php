<?php 
include ("./db.php");
$query = "SELECT * FROM todo";
$result = mysqli_query($connection, $query);
if(!$result) {
    die('Query selection failed');
}

// When users click the update button, this will run 
if(isset($_POST['update'])) {
    $task = ($_POST['task']);
    $checkbox = ($_POST['checkbox']) ?? "";
    if (!empty($task) && !empty($checkbox)) {
        foreach ($checkbox as $value) {
            $query = 'UPDATE todo SET ';
            $query .= "task = '$task' ";
            $query .= "WHERE id = $value";    
            $result = mysqli_query($connection, $query);
        }
        if(!$result) {
            die('Update task(s) failed');
        } else {
            echo('Update task(s) successfully');
        }
    } else {
        echo("Please select at least one checkbox or input should not be empty");
    }
}
?> 

