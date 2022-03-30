<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  
		function sum(float $a, float $b): float{
			return $a + $b;
		}

		echo sum(2, 1);
?>


</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>