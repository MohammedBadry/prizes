<?php
session_start();

	//$con = mysqli_connect('localhost','u977578436_test','u977578436_Test','u977578436_test') or die ("Error Database Connection");
	$con = mysqli_connect('localhost','root','','competition') or die ("Error Database Connection");
	mysqli_set_charset($con,"utf8");

		$username = mysqli_real_escape_string($con,$_POST['username']);
		$pass = mysqli_real_escape_string($con,$_POST['pass']);
		if($username && $pass) {
			$check = mysqli_query($con,"select * from branches where username='".$username."' and password='".$pass."' limit 1");	
			$res = mysqli_num_rows($check);
			if ($res == 1) {		
				$result = mysqli_fetch_array($check);
				$_SESSION['competition'] = "competition";
				$_SESSION['id'] = $result['id'];
				$_SESSION['name'] = $result['name'];

				$setts = mysqli_query($con,"select * from game_settings where id=1 limit 1");	
				$setts_res = mysqli_fetch_array($setts);
				$_SESSION['time'] = $setts_res['time'];
				
				echo "تسجيل دخول ناجح";
				
			} else {
				echo "يوجد خطأ في بيانات الدخول";
			}
		} else {
			echo "جميع الحقول مطلوبة";
		}

	mysqli_close($con);
	
?>