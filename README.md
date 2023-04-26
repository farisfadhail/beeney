# Project Preparation

### 1. Clone Project

Lakukan kode berikut pada gitbash teman-teman:

1. Masuk ke folder yang diinginkan untuk meletakkan proyek, klik kanan, Open with Git Bash.
2. Ketik ```git clone -b {{nama branch}} {{link http/ssh repo laos-be}}``` lalu tekan Enter. Tunggu hingga seluruh download dan publishing selesai.
3. Ketik ```cd {{folder clone}}``` untuk pindah ke folder tempat clone projek
4. Buka Git Bash lagi lalu jalankan ```composer i```. Tunggu hingga instalasi dependency composer selesai.
5. Ketik ```cp .env.example .env``` untuk copy .env.example menjadi .env. Hal ini dikarenakan .env tidak bisa masuk ke Github karena gitignore. Tapi gapapa
6. Ketik ```php artisan key:generate``` untuk generate APP_KEY pada .env
7. Ketik ```npm i``` untuk install npm jika ada keperluan di UI Dashboard
8. Ketik ```npm run build``` untuk mengcompile app.css dan app.js di resource.
9. Sekarang proyek siap dijalankan tinggal melakukan ```php artisan serve```.
10. Jika ingin menjalankan migrasi, jalankan ```php artisan migrate```.

nb: Jika ingin menjalankan seeder yang sudah dibuat, jalankan ```php artisan db:seed```. 
