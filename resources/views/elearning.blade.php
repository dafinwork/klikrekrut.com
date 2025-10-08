@extends('layouts.app')

@section('title', 'Klik Rekrut - Belajar Rekrutmen')
@section('description', 'Temukan pekerjaan impianmu di Klik Rekrut')
@section('keywords', 'find job, lowongan kerja, klik rekrut')

@section('content')

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KLIK rekrut - Find Job</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
  /* Terapkan Poppins untuk semua elemen */
  * {
    font-family: 'Poppins', sans-serif !important;
  }
</style>


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
<link href="assets/css/apply.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- ==================== BAGIAN HEADER WEBSITE ==================== -->
<header class="header fixed-top"> <!-- Bagian paling atas situs yang selalu terlihat saat di-scroll -->
  <div class="container d-flex justify-content-between align-items-center py-2">
    <!-- Container untuk merapikan posisi logo dan menu -->

    <!-- ==================== LOGO ==================== -->
    <a href="/" class="logo d-flex align-items-center"> <!-- Saat logo diklik, akan kembali ke halaman utama -->
      <img src="assets/img/footer.png" alt="Klikrekrut Logo" class="logo-full" /> <!-- Gambar logo Klik Rekrut -->
    </a>

    <!-- ==================== TOMBOL BURGER UNTUK MOBILE ==================== -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i> <!-- Ikon garis tiga (burger menu) muncul di layar kecil -->

    <!-- ==================== MENU NAVIGASI ==================== -->
    <nav id="navmenu" class="navmenu"> <!-- Bagian menu utama -->
      <ul> <!-- Daftar menu -->
        <li><a href="/">Services</a></li> <!-- Menu untuk halaman Services -->
        <li><a href="elearning">E-learning</a></li> <!-- Menu untuk halaman E-learning -->
        <li><a href="applypartner">Apply as partner</a></li> <!-- Menu untuk halaman pendaftaran mitra -->

        <!-- Tombol ajakan gabung komunitas -->
        <li>
          <a href="https://chat.whatsapp.com/I3mvornLsmv96QiwlcLctQ?mode=ems_copy_t" 
             target="_blank" 
             rel="noopener noreferrer"
             class="btn btn-outline-light wa-btn rounded-pill px-3 py-1 d-flex align-items-center gap-2">
            Join to Community <!-- Teks tombol -->
          </a>
        </li>
      </ul>
    </nav> <!-- Akhir nav -->
  </div> <!-- Akhir container -->
</header> <!-- Akhir header -->

<!-- ==================== OVERLAY UNTUK MOBILE ==================== -->
<!-- Overlay ini muncul saat menu mobile dibuka agar latar belakang jadi gelap -->
<div class="mobile-nav-overlay"></div>

<!-- ==================== SCRIPT UNTUK EFEK LOADING TOMBOL KOMUNITAS ==================== -->
<script>
  document.addEventListener("DOMContentLoaded", function () { // Jalankan setelah halaman selesai dimuat
    const joinBtn = document.getElementById("joinBtn"); // Cari tombol dengan id "joinBtn"

    joinBtn.addEventListener("click", function (e) { // Saat tombol diklik
      this.classList.add("loading"); // Tambahkan efek “loading” (animasi bisa diatur di CSS)

      // Optional: kembalikan tombol ke normal setelah 3 detik
      // setTimeout(() => {
      //   this.classList.remove("loading");
      // }, 3000);
    });
  });
</script>

<!-- ==================== SCRIPT UNTUK MENU MOBILE ==================== -->
<script>
  document.addEventListener("DOMContentLoaded", function () { // Pastikan semua elemen sudah siap
    const toggle = document.querySelector(".mobile-nav-toggle"); // Ikon burger (garis tiga)
    const navmenu = document.getElementById("navmenu"); // Bagian menu navigasi
    const overlay = document.querySelector(".mobile-nav-overlay"); // Latar gelap di belakang menu

    // Saat tombol burger diklik
    toggle.addEventListener("click", () => {
      navmenu.classList.toggle("active"); // Tampilkan atau sembunyikan menu
      overlay.classList.toggle("active"); // Tampilkan atau sembunyikan overlay

      // Ganti ikon burger jadi tanda X, dan sebaliknya
      toggle.classList.toggle("bi-list");
      toggle.classList.toggle("bi-x");
    });

    // Saat area overlay diklik (di luar menu)
    overlay.addEventListener("click", () => {
      navmenu.classList.remove("active"); // Tutup menu
      overlay.classList.remove("active"); // Hilangkan overlay
      toggle.classList.add("bi-list"); // Kembalikan ikon jadi burger
      toggle.classList.remove("bi-x");
    });
  });
</script>

<!-- ==================== BAGIAN UTAMA HALAMAN ==================== -->
<main class="main"> <!-- Semua konten halaman utama akan dimulai di sini -->

