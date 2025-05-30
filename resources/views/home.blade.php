<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Dimsum Mamen</title>
    <!-- Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="CSS/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Dimsum <span>Mamen</span></a>
        <div class="navbar-nav">
            <a href="home.html" style="list-style-type: none;">Home</a>
            <a href="menu.html">Menu</a>
            <a href="promo.html">Promo</a>
            <a href="about_us.html">Tentang Kami</a>
            <a href="login.html" style="padding-left: 50px;">Logout</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-item"
                style="background-image: url('IMG/carousel/carousel-home1.jpg');">
                <div class="carousel-text">Rasakan Lezatnya Dimsum Mamen, Dibuat dengan Bahan Berkualitas!</div>
            </div>
            <div class="carousel-item"
                style="background-image: url('IMG/carousel/carousel-home2.jpg');">
                <div class="carousel-text">Dibuat dengan Bahan Higienis</div>
            </div>
            <div class="carousel-item"
                style="background-image: url('IMG/carousel/carousel-home3.jpg');">
                <div class="carousel-text">Hadir dengan Cita Rasa Istimewa, Dimsum Mamen Siap Menemani Harimu!</div>
            </div>
        </div>
    </div>


    <!-- Tentang Kami Section -->
    <div class="about-us" id="about">
        <div class="about-image">
            <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2024/05/B130293-6-Winglok-Hongkong-Dimsum-Shop-1024x538.jpg"
                alt="Toko Dimsum Mamen">
        </div>
        <div class="about-description">
            <h2>Tentang Kami</h2>
            <p>Dimsum Mamen adalah restoran yang menyajikan berbagai macam dimsum lezat dengan bahan-bahan berkualitas
                tinggi. Kami berkomitmen untuk memberikan pengalaman makan yang tak terlupakan bagi setiap pelanggan
                kami.</p>
            <a href="about_us.html" class="cta-button">Selengkapnya</a>
        </div>
    </div>

    <div class="promo-section" id="promo">
        <a href="menu.html" class="promo-card" style="background-color: #ffe6e6; text-decoration: none;">
            <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2023/10/13/6c1bae8a-cc92-421b-9fa2-d3f95d2bc9ff.jpg"
                alt="Ulang Tahun">
            <h3>Promo Ulang Tahun</h3>
            <p>Beli Kids Meal gratis coloring book & crayon.</p>
        </a>
        <a href="menu.html" class="promo-card" style="background-color: #e6f7ff; text-decoration: none;">
            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/11/b659ff3b-2ff8-4db1-bcf6-28f51c15fc8c.jpg"
                alt="Diskon Spesial">
            <h3>Diskon Spesial</h3>
            <p>Potongan harga untuk pembelian combo tertentu.</p>
        </a>
        <a href="menu.html" class="promo-card" style="background-color: #e6ffe6; text-decoration: none;">
            <img src="https://i.pinimg.com/564x/88/89/4e/88894e3fe3a371757a2f44cf4a845852.jpg" alt="Menu Baru">
            <h3>Menu Baru</h3>
            <p>Coba menu terbaru dari Dimsum Mamen sekarang!</p>
        </a>
    </div>

    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="home.html">Home</a>
            <a href="about_us.html">Tentang Kami</a>
            <a href="menu.html">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credit">
            <p><a href="">Dimsum Mamen</a>. | &copy; 2025</p>
        </div>
    </footer>

    <script>
        let index = 0;
        const carouselItems = document.querySelectorAll(".carousel-item");

        function showNextImage() {
            carouselItems[index].classList.remove("active");

            index = (index + 1) % carouselItems.length;

            carouselItems[index].classList.add("active");

            document.querySelector(".carousel").style.transform = `translateX(${-index * 100}%)`;
        }

        setInterval(showNextImage, 5000);

        carouselItems[0].classList.add("active");

        feather.replace();
    </script>
</body>

</html>