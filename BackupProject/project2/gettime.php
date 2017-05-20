<?php
$servername = "localhost";
$username = "root"; 
$password = "raspberry";
$dbname = "medicine"; 
$tbname = "timetake";
$time ="";
$i=0;
$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql= "  SELECT timeeat FROM timetake";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $i=0;
        while($timetake = $result->fetch_assoc()) {
        echo "<br>".$timetake["timeeat"];
        for ($i=0; $i < ; $i++) { 
            $time=$timetake["timeeat"];
        }
        print_r($time);
    }
    }
    else {
        echo "0 results";
    }
    $conn->close();
?>
<script type="text/javascript">
    var mor=$timetake[1];
    var aft=$timetake[2];
    var evn=$timetake[3];
    var nig=$timetake[4];
</script>