<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color:aqua;
        }

        header {
            background-color:#333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid aqua;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        body{
    background: rgba(0, 0, 0, 0.6) url('bike.jpg') center center fixed;
    background-size: cover;
    background-blend-mode: darken;
}
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>

    <main>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="3 " required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
        &copy; 2024 JUMBO BIKES
    </footer>
</body>
</html>