<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$mother_name = $_POST['mother_name'];
$father_name = $_POST['father_name'];
$education = $_POST['education'];
$village = $_POST['village'];
$post_office = $_POST['post_office'];
$state = $_POST['state'];
$district = $_POST['district'];
$sub_district = $_POST['sub_district'];

$sql = "INSERT INTO registrations (name, mother_name, father_name, education, village, post_office, state, district, sub_district)
VALUES ('$name', '$mother_name', '$father_name', '$education', '$village', '$post_office', '$state', '$district', '$sub_district')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
