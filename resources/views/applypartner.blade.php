@extends('layouts.app')

@section('title', 'Klik Rekrut - Kemitraan')
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

<!-- Header -->
<header class="header fixed-top">
  <div class="container d-flex justify-content-between align-items-center py-2">

    <!-- Logo -->
    <a href="/" class="logo d-flex align-items-center">
      <img src="assets/img/footer.png" alt="Klikrekrut Logo" class="logo-full" />
    </a>

    <!-- Mobile Toggle -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- Nav Menu -->
<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="/">Services</a></li>
    <li><a href="elearning">E-learning</a></li>
    <li><a href="applypartner">Apply as partner</a></li>
    <li>
<a href="https://chat.whatsapp.com/I3mvornLsmv96QiwlcLctQ?mode=ems_copy_t"
   class="btn btn-outline wa-btn rounded-pill px-3 py-1 d-flex align-items-center gap-2"
   id="joinBtn"
   target="_blank" 
   rel="noopener noreferrer">
    Join to Community 
</a>

        </li>
      </ul>
    </nav>
  </div>
</header>

<!-- Overlay untuk mobile -->
 <script>
  document.addEventListener("DOMContentLoaded", function () {
    const joinBtn = document.getElementById("joinBtn");
    joinBtn.addEventListener("click", function (e) {
      // Tambahkan kelas loading
      this.classList.add("loading");

      // Optional: kalau mau otomatis balik normal setelah 3 detik
      // setTimeout(() => {
      //   this.classList.remove("loading");
      // }, 3000);
    });
  });
</script>

<!-- Overlay untuk mobile -->
<div class="mobile-nav-overlay"></div>
<script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".mobile-nav-toggle");
    const navmenu = document.getElementById("navmenu");
    const overlay = document.querySelector(".mobile-nav-overlay");

    toggle.addEventListener("click", () => {
      navmenu.classList.toggle("active");
      overlay.classList.toggle("active");

      // Ganti ikon burger ↔ X
      toggle.classList.toggle("bi-list");
      toggle.classList.toggle("bi-x");
    });

    overlay.addEventListener("click", () => {
      navmenu.classList.remove("active");
      overlay.classList.remove("active");
      toggle.classList.add("bi-list");
      toggle.classList.remove("bi-x");
    });
  });
</script>
</script>


<main class="main">

<!-- ==================== HERO PARTNER SECTION ==================== -->
<section class="hero-partner"> <!-- Bagian utama Hero untuk halaman Partner -->
  <div class="container hero-content" data-aos="fade-up"> <!-- Container isi hero dengan animasi AOS (fade-up) -->

    <!-- Judul utama -->
    <h1 class="hero-title">
      Let's Become Our Partner! <!-- Teks ajakan utama -->
    </h1>

    <!-- ==================== KARTU KEMITRAAN ==================== -->
    <div class="partner-cards"> <!-- Container untuk semua jenis kartu Partner -->

      <!-- ====== Kartu 1: Recruiter ====== -->
      <div class="partner-card" data-aos="fade-up" data-aos-delay="100"> <!-- Satu kartu dengan animasi delay 100ms -->
        <h3 class="card-title">Recruiter</h3> <!-- Judul kartu -->
        <div class="card-divider"></div> <!-- Garis pembatas dekoratif -->
        <p class="card-desc"> <!-- Deskripsi singkat tentang peran Recruiter -->
          <strong>Kamu bertugas memproses permintaan talenta dari klien melalui sistem manajemen rekrutmen kami.</strong><br><br>
          Kamu akan ikut mendukung misi kami untuk menempatkan talenta terbaik di tempat yang tepat.
        </p>
        <a href="#" class="btn-apply">Apply here →</a> <!-- Tombol ajakan untuk mendaftar -->
      </div>

      <!-- ====== Kartu 2: Sales ====== -->
      <div class="partner-card" data-aos="fade-up" data-aos-delay="200"> <!-- Delay animasi sedikit lebih lama -->
        <h3 class="card-title">Sales</h3>
        <div class="card-divider"></div>
        <p class="card-desc">
          <strong>Kamu bertugas mencari perusahaan yang lagi butuh kandidat terbaik.</strong><br><br>
          Kamu akan ikut mendukung misi kami memberikan akses talenta terampil untuk bisnis di Indonesia.
        </p>
        <a href="#" class="btn-apply">Apply here →</a>
      </div>

      <!-- ====== Kartu 3: Affiliate ====== -->
      <div class="partner-card" data-aos="fade-up" data-aos-delay="300"> <!-- Delay animasi 300ms -->
        <h3 class="card-title">Affiliate</h3>
        <div class="card-divider"></div>
        <p class="card-desc">
          <strong>Kamu bertugas merekomendasikan pembelajaran rekrutmen kami ke recruiter dan jobseeker.</strong><br><br>
          Kamu akan ikut mendukung misi kami untuk membantu mereka lebih jago cari pekerja dan cari kerja.
        </p>
        <a href="#" class="btn-apply">Apply here →</a>
      </div>

    </div> <!-- Akhir .partner-cards -->

    <!-- ==================== TOMBOL WHATSAPP ==================== -->
    <div class="whatsapp-button" data-aos="fade-up" data-aos-delay="400"> <!-- Tombol WA untuk pertanyaan -->
      <a href="https://wa.me/6281234567890" target="_blank"> <!-- Buka WhatsApp di tab baru -->
        <img src="assets/img/wa.png" alt="WhatsApp"> <!-- Icon WA -->
        Punya pertanyaan seputar kemitraan? <!-- Teks di samping ikon -->
      </a>
    </div>
  </div> <!-- Akhir .container -->
</section>


