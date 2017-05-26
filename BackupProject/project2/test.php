<html>
<head>
<title></title>
<body>
 <?php include'medicine_status.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <p id="demo">5555</p> 
  <div id="time"></div>
<label id="minutes">00</label>:<label id="seconds">50</label>
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
  <button type="button" onclick="setInterval(setTime, 1000);">ปิดหน้าต่าง</button>
    <script type="text/javascript">
        var totalSeconds = 0;
			var SetT = setInterval(setTime, 1000);
        function setTime()
        {
        	console.log("totalSeconds"+totalSeconds)
        	++totalSeconds;
        	if (totalSeconds %5== 0) {
           			totalSeconds=0;
           			clearInterval(SetT)
            }
           	else	if (totalSeconds %2 == 0) {
           			$("#myModal3").modal('show');

            }
        }
		
    </script>
<script type="text/javascript" src="modal2.js">

</script>
</body>
</head>
</html>