<?php
$servername = "localhost";
$username = "root"; 
$password = "raspberry";
$dbname = "medicine"; 
$tbname2 = "medicine_status";
$medicine_status=array();

$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql2="SELECT status FROM $tbname2 ";
    $result2 = $conn->query($sql2);
    while($row2 = $result2->fetch_assoc()) {
    $medicine_status[]=$row2;
    }
    $buff1 = $medicine_status[0];
    $buff2 = $medicine_status[1];
    $buff3 = $medicine_status[2];
    $buff4 = $medicine_status[3];
    $buff5 = $medicine_status[4];
    $buff6 = $medicine_status[5];
    $buff7 = $medicine_status[6];
    $buff8 = $medicine_status[7];
    $buff9 = $medicine_status[8];
    $buff10 = $medicine_status[9];
    $buff11 = $medicine_status[10];
    $buff12 = $medicine_status[11];
    $buff13 = $medicine_status[12];
    $buff14 = $medicine_status[13];
    $buff15 = $medicine_status[14];
    $buff16 = $medicine_status[15];
    $buff17 = $medicine_status[16];
    $buff18 = $medicine_status[17];
    $buff19 = $medicine_status[18];
    $buff20 = $medicine_status[19];
    $buff21 = $medicine_status[20];
    $buff22 = $medicine_status[21];
    $buff23 = $medicine_status[22];
	 $buff24 = $medicine_status[23];
    
    //print_r($medicine_status);
    
    $med1_count = $buff1['status'];
    $med2_count = $buff2['status'];
    $med3_count = $buff3['status'];
    $med1_take_count = $buff4['status'];
    $med2_take_count = $buff5['status'];
    $med3_take_count = $buff6['status'];
    $med1_take_before = $buff7['status'];
    $med2_take_before = $buff8['status'];
    $med3_take_before = $buff9['status'];
    $med1_meal_mor = $buff10['status'];
    $med2_meal_mor = $buff11['status'];
    $med3_meal_mor = $buff12['status'];
    $med1_meal_atn = $buff13['status'];
    $med2_meal_atn = $buff14['status'];
    $med3_meal_atn = $buff15['status'];
    $med1_meal_evn = $buff16['status'];
    $med2_meal_evn = $buff17['status'];
    $med3_meal_evn = $buff18['status'];
    $med1_meal_nig = $buff19['status'];
    $med2_meal_nig = $buff20['status'];
    $med3_meal_nig = $buff21['status'];
    $med1_sol = $buff22['status'];
    $med2_sol = $buff23['status'];
    $med3_sol = $buff24['status'];
    
    $medicJSON['med1_count']= $buff1['status'];
    $medicJSON['med2_count']= $buff2['status'];
    $medicJSON['med3_count']= $buff3['status'];
    $medicJSON['med1_take_count']= $buff4['status'];
    $medicJSON['med2_take_count']= $buff5['status'];
    $medicJSON['med3_take_count']= $buff6['status'];
    $medicJSON['med1_take_before']= $buff7['status'];
    $medicJSON['med2_take_before']= $buff8['status'];
    $medicJSON['med3_take_before']= $buff9['status'];
    $medicJSON['med1_meal_mor']= $buff10['status'];
    $medicJSON['med2_meal_mor']= $buff11['status'];
    $medicJSON['med3_meal_mor']= $buff12['status'];
    $medicJSON['med1_meal_atn']= $buff13['status'];
    $medicJSON['med2_meal_atn']= $buff14['status'];
    $medicJSON['med3_meal_atn']= $buff15['status'];
    $medicJSON['med1_meal_evn']= $buff16['status'];
    $medicJSON['med2_meal_evn']= $buff17['status'];
    $medicJSON['med3_meal_evn']= $buff18['status'];
    $medicJSON['med1_meal_nig']= $buff19['status'];
    $medicJSON['med2_meal_nig']= $buff20['status'];
    $medicJSON['med3_meal_nig']= $buff21['status'];
    $medicJSON['med1_sol']= $buff22['status'];
    $medicJSON['med2_sol']= $buff23['status'];
    $medicJSON['med3_sol']= $buff24['status'];
    //print_r ($medicJSON);

    echo json_encode($medicJSON);
$conn->close();
?>