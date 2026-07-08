<!-- Header -->
<header class="header fixed-top business-mode" id="main-header">
  <div class="container d-flex justify-content-between align-items-center py-2">

    <!-- Logo -->
    <a href="/" class="logo d-flex align-items-center">
      <img src="assets/img/Header.png" alt="Klikrekrut Logo" class="logo-full" />
    </a>

    <!-- Desktop Nav Menu -->
    <nav id="navmenu" class="navmenu d-none d-lg-flex align-items-center">
      <ul class="d-flex align-items-center mb-0 flex-row" style="gap: 15px; list-style: none; padding: 0; margin: 0;">
        <li><a href="#services">Layanan</a></li>
        <li><a href="#trusted-clients">Klien Kami</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="https://api.whatsapp.com/send?phone=6281234567890" target="_blank" rel="noopener noreferrer" class="btn-konsultasi">Konsultasi Sekarang</a></li>
      </ul>
    </nav>

    <!-- Mobile Toggle (hamburger) — hanya tampil di mobile -->
    <button class="burger-btn" id="mobile-nav-toggle" aria-label="Toggle navigation">
      <span class="burger-line"></span>
      <span class="burger-line"></span>
      <span class="burger-line"></span>
    </button>
  </div>
</header>

<!-- Mobile Sidebar -->
<div class="mobile-sidebar" id="mobile-sidebar">
  <!-- Sidebar Header: Logo saja (tanpa tombol X) -->
  <div class="mobile-sidebar-header">
    <a href="/" class="mobile-sidebar-logo">
      <img src="assets/img/Footer.png" alt="Klik Rekrut">
    </a>
  </div>

  <hr class="mobile-sidebar-divider">

  <!-- Sidebar Nav Links -->
  <nav class="mobile-sidebar-nav">
    <a href="#services" class="mobile-sidebar-link" data-close-sidebar>Layanan</a>
    <hr class="mobile-sidebar-divider">
    <a href="#trusted-clients" class="mobile-sidebar-link" data-close-sidebar>Klien Kami</a>
    <hr class="mobile-sidebar-divider">
    <a href="#faq" class="mobile-sidebar-link" data-close-sidebar>FAQ</a>
    <hr class="mobile-sidebar-divider">
    <a href="https://api.whatsapp.com/send?phone=6281234567890" target="_blank" rel="noopener noreferrer" class="mobile-sidebar-link mobile-sidebar-cta" data-close-sidebar>Konsultasi Sekarang</a>
  </nav>
</div>

<!-- Overlay (klik untuk tutup sidebar) -->
<div class="mobile-nav-overlay" id="nav-overlay"></div>

<style>
/* ==================== DESKTOP NAV ==================== */
.btn-konsultasi {
  border: 1px solid #004AAD;
  border-radius: 20px;
  padding: 5px 20px !important;
  color: #004AAD !important;
  font-weight: 600;
  transition: all 0.3s;
}
.btn-konsultasi:hover {
  background-color: #004AAD;
  color: #fff !important;
}

/* ==================== HAMBURGER BUTTON ==================== */
/* Pakai class .burger-btn agar tidak konflik dengan .mobile-nav-toggle di main.css */
.burger-btn {
  display: none;          /* tersembunyi secara default (desktop) */
  background: none;
  border: none;
  padding: 6px 4px;
  cursor: pointer;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  gap: 5px;
  width: 36px;
  height: 36px;
  z-index: 10003;
  position: relative;
}

/* Hanya tampil di mobile (< 992px = Bootstrap lg breakpoint) */
@media (max-width: 991.98px) {
  .burger-btn {
    display: flex;
  }
}

.burger-line {
  display: block;
  width: 22px;
  height: 2px;
  background-color: #004AAD;
  border-radius: 2px;
  transition: all 0.3s ease;
  flex-shrink: 0;
}

/* Animasi burger → X saat sidebar terbuka */
.burger-btn.is-open .burger-line:nth-child(1) {
  transform: translateY(7px) rotate(45deg);
}
.burger-btn.is-open .burger-line:nth-child(2) {
  opacity: 0;
  transform: scaleX(0);
}
.burger-btn.is-open .burger-line:nth-child(3) {
  transform: translateY(-7px) rotate(-45deg);
}

/* ==================== MOBILE SIDEBAR ==================== */
.mobile-sidebar {
  position: fixed;
  top: 0;
  left: -320px;
  width: 280px;
  height: 100vh;
  background-color: #ffffff;
  z-index: 10002;
  transition: left 0.35s ease-in-out;
  display: flex;
  flex-direction: column;
  box-shadow: 4px 0 20px rgba(0, 0, 0, 0.12);
  overflow-y: auto;
}
.mobile-sidebar.active {
  left: 0;
}

/* Sidebar Header */
.mobile-sidebar-header {
  display: flex;
  align-items: center;
  padding: 18px 20px 14px 20px;
}
/* Logo sidebar = sama besar dengan logo header */
.mobile-sidebar-logo img {
  height: 40px;   /* sesuaikan dengan tinggi logo di header */
  width: auto;
  max-width: 160px;
}

/* Divider */
.mobile-sidebar-divider {
  margin: 0;
  border: none;
  border-top: 1px solid #e2e8f0;
}

/* Nav links */
.mobile-sidebar-nav {
  display: flex;
  flex-direction: column;
  padding: 8px 0;
  flex: 1;
}
.mobile-sidebar-link {
  display: flex;
  align-items: center;
  width: 100%;
  padding: 16px 24px;
  color: #334155;
  font-size: 15px;
  font-weight: 500;
  font-family: 'Poppins', sans-serif;
  text-decoration: none;
  background: none;
  border: none;
  cursor: pointer;
  text-align: left;
  transition: color 0.2s, background 0.2s;
}
.mobile-sidebar-link:hover {
  color: #004AAD;
  background-color: #f0f7ff;
}
.mobile-sidebar-cta {
  color: #004AAD !important;
  font-weight: 700;
  border: 1.5px solid #004AAD !important;
  border-radius: 20px;
  margin: 8px 24px;
  padding: 10px 24px;
  justify-content: center;
  width: calc(100% - 48px);
}

/* ==================== OVERLAY ==================== */
.mobile-nav-overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.4);
  z-index: 10001;
}
.mobile-nav-overlay.active {
  display: block;
}
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const header    = document.getElementById("main-header");
    const burgerBtn = document.getElementById("mobile-nav-toggle");
    const sidebar   = document.getElementById("mobile-sidebar");
    const overlay   = document.getElementById("nav-overlay");

    function openSidebar() {
      sidebar.classList.add("active");
      overlay.classList.add("active");
      burgerBtn.classList.add("is-open");
      document.body.style.overflow = "hidden";
    }

    function closeSidebar() {
      sidebar.classList.remove("active");
      overlay.classList.remove("active");
      burgerBtn.classList.remove("is-open");
      document.body.style.overflow = "";
    }

    function toggleSidebar() {
      if (sidebar.classList.contains("active")) {
        closeSidebar();
      } else {
        openSidebar();
      }
    }

    // Scroll: tambahkan shadow ke header
    window.addEventListener("scroll", function () {
      header.classList.toggle("scrolled", window.scrollY > 10);
    });

    // Burger toggle (buka & tutup)
    if (burgerBtn) burgerBtn.addEventListener("click", toggleSidebar);

    // Klik overlay → tutup
    if (overlay) overlay.addEventListener("click", closeSidebar);

    // Klik link nav → tutup sidebar
    document.querySelectorAll("[data-close-sidebar]").forEach(function (el) {
      el.addEventListener("click", closeSidebar);
    });
  });
</script>
