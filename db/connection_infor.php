<?php
    // Connect information
    $server_name = "localhost";
    $user_name = "root";
    $pass_word = "";
    $db_name = "anh_dbv1";

    //Connect to mysql
    $conn = mysqli_connect($server_name, $user_name, $pass_word, $db_name);
    if(mysqli_connect_errno()){
        echo "Fail to connect to MySQL: " .mysqli_connect_error();
        exit();
    }
?>