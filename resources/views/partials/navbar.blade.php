<!-- Header -->
<header class="header fixed-top business-mode" id="main-header">
  <div class="container d-flex justify-content-between align-items-center py-2">

    <!-- Logo -->
    <a href="/" class="logo d-flex align-items-center">
      <img src="assets/img/Header.png" alt="Klikrekrut Logo" class="logo-full" loading="eager" />
    </a>

    <!-- Desktop Nav Menu -->
    <nav id="navmenu" class="navmenu d-none d-lg-flex align-items-center">
      <ul class="d-flex align-items-center mb-0 flex-row" style="gap: 15px; list-style: none; padding: 0; margin: 0;">
        <li><a href="#services">{{ __('Layanan') }}</a></li>
        <li><a href="#trusted-clients">{{ __('Klien Kami') }}</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li class="lang-toggle-desktop">
          <a href="#" class="lang-toggle-btn d-flex align-items-center" onclick="return false;">
            <i class="bi bi-globe"></i>
            <span class="text-uppercase">{{ app()->getLocale() }}</span>
            <i class="bi bi-chevron-down lang-chevron"></i>
          </a>
          <div class="lang-dropdown-menu">
            <a class="lang-dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('lang.switch', 'en') }}">English</a>
            <a class="lang-dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}" href="{{ route('lang.switch', 'id') }}">Bahasa</a>
          </div>
        </li>
        <li><a href="https://forms.gle/eVidvrkgo2BBQCqKA" target="_blank" rel="noopener noreferrer" class="btn-konsultasi">{{ __('Daftar jadi Mitra') }}</a></li>
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
      <img src="assets/img/Footer.png" alt="Klik Rekrut" loading="lazy">
    </a>
  </div>

  <hr class="mobile-sidebar-divider">

  <!-- Sidebar Nav Links -->
  <nav class="mobile-sidebar-nav">
    <a href="#services" class="mobile-sidebar-link" data-close-sidebar>{{ __('Layanan') }}</a>
    <hr class="mobile-sidebar-divider">
    <a href="#trusted-clients" class="mobile-sidebar-link" data-close-sidebar>{{ __('Klien Kami') }}</a>
    <hr class="mobile-sidebar-divider">
    <a href="#faq" class="mobile-sidebar-link" data-close-sidebar>FAQ</a>
    <hr class="mobile-sidebar-divider">
    <a href="https://forms.gle/eVidvrkgo2BBQCqKA" target="_blank" rel="noopener noreferrer" class="mobile-sidebar-link mobile-sidebar-cta" data-close-sidebar>{{ __('Daftar jadi Mitra') }}</a>
    <hr class="mobile-sidebar-divider">
    <div class="mobile-lang-toggle" id="mobile-lang-toggle">
      <a href="#" class="mobile-lang-btn d-flex align-items-center justify-content-center" id="mobile-lang-btn" onclick="return false;">
        <i class="bi bi-globe"></i>
        <span class="text-uppercase">{{ app()->getLocale() }}</span>
        <i class="bi bi-chevron-down mobile-lang-chevron"></i>
      </a>
      <div class="mobile-lang-dropdown" id="mobile-lang-dropdown">
        <a class="mobile-lang-dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('lang.switch', 'en') }}">English</a>
        <a class="mobile-lang-dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}" href="{{ route('lang.switch', 'id') }}">Bahasa</a>
      </div>
    </div>
  </nav>
</div>

<!-- Overlay (klik untuk tutup sidebar) -->
<div class="mobile-nav-overlay" id="nav-overlay"></div>

<style>
/* ==================== DESKTOP NAV ==================== */
.btn-konsultasi {
  border: 1px solid #44658c;
  border-radius: 20px;
  padding: 5px 20px !important;
  color: #44658c !important;
  font-weight: bold !important;
  transition: all 0.3s;
}
.btn-konsultasi:hover {
  background-color: #44658c;
  color: #fff !important;
}

