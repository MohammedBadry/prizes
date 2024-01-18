<?php
session_start();

	//$con = mysqli_connect('localhost','u977578436_test','u977578436_Test','u977578436_test') or die ("Error Database Connection");
	$con = mysqli_connect('localhost','root','','competition') or die ("Error Database Connection");
	
	if(isset($_POST['action'])) {	
		if(!empty($_POST['time'])) {	
			if($_POST['time']<=120) {
				switch($_POST['action']) {
					case "updateTime":
						if(!empty($_POST['time'])) {
							$time = mysqli_real_escape_string($con,$_POST['time']);
							$updateTime = mysqli_query($con,"update game_settings set `time`='".$time."' where id=1");
							if($updateTime) {
								$setts = mysqli_query($con,"select * from game_settings where id=1 limit 1");	
								$setts_res = mysqli_fetch_array($setts);
								$_SESSION['time'] = $setts_res['time'];
										echo "تم تحديث الإعدادات";
							} else {
								echo "عفوا حدث خطأ م يرجى المحاولة لاحقا";
							}
						}
					
				}
			} else {
				echo "يجب ألا يزيد الوقت عن 120 ثانية";
			}
		} else {
			echo "يرجى اختيار الوقت أولا";
		}
	}

?>