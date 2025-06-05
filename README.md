#  📽️ Web Presentation App - CodeIgniter
Aplikasi ini dirancang untuk mengelola dan mempublikasikan tutorial presentasi dengan dukungan sistem autentikasi berbasis webservice serta fitur ekspor ke format PDF. Pengguna dapat masuk ke sistem, membuat tutorial, membagikannya secara publik melalui tautan, dan mengunduhnya sebagai dokumen PDF.

## ✨ Fitur Utama

- ✅ **Login via Webservice** (Email & Password)
- ✅ **CRUD Master Tutorial** (Judul, deskripsi, dll.)
- ✅ **CRUD Detail Tutorial** (Langkah-langkah, isi tutorial)
- ✅ **Public Preview**: Tutorial dapat diakses publik via `url_presentation`
- ✅ **PDF Export**: Cetak presentasi ke PDF via `url_finished`
- ✅ **DataTable Dashboard**: Menampilkan data mata kuliah dari webservice
- ✅ **Status Show/Hide** per detail tutorial
- ✅ **Validasi URL Unik** untuk `presentation` & `finished`
- ✅ **Webservice Server**: Menyediakan endpoint data untuk sistem eksternal


## 🚀 Cara Menjalankan

### 1. Clone & Install
> git clone https://github.com/liliianaa/WebPresentationApp-PWL.git
> cd WebPresentationApp-PWL
> composer install
> cp env .env
> php spark key:generate
> php spark serve

### 2. Setup Database

**Atur Koneksi database .env**
- database.default.hostname = localhost
- database.default.database = webpresentationapp
- database.default.username = root
- database.default.password =
- database.default.DBDriver = MySQLi

**Jalankan Perintah Migrasi di terminal**
php spark migrate

## 🔐 Akun Login Webservice
Gunakan akun berikut untuk login:
- **Email** : [aprilyani.safitri@gmail.com](mailto:aprilyani.safitri@gmail.com)  
- **Password** : `123456`

## 🛠 Teknologi
- ⚙️CodeIgniter 4
- 🧾 Dompdf — Library PHP untuk generate file PDF dari HTML.
- 🔐 JWT Webservice — Sistem autentikasi menggunakan JSON Web Token (melalui endpoint eksternal)
- 🌐 HTTP Client CI4 — Untuk mengakses API/webservice dari dalam aplikasi.
- 🗃️ MySQL / MariaDB — Sebagai database utama aplikasi.
- 🎨 Bootstrap — Untuk tata letak dan antarmuka pengguna (jika digunakan).