<!-- Tambahkan di layout atau halaman -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<!-- ==================== HERO SECTION ==================== -->
<section id="hero" class="hero-section"> <!-- Bagian utama hero di halaman depan -->
    <div class="container text-center hero-content"> <!-- Pembungkus isi hero, teksnya ditengah -->

        <!-- ==================== JUDUL UTAMA ==================== -->
        <h1 class="hero-title"> <!-- Judul besar di bagian hero -->
            Platform Belajar Rekrutmen: <br> <!-- Teks utama baris pertama -->
            Satu Skill untuk Pekerja dan Perekrut <!-- Teks utama baris kedua -->
        </h1>

        <!-- ==================== TOMBOL AJAKAN (CTA) ==================== -->
        <a href="#materi" class="btn-hero"> <!-- Tombol menuju ke bagian materi -->
            Jelajahi Materi <!-- Teks tombol -->
            <img src="assets/img/panahputih.png" alt="Panah" class="btn-icon"> <!-- Ikon panah di dalam tombol -->
        </a>
    </div>

    <!-- ==================== BAGIAN FITUR ==================== -->
    <div class="hero-features"> <!-- Tiga fitur utama hero -->
        
        <!-- Fitur 1 -->
        <div class="feature-item"> <!-- Satu fitur -->
            <img src="assets/img/award.png" alt="Exclusive" class="feature-icon"> <!-- Ikon fitur -->
            <h5>Exclusive Platform</h5> <!-- Judul fitur -->
            <p>Kami pionir e-learning untuk pembelajaran rekrutmen</p> <!-- Deskripsi fitur -->
        </div>

        <!-- Fitur 2 -->
        <div class="feature-item">
            <img src="assets/img/mic.png" alt="Speakers" class="feature-icon"> <!-- Ikon fitur -->
            <h5>Top Speakers</h5>
            <p>Dibuat oleh Profesional, Praktisi & Rekruter terkurasi</p>
        </div>

        <!-- Fitur 3 -->
        <div class="feature-item">
            <img src="assets/img/iconorg.png" alt="2in1" class="feature-icon">
            <h5>2 in 1 Function</h5>
            <p>Materi dirancang untuk Jobseeker dan Recruiter</p>
        </div>
    </div>
</section>

<!-- ==================== BOOTSTRAP JS ==================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> <!-- Library Bootstrap untuk efek & layout -->
<style>
/* ==================== HERO SECTION ==================== */
.hero-section {
    background: url("assets/img/desktoppx.jpg") center center no-repeat; /* Gambar background versi desktop */
    background-size: cover; /* Supaya gambar menutupi seluruh area */
    background-position: top; /* Fokus gambar di bagian atas */
    background-attachment: scroll; /* Gambar ikut bergerak saat di-scroll */
    background-repeat: no-repeat; /* Tidak mengulang gambar */
    width: 100%; /* Lebar penuh layar */
    min-height: 100vh; /* Tinggi minimal 1 layar penuh */
    display: flex; /* Gunakan flexbox agar isi bisa diatur */
    flex-direction: column; /* Susunan isi dari atas ke bawah */
    align-items: center; /* Tengah horizontal */
    justify-content: center; /* Tengah vertikal */
    text-align: center; /* Teks di tengah */
    margin-top: 70px; /* Jarak dari header agar tidak tertutup */
}

/* ==================== HERO CONTENT (Judul & Tombol) ==================== */
.hero-content {
    z-index: 2; /* Supaya berada di atas background */
    max-width: 800px; /* Batas lebar teks */
    margin-top: auto;
    margin-bottom: auto;
}

/* ==================== JUDUL HERO ==================== */
.hero-title {
  font-weight: 700; /* Huruf tebal */
  font-size: 41px; /* Ukuran besar untuk desktop */
  line-height: 1.4; /* Jarak antar baris teks */
  color: #2e6bbc;  /* Warna biru utama */
  text-shadow: 
    -1px -1px 0 #fff,  
     1px -1px 0 #fff,
    -1px  1px 0 #fff,
     1px  1px 0 #fff,
    -2px -2px 0 #fff,  
     2px -2px 0 #fff,
    -2px  2px 0 #fff,
     2px  2px 0 #fff; /* Bayangan putih di sekeliling teks agar terlihat di background */
}

/* ==================== TOMBOL UTAMA ==================== */
.btn-hero {
    display: inline-flex; /* Supaya teks dan ikon sejajar horizontal */
    align-items: center; /* Vertikal tengah */
    gap: 10px; /* Jarak antara teks dan ikon */
    background: linear-gradient(90deg, #5DE0E6, #004AAD); /* Warna gradasi tombol */
    color: #fff; /* Teks putih */
    font-size: 16px;
    font-weight: 600;
    padding: 12px 26px; /* Ruang dalam tombol */
    border: none;
    border-radius: 50px; /* Ujung tombol melengkung */
    text-decoration: none; /* Hilangkan garis bawah link */
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Bayangan tombol */
    transition: all 0.3s ease; /* Efek halus saat hover */
    margin-top: 40px; /* Jarak antara tombol dan judul */
}

/* Ikon di dalam tombol */
.btn-hero .btn-icon {
    width: 14px;
    height: 14px;
    object-fit: contain; /* Jaga proporsi ikon */
    transition: transform 0.3s ease; /* Efek animasi halus */
}

/* Efek saat hover tombol */
.btn-hero:hover {
    transform: translateY(-3px) scale(1.03); /* Naik sedikit dan membesar */
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.25); /* Bayangan lebih besar */
}

/* Efek ikon bergerak ke kanan saat hover */
.btn-hero:hover .btn-icon {
    transform: translateX(5px);
}

/* ==================== BAGIAN FITUR HERO ==================== */
.hero-features {
    display: flex; /* Gunakan flexbox */
    justify-content: center; /* Tengah horizontal */
    flex-wrap: wrap; /* Kalau layar kecil, fitur akan turun ke bawah */
    gap: 50px; /* Jarak antar fitur */
    position: relative;
    z-index: 2; /* Supaya tetap di atas background */
    max-width: 1100px;
    margin-bottom: 20px;
}

