<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycle Description</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .motorcycle-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .motorcycle-image img {
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .motorcycle-description, .motorcycle-specs {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .motorcycle-description h2, .motorcycle-specs h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .motorcycle-description p {
            line-height: 1.6;
        }

        .motorcycle-specs ul {
            list-style-type: none;
            padding: 0;
        }

        .motorcycle-specs li {
            margin-bottom: 5px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
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
        <h1>Sports Bike</h1>
    </header>

    <div class="container">
        <div class="motorcycle-image">
            <img src="sportsbike.jpg" alt="Super Bike">
        </div>

        <div class="motorcycle-description">
            <h2>Description</h2>
            <p>This sleek sport bike is designed for speed and performance. With its powerful engine, aerodynamic fairing, and aggressive riding position, you'll experience the thrill of high-speed riding.</p>
        </div>

        <div class="motorcycle-specs">
            <h2>Specifications</h2>
            <ul>
                <li><strong>Engine:</strong> 1000cc Inline-Four</li>
                <li><strong>Horsepower:</strong> 200 hp</li>
                <li><strong>Torque:</strong> 90 lb-ft</li>
                <li><strong>Brakes:</strong> Dual Disc Front, Single Disc Rear</li>
                <li><strong>Suspension:</strong> Fully Adjustable Front and Rear</li>
            </ul>
        </div>
    </div>

    <footer>
        &copy; 2024 JUMBO BIKES
    </footer>
</body>
</html>