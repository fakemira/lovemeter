<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			display: flex;
			justify-content: center;
			font-family: Arial, sans-serif;
			background-image: url("1.jpg"); 
			background-size: cover;
			height: 50vh;
		}
		.a{
			display: inline-block;
			margin:  25vh 5vh 5vh 0vh;
		}
		.b{
			display: inline-block;
			margin: 25vh 0vh 5vh 5vh;
		}
		.c{
			margin-bottom: 5vh;
		}
		.c, .php{
			text-align: center;
		}
	</style>
</head>
<body>
	<form method="post">
		<div class="a">
			<label for="YOUR_NAME">YOUR NAME</label>
			<input type="text" name="YOUR_NAME" id="YOUR_NAME" placeholder="Enter Your Name" required>
			<br>
			<label>
				<input type="radio" name="GENDER1" checked>
				MALE
			</label>
			<label>
				<input type="radio" name="GENDER1">
				FEMALE
			</label>
		</div>

		<div class="b">
			<label for="PARTNER'S_NAME">PARTNER'S NAME</label>
			<input type="text" name="PARTNER'S_NAME" id="PARTNER'S_NAME" placeholder="Enter Partner's Name" required>
			<br>
			<label>
				<input type="radio" name="GENDER2">
				MALE
			</label>
			<label>
				<input type="radio" name="GENDER2" checked>
				FEMALE
			</label>
		</div>

		<div class="c"><button type="submit" name="submit">CALCULATE LOVE %</button></div>

		<div class="php">
			<?php
				if (isset($_POST['submit'])) {
					echo "Percentage of love between ".$_POST['YOUR_NAME']." & ".$_POST['PARTNER\'S_NAME']." is ". rand(0, 100);
					$ptr = fopen("couple.txt", "a");
					fwrite($ptr, $_POST['YOUR_NAME']." have a crush on ".$_POST['PARTNER\'S_NAME']."\n");
					fclose($ptr);
				}	
			?>
		</div>
	</form>

	
</body>
</html>