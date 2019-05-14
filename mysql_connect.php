 <?php
$servername = "localhost";
$username = "root";
$password = "at";
$dbname = "myDB";

// Create connection
//$conn = new mysqli($servername, $username, $password);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

/*
// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/

/*
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
 * 
 */

/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES "
        . "('tai', 'tran', 'tai2.tran@lge.com')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Table MyGuests created successfully, last inserted ID is:".$last_id;
} else {
    echo "Error creating table: " . $conn->error;
}
*/

$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John','Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('julie','Ton', 'julie@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('alex','Deoe', 'alex@example.com');";

if ($conn->multi_query($sql)) {
    echo "ok";
} else {
    echo "error" .$sql. "<br>" .$conn->errno;
}

$conn->close();

?> 

