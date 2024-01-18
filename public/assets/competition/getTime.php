<?php
	//$con = mysqli_connect('localhost','u977578436_test','u977578436_Test','u977578436_test') or die ("Error Database Connection");
	$con = mysqli_connect('localhost','root','','competition') or die ("Error Database Connection");
	
	if(isset($_POST['action']) && $_POST['action']=="getTime") {	
	
		$check = mysqli_query($con, "select time from game_settings where id='1' limit 1");
		
		$rows = mysqli_num_rows($check);
	
		if($rows>0) {
			$ftch = mysqli_fetch_array($check);		
			echo $ftch['time'];
		} else {
		    echo 60;    
		}
	}

?>