<?php
$servername = "localhost";
$username = "root"; 
$password = "raspberry";
$dbname = "medicine"; 
$tbname = "timetake";


  $usr_time1 = $_REQUEST["usr_time1"];
    $usr_time2 = $_REQUEST["usr_time2"];
    $usr_time3 = $_REQUEST["usr_time3"];
    $usr_time4 = $_REQUEST["usr_time4"];
    

$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "เวลารับประทานอาหารเช้า :".$usr_time1."\n";
    echo "เวลารับประทานอาหารเที่ยง :".$usr_time2."\n";
    echo "เวลารับประทานอาหารเย็น :".$usr_time3."\n";
    echo "เวลารับประทานยาก่อนนอน :".$usr_time4."\n";
	 $sql8="  UPDATE timeedit  SET timeedit =now() WHERE title='time_edit'";
    $sql1="  UPDATE timetake 
            SET timeeat= '$usr_time1'
            WHERE period='morning'";
    $sql2="  UPDATE timetake
            SET timeeat='$usr_time2'
            WHERE period='afternoon'";
    $sql3="  UPDATE timetake
            SET timeeat='$usr_time3'
            WHERE period='evening'";
    $sql4="  UPDATE timetake
            SET timeeat='$usr_time4'
            WHERE period='night'";

if ($conn->query($sql8) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}/*
if ($conn->query($sql1) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql3) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql4) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
*/

$conn->close();
?>