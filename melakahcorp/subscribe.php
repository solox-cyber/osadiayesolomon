<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subscribe'])){
$email = $_POST['email'];

?>

<?php
$servername = "localhost";
$username = "osadiaye_solomon";
$password = "Youngforever@12345";
$dbname = "osadiaye_solomon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO melakah (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
  echo "Subscriber created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>


