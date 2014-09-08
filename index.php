<?php 
$mysqli = new mysqli("localhost", "root", "3389200", "test", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	echo "Connection Success!";
}
mysqli_close($mysqli);
phpinfo(); 
?> 