
# Platform Online Course
Dibuat oleh : Muhammad Irfan Akbar

Platform Online Course adalah aplikasi web untuk membuat dan mengikuti kursus online.

## Fitur
- Registrasi Pengguna
- Pembuatan Kursus
- Pengelolaan Materi
- Pencarian Kursus
- Dashboard

## Instalasi
1. Clone repositori ini:
   ```bash
   git clone https://github.com/Irpanai/ProjectWebDevEcourse.git

2. Install dependencies:
   ```bash
   composer install
   composer update

3. Buat file .env:
   ```bash
   cp .env.example .env

4. Atur konfigurasi database di .env
   
6. Generate key aplikasi:
   ```bash
   php artisan key:generate

7. Jalankan migrasi dan seeder:
   ```bash
   php artisan migrate
   php artisan migrate:fresh --seed

8. Jalankan aplikasi:
   ```bash
   php artisan optimize
   php artisan serve


## Tampilan Online Course
Halaman Kursus

![alt text](https://github.com/Irpanai/ProjectWebDevEcourse/blob/master/SSProject/CRUD_Course.png)


Tambah Kursus

![alt text](https://github.com/Irpanai/ProjectWebDevEcourse/blob/master/SSProject/Membuat_Kursus_Baru.png)


Edit Kursus

![alt text](https://github.com/Irpanai/ProjectWebDevEcourse/blob/master/SSProject/Mengedit_Kursus.png)


Halaman Materi

![alt text](https://github.com/Irpanai/ProjectWebDevEcourse/blob/master/SSProject/CRUD_Material.png)


Tambah Materi

![alt text](https://github.com/Irpanai/ProjectWebDevEcourse/blob/master/SSProject/Membuat_Materi_Baru.png)


Edit Materi

![alt text](https://github.com/Irpanai/ProjectWebDevEcourse/blob/master/SSProject/Mengedit_Materi.png)


