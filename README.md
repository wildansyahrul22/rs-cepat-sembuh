# RS Cepat Sembuh

Sistem Informasi Manajemen Rumah Sakit berbasis web untuk RS Cepat Sembuh Bandar Lampung. Memungkinkan pasien mendaftar online dan petugas rumah sakit mengelola alur penanganan pasien.

## Fitur

- **Landing Page** — Informasi rumah sakit dan layanan
- **Pendaftaran Online** — Pasien mengisi form booking secara mandiri
- **Login Multi-role** — Admin, Dokter, Apoteker
- **Dashboard** — Statistik dan grafik ringkasan (ApexCharts)
- **Manajemen Dokter** — CRUD data dokter
- **Manajemen Ruangan** — CRUD data poli/ruangan
- **Alur Penanganan Pasien** — Status treatment: `Sudah Mendaftar` → `Menunggu Antrian Dokter` → `Selesai Ditangani` → `Menunggu Pembayaran` → `Selesai`
- **Cetak PDF** — Laporan treatment pasien (Barryvdh DomPDF)
- **Cek Riwayat** — Pasien dapat mengecek riwayat berobat berdasarkan NIK

## Tech Stack

- **Backend:** Laravel 13, PHP 8.4
- **Database:** MySQL
- **Frontend:** Tailwind CSS v4, Vite
- **Chart:** ApexCharts
- **PDF:** barryvdh/laravel-dompdf

## Instalasi

```bash
git clone https://github.com/wildansyahrul22/rs-cepat-sembuh.git
cd rs-cepat-sembuh
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Sesuaikan konfigurasi database di `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rs_cepat_sembuh
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migrasi dan seeder:

```bash
php artisan migrate --seed
```

Build frontend asset:

```bash
npm run build
```

Jalankan server:

```bash
php artisan serve
```

Buka `http://localhost:8000`

## Akun Default

| Role        | Employee ID    | Password  |
|-------------|---------------|-----------|
| Admin       | `ADM-001`     | `password` |
| Dokter      | `DR-UMUM-001` | `password` |
| Dokter      | `DR-DALAM-001`| `password` |
| Apoteker    | `APO-001`     | `password` |

## Lisensi

MIT
