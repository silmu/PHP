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
        <?php include('./create_db.php');?>

       <h2>Tasks</h2>
        <!-- Add a task -->
        <div class="container-add-task">
          <input type="text" placeholder="Add a task here" />
          <button type="button" id="btn-add">+</button>
        </div>
        <!-- TODO List -->
        <ul class="tasks">
          <li>
            <input type="checkbox" id="example" class="check" />
            <label for="example">Example task</label>
          </li>
        </ul>
      </div>
      <button type="button" id="btn-done">Done</button>

      <!-- Finished tasks -->

      <ul class="finished-tasks">
        <h4>Finished tasks:</h4>
      </ul>
      
   </main>

    
</body>
</html>