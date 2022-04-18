<?php include ("./createSession.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <title>To Do App</title>
</head>
<body>
    <header>
        <h1>To Do App</h1>
    </header>
   <main>                      
     <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
       <h2>Tasks</h2>
       <!-- Add a task -->
       <div class="container-add-task">
         <input type="text" name="task" placeholder="Add a task here" 
         value="<?php 
            /* If the form is not submitted successfully, users need to resubmit the form. 
            To avoid it, we need to add value to the input to prefill the text box*/
            isset($_POST['task']) ? $_POST['task'] : "";
         ?>"/>
        <button type="submit" name="add" id="btn-add" value="ADD">+</button> 
        </div>

        <!-- TODO List -->

        <?php include("./update_db.php"); ?>
        
        <ul class="tasks">
          <?php include("./insert_db.php") ?> 
        </ul>

        <button type="submit" name="submit" id="btn-done" value="SUBMIT">Done</button>
        <button type="submit" name="update" id="btn-update" value="UPDATE">Update</button>
        
      </div>

  </form>
   </main>

</body>
</html>