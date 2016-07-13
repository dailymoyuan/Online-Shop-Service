<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ourstore";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM item";
$judge = 0;

if(strcmp($_POST['category'],'none')!=0)
{
	$sql = $sql . " WHERE category  = '" .$_POST['category']."'";
	$judge = 1;
}
if(strcmp($_POST['category2'],"none")!=0)
{
	
	if($judge ==0)
	{
		$sql = $sql. " WHERE ";
	}
	else
	{
		$sql = $sql. " AND ";
	}
	$sql = $sql . "category2  = '" .$_POST['category2']."'";
	$judge++;

}
if(strcmp($_POST['category3'],"none")!=0)
{
	if($judge ==0)
	{
		$sql = $sql. " WHERE ";
	}
	else
	{
		$sql = $sql. " AND ";
	}
	$sql = $sql . " category3  = '" .$_POST['category3']."'";
}


$result = $conn->query($sql);
echo'<link rel="stylesheet" type="text/css" href = "style.css" />',"\n";
echo '<h1>search result</h1>',"\n";
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

?>



  
    
  


