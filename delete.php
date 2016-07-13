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

$sql = "SELECT * FROM item";
$result = $conn->query($sql);
$result2 = $conn->query($sql);

topFunc("our shop");
banner("This is our shop ");
leftDiv("Please login your account");
closediv();
secondrightDivBegain();


echo '<h1>Select Item ID You Want to Delete</h1>',"\n";
echo '<table border="1" style="width:100%">',"\n";
echo '<tr>',"\n";
echo '<td>Item ID</td>',"\n";
echo '<td>Item Name</td> ',"\n";
echo '<td>Price</td>',"\n";
echo '<td>Stock</td>',"\n";
echo '</tr>',"\n";
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) 
	{

		echo '<tr>',"\n";
		echo '<td>'.$row["itemid"].'</td>',"\n"	;
		echo '<td>'.$row["name"].'</td>',"\n";
		echo '<td>'.$row["price"].'</td>',"\n";
		echo '<td>'.$row["amount"].'</td>',"\n";
		echo '</tr>',"\n";
 
	}
}
echo '</table>',"\n";
 echo '</br>';
echo '<form action="deleteProcess.php" method="post">',"\n";
	echo '<select name= deleteID>',"\n";
	//echo '<option value="none">none</option>',"\n";

	
	while($row = $result2->fetch_assoc()){
		echo '<option value="'.$row["itemid"].'">'.$row["itemid"].'</option>',"\n";
	}
	echo '</select>',"\n";

	echo '<input type="submit" value="Submit">',"\n";
	echo '</form>',"\n";

secondrightDivEnd();
closediv();

bottom();
?>