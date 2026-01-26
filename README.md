# HMJ TI Website 🚀

Selamat datang di repositori resmi **Website Himpunan Mahasiswa Jurusan Teknologi Informasi**. Platform ini dikembangkan sebagai pusat informasi, layanan mahasiswa, dan manajemen kegiatan organisasi yang modern dan terintegrasi.

![Banner](https://via.placeholder.com/1200x400?text=HMJ+TI+Official+Website)

## ✨ Tentang Proyek

Website ini dibangun untuk mendigitalisasi berbagai aspek operasional HMJ TI, mulai dari penyebaran berita, manajemen agenda kemahasiswaan, hingga sistem administrasi internal. Dikembangkan dengan *stack* teknologi terkini untuk menjamin performa, keamanan, dan pengalaman pengguna yang optimal.

### Fitur Unggulan

- **🖥️ Modern & Responsif**: Antarmuka pengguna (UI) yang bersih dan estetik, dioptimalkan untuk berbagai perangkat (Desktop, Tablet, Mobile).
- **🛠️ Admin Panel Powerful**: Mengelola konten, pengguna, dan data sistem dengan mudah menggunakan **Filament V4**.
- **📅 Manajemen Event & Kalender**: Sistem *booking* acara dan jadwal kegiatan yang terintegrasi dengan tampilan kalender interaktif (*FullCalendar*).
- **📰 Portal Berita & Blog**: Publikasi artikel terkini seputar teknologi, kegiatan jurusan, dan prestasi mahasiswa.
- **🔐 Manajemen Akun & Role**: Sistem otentikasi aman dengan pembagian hak akses (Admin, Pengurus, User/Mahasiswa).
- **👤 Profil Proker**: Halaman khusus untuk menampilkan program kerja unggulan himpunan.

## 🛠️ Teknologi Utama

Proyek ini dibangun di atas fondasi teknologi yang kuat dan modern:

- **Framework**: [Laravel 12](https://laravel.com)
- **Admin Panel**: [Filament PHP 4](https://filamentphp.com)
- **Language**: PHP 8.2+
- **Database**: MySQL
- **Frontend Assets**: Tailwind CSS, Vite, Alpine.js
- **Plugins**: `saade/filament-fullcalendar`, dan paket pendukung lainnya.

## ⚙️ Instalasi & Menjalankan Lokal

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di mesin lokal Anda:

### Prasyarat System
- **PHP** >= 8.2
- **Composer**
- **Node.js** & **NPM**
- **MySQL Database**

### Langkah 1: Clone Repository
```bash
git clone https://github.com/username/hmjti.git
cd hmjti
```

### Langkah 2: Install Dependencies
Install paket PHP dan JavaScript yang dibutuhkan:
```bash
composer install
npm install
```

### Langkah 3: Konfigurasi Environment
Salin file konfigurasi contoh dan sesuaikan dengan database lokal Anda:
```bash
cp .env.example .env
php artisan key:generate
```
> ⚠️ **Penting**: Buka file `.env` dan pastikan konfigurasi `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` sesuai dengan setting MySQL Anda.

### Langkah 4: Migrasi Database
Jalankan migrasi untuk membuat tabel-tabel database (dan seeder jika ada data awal):
```bash
php artisan migrate --seed
```

### Langkah 5: Jalankan Server
Gunakan perintah berikut untuk menjalankan server pengembangan. Kami menyarankan menggunakan dua terminal atau tab terpisah.

**Terminal 1 (Laravel Server):**
```bash
php artisan serve
```

**Terminal 2 (Vite Assets):**
```bash
npm run dev
```

### Langkah 6: Akses Aplikasi
- **Halaman Utama**: Buka browser dan kunjungi `http://localhost:8000`
- **Panel Admin**: Login sebagai admin di `http://localhost:8000/admin`

## 🤝 Kontribusi

Kami sangat terbuka untuk kontribusi! Jika Anda ingin membantu mengembangkan website ini:
1. Fork repository ini.
2. Buat branch fitur baru (`git checkout -b fitur-keren`).
3. Commit perubahan Anda (`git commit -m 'Menambahkan fitur keren'`).
4. Push ke branch (`git push origin fitur-keren`).
5. Buat Pull Request.

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

---
<p align="center">
  Dibuat oleh <b>Tim Developer HMJ TI</b> - Dandy & Yoga.
</p>