<!-- ==================== CSS HERO PARTNER ==================== -->
<style>
/* ===== Wrapper utama Hero Partner ===== */
.hero-partner {
  background: url("assets/img/partner.jpg") center center no-repeat; /* Latar belakang gambar utama */
  background-size: cover; /* Gambar memenuhi layar */
  background-position: center top;
  background-attachment: scroll; /* Gambar ikut bergulir */
  background-repeat: no-repeat;
  width: 100%; /* Lebar penuh */
  min-height: 100vh; /* Tinggi minimal 1 layar penuh */
  display: flex;
  flex-direction: column; /* Susun konten secara vertikal */
  align-items: center; /* Tengah secara horizontal */
  justify-content: center; /* Tengah secara vertikal */
  text-align: center;
  margin-top: 50px; /* Jarak dari header tetap */
  padding-top: 100px; /* Tambahan ruang di atas */
  position: relative;
  overflow: hidden; /* Sembunyikan elemen yang keluar dari area */
}

/* ===== Judul utama ===== */
.hero-title {
  font-weight: 700; /* Teks tebal */
  font-size: 4rem; /* Ukuran besar */
  line-height: 1.4;
  color: #2e6bbc; /* Warna biru tua */
  margin-top: 40px; /* Jarak dari atas */
  text-shadow:
    -1px -1px 0 #fff,  
     1px -1px 0 #fff,
    -1px  1px 0 #fff,
     1px  1px 0 #fff,
    -2px -2px 0 #fff,  
     2px -2px 0 #fff,
    -2px  2px 0 #fff,
     2px  2px 0 #fff; /* Bayangan putih agar teks terlihat jelas di atas gambar */
}

/* Warna teks dalam span (kalau ada) */
.hero-title span {
  color: #5DE0E6; /* Biru muda */
}

/* ===== Container Kartu Partner ===== */
.partner-cards {
  display: grid; /* Gunakan layout grid */
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Otomatis menyesuaikan kolom */
  gap: 25px; /* Jarak antar kartu */
  margin-top: 100px;
  max-width: 1100px; /* Batas lebar maksimal */
  margin-left: auto;
  margin-right: auto; /* Tengah secara horizontal */
}

/* ===== Setiap Kartu Partner ===== */
.partner-card {
  background: #fff; /* Warna dasar putih */
  padding: 25px 20px;
  border-radius: 12px; /* Sudut membulat */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
  text-align: center;
  border: 1.5px solid #ddd; /* Garis tipis abu */
  outline: 2px solid #000; /* Garis luar hitam */
  display: flex;
  flex-direction: column; /* Biar tombol selalu di bawah */
  justify-content: space-between;
  transition: all 0.3s ease; /* Animasi hover halus */
}

/* Efek saat kursor diarahkan */
.partner-card:hover {
  transform: translateY(-5px); /* Kartu naik sedikit */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Bayangan makin dalam */
  outline: 2px solid #000; /* Outline tetap */
}

/* ===== Judul pada Kartu ===== */
.card-title {
  font-size: 22px;
  font-weight: 700;
  color: #1c64f2; /* Biru cerah */
  margin-bottom: 12px;
}

/* Garis pembatas di bawah judul */
.card-divider {
  width: 100%;
  height: 3px;
  background-color: #000;
  margin-bottom: 15px;
  border-radius: 5px;
}

/* ===== Deskripsi Kartu ===== */
.card-desc {
  font-size: 14px;
  color: #333; /* Abu gelap */
  line-height: 1.6;
  margin-bottom: 25px;
  text-align: center;
}

/* ===== Tombol Apply ===== */
.btn-apply {
  display: inline-block;
  background: linear-gradient(90deg, #5DE0E6, #004AAD); /* Gradasi biru */
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  padding: 12px 28px;
  border-radius: 25px; /* Bentuk bulat */
  text-decoration: none;
  transition: all 0.3s ease;
  align-self: center; /* Tengah di dalam kartu */
  min-width: 140px;
  text-align: center;
}

/* Efek hover pada tombol */
.btn-apply:hover {
  opacity: 0.9;
  transform: scale(1.05);
}

/* ===== Tombol WhatsApp ===== */
.whatsapp-button {
  margin-top: 30px;
  display: flex;
  justify-content: center; /* Tengah di bawah */
}

/* Style tombol WhatsApp */
.whatsapp-button a {
  display: flex;
  align-items: center; /* Ikon sejajar dengan teks */
  gap: 10px; /* Jarak antara ikon dan teks */
  background-color: #25D366; /* Warna khas WhatsApp */
  color: white;
  font-size: 16px;
  font-weight: 600;
  padding: 12px 24px;
  border-radius: 50px; /* Tombol oval */
  text-decoration: none;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  transition: all 0.3s ease;
}

/* Hover tombol WA */
.whatsapp-button a:hover {
  background-color: #1ebe5d;
  transform: scale(1.05);
}

/* Ukuran ikon WhatsApp */
.whatsapp-button img {
  width: 28px;
  height: 28px;
}

/* ===== RESPONSIVE UNTUK MOBILE ===== */
@media (max-width: 768px) {
  .hero-partner {
    background: url("assets/img/applymobile.png") center center no-repeat; /* Ganti background untuk mobile */
    background-size: cover;
    background-position: center top;
    background-attachment: scroll;
    background-repeat: no-repeat;
  }

  .hero-title {
    font-size: 36px; /* Kecilkan ukuran teks di HP */
    margin-top: 40px;
  }

  .hero-content {
    max-width: 1200px;
    margin: 0 auto; /* Tengah konten */
    padding: 0 20px; /* Jarak kanan kiri */
  }
}
</style>

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