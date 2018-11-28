
<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
?>
<head><title>none</title><link rel="manifest" href="7.webmanifest">
<link rel='stylesheet' href='mystyle.css'></link>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<form action='actions.php' method='post' multipart='' enctype='multipart/form-data'>
<table class='formy'><tr class='formy'>
<td class='formy'>VIN: <input type='text' name='VIN' size=17 maxlength=17 pattern=".{17,}" value="" id="VIN" required></td>
<input type='hidden' name='VINArray' value='VINArray'>
<td class='formy'>Miles: <input type='number' name='miles'></td>
<td class='formy'>Upload Form:<br><input type='file' name='formhtml' id='formhtml'><br></td>
<td class='formy'>Upload Image:<br><input type='file' name='formimages[]' id='formimages' multiple><br></td>
<td class="formy">Overwrite?<input type="checkbox" id="overwrite" name="overwrite"></td>
<td class="formy">Image Directory: <input type="text" size=10 name="imagedirectory" id="imagedirectory"></td>
<td class="formy">
<?php if (!isset($_POST['VIN'])) {
		echo ("<input type=\"submit\" value=\"Create Car\" formmethod=\"post\">");
	}
	else {
		echo ("<input type=\"submit\" value=\"Update Car\" formmethod=\"post\">");
	}
?>
</td>
<?php 
if(isset($_POST["VIN"])){
$_SESSION["VIN"]=$_POST["VIN"]; 
}
?>
<td><a href="logout.php">logout</a></td>
</tr></table>

<?php 
if(isset($_SESSION["firstname"])){echo "Welcome ".$_SESSION["firstname"]."!<br>";}



?>
<div id="vinDiv"></div>
<script src="jquery-3.3.1.min.js"></script>
<?php 
if(isset($_SESSION["tempcounter"])){echo $_SESSION["tempcounter"]." items were deleted, including the vehicle ".$_SESSION["VIN"]."<br>";
unset ($_SESSION["tempcounter"]);}
include "addeventfunctions.php"; ?>
