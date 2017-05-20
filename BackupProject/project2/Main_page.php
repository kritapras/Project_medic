<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
  nav{
    margin: 0;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .bg-1 { 
    background-color: #000066; /* Blue */
    color: #000000;
    max-height: :auto;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    body{
    height: 100%;
    background-color: #000066 ;
  }
}
    li a.active {
    background-color: #4CAF50;
    color: white;
    font-family: "My Custom Font"
}

  li a:hover:not(.active) {
    background-color: black;
    color: white;
    font-family: "My Custom Font"
}
  .li{
    border: 3px solid #000;
    margin: 1px
    font-family: "My Custom Font"
  }
    @font-face {
    font-family: "My Custom Font";
    src: url(template/font/THSarabun.ttf) format("truetype");
}
p.customfont { 
    font-family: "My Custom Font", Verdana, Tahoma;
}
  .thai{
    font-family: "My Custom Font"
  }
  *{
    font-family: "My Custom Font";
  }
  p{
    font-size: 150%
  }
  </style>


	</head>
		<body style="width: 100%" style="height: 100%" bg-1>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"><b>
      <ul class="nav navbar-nav active thai" style="font-size: 300%;text-align: center;">
        <li class="li"><a href="index.php">สารบัญ</a></li>
        <li class="li"><a href="Main_page.php">หน้าหลัก</a></li>
        <li class="li"><a href="information.php">ข้อมูลยาประจำตัว</a></li>
        <li class="li"><a href="7display.php">แก้ไขการแจ้งเตือน</a></li>
        <li class="li"><a href="Setting1.php">แก้ไขข้อมูลยา</a></li>
        <li class="li"><a href="Settime.php">แก้ไขเวลารับประทานยา</a></li>
        <li class="li"><a href="History.php">ประวัติ</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in" style="font-size: 50%"></span> Login</a></li>
      </ul></b>
      <ul class="nav navbar-nav navbar-right thai">
        <li>
            <table style="width:100%;font-size: 250%;width: 200px"> 
              <th style="text-align: center; color: white"><img src="pic/online.png" class="img-responsive" alt="Online" width="40" height="60">ผู้ใช้</th>

              <th style="text-align: center; color: white"><img src="pic/offline.png" class="img-responsive" alt="offline" width="40" height="60">ญาติ</th>
            </table>
          </li>
      </ul>
    </div>
  </div>
</nav>
    <p style="text-align: right; color: white; background-color: orange;margin: 0px" class="container-fluid ">Medicine Cabinet for Eyesight Problem and Elderly Person via Internet of Things
    </p>
    <audio id="audio" src="beep.mp3" autostart="false" ></audio>

        <br><br>

        <h2><span class="label label-success" style="width: 100%">หน้าหลัก</span></h2>

        <br><br> 
          <div class="container-fluid">
              <div class="col-sm-4"><img src="pic/Edit_medic.png" class="img-responsive" alt="bottle1" width="350" height="300"></div>
              <div class="col-sm-4"><img src="pic/Check_qaun.png" class="img-responsive" alt="bottle2" width="350" height="300"></div>
              <div class="col-sm-4"><img src="pic/Edit_history.png" class="img-responsive" alt="bottle3" width="350" height="300"></div>
          </div>


          <p id="demo"></p>
          <br><br><br><br><br><br><br><br>

        <div class="container">
  <!-- Trigger the modal with a button -->
 <!--  <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">่</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content h2" style="background-color: #002699;color: white"> 
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">ข้อมูลยา</h2>
        </div>
        <div class="modal-body" id="Medicinfo">
        </div>
        <div class="modal-footer">
          <img src="pic/audio.png" style="width: 50px; height: 50px" id="MD" onclick="MedDes(tag)">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



      <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2">่</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content h2" style="background-color: #002699;color: white"> 
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background-color: white; color: black">&times;</button>
              <h2 class="modal-title"></h2>
            </div>
            <div class="modal-body">
              <p style="text-align: right; color: white; background-color: orange">Medicine Cabinet for Eyesight Problem and Elderly Person via Internet of Things</p><br>
              <h2><span class="label label-success">หน้าหลัก</span></h2><br>
              <p>รับประทานมื้อ : เช้า : ก่อนอาหาร </p>
            <table class="table-responsive" style="width: 100%;border-color: ">
                    <th><img src="template/take/1.png" class="img-responsive"></th>
                    <th><img src="template/take/2.png" class="img-responsive"></th>
                    <th><img src="template/take/1.png" class="img-responsive"></th>
              </table>              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
            </div>
      </div>
      
    </div>
  </div>
  
</div>


      <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal3">่</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content h2" style="background-color: #002699;color: white"> 
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background-color: white; color: black">&times;</button>
              <h2 class="modal-title"></h2>
            </div>
            <div class="modal-body">
              <p style="text-align: right; color: white; background-color: orange">Medicine Cabinet for Eyesight Problem and Elderly Person via Internet of Things</p><br>
              <h2><span class="label label-success">แจ้งเตือนผู้ใช้ไม่ได้รับประทานยา</span></h2><br>
              <h1  style="text-align: center; font-size: 200%"><p>ผู้ใช้ไม่ได้รับประทานยาตามเวลาที่กำหนด<br><p style="color: red">กรุณาสอบถามและ<br>แจ้งเตือนการรับประทานยาแก่ผู้ใช้</p></p></h1>           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
            </div>
      </div>
      
    </div>
  </div>
  
</div>


      <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal4">่</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content h2" style="background-color: #002699;color: white"> 
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background-color: white; color: black">&times;</button>
              <h2 class="modal-title"></h2>
            </div>
            <div class="modal-body">
              <p style="text-align: right; color: white; background-color: orange">Medicine Cabinet for Eyesight Problem and Elderly Person via Internet of Things</p><br>
              <h2><span class="label label-success">แจ้งเตือนยาใกล้หมด</span></h2><br>
              <h1  style="text-align: center; font-size: 200%">
                ยา : แอสไพริน
                  <table class="table-responsive " align="center">
                    <tr>
                      <td>เหลือจำนวน</td>
                      <td style="border-color: red;border-style: solid;border-width: 3px">5</td>
                      <td>เม็ด</td>
                    </tr>
                  </table>
                <p style="color: red">ยาใกล้หมดแล้วกรุณาไปพบแพทย์หรือเภสัขกร</p></h1>   
           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
            </div>
      </div>
      
    </div>
  </div>
  
</div>
 <script type="text/javascript">
    // Modal and toggle beep sound/////////////////////////////////////////////////////
    var tag = $.ajax({
            url: 'tag.php',
            success: function(data) {
                console.dir("tag =:"+data)
                tag = data;
            }});
    var toggle = $.ajax({
            url: 'submission.php',
            success: function(data) {
                toggle = data;
            }
        });
    var before_toggle = toggle;
    console.log("before_toggle :"+before_toggle);
    function PlaySound() {
          var sound = document.getElementById("audio");
          sound.play()
      }
    function loadDoc() {
        $.ajax({
            url: 'submission.php',
            success: function(data) {
                toggle = data;
                console.dir(toggle);
            }
        });
        $.ajax({
            url: 'tag.php',
            success: function(data) {
                tag = data;
                console.dir(tag);
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
    
   console.log("toggle : "+toggle);
   console.log("before_toggle :"+before_toggle);
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
	console.dir(tag);
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
 </script>

</body>
</html>