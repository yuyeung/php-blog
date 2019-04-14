<?php
/**
 * Created by PhpStorm.
 * User: 73488
 * Date: 2017/12/30
 * Time: 0:49
 */

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = new mysqli("localhost", "root", "", "bighomework");


session_start();// Starting Session
// Storing Session
if (isset($_SESSION['login_user'])) {
    $user_check = $_SESSION['login_user'];
    // SQL Query To Fetch Complete Information Of User
    $ses_sql = $connection->query("select username from userinformation where username='$user_check'");
    $row = $ses_sql->fetch_assoc();
    $login_session = $row['username'];
} else
    $login_session = null;


//若尚未登录,则转至登录界面
//if (!isset($login_session)) {
//    $connection->close(); // Closing Connection
//    header('Location: index.php'); // Redirecting To Home Page
//}