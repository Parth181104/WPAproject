<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            background: rgba(0, 0, 0, 0.6) url('bike.jpg') center center fixed;
            background-size: cover;
            background-blend-mode: darken;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        li {
            list-style-type: none;
            margin: 0;
            padding: 0;
            color: white;
            font-style: oblique;
        }

        ol {
            padding-left: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .image-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Wrap images to the next line if needed */
        }

        .image-container img {
            width: 200px;
            height: 150px;
            margin-bottom: 10px;
        }

        /* Font style for other elements */
        h1, h3, h4 {
            font-family: 'Times New Roman', serif;
            font-weight: bold;
        }

        li {
            font-family: 'Arial', sans-serif;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to JUMBO BIKES</h1>
        <h3>We at JUMBO BIKES aim at providing the best quality pre-owned Bikes for our customers<br>
            Our bikes go through a screening process which ensures that all the bikes are in perfect condition to be used<br>
            Whenever you think of bikes , visit only JUMBO BIKES
        </h3>
    </header>

    <li>
        The bikes we provide are:
        <ol>
            <li>Commuter Bikes</li>
            <li>Cruiser Bikes</li>
            <li>Adventure Bikes</li>
            <li>Sports Bikes</li>
            <li>Super Bikes</li>
        </ol>
        <p>
            <h4>
                JUMBO BIKES is India's largest platform for selling and purchasing bikes. We deal in all kinds of bikes.
            </h4>
        </p>
        <div class="image-container">
            <img src="commuter.jpg" alt="Commuter Bike">
            <img src="cruiser.jpg" alt="Cruiser Bike">
            <img src="adventure.jpg" alt="Adventure Bike">
            <img src="sportsbike.jpg" alt="Sports Bike">
            <img src="superbike.jpg" alt="Super Bike">
        </div>
    </li>

    <footer>
        <p>&copy; 2024 JUMBO BIKES</p>
        <section class="JUMBO BIKES">
</body>
</html>