/* Setiap fitur */
.feature-item {
    flex: 1; /* Bagi ruang sama rata */
    max-width: 250px;
    display: flex;
    flex-direction: column; /* Ikon di atas, teks di bawah */
    align-items: center; /* Tengah semua isi */
    justify-content: space-between; /* Rapi dengan jarak */
    text-align: center;
    color: #2e6bbc; /* Warna teks biru */
    transition: transform 0.3s ease; /* Efek animasi halus */
}

/* Saat diarahkan kursor, fitur membesar sedikit */
.feature-item:hover {
    transform: scale(1.05);
}

/* Ikon di tiap fitur */
.feature-icon {
    width: 65px;
    height: 65px;
    object-fit: contain; /* Jaga proporsi gambar */
    margin-bottom: 12px; /* Jarak bawah ikon */
}

/* Judul fitur */
.feature-item h5 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 6px;
    color: #004AAD; /* Warna biru tua */
}

/* Deskripsi fitur */
.feature-item p {
    font-size: 14px;
    color: #333; /* Warna teks abu gelap */
    margin: 0;
    line-height: 1.5; /* Supaya mudah dibaca */
}

/* ==================== TAMPILAN MOBILE (LAYAR KECIL) ==================== */
@media (max-width: 768px) {
    /* Ganti gambar background untuk versi mobile */
    .hero-section {
        background: url("assets/img/learningmobile.png") center top no-repeat; /* Gambar versi HP */
        background-size: cover;
        min-height: 60vh; /* Lebih pendek agar muat di layar HP */
        padding: 40px 20px;
        margin-top: 60px; /* Jarak dari header mobile */
    }

    /* Atur ukuran dan posisi teks */
    .hero-content {
        max-width: 95%;
        margin-top: 100px;
        margin-bottom: 100px;
    }

    /* Ukuran judul disesuaikan */
    .hero-title {
        font-size: 28px;
        line-height: 1.3;
    }

    /* Ukuran tombol disesuaikan */
    .btn-hero {
        font-size: 14px;
        padding: 10px 20px;
        margin-top: 40px;
    }

    /* Fitur ditumpuk ke bawah */
    .hero-features {
        flex-direction: column;
        gap: 30px;
    }

    /* Setiap fitur jadi lebih lebar dan tengah */
    .feature-item {
        max-width: 90%;
        margin: 0 auto;
    }

    /* Ukuran ikon dan teks disesuaikan untuk HP */
    .feature-icon {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }

    .feature-item h5 {
        font-size: 16px;
    }

    .feature-item p {
        font-size: 13px;
    }
}
</style>


<!-- ================= TESTIMONI SECTION ================= -->
<section class="testimoni-section"> <!-- Bagian khusus untuk menampilkan testimoni pengguna -->
  <div class="container"> <!-- Pembungkus utama agar layout rapi di tengah -->

    <!-- Judul -->
    <h2 class="section-title">Apa Kata Mereka?</h2> <!-- Judul utama section -->

    <!-- Wrapper Carousel -->
    <div class="testimoni-wrapper"> <!-- Pembungkus semua kartu testimoni + tombol panah -->
      
      <!-- Tombol Panah Kiri -->
      <button class="carousel-btn prev" aria-label="Previous"> <!-- Tombol untuk menggeser ke kiri -->
        <i class="bi bi-chevron-left"></i> <!-- Ikon panah kiri (pakai Bootstrap Icons) -->
      </button>

      <!-- Track Carousel -->
      <div class="carousel-track"> <!-- Jalur utama tempat semua kartu testimoni bergeser -->

        <!-- ================= CARD TESTIMONI 1 ================= -->
        <div class="testimoni-card"> <!-- Kartu testimoni individual -->
          <p class="testimoni-text">
            "Materinya daging" <!-- Isi testimoni -->
          </p>
          <div class="profile-info"> <!-- Informasi pengguna -->
            <h4 class="profile-name">Ela Kamilah</h4> <!-- Nama orang yang memberi testimoni -->
            <p class="profile-role">Career Switcher</p> <!-- Profesi atau status -->
          </div>
        </div>

        <!-- ================= CARD TESTIMONI 2 ================= -->
        <div class="testimoni-card">
          <p class="testimoni-text">
            "Tips-tipsnya sangat saya perlukan"
          </p>
          <div class="profile-info">
            <h4 class="profile-name">Nurul Firdaus</h4>
            <p class="profile-role">Freshgraduate</p>
          </div>
        </div>

        <!-- ================= CARD TESTIMONI 3 ================= -->
        <div class="testimoni-card">
          <p class="testimoni-text">
            "Materinya keren!"
          </p>
          <div class="profile-info">
            <h4 class="profile-name">Virda Manik</h4>
            <p class="profile-role">Career Switcher</p>
          </div>
        </div>

        <!-- ================= CARD TESTIMONI 4 ================= -->
        <div class="testimoni-card">
          <p class="testimoni-text">
            "Materi sangat menarik dan memberikan banyak wawasan baru. Penyampaian mudah dipahami"
          </p>
          <div class="profile-info">
            <h4 class="profile-name">Erdiansyah</h4>
            <p class="profile-role">Employee</p>
          </div>
        </div>

        <!-- ================= CARD TESTIMONI 5 ================= -->
        <div class="testimoni-card">
          <p class="testimoni-text">
            "Terima kasih untuk materi dan ilmunya"
          </p>
          <div class="profile-info">
            <h4 class="profile-name">Riza Surya</h4>
            <p class="profile-role">Career Switcher</p>
          </div>
        </div>

        <!-- ================= CARD TESTIMONI 6 ================= -->
        <div class="testimoni-card">
          <p class="testimoni-text">
            "Perbanyak lagi materi supaya membantu yang ingin melamar kerja"
          </p>
          <div class="profile-info">
            <h4 class="profile-name">Silvi</h4>
            <p class="profile-role">College Student</p>
          </div>
        </div>

        <!-- Tombol Panah Kanan -->
        <button class="carousel-btn next" aria-label="Next"> <!-- Tombol geser ke kanan -->
          <i class="bi bi-chevron-right"></i> <!-- Ikon panah kanan -->
        </button>
      </div> <!-- Akhir carousel track -->
    </div> <!-- Akhir wrapper -->
  </div> <!-- Akhir container -->
