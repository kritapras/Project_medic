<?php
$servername = "localhost";
$username = "root"; 
$password = "raspberry";
$dbname = "medicine"; 
$tbname2 = "timetake";
$medicine_time=array();

$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql2="SELECT timeeat FROM $tbname2 ";
    $result2 = $conn->query($sql2);
    while($row2 = $result2->fetch_assoc()) {
    $medicine_time[]=$row2['timeeat'];
    }
	echo json_encode($medicine_time);
$conn->close();
?>