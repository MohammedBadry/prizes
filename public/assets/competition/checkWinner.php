<?php
	//$con = mysqli_connect('localhost','u977578436_test','u977578436_Test','u977578436_test') or die ("Error Database Connection");
	$con = mysqli_connect('localhost','root','','competition') or die ("Error Database Connection");
	
	if(isset($_POST['action']) && $_POST['action']=="checkWinner") {	
	
		$check = mysqli_query($con, "select mobile from competitions where winner='0' order by rand() limit 1");
		
		$rows = mysqli_num_rows($check);
	
		if($rows>0) {
			$ftch = mysqli_fetch_array($check);
		
			echo $ftch['mobile'];
		} else {
		    echo 0;    
		}
	}

?>