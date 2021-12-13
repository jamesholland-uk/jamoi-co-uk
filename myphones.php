<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<title>My Phones</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>

<body>

<?php include("tophalf.txt"); ?> 

<div align="center">

My own "personal" phones.<br><br>

<table border="1" cellspacing="0" cellpadding="4" align="center">
<tr>
<th>&nbsp;</th>
<th>Date</th>
<th>Manufacturer</th>
<th>Phone</th>
<th>OS</th>
</tr>
<?
include("inc.php");

$sql="SELECT * FROM JamoiPhones JOIN Phones ON JamoiPhones.Name=Phones.Name WHERE Ownership='Personal' ORDER BY JamoiPhones.Purchased DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		// print_r($row);

?>
<tr>
<td bgcolor="white" align="center"><a href="phones/<? echo $row["Name"]; ?>.jpg"><img src="phones/_<? echo $row["Name"]; ?>.jpg" alt="<? echo $row["Name"]; ?>" border="0"></a></td>
<td><? echo $row["Purchased"]; ?><? if ($row["Comment"]!="0") echo '<br>(', $row["Comment"], ')'; ?></td>
<td><? echo $row["Manufacturer"]; ?></td>
<td><? echo $row["Name"]; ?></td>
<td><? echo $row["OS"]; ?></td>
</tr>
<?php
	}
}
else {
	echo "0 results";
}
?>
</table>
<br>
<br>
<br>
<br>

My work phones.<br><br>

<table border="1" cellspacing="0" cellpadding="4" align="center">
<tr>
<th>&nbsp;</th>
<th>Date</th>
<th>Manufacturer</th>
<th>Phone</th>
<th>OS</th>
</tr>
<?

$sql2="SELECT * FROM JamoiPhones JOIN Phones ON JamoiPhones.Name=Phones.Name WHERE Ownership='Work' ORDER BY JamoiPhones.Purchased DESC";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
	// output data of each row
	while($row = $result2->fetch_assoc()) {
		// print_r($row);
?>
<tr>
<td bgcolor="white" align="center"><a href="phones/<? echo $row["Name"]; ?>.jpg"><img src="phones/_<? echo $row["Name"]; ?>.jpg" alt="<? echo $row["Name"]; ?>" border="0"></a></td>
<td><? echo $row["Purchased"]; ?><? if ($row["Comment"]!="0") echo '<br>(', $row["Comment"], ')'; ?></td>
<td><? echo $row["Manufacturer"]; ?></td>
<td><? echo $row["Name"]; ?></td>
<td><? echo $row["OS"]; ?></td>
</tr>
<?php
	}
}
else {
	echo "0 results";
}

$conn->close();

?>
</table>

</div>

<?php include("bottomhalf.txt"); ?> 

</body>

</html>