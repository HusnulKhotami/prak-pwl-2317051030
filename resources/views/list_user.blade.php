@extends('layouts.app')

@section('content')
    <h1 style="margin-bottom: 20px;">Daftar Pengguna</h1>

    <table style="width: 100%; border-collapse: collapse; text-align: left; font-family: Arial, sans-serif;">
        <thead>
            <tr style="background-color: #4CAF50; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Nama</th>
                <th style="padding: 10px; border: 1px solid #ddd;">NPM</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                <tr style="background-color: {{ $loop->odd ? '#f9f9f9' : '#ffffff' }};">
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $user->id }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $user->nama }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $user->nim }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $user->nama_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
