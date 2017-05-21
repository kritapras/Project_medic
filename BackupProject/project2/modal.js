 var med1_count = 0;
var	 med2_count = 0;
var	 med3_count = 0;
var	 med1_take_count = 0;
var		med2_take_count = 0;
var		med3_take_count = 0;
var		med1_take_before = 0;
var		med2_take_before = 0;
var		med3_take_before = 0;
var		med1_meal_mor = 0;
var		med2_meal_mor = 0;
var		med3_meal_mor = 0;
var		med1_meal_atn = 0;
var		med2_meal_atn = 0;
var		med3_meal_atn = 0;
var		med1_meal_evn = 0;
var		med2_meal_evn = 0;
var		med3_meal_evn = 0;
var		med1_meal_nig = 0;
var		med2_meal_nig = 0;
var		med3_meal_nig = 0;
var d = new Date();
var m = d.getMinutes();
var h = d.getHours();
 var tmor = 0;
var tatn = 0;
var tevn = 0;
var tnig = 0;
var flag1 = 0;
var flag2=1;
var flag3=1;
var flag4=1;
var timeoutHandle;
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var current_minutes = mins-1
        seconds--;
        console.log(current_minutes)
        console.log(seconds)
        if( seconds > 0 ) {
            timeoutHandle=setTimeout(tick, 1000);
        } else {

            if(mins > 1){
               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
               setTimeout(function () { countdown(mins - 1); }, 1000);
            }
        }
    }
    tick();
}

countdown(30);
var get_edit_time = $.ajax({
            url: 'History_GET.php',
            success: function(data) {
                console.dir("time =:"+data)
                var a = data;
                console.dir(typeof(a))
                get_edit_time = JSON.parse(data);
                console.dir(data.med1_edit)
                 var med1_edit = get_edit_time[0];
      				var med2_edit = get_edit_time[1];
      				var med3_edit = get_edit_time[2];
      				var timeedit = get_edit_time[3];
      				console.dir(med1_edit)
      				//console.log(m)
						$("#med1_edit").text(med1_edit);
						console.dir(med1_edit)
						$("#med2_edit").text(med2_edit);
						console.dir(med2_edit)
						$("#med3_edit").text(med3_edit);
						console.dir(med3_edit)
						$("#timeedit").text(timeedit);
						console.dir(timeedit)
            }});
