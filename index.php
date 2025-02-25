<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>User Information</h2>
    <form action="save_update.php" method="post">
        <label for="id">ID:</label>
        <input type="text" name="id" placeholder="Enter ID" required><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter Name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        
		<button type="submit" name="action" value="save">Save</button>
        <button type="submit" name="action" value="update">Update</button>
		<button type="submit" name="action" value="delete">Delete</button>
		<button type="submit" name="action" value="view">View</button>
    </form>
</body>
</html>
