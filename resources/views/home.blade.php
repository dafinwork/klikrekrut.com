@extends('layouts.app')

@section('title', 'Klik Rekrut - Layanan Asisten Rekrutmen')
@section('description', 'Temukan pekerjaan impianmu di Klik Rekrut')
@section('keywords', 'find job, lowongan kerja, klik rekrut')

@section('content')
  <!-- isi halaman -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KLIK rekrut - Find Job</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('assets/img/square.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
<link href="assets/css/main.css" rel="stylesheet">

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
      <img src="assets/img/Header.png" alt="Klikrekrut Logo" class="logo-full" />
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
   target="_blank" 
   rel="noopener noreferrer"
   class="btn btn-outline-light wa-btn rounded-pill px-3 py-1 d-flex align-items-center gap-2">
    Join to Community
</a>
    </li>
  </ul>
</nav>
</div>
</header>


<!-- Overlay -->
<div class="mobile-nav-overlay"></div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    const toggle = document.querySelector(".mobile-nav-toggle");
    const navmenu = document.getElementById("navmenu");
    const dropdowns = document.querySelectorAll(".navmenu .dropdown");

    // Ubah ikon burger jadi X saat menu aktif
    function updateToggleIcon() {
      if (navmenu.classList.contains("active")) {
        toggle.classList.remove("bi-list");
        toggle.classList.add("bi-x");
        toggle.style.color = "#000"; // selalu hitam saat menu terbuka
      } else {
        toggle.classList.remove("bi-x");
        toggle.classList.add("bi-list");

        // Warna kembali sesuai kondisi scroll
        if (window.scrollY > 10) {
          toggle.style.color = "#004AAD"; // biru saat scroll
        } else {
          toggle.style.color = "#fff"; // putih sebelum scroll
        }
      }
    }

    // Scroll behavior
    window.addEventListener("scroll", function () {
      if (window.scrollY > 10) {
        header.classList.add("scrolled");
        if (!navmenu.classList.contains("active")) {
          toggle.style.color = "#004AAD";
        }
      } else {
        header.classList.remove("scrolled");
        if (!navmenu.classList.contains("active")) {
          toggle.style.color = "#fff";
        }
      }
    });

    // Toggle nav mobile
    toggle.addEventListener("click", () => {
      navmenu.classList.toggle("active");
      document.body.classList.toggle("mobile-nav-active");
      updateToggleIcon();
    });

    // Interaksi dropdown
    dropdowns.forEach(drop => {
      const link = drop.querySelector("a");

      link.addEventListener("click", (e) => {
        e.preventDefault();

        // Tutup semua dropdown lain
        dropdowns.forEach(d => {
          if (d !== drop) {
            d.classList.remove("open");
            const submenu = d.querySelector("ul");
            if (submenu) {
              submenu.style.maxHeight = "0";
              submenu.style.opacity = "0";
            }

            const icon = d.querySelector(".toggle-icon");
            if (icon) {
              icon.classList.add("bi-chevron-down");
              icon.classList.remove("bi-chevron-up");
            }
          }
        });

        // Toggle dropdown sekarang
        drop.classList.toggle("open");
        const submenu = drop.querySelector("ul");
        if (drop.classList.contains("open")) {
          submenu.style.maxHeight = submenu.scrollHeight + "px";
          submenu.style.opacity = "1";
        } else {
          submenu.style.maxHeight = "0";
          submenu.style.opacity = "0";
        }

        const icon = drop.querySelector(".toggle-icon");
        if (icon) {
          icon.classList.toggle("bi-chevron-down");
          icon.classList.toggle("bi-chevron-up");
        }
      });
    });

    // Tutup nav saat klik di luar
    document.addEventListener("click", function (e) {
      if (
        document.body.classList.contains("mobile-nav-active") &&
        !e.target.closest("#navmenu") &&
        !e.target.closest(".mobile-nav-toggle")
      ) {
        navmenu.classList.remove("active");
        document.body.classList.remove("mobile-nav-active");
        updateToggleIcon();

        dropdowns.forEach(d => {
          d.classList.remove("open");
          const submenu = d.querySelector("ul");
          if (submenu) {
            submenu.style.maxHeight = "0";
            submenu.style.opacity = "0";
          }

          const icon = d.querySelector(".toggle-icon");
          if (icon) {
            icon.classList.add("bi-chevron-down");
            icon.classList.remove("bi-chevron-up");
          }
        });
      }
    });

    // Set ikon awal sesuai posisi scroll
    updateToggleIcon();
  });
    document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector('.mobile-nav-toggle');
    const nav = document.querySelector('.navmenu');
    const overlay = document.querySelector('#nav-overlay');

    toggle.addEventListener('click', function () {
      nav.classList.toggle('active');
      overlay.classList.toggle('active');
      toggle.classList.toggle('bi-x');
      toggle.classList.toggle('bi-list');
    });

    overlay.addEventListener('click', function () {
      nav.classList.remove('active');
      overlay.classList.remove('active');
      toggle.classList.add('bi-list');
      toggle.classList.remove('bi-x');
    });
  });
</script>

<main class="main"> <!-- Awal dari konten utama halaman -->

<!-- Tambahkan di layout atau halaman -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Hero Section -->
<section id="hero" class="hero section position-relative"> <!-- Bagian utama hero dengan ID 'hero', memiliki posisi relatif agar elemen anak bisa pakai posisi absolut -->
  <div class="container"> <!-- Pembungkus konten agar sejajar secara responsif -->
    <div class="row align-items-center"> <!-- Baris bootstrap dengan konten sejajar secara vertikal ke tengah -->

      <!-- Hero Left -->
      <div class="col-lg-6 text-white" data-aos="fade-right"> <!-- Kolom kiri untuk teks, berwarna putih, dan animasi masuk dari kanan (AOS) -->
        <h1 class="mb-4 hero-title" style="font-weight:700; color:white;"> <!-- Judul besar hero dengan warna putih dan tebal -->
          <span id="typing-hero"></span> <!-- Elemen kosong untuk efek teks ketik yang akan diisi oleh JavaScript -->
        </h1>

        <!-- ✅ Tambahan ceklis -->
        <div class="hero-checklist"> <!-- Container daftar fitur yang berisi beberapa item ceklis -->
          <div class="check-item"> <!-- Satu baris item ceklis -->
            <img src="assets/img/check.png" alt="Check" class="check-icon"> <!-- Gambar ikon tanda cek -->
            <span>Hiring Entry & Mid Levels</span> <!-- Teks deskripsi fitur pertama -->
          </div>
          <div class="check-item"> <!-- Item ceklis kedua -->
            <img src="assets/img/check.png" alt="Check" class="check-icon">
            <span>Ergonomic Solution</span>
          </div>
          <div class="check-item"> <!-- Item ceklis ketiga -->
            <img src="assets/img/check.png" alt="Check" class="check-icon">
            <span>All in One Recruitment Support</span>
          </div>
        </div>

        <!-- Desktop -->
        <p class="mb-4 d-none d-md-block"> <!-- Paragraf yang hanya muncul di tampilan desktop -->
          Temukan orang yang tepat untuk tim Anda - menawarkan layanan <br>
          asisten yang membantu kegiatan rekrutmen Anda.
        </p>

        <!-- Mobile -->
        <p class="mb-4 d-block d-md-none"> <!-- Paragraf yang hanya muncul di tampilan mobile -->
          Temukan orang yang tepat untuk tim Anda - menawarkan layanan asisten yang membantu kegiatan rekrutmen Anda.
        </p>

        <a class="btn btn-success rounded-pill px-4 py-2 pulse-button tombol-panah"> <!-- Tombol utama dengan efek pulse dan ikon panah -->
          Baca Lebih Lanjut <!-- Tulisan pada tombol -->
          <img src="assets/img/panahputih.png" alt="Panah" class="icon-panah"> <!-- Gambar panah di dalam tombol -->
        </a>
      </div>

      <!-- Hero Right -->
      <div class="col-lg-6 text-center" data-aos="fade-left"> <!-- Kolom kanan menampilkan gambar dengan animasi fade kiri -->
        <img src="assets/img/orgbener.png" class="img-fluid" style="max-height: 500px;" alt="Rekruter Image"> <!-- Gambar ilustrasi rekruter dengan ukuran maksimum 500px -->
      </div>
    </div>
  </div>
