📝 Laravel ToDoList – Mini Project

Ini adalah Mini Project Aplikasi ToDoList berbasis Laravel, dibuat untuk memenuhi Tugas Mini Project KSM Sahabat PNJ - Divisi Web Profesional.  
Aplikasi ini memungkinkan pengguna untuk membuat, mengedit, dan menghapus daftar tugas harian mereka dengan sistem autentikasi dan tampilan yang user-friendly.

👨‍💻 Developer

- Nama  : Muh.Akmal Fahim
- NIM   : C2C023019
- Kelas : Reg -A

🔧 Fitur Utama

- ✅ Registrasi & Login pengguna  
- ✅ Dashboard ToDo untuk pengguna terautentikasi  
- ✅ CRUD ToDo:
  - Tambah tugas
  - Edit tugas
  - Tandai tugas selesai/belum
  - Hapus tugas  
- ✅ Editor deskripsi menggunakan Trix Editor  
- ✅ Validasi data input  
- ✅ Pagination daftar tugas  


📁 Struktur Folder Penting

├── app/
├── resources/
│ └── views/
│ ├── layouts/
│ ├── login/
│ ├── register/
│ └── todo/
├── routes/
│ └── web.php
├── database/
│ └── migrations/
├── public/
└── .env.example


⚙️ Teknologi yang Digunakan

- Laravel 10+
- PHP 8+
- Bootstrap 5.3
- Trix Editor
- Git & GitHub

📸 Preview Tampilan UI

Berikut adalah beberapa cuplikan tampilan dari aplikasi Laravel ToDoList:

🏠 Home
![Home](https://i.imgur.com/ugX3t6l.png)

ℹ️ About
![About](https://i.imgur.com/8KLcpSq.png)

📝 Register
![Register](https://i.imgur.com/cO0u6aU.png)

🔐 Login
![Login](https://i.imgur.com/4ONZ17n.png)

🗒️ Sebelum Membuat ToDo
![Sebelum Membuat Todo](https://i.imgur.com/HnVMFJG.png)

➕ Saat Membuat ToDo
![Saat Membuat Todo](https://i.imgur.com/js9GL3x.png)

✅ Setelah Membuat ToDo
![Setelah Membuat Todo](https://i.imgur.com/zur6JXN.png)

✏️ Saat Mengedit ToDo
![Saat Mengedit Todo](https://i.imgur.com/QhTwRmh.png)


🚀 Cara Menjalankan Project Secara Lokal

```bash
git clone https://github.com/FathiKhairanPratama22/laravel-todolist.git
cd laravel-todolist
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
