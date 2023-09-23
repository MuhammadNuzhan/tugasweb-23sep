<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesantren Ramadhan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,500&display=swap" rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="icon" href="image/favicon.png" type="image/x-icon">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

</head>
<style>
    :root {
        --primary: #ece559;
        --bg: #010101;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;

    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: sans-serif;
        background-color: var(--bg);
        color: #fff;
        min-height: 100vh;

    }

    /* Navbar */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.4rem 7%;
        background-color: rgba(1, 1, 1, 0.8);
        border-bottom: 1px solid var(--primary);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
    }

    .navbar .navbar-logo {
        font-size: 2rem;
        font-weight: 700;
        font-style: italic;
        color: #fff;
    }

    .navbar .navbar-logo span {
        color: var(--primary);
    }

    .navbar .navbar-nav a {
        color: #fff;
        font-size: 1.3rem;
        display: inline-block;
        margin: 0 1rem;
        cursor: pointer;
    }

    .navbar .navbar-nav a:hover {
        color: var(--primary);
    }

    .navbar .navbar-nav a::after {
        content: '';
        display: block;
        padding-bottom: 0.5rem;
        border-bottom: 0.1rem solid var(--primary);
        transform: scaleX(0);
        transition: 0.2s linear;
    }

    .navbar .navbar-nav a:hover::after {
        transform: scaleX(1);
    }

    .navbar .navbar-nav a i {
        padding-top: 2px;
        float: left;
    }

    .navbar .navbar-extra a {
        color: #fff;
        margin: 0 0.5rem;
    }

    .navbar .navbar-extra a:hover {
        color: var(--primary);
    }

    #hamburger-menu {
        display: none;
    }

    /* Menu */
    .menu h2 {
        margin-bottom: 1rem;
    }

    .menu p,
    .contact p {
        text-align: center;
        max-width: 60rem;
        margin: auto;
        font-weight: 100;
        line-height: 1.6;
        font-size: 1.4rem;
    }

    .menu h3 {
        font-size: 1.5rem;
    }

    .menu .row {
        display: flex;
        flex-wrap: wrap;
        margin-top: 5rem;
        justify-content: center;

    }

    .menu .row .menu-card {
        text-align: center;
        padding: 3em;

    }

    .menu .row .menu-card img {
        border-radius: 3%;
        width: 100%;
        opacity: 0;
        /* Set gambar menjadi tidak terlihat */
        animation: muncul 8s ease forwards;
        /* Animasi muncul selama 2 detik */
        transform: translateY(-100%);
        animation-duration: 3s;
    }

    .menu .row .menu-card .menu-card-title,
    .menu-card-price {
        opacity: 0;
        /* Set gambar menjadi tidak terlihat */
        animation: muncul2 6s ease forwards;
        /* Animasi muncul selama 2 detik */

    }

    @keyframes muncul {
        0% {
            opacity: 0;
            /* Pada awal animasi, gambar tidak terlihat */
            transform: translateY(-100%);
            /* Pada awal animasi, gambar ada di luar layar bawah */
        }

        100% {
            opacity: 1;
            /* Pada akhir animasi, gambar muncul sepenuhnya */
            transform: translateY(0);
            /* Pada akhir animasi, gambar kembali ke posisi awal (tidak ada perpindahan) */
        }
    }

    @keyframes muncul2 {
        0% {
            opacity: 0;
            /* Pada awal animasi, gambar tidak terlihat */
        }

        100% {
            opacity: 1;
            /* Pada akhir animasi, gambar muncul sepenuhnya */
        }
    }

    .menu .row .menu-card .menu-card-title {
        margin: 1rem auto 0.5rem;
        color: #fff;

    }

    .menu .row .menu-card .menu-card-price {
        margin-bottom: 3rem;
        text-align: justify;
    }

    /* Footer */
    footer {
        background-color: var(--primary);
        text-align: center;
        padding: 1rem 0 3rem;
        margin-top: 3rem;
        font-size: 1.5rem;

    }

    footer .socials {
        padding: 1rem 0;

    }

    footer .socials a {
        color: #000000;
        margin: 1rem;

    }

    footer .socials a:hover,
    footer .links a:hover {
        color: #fff;
    }

    footer .links {
        margin-bottom: 1.4rem;
    }

    footer .links a {
        color: var(--bg);
        padding: 0.7rem 1rem;
    }

    footer .credit {
        font-size: 0.9rem;

    }

    footer .credit a {
        color: var(--bg);
        font-weight: 700;
    }

    footer .credit p {
        font-size: 1.5rem;
    }
