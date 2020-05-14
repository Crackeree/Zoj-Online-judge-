<?php
    setcookie('cookie_name', "", time() - 3600);
    header('Location:http://localhost/ZOJ/setproblem.php');
?>