<?php
function topFunc($title)
{
	echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',"\n";
	echo'<html xmlns="http://www.w3.org/1999/xhtml">',"\n";
	echo'<head>',"\n";
	echo'<link rel="stylesheet" type="text/css" href = "style.css" />',"\n";
	echo'<meta http-equiv="content-type" content="text/html; charset=utf-8" />',"\n";
	echo '<title>'.$title.'</title>',"\n";
	echo '</head>',"\n";
	echo '<body>',"\n";
}

function banner($header)
{
		echo'<div id="banner">',"\n";
		echo '<h1>',"\n";
		echo "Welcome to OurMazon","\n";
		echo '<br />',"\n";
		echo '</h1>',"\n";
		echo '<h2>',"\n";
		echo $header ,"\n";
		echo '</h2>',"\n";
		echo '</div>',"\n";
}
function leftDiv($linktitle)
{
	
	echo'<div id = "left">',"\n";
	echo'<p>',"\n";
	echo $linktitle,"\n";
	echo'</p>',"\n";
	echo '<ul>',"\n";
	echo '<li><a href="update.php"> update item</a> </li>',"\n";
	echo '<li><a href="add.php">Add Item</a></li>',"\n";
	echo '<li><a href="delete.php">Delete Item</a></li>',"\n";
	echo '<li><a href="newHome.php">back home</a></li>',"\n";
	echo '</ul>',"\n";;		
	
	
}
function closediv()
{
	echo'</div>',"\n";
}
function rightDiv()
{
	echo'<div id="bottomright">',"\n";
	echo'<p>',"\n";
	echo"","\n";
	echo'</p>',"\n";
	
}
function bottom()
{
	echo'</body>',"\n";
	echo'</html>',"\n";
}
function paragraph($para)
{
	echo '<p>'.$para.'</p>',"\n";
}
function secondrightDivBegain()
{
	echo '<div id="bottomright">',"\n";
}
	
function secondrightDivEnd()
{
	echo '</div>',"\n";
}

function textFeild($feildName,$feildID,$feildName2,$feildID2,$feildName3,$feildID3,$feildName4,$feildID4,$feildName5,$feildID5,$feildName6,$feildID6,$feildName7,$feildID7,$action,$value)
{
	echo '<form action="'.$action.'" method="POST">',"\n";
	echo '<p>',"\n";
	echo $feildName.': <input type="text" name='.'"'.$feildID.'"'. ' value=' .'"'.$value.'"'. '/><br />',"\n";
	echo '<br />',"\n";
	echo $feildName2.': <input type="text" name='.'"'.$feildID2.'"'. ' value=' .'"'.$value.'"'. '/><br />',"\n";
	echo '<br />',"\n";
	echo $feildName3.': <input type="text" name='.'"'.$feildID3.'"'. ' value=' .'"'.$value.'"'. '/><br />',"\n";
	echo '<br />',"\n";
	echo $feildName4.': <input type="text" name='.'"'.$feildID4.'"'. ' value=' .'"'.$value.'"'. '/><br />',"\n";
	echo '<br />',"\n";
	echo $feildName5.': <input type="text" name='.'"'.$feildID5.'"'. ' value=' .'"'.$value.'"'. '/><br />',"\n";
	echo '<br />',"\n";
	echo $feildName6.': <input type="text" name='.'"'.$feildID6.'"'. ' value=' .'"'.$value.'"'. '/><br />',"\n";
	echo '<br />',"\n";
	echo $feildName7.': <input type="text" name='.'"'.$feildID7.'"'. ' value=' .'"'.$value.'"'. '/><br />',"\n";
	echo '<br />',"\n";
	echo '<input type="submit" value="Submit" />',"\n";
	echo '</p>',"\n";
	echo '</form> ',"\n";
}



function loginLeft($linktitle)
{
	echo'<div id = "left">',"\n";
	echo'<p>',"\n";
	echo $linktitle,"\n";
	echo'</p>',"\n";
	echo '<ul>',"\n";
	echo '<li><a href="prac3.php">back home</a></li>',"\n";
	echo '</ul>',"\n";;		
}

function dropDownMenu($filterCond,$filterCat,$filterCond2,$filterCat2,$filterCond3,$filterCat3)
{
	echo '<form action="process.php" method="post">',"\n";
	echo '<select name='.$filterCond.'>',"\n";
	echo '<option value="none">none</option>',"\n";
	while($row = $filterCat->fetch_assoc()){
		echo '<option value="'.$row["category"].'">'.$row["category"].'</option>',"\n";
	}
	echo '</select>',"\n";
	echo '<select name='.$filterCond2.'>',"\n";
	echo '<option value="none">none</option>',"\n";
	while($row = $filterCat2->fetch_assoc()){
		echo '<option value="'.$row["category2"].'">'.$row["category2"].'</option>',"\n";
	}
	echo '</select>',"\n";
	
	echo '<select name='.$filterCond3.'>',"\n";
	echo '<option value="none">none</option>',"\n";
	while($row = $filterCat3->fetch_assoc()){
		echo '<option value="'.$row["category3"].'">'.$row["category3"].'</option>',"\n";
	}
	echo '</select>',"\n";
	echo '<input type="submit" value="Submit">',"\n";
	echo '</form>',"\n";
}

?>