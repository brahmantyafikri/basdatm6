<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Brahmantya Fikri Setya Putra</title>
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

        .navbar ul li a:hover::after {
            width: 100%;
        }

        .navbar ul li a:hover {
            color: #fff;
            transform: translateY(-2px);
        }

        .container {
            padding: 120px 20px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        .section h2 {
            background-color: #40E0D0;
            padding: 15px;
            border-radius: 10px;
            text-transform: uppercase;
            font-size: 1.8rem;
            color: #fff;
            margin: -40px -40px 20px;
            text-align: center;
        }

        .section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #666;
            text-align: justify;
        }

        .experience-item {
            margin-bottom: 30px;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 20px;
            overflow: auto; /* To contain floated image */
        }

        .experience-item strong {
            font-size: 1.3rem;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .experience-item em {
            color: #aaa;
            font-size: 0.9rem;
            display: block;
        }

        .experience-item p {
            margin: 5px 0;
        }

        /* Style for small images */
        .experience-item img {
            width: 200px; /* Width for the horizontal image */
            height: 100px; /* Height for the horizontal image */
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);    
        }

        /* Adding hover effects and slight animation for smoother transitions */
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

        /* Adjusting text alignment and experience layout */
        .experience-item p {
            margin-left: 15px;
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
        }

        /* Adding some padding and border to separate sections */
        .experience-item:last-child {
            border-bottom: none;
        }

        .section-divider {
            width: 100%;
            height: 2px;
            background-color: #40E0D0;
            margin: 30px 0;
        }

        /* Animasi hover untuk button atau link */
        a:hover {
            text-decoration: underline;
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
            <h2>Tentang Saya</h2>
            <p>Saya memiliki minat yang kuat dalam proyek analisis data dan bercita-cita menjadi seorang Analis Data. Sepanjang perjalanan akademis saya, saya secara aktif menerapkan pengetahuan saya dalam situasi praktis dan terlibat dalam organisasi mahasiswa. Saya telah menjabat di HIMATESDA dan saat ini memegang posisi di sana. Pengalaman-pengalaman ini telah mengasah keterampilan saya dalam kepemimpinan, perencanaan, dan koordinasi.</p>
            <p>Dengan latar belakang ini, saya yakin mampu bekerja secara efektif dalam tim, memecahkan masalah, dan berkomunikasi dengan jelas. Saya percaya keterampilan ini akan memungkinkan saya berkontribusi secara positif dalam proyek apa pun. Saya sangat ingin terhubung dengan para profesional yang memiliki minat dan tujuan serupa.</p>
        </div>
        <div class="section">
            <h2>Pendidikan</h2>
            <p><strong>SMA Negeri 2 Jombang</strong><br>Jurusan IPA<br><em>2019-2022</em></p>
            <p><strong>Universitas Airlangga</strong><br>S1-Teknologi Sains Data<br><em>2022-Present</em></p>
        </div>
        <div class="section">
            <h2>Skill</h2>
            <p><strong>Soft Skills:</strong></p>
            <ul>
                <li>Kerja sama</li>
                <li>Leadership</li>
                <li>Mudah dalam beradaptasi</li>
                <li>Mudah bergaul atau mudah beradaptasi</li>
                <li>Manajemen waktu yang baik</li>
                <li>Kemauan belajar tinggi dan semangat kerja kuat</li>
            </ul>
            <p><strong>Hard Skills:</strong></p>
            <ul>
                <li>Penggunaan MSWord, MSExcel, Capcut, Python</li>
            </ul>
        </div>
        <div class="section">
            <h2>Pengalaman Organisasi</h2>
            <div class="experience-item">
                <strong>Himpunan Mahasiswa Teknologi Sains Data UNAIR</strong>
                <h4>Wakil Ketua Himpunan</h4> <em>Feb 2024 - Present</em>
            </div>
            <div class="experience-item">
                <strong>Himpunan Mahasiswa Teknologi Sains Data UNAIR</strong>
                <h4>Staf Departemen Pengembangan Sumber Daya Manusia Divisi Kaderisasi</h4> <em>Feb 2023 - Des 2023</em>
            </div>
            <div class="experience-item">
                <strong>Sekolah BEM FTMM UNAIR</strong>
                <h4>Staf Muda Kementrian Advokasi dan Kesejahteraan Mahasiswa</h4> <em>2022</em>
            </div>
        </div>
        <div class="section">
            <h2>Pengalaman Kepanitiaan</h2>
            <div class="experience-item">
                <img src="{{ asset('images/teater.jpg') }}" alt="LKMM">
                <strong>Pentas Mandiri Teater SMA</strong> 
                <h4>Staf Divisi Perlengkapan</h4><em>2019</em>
                <p>Bertanggung jawab untuk menyiapkan segala keperluan acara seperti properti, ruangan, dan alat-alat lain yang dibutuhkan.</p>
            </div>
            <div class="experience-item">
                <img src="{{ asset('images/decup.png') }}" alt="LKMM">
                <strong>Dekan Cup FTMM 2022 oleh BEM FTMM</strong>
                <h4>Staf Divisi Keamanan</h4><em>2022</em>
                <p>Bertanggung jawab atas keamanan dan kondusifitas venue saat berlangsungnya acara, mengatur flow peserta dan penonton.</p>
            </div>
            <div class="experience-item">
                <img src="{{ asset('images/binary.jpg') }}" alt="LKMM">
                <strong>BINARY 3.0 Orientasi oleh HIMATESDA</strong>
                <h4>Koordinator Divisi Mentorship</h4><em>2023</em>
                <p>Sebagai Koordinator Mentorship, bertanggung jawab dalam merancang, mengelola, dan mengawasi program bimbingan untuk peserta orientasi. </p>
            </div>
            <div class="experience-item">
                <img src="{{ asset('images/pkm.jpg') }}" alt="LKMM">
                <strong>Workshop PKM FTMM 2023 oleh BEM FTMM</strong>
                <h4>Staf Divisi Perlengkapan dan Koordinator Lapangan</h4><em>2023</em>
                <p>Bertanggung jawab untuk menyiapkan segala keperluan acara seperti properti, ruangan, dan alat-alat lain yang dibutuhkan serta mengatur keadaan lapangan.</p>
            </div>
            <div class="experience-item">
                <img src="{{ asset('images/regter.png') }}" alt="LKMM">
                <strong>Regenerasi Terpadu oleh HIMATESDA</strong>
                <h4>Koordinator Divisi Acara</h4><em>2023</em>
                <p>Bertanggung jawab mengoordinir staf acara, konsep acara, rundown, penugasan, dan segala hal yang berkaitan dengan acara.</p>
            </div>
        </div>

        <div class="section">
            <h2>Pengalaman Pelatihan</h2>
            <div class="experience-item">
                <img src="{{ asset('images/lkmm.png') }}" alt="LKMM">
                <strong>LKMM-TD FTMM 2023</strong> <em>2023</em>
                <p>Berhasil mengikuti dan lulus latihan kepemimpinan dan manajemen mahasiswa tingkat dasar Fakultas Teknologi Maju dan Multidisiplin UNAIR </p>
            </div>
        </div>
    </div>
</body>
</html>
