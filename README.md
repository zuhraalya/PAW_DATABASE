# CRUD Review Film

Aplikasi sederhana untuk menampilkan, menambah, mengubah, dan menghapus data review film. Dibuat menggunakan PHP native (mysqli) + MySQL + HTML.

## Fitur
- **Read**: Menampilkan seluruh data film dalam tabel
- **Create**: Menambah film + review baru lewat form di halaman utama
- **Update**: Mengubah data film yang sudah ada (`edit.php`)
- **Delete**: Menghapus data film (`hapus.php`)

## Struktur File
```
crud-film/
├── database.sql     # Script SQL untuk membuat database & tabel
├── koneksi.php       # Konfigurasi koneksi ke database
├── index.php         # Halaman utama (form tambah + tampil data)
├── edit.php           # Form edit data
├── hapus.php          # Script hapus data
└── README.md
```

## Cara Menjalankan (Laragon)

1. Extract folder `crud-film` ke `C:\laragon\www\`
2. Start Laragon (Apache + MySQL)
3. Buka HeidiSQL, File > Load SQL file, pilih `database.sql`, jalankan (F9)
4. Sesuaikan `$pass` di `koneksi.php` jika MySQL kamu pakai password
5. Buka browser: `http://localhost/crud-film/index.php`

## Teknologi
- PHP (mysqli, prepared statements)
- MySQL
- HTML (tanpa CSS/framework eksternal)
