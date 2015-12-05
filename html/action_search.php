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
if(isset($_GET['method'])) {
	$method=$_GET['method'];
}

if($method==1) {
	echo "<table>";
	echo "<tr>
    <th>Sl No</th>
    <th>Consumer Number</th>
    <th>Date 1</th>
	<th>Date 2</th>
	<th>Date 3</th>
	<th>Date 4</th>
	<th>Date 5</th>
	<th>Date 6</th>";
	$sql = "SELECT consumerNumber, billDate FROM consumerspending order by consumerNumber";
    $result=mysqli_query($conn, $sql);
	$refconsumer=NULL;
	$counter=1;
	if (mysqli_num_rows($result) > 0) {
	  while($row = mysqli_fetch_assoc($result)){
		if($refconsumer==$row['consumerNumber']) {
			echo "<td>{$row['billDate']}</td>";	
		}
		if($refconsumer!=$row['consumerNumber']) {
			echo "</tr><tr><td>{$counter}</td><td>{$row['consumerNumber']}</td><td>{$row['billDate']}</td>";
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