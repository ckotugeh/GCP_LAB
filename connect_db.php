<?php
$username=filter_input=(INPUT_POST, "username");
$password=filter_input=(INPUT_POST, "password");
if(!empty($username)){
	if(!empty($password)){
$host = "localhost";
$username = "root"; 
$password = " "; 
$dbname="employees";


// Create connection
$conn = new mysqli($host, $username, " ", $dbname);

 
// Check connection

 if (mysqli_connect_error()){
    die("Connection failed: " .mysqli_connect_error()).".mysqli_connect_error());
}
else{
	$sql "INSERT INTO login("username", "password")
	value($username, $password)";
	if(conn->query($sql)){	
}
echo "Connection successful";
}
	else{
		echo "Error:".$sql"<br>" conn->error;
	}
	$conn->close();
}
?>


