<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Management Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" style="width: 200px; height: 100vh;">
            <h4>Management Admin</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.menu.index') }}" class="nav-link text-white">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.promo.index') }}" class="nav-link text-white">Promo</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.order.index') }}" class="nav-link text-white">Order</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.payment.index') }}" class="nav-link text-white">Payment</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="p-4 flex-grow-1">
            @yield('content')
        </div>
    </div>

    <!-- Tambahkan Bootstrap JS supaya modal dan komponen lainnya bisa jalan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
</html>
