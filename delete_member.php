<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM members WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Member deleted successfully";
    } else {
        echo "Error deleting member: " . $conn->error;
    }

    $conn->close();
}

header("Location: view_members.php");
?>
