<?php
include ("pratyFunctions.php");
$error_message1 = "";
$error_message2 = "";
$error_message3 = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ourstore";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$itemid = $_POST['itemid'];
$name = $_POST['Name'];
$category = $_POST['category']; 
$category2= $_POST['category2'];
$category3= $_POST['category3'];
$price= $_POST['price'];
$amount= $_POST['amount'];
$checkSql = "select * from item where itemid = '".$itemid."'";
$sql = "insert into item (itemid,name,category,category2,category3,price,amount) values ";
//echo $checkSql;
$result = $conn->query($checkSql);
if (mysqli_num_rows($result) > 0) 
{
	$error_message1 = "item id already exist please choose another one  ";
}
if(!is_numeric($price))
{
	$error_message2 =  "price needs to be a number ";
}
if(!is_int($amount))
{
	$error_message3 = "amount needs to be an integer ";
}
//echo strlen($error_message);
//echo $error_message;
if(strlen($error_message1)==0 &&strlen($error_message2)==0 &&strlen($error_message3)==0)
{
	$sql = $sql."('".$itemid."'"." , '".$name."','".$category."', '" .$category2."' , '".$category3."' , ".$price." , " .$amount.")";
	if ($conn->query($sql) === TRUE) {
    	$error_message1= "New record created successfully";
	} else {
    	$error_message1= "Error: " . $sql . "<br>" . $conn->error;
}


}
topFunc("our shop");
banner("This is our shop ");
leftDiv("Please login your account");
closediv();
secondrightDivBegain();
if(strlen($error_message1)!=0)
{
	echo '<h1>'.$error_message1.'</h1>',"\n";
	echo "<br/>";
}
if(strlen($error_message2)!=0)
{
	echo '<h1>'.$error_message2.'</h1>',"\n";
	echo "<br/>";
}
if(strlen($error_message3)!=0)
{
	echo '<h1>'.$error_message3.'</h1>',"\n";
	echo "<br/>";
}
secondrightDivEnd();
closediv();
bottom();

?>