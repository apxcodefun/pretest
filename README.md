# Aplikasi Manajemen Buku

## Pendahuluan

Perkenalkan, saya Ardiansyah Putra, seorang junior web developer yang terus belajar dan mengembangkan keterampilan di bidang pemrograman. Dalam proses pembuatan aplikasi ini, saya selalu merujuk pada dokumentasi resmi serta berbagai sumber lain untuk memastikan implementasi yang tepat.

Setiap pengguna memiliki akses eksklusif ke buku yang mereka tambahkan tanpa dapat dilihat oleh pengguna lain. Aplikasi ini dibangun menggunakan Laravel dengan pendekatan CRUD dan sistem autentikasi yang aman.

## Langkah-langkah Pengembangan

### 1. Studi Dokumentasi Laravel

Sebelum memulai pengembangan, saya terlebih dahulu membaca dokumentasi resmi Laravel untuk memahami instalasi, konfigurasi, dan fitur-fitur utama yang tersedia. Ini membantu saya dalam memahami arsitektur framework sebelum mulai mengimplementasikan kode.

### 2. Instalasi Laravel dan Setup Database

Setelah memahami dasar Laravel, saya menginstal framework ini dan membuat database dengan konfigurasi yang sesuai di file `.env`. Nama database yang digunakan adalah `book`.

### 3. Membuat Model, Controller, dan Resource

Untuk mempermudah proses CRUD, saya menggunakan resource controller dengan perintah berikut:

```sh
php artisan make:model Book -mcr
```

Perintah ini otomatis membuat Model (`Book`), Migration, dan Controller yang telah dilengkapi dengan metode CRUD.

### 4. Migrasi Database

Setelah model dan migration siap, saya menjalankan migrasi database:

```sh
php artisan migrate
```

### 5. Membuat Routing dan View

Saya membuat route untuk mengelola buku dan tampilan (view) yang diperlukan. Selama proses ini, saya selalu merujuk pada dokumentasi Laravel agar implementasi sesuai dengan standar yang direkomendasikan.

### 6. Implementasi CRUD

Setelah routing dan view selesai, saya mulai mengimplementasikan fitur CRUD pada buku. Proses ini melibatkan validasi input, handling request, serta pengolahan data dari database. Saya kembali merujuk pada dokumentasi Laravel untuk memastikan implementasi berjalan optimal.

### 7. Sistem Autentikasi

Saya menambahkan fitur autentikasi dengan registrasi dan login, menggunakan session untuk mengelola status pengguna. Setelah itu, saya melindungi route buku dengan middleware sehingga hanya pengguna yang telah login yang dapat mengakses dan mengelola data buku mereka.

### 8. Menambahkan Seeder untuk Default User

Agar sistem memiliki administrator default, saya membuat seeder dengan perintah berikut:

```sh
php artisan make:seeder RoleSeeder
php artisan make:seeder AdminSeeder
```

Lalu saya mengedit `DatabaseSeeder.php` untuk memanggil kedua seeder tersebut:

```php
$this->call([
    RoleSeeder::class,
    AdminSeeder::class,
]);
```

Menjalankan seeder dengan perintah:

```sh
php artisan migrate:fresh --seed
```

pada saat melakukan perintah migrate diatas, saya terjadi eror, setelah melihat erornya di berbagai sumber ternyata urutan migrationnya salah.
Jadi saya menyesuaikan urutan migration agar sesuai dengan dependensinya

1. Role Seeder
2. User
3. Book
   Langkah ini memastikan bahwa setelah migrasi ulang, data role dan admin default telah tersedia di database.

### 9. Penyesuaian Role Default

Saya menambahkan role default sebagai `user` untuk setiap pengguna baru yang mendaftar agar perannya dapat dibedakan dari admin.

### 10. Pengujian

Setelah semua fitur selesai, saya melakukan pengujian menyeluruh terhadap:

-   Registrasi dan login
-   CRUD buku
-   Middleware proteksi akses
-   Seeder dan role management

### 11. Redesign UI

Setelah memastikan semua fitur berfungsi dengan baik, saya melakukan redesign UI agar lebih responsif dan user-friendly.

Dalam proses pengembangan aplikasi ini, saya banyak membaca dokumentasi Laravel dari berbagai sumber untuk memahami dan mengimplementasikan fitur dengan benar. Dengan pendekatan ini, saya dapat menyelesaikan aplikasi secara terstruktur dan memastikan setiap fitur berjalan dengan baik.

---

Terima kasih telah membaca! . 🚀
