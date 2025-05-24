<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/about_us.css') }}">
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Dimsum <span>Mamen</span></a>

        <div class="navbar-nav">
            <a href="home.html">Home</a>
            <a href="menu.html">Menu</a>
            <a href="promo.html">Promo</a>
            <a href="about_us.html">Tentang Kami</a>
            <a href="login.html" style="padding-left: 50px;">Logout</a>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Dimsum <span>Mamen</span></h1>
            <p>Dimsum Mamen adalah restoran yang menyajikan berbagai macam dimsum lezat dengan bahan-bahan berkualitas
                tinggi. Kami berkomitmen untuk memberikan pengalaman makan yang tak terlupakan bagi setiap pelanggan
                kami.</p>
        </main>
    </section>

    <!-- Hero Section End -->


    <!-- About Section Start -->

    <section id="about" class="about">
        <div class="row">
            <div class="about-img">
                <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2024/05/B130293-6-Winglok-Hongkong-Dimsum-Shop-1024x538.jpg"
                    alt="Tentang Kami">
            </div>
            <div class="stats-container">
                <div class="stat-box">
                    <h2>3</h2>
                    <p>Lokasi</p>
                </div>
                <div class="stat-box">
                    <h2>2024</h2>
                    <p>Sejak</p>
                </div>
                <div class="stat-box">
                    <h2>65+</h2>
                    <p>Karyawan</p>
                </div>
                <div class="stat-box">
                    <h2>100%</h2>
                    <p>Memuaskan</p>
                </div>
            </div>

        </div>
    </section>

    <!-- About Section End -->


    <section class="testimonial-section">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-container">
            <div class="testimonial-box">
                <p class="testimonial-title">"The best restaurant"</p>
                <p class="testimonial-text">
                    Saya sudah mencoba banyak dimsum di berbagai tempat, tapi di sini rasanya benar-benar berbeda! Kulitnya lembut, isian
                    dagingnya juicy, dan sausnya benar-benar pas. Pasti akan kembali lagi!
                </p>
                <div class="testimonial-author">
                    <img src="IMG/profil 1.jpg" alt="Sophie Robson">
                    <div>
                        <p class="author-name">Sophie Robson</p>
                        <p class="author-location">Los Angeles, CA</p>
                    </div>
                </div>
            </div>
    
            <div class="testimonial-box">
                <p class="testimonial-title">"Simply delicious"</p>
                <p class="testimonial-text">
                    Dimsumnya terasa segar dan dibuat dengan bahan berkualitas. Rasa otentiknya mengingatkan saya pada dimsum di restoran
                    premium. Cocok banget untuk makan bareng keluarga!
                </p>
                <div class="testimonial-author">
                    <img src="IMG/profil 2.jpg" alt="Jack Doe">
                    <div>
                        <p class="author-name">Jack Doe</p>
                        <p class="author-location">Los Angeles, CA</p>
                    </div>
                </div>
            </div>
    
            <div class="testimonial-box">
                <p class="testimonial-title">"One of a kind restaurant"</p>
                <p class="testimonial-text">
                    Awalnya cuma mau coba satu porsi, tapi akhirnya nambah lagi karena rasanya enak banget! Teksturnya pas, rasanya gurih,
                    dan harganya juga terjangkau. Highly recommended!
                </p>
                <div class="testimonial-author">
                    <img src="IMG/profil 3.jpg" alt="Michael Smith">
                    <div>
                        <p class="author-name">Michael Smith</p>
                        <p class="author-location">Los Angeles, CA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Start -->
    <section id="contact" class="contact">
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d132360.51626889256!2d107.64071791969951!3d-6.9023101544237955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1738385436813!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            <form action="" class="icon">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no hp">
                </div>
                <div>
                    <button type="submit" class="btn">
                        kirim pesan
                    </button>
                </div>
    
            </form>
        </div>
    </section>
    
    <!-- Contact End -->
    
    <!-- Footer Start -->
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
    <!-- Footer End -->
    
    <!-- Feather Icon -->
    <script>
        feather.replace();
    </script>
</body>

</html>