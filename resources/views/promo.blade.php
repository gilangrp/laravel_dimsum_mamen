<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/promo.css') }}">

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

    <!-- carousel Section Star -->
    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-item" style="background-image: url(IMG/Banner\ Promo\ Dimsum\ 2.png);">
                <div class="carousel-text">Promo 1: Diskon 10% untuk semua menu!</div>
            </div>
        </div>
    </div>
    <!-- carousel Section End -->

    <!-- Promo Header Section -->
    <div class="promo-header">
        <h2>Promo Spesial</h2>
        <p>Nikmati berbagai penawaran menarik dari Dimsum Mamen. Promo terbatas, buruan pesan sebelum kehabisan!</p>
        <div class="countdown">
            <i class="fas fa-clock"></i> Promo berakhir dalam:
            <span id="countdown-timer">03:23:45:12</span>
        </div>
    </div>


    <!-- Menu Start -->
    <section class="menu">
        <div class="menu-img">
            @forelse ($promos as $promo)
                <a href="/payment" class="menu-card">
                    <img src="{{ asset('storage/' . $promo->gambar) }}" alt="{{ $promo->nama_promo }}"
                        class="menu-card-img">
                    <h3 class="menu-card-title">{{ $promo->nama_promo }}</h3>
                    <p class="menu-card-title">Rp {{ number_format($promo->harga, 0, ',', '.') }}</p>
                    <p class="menu-card-title">Berlaku Hingga
                        {{ \Carbon\Carbon::parse($promo->tanggal_akhir)->translatedFormat('d F Y') }}</p>
                    <button class="order-btn">Pesan Sekarang</button>
                </a>
            @empty
                <p>Tidak ada promo tersedia saat ini.</p>
            @endforelse
        </div>
    </section>

    <!-- Menu End -->

    <!-- Special Offer Banner -->
    <div class="special-offer">
        <div class="offer-content">
            <h3>Gratis Ongkir!</h3>
            <p>Untuk pembelian minimal Rp 100.000 dengan kode promo: <strong>DIMSUMGRATIS</strong></p>
            <button class="btn-offer">Klaim Sekarang</button>
        </div>
    </div>

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

    <!-- Modal Klaim Kupon -->
    <div class="modal" id="couponModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-icon">🎉</div>
            <h3>Kupon Berhasil Diklaim!</h3>
            <div class="coupon-code">
                <p>Gunakan kode promo:</p>
                <div class="code">DIMSUMGRATIS</div>
            </div>
            <p class="modal-note">* Berlaku untuk pembelian minimal Rp 100.000</p>
            <button class="btn-modal">Tutup</button>
        </div>
    </div>

    <!-- Feather Icon -->
    <script>
        feather.replace();
        function updateCountdown() {
            const endDate = new Date("March 30, 2025 23:59:59").getTime();
            const now = new Date().getTime();
            const distance = endDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown-timer").innerHTML =
                `${days} Hari ${hours} Jam ${minutes} Menit ${seconds} Detik`;
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();

        // Modal Klaim Kupon
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('couponModal');
            const claimBtn = document.querySelector('.btn-offer');
            const closeModal = document.querySelector('.close-modal');
            const btnModal = document.querySelector('.btn-modal');

            claimBtn.addEventListener('click', function () {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            });

            closeModal.addEventListener('click', function () {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            });

            btnModal.addEventListener('click', function () {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            });

            window.addEventListener('click', function (event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        });
    </script>

</body>

</html>