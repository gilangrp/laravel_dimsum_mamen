<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Dimsum Mamen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #333;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #007bff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .payment-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 60%;
        }

        .payment-form h2 {
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        .delivery-options {
            margin-top: 20px;
        }

        .delivery-options h3 {
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .delivery-options label {
            display: block;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .delivery-options input {
            margin-right: 10px;
        }

        .address-group {
            display: none;
            margin-top: 15px;
        }

        .payment-methods {
            margin-top: 20px;
        }

        .payment-methods h3 {
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .payment-methods label {
            display: block;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .payment-methods input {
            margin-right: 10px;
        }

        .order-summary {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 35%;
        }

        .order-summary h2 {
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #333;
        }

        .order-summary ul {
            list-style: none;
            padding: 0;
        }

        .order-summary ul li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .order-summary ul li span {
            font-weight: bold;
        }

        .total {
            border-top: 2px solid #ccc;
            padding-top: 10px;
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }

        .btn-pay {
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-pay:hover {
            background-color: #0056b3;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .modal-content h2 {
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #333;
        }

        .modal-content button {
            padding: 10px 20px;
            background-color: #29be15;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #27a417;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .payment-form,
            .order-summary {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="home.html">&lt; Back</a>
    </div>

    <div class="container">

        <div class="payment-form">
            <h2>Detail Pembayaran</h2>
            <form id="paymentForm">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Masukkan email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" placeholder="Masukkan nomor telepon" required>
                </div>
                <div class="delivery-options">
                    <h3>Pilihan Pengiriman</h3>
                    <label>
                        <input type="radio" name="delivery" value="pickup" required> Ambil di Tempat
                    </label>
                    <label>
                        <input type="radio" name="delivery" value="delivery" required> Diantar Kurir
                    </label>
                    <div class="address-group" id="addressGroup">
                        <div class="form-group">
                            <label for="address">Alamat Pengiriman</label>
                            <textarea id="address" placeholder="Masukkan alamat lengkap"></textarea>
                        </div>
                    </div>
                </div>
                <div class="payment-methods">
                    <h3>Metode Pembayaran</h3>
                    <label>
                        <input type="radio" name="payment" value="credit-card" required> Kartu Kredit
                    </label>
                    <label>
                        <input type="radio" name="payment" value="bank-transfer" required> Transfer Bank
                    </label>
                    <label>
                        <input type="radio" name="payment" value="e-wallet" required> E-Wallet
                    </label>
                </div>
                <button type="submit" class="btn-pay">Bayar Sekarang</button>
            </form>
        </div>

        <div class="order-summary">
            <h2>Ringkasan Pesanan</h2>
            <ul>
                <li>Dimsum Udang <span>Rp 25.000</span></li>
                <li>Dimsum Mentai <span>Rp 35.000</span></li>
                <li>Dimsum Jamur <span>Rp 15.000</span></li>
                <li>Minuman <span>Rp 10.000</span></li>
            </ul>
            <div class="total">
                Total: <span>Rp 85.000</span>
            </div>
        </div>
    </div>

    <div id="successModal" class="modal">
        <div class="modal-content">
            <h2>Pembayaran Berhasil!</h2>
            <p>Terima kasih telah melakukan pembayaran.</p>
            <button onclick="window.location.href='home.html'">Kembali ke Home</button>
        </div>
    </div>

    <script>

        const deliveryOptions = document.querySelectorAll('input[name="delivery"]');
        const addressGroup = document.getElementById('addressGroup');

        deliveryOptions.forEach(option => {
            option.addEventListener('change', function () {
                if (this.value === 'delivery') {
                    addressGroup.style.display = 'block';
                } else {
                    addressGroup.style.display = 'none';
                }
            });
        });

        const paymentForm = document.getElementById('paymentForm');
        const successModal = document.getElementById('successModal');

        paymentForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const delivery = document.querySelector('input[name="delivery"]:checked').value;
            const payment = document.querySelector('input[name="payment"]:checked').value;

            if (name && email && phone && delivery && payment) {
                successModal.style.display = 'flex';
            }
        });

        window.addEventListener('click', function (event) {
            if (event.target === successModal) {
                successModal.style.display = 'none';
            }
        });
    </script>
</body>

</html>