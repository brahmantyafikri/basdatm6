<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Brahmantya Fikri Setya Putra</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

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
            position: relative;
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
            transform: translateY(-2px);
        }

        .container {
            padding: 120px 20px 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .section {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            background-color: #40E0D0;
            padding: 15px;
            border-radius: 10px;
            text-transform: uppercase;
            font-size: 1.5rem;
            color: #fff;
            margin: -40px -40px 20px;
            text-align: center;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-align: center;
            font-size: 1.2rem;
        }

        .contact-info a {
            text-decoration: none;
            color: #40E0D0;
            font-weight: bold;
            transition: color 0.3s ease;
            color: #666;
        }

        .contact-info a:hover {
            color: #333;
        }

        .contact-info i {
            margin-right: 10px;
        }

        /* Divider style */
        .divider {
            height: 2px;
            background-color: #40E0D0;
            margin: 30px 0;
        }

        /* Hover effect for links */
        .contact-info a:hover i {
            color: #333;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="portfolio">Portfolio</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="{{ route('portfolios.manage') }}">Manajemen Portofolio</a>

        </ul>
    </nav>

    <div class="container">
        <div class="section">
            <h2>Contact</h2>
            <div class="contact-info">
                <a href="mailto:fikribrahmantya04@gmail.com"><i class="fas fa-envelope"></i>Email: fikribrahmantya04@gmail.com</a>
                <div class="divider"></div>
                <a href="https://www.instagram.com/fikribrahmantya" target="_blank"><i class="fab fa-instagram"></i>Instagram: @fikribrahmantya</a>
                <div class="divider"></div>
                <a href="https://www.linkedin.com/in/brahmantyafikri/" target="_blank"><i class="fab fa-linkedin"></i>LinkedIn: Brahmantya Fikri Setya Putra</a>
            </div>
        </div>
    </div>
</body>
</html>
