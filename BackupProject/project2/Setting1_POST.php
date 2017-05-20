<?php
$servername = "localhost";
$username = "root"; 
$password = "raspberry";
$dbname = "medicine"; 
$tbname = "timetake";


    $user = $_REQUEST["user"];
    $pwd = $_REQUEST["pwd"];
    $amount = $_REQUEST["amount"];
    $add = $_REQUEST["add"];

$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "ตัวยาที่:".$user."\n";
    echo "subpakun:".$pwd."\n";
    echo "จนวนยาที่ต้อรัรทาต่อรั้ :".$amount."\n";
    echo "จนนยาที่เพ่ม".$add."\n";

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


$conn->close();
?>