<?php 
  session_start();
  $name = "James";
  $value = 100;
  $expiration = time() + (60*60*24*7); //a week from now
  setcookie($name, $value, $expiration);
?>

<?php  include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">
  <aside class="col-xs-4">
    <?php Navigation(); ?>
  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">
  
  <a href="9.php?source=hello%20php" >Click Here</a>
    <?php 
    if(isset($_GET['source'])){
      echo $_GET['source'];
    }

    $_SESSION["greeting"] = "Hello PHP";
    echo $_SESSION['greeting'];
		?>
  
  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>