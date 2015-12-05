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

if(isset($_POST['consumerNumber'])){
    $consumer = $_POST['consumerNumber'];
}

if(isset($_POST['billDate'])){
    $billdate = $_POST['billDate'];
}
//checking for duplicates
$sql = "SELECT consumerNumber,billDate FROM consumersdefault WHERE consumerNumber=$consumer ORDER BY id";
$result=mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
	if($billdate==$row['billDate']){
		header("Location:/KSEB/index.php");
		exit;
	}
}


//Default database history
//checking limit of 6 and deleting first
$sql = "SELECT id FROM consumersdefault WHERE consumerNumber=$consumer ORDER BY id";
$result=mysqli_query($conn, $sql);
echo mysqli_num_rows($result);
if (mysqli_num_rows($result) == 6) {
    
	$row = mysqli_fetch_assoc($result);
	print_r($row);
	$id=$row['id'];
    echo $id;
	$sql1 = "DELETE FROM consumersdefault WHERE id=$id";
    mysqli_query($conn, $sql1);
}
//storing into default history database
$sql = "INSERT INTO consumersdefault (consumerNumber,billDate) VALUES ('$consumer','$billdate')";
if (mysqli_query($conn, $sql)) {
    echo "New Record created";
	$sql = "UPDATE consumersdefault SET toggle=1 WHERE consumerNumber=$consumer";
	mysqli_query($conn, $sql);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//storing into pending database
$sql = "INSERT INTO consumerspending (consumerNumber,billDate) VALUES ('$consumer','$billdate')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
<!doctype html>
<html>
  <head>
    <meta http-equiv="Refresh" content="0;url=/KSEB/index.php">
  </head>
</html>