</section>

<!-- Typing Effect -->
<script>
  const lines = ["Membantu Anda", "Merekrut Tim Masa Depan"]; // Teks yang akan muncul satu per satu dalam efek ketik
  const el = document.getElementById("typing-hero"); // Ambil elemen span tempat efek muncul
  let lineIndex = 0; // Indeks baris teks yang sedang diketik
  let charIndex = 0; // Indeks huruf dalam baris
  let isDeleting = false; // Status apakah sedang menghapus teks (false artinya sedang mengetik)

  function typeEffect() { // Fungsi utama efek ketik
    let currentLine = lines[lineIndex]; // Ambil baris teks saat ini

    if (!isDeleting) { // Jika sedang mengetik huruf baru
      // Gabungkan semua baris yang sudah selesai dengan baris yang sedang diketik
      el.innerHTML = lines.slice(0, lineIndex).join("<br>") + "<br>" + currentLine.substring(0, charIndex + 1);
      charIndex++; // Tambah indeks huruf

      // Jika sudah selesai mengetik satu baris
      if (charIndex === currentLine.length) {
        isDeleting = true; // Setel status selesai
        setTimeout(typeEffect, 700); // Jeda 0.7 detik sebelum lanjut baris berikutnya
        return;
      }
    } else { // Jika sudah selesai satu baris
      if (lineIndex < lines.length - 1) { // Jika masih ada baris berikutnya
        isDeleting = false; // Reset status mengetik
        lineIndex++; // Pindah ke baris berikutnya
        charIndex = 0; // Reset indeks huruf
      }
    }
    setTimeout(typeEffect, 50); // Interval ketik antar huruf (50 ms)
  }

  window.addEventListener("DOMContentLoaded", typeEffect); // Jalankan efek setelah halaman selesai dimuat
</script>

