<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the "user" table if it doesn't already exist
$sql = "CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


// Retrieve form data using PHP $_POST method
$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$address = $_POST['address'];

// Prepare an SQL statement to insert form data into the database
$sql = "INSERT INTO user(username, email, mobile, city, address)
        VALUES ('$username', '$email', '$mobile', '$city', '$address')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    // Redirect to index.php with a success message
    header('Location: index.php?message=Data_updated_successfully');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
