<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimsum Lezat</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #e69b0f;
            --bg: #010101;
            --second: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 7%;
            font-weight: 800;
            background-color: rgba(0, 0, 0, 0.8);
            color: var(--second);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
        }

        .navbar .navbar-logo span {
            color: var(--primary);
        }

        .navbar .navbar-logo {
            color: var(--second);
            font-size: 28px;
            font-style: italic;
            text-decoration: none;
        }

        .navbar .navbar-nav a {
            margin: 0 10px;
            font-size: 18px;
            color: var(--second);
            display: inline-block;
            text-decoration: none;
        }

        .navbar .navbar-nav a:hover {
            color: var(--primary);
        }

        .navbar .navbar-nav a::after {
            content: "";
            display: block;
            padding-bottom: 4px;
            border-bottom: 2px solid var(--primary);
            transform: scaleX(0);
            transition: 0.2s linear;
        }

        .navbar .navbar-nav a:hover::after {
            transform: scaleX(0.5);
        }

        .container {
            max-width: 900px;
            margin: 80px auto 30px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .menu-item {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item img {
            width: 100%;
            border-radius: 10px;
        }

        .menu-item a {
            display: inline-block;
            background-color: #393939;
            color: white;
            text-decoration: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .menu-item a:hover {
            background-color: #5f5f5f;
        }

        /* Footer */

        footer {
            background-color: var(--primary);
            text-align: center;
            padding: 1rem 0 3rem;
            margin-top: 3rem;
        }

        footer .socials {
            padding: 1rem 0;
        }

        footer .socials a {
            color: white;
            margin: 1rem;
        }

        footer .socials a:hover,
        footer .links a:hover {
            color: var(--bg);
        }

        footer .links {
            margin-bottom: 1.4rem;
        }

        footer .links a {
            color: white;
            padding: 0.7rem 1rem;
            text-decoration: none;
        }

        footer .credit {
            font-size: 0.8rem;
        }

        footer .credit a {
            color: var(--bg);
            font-weight: 700;
            text-decoration: none;
        }
    </style>
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

    <div class="container">
        <h2>Menu Dimsum</h2>
        <div class="menu">
            <div class="menu-item">
                <img src="IMG/menu/Kepiting.png" alt="Dimsum Kepiting">
                <h3>Dimsum Kepiting</h3>
                <p>Rp 20.000</p>
                <a href="payment.html">Pesan Sekarang</a>
            </div>
            <div class="menu-item">
                <img src="IMG/menu/Udang.png" alt="Dimsum Udang">
                <h3>Dimsum Udang</h3>
                <p>Rp 20.000</p>
                <a href="payment.html">Pesan Sekarang</a>
            </div>
            <div class="menu-item">
                <img src="IMG/menu/Jamur.png" alt="Dimsum Jamur">
                <h3>Dimsum Jamur</h3>
                <p>Rp 20.000</p>
                <a href="payment.html">Pesan Sekarang</a>
            </div>
            <div class="menu-item">
                <img src="IMG/menu/Wortel.png" alt="Dimsum Wortel">
                <h3>Dimsum Wortel</h3>
                <p>Rp 20.000</p>
                <a href="payment.html">Pesan Sekarang</a>
            </div>
            <div class="menu-item">
                <img src="IMG/menu/Beef.png" alt="Dimsum Beef">
                <h3>Dimsum Beef</h3>
                <p>Rp 20.000</p>
                <a href="payment.html">Pesan Sekarang</a>
            </div>
            <div class="menu-item">
                <img src="IMG/menu/Mentai.png" alt="Dimsum Mentai">
                <h3>Dimsum Mentai</h3>
                <p>Rp 35.000</p>
                <a href="payment.html">Pesan Sekarang</a>
            </div>
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

    <script>
        feather.replace();
    </script>
</body>

</html>