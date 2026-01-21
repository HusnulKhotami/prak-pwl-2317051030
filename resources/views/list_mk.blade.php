@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold" style="color:#28a745;">{{ $title }}</h2>
            <p class="text-muted mb-0">Daftar semua mata kuliah yang tersedia.</p>
        </div>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success shadow-sm rounded-pill px-4 py-2 fw-semibold">
            + Tambah Mata Kuliah
        </a>
    </div>

    <!-- Table -->
    <div class="card shadow-sm border-1 rounded-4 overflow-hidden">
        <table class="table table-hover align-middle mb-0">
            <thead class="text-white text-center" style="background-color: #198754;">
                <tr>
                    <th style="width: 5%;">No</th>
                    <th>Nama Mata Kuliah</th>
                    <th style="width: 10%;">SKS</th>
                    <th style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mks as $mk)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <!-- Nama Mata Kuliah di Tengah -->
                        <td class="fw-semibold text-center">{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <!-- Tombol Edit -->
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                   class="btn btn-success btn-sm rounded-pill d-flex align-items-center gap-2 shadow-sm px-3 py-1"
                                   style="background: linear-gradient(45deg,#28a745,#7ed957); border:none; transition: all 0.3s;">
                                    <i class="fa-solid fa-pen-to-square"></i> 
                                    <span>Edit</span>
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" 
                                      method="POST" class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                            class="btn btn-danger btn-sm rounded-pill d-flex align-items-center gap-2 shadow-sm px-3 py-1"
                                            style="background: linear-gradient(45deg,#dc3545,#b02a37); border:none; transition: all 0.3s;"
                                            onclick="confirmDelete(this)">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <span>Hapus</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            Belum ada data mata kuliah.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- SweetAlert Konfirmasi Hapus -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(button) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                button.closest('form').submit();
            }
        });
    }
</script>

<!-- Efek Hover -->
<style>
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
    }
    table th, table td {
        vertical-align: middle;
    }
</style>
@endsection