<style>
  /* ==================== HERO CHECKLIST ==================== */
  .hero-checklist {
    display: flex; /* Susun item secara horizontal */
    flex-wrap: wrap; /* Jika panjang, turun ke baris berikutnya */
    gap: 16px; /* Jarak antar item */
    margin-bottom: 20px; /* Jarak bawah daftar checklist */
  }

  .check-item {
    display: flex; /* Susun ikon dan teks sejajar */
    align-items: center; /* Posisikan vertikal ke tengah */
    gap: 6px; /* Jarak antar ikon dan teks */
    color: #ffffff; /* Warna teks putih */
    font-size: 14px;
    font-weight: 500;
  }

  .check-icon {
    width: 18px; /* Lebar ikon cek */
    height: 18px; /* Tinggi ikon cek */
    object-fit: contain; /* Jaga proporsi gambar */
  }

  /* ==================== TOMBOL PANAH ==================== */
  .tombol-panah {
    display: inline-flex; /* Tombol sejajar dengan konten di dalamnya */
    align-items: center; /* Vertikal tengah */
    justify-content: center; /* Horizontal tengah */
    gap: 8px; /* Jarak antara teks dan panah */
    padding: 10px 22px; /* Spasi dalam tombol */
    background-color: #7ed957; /* Warna hijau */
    border-radius: 50px; /* Membulat penuh */
    color: white; /* Warna teks putih */
    font-weight: 600; /* Teks tebal */
    font-size: 16px;
    text-decoration: none; /* Hilangkan garis bawah link */
    line-height: 1;
    transition: all 0.3s ease; /* Transisi halus saat hover */
    white-space: nowrap; /* Teks tidak terpotong ke bawah */
  }

  .icon-panah {
    width: 12px; /* Ukuran ikon panah */
    height: 12px;
    display: inline-block;
    object-fit: contain;
    vertical-align: middle; /* Posisikan sejajar teks */
    transition: transform 0.3s ease; /* Efek animasi saat hover */
  }

  /* Efek hover panah */
  .tombol-panah:hover .icon-panah {
    transform: translateX(4px); /* Panah bergeser ke kanan saat hover */
  }

  /* ==================== TOMBOL PULSE ==================== */
  a.pulse-button {
    background-color: #7ed957 !important; /* Warna tombol hijau utama */
    border-color: #7ed957 !important;
    color: white !important;
    display: inline-block;
    /* animasi pulse dihapus */
  }

  a.pulse-button:hover {
    background-color: #6cc44a !important; /* Warna hijau sedikit lebih gelap saat hover */
    border-color: #6cc44a !important;
  }

  @keyframes pulse { /* Efek animasi "berdenyut" jika diaktifkan */
    0% { transform: scale(1); }
    50% { transform: scale(1.07); }
    100% { transform: scale(1); }
  }

  /* ==================== HERO IMAGE ==================== */
  .hero img {
    clip-path: ellipse(60% 90% at 50% 50%); /* Potong gambar dalam bentuk elips agar tampil lebih menarik */
  }

  /* ==================== BACKGROUND HERO ==================== */
  .hero {
    background:
      linear-gradient(to right, #5DE0E6, #004AAD), /* Gradasi warna biru muda ke biru tua */
      url('assets/img/ornament1.png') no-repeat bottom center; /* Ornamen tambahan di bagian bawah tengah */
    background-size: cover; /* Gambar background menutupi seluruh area */
    padding: 100px 0 0 0; /* Spasi atas */
    overflow: hidden; /* Sembunyikan elemen keluar batas */
    position: relative; /* Untuk positioning pseudo-element (::before) */
  }

  .hero::before {
    content: ""; /* Elemen semu untuk lapisan background tambahan */
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('assets/img/ornament1.png') no-repeat bottom center; /* Ornamen tambahan */
    background-size: cover;
    opacity: 0.3; /* Buat ornamen lebih transparan */
    z-index: 0; /* Letakkan di bawah konten utama */
    pointer-events: none; /* Tidak bisa diklik */
  }

  .hero .container {
    position: relative;
    z-index: 1; /* Pastikan konten utama di atas layer background */
  }

  /* ========================================================= */
  /* ==================== RESPONSIF HERO ==================== */
  /* ========================================================= */

  @media (max-width: 768px) { /* Aturan tampilan untuk tablet dan ponsel */
    .hero-checklist {
      flex-direction: column; /* Ubah daftar jadi vertikal */
      align-items: center;
      gap: 10px;
      width: 100%;
    }

    .check-item {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      width: 250px; /* Lebar tetap untuk setiap item */
      gap: 8px;
      text-align: left;
    }

    .check-item span {
      display: inline-block;
      padding-left: 4px;
      flex: 1; /* Isi ruang yang tersedia */
    }

    .check-icon {
      transform: translateY(-10px); /* Geser ikon sedikit ke atas agar sejajar dengan teks */
    }

    .hero-title {
      font-size: 1.8rem !important; /* Ukuran judul lebih kecil */
      text-align: center;
    }

    .hero p {
      text-align: center;
    }

    .hero .col-lg-6 {
      text-align: center; /* Semua elemen teks rata tengah */
    }

    .hero .btn {
      display: inline-block;
      margin: 0 auto;
      width: auto;
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }

    .hero img {
      max-height: 300px !important; /* Gambar lebih kecil di mobile */
      margin-top: 20px;
    }

    .tombol-panah {
      padding: 12px 12px;
      gap: 8px;
      font-size: 16px;
      line-height: 1;
    }

    .icon-panah {
      width: 12px;
      height: 12px;
      position: relative;
      top: -11px; /* Geser ikon sedikit ke atas agar sejajar teks */
    }
  }

  @media (max-width: 576px) { /* Untuk ponsel kecil (misalnya iPhone SE) */
    .pulse-button {
      width: auto !important;
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }

    .hero .btn {
      display: inline-block !important;
      width: auto !important;
      margin: 0 auto !important;
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }
  }
</style>
</section>

<!-- Trusted By Section -->
<section class="trusted-section"> <!-- Bagian "Trusted By" untuk menampilkan logo perusahaan -->
  <div class="container"> <!-- Pembungkus konten agar sejajar di tengah dan responsif -->
    <div class="trusted-logos-wrapper"> <!-- Wrapper utama untuk seluruh logo dan teks -->
      <p class="trusted-label mb-3"> <!-- Label atau judul di atas logo -->
        Telah dipercaya oleh perusahaan dari berbagai Industri <!-- Teks judul -->
      </p>

      <div class="trusted-logos-track"> <!-- Track atau lintasan tempat logo bergerak otomatis -->
        <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" /> <!-- Logo 1 -->
        <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" /> <!-- Logo 2 -->
        <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" /> <!-- Logo 3 -->
        <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" /> <!-- Logo 4 -->

        <!-- Duplikat untuk loop -->
        <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" /> <!-- Ulangi logo agar animasi loop terlihat mulus -->
        <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" />

        <!-- Duplikat untuk loop -->
        <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" />
        <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" />

        <!-- Duplikat untuk loop -->
        <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" />
        <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" />
      </div>
    </div>
  </div>
</section>

<style>
/* ==================== TRUSTED SECTION ==================== */
.trusted-section {
  background-color: #e8f5fc; /* Warna latar belakang biru muda */
  padding: 40px; /* Spasi dalam di semua sisi */
  text-align: center; /* Semua teks rata tengah */
  overflow: hidden; /* Sembunyikan bagian yang keluar dari batas section */
  padding: 40px 40px 15px 40px; /* Atas 40px, kanan 40px, bawah 15px, kiri 40px */
}

/* Label "Telah dipercaya oleh..." */
.trusted-label {
  font-family: 'Poppins', sans-serif; /* Gunakan font Poppins agar konsisten */
  font-size: 1rem; /* Ukuran font sedang */
  font-weight: 700; /* Teks tebal */
  color: #414c58; /* Warna abu gelap */
  margin: 0; /* Hilangkan margin bawaan */
  white-space: nowrap; /* Desktop: teks hanya satu baris */
} 

/* Wrapper pembungkus track logo */
.trusted-logos-wrapper {
  overflow: hidden; /* Sembunyikan bagian logo yang keluar dari frame */
  position: relative; /* Untuk kontrol posisi elemen di dalamnya */
  width: 100%; /* Penuhi lebar container */
  margin: 0;
}

/* Track animasi berisi logo-logo */
.trusted-logos-track {
  display: flex; /* Susun logo sejajar horizontal */
  align-items: center; /* Logo rata tengah secara vertikal */
  gap: 20px; /* Jarak antar logo */
  animation: scrollLeft 20s linear infinite; /* Jalankan animasi geser ke kiri selama 20 detik secara terus-menerus */
  width: max-content; /* Lebar mengikuti isi (agar bisa looping) */
}

/* Gaya untuk setiap logo */
.trusted-logo {
  max-height: 140px; /* Tinggi maksimum logo */
  object-fit: contain; /* Pastikan logo tidak terpotong */
  transition: transform 0.3s ease; /* Efek animasi halus saat hover */
  flex: 0 0 auto; /* Logo tidak mengecil dalam flexbox */
}

/* Efek zoom saat hover logo */
.trusted-logo:hover {
  transform: scale(1.05); /* Logo sedikit membesar saat diarahkan kursor */
}

/* Animasi berjalan ke kiri */
@keyframes scrollLeft {
  0% {
    transform: translateX(0%); /* Mulai dari posisi normal */
  }
  100% {
    transform: translateX(-50%); /* Geser setengah dari total panjang agar tampak looping */
  }
}

/* ==================== RESPONSIF (MOBILE) ==================== */
@media (max-width: 767px) { /* Untuk layar dengan lebar di bawah 768px */
  .trusted-section {
    padding-top: 15px; /* Kurangi jarak atas di mobile agar lebih ringkas */
  }

  .trusted-label {
    white-space: normal; /* Izinkan teks turun ke baris baru */
    text-align: center;  /* Pastikan teks tetap rata tengah */
  }

  .trusted-logos-wrapper {
    width: 100%; /* Pastikan wrapper tetap penuh lebar */
    height: auto; /* Tinggi otomatis menyesuaikan isi */
  }

  .trusted-logo {
    height: 110px; /* Tinggi logo lebih kecil di mobile */
    max-height: 110px; /* Batasi tinggi maksimum */
  }
}
</style>

<!-- ==================== 3 Langkah Section ==================== -->
<section class="steps-section"> <!-- Section utama untuk menampilkan 3 langkah penggunaan layanan -->
  <div class="container"> <!-- Pembungkus agar konten rapi di tengah halaman -->
    <h5 class="steps-subtitle">PAKAI LAYANAN ASISTEN REKRUTMEN KAMI</h5> <!-- Subjudul kecil di atas judul utama -->

    <!-- Desktop -->
    <h2 class="steps-title d-none d-md-block"> <!-- Judul utama hanya muncul di layar medium ke atas -->
      Cukup Dengan 3 Langkah Mudah
    </h2>

    <!-- Mobile -->
    <h2 class="steps-title d-block d-md-none"> <!-- Versi judul untuk layar kecil (mobile) -->
      Cukup Dengan <br> 3 Langkah Mudah
    </h2>

    <div class="steps-wrapper"> <!-- Pembungkus untuk semua kartu langkah -->
      <!-- Step 1 -->
      <div class="step-card fade-up"> <!-- Kartu langkah pertama dengan animasi fade-up -->
        <div class="step-number">1</div> <!-- Lingkaran berisi angka langkah -->
        <h3 class="step-title">Minta<br>Kandidat</h3> <!-- Judul langkah 1 -->
        <p class="step-desc"> <!-- Deskripsi langkah 1 -->
          Kami bantu kelola seluruh proses rekrutmen dan berikan kandidat yang sesuai permintaan Anda.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="step-card fade-up"> <!-- Kartu langkah kedua -->
        <div class="step-number">2</div>
        <h3 class="step-title">Pilih<br>Kandidat</h3>
        <p class="step-desc">
          Sesuai waktu yang disepakati, kami akan mengirimkan daftar rekomendasi kandidat untuk Anda pilih.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="step-card fade-up"> <!-- Kartu langkah ketiga -->
        <div class="step-number">3</div>
        <h3 class="step-title">Rekrut<br>Kandidat</h3>
        <p class="step-desc">
          Rekrut kandidat yang menurut Anda sesuai.
        </p>
      </div>
    </div>
  </div>
</section>

<style>
/* ===== Steps Section ===== */
.steps-section {
  padding: 60px 20px; /* Jarak atas-bawah 60px, kiri-kanan 20px */
  text-align: center; /* Semua teks di tengah */
  font-family: 'Poppins', sans-serif; /* Gunakan font Poppins */
}

.steps-subtitle {
  font-size: 14px; /* Ukuran kecil */
  color: #2e6bbc; /* Warna biru cerah */
  margin-bottom: 10px; /* Jarak bawah */
  font-weight: 500; /* Ketebalan sedang */
}

.steps-title {
  font-size: 36px; /* Ukuran besar untuk judul utama */
  font-weight: 800; /* Sangat tebal */
  color: #3c678b; /* Biru keabu-abuan */
  margin-bottom: 40px; /* Jarak ke bawah */
}

.steps-wrapper {
  display: flex; /* Susun kartu sejajar horizontal */
  justify-content: center; /* Rata tengah */
  gap: 20px; /* Jarak antar kartu */
  flex-wrap: wrap; /* Jika ruang tidak cukup, turun ke baris berikutnya */
}

.step-card {
  background: #E9F5FF; /* Warna biru muda */
  border-radius: 12px; /* Sudut membulat */
  padding: 50px 20px 30px; /* Spasi dalam: atas 50px, kanan-kiri 20px, bawah 30px */
  text-align: center; /* Teks di tengah */
  position: relative; /* Untuk menempatkan nomor langkah secara absolut */
  box-shadow: 0 4px 12px rgba(0,0,0,0.05); /* Bayangan lembut */
}

.step-number {
  background: #5892c3; /* Warna biru medium untuk lingkaran */
  color: #fff; /* Angka putih */
  font-size: 18px;
  font-weight: 700;
  width: 50px;
  height: 50px;
  border-radius: 50%; /* Lingkaran sempurna */
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute; /* Letakkan di atas kartu */
  top: -25px; /* Naik sedikit dari atas kartu */
  left: 50%; /* Di tengah horizontal */
  transform: translateX(-50%); /* Geser ke kiri 50% agar benar-benar tengah */
  box-shadow: 0 4px 10px rgba(0,0,0,0.15); /* Bayangan di lingkaran */
}

.step-title {
  font-size: 30px; /* Ukuran judul langkah */
  font-weight: 800; /* Tebal */
  color: #414c58; /* Warna abu kehitaman */
  margin-bottom: 30px; /* Jarak ke deskripsi */
}

.step-desc {
  font-size: 14px; /* Ukuran teks kecil */
  color: #414c58;
  line-height: 1.6; /* Spasi antar baris */
  text-align: center; /* Teks di tengah */
}

/* ===== Animasi Fade Up ===== */
@keyframes fadeUp { /* Definisi animasi naik dari bawah */
  from {
    opacity: 0; /* Mulai transparan */
    transform: translateY(40px); /* Geser ke bawah */
  }
  to {
    opacity: 1; /* Muncul sepenuhnya */
    transform: translateY(0); /* Kembali ke posisi normal */
  }
}

.fade-up {
  opacity: 0; /* Awalnya disembunyikan */
  transform: translateY(40px); /* Posisi di bawah */
}

.fade-up.show {
  animation: fadeUp 0.8s ease forwards; /* Saat aktif, jalankan animasi 0.8 detik */
}

/* ===== Mobile ===== */
@media (max-width: 768px) {
  .step-card {
    width: 100%; /* Kartu memenuhi lebar container */
    max-width: 350px; /* Tapi tidak melebihi 350px */
  }
}

/* ===== Desktop ===== */
@media (min-width: 769px) {
  .step-card {
    width: 220px; /* Lebar kartu tetap di desktop */
    min-height: 350px; /* Tinggi minimum untuk keseimbangan */
  }
}

/* Tambahan: jarak antar kartu diperlebar */
.steps-wrapper {
  gap: 50px; /* Jarak antar step di desktop */
}
</style>

<script>
  // Intersection Observer untuk animasi saat discroll ke tampilan pengguna
  document.addEventListener("DOMContentLoaded", function () { // Jalankan setelah halaman dimuat
    const faders = document.querySelectorAll(".fade-up"); // Ambil semua elemen dengan class fade-up
    const options = {
      threshold: 0.2, // Animasi aktif saat 20% elemen terlihat di viewport
    };

    const observer = new IntersectionObserver((entries, observer) => { // Buat observer untuk mendeteksi scroll
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) { // Jika elemen masuk ke viewport
          // Kasih delay biar animasi muncul bertahap antar kartu
          entry.target.style.animationDelay = `${index * 0.2}s`; // Tiap kartu muncul selang 0.2 detik
          entry.target.classList.add("show"); // Tambahkan class show untuk memicu animasi
          observer.unobserve(entry.target); // Hentikan pengamatan agar animasi hanya sekali
        }
      });
    }, options);

    faders.forEach((el) => {
      observer.observe(el); // Daftarkan setiap elemen untuk dipantau
    });
  });
