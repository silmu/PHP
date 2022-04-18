<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  
		$text = "text";
		$hash = "$2y$10$";
		$salt = "usesomesillystringforsalt$";
		$hashAndSalt = $hash . $salt;

		$encrypted = crypt($text, $hashAndSalt);
		echo $hashAndSalt . "<br/>";
		echo $encrypted;

		echo 'Blowfish:     ',
			crypt($text, $hashAndSalt),
			"\n";

		echo 'SHA-256:      ',
		crypt($text, $hashAndSalt),
		"\n";

		echo 'SHA-512:      ',
			crypt($text, $hashAndSalt),
			"\n";
	?>

	 <!-- Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable -->

	
	
	





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>