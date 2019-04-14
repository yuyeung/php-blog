<?php
/**
 * Created by PhpStorm.
 * User: 73488
 * Date: 2017/12/29
 * Time: 17:35
 */
include('../php/login.php'); // Includes Login Script

//检测是否有缓存,若有则跳到已登录界面
if (isset($_SESSION['login_user'])) {
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Meta Keyword -->
    <meta name="keywords"
          content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta charset="UTF-8">
    <title>Sign up and login</title>

    <link rel="stylesheet" href="../css/login.css">
    <!-- Main Responsive -->
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>
<div id="clouds">

    <div class="login_form">

        <!--注册和登录选项-->
        <ul class="tab-group">
            <li class="tab active"><a href="#login">Log In</a></li>
            <li class="tab"><a href="#signup">Sign Up</a></li>
        </ul>

        <div class="tab-content">

            <!--登录页面-->
            <div id="login">

                <form action="" method="post">

                    <div class="field-wrap">
                        <label>
                            Username<span class="req">*</span>
                        </label>
                        <input type="text" name="username" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" required autocomplete="off"/>
                    </div>

                    <input type="submit" class="button button-block" name="Login" value="Login">

                </form>

            </div>

            <!--注册页面-->
            <div id="signup">

                <form action="" method="post">
                    <div class="field-wrap">
                        <label>
                            Set A Email<span class="req">*</span>
                        </label>
                        <input type="email" name="email" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Set A Username<span class="req">*</span>
                        </label>
                        <input type="text" name="username" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Set A Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" required autocomplete="off"/>
                    </div>

                    <input type="submit" class="button button-block" name="Sign_Up" value="Sign Up">

                </form>

            </div>


        </div><!-- tab-content -->
        <br>

        <!--    输出错误信息-->
        <span class="error"><?php
            echo $error; ?></span>
    </div> <!-- /form -->
</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/login.js"></script>
</body>
</html>



