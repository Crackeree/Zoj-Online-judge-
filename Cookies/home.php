<?php


if(isset($_COOKIE['cookie_name']))
{
	?>

	<html>
	<head>
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		
		 
	</head>
	<body>


		
		
			
		<div> <button type="submit" onclick="document.getElementById('demo').href= 'http://localhost/ZOJ/setproblem.php'"><a id = "demo" href="">Add Problems</a> </button> </div>
		
		<div>
			<form id = "demo" action="home.php" method = "post" style="display:none">
				Title:<br>
				<input type="text" name="title"  required>
				<br>
				Description:<br>
				<input type="text" name="description"  required>
				<br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div> <button > <a href="logout.php"> Log out </a>   </button> </div>
		

	</body>
	</html>

	<?php

	
}
else
{
	if($_POST["uname"] == "admin" && $_POST["psw"] == "1234")
	{
		?>
		<html>
		<head>
			<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		</head>
		<body>
			<div> <button type="submit" onclick="document.getElementById('demo').href= 'http://localhost/ZOJ/setproblem.php'"><a id = "demo" href="">Add Problems</a> </button> </div>
		
		<div>
			<form id = "demo" action="home.php" method = "post" style="display:none">
				Title:<br>
				<input type="text" name="title"  required>
				<br>
				Description:<br>
				<input type="text" name="description" required>
				<br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div> <button > <a href="logout.php"> Log out </a>   </button> </div>
			
			<?php 
		}
		else
		{
			die( "Wrong admin or password");
		}
		?>

		<?php 

		if(!empty($_POST["remember"]))
		{
			$cookie_name = $_POST["uname"];
			$cookie_value = $_POST["psw"];
            setcookie('cookie_name', $cookie_value, time() + (86400 * 30)); // 86400 = 1 day
        } 
        else
        { 

        } 
        ?>
    </body>
    </html>
    <?php
}

?>