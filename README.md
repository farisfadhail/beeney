# Project Preparation

### 1. Clone Project

Lakukan kode berikut pada gitbash teman-teman:

1. Masuk ke folder yang diinginkan untuk meletakkan proyek, klik kanan, Open with Git Bash.
2. Ketik ```git clone {{link http/ssh repo project-ppl}}``` lalu tekan Enter. Tunggu hingga seluruh download dan publishing selesai.
3. Ketik ```cd {{folder clone}}``` untuk pindah ke folder tempat clone projek
4. Buka Git Bash lagi lalu jalankan ```composer i```. Tunggu hingga instalasi dependency composer selesai.
5. copy .env.example menjadi .env. Hal ini dikarenakan .env tidak bisa masuk ke Github karena gitignore. dan ubah DB_DATABASE menjadi "project-ppl".
7. Ketik ```php artisan key:generate``` untuk generate APP_KEY pada .env
8. Ketik ```npm i``` untuk install npm jika ada keperluan di UI Dashboard
9. Ketik ```npm run build``` untuk mengcompile app.css dan app.js di resource.
10. Sekarang proyek siap dijalankan tinggal melakukan ```php artisan serve``` untuk menjalankan project laravel dan ```npm run dev``` untuk menjalankan tailwindcss didalam project.
11. Jika ingin menjalankan migrasi, jalankan ```php artisan migrate```.
12. Jika ingin menjalankan seeder yang sudah dibuat, jalankan ```php artisan db:seed```. 

nb: Jika ingin menjalankan migrasi dan seeder secara bersamaan jalankan ```php artisan migrate --seed```.
