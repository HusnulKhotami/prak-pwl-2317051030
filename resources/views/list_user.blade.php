@extends('layouts.app')

@section('content')
<div class="container my-5">

    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold" style="color: #4CAF50;">Daftar User</h3>
            <p class="text-muted small mb-0">Data pengguna yang sudah terdaftar di sistem.</p>
        </div>
        <a href="{{ route('user.create') }}" class="btn text-white rounded-3 px-3 shadow-sm" style="background-color: #4CAF50;">
            + Tambah User
        </a>
    </header>

    <!-- Tabel -->
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="custom-header">
                    <tr>
                        <th scope="col" class="px-3 py-3">No</th>
                        <th scope="col" class="px-3 py-3">Nama</th>
                        <th scope="col" class="px-3 py-3">NPM</th>
                        <th scope="col" class="px-3 py-3">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td class="px-3 py-3 fw-semibold">{{ $loop->iteration }}</td>
                            <td class="px-3 py-3">{{ $user->nama }}</td>
                            <td class="px-3 py-3">{{ $user->nim }}</td>
                            <td class="px-3 py-3">{{ $user->nama_kelas }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">
                                <i class="bi bi-exclamation-circle"></i> Belum ada data pengguna.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
