<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Daftar Menu</h1>

    <div id="menu-list" class="row">
        <!-- Data menu akan dimuat di sini -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        fetchMenus();

        function fetchMenus() {
            $.ajax({
                url: '/api/menu', // sesuaikan dengan route index() kamu
                method: 'GET',
                success: function (data) {
                    $('#menu-list').empty();

                    if (data.length === 0) {
                        $('#menu-list').append('<p>Tidak ada menu yang tersedia.</p>');
                    } else {
                        data.forEach(function (menu) {
                            $('#menu-list').append(`
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        ${menu.gambar ? `<img src="${menu.gambar}" class="card-img-top" alt="${menu.nama_menu}">` : ''}
                                        <div class="card-body">
                                            <h5 class="card-title">${menu.nama_menu}</h5>
                                            <p class="card-text">${menu.deskripsi || ''}</p>
                                            <p class="card-text fw-bold">Rp ${parseFloat(menu.harga).toLocaleString('id-ID')}</p>
                                        </div>
                                    </div>
                                </div>
                            `);
                        });
                    }
                },
                error: function () {
                    $('#menu-list').html('<p class="text-danger">Gagal memuat data menu.</p>');
                }
            });
        }
    });
</script>
</body>
</html>
