<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


<p>Aplikasi KRS dan KHS adalah Aplikasi berbasis web yang digunakan untuk sistem akademik.</p>
    
## Kebutuhan

- PHP Version >= 7.3
- Composer
- Apache (Web Server)
- Mysql (Database)

## Installasi

- unduh project kemudian extract atau bisa dengan mengclone ke laptop Anda.
- buka terminal dan arahkan ke directory project tersebut.
- untuk mempersiapkan database terdapat 2 cara, pertama dengan mengimportkan file .sql (siakad.sql) yang terdapat pada project dan yang kedua dengan menggunakan perintah <code>php artisan migrate</code> pada terminal.
- ubah file .env untuk mengkonfigurasikan database.
- jalankan perintah <code>php artisan storage:link</code> untuk membuat symbolic link agar file dapat diakses oleh public.
- untuk menjalankan project gunakan perintah <code>php artisan serve</code> pada terminal.
- kemudian akses http://127.0.0.1:8000 atau http://localhost:8000 pada browser Anda.
- untuk masuk gunakan :</br> 
Mahasiswa</br>
U : a31700040</br>
P : A3.1700040</br>
</br>
Prodi : </br>
U : prodi</br>
P : prodi</br>
</br>
Admin</br>
U : admin</br>
P : admin</br>
