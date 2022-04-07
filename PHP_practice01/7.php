<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    
	<section class="content">
		<aside class="col-xs-4">
		<?php Navigation();?>
		</aside><!--SIDEBAR-->
	<article class="main-content col-xs-8">
	
	<?php  include'7_2.php';
		$query = "SELECT * FROM practice";
		$result = mysqli_query($connection, $query);

		if(!$result) {
			die('Query selection failed');
   		}

		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
	
			if($username && $password){
				// echo $username . ' ' . $password;
				//Insert data into database
				$query = "INSERT INTO practice(username, password)";
				$query .= "VALUES ('$username', '$password')";

				$result = mysqli_query($connection, $query);

				if(!$result) {
					die('Query selection failed');
				}

				$query = "SELECT * FROM practice";
				$result = mysqli_query($connection, $query);

			} else {
				echo 'Please enter your username and password';
			}
		}
	
	?>
	<form method="post" action="7.php">
		Username:
		<input type="text" name="username"/>
		Password:
		<input type="password" name="password"/>
		<p>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					$str = 'id: ' . $row['id'] . ' username: ' . $row['username'] . ' password: ' . $row['password'];
					echo "<p>$str</p>";
				}
			?>
		</p>
		<button type="submit" name="submit">Submit</button>
	</form>


</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
