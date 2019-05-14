<?php 
$servername = "localhost";
$username = "root";
$password = "at";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("connect fail: ".$conn->connect_errno);
} else echo "connect ok<br>";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    while ($row) {
        echo "id: ".$row["id"]. "-name: ".$row["firstname"]. ", ".$row["lastname"]. "<br>";       
        
        $row = $result->fetch_assoc();
    }
} else {
    echo "0 result";
}

$conn->close();




?>
