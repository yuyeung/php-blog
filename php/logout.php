<?php
/**
 * Created by PhpStorm.
 * User: 73488
 * Date: 2017/12/30
 * Time: 17:47
 */
session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: ../index.php"); // Redirecting To Home Page
}
?>