</section> <!-- Akhir testimoni section -->


<!-- ================= CSS STYLING ================= -->
<style>
/* ================== STYLE UNTUK SECTION TESTIMONI ================== */
.testimoni-section {
  padding: 20px 80px; /* Ruang atas-bawah 20px, kiri-kanan 80px */
  text-align: center; /* Semua teks diatur ke tengah */
  font-family: 'Poppins', sans-serif; /* Gunakan font Poppins */
  background: linear-gradient(135deg, #5DE0E6, #004AAD); /* Latar belakang gradasi biru */
}

/* ================== JUDUL SECTION ================== */
.testimoni-section .section-title {
  font-size: 28px; /* Ukuran font besar */
  font-weight: 700; /* Huruf tebal */
  margin-bottom: -15px; /* Jarak ke bawah lebih dekat ke kartu */
  color: #fff; /* Warna putih agar kontras di background biru */
}

/* ================== WRAPPER UNTUK CAROUSEL ================== */
.testimoni-wrapper {
  display: flex; /* Susunan horizontal */
  align-items: center; /* Rata tengah vertikal */
  gap: 15px; /* Jarak antar elemen di dalam wrapper */
  max-width: 1200px; /* Batas lebar maksimal */
  margin: auto; /* Tengah di layar */
  position: relative; /* Untuk posisi tombol panah */
  margin-top: -30px; /* Geser sedikit lebih dekat ke judul */
}

/* ================== TOMBOL PANAH KIRI & KANAN ================== */
.carousel-btn {
  background-color: #fff; /* Warna dasar putih */
  border: none; /* Hilangkan border */
  border-radius: 50%; /* Bentuk bulat */
  width: 40px; /* Ukuran tombol */
  height: 40px;
  display: flex; /* Rata tengah ikon */
  justify-content: center;
  align-items: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Efek bayangan */
  cursor: pointer; /* Pointer saat diarahkan */
  transition: all 0.3s ease-in-out; /* Efek transisi halus */
  z-index: 10; /* Supaya di atas elemen lain */
  display: none !important; /* Disembunyikan di desktop */
}

/* Efek hover pada tombol panah */
.carousel-btn:hover {
  background-color: #004AAD; /* Warna biru saat dihover */
  color: #fff; /* Warna ikon putih */
}

/* ================== AREA TEMPAT KARTU BERGESER ================== */
.carousel-track {
  display: flex; /* Tampilkan semua kartu sejajar */
  gap: 20px; /* Jarak antar kartu */
  overflow: hidden; /* Sembunyikan kartu yang keluar area */
  flex: 1; /* Ambil ruang sisa */
  transition: transform 0.5s ease-in-out; /* Efek geser halus */
}

/* ================== SETIAP KARTU TESTIMONI ================== */
.testimoni-card {
  background: #fff; /* Warna putih */
  border-radius: 12px; /* Sudut membulat */
  padding: 20px; /* Ruang dalam */
  flex: 0 0 calc((100% - 40px) / 3); /* 3 kartu per baris */
  min-height: 250px; /* Tinggi minimal kartu */
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
  display: flex; /* Susun isi secara vertikal */
  flex-direction: column;
  justify-content: flex-start; /* Isi mulai dari atas */
  text-align: left; /* Teks rata kiri */
  transition: transform 0.3s ease; /* Efek saat hover */
  position: relative;
}

/* Saat kursor di atas kartu */
.testimoni-card:hover {
  transform: translateY(-8px); /* Kartu sedikit naik */
}

/* ================== FOTO PROFIL (opsional jika ada foto) ================== */
.profile-img {
  width: 60px; /* Ukuran gambar */
  height: 60px;
  border-radius: 50%; /* Bulat */
  object-fit: cover; /* Menyesuaikan ukuran tanpa terdistorsi */
  margin-bottom: 10px;
}

/* ================== NAMA ORANG ================== */
.profile-name {
  font-size: 16px;
  font-weight: 700;
  color: #333; /* Abu gelap */
  margin: 0 0 5px 0; /* Jarak bawah kecil */
}

/* ================== ROLE / PROFESI ================== */
.profile-role {
  font-size: 13px;
  color: #777; /* Abu muda */
  margin: 0;
}

/* ================== KONTAINER UNTUK NAMA & ROLE ================== */
.profile-info {
  margin-top: auto; /* Biar posisi tetap di bawah kartu */
}

/* ================== TEKS TESTIMONI ================== */
.testimoni-text {
  font-size: 14px;
  color: #555;
  line-height: 1.6; /* Jarak antar baris nyaman dibaca */
  margin-bottom: 15px; /* Jarak antara teks dan profil */
}

/* ================== RESPONSIVE TABLET (2 KARTU) ================== */
@media (max-width: 992px) {
  .testimoni-card {
    flex: 0 0 calc((100% - 20px) / 2); /* 2 kartu per baris */
  }
}

/* ================== RESPONSIVE MOBILE (1 KARTU) ================== */
@media (max-width: 600px) {
  .testimoni-card {
    flex: 0 0 100%; /* 1 kartu per baris */
  }
}

/* ================== TAMPILKAN TOMBOL DI MOBILE ================== */
.carousel-btn {
  display: flex; /* Aktifkan tombol di mobile */
  width: 35px;
  height: 35px;
  position: absolute;
  top: 50%; /* Tengah vertikal */
  transform: translateY(-50%);
  z-index: 20;
}

/* ================== POSISI TOMBOL KIRI & KANAN ================== */
.carousel-btn.prev {
  left: -40px; /* Geser tombol kiri keluar sedikit */
}

.carousel-btn.next {
  right: -40px; /* Geser tombol kanan keluar sedikit */
}

/* ================== JUDUL DI MOBILE ================== */
.section-title {
  white-space: nowrap; /* Supaya teks tidak pecah ke baris lain */
  font-size: 12px; /* Ukuran lebih kecil */
  text-align: center; /* Tetap di tengah */
}
</style>


<!-- ================= JAVASCRIPT ================= -->
<script>
document.addEventListener("DOMContentLoaded", function () { // Jalankan script setelah seluruh halaman selesai dimuat

  const track = document.querySelector(".carousel-track"); // Ambil elemen utama yang berisi semua kartu testimoni
  const prevBtn = document.querySelector(".carousel-btn.prev"); // Tombol panah kiri
  const nextBtn = document.querySelector(".carousel-btn.next"); // Tombol panah kanan
  const cards = document.querySelectorAll(".testimoni-card"); // Ambil semua elemen kartu testimoni

  let currentIndex = 0; // Posisi index kartu yang sedang tampil
  let cardsPerPage = getCardsPerPage(); // Jumlah kartu per tampilan tergantung ukuran layar
  const totalCards = cards.length; // Total jumlah kartu testimoni

  // ================= Fungsi untuk menentukan jumlah kartu yang tampil berdasarkan ukuran layar =================
  function getCardsPerPage() {
    if (window.innerWidth <= 600) return 1;   // Jika layar kecil (mobile), tampilkan 1 kartu
    if (window.innerWidth <= 992) return 2;   // Jika layar sedang (tablet), tampilkan 2 kartu
    return 3;                                // Jika layar besar (desktop), tampilkan 3 kartu
  }

  // ================= Fungsi untuk menggeser posisi carousel =================
  function updateCarousel() {
    const cardWidth = cards[0].offsetWidth + 20; // Lebar satu kartu ditambah jarak antar kartu
    track.scrollTo({ // Gulirkan kontainer carousel
      left: currentIndex * cardWidth, // Geser berdasarkan index aktif
      behavior: "smooth" // Gerakan halus saat bergeser
    });
  }

  // ================= Event tombol "Next" =================
  nextBtn.addEventListener("click", () => {
    if (currentIndex < totalCards - cardsPerPage) { // Jika belum sampai akhir kartu
      currentIndex++; // Geser ke kartu berikutnya
    } else {
      currentIndex = 0; // Kalau sudah di akhir, kembali ke awal (loop)
    }
    updateCarousel(); // Jalankan animasi geser
  });

  // ================= Event tombol "Prev" =================
  prevBtn.addEventListener("click", () => {
    if (currentIndex > 0) { // Jika tidak di awal
      currentIndex--; // Geser ke kartu sebelumnya
    } else {
      currentIndex = totalCards - cardsPerPage; // Jika di awal, lompat ke akhir
    }
    updateCarousel(); // Jalankan animasi geser
  });

  // ================= SWIPE SUPPORT UNTUK MOBILE =================
  let startX = 0; // Posisi awal sentuhan
  let endX = 0; // Posisi akhir sentuhan
  let isDragging = false; // Status apakah sedang menggeser

  // Saat jari pertama kali menyentuh layar
  track.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX; // Simpan posisi awal jari
    isDragging = true; // Tandai bahwa pengguna sedang menggeser
  });

  // Saat jari bergerak di layar
  track.addEventListener("touchmove", (e) => {
    if (!isDragging) return; // Kalau tidak sedang geser, keluar
    endX = e.touches[0].clientX; // Simpan posisi terakhir jari
  });

  // Saat jari diangkat (geseran selesai)
  track.addEventListener("touchend", () => {
    if (!isDragging) return; // Kalau tidak sedang geser, abaikan
    isDragging = false; // Set status berhenti menggeser

    let diff = startX - endX; // Hitung jarak geser antara awal dan akhir

    if (Math.abs(diff) > 50) { // Jika geseran cukup jauh (lebih dari 50px)
      if (diff > 0) {
        // Geser kiri → ke kartu berikutnya
        if (currentIndex < totalCards - cardsPerPage) {
          currentIndex++;
        }
      } else {
        // Geser kanan → ke kartu sebelumnya
        if (currentIndex > 0) {
          currentIndex--;
        }
      }
      updateCarousel(); // Perbarui posisi setelah geser
    }
  });

  // ================= AUTO SLIDE (BERGESER OTOMATIS SETIAP 3 DETIK) =================
  let autoSlide = setInterval(() => {
    nextBtn.click(); // Tekan tombol "Next" secara otomatis
  }, 3000); // Tiap 3 detik

  // ================= HENTIKAN AUTO SLIDE SAAT USER INTERAKSI =================
  track.addEventListener("touchstart", () => {
    clearInterval(autoSlide); // Stop auto-slide sementara saat disentuh
  });

  // ================= JALANKAN ULANG AUTO SLIDE SETELAH 5 DETIK =================
  track.addEventListener("touchend", () => {
    autoSlide = setInterval(() => {
      nextBtn.click(); // Jalankan lagi setelah selesai interaksi
    }, 3000);
  });

  // ================= DETEKSI SAAT UKURAN LAYAR BERUBAH =================
  window.addEventListener("resize", () => {
    cardsPerPage = getCardsPerPage(); // Hitung ulang jumlah kartu per tampilan
    updateCarousel(); // Sesuaikan posisi carousel
  });
});
</script>
<!-- ================= CLIENT & TALENT SECTION ================= -->
<section class="client-section"> <!-- Bagian untuk menampilkan koleksi materi terbaru -->
  <div class="container"> <!-- Pembungkus utama agar isi rapi di tengah -->

    <!-- Judul -->
    <h2 class="koleksi-title">KOLEKSI MATERI TERBARU</h2> <!-- Judul utama section -->

    <!-- ===== TAB BUTTONS (PILIHAN KATEGORI) ===== -->
    <div class="tab-buttons"> <!-- Tombol navigasi antar tab -->
      <button class="tab active" data-target="clients">For Jobseekers</button> <!-- Tombol tab aktif pertama -->
      <button class="tab" data-target="talents">For Recruiters</button> <!-- Tombol tab kedua -->
    </div>

    <!-- ====== TAB CONTENT JOBSEEKER ====== -->
    <div id="clients" class="tab-content active"> <!-- Konten untuk tab “For Jobseekers” -->
      <div class="card-container"> <!-- Tempat kumpulan kartu materi -->

        <!-- ========== CARD 1 ========== -->
        <div class="materi-wrapper"> <!-- Pembungkus satu kartu -->
          <div class="materi-card"> <!-- Kartu utama -->
            <img src="assets/img/andi.jpg" alt="Bang Andi" class="materi-img"> <!-- Gambar materi -->
          </div>
          <div class="button-group"> <!-- Tombol di bawah kartu -->
            <button class="preview-btn">PREVIEW <br> MATERI</button> <!-- Tombol lihat materi -->
            <button class="buy-btn">BUY NOW <br> RP 19.000</button> <!-- Tombol beli materi -->
          </div>
        </div>

        <!-- ========== CARD 2 ========== -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/far.jpg" alt="Kak Faridah" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>

        <!-- ========== CARD 3 ========== -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/adam.jpg" alt="Mas Adam" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ====== TAB CONTENT RECRUITER ====== -->
    <div id="talents" class="tab-content"> <!-- Konten untuk tab “For Recruiters” -->
      <div class="card-container">

        <!-- ========== CARD 1 ========== -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/andi.jpg" alt="Bang Andi" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>

        <!-- ========== CARD 2 ========== -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/far.jpg" alt="Kak Faridah" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>

        <!-- ========== CARD 3 ========== -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/adam.jpg" alt="Mas Adam" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ================= STYLE (TAMPILAN) ================= -->
