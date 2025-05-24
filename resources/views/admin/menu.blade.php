@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Daftar Menu</h2>

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
                                  onsubmit="return confirm('Are you sure you want to delete this menu?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
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
                                                    <label for="nama_menu{{ $menu->id }}" class="form-label">Nama Menu</label>
                                                    <input type="text" name="nama_menu" class="form-control" id="nama_menu{{ $menu->id }}" value="{{ $menu->nama_menu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="deskripsi{{ $menu->id }}" class="form-label">Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control" id="deskripsi{{ $menu->id }}">{{ $menu->deskripsi }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="harga{{ $menu->id }}" class="form-label">Harga</label>
                                                    <input type="number" name="harga" class="form-control" id="harga{{ $menu->id }}" value="{{ $menu->harga }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gambar{{ $menu->id }}" class="form-label">Gambar (biarkan kosong jika tidak diganti)</label>
                                                    <input type="file" name="gambar" class="form-control" id="gambar{{ $menu->id }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
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
@endsection

@section('scripts')
<script>
    const menus = @json($menus);
    console.log('List menu-menu:', menus);
</script>
@endsection
