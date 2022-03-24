<?php
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("America/Denver");
    // connect to mySQL('server', 'username', 'password', 'name of database')
    $con = mysqli_connect("localhost", "root", "", "spoofify");
    // test the connection

    if (mysqli_connect_errno()) {
        echo "failed to connect: ".mysqli_connect_errno();
    }


?>