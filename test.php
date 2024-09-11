<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "fus";

$conn = new mysqli($hostname, $username,$password,$database);

if ($conn-> connect_error) {
	die("Connection Failed".$conn->connect_error);
}
else{
    echo " Success Full";
    
}


$sql = "SELECT * FROM Azad";

$Result = $conn -> query($sql );

if ($Result ->num_rows > 0)
{
    
    $row = mysqli_fetch_array($Result);
    $pr = implode($row);
    echo "$pr";
}
else
{
    echo "Failed Query";
}

$conn -> close();

?>