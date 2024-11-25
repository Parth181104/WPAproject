<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<a href="login.html"></a>
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

.container {
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
input[type="email"],
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
    background-color: cyan;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}
body{
    background: rgba(0, 0, 0, 0.6) url('bike.jpg') center center fixed;
    background-size: cover;
    background-blend-mode: darken;
}
</style>
<body>

    <div class="container">
        <h2>Registration Form</h2>
        <form action="registration.php" method="post">
            <label for="first">First Name:</label>
            <input type="text" id="first" name="first" required>

            <label for="last">Last Name:</label>
            <input type="text" id="last" name="last" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="repassword">Re-type Password:</label>
            <input type="password" id="repassword" name="repassword" required>

            <button type="submit">Register</button>
            
        </form>
    </div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

$servername = "localhost";
$user_name = "parthd";
$password = "root";
$dbname = "testdb";
// create connection 
$conn = new mysqli($servername , $user_name , $password , $dbname);

// check connection
if($conn ->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
echo "Connected Succesfully";

$first = test_input($_POST['first']);
$last = test_input($_POST['last']);
$email = test_input($_POST['email']);
$pass = test_input($_POST['password']);

$sql = "INSERT INTO register (first,last,email,pass) VALUES ('".$first."' , '".$last."', '".$email."','".$pass."')";

if($conn ->query($sql) == TRUE){
    echo "New Record Created Scuccesfully";
}  else{
        echo "Error: " .$sql . "<br>" . $conn -> error;
    }

$conn->close();
}
function test_input($data) {
    $data = trim($data); //removes blank spaces
    $data = stripslashes($data); //
    $data = htmlspecialchars($data); //
    return $data;
  }
?>
</body>
</html>

