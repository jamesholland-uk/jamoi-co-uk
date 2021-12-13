<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<title>Tunes</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>

<body>

<?php include("tophalf.txt"); ?> 

<a href="http://www.last.fm/user/jamoiholland">
<?php

$curl = curl_init('http://ws.audioscrobbler.com/2.0/?method=user.getinfo&user=jamoiholland&api_key=b2e79ec401ff78b71c5f7b119b68dd7d');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
$xml = simplexml_load_string($result);

echo "<img src=\"" . $xml->user->image[1] . "\" border=\"0\">";

?>
&nbsp;&nbsp;jamoiholland</a>

<div class="container"><div class="tune"></div>
<?php

$curl = curl_init('http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=jamoiholland&limit=100&api_key=b2e79ec401ff78b71c5f7b119b68dd7d');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
$xml = simplexml_load_string($result);




// $xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=jamoiholland&limit=100&api_key=b2e79ec401ff78b71c5f7b119b68dd7d");

// printf("<pre>%s</pre>\n", print_r($xml->recenttracks, 1));

foreach ($xml->recenttracks->track as $track) {
  echo "<div class=\"tune\">";
  if($track->attributes() == "true") echo "Now Playing: "; else echo "" . $track->date . "<br>";
  echo "" . $track->artist . " - <a href=\"" . $track->url . "\">" . $track->name . "</a>";
  //if($track->album != "") echo $track->album . ")\n"; else echo " -\n";
  echo "</div>";

}
?>
</div>

<?php include("bottomhalf.txt"); ?> 

</body>

</html>