<?php
$servername = "localhost";
$username = "root"; 
$password = "raspberry";
$dbname = "medicine"; 
$tbname2 = "rfid";


$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
	echo "database error";
        die("Connection failed: " . $conn->connect_error);
	
    }

    $sql3="SELECT rfid FROM $tbname2 WHERE status=2";
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_array();
    //echo $result3;
    //echo $row3;
    $toggle=$row3['0'];
    echo $toggle;


$conn->close();
?>