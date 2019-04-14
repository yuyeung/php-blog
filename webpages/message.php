<?php
/**
 * Created by PhpStorm.
 * User: 73488
 * Date: 2018/1/2
 * Time: 14:47
 */
include('../php/session.php');
$error=null;
if (isset($_POST['send'])) {
    $connection = new mysqli('localhost', 'root', '', 'bighomework');
    if ($connection->connect_errno) {
        echo "Error: Failed to make a connection. Please check the SQL connect\n";
        exit;
    }

    $username = $_POST['username'];
    $message_text = $_POST['message_text'];
    $username = stripslashes($username);
    $message_text = stripslashes($message_text);
    $username = $connection->real_escape_string($username);
    $message_text = $connection->real_escape_string($message_text);

    $query = "SELECT * FROM message WHERE username='$username' AND text='$message_text'";
    $result = $connection->query($query);

    $rows = $result->fetch_assoc();
    if ($rows) {
        $error = "The same content";
    } else {
        $query = "INSERT INTO `message` (`username`, `text`) VALUES ('$username', '$message_text')";
        $connection->query($query);
    }
    $connection->close(); // Closing Connection
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Meta Keyword -->
    <meta name="keywords"
          content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <!-- meta character set -->
    <meta charset="utf-8">

    <!-- Site Title -->
    <title>Message</title>


    <!--
    CSS
    ============================================= -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="../css/jquery.fancybox.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Main Responsive -->
    <link rel="stylesheet" href="../css/responsive.css">

    <style type="text/css">
        body {
            background-color: #1ab188;
        }
    </style>
</head>
<body>
<header id="navigation" class="navbar-fixed-top" style="background-color: #1ab188">

    <div class="container">

        <div class="navbar-header">
            <!-- 响应式导航栏按钮 -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"
                    aria-expanded="false" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /响应式导航栏按钮 -->

            <!-- logo -->
            <h1 class="navbar-brand">
                <a href="#">
                    <img src="../img/icons/logo.png">
                </a>
            </h1>
            <!-- /logo -->


        </div>
        <!--nav-justified-->

        <!-- 导航栏选项 -->
        <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">


            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            Home <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../index.php#home">Home</a></li>
                            <li class="divider"></li>
                            <li><a href="../index.php#service">Services</a></li>
                            <li class="divider"></li>
                            <li><a href="../index.php#footer">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="photos.html">Photos</a></li>
                    <li><a href="media.html">Media</a></li>
                    <li><a href="technique.html">Technique</a></li>
                    <li>
                        <?php
                        if (empty($login_session))
                            echo "<a href=\"logintable.php\">Sign up/Login</a>";
                        else {
                            echo "<a href=\"../php/logout.php\">$login_session(Logout)</a>";
                        }
                        ?>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /导航栏选项 -->
    </div>

    </div>
</header>

<!--
End Fixed Navigation
==================================== -->
<section id="technique">
    <nav class="navbar navbar-default" role="navigation">
    </nav>
    <div class="container">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">User:</label>

                            <input type="text" class="form-control" id="recipient-name" name="username" value="<?php
                            if (empty($login_session))
                                echo 'Tourist';
                            else {
                                echo "$login_session";
                            }
                            ?>">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message:</label>
                            <textarea class="form-control" id="message-text" name="message_text" style="height: 100px"></textarea>
                        </div>
                        <?php echo "$error";?>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-primary" name="send">Send message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</section>

<!--
JavaScripts
========================== -->
<!-- main jQuery -->
<script src="../js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- jquery.nav -->
<script src="../js/jquery.nav.js"></script>
<!-- Portfolio Filtering -->
<script src="../js/jquery.mixitup.min.js"></script>
<!-- Fancybox -->
<script src="../js/jquery.fancybox.pack.js"></script>
</body>
</html>