var get_time = $.ajax({
            url: 'medicine_time.php',
            success: function(data) {
                //console.dir("time =:"+data)
                get_time = JSON.parse(data);
                //console.dir("time =:"+get_time[0]);
                 var tmor = get_time[0];
      				var tatn = get_time[1];
      				var tevn = get_time[2];
      				var tnig = get_time[3];
      				//console.log(m)
						$("#usr_time1").val(tmor);
						$("#usr_time2").val(tatn);
						$("#usr_time3").val(tevn);
						$("#usr_time4").val(tnig);
            }});
 // Modal and toggle beep sound/////////////////////////////////////////////////////
    var tag = $.ajax({
            url: 'tag.php',
            success: function(data) {
                //console.dir("tag =:"+data)
                tag = data;
            }});
    var toggle = $.ajax({
            url: 'submission.php',
            success: function(data) {
                toggle = data;
                console.dir("toggle =:"+data)
                before_toggle=data;
                console.dir("toggle =:"+data)
            }
        });
    var before_toggle = toggle;
    //console.log("before_toggle :"+before_toggle);
    function PlaySound() {
          var sound = document.getElementById("audio");
          sound.play()
      }
    function loadDoc() {
    	    var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
    			if (this.readyState == 4 && this.status == 200) {
        		var myObj = JSON.parse(this.responseText);
        		var med1_count = myObj['med1_count'];
    			var	 med2_count = myObj['med2_count'];
    			var	 med3_count = myObj['med3_count'];
    			var	 med1_take_count = myObj['med1_take_count'];
    			var		med2_take_count = myObj['med2_take_count'];
    			var		med3_take_count = myObj['med3_take_count'];
    			var		med1_take_before = myObj['med1_take_before'];
   			var		med2_take_before = myObj['med2_take_before'];
    			var		med3_take_before = myObj['med3_take_before'];
    			var		med1_meal_mor = myObj['med1_meal_mor'];
    			var		med2_meal_mor = myObj['med2_meal_mor'];
    			var		med3_meal_mor = myObj['med3_meal_mor'];
    			var		med1_meal_atn = myObj['med1_meal_atn'];
    			var		med2_meal_atn = myObj['med2_meal_atn'];
    			var		med3_meal_atn = myObj['med3_meal_atn'];
    			var		med1_meal_evn = myObj['med1_meal_evn'];
    			var		med2_meal_evn = myObj['med2_meal_evn'];
    			var		med3_meal_evn = myObj['med3_meal_evn'];
    			var		med1_meal_nig = myObj['med1_meal_nig'];
    			var		med2_meal_nig = myObj['med2_meal_nig'];
    			var		med3_meal_nig = myObj['med3_meal_nig'];
    			var		med1_sol = myObj['med1_sol'];
    			var		med2_sol= myObj['med2_sol'];
    			var   med3_sol= myObj['med3_sol'];
    			//console.log(myObj['med1_count']);
    			
    			/////////////////// modal 2 ///////////////////// แจ้เวลากนยา ///////////////////////////
    			if( med1_sol == 0 & med2_sol == 0 & med3_sol == 0){flag2 = 0}
    			if ((med1_sol == 1 || med2_sol == 1 || med3_sol == 1) & (flag2==0)) {
    				if (med1_take_count==1) {
    				$("#med1_take_count").attr('src', 'count_bottles/1.png');
    			}
    			else if(med1_take_count==2){
    				$("#med1_take_count").attr('src', 'count_bottles/2.png');
    			}
    			else if(med1_take_count==3){
    				$("#med1_take_count").attr('src', 'count_bottles/3.png');
    			}
    			if (med2_take_count==1) {
    				$("#med2_take_count").attr('src', 'count_bottles/1.png');
    			}
    			else if(med2_take_count==2){
    				$("#med2_take_count").attr('src', 'count_bottles/2.png');
    			}
    			else if(med2_take_count==3){
    				$("#med2_take_count").attr('src', 'count_bottles/3.png');
    			}
    			if (med3_take_count==1) {
    				$("#med3_take_count").attr('src', 'count_bottles/1.png');
    			}
    			else if(med3_take_count==2){
    				$("#med3_take_count").attr('src', 'count_bottles/2.png');
    			}
    			else if(med3_take_count==3){
    				$("#med3_take_count").attr('src', 'count_bottles/3.png');
    			}
    				$("#myModal2").modal('show');
    				flag2 = 1;
    			}
    			/////////////////// modal 3 ///////////////////// 
        		/////////////////// modal 4 ///////////////////// warning ยาใกล้หมด /////////////////
    			if (med1_count < 5 ||med2_count < 5 ||med3_count < 5 ) {
    				var d = new Date();
    				var m = d.getMinutes();
    				var h = d.getHours();
    				//console.log(m);
    				if (m % 30 != 0) {flag4 = 0;}
    						if (((m % 30)==0) & flag4 ==0) {
    						$("#myModal4").modal('show');
    						if ((med1_count < med2_count) &(med1_count < med3_count)) 
    						{
    						document.getElementById("medcount").innerHTML = med1_count;
    					}
    					else if ((med2_count < med1_count) &(med2_count < med3_count))  {
    						document.getElementById("medcount").innerHTML = med2_count;
    					}
    					else if ((med3_count < med1_count) &(med3_count < med1_count))  {
    						document.getElementById("medcount").innerHTML = med3_count;
    					}
    						PlaySound();
    						flag4 = 1;
    							}
    						}
    						if(med1_count == 1){
    						$("#medic1").attr('src', 'count_bottles/1.png');
    					}
    					else if(med1_count == 2){
    						$("#medic1").attr('src', 'count_bottles/2.png');
    					}
    					else if(med1_count == 3){
    						$("#medic1").attr('src', 'count_bottles/3.png');
    					}
    					else if(med1_count == 4){
    						$("#medic1").attr('src', 'count_bottles/4.png');
    					}
    					else if(med1_count == 5){
    						$("#medic1").attr('src', 'count_bottles/5.png');
    					}
    					else if(med1_count == 6){
    						$("#medic1").attr('src', 'count_bottles/6.png');
    					}
    					else if(med1_count == 7){
    						$("#medic1").attr('src', 'count_bottles/7.png');
    					}
    					else if(med1_count == 8){
    						$("#medic1").attr('src', 'count_bottles/8.png');
    					}
    					else if(med1_count == 9){
    						$("#medic1").attr('src', 'count_bottles/9.png');
    					}
    					else if(med1_count == 10){
    						$("#medic1").attr('src', 'count_bottles/10.png');
    					}
    					else if(med1_count == 11){
    						$("#medic1").attr('src', 'count_bottles/11.png');
    					}
    					else if(med1_count == 12){
    						$("#medic1").attr('src', 'count_bottles/12.png');
    					}
    					else if(med1_count == 13){
    						$("#medic1").attr('src', 'count_bottles/13.png');
    					}
    					else if(med1_count == 14){
    						$("#medic1").attr('src', 'count_bottles/14.png');
    					}
    					else if(med1_count == 15){
    						$("#medic1").attr('src', 'count_bottles/15.png');
    					}
    					else if(med1_count == 16){
    						$("#medic1").attr('src', 'count_bottles/16.png');
    					}
    					else if(med1_count == 17){
    						$("#medic1").attr('src', 'count_bottles/17.png');
    					}
    					else if(med1_count == 18){
    						$("#medic1").attr('src', 'count_bottles/18.png');
    					}
    					else if(med1_count == 19){
    						$("#medic1").attr('src', 'count_bottles/19.png');
    					}
    					else if(med1_count == 20){
    						$("#medic1").attr('src', 'count_bottles/20.png');
    					}
    					else if(med1_count == 21){
    						$("#medic1").attr('src', 'count_bottles/21.png');
    					}
    					else if(med1_count == 22){
    						$("#medic1").attr('src', 'count_bottles/22.png');
    					}
    					else if(med1_count == 23){
    						$("#medic1").attr('src', 'count_bottles/23.png');
    					}
    					else if(med1_count == 24){
    						$("#medic1").attr('src', 'count_bottles/24.png');
    					}
    					else if(med1_count == 25){
    						$("#medic1").attr('src', 'count_bottles/25.png');
    					}
    					else if(med1_count == 26){
    						$("#medic1").attr('src', 'count_bottles/26.png');
    					}
    					else if(med1_count == 27){
    						$("#medic1").attr('src', 'count_bottles/27.png');
    					}
    					else if(med1_count == 28){
    						$("#medic1").attr('src', 'count_bottles/28.png');
    					}
    					else if(med1_count == 29){
    						$("#medic1").attr('src', 'count_bottles/29.png');
    					}
    					else if(med1_count == 30){
    						$("#medic1").attr('src', 'count_bottles/30.png');
    					}
    					if(med2_count == 1){
    						$("#medic2").attr('src', 'count_bottles/1.png');
    					}
    					else if(med2_count == 2){
    						$("#medic2").attr('src', 'count_bottles/2.png');
    					}
    					else if(med2_count == 3){
    						$("#medic2").attr('src', 'count_bottles/3.png');
    					}
    					else if(med2_count == 4){
    						$("#medic2").attr('src', 'count_bottles/4.png');
    					}
    					else if(med2_count == 5){
    						$("#medic2").attr('src', 'count_bottles/5.png');
    					}
    					else if(med2_count == 6){
    						$("#medic2").attr('src', 'count_bottles/6.png');
    					}
    					else if(med2_count == 7){
    						$("#medic2").attr('src', 'count_bottles/7.png');
    					}
    					else if(med2_count == 8){
    						$("#medic2").attr('src', 'count_bottles/8.png');
    					}
    					else if(med2_count == 9){
    						$("#medic2").attr('src', 'count_bottles/9.png');
    					}
    					else if(med2_count == 10){
    						$("#medic2").attr('src', 'count_bottles/10.png');
    					}
    					else if(med2_count == 11){
    						$("#medic2").attr('src', 'count_bottles/11.png');
    					}
    					else if(med2_count == 12){
    						$("#medic2").attr('src', 'count_bottles/12.png');
    					}
    					else if(med2_count == 13){
    						$("#medic2").attr('src', 'count_bottles/13.png');
    					}
    					else if(med2_count == 14){
    						$("#medic2").attr('src', 'count_bottles/14.png');
    					}
    					else if(med2_count == 15){
    						$("#medic2").attr('src', 'count_bottles/15.png');
    					}
    					else if(med2_count == 16){
    						$("#medic2").attr('src', 'count_bottles/16.png');
    					}
    					else if(med2_count == 17){
    						$("#medic2").attr('src', 'count_bottles/17.png');
    					}
    					else if(med2_count == 18){
    						$("#medic2").attr('src', 'count_bottles/18.png');
    					}
    					else if(med2_count == 19){
    						$("#medic2").attr('src', 'count_bottles/19.png');
    					}
    					else if(med2_count == 20){
    						$("#medic2").attr('src', 'count_bottles/20.png');
    					}
    					else if(med2_count == 21){
    						$("#medic2").attr('src', 'count_bottles/21.png');
    					}
    					else if(med2_count == 22){
    						$("#medic2").attr('src', 'count_bottles/22.png');
    					}
    					else if(med2_count == 23){
    						$("#medic2").attr('src', 'count_bottles/23.png');
    					}
    					else if(med2_count == 24){
    						$("#medic2").attr('src', 'count_bottles/24.png');
    					}
    					else if(med2_count == 25){
    						$("#medic2").attr('src', 'count_bottles/25.png');
    					}
    					else if(med2_count == 26){
    						$("#medic2").attr('src', 'count_bottles/26.png');
    					}
    					else if(med2_count == 27){
    						$("#medic2").attr('src', 'count_bottles/27.png');
    					}
    					else if(med2_count == 28){
    						$("#medic2").attr('src', 'count_bottles/28.png');
    					}
    					else if(med2_count == 29){
    						$("#medic2").attr('src', 'count_bottles/29.png');
    					}
    					else if(med2_count == 30){
    						$("#medic2").attr('src', 'count_bottles/30.png');
    					}
    					if(med3_count == 1){
    						$("#medic3").attr('src', 'count_bottles/1.png');
    					}
    					else if(med3_count == 2){
    						$("#medic3").attr('src', 'count_bottles/2.png');
    					}
    					else if(med3_count == 3){
    						$("#medic3").attr('src', 'count_bottles/3.png');
    					}
    					else if(med3_count == 4){
    						$("#medic3").attr('src', 'count_bottles/4.png');
    					}
    					else if(med3_count == 5){
    						$("#medic3").attr('src', 'count_bottles/5.png');
    					}
    					else if(med3_count == 6){
    						$("#medic3").attr('src', 'count_bottles/6.png');
    					}
    					else if(med3_count == 7){
    						$("#medic3").attr('src', 'count_bottles/7.png');
    					}
    					else if(med3_count == 8){
    						$("#medic3").attr('src', 'count_bottles/8.png');
    					}
    					else if(med3_count == 9){
    						$("#medic3").attr('src', 'count_bottles/9.png');
    					}
    					else if(med3_count == 10){
    						$("#medic3").attr('src', 'count_bottles/10.png');
    					}
    					else if(med3_count == 11){
    						$("#medic3").attr('src', 'count_bottles/11.png');
    					}
    					else if(med3_count == 12){
    						$("#medic3").attr('src', 'count_bottles/12.png');
    					}
    					else if(med3_count == 13){
    						$("#medic3").attr('src', 'count_bottles/13.png');
    					}
    					else if(med3_count == 14){
    						$("#medic3").attr('src', 'count_bottles/14.png');
    					}
    					else if(med3_count == 15){
    						$("#medic3").attr('src', 'count_bottles/15.png');
    					}
    					else if(med3_count == 16){
    						$("#medic3").attr('src', 'count_bottles/16.png');
    					}
    					else if(med3_count == 17){
    						$("#medic3").attr('src', 'count_bottles/17.png');
    					}
    					else if(med3_count == 18){
    						$("#medic3").attr('src', 'count_bottles/18.png');
    					}
    					else if(med3_count == 19){
    						$("#medic3").attr('src', 'count_bottles/19.png');
    					}
    					else if(med3_count == 20){
    						$("#medic3").attr('src', 'count_bottles/20.png');
    					}
    					else if(med3_count == 21){
    						$("#medic3").attr('src', 'count_bottles/21.png');
    					}
    					else if(med3_count == 22){
    						$("#medic3").attr('src', 'count_bottles/22.png');
    					}
    					else if(med3_count == 23){
    						$("#medic3").attr('src', 'count_bottles/23.png');
    					}
    					else if(med3_count == 24){
    						$("#medic3").attr('src', 'count_bottles/24.png');
    					}
    					else if(med3_count == 25){
    						$("#medic3").attr('src', 'count_bottles/25.png');
    					}
    					else if(med3_count == 26){
    						$("#medic3").attr('src', 'count_bottles/26.png');
    					}
    					else if(med3_count == 27){
    						$("#medic3").attr('src', 'count_bottles/27.png');
    					}
    					else if(med3_count == 28){
    						$("#medic3").attr('src', 'count_bottles/28.png');
    					}
    					else if(med3_count == 29){
    						$("#medic3").attr('src', 'count_bottles/29.png');
    					}
    					else if(med3_count == 30){
    						$("#medic3").attr('src', 'count_bottles/30.png');
    					}
   				 }
   				 
				};
				xmlhttp.open("GET", "medicine_status.php", true);
				xmlhttp.send();
				var get_time = $.ajax({
            url: 'medicine_time.php',
            success: function(data) {
                //console.dir("time =:"+data)
                get_time = JSON.parse(data);
                //console.dir("time =:"+get_time[0]);
                 var tmor = get_time[0];
      				var tatn = get_time[1];
      				var tevn = get_time[2];
      				var tnig = get_time[3];
      				console.log(m)
            }});
				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $.ajax({
            url: 'submission.php',
            success: function(data) {
                toggle = data;
                //console.dir(toggle);
            }
        });
        $.ajax({
            url: 'tag.php',
            success: function(data) {
                tag = data;
                //console.dir(tag);
            }
        });
        if (toggle!=before_toggle) {
          before_toggle = toggle;
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          document.getElementById("Medicinfo").innerHTML = this.responseText;
          }
          };
          xhttp.open("GET", "ajax_rfid.php", true);
          xhttp.send();
    			$("#myModal").modal('show');
    			PlaySound();
    				}
    
   //console.log("toggle : "+toggle);
   //console.log("before_toggle :"+before_toggle);
   // function medic_des() {
   //        var sound = document.getElementById("audio");
   //        sound.play();
 }
	var t = setInterval(loadDoc,500);
   /////////////// pause a video/audio when modal windows is closed/////////////
   //////////// Audio Medic Description/////////////////////////////////////////
     var med1 = new Audio('medic_describe/1.wav');
     var med2 = new Audio('medic_describe/2.wav');
     var med3 = new Audio('medic_describe/3.wav');
     var med4 = new Audio('medic_describe/4.wav');
     var med5 = new Audio('medic_describe/5.wav');
     var med6 = new Audio('medic_describe/6.wav');
     var med7 = new Audio('medic_describe/7.wav');
     var med8 = new Audio('medic_describe/8.wav');
     var med9 = new Audio('medic_describe/9.wav');
     var med10 = new Audio('medic_describe/10.wav');
     var med11 = new Audio('medic_describe/11.wav');
     var med12 = new Audio('medic_describe/12.wav');
     var med13 = new Audio('medic_describe/13.wav');
     var med14 = new Audio('medic_describe/14.wav');
     var med15 = new Audio('medic_describe/15.wav');
     var med16 = new Audio('medic_describe/16.wav');
     var med17 = new Audio('medic_describe/17.wav');
     var med18 = new Audio('medic_describe/18.wav');
     var med19 = new Audio('medic_describe/19.wav');
     var med20 = new Audio('medic_describe/20.wav');
     function MedDes(tag) {
      //console.dir(tag);
	//console.dir(tag);
         if(tag == 1) {
            med1.currentTime = 0;
             med1.play();
         } else if(tag == 2) {
          med2.currentTime = 0;
             med2.play();
         }
         else if(tag == 3) {
            med3.currentTime = 0;
             med3.play();
         }
         else if(tag == 4) {
            med4.currentTime = 0;
             med4.play();
         }
         else if(tag == 5) {
            med5.currentTime = 0;
             med5.play();
         }
         else if(tag == 6) {
            med6.currentTime = 0;
             med6.play();
         }
         else if(tag == 7) {
            med7.currentTime = 0;
             med7.play();
         }
         else if(tag == 8) {
            med8.currentTime = 0;
             med8.play();
         }
         else if(tag == 9) {
             med9.currentTime = 0;
             med9.play();
         }
         else if(tag == 10) {
             med10.currentTime = 0;
             med10.play();
         }
         else if(tag == 11) {
            med11.currentTime = 0;
             med11.play();
         }
         else if(tag == 12) {
          med12.currentTime = 0;
             med12.play();
         }
         else if(tag == 13) {
          med13.currentTime = 0;
             med13.play();
         }
         else if(tag == 14) {
          med14.currentTime = 0;
             med14.play();
         }
         else if(tag == 15) {
          med15.currentTime = 0;
             med15.play();
         }
         else if(tag == 16) {
          med16.currentTime = 0;
             med16.play();
         }
         else if(tag == 17) {
          med17.currentTime = 0;
             med17.play();
         }
         else if(tag == 18) {
          med18.currentTime = 0;
             med18.play();
         }
         else if(tag == 19) {
          med19.currentTime = 0;
             med19.play();
         }
         else if(tag == 20) {
          med20.currentTime = 0;
             med20.play();
         }
        ///pause
    $('#myModal').on('hide.bs.modal', function () {
   med1.pause();
   med2.pause();
   med3.pause();
   med4.pause();
   med5.pause();
   med6.pause();
   med7.pause();
   med8.pause();
   med9.pause();
   med10.pause();
   med11.pause();
   med12.pause();
   med13.pause();
   med14.pause();
   med15.pause();
   med16.pause();
   med17.pause();
   med18.pause();
   med19.pause();
   med20.pause();
})
     }