</script>
<!-- Import Font Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<!-- ==================== STATISTIK SECTION ==================== -->
<section class="stats-section"> <!-- Section utama untuk statistik angka -->
  <section class="stats-inner" 
    style="background: linear-gradient(135deg, #5DE0E6, #004AAD); color: #fff; padding: 40px 20px; text-align: center; height: 204.47px; width: 100%; margin: 0 auto; border-radius: 9999px; font-family: 'Poppins', sans-serif;">
    <!-- Section dalam dengan gradasi biru-toska, berbentuk lonjong (border-radius besar) -->
    
    <div class="container" data-aos="fade-up" 
      style="height: 100%; display: flex; align-items: center; justify-content: center;">
      <!-- Container Bootstrap, kontennya di tengah secara vertikal dan horizontal -->
      
      <div class="row justify-content-center text-center g-4" style="width: 100%;">
        <!-- Baris yang berisi 3 kolom angka statistik -->
        
        <!-- Item 1 -->
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-4">
          <!-- Kolom pertama: angka besar dan teks di sebelahnya -->
          <h1 class="counter mb-0" data-target="11">0</h1> <!-- Elemen angka yang akan di-animasi naik dari 0 ke 11 -->
          <div class="text-start stat-text">
            key positions<br>successfully filled <!-- Deskripsi singkat statistik pertama -->
          </div>
        </div>

        <!-- Item 2 -->
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-4">
          <!-- Kolom kedua -->
          <h1 class="counter mb-0" data-target="17">0</h1> <!-- Akan menghitung naik ke 17 -->
          <div class="text-start stat-text">
            of talents elevate<br>their career <!-- Teks penjelas -->
          </div>
        </div>

        <!-- Item 3 -->
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-4">
          <!-- Kolom ketiga -->
          <h1 class="counter mb-0" data-target="90" data-suffix="%">0%</h1> <!-- Hitung naik ke 90 dan tambahkan '%' di akhir -->
          <div class="text-start stat-text">
            of our client successfully<br>grown their business <!-- Penjelasan statistik -->
          </div>
        </div>

      </div>
    </div>
  </section>
