<?php
/**
 * Created by PhpStorm.
 * User: 73488
 * Date: 2017/12/30
 * Time: 1:20
 */
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message


//登录
if (isset($_POST['Login'])) {

    $connection = new mysqli('localhost', 'root', '', 'bighomework');
    if ($connection->connect_errno) {
        echo "Error: Failed to make a connection. Please check the SQL connect\n";
        exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = $connection->real_escape_string($username);
    $password = $connection->real_escape_string($password);

    $query = "select * from userinformation WHERE username='$username' AND password= '$password'";
    $result = $connection->query($query);
    $namequery = "select * from userinformation WHERE username='$username'";
    $nameresult = $connection->query($namequery);
    if (!$result) {
        die('mysql error');
    }
    $rows = $result->fetch_assoc();
    $namerows = $nameresult->fetch_assoc();
    if ($rows) {
        // starting session
        $_SESSION['login_user'] = $username;

        //跳转到已登录页面
        header("location: ../index.php");
    } else if ($namerows) {
        $error = "Your password is wrong";
    } else {
        $error = "No such user : $username";
    }
    $connection->close(); // Closing Connection
}

//注册
if (isset($_POST['Sign_Up'])) {
    $connection = new mysqli('localhost', 'root', '', 'bighomework');
    if ($connection->connect_errno) {
        echo "Error: Failed to make a connection. Please check the SQL connect\n";
        exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $username = stripslashes($username);
    $password = stripslashes($password);
    $email=stripslashes($email);
    $username = $connection->real_escape_string($username);
    $password = $connection->real_escape_string($password);
    $email=$connection->real_escape_string($email);

    $namequery = "SELECT * FROM userinformation WHERE username='$username'";
    $nameresult = $connection->query($namequery);

    $namerows = $nameresult->fetch_assoc();
    if ($namerows) {
        $error = "The user has already existed, please login";
    } else {
        $query = "INSERT INTO `userinformation` (`username`, `password`,`email`) VALUES ('$username', '$password','$email')";
        $connection->query($query);
    }
    $connection->close(); // Closing Connection
}

