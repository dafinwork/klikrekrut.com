<!-- Header -->
<header class="header fixed-top" id="main-header">
  <div class="container d-flex justify-content-between align-items-center py-2">

    <!-- Logo -->
    <a href="/" class="logo d-flex align-items-center">
      <img src="assets/img/Header.png" alt="Klikrekrut Logo" class="logo-full" />
    </a>

    <!-- Mobile Toggle -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- Nav Menu -->
    <nav id="navmenu" class="navmenu d-flex align-items-center">
      <ul class="d-flex align-items-center mb-0">
        <!-- Talent Links -->
        <div id="nav-talent-links" class="d-flex flex-column flex-xl-row align-items-center">
          <li><a href="/">Mentoring</a></li>
          <li><a href="/our-class">Our Class</a></li>
          <li><a href="/elearning">E-learning</a></li>
        </div>
        
        <!-- Business Links -->
        <div id="nav-business-links" class="d-flex flex-column flex-xl-row align-items-center" style="display: none !important;">
          <li><a href="#what-is-raas">What is RaaS</a></li>
          <li><a href="#why-raas">Why RaaS?</a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle-btn"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-menu-list">
              <li><a href="#services">Recruiter as a Service</a></li>
              <li><a href="#">HR System Development</a></li>
              <li><a href="#">In House Training</a></li>
              <li><a href="#">Tentang Kami</a></li>
            </ul>
          </li>
        </div>

        <!-- Toggle Switch -->
        <li class="ms-xl-auto ms-0 view-toggle-wrapper mt-3 mt-xl-0">
          <div class="view-toggle-container d-flex align-items-center">
            <input type="checkbox" id="main-view-toggle" class="d-none">
            <span class="toggle-label active" id="label-talent">Talent</span>
            <span class="text-white mx-2 toggle-separator" style="opacity: 0.5;">/</span>
            <span class="toggle-label" id="label-business">Business</span>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</header>

<!-- Overlay -->
<div class="mobile-nav-overlay" id="nav-overlay"></div>

<style>
/* ==================== TOGGLE SWITCH ==================== */
.view-toggle-container {
  background: rgba(255, 255, 255, 0.1);
  padding: 5px 15px;
  border-radius: 50px;
  border: 1px solid rgba(255, 255, 255, 0.2);
}
.header.scrolled .view-toggle-container {
  background: rgba(0, 0, 0, 0.05);
  border-color: rgba(0, 0, 0, 0.1);
}
.toggle-label {
  font-size: 14px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.7);
  transition: all 0.3s ease;
  cursor: pointer;
}
.header.scrolled .toggle-label {
  color: rgba(0, 0, 0, 0.5);
}
.toggle-label.active {
  color: #fff;
}
.header.scrolled .toggle-label.active {
  color: #004AAD;
}

.theme-switch {
  display: none;
}
.toggle-separator {
  font-size: 14px;
}
.header.scrolled .toggle-separator {
  color: rgba(0, 0, 0, 0.5) !important;
}
@media (max-width: 1199px) {
  .view-toggle-wrapper {
    margin-left: 0 !important;
    margin-top: 20px;
  }
}
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("main-header");
    const toggleBtn = document.querySelector(".mobile-nav-toggle");
    const navmenu = document.getElementById("navmenu");
    const overlay = document.getElementById("nav-overlay");
    const viewToggle = document.getElementById("main-view-toggle");
    const labelTalent = document.getElementById("label-talent");
    const labelBusiness = document.getElementById("label-business");
    const viewTalent = document.getElementById("view-talent");
    const viewBusiness = document.getElementById("view-business");
    const navTalentLinks = document.getElementById("nav-talent-links");
    const navBusinessLinks = document.getElementById("nav-business-links");

    // Toggle Logic
    if (viewToggle) {
      viewToggle.addEventListener('change', function() {
        if (this.checked) {
          // Business Mode
          labelBusiness.classList.add('active');
          labelTalent.classList.remove('active');
          if (viewTalent) viewTalent.style.display = 'none';
          if (navTalentLinks) navTalentLinks.style.setProperty('display', 'none', 'important');
          if (navBusinessLinks) navBusinessLinks.style.setProperty('display', 'flex', 'important');
          if (viewBusiness) {
            viewBusiness.style.display = 'block';
            // Trigger animation or reflow
            viewBusiness.style.opacity = 0;
            setTimeout(() => {
              viewBusiness.style.transition = 'opacity 0.4s ease';
              viewBusiness.style.opacity = 1;
            }, 10);
          }
        } else {
          // Talent Mode
          labelTalent.classList.add('active');
          labelBusiness.classList.remove('active');
          if (viewBusiness) viewBusiness.style.display = 'none';
          if (navBusinessLinks) navBusinessLinks.style.setProperty('display', 'none', 'important');
          if (navTalentLinks) navTalentLinks.style.setProperty('display', 'flex', 'important');
          if (viewTalent) {
            viewTalent.style.display = 'block';
            viewTalent.style.opacity = 0;
            setTimeout(() => {
              viewTalent.style.transition = 'opacity 0.4s ease';
              viewTalent.style.opacity = 1;
            }, 10);
          }
        }
      });
      
      // Allow clicking labels to toggle
      labelTalent.addEventListener('click', () => {
        if (viewToggle.checked) { viewToggle.checked = false; viewToggle.dispatchEvent(new Event('change')); }
      });
      labelBusiness.addEventListener('click', () => {
        if (!viewToggle.checked) { viewToggle.checked = true; viewToggle.dispatchEvent(new Event('change')); }
      });
    }

    // Scroll behavior for header
    window.addEventListener("scroll", function () {
      if (window.scrollY > 10) {
        header.classList.add("scrolled");
        if (!navmenu.classList.contains("active")) {
          toggleBtn.style.color = "#004AAD";
        }
      } else {
        header.classList.remove("scrolled");
        if (!navmenu.classList.contains("active")) {
          toggleBtn.style.color = "#fff";
        }
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
            toggleBtn.style.color = window.scrollY > 10 ? "#004AAD" : "#fff";
        }
      });

      overlay.addEventListener('click', function () {
        navmenu.classList.remove('active');
        overlay.classList.remove('active');
        toggleBtn.classList.add('bi-list');
        toggleBtn.classList.remove('bi-x');
        toggleBtn.style.color = window.scrollY > 10 ? "#004AAD" : "#fff";
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
