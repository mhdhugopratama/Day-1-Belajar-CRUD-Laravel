# CRUD Mahasiswa - Laravel 12 (Muhammad Hugo Pratama)

## Deskripsi

Project ini adalah aplikasi web sederhana untuk mengelola data mahasiswa menggunakan Laravel 12.
Fitur utama yang dibuat adalah operasi CRUD (Create, Read, Update, Delete).

Project ini ditujukan untuk pembelajaran dasar Laravel, terutama bagi yang baru mulai memahami alur kerja framework ini.

---

## Fitur

* Menampilkan data mahasiswa
* Menambahkan data mahasiswa
* Mengedit data mahasiswa
* Menghapus data mahasiswa
* Validasi input (NIM unik dan field wajib diisi)

---

## Struktur Data

Tabel: `mahasiswas`

| Field      | Keterangan                   |
| ---------- | ---------------------------- |
| id         | Primary key (auto increment) |
| nim        | Nomor induk (unik)           |
| nama       | Nama mahasiswa               |
| jurusan    | Jurusan                      |
| created_at | Timestamp                    |
| updated_at | Timestamp                    |

---

## Cara Menjalankan

1. Clone repository

```bash
git clone https://github.com/username/nama-repo.git
```

2. Masuk ke folder project

```bash
cd nama-repo
```

3. Install dependency

```bash
composer install
```

4. Copy file environment

```bash
cp .env.example .env
```

5. Konfigurasi database di file `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_mahasiswa
DB_USERNAME=root
DB_PASSWORD=
```

---

## Import Database

Project ini sudah menyediakan file database:

```
db_mahasiswa.sql
```

Langkah import:

1. Buka phpMyAdmin
2. Buat database baru dengan nama `db_mahasiswa`
3. Masuk ke database tersebut
4. Klik menu **Import**
5. Upload file `db_mahasiswa.sql`
6. Klik **Go**

---

## Menjalankan Aplikasi

1. Generate application key

```bash
php artisan key:generate
```

2. Jalankan server

```bash
php artisan serve
```

3. Buka di browser

```
http://127.0.0.1:8000/mahasiswa
```

---

## Cara Penggunaan

* Klik **Tambah Data** untuk menambahkan mahasiswa
* Isi form lalu simpan
* Gunakan tombol **Edit** untuk mengubah data
* Gunakan tombol **Hapus** untuk menghapus data

---

## Catatan

* Field NIM menggunakan constraint unik, sehingga tidak boleh ada data dengan NIM yang sama
* Validasi sudah ditambahkan untuk mencegah error langsung dari database
* Method GET masih digunakan untuk delete (untuk pembelajaran), pada implementasi nyata sebaiknya menggunakan DELETE

---

## Teknologi

* Laravel 12
* PHP 8.2+
* MySQL
* Blade Template

---

## Penutup

Project ini dibuat sebagai latihan dasar memahami Laravel.
Masih banyak hal yang bisa dikembangkan seperti pagination, search, dan autentikasi.
=======
# Day-1-Belajar-CRUD-Laravel
>>>>>>> 29010ce8c5c83d255afbcc6dd93fd956d5e05ea2
