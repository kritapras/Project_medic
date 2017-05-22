<!DOCTYPE html>
<html>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<head>
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
<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "medicine"; 
$tbname = "medicine";
$tbname2 = "rfid";
$bool = True;
$num = 3 + 4;
$str = "A string here";
$rifd=[];

$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql2="SELECT rfid FROM $tbname2 ";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_array();
    $rfid=$row2['0'];
    echo $rfid."<br>";
    $sql3="SELECT rfid FROM $tbname2 WHERE status=2 ";
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_array();
    $toggle=$row3['0'];
    echo $toggle."<br>";

    $sql="SELECT * FROM $tbname WHERE No = '".$rfid."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $No=$row['No'];
    $List=$row['List'];
    $Properties=$row['Properties'];
    $Howto=$row['Howto'];
    $warning=$row['warning'];
    echo "<p>".$No."</p>";
    echo "<p>".$List."</p>";
    echo "<p>".$Properties."</p>";
    echo "<p>".$Howto."</p>";
    echo "<p>".$warning."</p>";

$conn->close();
?>
<script type="text/javascript">
var toggle = <?php echo $toggle ?>; // boolean outputs "" if false, "1" if true

// numeric value, both with and without quotes
var num = <?php echo $num ?>;
var str_num = "<?php echo $num ?>";
var str = "<?php echo $str ?>";
var No = "<?php echo $No ?>";
var List = "<?php echo $List ?>";
var Properties = "<?php echo $Properties ?>"; 
var Howto = "<?php echo $Howto ?>";
var warning = "<?php echo $warning ?>";

</script>
</head>
<body>
<p id="demo"></p>
<script>
document.getElementById("demo").innerHTML = Howto ;

</script>
</body>
</html>