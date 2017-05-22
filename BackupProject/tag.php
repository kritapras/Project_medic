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

    $sql2="SELECT rfid FROM $tbname2 WHERE status=1";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_array();
    $rfid=$row2['0'];
    // echo $rfid."<br>";

    echo $rfid;

    // print json_encode($row);
$conn->close();
?>