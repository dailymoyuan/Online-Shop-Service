<?php
include ("pratyFunctions.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ourstore";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";





$sql = "SELECT distinct category FROM item";

$result = $conn->query($sql);
$sql = "SELECT distinct category2 FROM item";
$result2 = $conn->query($sql);
$sql = "SELECT distinct category3 FROM item";
$result3 = $conn->query($sql);
mysqli_close($conn);
$cond1 = "category";
$cond2 = "category2";
$cond3 = "category3";

topFunc("our shop");
banner("This is our shop ");
leftDiv("Please login your account");
closediv();
secondrightDivBegain();
//textFeild("search","search","newHome.php","something");
dropDownMenu($cond1,$result,$cond2,$result2,$cond3,$result3);
secondrightDivEnd();
closediv();
bottom();
?>
