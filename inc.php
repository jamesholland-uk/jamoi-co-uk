<?

$servername = "mysql.jamoi.co.uk";
$username = "jamoi";
$password = "2gwrEKG8ORk5jEH7";
$database="jamoidb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

function FormatDate($SqlDate)
{
	list($Year,$Month,$Day) = split('-',$SqlDate);
	$DateDone = date("M", mktime(0, 0, 0, $Month)) . " " . $Year;
	return $DateDone;
}
?>