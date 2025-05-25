@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Daftar Menu</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <!-- Tombol Tambah Menu -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahMenuModal">
            + Tambah Menu
        </button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->nama_menu }}</td>
                        <td>{{ $menu->deskripsi }}</td>
                        <td>Rp{{ number_format($menu->harga, 0, ',', '.') }}</td>
                        <td><img src="{{ asset('storage/'.$menu->gambar) }}" alt="" width="80"></td>
                        <td>
                            <!-- Tombol Edit -->
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editModal{{ $menu->id }}">
                                Edit
                            </button>

                            <!-- Tombol Delete -->
                            <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin hapus menu ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal{{ $menu->id }}" tabindex="-1"
                                aria-labelledby="editModalLabel{{ $menu->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $menu->id }}">Edit Menu</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Menu</label>
                                                    <input type="text" name="nama_menu" class="form-control" value="{{ $menu->nama_menu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control">{{ $menu->deskripsi }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Harga</label>
                                                    <input type="number" name="harga" class="form-control" value="{{ $menu->harga }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Gambar (biarkan kosong jika tidak diganti)</label>
                                                    <input type="file" name="gambar" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Menu -->
    <div class="modal fade" id="tambahMenuModal" tabindex="-1" aria-labelledby="tambahMenuLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahMenuLabel">Tambah Menu Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Menu</label>
                            <input type="text" name="nama_menu" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Tambah Menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    const menus = @json($menus);
    console.log('List menu-menu:', menus);
</script>
@endsection
