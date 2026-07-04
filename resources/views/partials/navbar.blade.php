<!-- Header -->
<header class="header fixed-top business-mode" id="main-header">
  <div class="container d-flex justify-content-between align-items-center py-2">

    <!-- Logo -->
    <a href="/" class="logo d-flex align-items-center">
      <img src="assets/img/Header.png" alt="Klikrekrut Logo" class="logo-full" />
    </a>

    <!-- Mobile Toggle -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>

    <!-- Nav Menu -->
    <nav id="navmenu" class="navmenu d-flex align-items-center">
      <ul class="d-flex align-items-center mb-0 flex-column flex-xl-row">
        <!-- Business Links -->
        <div id="nav-business-links" class="d-flex flex-column flex-xl-row align-items-center" style="gap: 15px;">
          <li><a href="#services">Profil Layanan</a></li>
          <li><a href="#trusted-clients">Klien Kami</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="https://api.whatsapp.com/send?phone=6281234567890" target="_blank" rel="noopener noreferrer" class="btn-konsultasi">Konsultasi Sekarang</a></li>
        </div>
      </ul>
    </nav>
  </div>
</header>

<!-- Overlay -->
<div class="mobile-nav-overlay" id="nav-overlay"></div>

<style>
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
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("main-header");
    const toggleBtn = document.querySelector(".mobile-nav-toggle");
    const navmenu = document.getElementById("navmenu");
    const overlay = document.getElementById("nav-overlay");

    // Scroll behavior for header
    window.addEventListener("scroll", function () {
      if (window.scrollY > 10) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });

    // Mobile Nav Toggle
    if (toggleBtn && navmenu && overlay) {
      toggleBtn.addEventListener('click', function () {
        navmenu.classList.toggle('active');
        overlay.classList.toggle('active');
        toggleBtn.classList.toggle('bi-x');
        toggleBtn.classList.toggle('bi-list');
        if (navmenu.classList.contains('active')) {
            toggleBtn.style.color = "#000";
        } else {
            toggleBtn.style.color = "#004AAD";
        }
      });

      overlay.addEventListener('click', function () {
        navmenu.classList.remove('active');
        overlay.classList.remove('active');
        toggleBtn.classList.add('bi-list');
        toggleBtn.classList.remove('bi-x');
        toggleBtn.style.color = "#004AAD";
      });
    }

    // Dropdown toggle logic
    const dropdowns = document.querySelectorAll('.dropdown-toggle-btn');
    dropdowns.forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        const parent = this.closest('.dropdown');
        parent.classList.toggle('open');
      });
    });
  });
</script>
