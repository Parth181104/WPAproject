<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preowned Bikes</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color:aqua;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }
        nav {
            text-align: center;
            padding: 1em 0;
            background-color: #555;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }
        .featured-bikes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px 0;
            color:aqua;
        }
        .bike {
            background-color: #fff;
            margin: 10px;
            padding: 15px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .bike:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        .bike img {
            width: 100%;
            height: auto;
        }
        .bike h3 {
            margin: 10px 0;
        }
        .bike p {
            font-size: 1.1em;
            color: #555;
        }
        .categories {
            margin: 20px 0;
            text-align: center;
            color: aqua;
        }
        .categories ul {
            list-style: none;
            padding: 0;
            color: aqua;
        }
        .categories li {
            display: inline;
            margin: 0 10px;
            color: aqua;
        }
        .categories a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            color: aqua;
        }
        .categories a:hover {
            color: #007BFF;
        }
        .contact {
            margin: 20px 0;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
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
        <h1>JUMBO BIKES</h1>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#featured">Featured Bikes</a>
        <a href="#categories">Categories</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="container">
        <section id="featured" class="featured-bikes">
            <div class="bike">
                <img src="https://cars.usnews.com/images/new-features/widget-section/2020_Suzuki_Hayabusa_1340.jpg"alt="Mountain Bike">
                <h3>Sports Bike</h3>
                <p>Price: $15000</p>
            </div>
            <div class="bike">
                <img src="https://images.prismic.io/riders-sharecom/342bcbf4-ea9c-4681-af66-66a41c51b032_3+%282%29+-+2024+Vulcan+S.png?auto=compress,format" alt="Cruiser Bike">
                <h3>Cruiser Bike</h3>
                <p>Price: $5400</p>
            </div>
            <div class="bike">
                <img src="https://images.news18.com/ibnlive/uploads/2022/12/pure-ev-ecodryft-16711846094x3.jpg?impolicy=website&width=640&height=480"  alt="Commuter Bike">
                <h3>Commuter Bike</h3>
                <p>Price: $3500</p>
            </div>
            <div class="bike">
                <img src="https://bd.gaadicdn.com/processedimages/kawasaki/kawasaki-ninja-zx-10r/640X309/kawasaki-ninja-zx-10r6319d1a741565.jpg" alt="Super Bike">
                <h3>Super Bike</h3>
                <p>Price: $16000</p>
            </div>
            <div class="bike">
                <img src="https://bd.gaadicdn.com/processedimages/royal-enfield/himalayan-450/source/himalayan-4506565ccada995d.jpg" alt="Adventure Bike">
                <h3>Adventure Bike</h3>
                <p>Price: $6000</p>
            </div>
        </section>
        <section id="categories" class="categories">
            <h2>Categories</h2>
            <ul>
                <li><a href="#">Mountain Bikes</a></li>
                <li><a href="#">Cruise Bikes</a></li>
                <li><a href="#">Commuter Bikes</a></li>
                <li><a href="#">Super Bikes</a></li>
                <li><a href="#">Adventure Bikes</a></li>
            </ul>
        </section>
        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <p>Email: info@jumbobikes.com</p>
            <p>Phone: (123) 456-7890</p>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Preowned Bikes. All rights reserved.</p>
    </footer>
</body>
</html>
