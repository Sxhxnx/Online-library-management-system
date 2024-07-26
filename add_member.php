<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $join_date = $_POST['join_date'];

    $sql = "INSERT INTO members (name, email, phone, join_date) VALUES ('$name', '$email', '$phone', '$join_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New member added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
</head>
<body>
    <h2>Add Member</h2>
    <form method="post" action="add_member.php">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Phone: <input type="text" name="phone" required><br>
        Join Date: <input type="date" name="join_date" required><br>
        <input type="submit" value="Add Member">
    </form>
</body>
</html>
