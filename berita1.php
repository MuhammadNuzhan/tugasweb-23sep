<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Fair</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,500&display=swap" 
          rel="stylesheet">
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
html{
    scroll-behavior: smooth;
}
body{
    font-family: sans-serif;
    background-color: var(--bg);
    color: #fff;
    min-height: 1800px;

}

/* Navbar */
.navbar{
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

.navbar .navbar-logo{
    font-size: 2rem;
    font-weight: 700;
    font-style: italic;
    color: #fff;
}
.navbar .navbar-logo span{
    color: var(--primary);
}

.navbar .navbar-nav a{
    color: #fff;
    font-size: 1.3rem;
    display: inline-block;
    margin: 0 1rem;
    cursor: pointer;
}

.navbar .navbar-nav a:hover{
    color: var(--primary);
}

.navbar .navbar-nav a::after{
    content: '';
    display: block;
    padding-bottom: 0.5rem;
    border-bottom: 0.1rem solid var(--primary);
    transform: scaleX(0);
    transition: 0.2s linear;
}

.navbar .navbar-nav a:hover::after{
    transform: scaleX(1);
}
.navbar .navbar-nav a i{
    padding-top: 2px;
    float: left;
    
}

.navbar .navbar-extra a{
    color: #fff;
    margin: 0 0.5rem;
} 

 .navbar .navbar-extra a:hover{
    color: var(--primary);
}

#hamburger-menu{
    display: none;
}

/* Menu */
.menu h2{
    margin-bottom: 1rem;
}
.menu p, .contact p{
    text-align: center;
    max-width:60rem;
    margin: auto;
    font-weight: 100;
    line-height: 1.6;
    font-size: 1.4rem;
}
.menu h3{
    font-size: 1.5rem;
}
.menu .row{
    display: flex;
    flex-wrap: wrap;
    margin-top: 5rem;
    justify-content: center;

}
.menu .row .menu-card{
    text-align: center;
    padding: 3em;

}
.menu .row .menu-card img{
    border-radius: 3%;
    width: 100%;
    opacity: 0; /* Set gambar menjadi tidak terlihat */
    animation: muncul 8s ease forwards; /* Animasi muncul selama 2 detik */
    transform: translateY(-100%);
    animation-duration: 3s;
}
.menu .row .menu-card .menu-card-title, .menu-card-price{
    opacity: 0; /* Set gambar menjadi tidak terlihat */
    animation: muncul2 6s ease forwards; /* Animasi muncul selama 2 detik */
    
}
@keyframes muncul {
    0% {
        opacity: 0; /* Pada awal animasi, gambar tidak terlihat */
        transform: translateY(-100%); /* Pada awal animasi, gambar ada di luar layar bawah */
    }
    100% {
        opacity: 1; /* Pada akhir animasi, gambar muncul sepenuhnya */
        transform: translateY(0); /* Pada akhir animasi, gambar kembali ke posisi awal (tidak ada perpindahan) */
    }
}
@keyframes muncul2 {
    0% {
        opacity: 0; /* Pada awal animasi, gambar tidak terlihat */
         }
    100% {
        opacity: 1; /* Pada akhir animasi, gambar muncul sepenuhnya */
         }
}
.menu .row .menu-card .menu-card-title{
    margin: 1rem auto 0.5rem;
    color: #fff;

}
.menu .row .menu-card .menu-card-price{
    margin-bottom: 3rem;
    text-align: justify;
}

/* Footer */
footer{
    background-color: var(--primary);
    text-align: center;
    padding: 1rem 0 3rem;
    margin-top: 3rem;
    font-size: 1.5rem;
     
}
footer .socials{
    padding: 1rem 0;

}
footer .socials a{
    color: #000000;
    margin: 1rem;

}
footer .socials a:hover,
footer .links a:hover{
    color: #fff;
}
footer .links{
    margin-bottom: 1.4rem;
}

