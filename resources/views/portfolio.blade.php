<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Brahmantya Fikri Setya Putra</title>
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
        .portfolio-item {
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .portfolio-item img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .portfolio-item h3 {
            font-size: 1.4rem;
            color: #333;
            margin: 10px 0;
        }
        .portfolio-item p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
            text-align: justify;

        }
        .portfolio-item a {
            text-decoration: none;
            color: #40E0D0;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .portfolio-item a:hover {
            color: #333;
        }

        .portfolio-item2 img {
            max-width: 50%;
            height: auto;
            border-radius: 10px;
            display: block;
            margin: 0 auto;
        }

        .portfolio-item2 {
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .portfolio-item2 h3 {
            font-size: 1.4rem;
            color: #333;
            margin: 10px 0;
        }
        .portfolio-item2 p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
            text-align: justify;

        }
        .portfolio-item2 a {
            text-decoration: none;
            color: #40E0D0;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .portfolio-item2 a:hover {
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
            <h2>Portfolio</h2>
            
            <div class="portfolio-item">
            <img src="{{ asset('images/evd.png') }}" alt="EVD">
                <h3>Analisis Preferensi Bahasa Pemrograman R dan Python Dalam Penggunaan Praktikum, Tugas, dan Proyek Pribadi Mahasiswa Teknologi Sains Data 2022</h3>
                <p>Portofolio ini menampilkan analisis preferensi mahasiswa Teknologi Sains Data 2022 dalam penggunaan bahasa pemrograman R dan Python. Data diperoleh melalui survei menggunakan Google Form dan diolah dengan teknik preprocessing, termasuk penanganan missing value dan outlier. Hasil analisis menunjukkan mayoritas responden (85,3%) lebih memilih Python untuk kenyamanan dan kemudahan penggunaan dibandingkan R, meskipun penguasaan kedua bahasa cukup seimbang antara laki-laki dan perempuan. Penelitian ini memberikan wawasan mendalam mengenai preferensi bahasa pemrograman di kalangan mahasiswa.


</p>
                <a href="https://drive.google.com/file/d/1ntdUkM7mKMgRoQNBP7JDX1FaN_PJXjiV/view?usp=sharing" target="_blank">View Project</a>
            </div>

            <div class="portfolio-item">
            <img src="{{ asset('images/alpro2.png') }}" alt="EVD">
                <h3>WebApp dengan berbasis machine learning
                dengan konsep recommendation system dengan nama “REMINI : Recipe Mining”.</h3>
                <p>Sistem ini berfungsi untuk membantu orang-orang dalam mengetahui resep-resep makanan
yang sesuai dengan keinginan pengguna. Pengguna akan menginputkan bahan makanan,
preferensi rasa, estimasi waktu, dan preferensi diet. Setelah pengguna menginputkan data,
akan muncul rekomendasi makanan berdasarkan data yang diinputkan. Setelah pengguna
memilih salah satu resep, akan muncul bahan-bahan yang diperlukan, langkah-langkah
pembuatan beserta detail lain dari makanan tersebut. Rekomendasi makanan lain yang mirip
juga akan muncul.</p>
                <a href="https://drive.google.com/file/d/17L_wlzJeThfbPvM2tJZtf6ldLT56vmvm/view?usp=sharing" target="_blank">View Project</a>
            </div>
            <div class="portfolio-item2">
            <img src="{{ asset('images/UAS_SNP_Kelompok J (10)_Poster.png') }}" alt="EVD">
                <h3>Analisis Persentase Penduduk Miskin di Perkotaan dan Pedesaan Indonesia: Studi Kasus Provinsi pada Bulan Maret 2023</h3>
                <p>Portofolio ini menampilkan analisis persentase penduduk miskin di wilayah perkotaan dan pedesaan Indonesia, dengan studi kasus pada provinsi-provinsi di Indonesia pada bulan Maret 2023. Menggunakan metode statistik seperti Uji Wilcoxon Signed Rank dan Uji T Test, penelitian ini menunjukkan adanya perbedaan signifikan antara distribusi sampel di perkotaan dan pedesaan, serta korelasi yang signifikan antara persentase kemiskinan di kedua wilayah tersebut. Analisis ini memberikan wawasan mengenai ketimpangan kemiskinan dan menjadi dasar dalam merancang kebijakan yang lebih efektif untuk mengatasi masalah kemiskinan di Indonesia.







</p>
                <a href="https://drive.google.com/file/d/1-IBX1kk2LJarYGUc9PuW5ZwiN5QB9HVQ/view?usp=sharing" target="_blank">View Project</a>
            </div>
            <!-- Add more portfolio items as needed -->

        </div>
    </div>
</body>
</html>
