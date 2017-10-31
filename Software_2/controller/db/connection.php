<? 
$servername = "localhost";
$username = "stobon";
$password = "000";
$dbname = "sw2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>