<html>
<head>
<title></title>
<body>
 <?php include'medicine_status.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="modal.js"></script>
  <p id="demo">5555</p> 
  <div id="timer"></div>
  <script src="modal.js"></script>
  <script type="text/javascript">
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

</script>
</body>
</head>
</html>