<?php
    function test_inputs($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
            
        return $data;
    }
    if (isset($_POST['add'])) {
        $task = test_inputs($_POST['task']);
        
        if (!empty($task)) {
            include "db.php";
            $query =  "INSERT INTO todo(task)";
            $query .=  "VALUES ('$task')";
            $result = mysqli_query($connection, $query);
        }  else {
            echo "Task field cannot be blank";
        }
    }
    
    //Read the data from the database
    $connection = new mysqli($host, $dbuser, $dbpass, $dbname);
    $query = "SELECT * FROM todo";   
    $result = mysqli_query($connection, $query); 
    if(!$result) {
        die('Query insertion failed');      
    }
    ?>
    
    <?php
     while($row = mysqli_fetch_assoc($result)) {
         // this is for incrementing the order number
         static $orderNumber = 0;

         // take all the values of the tasks
         $taskName = ($row['task']);

        // take all the values of phpSql ids 
         $id = ($row['id']);
         ?>
        <li>
            <input type="checkbox" name="checkbox[]" id="<?= $id; ?>" class="check" value="<?= $id?>">
            <label for="<?= $id; ?>"><?= ++$orderNumber; ?> <?= $taskName?></label>
        </li>
        <?php
       
 }
?>

