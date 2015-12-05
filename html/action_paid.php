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
	$sql = "DELETE FROM consumerspending WHERE consumerNumber=$consumer";
    mysqli_query($conn, $sql);

    $sql = "UPDATE consumersdefault SET toggle=0 WHERE consumerNumber=$consumer";
    mysqli_query($conn, $sql);
	unset($_POST['consumerNumber']);
}

if(isset($_POST['consumerNumber'])){
    $consumerdel = $_POST['consumerNumberdel'];
	$sql = "DELETE FROM consumerspending WHERE consumerNumber=$consumer";
    mysqli_query($conn, $sql);

    $sql = "DELETE from consumersdefault WHERE consumerNumber=$consumerdel";
    mysqli_query($conn, $sql);
	unset($_POST['consumerNumberdel']);
}

mysqli_close($conn);
?> 
<!doctype html>
<html>
  <head>
    <meta http-equiv="Refresh" content="1;url=/KSEB/modify.php">
  </head>
</html>