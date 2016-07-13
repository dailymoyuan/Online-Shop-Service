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

$sql = "delete from item where itemid = '" .$_POST['deleteID']."'";

if ($conn->query($sql) == TRUE) {
    $message=  "Record deleted successfully";
} else {
   $message =  "Error deleting record: " . $conn->error;
}

topFunc("our shop");
banner("This is our shop ");
leftDiv("Please login your account");
closediv();
secondrightDivBegain();
echo '<h1>'.$message.'</h1>',"\n";
secondrightDivEnd();
closediv();
bottom();
?>