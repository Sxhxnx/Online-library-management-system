<?php
include 'db.php';

$sql = "SELECT id, name, email, phone, join_date FROM members";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Members</title>
</head>
<body>
    <h2>Members List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Join Date</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["email"]. "</td>
                        <td>" . $row["phone"]. "</td>
                        <td>" . $row["join_date"]. "</td>
                        <td><a href='delete_member.php?id=" . $row["id"] . "'>Delete</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No members found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
