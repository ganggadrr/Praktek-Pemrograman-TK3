const awardsCards =
    document.querySelectorAll(".awards1");

awardsCards.forEach(function (card) {
    card.addEventListener("mouseenter", function () {
        card.style.backgroundColor = "#ffffff";
    });

    card.addEventListener("mouseleave", function () {
        card.style.backgroundColor = "#F77FBE";
    });

});

const socialMenu = document.querySelector(".social-menu")
const socialToggle = document.querySelector(".social-toggle");

socialToggle.addEventListener("click", function () {
    socialMenu.classList.toggle("active");
});


const contactForm = document.getElementById("contactForm");
if (contactForm) {
    contactForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const nama = document.getElementById("nama").value
        const email = document.getElementById("email").value;
        const pesan = document.getElementById("pesan").value;
        if (nama === "" || email === "" || pesan === "") {
            alert("Silakan lengkapi semua data terlebih dahulu.");
            return;
        }
        alert(
            "Pesan berhasil disiapkan!\n\n" +
            "Nama: " + nama + "\n" +
            "Email: " + email + "\n" +
            "Pesan: " + pesan
        );
        contactForm.reset();
    });
}

function updateMusic() {

    fetch("get_music.php")
        .then(function(response) {
            if (!response.ok) {

                throw new Error("Gagal mengambil data");
            }
            return response.json();

        })

        .then(function(data) {

            const musicGrafik =
                document.getElementById("musicGrafik");
            if (!musicGrafik) {

                return;

            }

            musicGrafik.innerHTML = "";
            data.forEach(function(music) {

                const item =
                    document.createElement("div");
                item.className = "grafik-item";

                const link =
                    document.createElement("a");
                link.href = music.Link;
                link.target = "_blank";
                link.className = "judul-lagu";
                link.textContent = music.Judul;

                const progress =
                    document.createElement("div");
                progress.className = "progress";

                progress.setAttribute(
                    "role",
                    "progressbar"
                );

                progress.setAttribute(
                    "aria-valuenow",
                    music.Presentase
                );

                progress.setAttribute(
                    "aria-valuemin",
                    "0"
                );

                progress.setAttribute(
                    "aria-valuemax",
                    "100"
                );

                const progressBar =
                    document.createElement("div");
                progressBar.className = "progress-bar";
                progressBar.style.width =
                    music.Presentase + "%";
                progress.appendChild(progressBar);

                const viewer =
                    document.createElement("span");
                viewer.className = "jumlah-view";
                viewer.textContent = music.Viewers;

                item.appendChild(link);
                item.appendChild(progress);
                item.appendChild(viewer);
                musicGrafik.appendChild(item);

            });

        })
        .catch(function(error) {
            console.error(
                "Gagal mengambil data music:",
                error
            );
        });

}

updateMusic();
setInterval(function() {

    updateMusic();

}, 2000);
