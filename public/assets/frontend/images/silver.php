<?php

session_start();
if(!isset($_SESSION['competition'])) {
    header('Location: login.php');
}

?>
<body>
<script src="jquery-1.11.3.js"></script>
<script src="jquery.easing.1.3.js"></script>
<script src="ezslots.js"></script>
<link href="ezslots.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" />

<style>
body{
	background-color:white;
}
.window {
	font-size:40px;
	font-family:arial,helvetica,sans-serif;	
}

</style>
<!--<h1>simple numbers with winning set</h1>-->
<nav class="kayo-nav">
    <div class="dropdown pull-left kayo-dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            مرحبا, <span><?=$_SESSION['name'];?></span>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#" class="open-edit-popUp">تعديل وقت اللعبه</a></li>
            <li><a href="logout.php">تسجيل خروج</a></li>
        </ul>
    </div>
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
<div class="kayo-game-container">
    <div id="ezslots1"></div>
</div>
<div class="text-center btn-container">
    <span id="winwinwin1"><img src="images/btn.png" alt=""></span><br>
    <button id="refresh" class="kayo-gold-btn" style="display: none" onclick="window.location='';">Reset</button>

</div>

<div id="result"></div>

<script src="js/bootstrap.min.js"></script>

<script>
$(function(){
		
		var winNum = $.ajax({
			type: "POST",
			url: "checkWinner.php",
			data: 'action=checkWinner',
			dataType: "text", 
			async: false			
		}).responseText;
	    if(winNum==0) {
			$('.btn-container').html("<h2 style='color: #FFF'>لا يوجد متسابقين</h2>");
	        
	        
	    }
		var time = $.ajax({
			type: "POST",
			url: "getTime.php",
			data: 'action=getTime',
			dataType: "text", 
			async: false			
		}).responseText;
		//alert(time);
 		var audio = new Audio('audio/start.mp3');
		var stop_audio = new Audio('audio/stop.mp3');
		//setting up some sample set sof things we can make a slot machine of
		//var numbers = ['0','1','2','3','4','5','6','7','8','9'];
		var numbers = ['<img src="images/silver/0.png">','<img src="images/silver/1.png">','<img src="images/silver/2.png">','<img src="images/silver/3.png">','<img src="images/silver/4.png">','<img src="images/silver/5.png">','<img src="images/silver/6.png">','<img src="images/silver/7.png">','<img src="images/silver/8.png">','<img src="images/silver/9.png">'];
		var digits = winNum.toString().split('');
		var realDigits = digits.map(Number);
		
		var callbackFunction = function(result){
					$.ajax({
						type: "POST",
						url: "getWinner.php",
						data: 'action=getWinner&winnerCode='+winNum,
						success: function(res) {
							$('#result').html(res);
						}
					});
			
			stop_audio.play();
		}

	    //simple numbers based one
        var ezslot1 = new EZSlots("ezslots1",{"reelCount":6,"startingSet":[0,0,0,0,0,0],"winningSet":realDigits,"symbols":numbers,"height":412,"width":305, "callback":callbackFunction,"time":time });

	$("#winwinwin1").click(function(){ 
	    audio.play();
		$(this).hide();
		ezslot1.win();
	});
	
	
	$('#timeSetts').submit(function(e) {
		e.preventDefault();
		$('#setts_res').html('');
		var time = $('#timeSetts #time').val();
		$('#timeSetts .kayo-btn').html('Loading');
		$('#timeSetts .kayo-btn').prop('disabled', true); 
		$.ajax({
			type: "POST",
			url: "gameSetts.php",
			data: 'action=updateTime&time='+time,
			success: function(res) {
				$('#timeSetts .kayo-btn').html('تعديل');
				$('#timeSetts .kayo-btn').prop('disabled', false); 
   				$('#setts_res').html(res);
				if(res=="تم تحديث الإعدادات") {
					window.location='index.php';
				} 
			}
		});
	});
});

</script>



<div class="kayo-popUp edit-time">
    <div class="close-popup"><i class="glyphicon glyphicon-remove"></i></div>
    <div class="popup-content">
        <form action="" id="timeSetts">
            <h1 class="congracts">الإعدادات</h1>
            <input class="kayo-input" id="time" type="number" placeholder="وقت اللعبه">
            <div id="setts_res"></div>
			<div class="done-btn">
                <button type="submit" class="kayo-btn gradient-blue-btn">تعديل</button>
            </div>
        </form>
    </div>
</div>
<script src="js/plugins.js"></script>
</body>