<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<title>UK Android Phones</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="stylesheet.css" type="text/css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<script type="text/javascript" src="jquery-1.4.3.min.js"></script> 
<script type="text/javascript" src="jquery.tablesorter.min.js"></script> 
</head>

<body>

<?php include("tophalf.txt"); ?> 

<br>
<b>Please note that as of 31 Dec 2013, this project/list is now mothballed as I no longer have the time to keep it up to date, apologies!</b><br>
<br>
Android powered phones available in the UK. Column headings can be clicked to sort the table. Detailed version with extra columns <a href="androidphonesdetailed.php">here</a>.<br>
<br>

<table border="1" cellspacing="0" cellpadding="4" id="PhoneTable" class="tablesorter">
<thead>
<tr>
<th>&nbsp;</th>
<th><a class="thead" href="">Manufacturer</a></th>
<th><a class="thead" href="">Phone</a></th>
<th><a class="thead" href="">Released</a></th>
<th><a class="thead" href="">Version</a></th>
<th><a class="thead" href="">Weight</a></th>
<th><a class="thead" href="">Screen<br>Size</a></th>
<th><a class="thead" href="">Screen<br>Type</a></th>
<th><a class="thead" href="">Screen<br>Resolution</a></th>
<th><a class="thead" href="">CPU</a></th>
<th><a class="thead" href="">RAM</a></th>
<th><a class="thead" href="">4G/LTE</a></th>
<th><a class="thead" href="">Camera<br>/Flash</a></th>
<th><a class="thead" href="">Video Camera</a></th>
</tr>
</thead>
<tbody>
<?
include("inc.php");

$query="SELECT * FROM Phones WHERE OS='Android' AND UK='1' ORDER BY Released DESC";
$result=mysql_query($query);
mysql_close();

$i=0;
while ($i < mysql_numrows($result))
{
?>
<tr>
<td bgcolor="white" align="center"><a href="phones/<? echo mysql_result($result,$i,"Phones.Name"); ?>.jpg"><img src="phones/_<? echo mysql_result($result,$i,"Phones.Name"); ?>.jpg" alt="<? echo mysql_result($result,$i,"Phones.Name"); ?>" height="75" border="0"></a></td>
<td><? echo mysql_result($result,$i,"Manufacturer"); ?></td>
<td><? echo mysql_result($result,$i,"Name"); if (mysql_result($result,$i,"Model")!=null) echo '<br>(', mysql_result($result,$i,"Model"), ')'; ?></td>
<td><? echo FormatDate(mysql_result($result,$i,"Released")); ?></td>
<td><? echo mysql_result($result,$i,"Version"); ?></td>
<td><? echo mysql_result($result,$i,"Weight"); ?>g</td>
<td><? echo mysql_result($result,$i,"Screen Size"); ?>&#34;</td>
<td><? echo mysql_result($result,$i,"Touch Type") . ',<br>' . mysql_result($result,$i,"Screen Type"); ?></td>
<td><? echo mysql_result($result,$i,"Resolution Width") . ' x ' . mysql_result($result,$i,"Resolution Height"); ?></td>
<td><? echo mysql_result($result,$i,"CPU"); if (mysql_result($result,$i,"CPU")>10) echo 'MHz'; else echo 'GHz'; if (mysql_result($result,$i,"CPUCores")>1) echo '<br>' . mysql_result($result,$i,"CPUCores") . ' cores'; ?></td>
<td><? echo mysql_result($result,$i,"RAM"); if (mysql_result($result,$i,"RAM")<33) echo 'GB'; else echo 'MB'; ?></td>
<td><? if (mysql_result($result,$i,"4G")>0) echo 'Yes'; else echo '&nbsp;'; ?></td>
<td><? echo mysql_result($result,$i,"Camera MP"); ?> MP<br><? if (mysql_result($result,$i,"Camera Flash")==0) echo 'No'; else echo mysql_result($result,$i,"Camera Flash Type"); ?> flash</td>
<td><? if (mysql_result($result,$i,"Video Resolution Width") + mysql_result($result,$i,"Video Resolution Height")==0) echo '? x ?'; else  echo mysql_result($result,$i,"Video Resolution Width") . ' x ' . mysql_result($result,$i,"Video Resolution Height"); ?><br><? if (mysql_result($result,$i,"Video FPS")>0) echo mysql_result($result,$i,"Video FPS"); else echo '? '; ?>fps</td>
</tr>
<?php
	$i++;
}
?>
</tbody>
</table>
<script type="text/javascript">
function log(s){if(typeof console!="undefined"&&typeof console.debug!="undefined"){console.log(s);}else{alert(s);}}
	$(document).ready(function() {
		$("#PhoneTable").tablesorter({
			debug: false, headers: { 0: { sorter: false} }, textExtraction: function(node)
			{ 
				var str = node.innerHTML;				
				var weight = /[0-9]{2,}g/i;
				var ram = /[0-9]{2,}MB/i;
				var cpu = /[0-9].*Hz/i;
				var year = /(2008|2009|2010|2011|2012)/i;
				if(str.match(weight)) {
					return str.match(weight)[0].substring(0,str.match(weight)[0].length-1) }
				else if(str.match(ram)) {
					return str.match(ram)[0].substring(0,str.match(ram)[0].length-2) }
				else if(str.match(cpu)) {
					var clock = str.match(cpu)[0].substring(0,str.match(cpu)[0].length-3);
					if (clock < 10) clock = clock * 1000;
					return clock; }
				else if(str.match(year)) {
					if(str.indexOf("Jan") != -1) return str.match(year)[0] + '-01';
					else if(str.indexOf("Feb") != -1) return str.match(year)[0] + '-02';
					else if(str.indexOf("Mar") != -1) return str.match(year)[0] + '-03';
					else if(str.indexOf("Apr") != -1) return str.match(year)[0] + '-04';
					else if(str.indexOf("May") != -1) return str.match(year)[0] + '-05';
					else if(str.indexOf("Jun") != -1) return str.match(year)[0] + '-06';
					else if(str.indexOf("Jul") != -1) return str.match(year)[0] + '-07';
					else if(str.indexOf("Aug") != -1) return str.match(year)[0] + '-08';
					else if(str.indexOf("Sep") != -1) return str.match(year)[0] + '-09';
					else if(str.indexOf("Oct") != -1) return str.match(year)[0] + '-10';
					else if(str.indexOf("Nov") != -1) return str.match(year)[0] + '-11';
					else if(str.indexOf("Dec") != -1) return str.match(year)[0] + '-12';
					else return str; }
				else {
					return str; }
        		}
		});
	}); 
</script>
<br>
<br>
Click <a href="feedback.php">here</a> to report incorrect data, provide feedback, etc
<br>
<br>
Inspired by a <a href="http://www.stevelitchfield.com/s60history.htm">similar table</a> by <a href="http://twitter.com/stevelitchfield">Steve Litchfield</a>.

<?php include("bottomhalf.txt"); ?> 

</body>

</html>