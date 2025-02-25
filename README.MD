# Sistem Manajemen Peminjaman Buku

Proyek ini adalah sistem manajemen peminjaman buku sederhana yang dibangun menggunakan PHP dan MySQL. Sistem ini memungkinkan pengguna untuk mengelola data buku, anggota, dan peminjaman.

## Fitur
- Manajemen Buku: Tambah, edit, hapus, dan lihat daftar buku.
- Manajemen Anggota: Tambah, edit, hapus, dan lihat daftar anggota.
- Peminjaman Buku: Anggota dapat meminjam buku, dan stok buku akan otomatis berkurang.
- Tampilan Responsif: Desain yang ramah untuk perangkat mobile dan desktop.

## Struktur Database
Berikut adalah struktur database yang digunakan:

### Tabel buku
| Kolom              | Tipe Data  | Deskripsi                     |
|--------------------|------------|-------------------------------|
| id                 | INT        | ID unik buku (Primary Key)    |
| judul              | VARCHAR    | Judul buku                    |
| penulis            | VARCHAR    | Nama penulis buku             |
| tahun_terbit       | INT        | Tahun terbit buku             |
| stok               | INT        | Jumlah stok buku              |
| jumlah_peminjaman  | INT        | Jumlah buku yang dipinjam      |

### Tabel anggota
| Kolom              | Tipe Data  | Deskripsi                     |
|--------------------|------------|-------------------------------|
| id                 | INT        | ID unik anggota (Primary Key) |
| nama               | VARCHAR    | Nama anggota                  |
| alamat             | VARCHAR    | Alamat anggota                |
| telepon            | VARCHAR    | Nomor telepon anggota         |
| email              | VARCHAR    | Email anggota                 |

### Tabel peminjaman
| Kolom              | Tipe Data  | Deskripsi                     |
|--------------------|------------|-------------------------------|
| id                 | INT        | ID unik peminjaman (Primary Key) |
| buku_id            | INT        | ID buku yang dipinjam (Foreign Key) |
| anggota_id         | INT        | ID anggota yang meminjam (Foreign Key) |
| tanggal_kembali    | DATE       | Tanggal pengembalian (opsional) |
