<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // Memproses login
    public function loginProcess(Request $request)
    {
        // Mengambil username dan password dari form
        $username = $request->query('username');
        $password = $request->query('password');

        $accounts = [
            'admin' => [
                'password' => 'admin123',
                'role' => 'Admin'
            ],

            'karyawan' => [
                'password' => 'karyawan123',
                'role' => 'Karyawan'
            ]
        ];

        // Mengecek username dan password
        if (
            isset($accounts[$username]) &&
            $accounts[$username]['password'] === $password
        ) {
            // Login berhasil
            // Hanya username yang dikirim sebagai Request Parameter
            return redirect()->route('dashboard', [
                'username' => $username
            ]);
        }

        // Jika username atau password salah
        return redirect()->route('login')
            ->withErrors([
                'username' => 'Username atau password salah.'
            ]);
    }

    // Menampilkan dashboard
    public function dashboard(Request $request)
    {
        // Mengambil username dari Request Parameter GET
        $username = $request->query('username', 'Pengguna');

        // Role tetap ditentukan berdasarkan username
        if ($username === 'admin') {
            $role = 'Admin';
        } elseif ($username === 'karyawan') {
            $role = 'Karyawan';
        } else {
            $role = 'Pengguna';
        }

        $stats = [
            [
                'title' => 'Total Produk',
                'value' => 5,
                'description' => 'Pilihan rasa'
            ],

            [
                'title' => 'Kategori',
                'value' => 2,
                'description' => 'Classic & Special'
            ],

            [
                'title' => 'Stok Aman',
                'value' => 5,
                'description' => 'Semua rasa tersedia'
            ]
        ];

        return view(
            'dashboard',
            compact('username', 'role', 'stats')
        );
    }

    // Menampilkan halaman pengelolaan produk
    public function pengelolaan(Request $request)
    {
        // Mengambil username dari Request Parameter GET
        $username = $request->query('username', 'Pengguna');

        // Role berdasarkan username
        if ($username === 'admin') {
            $role = 'Admin';
        } elseif ($username === 'karyawan') {
            $role = 'Karyawan';
        } else {
            $role = 'Pengguna';
        }

        $products = [
            [
                'name' => 'Chocolate',
                'category' => 'Classic',
                'price' => 8000,
                'stock' => 15,
                'status' => 'Tersedia'
            ],

            [
                'name' => 'Matcha',
                'category' => 'Classic',
                'price' => 8000,
                'stock' => 12,
                'status' => 'Tersedia'
            ],

            [
                'name' => 'Coffee',
                'category' => 'Classic',
                'price' => 18000,
                'stock' => 20,
                'status' => 'Tersedia'
            ],

            [
                'name' => 'Cheesecake Strawberry',
                'category' => 'Special',
                'price' => 12000,
                'stock' => 10,
                'status' => 'Tersedia'
            ],

            [
                'name' => 'Cookies n Cream',
                'category' => 'Special',
                'price' => 10000,
                'stock' => 8,
                'status' => 'Tersedia'
            ]
        ];

        return view(
            'pengelolaan',
            compact('username', 'role', 'products')
        );
    }

    // Menampilkan halaman profile
    public function profile(Request $request)
    {
        // Mengambil username dari Request Parameter GET
        $username = $request->query('username', 'Pengguna');

        // Role berdasarkan username
        if ($username === 'admin') {
            $role = 'Admin';
        } elseif ($username === 'karyawan') {
            $role = 'Karyawan';
        } else {
            $role = 'Pengguna';
        }

        return view(
            'profile',
            compact('username', 'role')
        );
    }
}