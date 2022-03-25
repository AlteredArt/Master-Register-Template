<?php
include("includes/config.php");
include("./css/Master/import.css");
//Logout Manually for now
// session_destroy();
    if(isset($_SESSION['userLoggedIn'])){
        $userLoggedIn = $_SESSION['$userLoggedIn'];
    } else {
        header("Location: register.php")
    }
?>


<style>
    <?php include './css/Master/import.css'; ?> 
</style> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Master/import.css">
    <title>Spoofifiy</title>
</head>
<body>
    hello

    <p>
</body>
</html>