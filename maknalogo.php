<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketua Kompetensi</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,500&display=swap" rel="stylesheet">
    <!-- Fav Icon -->
    <link rel="icon" href="image/favicon.png" type="image/x-icon">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
    .menu {
        padding-top: 4em;
    }

    .menu h2 {
        color: var(--primary);
        text-align: center;
        padding-top: 2em;
    }

    .menu h2 span {
        color: #fff;
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

    .menu h4 {
        font-size: 1rem;
    }

    .menu .row {
        display: flex;
        flex-wrap: wrap;
        margin-top: 3rem;
        justify-content: center;

    }

    .menu .row .menu-card {
        text-align: center;
        padding: 1px;
    }

    .menu .row .menu-card img {
        border-radius: 1%;
        width: 37%;
        padding: 1px;
        border: 1px solid #fff;

    }

    .menu .row .menu-card .menu-card-title {
        margin: 2px auto 0.5rem;
        color: #fff;
        font-size: 18px;
        padding-top: 2px;

    }

    .menu .row .menu-card .menu-card-price {
        text-align: center;
        font-size: 15px;
        max-width: 13rem;
    }

    /* Footer */
    footer {
        background-color: var(--primary);
        text-align: center;
        padding: 1rem 0 3rem;
        margin-top: 8rem;
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
        <h2><span>Makna </span>Logo</h2>
        <div class="row">
            <div class="menu-card">
                <img src="image/maknalogo.jpg" alt="kepsek" class="menu-card-img" data-aos="zoom-in" data-aos-duration="2000">
                <h4 class="menu-card-title"></h4>
                <p class="menu-card-price"></p>
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
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