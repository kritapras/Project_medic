<!DOCTYPE html>
<html>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "medicine"; 
$tbname = "medicine";
$tbname2 = "rfid";
$q = intval($_GET['q']);

$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql="SELECT * FROM $tbname WHERE No = '".$q."'";
    $result = $conn->query($sql);
  


while($row = $result->fetch_assoc()) {
    echo "<p>ตัวยาเลขที่ :" . $row['No'] ."</p>";
    echo "<p>ชื่อยา :" . $row['List'] . "</p>";
    echo "<p>สรรพคุณ :" . $row['Properties'] . "</p>";
    echo "<p>วิธีการรับประทาน :" . $row['Howto'] . "</p>";
    echo "<p>คำเตือน:" . $row['warning'] . "</p>";
}

$conn->close();
?>
</body>
</html>