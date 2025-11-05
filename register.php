<?php
// Database connection settings
$servername = "localhost";
$username = "root";  // Default in XAMPP
$password = "";      // Leave empty unless you set one
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['text_field'];
$password = $_POST['password_field'];
$email = $_POST['email_field'];
$phone = $_POST['phone_field'];
$gender = $_POST['gender_field'];
$dob = $_POST['dob_field'];
$address = $_POST['address_field'];
$website = $_POST['url_field'];
$search = $_POST['search_field'];
$number = $_POST['number_field'];
$range = $_POST['range_field'];
$color = $_POST['color_field'];
$file = $_FILES['file_field']['name'] ?? '';
$time = $_POST['time_field'];
$month = $_POST['month_field'];
$week = $_POST['week_field'];

// File upload (optional)
if (!empty($_FILES['file_field']['name'])) {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $targetFile = $targetDir . basename($_FILES["file_field"]["name"]);
    move_uploaded_file($_FILES["file_field"]["tmp_name"], $targetFile);
}

// SQL insert query
$sql = "INSERT INTO users (name, password, email, phone, gender, dob, address, website, search_term, number_field, range_field, color_field, file_name, time_field, month_field, week_field)
VALUES ('$name', '$password', '$email', '$phone', '$gender', '$dob', '$address', '$website', '$search', '$number', '$range', '$color', '$file', '$time', '$month', '$week')";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration successful! Data saved to database.'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
