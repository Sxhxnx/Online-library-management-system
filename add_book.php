<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO books (title, author, published_year, genre) VALUES ('$title', '$author', '$published_year', '$genre')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h2>Add Book</h2>
    <form method="post" action="add_book.php">
        Title: <input type="text" name="title" required><br>
        Author: <input type="text" name="author" required><br>
        Published Year: <input type="number" name="published_year" required><br>
        Genre: <input type="text" name="genre" required><br>
        <input type="submit" value="Add Book">
    </form>
</body>
</html>
