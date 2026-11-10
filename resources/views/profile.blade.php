@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container">

    <div class="page-heading">

        <h1>Profile Pengguna 👤</h1>

        <p>Informasi pengguna yang sedang mengakses website.</p>

    </div>

    <div class="card profile-info">

        <h2 style="margin-bottom: 15px;">
            Informasi Akun
        </h2>

        <p><strong>Nama Toko:</strong> Gabin Ice</p>

        <p><strong>Username:</strong> {{ $username }}</p>

        <p><strong>Role:</strong> {{ $role }}</p>

        <p><strong>Status:</strong> Aktif</p>

        <p><strong>Aplikasi:</strong> Sistem Pengelolaan Gabin Ice</p>

        <a
            href="{{ route('dashboard', ['username' => $username]) }}"
            class="button"
            style="margin-top: 20px;"
        >
            Kembali ke Dashboard
        </a>

    </div>

</div>

@endsection