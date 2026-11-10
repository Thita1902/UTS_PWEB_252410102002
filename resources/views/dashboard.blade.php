@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container">

    <div class="page-heading">

        <h1>
            Selamat Datang, {{ $username }}! 
        </h1>

        <p>
            Role:
            <strong>{{ $role }}</strong>
        </p>

        <p>
            Berikut ringkasan informasi toko Gabin Ice Cream.
        </p>

    </div>


    <div class="grid">

        @foreach ($stats as $stat)

            <div class="card">

                <h3>
                    {{ $stat['title'] }}
                </h3>

                <div class="stat-number">
                    {{ $stat['value'] }}
                </div>

                <p>
                    {{ $stat['description'] }}
                </p>

            </div>

        @endforeach

    </div>


    <div class="card" style="margin-top: 25px;">

        <h2>
            Selamat Datang di Gabin Ice! 
        </h2>

        <p style="margin: 15px 0;">
            Kelola informasi produk dan pantau persediaan es krim Gabin
            melalui halaman pengelolaan.
        </p>

        <a
            href="{{ route('pengelolaan', ['username' => $username]) }}"
            class="button"
        >
            Lihat Pengelolaan Produk
        </a>

    </div>

</div>

@endsection

