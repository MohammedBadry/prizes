<?php

session_start();
if(!isset($_SESSION['competition'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Support By Gifts</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-rtl.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="after-login">

<!-- Start Privacy Policy
===========================-->
<section class="after-login-container">
    <div class="container">
        <div class="title-container text-center">
            <img src="images/selver%20general%20botton.png" alt="">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="game-type text-center">
                    <img src="images/gold.png" alt="">
                    <div class="btn-container text-center">
                        <a href="gold.php">
                            <img src="images/botton%20gold.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game-type text-center">
                    <img src="images/selver.png" alt="">
                    <div class="btn-container text-center">
                        <a href="silver.php">
                            <img src="images/botton%20selver.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game-type text-center">
                    <img src="images/bronz.png" alt="">
                    <div class="btn-container text-center">
                        <a href="bronze.php">
                            <img src="images/botton%20%20bronz.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Privacy Policy ===========-->


<!-- start the script -->
<script src="js/plugins.js"></script>
<!-- end the script -->
</body>

</html>