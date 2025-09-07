<?php
$servername = "localhost";
$username = "root";  
$password = "";
$dbname = "book_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//insert
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    $sql = "INSERT INTO books (title, author, year) VALUES ('$title', '$author', '$year')";

    if ($conn->query($sql) === TRUE) {
        echo "Book added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
