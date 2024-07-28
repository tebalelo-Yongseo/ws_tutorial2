<?php
// Start the session
session_start();

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'username',
                      'password', 'database_name');

// Check if the connection was successful
if(!$conn)
{
 die("Database connection failed: " . mysqli_connect_error());
}

// Insert a new record into the users table
$sql = 'INSERT INTO users (username, password, email) 
        VALUES ("root", "P@$$w0rd", "tibi@fake.com")';

$result = mysqli_query($conn, $sql);

if ($result) 
{
    echo "New record inserted successfully!";
} else 
{
    echo "Error inserting record: " . mysqli_error($conn);
}

// Update an existing record in the users table
$sql = "UPDATE users 
        SET 'tibi@fake.com' 
        WHERE username = 'root'";

$result = mysqli_query($conn, $sql);

if ($result) 
{
    echo "Record updated successfully!";
} 
else 
{
    echo "Error updating record: " . mysqli_error($conn);
}

// Delete a record from the users table
$sql = 'DELETE FROM users WHERE username = "roots"';

$result = mysqli_query($conn, $sql);
if ($result) 
{
    echo "Record deleted successfully!";
} 
else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}

// Set a session variable
$_SESSION["username"] = "root";

// Display the session variable
echo "Session Username: " . $_SESSION["username"];

// Close the MySQL connection
mysqli_close($conn);


?>