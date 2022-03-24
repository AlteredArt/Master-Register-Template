<?php
include("includes/config.php");

//Logout Manually for now
// session_destroy();

    if(isset($_SESSION['userLoggedIn'])){
        $userLoggedIn = $_SESSION['$userLoggedIn'];
    } else {
        header("Location: register.php")
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spoofifiy</title>
</head>
<body>
    hello
</body>
</html>