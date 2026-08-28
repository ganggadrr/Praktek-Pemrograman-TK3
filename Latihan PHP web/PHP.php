<?php
include "koneksi.php";
$queryAwards = mysqli_query(
    $koneksi,
    "SELECT * FROM awards ORDER BY ID ASC"
);

if (!$queryAwards) {
    die("Query Awards gagal: " . mysqli_error($koneksi));
}

$queryMusic = mysqli_query(
    $koneksi,
    "SELECT * FROM music ORDER BY ID ASC"
);

if (!$queryMusic) {
    die("Query Music gagal: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html> 
<html> 

<head> 
    <title>Latihan PHP</title> <!-- judul halaman yang akan muncul dalam web -->
    <link rel="stylesheet" href="Asset/css/bootstrap.min.css"> <!-- untuk menghubungkan file css dengan html -->
    <link rel="stylesheet" href="PHP.css"> <!-- untuk menghubungkan file css dengan html -->
</head>

<body>
    <section>
        <header class="black">
            <div class="logo"> <!-- untuk membuat logo -->
                <img src="Asset/image/logo 2.jpg">
                <img src="Asset/image/logo 1.jpg">
            </div>
            
            <div class="menu"> <!-- untuk membuat menu -->
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: black;" href="#home">Home
                            <img src="Asset/image/house-solid.png" alt="home">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="#awards">Awards
                            <img src="Asset/image/award-solid.png" alt="award">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="#music">Music
                            <img src="Asset/image/record-vinyl-solid.png" alt="music">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: black;"  href="#contac">Contact
                            <img src="Asset/image/phone-solid.png" alt="phone">
                        </a>
                    </li>
                </ul>
            </div>
        </header>
    </section>

    <section id="home"> 
       <header class="hero"> 
            <video class="hero-video" autoplay muted loop playsinline> <!-- Video yang menjadi background -->
                <source src="Asset/image/vidio 1.mp4" type="video/mp4">
            </video>
            <div class="hero-overlay"></div> <!-- Lapisan gelap agar tulisan terlihat jelas -->
        </header>
    </section>

    <section id="awards">
        <header class="awards">    
            <h1> 
                AWARDS
            </h1>
            <p class="awards2">
                BLACKPINK telah memenangkan lebih dari 350 penghargaan secara total 
                (termasuk karier grup dan solo para anggotanya). Untuk grup saja, 
                mereka mengumpulkan lebih dari 120 trofi dari acara musik dan penghargaan Korea, 
                serta puluhan penghargaan internasional bergengsi dan Rekor Dunia Guinness.
            </p>

            <div class="kotak-container">
                 <?php

    // Mengulang semua data Awards dari database
    while ($award = mysqli_fetch_assoc($queryAwards)) {
    ?>
        <div class="awards1">

            <h2>
                <?php echo htmlspecialchars($award['Judul']); ?>
            </h2>

            <p>
                <?php echo htmlspecialchars($award['Deskripsi']); ?>
            </p>
        </div>
    <?php
    }

    ?>
        </div>
            <div class="award-slider">
                <div class="award-track">

                    <!-- Foto BLACKPINK -->
                    <img src="Asset/image/bp10.jpg" alt="BLACKPINK 1">
                    <img src="Asset/image/bp2.jpg" alt="BLACKPINK 2">
                    <img src="Asset/image/bp3.jpg" alt="BLACKPINK 3">
                    <img src="Asset/image/bp4.jpg" alt="BLACKPINK 4">
                    <img src="Asset/image/bp5.jpg" alt="BLACKPINK 5">
                    <img src="Asset/image/bp11.jpg" alt="BLACKPINK 6">

                    <!-- Foto diulang agar scroll tidak terputus -->
                    <img src="Asset/image/bp10.jpg" alt="BLACKPINK 1">
                    <img src="Asset/image/bp2.jpg" alt="BLACKPINK 2">
                    <img src="Asset/image/bp3.jpg" alt="BLACKPINK 3">
                    <img src="Asset/image/bp4.jpg" alt="BLACKPINK 4">
                    <img src="Asset/image/bp5.jpg" alt="BLACKPINK 5">
                    <img src="Asset/image/bp11.jpg" alt="BLACKPINK 6">

                </div>
            </div>
        </header>
    </section>

    <section id="music"> 
        <header class="music">
            <h1>
                BEST MUSICs
            </h1>
            <p>
                Best Music BLACKPINK dari tahun 2016-2026
            </p>
            <div class="music-container">
                <div class="music1"> 
                    <h2>
                        Perjalanan Musik BLACKPINK (2016–2026)
                    </h2>
                    <ul>
                        <li>
                            <strong>Era Debut (2016):</strong>
                            BLACKPINK debut dengan album single <i>Square One</i>
                            yang berisi lagu "Whistle" dan "Boombayah", diikuti
                            <i>Square Two</i> dengan lagu "Playing with Fire" dan "Stay".
                        </li>

                        <li>
                            <strong>Era Puncak Popularitas (2017–2019):</strong>
                            Merilis lagu seperti "As If It's Your Last" (2017),
                            EP <i>Square Up</i> dengan lagu utama "Ddu-Du Ddu-Du" (2018),
                            serta EP <i>Kill This Love</i> (2019).
                        </li>

                        <li>
                            <strong>Era Album Penuh & Kolaborasi (2020–2022):</strong>
                            Merilis album <i>The Album</i> (2020) dengan lagu
                            "How You Like That" dan "Lovesick Girls", serta album
                            <i>Born Pink</i> (2022) dengan lagu "Pink Venom" dan "Shut Down".
                        </li>

                        <li>
                            <strong>Era Terbaru (2023–2026):</strong>
                            Merilis lagu "The Girls" (2023), single "Jump" (2025),
                            serta mini album <i>Deadline</i> (2026) dengan lagu utama "GO".
                        </li>
                    </ul>
                </div>
                 <div class="grafik">

                    <h2>
                        TOP 5 MUSIC
                    </h2>

                    <div id="musicGrafik">
                        <p style="color: black; text-align: center;">
                            Memuat data..
                        </p>
                    </div>
                </div>
            </div>
        </header>
    </section>
    
<section id="contac">
    <header class="contac">
        <h1>CONTACT</h1>
             <div class="contact-form">

            <form id="contactForm">
                <div class="form-group">
                    <label for="nama">Nama Pengirim</label>
                    <input type="text"id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan alamat email" required>
                </div>

                <div class="form-group">
                    <label for="pesan">Isi Pesan</label>
                    <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
                </div>

                <button type="submit" class="btn-kirim">
                    KIRIM PESAN
                </button>
            </form>
        </div>

        <div class="social-menu">
            <div class="social-toggle">         
                <img src="Asset/image/circle-info-solid (1).png" alt="info">
            </div>

            <li style="--i:0; --clr:#1877f2;">
                <a href="https://www.facebook.com/BLACKPINKOFFICIAL/"
                   target="_blank"
                   title="Facebook">
                    <img src="Asset/image/facebook-brands-solid.png" alt="Facebook">
                </a>
            </li>

            <li style="--i:1; --clr:#e4405f;">
                <a href="https://www.instagram.com/blackpinkofficial/"
                   target="_blank"
                   title="Instagram">
                    <img src="Asset/image/instagram-brands-solid (1).png" alt="Instagram">
                </a>
            </li>

            <li style="--i:2; --clr:#ff0000;">
                <a href="https://www.youtube.com/@BLACKPINK"
                   target="_blank"
                   title="YouTube">
                     <img src="Asset/image/youtube-brands-solid (1).png" alt="YouTube">
                </a>
            </li>

            <li style="--i:3; --clr:#000000;">
                <a href="https://www.tiktok.com/@bp_tiktok"
                   target="_blank"
                   title="TikTok">
                     <img src="Asset/image/tiktok-brands-solid (1).png" alt="TikTok">
                </a>
            </li>

            <li style="--i:4; --clr:#000000;">
                <a href="https://x.com/BLACKPINK"
                   target="_blank"
                   title="X twiter">
                     <img src="Asset/image/x-twitter-brands-solid (2).png" alt="X">
                </a>
            </li>

            <li style="--i:5; --clr:#1db954;">
                <a href="https://open.spotify.com/artist/41MozSoPIsD1dJM0CLPjZF"
                   target="_blank"
                   title="Spotify">
                    <img src="Asset/image/spotify-brands-solid (1).png" alt="Spotify">
                </a>
            </li>
        </div>
    </header>
</section>

<section>
    <footer class="footer">
        <div class="footer-content">
            <p class="copyright">
                © RAJESH 2026 BLACKPINK Website. All Rights Reserved.
            </p>
        </div>
    </footer>
</section>
<script src="Javascript.js"></script>
</body>
</html>