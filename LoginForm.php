<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap\bootstrap.js">
    <link rel="stylesheet" type="text/css" href="css\LoginForm.css">
    <title>Demo</title>
</head>

<!-- Start Php -->

<!-- End Php -->
<!-- Start Html -->
<body>
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

    //Run select
    $strSQL = "SELECT * FROM user";
    $result = mysqli_query($conn, $strSQL);

    //Echo result
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row[''];
        }
    }
    else{
        echo "0 results";
    }

    //Close connection
    mysqli_close($conn);

?>
    <!-- <div class="wrapper fadeInDown">
    <div id="formContent"> -->
        <!-- Tabs Titles -->

        <!-- Icon -->
        <!-- <div class="fadeIn first">
        <img src="img\login.jpg" id="icon" alt="User Icon" />
        </div> -->

        <!-- Login Form -->
        <!-- <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Email">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
        <input type="submit" class="fadeIn fourth" value="Log In">
        </form> -->

        <!-- Remind Passowrd -->
        <!-- <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
    </div> -->
</body>
<!-- End Html -->
</html>