</section>

<style>
/* ==================== STYLE UTAMA UNTUK ANGKA & TEKS ==================== */
.counter {
  font-size: 69px; /* Ukuran besar untuk angka utama */
  font-weight: 700; /* Tebal */
  line-height: 1; /* Jarak antar baris rapat */
  margin-right: 10px; /* Jarak kanan kecil antara angka dan teks */
  color: #fff; /* Warna putih */
}

.stat-text {
  font-size: 12.8px; /* Ukuran teks kecil di bawah angka */
  color: #fff;
  text-align: left; /* Rata kiri agar terlihat seperti keterangan angka */
}

/* ==================== MOBILE RESPONSIVE (max-width: 768px) ==================== */
@media (max-width: 768px) {
  .stats-section .stats-inner {
    height: auto !important; /* Biarkan tinggi menyesuaikan isi */
    min-width: auto !important;
    border-radius: 0 !important; /* Ubah bentuk jadi kotak agar proporsional di HP */
    padding: 20px !important; /* Kurangi padding agar tidak terlalu tinggi */
  }

  .stats-section .counter {
    font-size: 40px; /* Ukuran angka lebih kecil di mobile */
  }

  .stats-section .stat-text {
    font-size: 14px; /* Ukuran teks sedikit lebih besar agar mudah dibaca */
  }

  .stats-section .row.g-4 {
    flex-direction: column !important; /* Susun ke bawah, satu per satu */
    gap: 20px; /* Jarak antar item */
  }

  .stats-section .col-12 {
    display: flex; /* Flex untuk rata kiri */
    justify-content: flex-start;
    text-align: left;
  }
}
</style>

<!-- ==================== ANIMASI COUNT-UP (JAVASCRIPT) ==================== -->
<script>
document.querySelectorAll('.counter').forEach(counter => { 
  // Ambil semua elemen dengan class 'counter' untuk dianimasikan satu per satu
  
  const suffix = counter.getAttribute('data-suffix') || ''; 
  // Ambil atribut tambahan (misalnya %). Jika tidak ada, default kosong.

  const target = +counter.getAttribute('data-target'); 
  // Ambil nilai target angka (misalnya 11, 17, 90)

  const speed = 12; 
  // Kecepatan update (semakin kecil, semakin cepat)

  const increment = Math.ceil(target / 100); 
  // Nilai kenaikan tiap langkah animasi (dibagi 100 agar halus)

  const updateCount = () => { 
    // Fungsi untuk menaikkan angka secara bertahap
    const current = parseInt(counter.innerText.replace(/\D/g, ''), 10) || 0; 
    // Ambil angka saat ini (hapus karakter non-digit seperti %)

    if (current < target) { 
      // Jika angka saat ini belum mencapai target
      counter.innerText = `${current + increment}${suffix}`; 
      // Tambahkan increment lalu tampilkan dengan suffix
      setTimeout(updateCount, speed); 
      // Jalankan ulang fungsi ini setelah jeda 'speed' milidetik
    } else {
      counter.innerText = `${target}${suffix}`; 
      // Jika sudah sampai target, tampilkan angka akhir
    }
  };

  const observer = new IntersectionObserver(entries => { 
    // Observer untuk mendeteksi kapan elemen muncul di layar
    entries.forEach(entry => {
      if (entry.isIntersecting) { 
        // Jika elemen terlihat di viewport
        updateCount(); // Jalankan animasi count-up
        observer.unobserve(counter); // Berhenti mengamati setelah animasi selesai
      }
    });
  }, { threshold: 0.9 }); 
  // threshold 0.9 artinya elemen harus 90% terlihat di layar sebelum animasi mulai

  observer.observe(counter); 
  // Mulai mengamati elemen counter
});
</script>

