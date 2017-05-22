<!DOCTYPE html>
<html lang="en">
<head>
  <title>Setting 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

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
    body{
    height: 100%;
    background-color: #000066;
  }
    .font{
      color: white;
    }
    .h1 {
    color: white;
    font-family: verdana;
    font-size: 150%;
  }    li a:hover:not(.active) {
    background-color: black;
    color: white;
    font-family: "My Custom Font"
}
  .li{
    border: 3px solid #000;
    margin: 1px;
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
  <script type="text/javascript">
  var d = new Date();
$(document).ready(function(){
	$('#mor').on('change', function(){
   this.value = this.checked ? 1 : 0;
   //alert(this.value);
}).change();
	$('#atn').on('change', function(){
   this.value = this.checked ? 1 : 0;
   //alert(this.value);
}).change();
	$('#evn').on('change', function(){
   this.value = this.checked ? 1 : 0;
   //alert(this.value);
}).change();
	$('#nig').on('change', function(){
   this.value = this.checked ? 1 : 0;
   //alert(this.value);
}).change();
	$('#before').on('change', function(){
   this.value = this.checked ? 1 : 0;
   //alert(this.value);
}).change();
	$("#submit2").click(function(){

			$.post("Setting1_POST.php", { 
			user: $("#user").val(), 
			pwd: $("#pwd").val(),
			amount: $("#amount option:selected").val(),
			add: $("#add option:selected").val(),
			mor: $("#mor:checked").val(),
			atn: $("#atn:checked").val(),
			evn: $("#evn:checked").val(),
			nig: $("#nig:checked").val(),
			before: $("#before:checked").val(),
			d : d
			}, 
				function(user){
					alert(user);
				}
			);
		});
	});
</script>
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
              <th style="text-align: center; color: white"><img src="online.png" class="img-responsive" alt="Online" width="40" height="60">ผู้ใช้</th>

              <th style="text-align: center; color: white"><img src="offline.png" class="img-responsive" alt="offline" width="40" height="60">ญาติ</th>
            </table>
          </li>
      </ul>
    </div>
  </div>
</nav>
    <p style="text-align: right; color: white; background-color: orange;">Medicine Cabinet for Eyesight Problem and Elderly Person via Internet of Things
    </p>
  <h2><span class="label label-success">แก้ไขข้อมูลยาเพื่อใช้ในการแจ้งเตือน</span></h2>

          <div>
              <div class="bg-1 col-sm-6 container"></div>
              <div class="bg-1 col-sm-3 container"><a href="Main_page.html"><img src="return.png" class="img-responsive" alt="online" width="300" height="200"></a>
              </div>
              <div class="bg-1 col-sm-3 container"><a href="Main_page.html"><img src="home.png" class="img-responsive" alt="offline" width="300" height="200"></a>
          </div>
<br><br>
  <form method="GET" action="Setting1_POST.php">
  <div>
      <div class="container col-sm-6" style="color: white">
        <h2>แก้ไขข้อมูลยาเพื่อใช้ในการแจ้งเตือน</h2>
          <h3><div class="form-group">
          <label for="usr">ตัวยาที่ :</label>
          <select style="color:black" id="user" name="user">
          	<option value="1">ยาตัวที่ 1</option>
 			 	<option value="2">ยาตัวที่ 2</option>
  				<option value="3">ยาตัวที่ 3</option>
          </select>
          </div></h3>
          <h3><div class="form-group">
          <label for="pwd">สรรพคุณ:</label>
          <input type="text" class="form-control" id="pwd" name="pwd">
          </div></h3>
          <div class="form-group">
          <h3><label for="pwd">จำนวนยาที่ต้องรับประทานต่อครั้ง:</label>
            <select id="amount" style="color: black" name="amount">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select>
            เม็ด
          </div></h3>
          <h3><div class="form-group">
          <label for="pwd">จำนวนยาที่เพิ่ม:</label>
            <select id="add" style="color: black" name="add">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            เม็ด
          </div></h1>
          <h3 style="color: black"> <input type="button" value="ส่งข้อมูล" id="submit2" ></h3>
      </div>
      <div class="container col-sm-5" style="color:white">
      <h3><label for="pwd">วิธีการรับประทาน</label></h3>
        <div>
            <div class="checkbox" style="background-color:#3366ff " id="meal">
               <label class="checkbox-inline font"><h3><input type="checkbox" name="mor" id="mor">เช้า</h3></label>
                <label class="checkbox-inline font"><h3><input type="checkbox" name="atn" id="atn">กลางวัน</h3></label>
                <label class="checkbox-inline font"><h3><input type="checkbox" name="evn" id="evn">เย็น</h3></label>
                <label class="checkbox-inline font"><h3><input type="checkbox" name="nig" id="nig">ก่อนนอน</h3></label>
            </div>

						  <audio id="audio" src="beep.mp3" autostart="false" ></audio>
            <div class="radio">
              <table>
                <th><label class="radio-inline font"><h3 style="color: white"><input type="radio" name="before" id="before" value="1">ก่อนอาหาร  </h3></label></th>
                <th><label class="radio-inline font"><h3 style="color: white"><input type="radio" name="before" id="before" value="0">หลังอาหาร  </h3></label></th>
              </table>
            </div>
      </div>
  </form>
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
                    <th><img id="med1_warn" src="template/take/1.png" class="img-responsive"></th>
                    <th><img id="med2_warn" src="template/take/2.png" class="img-responsive"></th>
                    <th><img id="med3_warn" src="template/take/1.png" class="img-responsive"></th>
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
<script src="modal.js"></script>
 

</body>
</html>