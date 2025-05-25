@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Daftar Promo</h2>

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


    <!-- Tombol Tambah Promo -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahPromoModal">
        + Tambah Promo
    </button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Promo</th>
                <th>Deskripsi</th>
                <th>Diskon</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($promos as $promo)
                <tr>
                    <td>{{ $promo->id }}</td>
                    <td>{{ $promo->nama_promo }}</td>
                    <td>{{ $promo->deskripsi }}</td>
                    <td>{{ $promo->diskon }}%</td>
                    <td>{{ $promo->tanggal_mulai }}</td>
                    <td>{{ $promo->tanggal_akhir }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editPromoModal{{ $promo->id }}">
                            Edit
                        </button>

                        <!-- Tombol Delete -->
                        <form action="{{ route('admin.promo.destroy', $promo->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin hapus promo ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editPromoModal{{ $promo->id }}" tabindex="-1" aria-labelledby="editPromoLabel{{ $promo->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('admin.promo.update', $promo->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editPromoLabel{{ $promo->id }}">Edit Promo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Nama Promo</label>
                                                <input type="text" class="form-control" name="nama_promo" value="{{ $promo->nama_promo }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi">{{ $promo->deskripsi }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Diskon (%)</label>
                                                <input type="number" class="form-control" name="diskon" value="{{ $promo->diskon }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Mulai</label>
                                                <input type="date" class="form-control" name="tanggal_mulai" value="{{ $promo->tanggal_mulai }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Akhir</label>
                                                <input type="date" class="form-control" name="tanggal_akhir" value="{{ $promo->tanggal_akhir }}">
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

<!-- Modal Tambah Promo -->
<div class="modal fade" id="tambahPromoModal" tabindex="-1" aria-labelledby="tambahPromoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.promo.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPromoLabel">Tambah Promo Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Promo</label>
                        <input type="text" class="form-control" name="nama_promo" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon (%)</label>
                        <input type="number" class="form-control" name="diskon" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggal_mulai" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tanggal_akhir" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Tambah Promo</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->
@endsection
