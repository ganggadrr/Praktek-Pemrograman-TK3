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