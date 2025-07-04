🛒 Aplikasi Toko Sederhana (CodeIgniter 4)

Aplikasi web toko sederhana menggunakan CodeIgniter 4.
Dibuat untuk memenuhi tugas kuliah Pemrograman Web Lanjut.

✨ Fitur

# Login & Logout pengguna

# Role akses: admin & user

# Dashboard transaksi

# Kelola kategori produk

# Kelola produk (termasuk upload foto)

# Transaksi pembelian

# Riwayat transaksi pengguna

# Diskon otomatis

# Halaman profil

# API endpoint (/api) dengan API Key

⚙️ Cara Install

Berikut langkah-langkah untuk menjalankan proyek ini:

1. Clone repository:

   ```bash
   https://github.com/chalidaaa/belajar-ci-tugas.git

   ```

2. composer install

3. php spark migrate

4. php spark db:seed UserSeeder
   php spark db:seed ProductCategorySeeder.php
   php spark db:seed ProductSeeder
   php spark db:seed Diskon

5. php spark serve

6. akses di http://localhost:8081/

   ```

   ```

📁 Struktur Folder
bash
Copy
Edit
app/ # Controller, Model, View
public/ # Akses publik (CSS, JS, gambar)
database/
├─ Migrations # Struktur tabel
└─ Seeds # Data awal
writable/ # Log, cache, dll
.env # Konfigurasi lingkungan

Masih versi awal
Silakan gunakan dan kembangkan sesuai kebutuhan.
