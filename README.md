# Aplikasi Pengelolaan Toko Gabin Ice (UTS PWEB)

Proyek ini merupakan aplikasi berbasis web menggunakan **Laravel** yang dibangun untuk memenuhi tugas Ujian Tengah Semester (UTS) Pemrograman Web. Aplikasi ini dirancang untuk mengelola informasi produk dan persediaan di toko **Gabin Ice Cream** tanpa menggunakan database persistent.

## Fitur Utama
- **Authentication (Login/Logout)**: Autentikasi berbasis Request Parameter GET tanpa koneksi database.
- **Dashboard**: Menampilkan ringkasan statistik toko (Total Produk, Jumlah Kategori, dan Status Stok) serta pesan selamat datang sesuai akun yang aktif.
- **Pengelolaan Produk**: Menampilkan daftar produk es krim Gabin lengkap dengan informasi kategori, harga, stok, dan status ketersediaan.
- **Profile Pengguna**: Menampilkan detail informasi akun pengguna yang sedang mengakses sistem.

## Kredensial Login

Aplikasi menyediakan 2 jenis akun default:

1. **Admin**
   - **Username**: `admin`
   - **Password**: `admin123`
   - **Role**: Admin

2. **Karyawan**
   - **Username**: `karyawan`
   - **Password**: `karyawan123`
   - **Role**: Karyawan

## Teknologi yang Digunakan
- **Framework**: Laravel 11 / 10
- **Styling**: Custom CSS (`css/style.css`)
- **Architecture**: Single Controller (`PageController`) untuk mengelola routing dan pengiriman data ke Blade View.

<img width="634" height="293" alt="image" src="https://github.com/user-attachments/assets/c0d4605b-c1d1-4114-8dee-cd40f78ea98a" />
<img width="640" height="296" alt="image" src="https://github.com/user-attachments/assets/92df68c8-318f-4b23-9e7f-fea07273a699" />
<img width="640" height="296" alt="image" src="https://github.com/user-attachments/assets/c7e7de24-5e07-4608-9bde-4ddbd5b7692c" />
<img width="640" height="295" alt="image" src="https://github.com/user-attachments/assets/63cf7ba1-afd8-4ae0-a6cc-889e15eada80" />


