<?php
session_start();

	//$con = mysqli_connect('localhost','u977578436_test','u977578436_Test','u977578436_test') or die ("Error Database Connection");
	$con = mysqli_connect('localhost','root','','competition') or die ("Error Database Connection");
	mysqli_set_charset($con,"utf8");

	if(isset($_POST['action']) && $_POST['action']=="getWinner") {	
	
		$mobile = mysqli_real_escape_string($con,$_POST['mobile']);	
		$type = mysqli_real_escape_string($con,$_POST['type']);	
	
		$check = mysqli_query($con, "select * from competitions where mobile='".$mobile."' limit 1");
		
		$rows = mysqli_num_rows($check);
	
		if($rows>0) {
			$ftch = mysqli_fetch_array($check);
		
			echo $ftch["name"];
			//			
			$win_date = date('Y-m-d H:m:s');
			//$update_status = mysqli_query($con, "update competitions set winner='1', win_date='".$win_date."', type='".$type."' where mobile='".$mobile."' limit 1");
		}
	}
	mysqli_close($con);
	
?>