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

<?

include("inc.php");

$result = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' ORDER BY Released DESC");
$num_phones = mysql_numrows($result);

$result4g = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND 4G='1' ORDER BY Released DESC");
$num_phones_4g = mysql_numrows($result4g);

$Acer = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Acer'");
$num_Acer = mysql_numrows($Acer);
$Alcatel = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Alcatel'");
$num_Alcatel = mysql_numrows($Alcatel);
$Asus = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Asus'");
$num_Asus = mysql_numrows($Asus);
$Cat = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Cat'");
$num_Cat = mysql_numrows($Cat);
$Dell = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Dell'");
$num_Dell = mysql_numrows($Dell);
$Gigabyte = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Gigabyte'");
$num_Gigabyte = mysql_numrows($Gigabyte);
$HTC = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='HTC'");
$num_HTC = mysql_numrows($HTC);
$Huawei = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Huawei'");
$num_Huawei = mysql_numrows($Huawei);
$Inq = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Inq'");
$num_Inq = mysql_numrows($Inq);
$JCB = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='JCB'");
$num_JCB = mysql_numrows($JCB);
$Kazam = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Kazam'");
$num_Kazam = mysql_numrows($Kazam);
$LG = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='LG'");
$num_LG = mysql_numrows($LG);
$Lumigon = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Lumigon'");
$num_Lumigon = mysql_numrows($Lumigon);
$Motorola = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Motorola'");
$num_Motorola = mysql_numrows($Motorola);
$Panasonic = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Panasonic'");
$num_Panasonic = mysql_numrows($Panasonic);
$Prestigio = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Prestigio'");
$num_Prestigio = mysql_numrows($Prestigio);
$Samsung = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Samsung'");
$num_Samsung = mysql_numrows($Samsung);
$Sony = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Sony'");
$num_Sony = mysql_numrows($Sony);
$SonyEricsson = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='Sony Ericsson'");
$num_SonyEricsson = mysql_numrows($SonyEricsson);
$TCT = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='TCT'");
$num_TCT = mysql_numrows($TCT);
$ZTE = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND MANUFACTURER='ZTE'");
$num_ZTE = mysql_numrows($ZTE);

$r2008 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND RELEASED >= '2008-01-01' AND RELEASED < '2008-12-31'");
$num_r2008 = mysql_numrows($r2008);
$r2009 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND RELEASED >= '2009-01-01' AND RELEASED < '2009-12-31'");
$num_r2009 = mysql_numrows($r2009);
$r2010 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND RELEASED >= '2010-01-01' AND RELEASED < '2010-12-31'");
$num_r2010 = mysql_numrows($r2010);
$r2011 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND RELEASED >= '2011-01-01' AND RELEASED < '2011-12-31'");
$num_r2011 = mysql_numrows($r2011);
$r2012 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND RELEASED >= '2012-01-01' AND RELEASED < '2012-12-31'");
$num_r2012 = mysql_numrows($r2012);
$r2013 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND RELEASED >= '2013-01-01' AND RELEASED < '2013-12-31'");
$num_r2013 = mysql_numrows($r2013);
$r2014 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND RELEASED >= '2014-01-01' AND RELEASED < '2014-12-31'");
$num_r2014 = mysql_numrows($r2014);

$touch = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND FORMFACTOR='Touch'");
$num_touch = mysql_numrows($touch);
$touchslider = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND FORMFACTOR='Touch Slider'");
$num_touchslider = mysql_numrows($touchslider);
$touchqwerty = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND FORMFACTOR='Touch Qwerty'");
$num_touchqwerty = mysql_numrows($touchqwerty);

$core1 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND CPUCORES=1");
$num_core1 = mysql_numrows($core1);
$core2 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND CPUCORES=2");
$num_core2 = mysql_numrows($core2);
$core4 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND CPUCORES=4");
$num_core4 = mysql_numrows($core4);
$core8 = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND CPUCORES=8");
$num_core8 = mysql_numrows($core8);

$portrait = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND `Resolution Height` > `Resolution Width`");
$num_portrait = mysql_numrows($portrait);
$landscape = mysql_query("SELECT * FROM Phones WHERE OS='Android' AND UK='1' AND `Resolution Height` < `Resolution Width`");
$num_landscape = mysql_numrows($landscape);

mysql_close();
?>

