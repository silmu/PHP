<?php include 'includes/header.php'; ?>

<?php
/* Write PHP Code here  
Overall idea here is to check if a form has been submitted


Step 1: Use if statement to check $_SERVER superglobal array to see if the key called
REQUEST_METHOD has a value of POST

Step 2: If it does, the search form has to be sent via HTTP POST, 
and a message should be displayed like this:
  "You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form



*/
// var_dump($_REQUEST);
// var_dump($GLOBALS);
if($_SERVER['REQUEST_METHOD'] = 'GET'){
  var_dump($_SERVER['REQUEST_METHOD']);
  $input = isset($_POST["input"]) ? $_POST['input'] : '';
} else if($_SERVER['REQUEST_METHOD'] = 'POST'){
  var_dump($_SERVER['REQUEST_METHOD']);
  $input = isset($_POST["input"]) ? 'You searched for ' . $_POST['input'] : '';
}

?>

<form action="./check-for-http-get.php" method="POST">
  <input type="text" name="input"></input>
  <button type="submit">Submit</button>
</form>
<p><?= $input;?></p>

<?php include 'includes/footer.php'; ?>