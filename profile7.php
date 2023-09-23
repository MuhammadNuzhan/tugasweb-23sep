<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap JavaScript (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="image/favicon.png" type="image/x-icon">
</head>
<style>
    body {
        background-color: #000;
    }

    body>div {
        padding-top: 9em;
        padding-bottom: 2em;
    }

    .card {
        box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.1);
    }

    :root {
        --primary: #ece559;
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

    .footer {
        background-color: var(--primary);
    }
</style>

<body>
    <!-- navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">SMKN 4<span> Banjarmasin</span>.</a>

        <div class="navbar-nav">
            <a onclick="kembali()"><i class="fa fa-chevron-left fa-fw "></i> Kembali</a>
        </div>

        <div class="navbar-extra">
            <!-- <a href="#" id="search"><i data-feather="search"></i></a>
    <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- Page Container -->
    <div class="container mt-4 pt-10">

        <!-- The Grid -->
        <div class="row">

            <!-- Left Column -->
            <div class="col-md-4" data-aos="fade-down-right" data-aos-duration="3000">

                <div class="card">
                    <img src="image/dummy.jpg" class="card-img-top" alt="Avatar" style="width:100%">
                    <div class="card-body">
                        <h2 class="card-title">St. Fatmawati, S.Pd</h2>
                        <p class="card-text"><i class="fa fa-briefcase fa-fw mr-2 text-teal"></i>Designer</p>
                        <p class="card-text"><i class="fa fa-home fa-fw mr-2 text-teal"></i>London, UK</p>
                        <p class="card-text"><i class="fa fa-envelope fa-fw mr-2 text-teal"></i>ex@mail.com</p>
                        <p class="card-text"><i class="fa fa-phone fa-fw mr-2 text-teal"></i>1224435534</p>
                        <hr>

                        <p class="card-text"><b><i class="fa fa-asterisk fa-fw mr-2 text-teal"></i>Skills</b></p>
                        <p>Adobe Photoshop</p>
                        <div class="progress">
                            <div class="progress-bar bg-teal" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                        <p>Photography</p>
                        <div class="progress">
                            <div class="progress-bar bg-teal" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                        <p>Illustrator</p>
                        <div class="progress">
                            <div class="progress-bar bg-teal" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                        <p>Media</p>
                        <div class="progress">
                            <div class="progress-bar bg-teal" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <br>

                        <p class="card-text"><b><i class="fa fa-globe fa-fw mr-2 text-teal"></i>Languages</b></p>
                        <p>English</p>
                        <div class="progress">
                            <div class="progress-bar bg-teal" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Spanish</p>
                        <div class="progress">
                            <div class="progress-bar bg-teal" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>German</p>
                        <div class="progress">
                            <div class="progress-bar bg-teal" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                    </div>
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="col-md-8">

                <div class="card mb-4" data-aos="fade-down-left" data-aos-duration="3000">
                    <h2 class="card-header"><i class="fa fa-suitcase fa-fw mr-2 text-teal"></i>Work Experience</h2>
                    <div class="card-body">
                        <h5 class="card-title"><b>Front End Developer / w3schools.com</b></h5>
                        <p class="card-text"><i class="fa fa-calendar fa-fw mr-2"></i>Jan 2015 - <span class="badge badge-pill badge-teal">Current</span></p>
                        <p class="card-text">Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><b>Web Developer / something.com</b></h5>
                        <p class="card-text"><i class="fa fa-calendar fa-fw mr-2"></i>Mar 2012 - Dec 2014</p>
                        <p class="card-text">Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><b>Graphic Designer / designsomething.com</b></h5>
                        <p class="card-text"><i class="fa fa-calendar fa-fw mr-2"></i>Jun 2010 - Mar 2012</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="card" data-aos="fade-up-left" data-aos-duration="3000">
                    <h2 class="card-header"><i class="fa fa-certificate fa-fw mr-2 text-teal"></i>Education</h2>
                    <div class="card-body">
                        <h5 class="card-title"><b>W3Schools.com</b></h5>
                        <p class="card-text"><i class="fa fa-calendar fa-fw mr-2"></i>Forever</p>
                        <p class="card-text">Web Development! All I need to know in one place</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><b>London Business School</b></h5>
                        <p class="card-text"><i class="fa fa-calendar fa-fw mr-2"></i>2013 - 2015</p>
                        <p class="card-text">Master Degree</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><b>School of Coding</b></h5>
                        <p class="card-text"><i class="fa fa-calendar fa-fw mr-2"></i>2010 - 2013</p>
                        <p class="card-text">Bachelor Degree</p>
                    </div>
                </div>

                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>

    <footer class="footer text-white text-center mt-4 py-3">
        <p>Find me on social media.</p>
        <i class="fa fa-facebook-official fa-lg mr-3"></i>
        <i class="fa fa-instagram fa-lg mr-3"></i>
        <i class="fa fa-snapchat fa-lg mr-3"></i>
        <i class="fa fa-pinterest-p fa-lg mr-3"></i>
        <i class="fa fa-twitter fa-lg mr-3"></i>
        <i class="fa fa-linkedin fa-lg mr-3"></i>
        <p>Powered by <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        function kembali() {
            window.history.back();
        }
    </script>
</body>

</html>