<style>
/* ===== KOLEKSI TITLE ===== */
.koleksi-title {
  font-size: 48px; /* Ukuran font besar untuk judul */
  font-weight: 700; /* Huruf tebal */
  color: #3c678b; /* Warna biru keabu-abuan */
  text-align: center; /* Rata tengah */
  margin-bottom: 10px; /* Jarak bawah kecil */
  margin-top: 10px; /* Jarak atas kecil */
  letter-spacing: 0.5px; /* Spasi antar huruf */
}

/* ===== TAB BUTTONS ===== */
.tab-buttons {
  display: flex; /* Susunan horizontal */
  justify-content: center; /* Rata tengah */
  gap: 10px; /* Jarak antar tombol */
  margin-bottom: 40px; /* Jarak bawah sebelum konten */
  margin-top: 50px; /* Jarak atas dari judul */
  flex-wrap: wrap; /* Kalau sempit, pindah ke baris baru */
}

/* Style tombol tab */
.tab {
  padding: 10px 22px; /* Ruang dalam tombol */
  border: none; /* Tanpa border */
  border-radius: 8px; /* Sudut membulat */
  background: #f0f0f0; /* Warna abu muda */
  color: #333; /* Warna teks abu gelap */
  cursor: pointer; /* Tanda tangan saat diarahkan */
  font-weight: 600; /* Huruf tebal sedang */
  font-size: 16px; /* Ukuran teks sedang */
  transition: all 0.3s ease; /* Animasi lembut */
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05); /* Sedikit bayangan */
}