.navmenu ul li a:not(.btn-konsultasi) {
  color: #44658c !important;
  font-weight: 500 !important;
  font-family: 'Poppins', sans-serif;
}
.navmenu ul li a:not(.btn-konsultasi):hover {
  color: #44658c !important;
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
  background-color: #44658c;
  border-radius: 2px;
  transition: all 0.3s ease;
  flex-shrink: 0;
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
  color: #44658c;
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
  color: #44658c;
  background-color: #f0f7ff;
}
.mobile-sidebar-cta {
  color: #44658c !important;
  font-weight: 700;
  border: 1.5px solid #44658c !important;
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
  background: rgba(0, 0, 0, 0.75);
  z-index: 10001;
}
.mobile-nav-overlay.active {
  display: block;
}

/* ==================== LANGUAGE TOGGLE (DESKTOP) ==================== */
.lang-toggle-desktop {
  position: relative;
  margin-right: 5px;
}
.lang-toggle-btn {
  color: #44658c !important;
  font-weight: 500 !important;
  font-size: 14px;
  text-decoration: none;
  gap: 6px;
  cursor: pointer;
  padding: 6px 0;
}
.lang-chevron {
  font-size: 12px;
  -webkit-text-stroke: 0.5px;
  transition: transform 0.2s;
}
.lang-toggle-desktop.open .lang-chevron {
  transform: rotate(180deg);
}
.lang-toggle-desktop .lang-dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  min-width: 140px;
  padding: 8px;
  background: #fff;
  border: 1px solid #f0f0f0;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  z-index: 9999;
  margin-top: 8px;
}
.lang-toggle-desktop.open .lang-dropdown-menu {
  display: block;
}
.lang-dropdown-item {
  display: block;
  padding: 10px 16px;
  font-size: 14px;
  color: #333;
  font-weight: 400;
  text-decoration: none;
  border-radius: 8px;
  transition: background 0.2s;
  margin-bottom: 4px;
}
.lang-dropdown-item:last-child {
  margin-bottom: 0;
}
.lang-dropdown-item:hover {
  background-color: #f8f9fa;
  color: #333;
}
.lang-dropdown-item.active {
  background-color: #f1f3f5;
  color: #333;
}
/* ==================== LANGUAGE TOGGLE (MOBILE) ==================== */
.mobile-lang-toggle {
  padding: 16px 24px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.mobile-lang-btn {
  color: #44658c;
  font-weight: 500;
  font-size: 15px;
  text-decoration: none;
  gap: 6px;
  cursor: pointer;
  width: 100%;
  justify-content: center;
  -webkit-tap-highlight-color: transparent;
}
.mobile-lang-btn:hover,
.mobile-lang-btn:focus,
.mobile-lang-btn:active {
  color: #44658c;
}
.mobile-lang-chevron {
  font-size: 13px;
  -webkit-text-stroke: 0.5px;
  transition: transform 0.2s;
}
.mobile-lang-toggle.open .mobile-lang-chevron {
  transform: rotate(180deg);
}
.mobile-lang-dropdown {
  display: none;
  width: 100%;
  margin-top: 10px;
  flex-direction: column;
}
.mobile-lang-toggle.open .mobile-lang-dropdown {
  display: flex;
}
.mobile-lang-dropdown-item {
  display: block;
  padding: 12px 16px;
  font-size: 14px;
  color: #333;
  text-decoration: none;
  border-radius: 8px;
  text-align: center;
  transition: background 0.2s;
}
.mobile-lang-dropdown-item:hover {
  background-color: #f8f9fa;
  color: #333;
}
.mobile-lang-dropdown-item.active {
  background-color: #f1f3f5;
  color: #333;
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

    // Mobile language toggle
    const mobileLangBtn = document.getElementById("mobile-lang-btn");
    const mobileLangToggle = document.getElementById("mobile-lang-toggle");
    if (mobileLangBtn && mobileLangToggle) {
      mobileLangBtn.addEventListener("click", function (e) {
        e.preventDefault();
        mobileLangToggle.classList.toggle("open");
      });
    }

    // Desktop language toggle (click to open)
    const desktopLangToggle = document.querySelector(".lang-toggle-desktop");
    const desktopLangBtn = desktopLangToggle ? desktopLangToggle.querySelector(".lang-toggle-btn") : null;
    if (desktopLangBtn && desktopLangToggle) {
      desktopLangBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        desktopLangToggle.classList.toggle("open");
      });
      // Klik di luar dropdown → tutup
      document.addEventListener("click", function (e) {
        if (!desktopLangToggle.contains(e.target)) {
          desktopLangToggle.classList.remove("open");
        }
      });
    }
  });
</script>