<!-- ==================== CLIENT & TALENT SECTION ==================== -->
<section class="client-section"> <!-- Section utama yang berisi testimoni dari klien dan talenta -->
  <div class="container"> <!-- Pembungkus agar konten sejajar dengan layout utama -->
    <h2 class="client-title">Empowering Indonesian Talent and Business Ecosystem</h2>  
    <!-- Judul utama section -->

    <!-- ==================== TAB BUTTONS ==================== -->
    <div class="tab-buttons"> <!-- Tombol tab untuk berpindah antara “Clients” dan “Talents” -->
      <button class="tab active" data-target="clients">Clients</button> <!-- Tombol aktif default -->
      <button class="tab" data-target="talents">Talents</button> <!-- Tombol tab kedua -->
    </div>

    <!-- ==================== CLIENTS CONTENT ==================== -->
    <div class="tab-content active" id="clients"> <!-- Konten tab "Clients", aktif secara default -->
      <div class="carousel-container"> <!-- Pembungkus slider untuk testimoni client -->
        <button class="carousel-button prev" aria-label="Previous">&#10094;</button> <!-- Tombol navigasi ke slide sebelumnya -->
        
        <div class="carousel-track"> <!-- Lintasan (track) tempat slide berjalan -->

          <!-- ==================== CLIENT GROUP 1 (Slide pertama) ==================== -->
          <div class="carousel-slide active"> <!-- Slide pertama ditampilkan secara default -->
            
            <!-- CARD 1 -->
            <div class="card"> <!-- Kartu testimoni pertama -->
              <div class="card-header"> <!-- Bagian atas kartu berisi logo dan nama client -->
                <img src="assets/img/irij3.png" alt="IRIJ Logo" class="card-logo"> <!-- Logo client -->
                <div class="card-titles"> <!-- Nama dan posisi -->
                  <h3>IRIJ Jakarta</h3>
                  <p class="role">Market Research Consultant</p>
                </div>
              </div>
              <p class="description-irij">
                Proses rekrutmen berjalan sangat cepat dan efisien, tidak lama dari kami submit kriteria tenaga kerja yang dibutuhkan, Klik Rekrut langsung memberikan beberapa kandidat yang potensial.  
                Sudah 2 tahun sejak kandidat yang direferensikan bergabung. Sekarang menjadi salah satu staf yang memiliki kompetensi yang bagus. Bekerja dengan cepat dan cermat.
              </p>
            </div>

            <!-- CARD 2 -->
            <div class="card">
              <div class="card-header">
                <img src="assets/img/sosialoka3.png" alt="Sosialoka Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Sosialoka</h3>
                  <p class="role">Digital Agency</p>
                </div>
              </div>
              <p class="card-description">
                Rekrutmen jadi jauh lebih efisien dengan Klik Rekrut. Tidak perlu menunggu lama, kami langsung mendapat kandidat yang tepat dan kompeten. Prosesnya simpel, transparan, dan hasilnya memuaskan
              </p>
            </div>

            <!-- CARD 3 -->
            <div class="card">
              <div class="card-header">
                <img src="assets/img/nurama3.png" alt="Nurama.clo Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Nurama.clo</h3>
                  <p class="role">Fashion Modest Brand</p>
                </div>
              </div>
              <p class="card-description nurama-desc">
                KLIK Rekrut membantu kami di Nurama menemukan karyawan yang tepat dengan cepat. Prosesnya pun mudah, pelayanannya maksimal, dan benar-benar disesuaikan dengan kebutuhan perusahaan. Sangat membantu perkembangan perusahaan kami.
              </p>
            </div>
          </div> <!-- End of slide 1 -->
          
          <!-- ==================== CLIENT GROUP 2 (Slide kedua) ==================== -->
          <div class="carousel-slide"> <!-- Slide kedua -->
            <div class="card">
              <div class="card-header">
                <img src="assets/img/hokkaido.png" alt="Client 4 Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Hokkaido Baked</h3>
                  <p class="role">F&B Brand</p>
                </div>
              </div>
              <p class="card-description">
                KLIK Rekrut prosesnya praktis dan sangat membantu. Kami bisa langsung dapat pengganti yang tepat saat salah satu karyawan kami resign mendadak.  
                Operasional outlet pun tetap berjalan normal.
              </p>
            </div>
          </div> <!-- End of slide 2 -->
        </div> <!-- End of carousel track -->
        
        <button class="carousel-button next" aria-label="Next">&#10095;</button> <!-- Tombol navigasi ke slide berikutnya -->
      </div> <!-- End of carousel container -->
      
      <!-- ==================== NAVIGATION DOTS (CLIENTS) ==================== -->
      <div class="carousel-dots"> <!-- Indikator dot untuk navigasi antar slide -->
        <span class="dot active" data-slide="0"></span> <!-- Dot untuk slide pertama -->
        <span class="dot" data-slide="1"></span> <!-- Dot untuk slide kedua -->
      </div>
    </div> <!-- End of clients tab-content -->

    <!-- ==================== TALENTS CONTENT ==================== -->
    <div class="tab-content" id="talents"> <!-- Tab untuk konten "Talents" -->
      <div class="carousel-container" data-carousel="talents"> <!-- Container carousel untuk testimoni talent -->

        <div class="carousel-track"> <!-- Track slide talent -->
          
          <!-- SLIDE 1 (aktif secara default) -->
          <div class="carousel-slide active">
            
            <!-- TALENT CARD 1 -->
            <div class="card">
              <div class="card-header">
                <img src="assets/img/gita.jpg" alt="Agustina Gita" class="card-logo"> <!-- Foto talent -->
                <div class="card-titles">
                  <h3>Agustina Gita</h3>
                  <p class="role">Jr. Finance & Accounting</p>
                </div>
              </div>
              <p class="card-description gita-desc">
                KlikRekrut jadi pintu pertama perjalanan karierku. Dari intern 6 bulan di konsultan, sekarang sudah 2 tahun aku berkembang sebagai karyawan tetap. Smooth process, impactful result! Prosesnya gampang banget dan beneran ngebuka jalan karierku!
              </p>
            </div>

            <!-- TALENT CARD 2 -->
            <div class="card">
              <div class="card-header">
                <img src="assets/img/fadhia1.jpg" alt="fadhiah" class="card-logo">
                <div class="card-titles">
                  <h3>Fadhia Raudhah</h3>
                  <p class="role">E commerce specialist</p>
                </div>
              </div>
              <p class="card-description fadhia-desc">
                Puas banget dari layanannya. Rekruternya komunikatif, prosesnya diupdate secara berkala, berjalan cepat dan profesional. Sangat terbantu dari membuat CV yang proper, dan dibantu mengenal lebih dalam mengenai jobdesk pekerjaan dan budaya perusahaan tempat saya melamar. Mulai dari awal melamar sampai penawaran kerja tetap diarahkan dengan baik
              </p>
            </div>

            <!-- TALENT CARD 3 -->
            <div class="card">
              <div class="card-header">
                <img src="assets/img/amanda.jpg" alt="Ical" class="card-logo">
                <div class="card-titles">
                  <h3>Amanda</h3>
                  <p class="role">Digital Growth</p>
                </div>
              </div>
              <p class="card-description">
                Beneran terbantu dari awal apply sampai onboarding waktu intern di Sosialoka dan Prosesnya juga cepet banget.
              </p>
            </div>
          </div> <!-- End of slide -->
        </div> <!-- End of carousel track -->

      </div> <!-- End of carousel container -->

      <!-- Karena hanya ada 1 slide di talents, dot hanya 1 -->
      <div class="carousel-dots">
        <span class="dot active" data-slide="0"></span> <!-- Dot tunggal -->
      </div>
    </div> <!-- End of talents tab-content -->
  </div> <!-- End of container -->
</section> <!-- End of client-section -->

<style>
/* ==================== CLIENT & TALENT SECTION ==================== */
.client-section {
  padding-top: 10px; /* Jarak bagian atas kecil */
  padding-bottom: 0; /* Hilangkan jarak bawah */
  margin-bottom: 0;  /* Supaya section ini gak dorong footer */
  background: white; /* Latar belakang putih */
}

/* Semua elemen utama di dalam section ini diratakan tengah */
.client-section .client-title,
.client-section .tab-buttons,
.client-section .tab-content {
  text-align: center;
}

/* ==================== JUDUL SECTION ==================== */
.client-title {
  font-size: 29.5px; /* Ukuran besar tapi proporsional */
  font-weight: 700; /* Tebal */
  margin-bottom: 30px; /* Jarak bawah */
  margin-top: 20px; /* Jarak atas */
  color: #3c678b; /* Warna biru abu */
}

