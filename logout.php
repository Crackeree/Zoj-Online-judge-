<?php

if( isset($_SESSION['un']) && $_SESSION['un'] == "admin")
{
	if(isset($_COOKIE['cookie_name']))
    {
    	
		die("you didn't log out from <a href = \"http://localhost/ZOJ/Cookies/home.php\"> here </a> yet");
    }
}
else{


session_start();

unset($_SESSION['un']);

header("Location:login.php");
}




?>