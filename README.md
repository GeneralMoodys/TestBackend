<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Test BackEnd

1. Persiapan

    - Install aplikasi Laravel dengan menjalankan perintah sebagai berikut :
      composer create-project laravel/laravel TestBackend

2. Konfigurasi MongoDB

    - Instal MongoDB untuk Laravel dengan menjalankan perintah berikut melalui terminal:
      composer require jenssegers/mongodb
    - Setelah instalasi selesai, buka file config/app.php dan tambahkan ServiceProvider dan Facade berikut ini:
      Di dalam 'providers' array:
      Jenssegers\Mongodb\MongodbServiceProvider::class,
    - Langkah selanjutnya buka file '.env' dan ubah konfigurasi database menjadi :
      DB_CONNECTION=mongodb
      DB_HOST=127.0.0.1
      DB_PORT=27017
      DB_DATABASE=testbackend
      DB_USERNAME=
      DB_PASSWORD=

3. Membuat Model

    - Buat Model Kendaraan, Motor & Mobil dengan perintah berikut :
      ' php artisan make:model Kendaraan '
      ' php artisan make:model Motor '
      ' php artisan make:model Mobil '
      Lalu isi masing masing model dengan kolom sesuai kebutuhan, dalam kasus ini berarti pada Model Kendaraan field yang diperlukan :
    - Tahun Keluaran
    - Warna
    - Harga
      Pada Model Motor field yang diperlukan :
    - Mesin
    - Tipe Suspensi
    - Tipe Transmisi
      Pada Model Mobil field yang diperlukan :
    - Mesin
    - Kapasitas Penumpang
    - Tipe.

4. Membuat Repository

    - Buat direktori "Repositories" pada folder app/, lalu buat file Repository dengan nama KendaraanRepository.php, MotorRepository.php, MobilRepository.php.
    - Buka file repository yang sudah dibuat, pada masing masing file isi kan function code all, find, create, update, delete.

5. Membuat Controller

    - Buat Controller untuk masing masing class Kendaraan, Motor, Mobil dengan perintah berikut :
      ' php artisan make:controller ControllerKendaraan '
      ' php artisan make:controller ControllerMotor '
      ' php artisan make:controller ControllerMobil '
    - Lalu buka masing masing file dan isi kan kode dengan function index, show, store, update, destroy.

6. Membuat Routes

    - Buka file 'routes/api.php' dan tambahkan routing dari tiap tiap controller.

7. Menjalankan Aplikasi

    - Jalankan server development dengan perintah berikut :
      ' php artisan serve '
    - lalu sekarang akses API menggunakan url ' http://localhost:8000/api/namaroutingcontroller' untuk mengakses tiap tiap kelas data.

8. Membuat Unit Test
    - Buka file tests/Feature/KendaraanTest.php dan ganti kode dengan kode function list data,create data, update data, delete data.
    - Lalu jalankan perintah berikut :
      ' php artisan test '
