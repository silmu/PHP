<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

    <form action="6.php" method="post">
      <p><label for="input">Add some text:</label></p>
      <p><input type="text" name="input" id="input"></p>
      <p><input type="submit" value="Submit"></p>
    </form>
    <?php
      $input = $_POST["input"];
      echo $input;
		?>


  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>