/* Efek hover tombol */
.tab:hover {
  background: #e0e0e0; /* Warna sedikit lebih gelap saat diarahkan */
}

/* Tab aktif */
.tab.active {
  background: linear-gradient(90deg, #5DE0E6, #004AAD); /* Gradasi biru */
  color: #fff; /* Warna teks putih */
  box-shadow: 0 4px 10px rgba(93, 224, 230, 0.3); /* Bayangan lembut */
  transform: scale(1.05); /* Sedikit membesar */
}

/* ===== TAB CONTENT ===== */
.tab-content {
  display: none; /* Semua konten disembunyikan dulu */
  margin-top: 25px; /* Jarak atas dari tombol */
}
.tab-content.active {
  display: block; /* Hanya tab aktif yang ditampilkan */
}

/* ===== CARD CONTAINER ===== */
.card-container {
  display: flex; /* Susunan sejajar */
  justify-content: center; /* Pusatkan isi */
  gap: 30px; /* Jarak antar kartu */
  flex-wrap: wrap; /* Kalau sempit, pindah baris */
  margin-top: 20px; /* Jarak atas kecil */
}

/* ===== WRAPPER PER CARD ===== */
.materi-wrapper {
  display: flex;
  flex-direction: column; /* Kartu di atas, tombol di bawah */
  align-items: center;
  width: 400px; /* Lebar tiap kartu */
}

/* ===== MATERI CARD ===== */
.materi-card {
  width: 100%;
  background: #fff; /* Warna dasar putih */
  border-radius: 16px; /* Sudut membulat */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Bayangan lembut */
  padding: 0;
  text-align: center;
  transition: transform 0.35s ease, box-shadow 0.35s ease; /* Animasi halus */
  cursor: pointer;
  position: relative;
  z-index: 1;
  border: 3px solid #5573a0ff; /* Garis tepi biru */
  box-shadow: 0 0 8px rgba(0, 74, 173, 0.3); /* Efek cahaya biru */
}

/* Efek saat di-hover */
.materi-card:hover {
  transform: scale(1.12); /* Membesar sedikit */
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3); /* Bayangan lebih besar */
  z-index: 10;
}

