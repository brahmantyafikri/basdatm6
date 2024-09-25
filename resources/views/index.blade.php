<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Benjamin Sicat</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        /* Styling untuk navbar dengan gradien dan hover effect */
        .navbar {
            background: linear-gradient(90deg, #D8BFD8, #40E0D0);            
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin: 0 20px;
            position: relative; /* For underline animation */
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 1rem;
            padding: 10px;
            transition: color 0.3s ease;
        }

        /* Styling underline effect on hover */
        .navbar ul li a::after {
            content: '';
            display: block;
            width: 0;
            height: 3px;
            background: white;
            transition: width 0.3s;
            position: absolute;
            left: 0;
            bottom: -5px;
        }

        .navbar ul li a:hover::after {
            width: 100%;
        }

        .navbar ul li a:hover {
            color: #fff;
            transform: translateY(-2px); /* Slight upward movement */
        }

        /* Styling untuk kontainer utama */
        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            padding-top: 70px; /* Space for navbar */
        }

        .text-section {
            width: 50%;
            padding: 50px;
        }

        .text-section h1 {
            font-family: 'Poppins', serif;
            font-size: 4rem;
            margin: 0;
        }

        .text-section p {
            font-size: 1.2rem;
            margin-top: 10px;
            color: #666;
        }

        .image-section {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Frame styling for image */
        .image-section img {
            width: 50%;
            height: auto;
            object-fit: cover;
            border: 10px solid #fff; /* White border around the image */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s ease; /* Add a transition effect */
        }

        /* Optional hover effect for interactivity */
        .image-section img:hover {
            transform: scale(1.05); /* Slight zoom on hover */
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3); /* More intense shadow on hover */
        }

        .projects-note {
            font-size: 0.9rem;
            margin-top: 20px;
            color: #aaa;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar Section -->
    <nav class="navbar">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="portfolio">Portfolio</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="{{ route('portfolios.manage') }}">Manajemen Portofolio</a>

        </ul>
    </nav>

    <!-- Main Content Section -->
    <div class="container">
        <!-- Text Section -->
        <div class="text-section">
            <h1>Brahmantya Fikri Setya Putra</h1>
            <h2>Data Science Enthusiast</h2>
            <p>Data Science Technology Undergraduate Student</p>
            <p>Universitas Airlangga Surabaya Indonesia</p>
            <p class="projects-note">5th Semester</p>
        </div>

        <!-- Image Section -->
        <div class="image-section">
            <img src="{{ asset('images/foto.png') }}" alt="Photography Example">
        </div>
    </div>

</body>
</html>
