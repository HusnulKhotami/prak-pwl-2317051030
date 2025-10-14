@extends('layouts.app')

@section('content')
<div class="container my-5" style="max-width: 600px;">

    <!-- Header -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-success background-color red"> {{ $title }}</h2>
        <p class="text-muted">Isi form berikut untuk menambahkan mata kuliah baru.</p>
    </div>

    <!-- Form -->
    <div class="card shadow-sm border-0 rounded-4 p-4">
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Mata Kuliah</label>
                <input type="text" name="nama_mk" class="form-control rounded-3 shadow-sm" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Jumlah SKS</label>
                <input type="number" name="sks" class="form-control rounded-3 shadow-sm" min="1" max="3" required>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary rounded-pill px-4 shadow-sm">
                    ← Kembali
                </a>
                <button type="submit" class="btn btn-success rounded-pill px-4 shadow-sm">
                     Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Style tambahan -->
<style>
input:focus {
    border-color: #198754;
    box-shadow: 0 0 0 0.2rem rgba(25,135,84,.25);
}
</style>
@endsection