<br>
<b>Please note that as of 31 Dec 2013, this project/list is now mothballed as I no longer have the time to keep it up to date, apologies!</b><br>
<br>
Android powered phones available in the UK. Column headings can be clicked to sort the table.<br>
<br>
<table>
<tr>
	<td align="right">Acer:</td>
	<td><? echo $num_Acer; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">2008:</td>
	<td><? echo $num_r2008; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">Touch Only:</td>
	<td><? echo $num_touch; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">Single Core CPU:</td>
	<td><? echo $num_core1; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">Portrait Screens:</td>
	<td><? echo $num_portrait; ?></td>
</tr>
<tr>
	<td align="right">Alcatel:</td>
	<td><? echo $num_Alcatel; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">2009:</td>
	<td><? echo $num_r2009; ?></td>
	<td>&nbsp;</td>
	<td align="right">Touch Slider:</td>
	<td><? echo $num_touchslider; ?></td>
	<td>&nbsp;</td>
	<td align="right">Dual Core CPU:</td>
	<td><? echo $num_core2; ?></td>
	<td>&nbsp;</td>
	<td align="right">Landscape Screens:</td>
	<td><? echo $num_landscape; ?></td>
</tr>
<tr>
	<td align="right">Asus:</td>
	<td><? echo $num_Asus; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">2010:</td>
	<td><? echo $num_r2010; ?></td>
	<td>&nbsp;</td>
	<td align="right">Touch Qwerty:</td>
	<td><? echo $num_touchqwerty; ?></td>
	<td>&nbsp;</td>
	<td align="right">Quad Core CPU:</td>
	<td><? echo $num_core4; ?></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Cat:</td>
	<td><? echo $num_Cat; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">2011:</td>
	<td><? echo $num_r2011; ?></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td align="right">Octa Core CPU:</td>
	<td><? echo $num_core8; ?></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Dell:</td>
	<td><? echo $num_Dell; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">2012:</td>
	<td><? echo $num_r2012; ?></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Gigabyte:</td>
	<td><? echo $num_Gigabyte; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">2013:</td>
	<td><? echo $num_r2013; ?></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">HTC:</td>
	<td><? echo $num_HTC; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td align="right">2014:</td>
	<td><? echo $num_r2014; ?></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Huawei:</td>
	<td><? echo $num_Huawei; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Inq:</td>
	<td><? echo $num_Inq; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">JCB:</td>
	<td><? echo $num_JCB; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Kazam:</td>
	<td><? echo $num_Kazam; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">LG:</td>
	<td><? echo $num_LG; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Lumigon:</td>
	<td><? echo $num_Lumigon; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Motorola:</td>
	<td><? echo $num_Motorola; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Panasonic:</td>
	<td><? echo $num_Panasonic; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Prestigio:</td>
	<td><? echo $num_Prestigio; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Samsung:</td>
	<td><? echo $num_Samsung; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Sony Ericsson:</td>
	<td><? echo $num_SonyEricsson; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">Sony:</td>
	<td><? echo $num_Sony; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td align="right">TCT:</td>
	<td><? echo $num_TCT; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td align="right">4G Phones:</td>
	<td><? echo $num_phones_4g; ?></td>
</tr>
<tr>
	<td align="right">ZTE:</td>
	<td><? echo $num_ZTE; ?></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td align="right">Total Phones:</td>
	<td><? echo $num_phones; ?></td>
</tr>
</table>
<br>

<table border="1" cellspacing="0" cellpadding="4" id="PhoneTable" class="tablesorter">
<thead>
<tr>
<th>&nbsp;</th>
<th><a class="thead" href="">Manufacturer</a></th>
<th><a class="thead" href="">Phone</a></th>
<th><a class="thead" href="">Version</a></th>
<th><a class="thead" href="">Skin/UI</a></th>
<th><a class="thead" href="">Form Factor</a></th>
<th><a class="thead" href="">Width</a></th>
<th><a class="thead" href="">Height</a></th>
<th><a class="thead" href="">Thickness</a></th>
<th><a class="thead" href="">Battery Capacity</a></th>
<th><a class="thead" href="">Released</a></th>
<th><a class="thead" href="">4G/LTE</a></th>
<th><a class="thead" href="">Weight</a></th>
<th><a class="thead" href="">Screen<br>Size</a></th>
<th><a class="thead" href="">Screen<br>Type</a></th>
<th><a class="thead" href="">Screen<br>Resolution</a></th>
<th><a class="thead" href="">CPU</a></th>
<th><a class="thead" href="">RAM</a></th>
<th><a class="thead" href="">Onboard<br>Storage</a></th>
<th><a class="thead" href="">WiFi</a></th>
<th><a class="thead" href="">Camera<br>/Flash</a></th>
<th><a class="thead" href="">Video Camera</a></th>
</tr>
</thead>
<tbody>
<?

