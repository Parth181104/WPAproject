<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    body {
        background: rgba(0, 0, 0, 0.6) url('bike.jpg') center center fixed;
        background-size: cover;
        background-blend-mode: darken;
    }
</style>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch input and sanitize
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    // Database connection credentials
    $servername = "localhost";
    $db_username = "parthd"; // Change to your DB username
    $db_password = "root"; // Change to your DB password
    $dbname = "testdb"; // Change to your DB name

    // Create database connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepared statement to prevent SQL injection
    $sql = "SELECT password FROM register WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify hashed password
        if (password_verify($password, $row['password'])) {
            echo "<div class='alert alert-success text-center'>Login successful!</div>";
            // Redirect to another page (optional)
            // header("Location: dashboard.php");
        } else {
            echo "<div class='alert alert-danger text-center'>Login failed. Invalid email or password.</div>";
        }
    } else {
        echo "<div class='alert alert-danger text-center'>Login failed. Invalid email or password.</div>";
    }

    $stmt->close();
    $conn->close();
}

// Sanitize user input
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
