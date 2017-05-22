<!DOCTYPE html>
<html lang="en">
<head>
  <title>Set Time</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#submit1").click(function(){

			$.post("Settime_POST.php", { 
			usr_time1: $("#usr_time1").val(), 
			usr_time2: $("#usr_time2").val(),
			usr_time3: $("#usr_time3").val(),
			usr_time4: $("#usr_time4").val()}, 
				function(usr_time1){
					alert(usr_time1);
				}
			);
		});
	});
</script>
  <style>
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
    body, html {
    height: 100%;
    margin: auto;
  }
        body{
    height: 100%;
    background-color: #000066 ;
  }
    }
    .center {
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
    }
    .img {
    display: block;
    margin: auto;
    width: 40%;
    }
    label {
    	color: white;
    }
    .h1 {
    color: white;
    font-family: verdana;
    font-size: 150%;
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
    src: url(font/THSarabun.ttf) format("truetype");
}
p.customfont { 
    font-family: "My Custom Font", Verdana, Tahoma;
}
  .thai{
    font-family: "My Custom Font"
  }
  *{
    font-family: "My Custom Font"
  }
  p{
    font-size: 150%
  }
  </style>
</head>
<body style="color:white" >

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
        <li class="li"><a href="index.php">อ่านฉลากยา</a></li>
        <!--<li class="li"><a href="Main_page.php">หน้าหลัก</a></li>-->
        <li class="li"><a href="information.php">ข้อมูลยาประจำตัว</a></li>
        <li class="li"><a href="7display.php">แก้ไขการแจ้งเตือน</a></li>
        <li class="li"><a href="Setting1.php">แก้ไขข้อมูลยา</a></li>
        <li class="li"><a href="Settime.php">แก้ไขเวลารับประทานยา</a></li>
        <li class="li"><a href="History.php">ประวัติ</a></li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-log-in" style="font-size: 50%"></span> Login</a></li>-->
      </ul></b>
      <ul class="nav navbar-nav navbar-right thai">
        <li>
            <table style="width:100%;font-size: 250%;width: 200px"> 
              <th style="text-align: center; color: white" ><img src="online.png" id="user1" class="img-responsive" alt="online" width="40" height="60">ผู้ใช้</th>

              <th style="text-align: center; color: white" ><img src="offline.png" id="user2" class="img-responsive" alt="offline" width="40" height="60">ญาติ</th>
            </table>
           <script type="text/javascript">
            				if ( $("#user1").attr('src') == "online.png") {
            					$("#user1").click(function () 
            					{
									$("#user1").attr('src', "offline.png");
									$("#user2").attr('src', "online.png");
								});
            				}
            				else if ($("#user1").attr('src') == "offline.png" ) {
            					$("#user1").click(function () 
            					{
									$("#user1").attr('src', "online.png");
									$("#user2").attr('src', "offline.png");
								});
            				}
            				$('#user1').on({
    'click': function(){
        $('#user1').attr('src','offline.png');
    }
});
            </script>
          </li>
      </ul>
    </div>
  </div>
</nav>
    <p style="text-align: right; color: white; background-color: orange;">Medicine Cabinet for Eyesight Problem and Elderly Person via Internet of Things
    </p>

  <h2><span class="label label-success">แก้ไขข้อมูลเวลารับประทานยา</span></h2>


              <div>
          		<div class="bg-1 col-sm-6 container"></div>
          		<div class="bg-1 col-sm-3 container"><a href="Main_page.html"><img src="return.png" class="img-responsive" alt="online" width="300" height="200"></a>
          		</div>
          		<div class="bg-1 col-sm-3 container"><a href="Main_page.html"><img src="home.png" class="img-responsive" alt="offline" width="300" height="200"></a>
          </div>
<br><br><br><br><br><br>
    <h1><div class="bg-1 text-center" style="width: 100%" style="height: 100%">
        <form  id="formtime">
  			<label>เวลารับประทานอาหารเช้า : </label>	
  			<input type="time" name="usr_time1"id="usr_time1" value="00:00"><label>  น.</label><br><br>
  			<label>เวลารับประทานอาหารเที่ยง : </label>	
  			<input type="time" name="usr_time2"id="usr_time2"  value="00:00"><label>  น.</label><br><br>
  			<label>เวลารับประทานอาหารเย็น : </label>	
  			<input type="time" name="usr_time3"id="usr_time3"  value="00:00"><label>  น.</label><br><br>
        <label>เวลารับประทานก่อนนอน : </label>  
        <input type="time" name="usr_time4" id="usr_time4" value="00:00"><label>  น.</label><br><br>
 			 <input type="button" value="ส่งข้อมูล" id="submit1" >
		</form>

    </div></h1>
<audio id="audio" src="beep.mp3" autostart="false" ></audio>
    <br>
    
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
              <p id="mealbf">รับประทานมื้อ</p>
            <table class="table-responsive" style="width: 100%;border-color: ">
                    <th><img id="med1_take_count"src="template/take/1.png" class="img-responsive"></th>
                    <th><img id="med2_take_count" src="template/take/2.png" class="img-responsive"></th>
                    <th><img id="med3_take_count" src="template/take/1.png" class="img-responsive"></th>
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
                      <td style="border-color: red;border-style: solid;border-width: 3px" id="medcount">5</td>
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
  <script src="modal2.js"></script>
</body>
</html>
