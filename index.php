<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 4 Banjarmasin</title>
    <!-- Fav Icon -->
    <link rel="icon" href="image/favicon.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,500&display=swap" rel="stylesheet">


    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>


    <!-- My Style -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <?php
    include 'koneksi.php';
    include 'ceksession.php';
    ?>
    <!-- navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">SMKN 4<span> Banjarmasin</span>.</a>

        <div class="navbar-nav">
            <a href="#home"><i data-feather="home"></i> Beranda</a>
            <a href="#about"><i data-feather="info"></i> Tentang Kami</a>
            <a href="#keahlian"><i data-feather="award"></i> Kompetensi Keahlian</a>
            <a href="#artikels"><i data-feather="grid"></i> Berita</a>
            <a href="#manajemen"><i data-feather="user-check"></i> Manajemen</a>
            <a href="#contact"><i data-feather="mail"></i> Kontak</a>
        </div>

        <div class="navbar-extra">
            <!-- <a href="#" id="search"><i data-feather="search"></i></a>
    <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1 data-aos="fade-down-right" data-aos-duration="3000">Selamat <span>Datang</span> </h1>
            <p data-aos="fade-left" data-aos-duration="3000">di website demo SMK Negeri 4 Banjarmasin</p>
            <a href="https://smkn4bjm.sch.id/" class="cta" target="_blank" data-aos="fade-up-right" data-aos-duration="3000">Official website here</a>
        </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section Start -->
    <section class="about" id="about">
        <h2 data-aos="zoom-out-down" data-aos-duration="1500"><span>Tentang </span>Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="image/smkn4.jpg" alt="Tentang Kami" data-aos="zoom-in-right" data-aos-duration="1500">
            </div>

            <div class="content" data-aos="zoom-in-left" data-aos-duration="1500">
                <h3>Profil</h3>
                <p>Nama saat ini : SMK Negeri 4 Banjarmasin</p>
                <p>Tahun didirikan : 1956</p>
                <p>Status Negeri : Negeri</p>
                <p>Waktu Penyelenggaraan : 07.30 – 16.15</p>
                <p>Alamat : Jl. Brigjend H. Hasan Basri No. 7</p>
                <p>Kota : Banjarmasin</p>
                <p>Provinsi : Kalimantan Selatan</p>
                <p>No. Telp : 0511 – 3305054</p>
                <p>Website : smkn4bjm.sch.id</p>
                <p>Email : info@smkn4bjm.sch.id</p>
                <p>Manajemen Mutu : ISO 9001-2015</p>
                <p><a href="#manajemen">Lihat selengkapnya....</a></p>
            </div>
        </div>
    </section>
    <!-- About Section end -->


    <!-- Menu Section Start -->
    <section id="keahlian" class="menu">

        <h2 data-aos="zoom-out-down"><span>Kompetensi </span>Keahlian</h2>

        <div class="row">
            <a href="datarpl.php">
                <div class="menu-card" data-aos="fade-up-right" data-aos-duration="1800">
                    <img src="image/rpl.png" alt="Espresso" class="menu-card-img">
                    <h3 class="menu-card-title">REKAYASA PERANGKAT LUNAK</h3>
            </a>
            <p class="menu-card-price">Kompetensi Keahlian Rekayasa Perangkat Lunak adalah satu kompetensi keahlian yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi dan pengembanganan perangkat lunak</p>
            <p class="menu-card-price">Kompetensi Keahlian Rekayasa Perangkat Lunak sendiri bertujuan membentuk siswa untuk menjadi tamatan yang mampu menginstal perangkat komputer personal, menginstal sistem operasi dan aplikasi, Merancang sistem informasi / business proces dan membangun suatu software atau aplikasi.</p>
        </div>

        <a href="#busana1">
            <div class="menu-card" data-aos="fade-up-left" data-aos-duration="1800">
                <img src="image/busana.png" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">TATA BUSANA</h3>
        </a>
        <p class="menu-card-price">Program Keahlian Tata Busana ialah salah satu program keahlian yang bertujuan menjadi programkeahlian bertaraf nasional / internasional yang mampu menyiapkan tenaga kerja kompeten dengan membekali peserta didik dengan pengetahuan sikap dan keterampilan bidang tata busana.</p>
        <p class="menu-card-price">Tujuan dari program keahlian ini ialah menjadikan program keahlian bertaraf nasional / internasional yang mampu menyiapkan tenaga kerja kompeten dengan membekali peserta didik dengan pengetahuan sikap dan keterampilan bidang tata busana.</p>
        </div>

        <a href="#kecantikan1">
            <div class="menu-card" data-aos="fade-up-right" data-aos-duration="1800">
                <img src="image/kecantikan.png" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">TATA KECANTIKAN</h3>
        </a>
        <p class="menu-card-price">Kompetensi keahlian Tata Kecantikan merupakan salah satu program kompetensi yang mempelajari tentang perawatan dan rias kulit maupun rambut.
        </p>
        <p class="menu-card-price">Kompetensi keahlian Tata Kecantikan sendiri bertujuanmenjadi program berstandar nasional dan internasional yang mampu menyiapkan tenaga kerja kompeten dengan membekali peserta didiknya pengetahuan, sikap dan keterampilan dibidang perawatan dan penataan rambut serta perawatan kulit dan rias wajah.</p>
        </div>

        <a href="#hotel1">
            <div class="menu-card" data-aos="fade-up-left" data-aos-duration="1800">
                <img src="image/perhotelan.png" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">AKOMODASI PERHOTELAN</h3>
        </a>
        <p class="menu-card-price">Program Keahlian Akomodasi Perhotelan merupakan kompetensi keahlian yang mempelajari tentang melaksanakan pekerjaan dilingkup Front Office sebagai Reception, Reservation, Telephone Operator dan Porter, melaksanakan pekerjaan dilingkup Housekeeping sebagai Public Area Attendant, Room Attendant, Order Taker, Linen dan Uniform Attendant dan Laundry Attendant</p>
        <p class="menu-card-price">Tujuan Program Keahlian Akomodasi Perhotelan ialah mampu menyiapkan tenaga kompeten dengan membekali peserta didik dengan pengetahuan dan keterampilan dibidang house keeping dan front office</p>
        </div>

        <a href="#musik1">
            <div class="menu-card" data-aos="fade-up-right" data-aos-duration="1800">
                <img src="image/seni.png" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">SENI MUSIK</h3>
        </a>
        <p class="menu-card-price">Program Keahlian ini memiliki tenaga ahli dibidangnya dan siswa didik yang berkompeten terbukti dengan diraihnya Juara 3 FLS2N tingkat provinsi, bidang lomba seni musik non klasik dan juara 2 lomba vokal solo berbahasa inggris tingkat kota Banjarmasin.</p>
        <p class="menu-card-price">Program Keahlian Seni musikini bertujuan menyiapakan tenaga profesional dan kompeten tingkat madya / menengah di bidang seni musik yang meliputi kompetensi instrumen mayor, band, arransemen dan komposisi. Serta pengelolaan di bidang seni pertunjukan yang berbasis kearifan lokal.</p>
        </div>

        <a href="#ulw1">
            <div class="menu-card" data-aos="fade-up-left" data-aos-duration="1800">
                <img src="image/ULW.png" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">USAHA LINTAS WISATA</h3>
        </a>
        <p class="menu-card-price">Program ini ialah pengetahuan dan sikap agar kompeten dibidang usaha perjalanan wisata ( tour guiding, ticketing, tour panning, airlines & MICE ) Dan juga mampu menciptakan lapangan kerja sendiri.</p>
        <p class="menu-card-price">Tujuan dari Kompetensi Keahlian ini adalah membekali peserta didik dengan keterampilan, pengetahuan dan sikap agar kompeten dibidang usaha perjalanan wisata ( tour guiding, ticketing, tour panning, airlines & MICE ) Dan juga mampu menciptakan lapangan kerja sendiri.</p>
        </div>

        <a href="#boga1">
            <div class="menu-card" data-aos="fade-up" data-aos-duration="1800">
                <img src="image/boga.png" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">TATA BOGA</h3>
        </a>
        <p class="menu-card-price">Program Keahlian Tata Boga bertujuan menjadi program keahlian bertaraf nasional atau internasional yang mampu menyiapkantenaga kerja yang kompeten dan beriman yang dibekali dengan keterampilan, pengetahuan dibidang food product, pastry, FB Service dan pengetahuan pengelolaan dibidang tata boga.</p>
        </div>

        </div>
    </section>
    <!-- Menu Section End -->

    <!-- Artikel Start -->

    <section class="artikels" id="artikels">
        <p id="news1"></p>

        <h2 style="padding-bottom: 1em;" data-aos="zoom-out-down"><span>Berita </span>Sekolah</h2>

        <div class="row">
            <div class="about-img" data-aos="fade-right" data-aos-duration="1800">
                <img src="image/jobfair.jpeg" alt="Tentang Kami">
            </div>

            <div class="content" data-aos="fade-left" data-aos-duration="1800">
                <h3>SMKN 4 Banjarmasin Gelar Kegiatan Job Fair 2023</h3>
                <p>SMKN 4 Banjarmasin menggelar Job Fair 2023 di Taman Budaya Kalsel di Jalan Brigjen H Hasan Basri, Selasa (5/9/2023) hingga Rabu (6/9/2023).
                    Total ada 15 perusahaan yang ikut dalam pelaksanaan job fair kali ini dengan ratusan lowongan pekerjaan.
                    Kegiatan job fair kali ini digelar dalam rangka kegiatan sekolah unggulan serta peringatan HUT SMKN 4 ke-67.
                    Ketua Panitia Kegiatan yang juga Wakil Kepala SMKN 4 Banjarmasin Bidang Hubungan Masyarakat, Erika Yolanda mengatakan, total ada 15 perusahaan yang bergabung.
                    Disebutkannya, jika prioritas pelamar nantinya dari SMKN 4. Meski ia tidak menutup kemungkinan dari luar SMKN 4 juga bisa mendaftar dan kemungkinan diterima. <a href="berita1.php">baca selengkapnya....</a> </p>
            </div>
        </div>

        <p id="news2"></p>
        <h2>. <span>. </span>.</h2>
        <div class="row">
            <div class="about-img" data-aos="fade-right" data-aos-duration="1800">
                <img src="image/news2.jpeg" alt="Tentang Kami">
            </div>
            <div class="content" data-aos="fade-left" data-aos-duration="1800">
                <h3>IHT Persiapan pembelajaran implementasi kurikulum merdeka guru di sekolah</h3>
                <p>
                    IHT Persiapan pembelajaran implementasi kurikulum merdeka guru di sekolah tahun pelajaran 2023/2024 adalah suatu kegiatan yang diadakan untuk persiapan pembelajaran dalam kurikulum merdeka agar dapat membantu guru untuk memahami potensi siswa secara lebih mendalam dan memberikan guru panduan tentang bagaimana mengidentifikasi minat dan potensi serta gaya belajar siswa, sehingga pembelajaran dapat disesuaikan dengan kebutuhan dan minat mereka.
                    IHT persiapan pembelajaran ini juga membantu guru untuk mengeksplorasi metode pembelajaran yang dapat merangsang kreativitas siswa. Guru akan diberikan panduan tentang strategi pengajaran yang mendorong pemecahan masalah, berpikir kritis, dan kolaborasi antar siswa.
                </p>
            </div>
        </div>

        <p id="news3"></p>
        <h2>. <span>. </span>.</h2>
        <div class="row">
            <div class="about-img" data-aos="fade-right" data-aos-duration="1800">
                <img src="image/ujian.jpeg" alt="Tentang Kami">
            </div>

            <div class="content" data-aos="fade-left" data-aos-duration="1800">
                <h3>Pelaksanaan Ujian Sekolah (US) Kelas XII di SMKN 4 Banjarmasin</h3>
                <p>Beragam perasaan tengah dirasakan oleh peserta didik kelas XII saat ini karena mereka baru saja berhasil menyelesaikan pelaksanaan Ujian Kompetensi Keahlian (UKK) pada 06-17 Maret 2023 yang lalu. Akan tetapi, perjuangan belum selesai karena mereka masih harus mengikuti Ujian Sekolah (US) untuk mata pelajaran yang mereka pelajari selama di kelas XII yang sudah berlangsung sejak Senin, 27 Maret 2023 lalu hingga Kamis, 30 Maret 2023 mendatang. Ujian yang berlangsung selama lima hari itu terbagi menjadi dua sesi, yaitu sesi ke-1 yang dimulai pada 08.00-11.30 Wita dan sesi ke-2 pada 12.00-15.30 Wita setiap harinya. <a href="berita3.php">baca selengkapnya....</a></p>
            </div>
        </div>

        <p id="news4"></p>
        <h2>. <span>. </span>.</h2>
        <div class="row">
            <div class="about-img" data-aos="fade-right" data-aos-duration="1800">
                <img src="image/workshop.jpeg" alt="Tentang Kami">
            </div>

            <div class="content" data-aos="fade-left" data-aos-duration="1800">
                <h3>Workshop Sosial Media Marketing Peluputan dan Penulisan Berita seputar Dunia Pendidikan</h3>
                <p>SMKN 4 Banjarmasin, menggelar kegiatan workshop Sosial Media Marketing (SMM) terkait peliputan dan penulisan berita seputar dunia pendidikan bagi Tim SMM dan Siswa, di Aula Edotel SMKN 4 Banjarmasin, Selasa (14/3/2023).
                    Workshop ini menggandeng Banjarmasin Post sebagai narasumber. Narasumber yakni Raden Hari Tri Widodo yang juga merupakan Manager Produksi sekaligus jurnalis Banjarmasin Post.
                    Wakil Kepala SMKN 4 Banjarmasin Bidang Hubungan Masyarakat, Erika Yolanda mengatakan, kegiatan ini merupakan kegiatan rutin yang digelar untuk siswa dan Tim SMM di SMKN 4 Banjarmasin. <a href="berita4.php">baca selengkapnya....</a></p>
            </div>
        </div>

        <p id="news3"></p>
        <h2>. <span>. </span>.</h2>
        <div class="row">
            <div class="about-img" data-aos="fade-right" data-aos-duration="1800">
                <img src="image/khataman.jpeg" alt="Tentang Kami">
            </div>

            <div class="content" data-aos="fade-left" data-aos-duration="1800">
                <h3>SMKN 4 Banjarmasin Gelar Salat Dhuha dan Khataman Alquran</h3>
                <p>Sekolah Menengah Kejuruan Negeri (SMKN) 4 Banjarmasin menggelar acara Salat Dhuha dan Khataman Alquran.
                    Kegiatan ini digelar di halaman SMKN 4 Banjarmasin, pada Selasa (28/2/2023).
                    Kepala SMKN 4 Banjarmasin, Syafruddin Noor mengatakan, kegiatan khataman Alquran dan Salat Dhuha ini digelar sebelum kegiatan Ujian Kompetensi Keahlian (UKK). Rencananya UKK akan digelar pada 6 Maret mendatang atau Senin depan.
                    Total ada 10 kelas dari 7 kejuruan yang ada di SMKN 4 Banjarmasin. Dengan total 420 siswa yang mengikuti kegiatan ini.
                    Khataman Alquran ini bebernya merupakan instruksi dari Gubernur Kalimantan Selatan, Sahbirin Noor. <a href="berita5.php">baca selengkapnya....</a>
                </p>
            </div>
        </div>

        <p id="news5"></p>
        <h2>. <span>. </span>.</h2>
        <div class="row">
            <div class="about-img" data-aos="fade-right" data-aos-duration="1800">
                <img src="image/Pesantren.jpeg" alt="Tentang Kami">
            </div>

            <div class="content" data-aos="fade-left" data-aos-duration="1800">
                <h3>Pesantren Ramadhan</h3>
                <p>Marhaban Ya Ramadhan, bulan suci Ramadhan merupakan sesuatu yang patut disambut dengan gembira kedatangannya oleh seluruh umat muslim di seluruh dunia. Bulan Ramadhan merupakan bulan yang mulia dibandingkan dengan bulan-bulan lainnya karena pada bulan Ramadhan banyak sekali terdapat keberkahan dan keutamaannya. Kewajiban dalam bulan Ramadhan adalah menjalankan puasa yang merupakan rukun Islam yang ketiga. Semaraknya bulan Ramadhan ditandai dengan pelaksanaan Shalat Tarawih, sahur, buka puasa bersama, pasar Ramadhan dan tidak ketinggalan kegiatan Pesantren Ramadhan yang dilaksanakan di sekolah. <a href="berita6.php">baca selengkapnya....</a>
                </p>
            </div>
        </div>

        <p id="news3"></p>
        <h2>. <span>. </span>.</h2>
        <div class="row">
            <div class="about-img" data-aos="fade-right" data-aos-duration="1800">
                <img src="image/sawi.jpeg" alt="Tentang Kami">
            </div>

            <div class="content" data-aos="fade-left" data-aos-duration="1800">
                <h3>Sawi</h3>
                <p>Sawi merupakan salah satu komoditas tanaman hortikultura dari jenis sayur sayuran yang
                    dimanfaatkan daun-daun yang masih muda. Daerah asal tanaman sawi diduga
                    dari Tiongkok dan Asia Timur, di daerah Tiongkok, tanaman ini telah
                    dibudidayakan sejak 2.500 tahun yang lalu,
                    kemudian menyebar luas ke Filipina dan Taiwan.
                </p>
            </div>
        </div>

    </section>

    <!-- Artikel End -->

    <!-- Manajemen Start  -->

    <section id="manajemen" class="manajemen" style="padding-top:7em;">


        <h2 data-aos="zoom-out-down"><span>Manajemen </span>Sekolah</h2>

        <div class="manajemen-container">
            <a href="ketuakompetensi.php" class="manajemen-box" data-aos="fade-down-right" data-aos-duration="2000">
                <div>
                    <div class="manajemen-title">Ketua Kompetensi Keahlian</div>
                    <div class="manajemen-description">Ketua jurusan untuk masing-masing program keahlian</div>
                </div>
                <img src="image/ketuak.gif" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
            </a>
            <a href="manajemen.php" class="manajemen-box" data-aos="fade-down-right" data-aos-duration="2000">
                <div>
                    <div class="manajemen-title">Tim Manajemen</div>
                    <div class="manajemen-description">Kepala sekolah, kasubag TU, dan wakil kepala</div>
                </div>
                <img src="image/manajemen.png" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
            </a>

            <a href="datarpl.php" class="manajemen-box" data-aos="fade-down-left" data-aos-duration="2000">
                <div>
                    <div class="manajemen-title">Tenaga Pendidik</div>
                    <div class="manajemen-description">Terdiri Para guru PNS , Guru tidak tetap GTT, dan Honorer setiap Jurusan</div>
                </div>
                <img src="image/tenagapendidik.png" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
            </a>

            <a href="#" class="manajemen-box" data-aos="fade-down-left" data-aos-duration="2000">
                <div>
                    <div class="manajemen-title">Tenaga Kependidikan</div>
                    <div class="manajemen-description">Staff tata laksana sekolah selain guru</div>
                </div>
                <img src="image/tenagakependidikan.png" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
            </a>

            <a href="#" class="manajemen-box" data-aos="fade-up-right" data-aos-duration="2000">
                <div>
                    <div class="manajemen-title">Tata Tertib Sekolah</div>
                    <div class="manajemen-description">Aturan dan tata tertib yang berlaku disekolah</div>
                </div>
                <img src="image/bell.png" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
            </a>

            <a href="maknalogo.php" class="manajemen-box" data-aos="fade-up-right" data-aos-duration="2000">
                <div>
                    <div class="manajemen-title">Makna Logo</div>
                    <div class="manajemen-description">Makna dari logo SMK Negeri 4 Banjarmasin</div>
                </div>
                <img src="image/logosmk4.png" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
            </a>

            <a href="#" class="manajemen-box" data-aos="fade-up-left" data-aos-duration="2000">
                <div>
                    <div class="manajemen-title">YouTube</div>
                    <div class="manajemen-description">YouTube SMK Negeri 4 Banjarmasin</div>
                </div>
                <img src="image/Youtube.png" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
            </a>

            <a href="#" class="manajemen-box" data-aos="fade-up-left" data-aos-duration="2000">
                <div>
                    <div class="manajemen-title">Instagram</div>
                    <div class="manajemen-description">Instagram SMK Negeri 4 Banjarmasin</div>
                </div>
                <img src="image/Instagram.png" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
            </a>

        </div>
    </section>
    <!-- Manajemen End -->


    <!-- Contact Start -->
    <section id="contact" class="contact" data-aos="zoom-in" data-aos-duration="1800">
        <h2><span>Kontak </span>Kami</h2>
        <p>SMK Negeri 4 Banjarmasin</p>
        <p> JL. Brigjend H. Hasan Basri No. 7 <br>Banjarmasin, Kalimantan Selatan</p>
        <p>No. Telp : 0511 – 3305054</p>
        <p>Email : info@smkn4bjm.sch.id</p>
        <div class="row">
            <iframe style="padding-left:2em; padding-top:6em;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.2233415350843!2d114.58753691115857!3d-3.2947890411075282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a0b07eb9cd%3A0xc5fc816bceb7bcf7!2sSekolah%20Menengah%20Kejuruan%20Negeri%204%20Banjarmasin!5e0!3m2!1sid!2sid!4v1694750447047!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="zoom-in-right" data-aos-duration="1800"></iframe>
            <form action="sendemail.php" method="post" data-aos="zoom-in-left" data-aos-duration="1800">

                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" id="nama" name="nama" placeholder="Nama" required>
                </div>

                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="input-group">
                    <i data-feather="pen-tool"></i>
                    <input type="text" id="subject" name="subjek" placeholder="Subject" maxlength="50" required>
                </div>
                <div class="input-group">
                    <i data-feather="edit"></i>
                    <input type="text" id="pesan" name="pesan" placeholder="Pesan" required>
                </div>

                <button type="submit" name="send" value="Kirim" class="btn">Kirim Pesan</button>
            </form>
        </div>

    </section>
    <!-- Contact End -->


    <!-- Footer Start -->
    <footer>

        <div class="socials" data-aos="fade-up" data-aos-duration="1800">
            <a href="https://instagram.com/smkn4banjarmasin?igshid=MzRlODBiNWFlZA=="><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links" data-aos="fade-up" data-aos-duration="1600">
            <a href="#home"><i data-feather="home"></i> Beranda</a>
            <a href="#about"><i data-feather="info"></i> Tentang Kami</a>
            <a href="#keahlian"><i data-feather="award"></i> Kompetensi Keahlian</a>
            <a href="#artikels"><i data-feather="grid"></i> Berita</a>
            <a href="#manajemen"><i data-feather="user-check"></i> Manajemen</a>
            <a href="#contact"><i data-feather="mail"></i> Kontak</a>
        </div>

        <div class="credit">
            <p>created by <a href="">Nuzhan</a>. | &copy;2022. </p>
        </div>

    </footer>
    <!-- Footer End -->


    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <script src=" https://unpkg.com/aos@next/dist/aos.js">
    </script>
    <script>
        AOS.init();
    </script>

    <!-- My JavaScript -->
    <script src="js/script.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    <!-- <script>
        function sendEmail() {
            Email.send({
                Host: "smtp.gmail.com",
                Username: "muhammadnuzhan27@gmail.com",
                Password: "@nuzhan27",
                To: "muhammadnuzhan29@gmail.com",
                From: document.getElementById("email").value,
                Subject: "New Message",
                body: Email + document.getElementById("nama").value +
                    "<br> Email: " + document.getElementById("email").value +
                    "<br> Subjek: " + document.getElementById("subjek").value +
                    "<br> Pesan: " + document.getElementById("pesan").value

            }).then(
                message => alert("Message Sent Successfuly")
            );
        }
    </script> -->
</body>

</html>