</style>

<body>
    <!-- navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">SMKN 4<span> Banjarmasin</span>.</a>

        <div class="navbar-nav">
            <a onclick="kembali()"><i data-feather="chevron-left"></i> Kembali</a>
        </div>

        <div class="navbar-extra">
            <!-- <a href="#" id="search"><i data-feather="search"></i></a>
    <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <section class="menu">
        <div class="row">
            <div class="menu-card">
                <img src="image/Pesantren.jpeg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">Semarak Kegiatan Pesantren Ramadhan 1444 Hijriah di SMKN 4 Banjarmasin
                </h3>
                <p class="menu-card-price">Marhaban Ya Ramadhan, bulan suci Ramadhan merupakan sesuatu yang patut disambut dengan gembira kedatangannya oleh seluruh umat muslim di seluruh dunia. Bulan Ramadhan merupakan bulan yang mulia dibandingkan dengan bulan-bulan lainnya karena pada bulan Ramadhan banyak sekali terdapat keberkahan dan keutamaannya. Kewajiban dalam bulan Ramadhan adalah menjalankan puasa yang merupakan rukun Islam yang ketiga. Semaraknya bulan Ramadhan ditandai dengan pelaksanaan Shalat Tarawih, sahur, buka puasa bersama, pasar Ramadhan, dan tidak ketinggalan kegiatan Pesantren Ramadhan yang dilaksanakan di sekolah.

                    Begitu pula yang dilaksanakan oleh SMK Negeri 4 Banjarmasin dalam menyemarakkan bulan Ramadhan yaitu melaksanakan Pesantren Ramadhan di lapangan sekolah. Kegiatan Pesantren Ramadhan dilaksanakan untuk mendalami ajaran Islam. Kegiatan Pesantren Ramadhan di SMK Negeri 4 Banjarmasin dilaksanakan sejak 27-31 Maret 2023 yang diikuti oleh seluruh peserta didik kelas X dan XI secara bergantian.

                    Pesantren Ramadhan dilaksanakan pukul 08.00-13.00 Wita, dimulai dengan melaksanakan shalat dhuha dan shalat hajat berjamaah, tadarus Alqur’an bersama-sama, ceramah agama singkat, pembelajaran fikih, akidah, akhlak, dan ditutup dengan shalat zuhur berjamaah. Selain itu, dalam Pesantren Ramadhan ini juga dilaksanakan sedekah Ramadhan, berbuka puasa bersama, dan di akhir kegiatan akan dilaksanakan kegiatan berbagi paket Ramadhan bagi yang membutuhkan. Kegiatan tersebut dibimbing langsung oleh Bapak dan Ibu Guru Pendidikan Agama Islam di SMK Negeri 4 Banjarmasin secara bergantian di lapangan sekolah.

                    Seluruh Peserta didik terlihat sangat antusias dan bersemangat dalam mengikuti pesantren Ramadhan yang telah dijadwalkan. Semoga dengan adanya kegiatan Pesantren Ramadhan ini dapat meningkatkan keimanan dan ketaqwaan seluruh peserta didik serta dapat mengamalkannya dalam keseharian dan mempererat ukhuwah Islamiyah di SMK Negeri 4 Banjarmasin.

                    Penulis : ELINDA ANDRIANI, S.Pd </p>

            </div>
    </section>
    <!-- Footer Start -->
    <footer>

        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
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

    <!-- My JavaScript -->
    <script src="js/script.js"></script>
    <script>
        function kembali() {
            window.history.back();
        }
    </script>
</body>

</html>