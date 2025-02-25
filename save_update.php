<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "user_management"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection Successful <br>";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$action = $_POST['action'];

if ($action == 'save') {
    $sql = "INSERT INTO users (id, name, email) VALUES ('$id', '$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New user saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

elseif ($action == 'update') {
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

elseif ($action == 'delete') {
    $sql = "DELETE FROM users WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

elseif ($action == 'view') {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<h3>All Users:</h3>";
        echo "<table border='1'>
        <tr><th>ID</th>
        <th>Name</th>
        <th>Email</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "No Users Found.";
    }
}

$conn->close();
?>
