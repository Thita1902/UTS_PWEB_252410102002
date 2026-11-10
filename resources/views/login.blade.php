@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="login-wrapper">

    <div class="login-card">

        <h1>Gabin Ice</h1>

        <h2>
            Selamat Datang
        </h2>

        <p>
            Silakan masuk ke akun toko.
        </p>

        <form action="{{ route('login.process') }}" method="GET">

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    name="username"
                    id="username"
                    placeholder="Masukkan username"
                    required
                >

            </div>

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>

            <button type="submit" class="login-button">
                Masuk
            </button>

        </form>

    </div>

</div>

@endsection