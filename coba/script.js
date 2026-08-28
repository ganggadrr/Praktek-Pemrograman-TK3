// =====================================================
// VIDEO HERO
// =====================================================

const video = document.querySelector(".hero-video");
// Mengambil elemen video dari HTML

const playVideo = document.getElementById("playVideo");
// Mengambil tombol Play/Pause


playVideo.addEventListener("click", function () {
    // Menjalankan fungsi ketika tombol ditekan

    if (video.paused) {
        // Mengecek apakah video sedang berhenti

        video.play();
        // Menjalankan video

        playVideo.textContent = "Pause Video";
        // Mengubah tulisan tombol menjadi Pause Video

    } else {
        // Jika video sedang berjalan

        video.pause();
        // Menghentikan video sementara

        playVideo.textContent = "Play Video";
        // Mengubah tulisan tombol menjadi Play Video
    }

});



// =====================================================
// ANIMASI TULISAN HERO
// =====================================================

const heroTitle = document.querySelector(".teks1 h1");
// Mengambil judul BLACKPINK

const heroText = document.querySelector(".teks1 p");
// Mengambil tulisan In Your Area


setTimeout(function () {
    // Menunggu 300 milidetik

    heroTitle.classList.add("show");
    // Menambahkan class show agar judul muncul

}, 300);


setTimeout(function () {
    // Menunggu 700 milidetik

    heroText.classList.add("show");
    // Menambahkan class show agar subtitle muncul

}, 700);



// =====================================================
// NAVBAR SAAT SCROLL
// =====================================================

const navbar = document.querySelector(".black");
// Mengambil navbar


window.addEventListener("scroll", function () {
    // Menjalankan fungsi setiap halaman di-scroll

    if (window.scrollY > 50) {
        // Mengecek apakah halaman sudah turun 50px

        navbar.classList.add("scrolled");
        // Menambahkan class scrolled

    } else {
        // Jika masih berada di bagian atas

        navbar.classList.remove("scrolled");
        // Menghapus class scrolled

    }

});



// =====================================================
// ANIMASI GRAFIK
// =====================================================

const progressBars =
    document.querySelectorAll(".progress-bar");
// Mengambil semua batang grafik


const observer =
    new IntersectionObserver(function (entries) {
        // Membuat pengamat ketika grafik masuk layar

        entries.forEach(function (entry) {
            // Melakukan perulangan setiap grafik

            if (entry.isIntersecting) {
                // Mengecek apakah grafik terlihat

                const width =
                    entry.target.getAttribute("data-width");
                // Mengambil nilai data-width dari HTML

                entry.target.style.width =
                    width + "%";
                // Membuat grafik bergerak sesuai nilainya

            }

        });

    }, {
        threshold: 0.3
        // Animasi dimulai ketika 30% grafik terlihat
    });


progressBars.forEach(function (bar) {
    // Melakukan perulangan setiap grafik

    observer.observe(bar);
    // Mengaktifkan pengamatan pada grafik
});



// =====================================================
// EFEK KARTU AWARDS
// =====================================================

const awardsCards =
    document.querySelectorAll(".awards1");
// Mengambil semua kartu Awards


awardsCards.forEach(function (card) {
    // Melakukan perulangan setiap kartu

    card.addEventListener("mouseenter", function () {
        // Ketika mouse masuk ke kartu

        card.style.backgroundColor = "#ffffff";
        // Mengubah background menjadi putih

    });


    card.addEventListener("mouseleave", function () {
        // Ketika mouse keluar dari kartu

        card.style.backgroundColor = "#F77FBE";
        // Mengembalikan warna menjadi pink

    });

});



// =====================================================
// BACK TO TOP
// =====================================================

const backTop =
    document.getElementById("backTop");
// Mengambil tombol Back to Top


window.addEventListener("scroll", function () {
    // Mengecek halaman ketika di-scroll

    if (window.scrollY > 300) {
        // Jika sudah turun lebih dari 300px

        backTop.style.display = "block";
        // Menampilkan tombol

    } else {
        // Jika masih di bagian atas

        backTop.style.display = "none";
        // Menyembunyikan tombol
    }

});


backTop.addEventListener("click", function () {
    // Menjalankan fungsi ketika tombol ditekan

    window.scrollTo({
        // Mengatur posisi halaman

        top: 0,
        // Kembali ke posisi paling atas

        behavior: "smooth"
        // Membuat perpindahan menjadi halus
    });

});