/* ===== GAMBAR DALAM CARD ===== */
.materi-img {
  width: 100%; /* Gambar isi penuh */
  border-radius: 12px; /* Sudut membulat */
  margin-bottom: 0;
}

/* ===== BUTTON GROUP (DI BAWAH CARD) ===== */
.button-group {
  display: flex;
  justify-content: center;
  gap: 12px; /* Jarak antar tombol */
  margin-top: 12px; /* Jarak atas kecil */
}

/* ===== BUTTON STYLING ===== */
.preview-btn,
.buy-btn {
  padding: 10px 16px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  font-size: 14px;
  transition: all 0.3s ease;
}

/* Tombol “Preview Materi” */
.preview-btn {
  background-color: #f0f0f0; /* Abu muda */
  color: #333; /* Abu tua */
}
.preview-btn:hover {
  background-color: #e0e0e0; /* Lebih gelap saat dihover */
}

/* Tombol “Buy Now” */
.buy-btn {
  background-color: #333; /* Hitam abu */
  color: #fff; /* Putih */
}
.buy-btn:hover {
  background-color: #004AAD; /* Biru saat dihover */
}

/* ===== RESPONSIVE UNTUK MOBILE ===== */
@media (max-width: 768px) {
  .card-container {
    flex-direction: column; /* Ubah jadi vertikal */
    align-items: center; /* Tengah */
  }

  /* Kartu membesar sedikit lebih kecil di mobile */
  .materi-card:hover {
    transform: scale(1.07);
  }

  /* Lebar kartu disesuaikan agar tidak keluar layar */
  .materi-wrapper {
    width: 90%;
  }
}
</style>


<!-- ================= SCRIPT UNTUK GANTI TAB ================= -->
<script>
  const tabs = document.querySelectorAll(".tab"); // Ambil semua tombol tab
  const contents = document.querySelectorAll(".tab-content"); // Ambil semua area konten tab

  tabs.forEach(tab => { // Untuk setiap tombol tab
    tab.addEventListener("click", () => { // Saat tombol diklik
      // Hapus class "active" dari semua tab dan kontennya
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      // Tambahkan class "active" hanya ke tab yang diklik
      tab.classList.add("active");
      document.getElementById(tab.dataset.target).classList.add("active"); // Tampilkan konten sesuai data-target
    });
  });
</script>

