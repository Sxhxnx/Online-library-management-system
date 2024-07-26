<?php
include 'db.php';

$sql = "SELECT id, title, author, published_year, genre FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Books</title>
</head>
<body>
    <h2>Books List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>Genre</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["title"]. "</td>
                        <td>" . $row["author"]. "</td>
                        <td>" . $row["published_year"]. "</td>
                        <td>" . $row["genre"]. "</td>
                        <td><a href='delete_book.php?id=" . $row["id"] . "'>Delete</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No books found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
