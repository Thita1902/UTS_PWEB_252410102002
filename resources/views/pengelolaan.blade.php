@extends('layouts.app')

@section('title', 'Pengelolaan Produk')

@section('content')

<div class="container">

    <div class="page-heading">

        <h1>Pengelolaan Produk 🍦</h1>

        <p>Informasi produk dan persediaan Gabin Ice.</p>

    </div>

    <div class="card">

        <h2 style="margin-bottom: 20px;">Daftar Produk Gabin</h2>

        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach ($products as $index => $product)

                        <tr>

                            <td>{{ $index + 1 }}</td>

                            <td>{{ $product['name'] }}</td>

                            <td>{{ $product['category'] }}</td>

                            <td>
                                Rp {{ number_format($product['price'], 0, ',', '.') }}
                            </td>

                            <td>{{ $product['stock'] }}</td>

                            <td>

                                <span class="status {{ $product['stock'] == 0 ? 'empty' : '' }}">
                                    {{ $product['status'] }}
                                </span>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

        <p style="margin-top: 20px;">
            Total produk: {{ count($products) }} jenis Gabin.
        </p>

    </div>

</div>

@endsection