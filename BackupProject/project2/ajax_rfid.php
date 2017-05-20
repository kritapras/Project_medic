<?php
$servername = "localhost";
$username = "root"; 
$password = "raspberry";
$dbname = "medicine"; 
$tbname = "medicine";
$tbname2 = "rfid";
// $bool = True;
// $num = 3 + 4;
// $str = "A string here";

$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql2="SELECT rfid FROM $tbname2 ";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_array();
    $rfid=$row2['0'];
    // echo $rfid."<br>";

    $sql="SELECT * FROM $tbname WHERE No = '".$rfid."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $No=$row['No'];
    $List=$row['List'];
    $Properties=$row['Properties'];
    $Howto=$row['Howto'];
    $warning=$row['warning'];
    // echo "<p>".$No."</p>";
    // echo "<p>".$List."</p>";
    // echo "<p>".$Properties."</p>";
    // echo "<p>".$Howto."</p>";
    // echo "<p>".$warning."</p>";

    echo "<p>ชื่อยา : ".$List."</p><br>";
    echo  "<p>สรรพคุณ :". $Properties."</p><br>";
    echo  "<p>วิธีการรับประทาน :".$Howto."</p><br>";
    echo  "<p>ข้อควรระวัง : ".$warning."</p>";
$conn->close();
?>