<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "parthdatar"; // Your MySQL username
    $password = "Admin@123"; // Your MySQL password
    $database = "jumbobikes"; // Your MySQL database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert data into the users table
    $sql = "INSERT INTO users (firstname,lastname, email, password) VALUES ('$firstname','$lastname' '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the login page after successful registration
        header("Location: Login.html");
        exit(); // Ensure that script execution stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>