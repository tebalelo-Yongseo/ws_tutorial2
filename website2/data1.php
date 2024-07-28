<?php
//Start a session
session_start();

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = 'P@$$w0rd';
$dbname = "database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

// Insert a new record into the users table
$insertQuery = 'INSERT INTO users (username, password, email)
                VALUES ("root", "P@$$w0rd", "tibi@fake.com")';

if (mysqli_query($conn, $insertQuery))
 {
    echo "New record created successfully. <br>";
} 
else 
{
    echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
}

// Update an existing record in the users table
$updateQuery = 'UPDATE users SET email = "updated_email@fake.com" 
                WHERE username = "root"';

if (mysqli_query($conn, $updateQuery)) 
{
    echo "Record updated successfully. <br>";
} 
else 
{
    echo "Error: " . $updateQuery . "<br>" . mysqli_error($conn);
}

// Delete a record from the users table
$deleteQuery = 'DELETE FROM users WHERE username = "root"';

if (mysqli_query($conn, $deleteQuery)) 
{
    echo "Record deleted successfully. <br>";
} 
else 
{
    echo "Error: " . $deleteQuery . "<br>" . mysqli_error($conn);
}

// Set a session variable
$_SESSION["username"] = "root";

//Display the session variable
echo "Session username: " . $_SESSION["username"];

// Close the MySQL connection
mysqli_close($conn);

?>