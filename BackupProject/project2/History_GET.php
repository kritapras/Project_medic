<?php
$servername = "localhost";
$username = "root"; 
$password = "raspberry";
$dbname = "medicine"; 
$tbname2 = "timeedit";
$medicine_time=array();

$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	
    $sql10="SELECT timeedit FROM $tbname2 ";
    $result = $conn->query($sql10);
    while($row = $result->fetch_assoc()) {
    	$medicine_time[]=$row;
    }
    //echo json_encode($medicine_time);
    $medicJSON[0]=$medicine_time[0]['timeedit'];
    $medicJSON[1]=$medicine_time[1]['timeedit'];
     $medicJSON[2]=$medicine_time[2]['timeedit'];
     $medicJSON[3]=$medicine_time[3]['timeedit'];
    echo json_encode($medicJSON);
$conn->close();
?>