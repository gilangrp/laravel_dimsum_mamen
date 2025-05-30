<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimsum Lezat</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Dimsum <span>Mamen</span></a>
        <div class="navbar-nav">
            <a href="/home">Home</a>
            <a href="/menu">Menu</a>
            <a href="/promo">Promo</a>
            <a href="/about_us">About Us</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container">
        <h2>Menu Dimsum</h2>
        <div class="menu">
            @forelse ($menus as $menu)
                <div class="menu-item">
                    <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama_menu }}">
                    <h3>{{ $menu->nama_menu }}</h3>
                    <p>Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                    <a href="/payment">Pesan Sekarang</a>
                </div>
            @empty
                <p>Tidak ada menu tersedia.</p>
            @endforelse
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
            <a href="/home">Home</a>
            <a href="/about_us">Tentang Kami</a>
            <a href="/menu">Menu</a>
            <a href="/contact">Kontak</a>
        </div>

        <div class="credit">
            <p><a href="#">Dimsum Mamen</a>. | &copy; 2025</p>
        </div>
    </footer>
    <!-- Footer End -->

    <script>
        feather.replace();
    </script>
</body>

</html>
