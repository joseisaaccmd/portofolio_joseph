# Portofolio Neobrutalism — Laravel

Halo! Ini adalah paket file custom untuk portofolio kamu. Karena saya (Claude) tidak
bisa menjalankan `composer` di sistem saya, kamu perlu **membuat project Laravel baru**
dulu di komputermu, lalu **menimpa/menambahkan file-file dari paket ini** ke dalamnya.
Ikuti langkah di bawah pelan-pelan, semuanya dijelaskan.

---

## 0. Persiapan (kalau belum pernah install Laravel sama sekali)

Kamu butuh 3 hal di komputer: **PHP**, **Composer**, dan **Node.js**.

**Cara termudah kalau pakai Windows:** install [Laragon](https://laragon.org/download/)
(gratis). Laragon sudah termasuk PHP + Composer + MySQL jadi satu, tinggal install lalu buka
"Terminal" dari menu Laragon.

Kalau pakai Mac: install [Herd](https://herd.laravel.com/) (gratis, sudah termasuk PHP & Composer).

Selain itu, install **Node.js** (untuk compile CSS/Tailwind) dari https://nodejs.org (pilih versi LTS).

Cek semua sudah terpasang dengan menjalankan di terminal:
```bash
php -v
composer -v
node -v
npm -v
```
Kalau semua muncul versinya (bukan error), lanjut ke langkah 1.

---

## 1. Buat project Laravel baru

Buka terminal, arahkan ke folder tempat kamu mau menyimpan project (misal Desktop), lalu:

```bash
composer create-project laravel/laravel portofolio-saya
cd portofolio-saya
```

Tunggu sampai selesai (proses download, agak lama tergantung koneksi internet).

---

## 2. Timpa file dengan file dari paket ini

Dari paket zip yang saya berikan, salin folder & file berikut ke dalam folder
`portofolio-saya` yang baru dibuat tadi (**timpa/replace kalau ada file yang sama**):

```
routes/web.php                          → timpa
app/Http/Controllers/PortfolioController.php  → tambahkan (file baru)
resources/views/portfolio.blade.php     → tambahkan
resources/views/layouts/app.blade.php   → tambahkan
resources/views/partials/               → tambahkan seluruh folder
resources/css/app.css                   → timpa
resources/js/app.js                     → timpa
public/images/profile.jpg               → tambahkan
tailwind.config.js                      → tambahkan (file baru)
postcss.config.js                       → tambahkan (file baru)
vite.config.js                          → timpa
package.json                            → timpa
```

**Tips:** paling gampang, extract zip ini, lalu drag-and-drop semua folder/file di atas
ke dalam folder `portofolio-saya`, biarkan sistem menimpa file yang sudah ada.

---

## 3. Install dependency

Masih di dalam folder `portofolio-saya`, jalankan:

```bash
npm install
```

Ini akan mendownload Tailwind CSS dan Vite (build tool untuk compile CSS/JS).

---

## 4. Jalankan project

Kamu butuh **2 terminal terbuka bersamaan** di folder `portofolio-saya`:

**Terminal 1** — compile CSS/JS (biarkan tetap jalan, jangan ditutup):
```bash
npm run dev
```

**Terminal 2** — jalankan server Laravel:
```bash
php artisan serve
```

Setelah itu buka browser ke **http://127.0.0.1:8000** — portofolio kamu sudah jalan! 🎉

---

## 5. Ganti isi konten jadi milik kamu

Semua teks (nama, skill, pengalaman, proyek, sertifikat) ada di **satu file** supaya
gampang diedit:

```
app/Http/Controllers/PortfolioController.php
```

Buka file itu, ganti semua `'Nama Kamu'`, `'Nama Perusahaan'`, link GitHub/LinkedIn,
dan seterusnya, sesuai data kamu yang asli. Simpan file, refresh browser — perubahan
langsung muncul.

Foto profil kamu sudah otomatis dipasang di `public/images/profile.jpg`. Kalau mau
ganti foto lain, cukup timpa file itu dengan foto baru (nama file harus tetap
`profile.jpg`, atau ganti juga path-nya di `PortfolioController.php` bagian `'photo'`).

---

## 6. Struktur file, biar kamu paham alurnya

```
routes/web.php                     → "pintu masuk" URL, mengarah ke Controller
app/Http/Controllers/
  PortfolioController.php          → menyiapkan data (nama, skill, dll) & kirim ke view
resources/views/
  layouts/app.blade.php            → kerangka HTML utama (head, navbar, footer)
  portfolio.blade.php              → menyusun urutan section di halaman
  partials/
    navbar.blade.php               → menu navigasi pojok kanan atas
    hero.blade.php                 → section pembuka + foto kamu
    skills.blade.php               → section skill/tech stack
    experience.blade.php           → section pengalaman
    projects.blade.php             → section proyek
    certificates.blade.php         → section sertifikat
    contact.blade.php              → form kontak
resources/css/app.css              → styling neobrutalism (Tailwind + custom class)
tailwind.config.js                 → warna, font, shadow custom
```

Alur data: **route → controller → view (blade)**. Ini pola dasar Laravel yang akan
kamu pakai terus, jadi pahami alur ini dulu sebelum lanjut ke fitur lain (database,
auth, dll).

---

## 7. Kalau mau form kontak benar-benar mengirim email (opsional)

Saat ini form kontak cuma menampilkan pesan "terkirim" tanpa benar-benar mengirim
email. Kalau mau aktifkan pengiriman email sungguhan:

1. Buat App Password Gmail (Google Account → Security → App Passwords).
2. Di file `.env`, isi:
   ```
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=emailkamu@gmail.com
   MAIL_PASSWORD=app-password-nya
   MAIL_ENCRYPTION=tls
   ```
3. Bilang ke saya, nanti saya bantu buatkan Mailable class-nya.

---

## 8. Deploy (biar bisa diakses online)

Kalau nanti sudah siap online, opsi gratis/murah yang beginner-friendly:
- **Railway** atau **Hostinger** (support Laravel + MySQL)
- Untuk yang lebih advanced: VPS + Laravel Forge

Bilang saja kalau kamu sudah sampai tahap ini, nanti saya bantu step-by-step juga.

---

Kalau ada error di tengah jalan (composer, npm, atau tampilan berantakan), screenshot
error-nya dan kirim ke saya, saya bantu debug bareng. Selamat mencoba! 🚀