footer .links a{
    color: var(--bg);
    padding: 0.7rem 1rem;
}
footer .credit{
    font-size: 0.9rem;

}
footer .credit a{
    color: var(--bg);
    font-weight: 700;
}
footer .credit p{
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
    <img src="image/jobfair.jpeg" 
         alt="Espresso" class="menu-card-img">
    <h3 class="menu-card-title">SMKN 4 Banjarmasin Gelar Kegiatan Job Fair 2023</h3>
    <p class="menu-card-price">SMKN 4 Banjarmasin menggelar Job Fair 2023 di Taman Budaya Kalsel di Jalan Brigjen H Hasan Basri, Selasa (5/9/2023) hingga Rabu (6/9/2023). 

Total ada 15 perusahaan yang ikut dalam pelaksanaan job fair kali ini dengan ratusan lowongan pekerjaan. 

Kegiatan job fair kali ini digelar dalam rangka  kegiatan sekolah unggulan serta peringatan HUT SMKN 4 ke-67. 

Ketua Panitia Kegiatan yang juga Wakil Kepala SMKN 4 Banjarmasin Bidang Hubungan Masyarakat, Erika Yolanda mengatakan, total ada 15 perusahaan yang bergabung. 

Disebutkannya, jika prioritas pelamar nantinya dari SMKN 4. Meski ia tidak menutup kemungkinan dari luar SMKN 4 juga bisa mendaftar dan kemungkinan diterima. 

Dijelaskannya, kegiatan ini merupakan bagian dari sekolah unggulan. Tak hanya job fair, dalam kegiatan ini juga dimeriahkan dengan tampilan keterampilan siswa SMKN 4 dan produk unggulan yang dihadirkan. 

Kepala Bidang SMK Dinas Pendidikan Provinsi Kalimantan Selatan, Syamsuri mengatakan, bedasarkan data dari Dinas Pendidikan, pada 2021 dari 18 ribu lulusan 25 persen diterima di dunia kerja. Baik itu dunia usaha dan dunia industri. 

“Untuk 2022 masih kami data,” katanya. 

Sisanya, menjadi wiraswasta hingga melanjutkan ke perguruan tinggi. Ia tidak menampik jika dari 18 ribu lulusan tidak semuanya terserap di dunia kerja, menjadi wirausaha, maupun melanjutkan ke perguruan tinggi. Ada 5 persen yang terdata masih tidak terserap alias mengganggur. 

Ia menyebut, 25 persen angka lulusan yang bekerja sudah cukup tinggi dan bagus.

“Tentu lulusan ini bersaing. Tak hanya SMK saja ada SMA, MA, D3, D1, hingga sarjana. Dengan angka 25 persen ini sudah fantastis. Kami juga mendorong kualitas lulusan. Dimana pembelajaran SMK berbasis industri,” pungkasnya. 

Kepala SMKN 4 Banjarmasin, Syafruddin Noor mengatakan, kegiatan job fair ini digelar untuk menemukan perusahaan dengan pencari kerja. 

“Biar pencari kerja juga tahu dan mengenal perusahaan yang mereka cari,” katanya. 

Ia menyebut job fair ini rutin dilakukan. Apalagi berdasarkan aturan pusat sekolah unggulan harus menggelar kegiatan seperti ini. 

Dari 425 siswa alumni di SMKN 4 setiap tahun 35 persen diantaranya terserap dunia kerja. Yakni dari sektor perhotelan dan kuliner. Sedangkan 20 persen memilih berwirausaha. Dan 15 persen memilih untuk melanjutkan sekolah. 

Sementara itu, job fair tak hanya didatangi oleh lulusan SMKN 4 saja. Namira alumnus FKIP ULM, 2023 juga mencari kerja melalui job fair. 

“Karena baru lulus saya ingin mencoba. Semoga diterima. Ini juga awal bagi saya sebagai pencari kerja,” pungkasnya. (Banjarmasinpost.co.id/Eka Pertiwi).

</p>
</div></section>
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