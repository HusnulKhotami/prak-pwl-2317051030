@extends('layouts.app')

@section('content')
<div class="container my-5" style="max-width: 600px;">

    <!-- Header -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-success-custom">✏️ {{ $title }}</h2>
        <p class="text-muted">Ubah data mata kuliah dengan benar sebelum menyimpan.</p>
    </div>

    <!-- Form Edit -->
    <div class="card shadow-sm border-0 rounded-4 p-4">
        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Mata Kuliah</label>
                <input type="text" name="nama_mk" 
                       value="{{ $mk->nama_mk }}" 
                       class="form-control rounded-3 shadow-sm" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Jumlah SKS</label>
                <input type="number" name="sks" value="{{ $mk->sks }}" class="form-control rounded-3 shadow-sm" 
                placeholder="Masukkan jumlah SKS" required>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary rounded-pill px-4 shadow-sm">
                    ← Kembali
                </a>
                <button type="submit" class="btn btn-primary rounded-pill px-4 shadow-sm">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Style tambahan -->
<style>
input:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(13,110,253,.25);
}
.text-success-custom {
    color: #28a745 !important;
}

</style>
@endsection
