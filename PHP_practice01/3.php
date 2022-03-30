<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
	if(1 > 0) {
		echo '<h2>I love PHP</h2>';
	} elseif(1 < 0) {
		echo 'Impossible';
	} else {
		echo 'This string is never reached';
	}
	
	for($i = 0; $i < 10; $i++) {
		echo $i . '<br/>';
	}

	$favfood = 'pizza';

	switch ($favfood) {
		case 'pizza':
			echo 'Your favourite food is pizza!';
			break;
		case 'chocolate':
			echo 'Your favourite food is chocolate!';
			break;
		case 'sushi':
			echo 'Your favourite food is sushi!';
			break;
		default: 
			echo 'Your favourite food can only be chocolate, pizza or sushi!';
			break;
	}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>