<!-- ==================== FOOTER SECTION ==================== -->
<footer class="footer"> <!-- Bagian footer utama website -->
  <div class="container"> <!-- Pembungkus konten agar rapi di tengah -->
    <div class="footer-top"> <!-- Bagian atas footer (isi utama) -->
      
      <!-- ==================== KIRI: LOGO + DESKRIPSI ==================== -->
      <div class="footer-about"> <!-- Kolom kiri -->
        <img src="assets/img/Footer.png" alt="Klik Rekrut Logo" class="footer-logo"> <!-- Logo Klik Rekrut -->
        <p>
          <strong>Klik Rekrut</strong> hadir sebagai solusi rekrutmen yang ergonomis untuk mendapatkan talenta Siap Kerja.
        </p> <!-- Deskripsi singkat perusahaan -->
      </div>

      <!-- ==================== TENGAH: MENU FOOTER ==================== -->
      <div class="footer-center"> <!-- Kolom tengah berisi menu navigasi -->

        <!-- Kolom 1: Layanan -->
        <div class="footer-column">
          <h6>LAYANAN</h6> <!-- Judul kolom -->
          <ul>
            <li><a href="/">e-Recruitment</a></li> <!-- Link ke halaman utama -->
            <li><a href="elearning">e-Learning</a></li> <!-- Link ke halaman e-learning -->
          </ul>
        </div>

        <!-- Kolom 2: Lainnya -->
        <div class="footer-column">
          <h6>LAINNYA</h6>
          <ul>
            <li>
              <a href="https://chat.whatsapp.com/I3mvornLsmv96QiwlcLctQ?mode=ems_copy_t" 
                 target="_blank" 
                 rel="noopener noreferrer">
                Komunitas
              </a>
            </li>
            <li><a href="applypartner">Kemitraan</a></li> <!-- Link ke halaman kemitraan -->
          </ul>
        </div>

        <!-- Kolom 3: Bantuan -->
        <div class="footer-column">
          <h6>BANTUAN</h6>
          <ul>
            <li><a href="#">FAQ</a></li> <!-- Halaman pertanyaan umum -->
            <li>
              <a href="https://api.whatsapp.com/send?phone=6289678868752" 
                 target="_blank" 
                 rel="noopener noreferrer">
                Hubungi Kami
              </a>
            </li> <!-- Tombol kontak langsung via WhatsApp -->
          </ul>
        </div>
      </div>

      <!-- ==================== KANAN: SOSIAL MEDIA ==================== -->
      <div class="footer-column footer-right"> <!-- Kolom kanan -->
        <h6>SOCIAL MEDIA</h6>
        <div class="social-icons"> <!-- Ikon media sosial -->
          <a href="https://www.tiktok.com/@klikrekrut" target="_blank">
            <img src="assets/img/tiktok.png" alt="Tiktok">
          </a>
          <a href="https://www.instagram.com/klikrekrut/" target="_blank">
            <img src="assets/img/instagram.png" alt="Instagram">
          </a>
          <a href="https://www.linkedin.com/company/klikrekrut/" target="_blank">
            <img src="assets/img/linkedin.png" alt="LinkedIn">
          </a>
          <a href="https://www.youtube.com/@klikrekrut" target="_blank">
            <img src="assets/img/youtube.png" alt="YouTube">
          </a>
        </div>
      </div>
    </div> <!-- /footer-top -->

    <!-- ==================== GARIS PEMISAH ==================== -->
    <hr class="footer-divider"> <!-- Garis horizontal pemisah antara konten dan copyright -->

    <!-- ==================== COPYRIGHT ==================== -->
    <div class="footer-bottom"> <!-- Bagian bawah footer -->
      <p>© KLIKREKRUT 2025 • All Right Reserved</p> <!-- Hak cipta -->
    </div>
  </div>
</footer>

<style>
/* ==================== STYLE FOOTER UTAMA ==================== */
.footer {
  background-color: #f9f9f9; /* Warna latar belakang abu muda */
  color: #333; /* Warna teks abu gelap */
  padding: 30px 20px; /* Ruang dalam atas-bawah dan sisi */
  margin-top: 0; /* Tidak ada jarak atas */
  font-family: 'Poppins', sans-serif; /* Gunakan font utama situs */
  font-size: 14px; /* Ukuran teks dasar */
}

/* Container diatur kolom vertikal */
.footer .container {
  display: flex;
  flex-direction: column;
}

/* ==================== BAGIAN ATAS FOOTER ==================== */
.footer-top {
  display: flex;
  justify-content: space-between; /* Pisahkan antar kolom kiri, tengah, kanan */
  align-items: flex-start; /* Semua mulai dari atas */
}

/* ==================== KIRI: LOGO & DESKRIPSI ==================== */
.footer-about {
  max-width: 280px; /* Batas lebar teks */
}

.footer-logo {
  max-width: 120px; /* Ukuran logo footer */
  margin-bottom: 8px;
}

.footer-about p {
  font-size: 11px; /* Lebih kecil agar ringkas */
  color: #555; /* Abu keabu-abuan lembut */
  margin: 0;
}

/* ==================== TENGAH: MENU FOOTER ==================== */
.footer-center {
  display: flex;
  gap: 80px; /* Jarak antar kolom menu */
  margin-left: 10px;
}

/* Judul kolom menu */
.footer-column h6 {
  font-weight: 700;
  font-size: 13px;
  margin-bottom: 8px;
}

/* Hilangkan bullet list */
.footer-column ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* Jarak antar item menu */
.footer-column ul li {
  margin-bottom: 6px;
}

/* Link menu */
.footer-column ul li a {
  text-decoration: none; /* Hilangkan garis bawah */
  color: #333;
  font-size: 13px;
  transition: color 0.3s;
}

/* Efek hover: tampilkan underline */
.footer-column ul li a:hover {
  text-decoration: underline;
}

/* ==================== KANAN: SOSIAL MEDIA ==================== */
.social-icons {
  display: flex;
  gap: 10px; /* Jarak antar ikon */
}

/* Ukuran dan efek ikon media sosial */
.social-icons img {
  width: 22px;
  height: 22px;
  object-fit: contain; /* Menjaga rasio logo */
  transition: transform 0.3s; /* Efek hover halus */
}

/* Efek hover memperbesar sedikit */
.social-icons img:hover {
  transform: scale(1.1);
}

/* ==================== GARIS PEMISAH (HR) ==================== */
.footer-divider {
  width: 100%;
  border: none;
  border-top: 1px solid #ccc; /* Garis tipis abu */
  margin: 15px 0 5px;
}

/* ==================== COPYRIGHT ==================== */
.footer-bottom {
  width: 100%;
  text-align: left; /* Rata kiri */
  font-size: 12px; /* Kecil dan sederhana */
  color: #666; /* Abu sedang */
}

/* ==================== RESPONSIVE (MOBILE) ==================== */
@media (max-width: 768px) {
  .footer-top {
    flex-direction: column; /* Susun kolom jadi vertikal */
    gap: 20px; /* Jarak antar bagian */
  }

  .footer-center {
    flex-direction: column; /* Menu disusun ke bawah */
    gap: 15px; /* Jarak antar kolom */
    margin-left: 0;
  }
}
</style>



  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

@endsection