<?php echo "welkom jij daar! :)" ?>
<?php
$servername = "127.0.0.1";
$username = "tim";
$password = "test123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "connection failed";
}
echo "Connected successfully";
?> 