/* ==================== TOMBOL TAB ==================== */
.tab-buttons {
  display: flex; /* Tab berdampingan */
  justify-content: center; /* Rata tengah */
  gap: 10px; /* Jarak antar tombol */
  margin-bottom: 40px; /* Spasi bawah */
  margin-top: 50px; /* Spasi atas dari judul */
  flex-wrap: wrap; /* Jika layar kecil, tab bisa turun */
}

.tab {
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  background: #f0f0f0; /* Warna abu muda default */
  color: #333; /* Teks abu gelap */
  cursor: pointer;
  font-weight: 600;
  transition: all 0.3s; /* Efek halus saat hover/klik */
}

.tab.active {
  background: linear-gradient(90deg, #5DE0E6, #004AAD); /* Warna gradasi aktif */
  color: white; /* Teks putih */
}

/* ==================== KONTEN TAB ==================== */
.tab-content {
  display: none; /* Semua tab disembunyikan dulu */
  justify-content: center;
  flex-wrap: wrap;
  align-items: stretch;
}

.tab-content.active {
  display: flex; /* Tampilkan hanya tab aktif */
  flex-direction: column; /* Susun vertikal */
  align-items: center;
}

/* ==================== CAROUSEL STYLES ==================== */
.carousel-container {
  position: relative; /* Untuk posisi tombol prev/next */
  width: 100%;
  max-width: 1000px; /* Batas lebar maksimal carousel */
  margin: 0 auto;
  display: flex;
  align-items: center;
}

.carousel-track {
  display: flex;
  overflow: visible; /* Biarkan konten terlihat penuh */
  width: 100%;
}

.carousel-slide {
  display: none; /* Slide disembunyikan default */
  justify-content: center; /* Rata tengah konten dalam slide */
  gap: 20px; /* Jarak antar kartu */
  width: 100%;
  flex-shrink: 0;
  transition: transform 0.5s ease; /* Transisi lembut saat berpindah */
}

.carousel-slide.active {
  display: flex; /* Tampilkan hanya slide aktif */
}

/* Tombol navigasi carousel */
.carousel-button {
  position: absolute;
  top: 50%; /* Di tengah vertikal */
  transform: translateY(-50%); /* Geser naik separuh tinggi tombol */
  background: linear-gradient(135deg, #5DE0E6, #004AAD); /* Gradasi biru */
  color: white; /* Warna panah putih */
  border: none;
  border-radius: 50%; /* Bulat */
  width: 40px;
  height: 40px;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  z-index: 10; /* Di atas semua elemen carousel */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Bayangan lembut */
  transition: transform 0.25s ease-in-out; /* Animasi saat hover */
}

/* Efek hover tombol — hanya memperbesar sedikit */
.carousel-button:hover {
  transform: scale(1.1);
}

/* Posisi tombol prev & next */
.prev {
  left: -50px; /* Geser ke kiri */
}
.next {
  right: -50px; /* Geser ke kanan */
}

/* ==================== DOTS NAVIGATION ==================== */
.carousel-dots {
  display: flex;
  justify-content: center;
  margin-top: 20px;
  gap: 10px;
  margin-bottom: 60px; /* Tambahkan jarak ekstra di bawah */
}

.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%; /* Bulat */
  background: #ddd; /* Warna default abu muda */
  cursor: pointer;
  transition: all 0.3s;
}

.dot.active {
  background: #3c678b; /* Dot aktif warna biru */
}

/* ==================== CARD STYLES ==================== */
/* Untuk foto talent biar bulat */
#talents .card-logo {
  width: 60px;
  height: 60px;
  object-fit: cover; /* Menjaga proporsi wajah */
  margin-right: 12px;
  background: transparent;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%; /* Jadikan bulat */
  border: 2px solid #e0e0e0; /* Border tipis */
}

/* Tampilan dasar kartu testimoni */
.card {
  background: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 12px;
  padding: 20px; /* Spasi dalam lega */
  width: 320px; /* Lebar kartu */
  min-height: 320px; /* Tinggi minimum seragam */
  text-align: left;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

/* Header kartu: logo + nama */
.card-header {
  display: flex;
  align-items: center;
  margin-bottom: 8px;
  background: transparent;
  border-bottom: none;
  min-height: 50px;
}

/* Logo perusahaan/talent */
.card-logo {
  width: 60px;
  height: 60px;
  object-fit: contain;
  margin-right: 12px;
  background: transparent;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Container teks judul dan role */
.card-titles {
  flex: 1;
  background: transparent;
}

/* Nama client/talent */
.card h3 {
  margin: 0 0 3px;
  font-size: 18px;
  color: #635d5e;
  font-weight: bold;
  background: transparent;
}

/* Role/jabatan */
.card .role {
  color: #635d5e;
  font-size: 10px;
  margin: 0;
  background: transparent;
  font-weight: bold;
}

/* Deskripsi testimoni */
.card-description {
  margin-top: 0;
  color: #444;
  line-height: 1.5;
  font-size: 14px;
  text-align: justify;
  flex-shrink: 0;
}

/* Ukuran font deskripsi di tiap kartu tertentu */
.nurama-desc,
.gita-desc,
.fadhia-desc,
.description-irij {
  font-size: 13px;
}

/* ==================== RESPONSIVE (MOBILE) ==================== */
@media (max-width: 768px) {
  .carousel-slide.active {
    flex-direction: column; /* Kartu jadi bertumpuk vertikal */
    align-items: center; /* Rata tengah */
    gap: 20px; /* Jarak antar kartu */
  }

  .card {
    width: 90%;
    max-width: 360px;
    min-height: 320px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 16px;
    box-sizing: border-box;
  }

  .card-title {
    margin-bottom: 8px;
  }

  .card-description {
    margin-top: 0;
    flex-grow: 0; /* Biar deskripsi gak menekan elemen lain */
  }
}

/* Pindahkan tombol carousel ke bawah untuk tampilan mobile */
.carousel-button { 
  display: block; /* Pastikan tombol tampil */
  top: auto; /* Lepas posisi tengah */
  bottom: -50px; /* Letakkan di bawah carousel */
  transform: none; /* Hapus transformasi vertikal */
}

/* Posisi tombol prev/next di bawah carousel */
.prev { left: 30%; }
.next { right: 30%; }

</style>

<script>
/* ==================== SWITCHING TAB (CLIENT <-> TALENT) ==================== */
const tabs = document.querySelectorAll('.tab'); // Ambil semua tombol tab
const contents = document.querySelectorAll('.tab-content'); // Ambil semua konten tab

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    // Hapus kelas active dari semua tab & konten
    tabs.forEach(t => t.classList.remove('active'));
    contents.forEach(c => c.classList.remove('active'));

    // Tambahkan kelas active ke tab yang diklik
    tab.classList.add('active');
    // Tampilkan konten tab yang sesuai berdasarkan data-target
    document.getElementById(tab.dataset.target).classList.add('active');
  });
});

