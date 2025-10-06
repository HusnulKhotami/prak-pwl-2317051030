@extends('layouts.app')

@section('content')
<div class="container my-5" style="max-width: 500px;">

    <header class="text-center mb-4">
        <h3 class="fw-bold mb-2" style="color: #4CAF50;">Tambah User</h3>
        <p class="text-muted" style="font-size: 14px;">Isi data pengguna baru dengan benar.</p>
    </header>

    <form action="{{ route('user.store') }}" method="POST" class="bg-white p-4 shadow-sm rounded-4">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label small text-muted">Nama</label>
            <input type="text" id="nama" name="nama" 
                   class="form-control border-0 border-bottom rounded-0 shadow-none" 
                   placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label small text-muted">NPM</label>
            <input type="text" id="npm" name="nim" 
                   class="form-control border-0 border-bottom rounded-0 shadow-none" 
                   placeholder="Masukkan NPM" required>
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label small text-muted">Kelas</label>
            <select name="kelas_id" id="kelas_id" 
                    class="form-select border-0 border-bottom rounded-0 shadow-none" required>
                <option value="" disabled selected>Pilih kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('user.index') }}" class="btn btn-light px-4 rounded-3">Batal</a>
            <button type="submit" class="btn text-white px-4 rounded-3" style="background-color: #4CAF50;">
                Kirim
            </button>
        </div>
    </form>

</div>
@endsection
