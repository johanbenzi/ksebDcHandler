<?php
$servername = "localhost";
$username = "root";
$password = "johanpass115";
$dbname = "kseb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
<?php
if(isset($_POST['billDate'])){
    $billdate = $_POST['billDate'];
}
if(isset($billdate)) {
	echo "<table>";
	echo "<tr>
    <th>Sl No</th>
    <th>Consumer Number</th>";
	$sql = "SELECT consumerNumber FROM consumersdefault WHERE toggle=1 order by consumerNumber";
    $result=mysqli_query($conn, $sql);
	$refconsumer=NULL;
	$counter=1;
	if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){
		if($refconsumer!=$row['consumerNumber']) {
			echo "</tr><tr><td>{$counter}</td><td>{$row['consumerNumber']}</td>";
			$counter++;
			$refconsumer=$row['consumerNumber'];
		}
		
	}
	
	
  }
}
unset($_POST);
?>
</body>
</html>