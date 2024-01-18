<?php
session_start();
if(isset($_SESSION['competition'])) {
    header('Location: index.php');
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

<body class="gray-body">
<nav class="kayo-nav">
    <a href="#" class="pull-left">
        <img src="images/logo%202.png" alt="">
    </a>
    <span class="slogan">
        <img src="images/slogan.png" alt="">
    </span>
    <a href="#" class="pull-right">
        <img src="images/logo.png" alt="">
    </a>
</nav>
<!-- Start Privacy Policy
===========================-->
<section class="company-login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="" id="loginForm" class="login-form">
                    <h3 class="main-section-title">
                        تسجيل دخول
                    </h3>
					<div id="log_res"></div>
                    <div class="input-group first-box">
                        <span class="input-group-addon" id="basic-addon1">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="text" id="username" class="form-control" placeholder="كود المول" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group secound-box">
                        <span class="input-group-addon" id="basic-addon2">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input type="password" id="password" class="form-control" placeholder="كلمه المرور" aria-describedby="basic-addon2">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="kayo-btn submit-btn">
                            تسجيل دخول
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Privacy Policy ===========-->


<!-- start the script -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/plugins.js"></script>
<script>
$(document).ready(function() {
	$('#loginForm').submit(function(e) {
		e.preventDefault();
		var username = $('#username').val();
		var pass = $('#password').val();
		var dataArray = "username="+username+"&pass="+pass;
		$('#loginForm .kayo-btn').html('Loading');
		$('#loginForm .kayo-btn').prop('disabled', true); 
		$.ajax({
			type: "POST",
			url: "doLogin.php",
			data: dataArray,
			success: function(res) {
				$('#loginForm .kayo-btn').html('تسجيل دخول');
				$('#loginForm .kayo-btn').prop('disabled', false); 
				if(res=="تسجيل دخول ناجح") {
    				$('#log_res').html('<div class="success-message custom-message-box">'+res+'</div>');
					window.location='index.php';
				} else {
    				$('#log_res').html('<div class="wrong-message custom-message-box">'+res+'</div>');
				}
			}
		});
	});
});
</script>
<!-- end the script -->
</body>

</html>