/* ==================== REUSABLE CAROUSEL FUNCTION ==================== */
function initCarousel(scopeEl) {
  const container = scopeEl.querySelector('.carousel-container'); // Ambil elemen container carousel
  if (!container) return; // Jika tidak ada, hentikan

  const slides = container.querySelectorAll('.carousel-slide'); // Semua slide
  const dots = scopeEl.querySelectorAll('.carousel-dots .dot'); // Semua navigasi dot
  const prevBtn = container.querySelector('.prev'); // Tombol kiri
  const nextBtn = container.querySelector('.next'); // Tombol kanan
  let current = [...slides].findIndex(s => s.classList.contains('active')); // Cari index slide aktif
  if (current < 0) current = 0; // Default ke slide pertama jika belum ada

  // Fungsi untuk menampilkan slide tertentu
  function show(i) {
    slides.forEach(s => s.classList.remove('active'));
    dots.forEach(d => d.classList.remove('active'));
    slides[i].classList.add('active'); // Tampilkan slide ke-i
    if (dots[i]) dots[i].classList.add('active'); // Tandai dot aktif
    current = i;
  }

  // Tombol Previous
  prevBtn.addEventListener('click', () => {
    show((current - 1 + slides.length) % slides.length); // Mundur satu slide
  });

  // Tombol Next
  nextBtn.addEventListener('click', () => {
    show((current + 1) % slides.length); // Maju satu slide
  });

  // Klik dot untuk berpindah ke slide tertentu
  dots.forEach(d => {
    d.addEventListener('click', () => show(parseInt(d.dataset.slide, 10)));
  });
}

/* Inisialisasi carousel untuk setiap tab yang punya slider */
document.querySelectorAll('.tab-content').forEach(initCarousel);
</script>
<!-- ==================== CTA (Call To Action) SECTION ==================== -->
<section class="cta-section position-relative"> <!-- Bagian ajakan utama (CTA) -->
  <div class="container"> <!-- Container bootstrap -->
    <div class="row align-items-center"> <!-- Susunan 2 kolom sejajar vertikal tengah -->
      
      <!-- ==================== TEKS CTA ==================== -->
      <div class="col-lg-6 text-white"> <!-- Kolom kiri untuk teks -->
        <h2 class="mb-4" style="font-weight:700; color:white;">
          Siap merekrut kandidat<br>
          terbaik untuk bergabung<br>
          jadi tim Anda?
        </h2> <!-- Judul utama CTA -->

        <p class="mb-4">
          Jangan biarkan momentum bisnis Anda hilang karena tim belum siap!<br>
          Klik tombol untuk mulai merekrut dan bawa bisnis Anda ke level berikutnya!
        </p> <!-- Deskripsi CTA -->

        <!-- ==================== TOMBOL CTA ==================== -->
        <div class="cta-buttons d-flex flex-wrap gap-3"> <!-- Container untuk 2 tombol CTA -->
          
          <!-- Tombol WhatsApp (Hijau) -->
          <a href="https://api.whatsapp.com/send?phone=6289678868752" 
            class="btn btn-success rounded-pill px-4 py-2 pulse-whatsapp"
            style="background-color: #7ed957; border-color: #7ed957; color: white;"
            target="_blank" 
            rel="noopener noreferrer">
            Book a Special Offer ➝
          </a>

          <!-- Tombol Download Proposal (Outline putih) -->
          <a href="assets/proposal.pdf" 
            class="btn btn-outline-proposal rounded-pill px-4 py-2"
            target="_blank" 
            rel="noopener noreferrer">
            Download Proposal
          </a>
        </div>
      </div>

      <!-- ==================== GAMBAR CTA ==================== -->
      <div class="col-lg-6 text-center"> <!-- Kolom kanan berisi gambar -->
        <img src="assets/img/cta.png" class="img-fluid" style="max-height: 500px;" alt="Tim Rekrut">
        <!-- Gambar ilustrasi tim rekrutmen -->
      </div>
    </div>
  </div>
</section>

<style>
/* ==================== ANIMASI DETAK UNTUK TOMBOL WHATSAPP ==================== */
@keyframes pulseWhatsapp {
  0% { transform: scale(1); }     /* ukuran normal */
  50% { transform: scale(1.1); }  /* membesar sedikit */
  100% { transform: scale(1); }   /* kembali ke ukuran semula */
}

/* Kelas animasi yang diterapkan ke tombol WhatsApp */
.pulse-whatsapp {
  display: inline-block;
  animation: pulseWhatsapp 1s infinite; /* Jalankan terus tiap 1 detik */
  transition: transform 0.2s;
}

/* ==================== TOMBOL DOWNLOAD PROPOSAL ==================== */
.btn-outline-proposal {
  background-color: transparent; /* transparan default */
  border: 2px solid white; /* garis putih */
  color: white; /* teks putih */
  font-weight: 600; /* tebal */
  transition: all 0.3s ease; /* efek halus */
}

/* Efek hover untuk tombol proposal */
.btn-outline-proposal:hover {
  background-color: white; /* ubah latar jadi putih */
  color: #004AAD; /* teks jadi biru */
  box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* efek glow putih */
}

/* ==================== TEKS CTA ==================== */
.cta-section p.mb-4 {
  font-size: 14px;
  line-height: 1.6;
}

/* ==================== BAGIAN UTAMA CTA ==================== */
.cta-section {
  background: 
    linear-gradient(to right, #5DE0E6, #004AAD), /* gradasi biru ke toska */
    url('assets/img/ornamencta.png') no-repeat right center; /* ornamen latar kanan */
  background-size: cover; /* gambar menyesuaikan area */
  padding: 80px 0 60px; /* atas-bawah */
  overflow: hidden; /* sembunyikan elemen keluar area */
  position: relative; /* untuk ::before overlay */
}

/* ==================== OVERLAY ORNAMEN TRANSPARAN ==================== */
.cta-section::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 60%;
  height: 100%;
  background: url('assets/img/ornamencta.png') no-repeat center right;
  background-size: 150%; /* perbesar ornamen */
  opacity: 0.4; /* buat transparan */
  z-index: 0; /* di belakang konten */
  pointer-events: none; /* biar tidak menghalangi klik */
}

/* Pastikan konten di atas overlay */
.cta-section .container {
  position: relative;
  z-index: 1;
}

/* ==================== RESPONSIF MOBILE ==================== */
@media (max-width: 768px) {
  .cta-section {
    text-align: center; /* teks tengah */
    background: linear-gradient(to bottom, #5DE0E6, #004AAD); /* ubah arah gradasi */
  }

  .cta-section::before {
    width: 100%; /* overlay penuh layar */
    height: 50%;
    top: auto;
    bottom: 0;
    background-size: cover; /* ornamen isi area */
  }

  .cta-section img {
    max-height: 300px !important; /* kecilkan gambar */
    margin-top: 20px;
  }

  /* Tombol disusun vertikal di mobile */
  .cta-buttons {
    flex-direction: column;
    align-items: center;
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