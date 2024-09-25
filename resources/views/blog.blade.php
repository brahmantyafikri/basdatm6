<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Brahmantya Fikri Setya Putra</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
            padding: 100px 20px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .section {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 30px;
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
            margin: -30px -30px 20px;
            text-align: center;
        }
        .blog-post {
            margin-bottom: 20px;
        }
        .blog-post h3 {
            font-size: 1.3rem;
            color: #333;
        }
        .blog-post p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
            text-align: justify;
        }
        .blog-post a {
            text-decoration: none;
            color: #40E0D0;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .blog-post a:hover {
            color: #333;
        }
        .blog-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
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
            <h2>Blog</h2>

            <div class="blog-post">
                <img class="blog-image" src="{{ asset('images/blog2.jpg') }}" alt="Data Science">
                <h3>Pentingnya Data Science dalam Bisnis di Era Digitalisasi</h3>
                <p>Pada zaman digital seperti yang terjadi sekarang, data merupakan salah satu hal yang dianggap penting. Definisi data itu sendiri adalah kumpulan angka, karakter, symbol, gambar, huruf, dan lain lain yang mengambarkan fakta atau informasi yang berkaitan dengan suatu keadaan. Melalui data kita bisa memperoleh banyak informasi penting yang dapat digunakan dalam banyak hal. Dengan adanya data bisa membantu kita untuk melakukan pengambilan keputusan atau kebijaka yang sesuai dengan keadaan yang ada. Pada dasarnya, keputusan atau kebijakan yang baik diambil berdasarkan data yang aktual.</p>
                <a href="https://retizen.republika.co.id/posts/212911/pentingnya-data-science-dalam-bisnis-di-era-digitalisasi">Read more</a>
            </div>

            <div class="blog-post">
                <img class="blog-image" src="{{ asset('images/blog1.jpg') }}" alt="Conservation Forests">
                <h3>“Memetakan Masa Depan Hijau: Konservasi Hutan Indonesia dengan Sains Data”</h3>
                <p>Di tengah deru modernisasi dan pertumbuhan ekonomi, Indonesia berdiri di persimpangan jalan antara pembangunan dan konservasi. Hutan tropis yang luas, yang menjadi rumah bagi keanekaragaman hayati yang tak terhitung, kini menghadapi tekanan dari berbagai sisi. Dalam upaya mencapai Tujuan Pembangunan Berkelanjutan (SDG) Nomor 15, yakni "Mengelola Hutan Berkelanjutan, Memerangi Desertifikasi, Menghentikan dan Membalikkan Degradasi Lahan serta Menghentikan Kehilangan Keanekaragaman Hayati", Indonesia dapat memanfaatkan kekuatan sains data.</p>
                <a href="https://kumparan.com/fikrigamingyt/memetakan-masa-depan-hijau-konservasi-hutan-indonesia-dengan-sains-data-21kjgny4AeT">Read more</a>
            </div>
        </div>
    </div>
</body>
</html>
