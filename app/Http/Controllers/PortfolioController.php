<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Tampilkan halaman portofolio.
     *
     * Semua data (profile, skills, experience, dll) sengaja ditulis
     * di sini dulu dalam bentuk array PHP biasa, supaya kamu (sebagai
     * pemula Laravel) gampang paham alurnya: Controller -> kirim data -> View.
     *
     * Nanti kalau sudah nyaman, data ini bisa dipindah ke database
     * (pakai Model + Migration) supaya bisa diubah tanpa edit kode.
     */
    public function index(): View
    {
        $profile = [
            'name'      => 'Made Ray Joseph Hendrawan',
            'role'      => 'Web Developer',
            'tagline'   => 'Saya bikin website yang cepat, rapi, dan enak dipakai.',
            'photo'     => 'images/profile.jpg',
            'birthplace'=> 'Blimbingsari, Jembrana',
            'birthdate' => 'May 29, 2008',
            'location'  => 'Bali, Indonesia',
            'email'     => 'rayjosephxx.@gmail.com',
            'github'    => 'https://github.com/sosuhenk',
            'linkedin'  => 'http://www.linkedin.com/in/made-ray-joseph-hendrawan',
            'instagram' => 'https://www.instagram.com/makaneekgoreng?igsh=ajRjb3dtYzd3dGEz',
            'cv_url'    => '#', // ganti dengan link CV kamu (pdf)
        ];

        $about = [
            'bio' => 'Saya mahasiswa Teknik Informatika di Universitas Pendidikan Ganesha yang jatuh cinta sama dunia web development sejak pertama kali nulis "Hello World". Suka utak-atik Laravel, ngoprek Python, dan bikin tampilan yang nggak cuma jalan, tapi juga enak dilihat. Di luar coding, saya suka eksplor hal baru dan selalu semangat belajar teknologi terkini.',
            'focus' => ['Web Development', 'Backend Laravel', 'UI/UX dasar', 'Automation Python'],
        ];

        $stats = [
            ['value' => '2+', 'label' => 'Tahun Belajar Coding', 'color' => 'yellow'],
            ['value' => '3+', 'label' => 'Proyek Dibangun', 'color' => 'mint'],
            ['value' => '9', 'label' => 'Skill & Tools', 'color' => 'pink'],
            ['value' => '∞', 'label' => 'Cangkir Kopi', 'color' => 'blue'],
        ];

        $services = [
            ['icon' => '🖥️', 'title' => 'Web Development', 'desc' => 'Bangun website dari nol pakai Laravel, mulai dari database sampai tampilan akhir.'],
            ['icon' => '🎨', 'title' => 'UI Implementation', 'desc' => 'Ubah desain Figma/gambar jadi halaman web nyata dengan Tailwind CSS.'],
            ['icon' => '⚙️', 'title' => 'API & Automation', 'desc' => 'Bikin REST API sederhana dan script Python buat otomasi tugas berulang.'],
        ];

        $skills = [
            ['name' => 'HTML & CSS', 'level' => 90, 'icon' => '🌐', 'color' => 'yellow'],
            ['name' => 'JavaScript', 'level' => 75, 'icon' => '⚡', 'color' => 'pink'],
            ['name' => 'PHP', 'level' => 80, 'icon' => '🐘', 'color' => 'blue'],
            ['name' => 'Laravel', 'level' => 70, 'icon' => '🚀', 'color' => 'mint'],
            ['name' => 'MySQL', 'level' => 75, 'icon' => '🗄️', 'color' => 'yellow'],
            ['name' => 'Tailwind CSS', 'level' => 85, 'icon' => '🎨', 'color' => 'pink'],
            ['name' => 'Git & GitHub', 'level' => 80, 'icon' => '🌿', 'color' => 'blue'],
            ['name' => 'REST API', 'level' => 65, 'icon' => '🔌', 'color' => 'mint'],
            ['name' => 'Python', 'level' => 90, 'icon' => '🐍', 'color' => 'yellow'],
        ];

        $experiences = [
            [
                'title'  => 'Junior Web Developer',
                'place'  => 'Nama Perusahaan / Freelance',
                'period' => '2025 — Sekarang',
                'desc'   => 'Mengembangkan dan memelihara fitur website menggunakan Laravel & Tailwind CSS, kolaborasi dengan tim desain.',
            ],
            [
                'title'  => 'Peserta Bootcamp Web Development',
                'place'  => 'Nama Bootcamp',
                'period' => '2024',
                'desc'   => 'Belajar fundamental pemrograman web full-stack, mengerjakan beberapa proyek studi kasus.',
            ],
            [
                'title'  => 'Mahasiswa Teknik Informatika',
                'place'  => 'Universitas Pendidikan Ganesha',
                'period' => '2026 — Sekarang',
                'desc'   => 'Fokus pada rekayasa perangkat lunak dan pengembangan aplikasi web.',
            ],
        ];

        $projects = [
            [
                'title' => 'Sistem Informasi Sekolah',
                'desc'  => 'Aplikasi manajemen data siswa & nilai berbasis Laravel dengan role admin, guru, dan siswa.',
                'stack' => ['Laravel', 'MySQL', 'Tailwind'],
                'link'  => '#',
                'color' => 'yellow',
            ],
            [
                'title' => 'Landing Page UMKM',
                'desc'  => 'Website company profile untuk usaha kecil, fokus ke kecepatan loading dan SEO dasar.',
                'stack' => ['HTML', 'CSS', 'JavaScript'],
                'link'  => '#',
                'color' => 'pink',
            ],
            [
                'title' => 'Aplikasi Todo List',
                'desc'  => 'Aplikasi pencatat tugas dengan fitur CRUD lengkap sebagai latihan Laravel dari nol.',
                'stack' => ['Laravel', 'Blade', 'SQLite'],
                'link'  => '#',
                'color' => 'blue',
            ],
        ];

        $certificates = [
            ['title' => 'Belajar Dasar Pemrograman Web', 'issuer' => 'Dicoding', 'year' => '2024'],
            ['title' => 'Laravel for Beginners', 'issuer' => 'Udemy', 'year' => '2025'],
            ['title' => 'Git & GitHub Fundamentals', 'issuer' => 'Coursera', 'year' => '2025'],
            ['title' => 'Belajar Dasar Pemrograman Python', 'issuer' => 'Dicoding', 'year' => '2025'],
        ];

        $marquee = [
            'Web Developer', 'Laravel', 'Tailwind CSS', 'Clean Code',
            'UI/UX Curious', 'Open To Work', 'Python', 'Problem Solver',
        ];

        return view('portfolio', compact(
            'profile', 'about', 'stats', 'services', 'skills',
            'experiences', 'projects', 'certificates', 'marquee'
        ));
    }

    /**
     * Proses form kontak.
     *
     * Untuk sekarang pesan cuma divalidasi lalu ditampilkan pesan sukses.
     * Kalau nanti mau benar-benar mengirim email, tinggal tambahkan:
     *   Mail::to('email-kamu@gmail.com')->send(new ContactMessage($validated));
     * setelah konfigurasi SMTP di file .env (lihat README.md).
     */
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // TODO (opsional): kirim email sungguhan di sini, lihat README.md.

        return back()->with('success', 'Terima kasih, ' . $validated['name'] . '! Pesanmu sudah terkirim.');
    }
}
