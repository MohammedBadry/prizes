<html>
<head>
    <title>السحب</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ url('assets') }}/frontend/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets') }}/frontend/css/ezslots.css" rel="stylesheet" type="text/css" />
    <link rel="{{ url('assets') }}/frontend/stylesheet" href="css/bootstrap.min.css">

    <style>
    body{
        background-color:white;
    }
    .window {
        font-size:40px;
        font-family:arial,helvetica,sans-serif;
    }
    </style>

</head>

<body>

<!--<h1>simple numbers with winning set</h1>-->
<nav class="kayo-nav">
    <a href="{{route('dashboard')}}" class="pull-left">
        لوحة التحكم
    </a>
    <span class="slogan">
        <img src="{{url('assets')}}/frontend/images/slogan_silver.png" alt="">
    </span>
    <a href="#" class="pull-right open-edit-popUp">
        زمن السحب
    </a>
</nav>

<div class="kayo-game-container">
    <div id="ezslots1"></div>
</div>
<div class="text-center btn-container">
    <span id="winwinwin1"><img src="{{url('assets')}}/frontend/images/btn_silver.png" alt=""></span><br>
    <button id="refresh" class="kayo-gold-btn" style="display: none" onclick="window.location='';">Reset</button>

</div>

<div id="result"></div>

    <div class="kayo-popUp" style="display: none">
        <div class="close-popup"></div>
        <div class="popup-content">
            <img src="{{url('assets')}}/frontend/images/silver-popup.png" alt="">
            <h1 class="congracts"> مبرووووك للفائز</h1>
            <p class="winner">
                <span class="winner_name"></span>
            </p>
            <p class="winner-number">
                رقم الفائز <span class="winner_number"></span>
            </p>
            <div class="done-btn">
                <button class="kayo-btn gradient-blue-btn" onclick="window.location='';">تم السحب</button>
            </div>
        </div>
    </div>

    <div class="kayo-popUp edit-time">
        <div class="close-popup"><i class="glyphicon glyphicon-remove"></i></div>
        <div class="popup-content">
            <form action="" id="timeSetts">
                <h1 class="congracts">الإعدادات</h1>
                <input class="kayo-input" id="time" type="number" value="{{$time}}" placeholder="الزمن">
                <div id="setts_res"></div>
                <div class="done-btn">
                    <button type="submit" class="kayo-btn gradient-blue-btn">تعديل</button>
                </div>
            </form>
        </div>
    </div>


<script src="{{ url('assets') }}/frontend/js/jquery-1.11.3.js"></script>
<script src="{{ url('assets') }}/frontend/js/jquery.easing.1.3.js"></script>
<script src="{{ url('assets') }}/frontend/js/ezslots_silver.js"></script>
<script src="{{ url('assets') }}/frontend/js/plugins.js"></script>
<script src="{{ url('assets') }}/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
$(function(){
		var winNum = $.ajax({
			type: "POST",
			url: "{{url('check-winner')}}",
			dataType: "text",
			async: false
		}).responseText;
	    if(winNum==0) {
			$('.btn-container').html("<h2 style='color: #FFF'>لا يوجد متسابقين</h2>");
	    }
		var time = "{{$time}}";
		//alert(time);
 		var audio = new Audio('assets/frontend/audio/start.mp3');
 		audio.loop=true;
		var stop_audio = new Audio('assets/frontend/audio/stop.mp3');
		//setting up some sample set sof things we can make a slot machine of
		var numbers = ['<img src="{{url("assets")}}/frontend/images/silver/0.png">','<img src="{{url("assets")}}/frontend/images/silver/1.png">','<img src="{{url("assets")}}/frontend/images/silver/2.png">','<img src="{{url("assets")}}/frontend/images/silver/3.png">','<img src="{{url("assets")}}/frontend/images/silver/4.png">','<img src="{{url("assets")}}/frontend/images/silver/5.png">','<img src="{{url("assets")}}/frontend/images/silver/6.png">','<img src="{{url("assets")}}/frontend/images/silver/7.png">','<img src="{{url("assets")}}/frontend/images/silver/8.png">','<img src="{{url("assets")}}/frontend/images/silver/9.png">'];
		var digits = winNum.toString().split('');
		var realDigits = digits.map(Number);

        var callbackFunction = function(result){
		    audio.pause();
					$.ajax({
						type: "POST",
            			url: "{{url('get-winner')}}/"+winNum,
						success: function(res) {
							$('.winner_name').html(res);
							$('.winner_number').html(winNum);
						    $('.kayo-popUp').show();
						}
					});

			stop_audio.play();
		}

	    //simple numbers based one
        var ezslot1 = new EZSlots("ezslots1",{"reelCount":9,"startingSet":[0,0,0,0,0,0,0,0,0],"winningSet":realDigits,"symbols":numbers, "callback":callbackFunction,"time":time });

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
			url: "{{url('update-time-seetings')}}/"+time,
			success: function(res) {
				$('#timeSetts .kayo-btn').html('تعديل');
				$('#timeSetts .kayo-btn').prop('disabled', false);
   				$('#setts_res').html(res);
				if(res=="تم تحديث الإعدادات") {
					window.location='';
				}
			}
		});
	});
});
</script>


</body>
</html>