$i=0;
while ($i < mysql_numrows($result))
{
?>
<tr>
<td bgcolor="white" align="center"><a href="phones/<? echo mysql_result($result,$i,"Phones.Name"); ?>.jpg"><img src="phones/_<? echo mysql_result($result,$i,"Phones.Name"); ?>.jpg" alt="<? echo mysql_result($result,$i,"Phones.Name"); ?>" height="75" border="0"></a></td>
<td><? echo mysql_result($result,$i,"Manufacturer"); ?></td>
<td><? echo mysql_result($result,$i,"Name"); if (mysql_result($result,$i,"Model")!=null) echo '<br>(', mysql_result($result,$i,"Model"), ')'; ?></td>
<td><? echo mysql_result($result,$i,"Version"); ?></td>
<td><? if (mysql_result($result,$i,"UI")=="") echo '&nbsp;'; else echo mysql_result($result,$i,"UI"); ?></td>
<td><? echo mysql_result($result,$i,"FormFactor"); ?></td>
<td><? echo mysql_result($result,$i,"Width"); ?>mm</td>
<td><? echo mysql_result($result,$i,"Height"); ?>mm</td>
<td><? echo mysql_result($result,$i,"Thickness"); ?>mm</td>
<td><? echo mysql_result($result,$i,"Battery Capacity"); ?>mAh</td>
<td><? echo FormatDate(mysql_result($result,$i,"Released")); ?></td>
<td><? if (mysql_result($result,$i,"4G")>0) echo 'Yes'; else echo '&nbsp;'; ?></td>
<td><? echo mysql_result($result,$i,"Weight"); ?>g</td>
<td><? echo mysql_result($result,$i,"Screen Size"); ?>&#34;</td>
<td><? echo mysql_result($result,$i,"Touch Type") . ',<br>' . mysql_result($result,$i,"Screen Type"); ?></td>
<td><? echo mysql_result($result,$i,"Resolution Width") . ' x ' . mysql_result($result,$i,"Resolution Height"); ?></td>
<td><? echo mysql_result($result,$i,"CPU"); if (mysql_result($result,$i,"CPU")>10) echo 'MHz'; else echo 'GHz'; if (mysql_result($result,$i,"CPUCores")>1) echo '<br>' . mysql_result($result,$i,"CPUCores") . ' cores'; ?></td>
<td><? echo mysql_result($result,$i,"RAM"); if (mysql_result($result,$i,"RAM")<33) echo 'GB'; else echo 'MB'; ?></td>
<td><? echo mysql_result($result,$i,"ROM"); if (mysql_result($result,$i,"ROM")>64) echo 'MB'; else echo 'GB'; ?></td>
<td><? if (mysql_result($result,$i,"WiFi B")!=0) echo 'b'; else echo '-'; if (mysql_result($result,$i,"WiFi G")!=0) echo '/g'; if (mysql_result($result,$i,"WiFi N")!=0) echo '/n'; if (mysql_result($result,$i,"WiFi AC")!=0) echo '/ac'; ?></td>
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
				var height = /[0-9].*mm/i;
				var batt = /[0-9].*mAh/i;
				var rom = /[0-9]{1,}GB/i;
				var year = /(2008|2009|2010|2011|2012)/i;

				if(str.match(rom)) {
					var disk = str.match(rom)[0].substring(0,str.match(rom)[0].length-2);
					if(disk < 65) disk = disk * 1000;
					return disk; }
				else if(str.match(weight)) {
					return str.match(weight)[0].substring(0,str.match(weight)[0].length-1) }
				else if(str.match(ram)) {
					return str.match(ram)[0].substring(0,str.match(ram)[0].length-2) }
				else if(str.match(batt)) {
					return str.match(batt)[0].substring(0,str.match(batt)[0].length-3) }
				else if(str.match(height)) {
					return str.match(height)[0].substring(0,str.match(height)[0].length-2) }
				else if(str.match(cpu)) {
					var clock = str.match(cpu)[0].substring(0,str.match(cpu)[0].length-3);
					if(clock < 10) clock = clock * 1000;
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