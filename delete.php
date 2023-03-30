<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "koperasi";
$table_name = "peminjaman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Delete data
$sql = "DELETE FROM $table_name ";
$id = $_GET["id"];


if ($conn->query($sql) === TRUE) {
  //echo "Record deleted successfully";
  header("Location: index.php"); // tambahkan baris ini
  exit(); // tambahkan baris ini
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
