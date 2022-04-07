<?php include('./db_2.php');

    function queryResult($result, $queryName){
        if(!$result) {
            die("$queryName query failed");
        }
    }

    //Inserting new user and password
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username && $password){
            //Insert data into database
            $query = "INSERT INTO users(username, password)";
            $query .= "VALUES ('$username', '$password')";
            $result = mysqli_query($connection, $query);

            queryResult($result, 'Insert');
        } else {
            echo 'Please enter your username and password';
        }
    }

    //Update user and password
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        if($username && $password){
            $query = "UPDATE users SET ";
            $query .= "username = '$username', ";
            $query .= "password = '$password' ";
            $query .= "WHERE id = $id";

            $result = mysqli_query($connection, $query);
            if(!$result) {
                die('Update query failed');
            }
            
        } else {
            echo 'Please enter your username and password';
        }
    }

    //Deleting existing user and password by id
    if(isset($_POST['delete'])){

        $query = "DELETE FROM users ";
        $query .= " WHERE id = {$_POST['id']}";

        $result = mysqli_query($connection, $query);
            if(!$result) {
                die('Delete query failed');
            }
    }


    $selectQuery = "SELECT * FROM users";
    $selectResult = mysqli_query($connection, $selectQuery);

    if(!$selectResult) {
        die('Query selection failed');
    }
?>

<form action="db.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" />
    <label for="password">Password</label>
    <input type="password" name="password"/>
    <select name="id">
        <?php
            while($row = mysqli_fetch_assoc($selectResult)){
                $id = $row['id'];
                echo "<option value='$id'>$id</option>";
            }
        ?>
    </select>
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">
</form>