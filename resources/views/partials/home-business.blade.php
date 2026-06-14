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



<main class="main"> <!-- Awal dari konten utama halaman -->

<!-- Tambahkan di layout atau halaman -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<link href="assets/css/business.css" rel="stylesheet">

<!-- ==================== HERO SECTION ==================== -->
<section id="hero" class="hero section position-relative">
  <div class="container">
    <div class="row align-items-center justify-content-center">

      <!-- Hero Left -->
      <div class="col-lg-10 text-white text-center" data-aos="fade-up">
        <h1 class="mb-4 hero-title" style="font-weight:700; color:white; font-size: 3.5rem;">
          Memperkenalkan<br>Recruiter as a Service<br>(RaaS)
        </h1>
        <p class="mb-5 text-white mx-auto" style="font-size: 1.1rem; max-width: 800px;">
          Layanan rekrutmen inovatif dari KLIK Rekrut, membantu Pemilik Bisnis UMKM dan HR Palugada mendapatkan talenta berkualitas dengan hemat dibantu rekruter berpengalaman.
        </p>

        <!-- Trusted By Section is now inside Hero -->
        <div class="trusted-logos-wrapper mt-5 pt-4">
          <p class="trusted-label mb-4 text-white" style="font-size: 1.2rem; font-weight: bold; text-align: center; color: white !important;">
            Telah dipercaya oleh perusahaan dari berbagai Industri
          </p>

          <div class="trusted-logos-track" style="gap: 50px;">
            <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" style="max-height: 100px;" />
            <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" style="max-height: 100px;" />
            <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" style="max-height: 100px;" />
            <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" style="max-height: 100px;" />
            <!-- Duplikat untuk loop -->
            <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" style="max-height: 100px;" />
            <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" style="max-height: 100px;" />
            <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" style="max-height: 100px;" />
            <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" style="max-height: 100px;" />
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
  .hero {
    background: linear-gradient(to right, #5DE0E6, #004AAD), url('assets/img/ornament1.png') no-repeat bottom center;
    background-size: cover;
    padding: 150px 0 50px 0;
    position: relative;
    color: white;
  }
  .hero::before {
    content: "";
    position: absolute;
    bottom: 0; left: 0; width: 100%; height: 100%;
    background: url('assets/img/ornament1.png') no-repeat bottom center;
    background-size: cover; opacity: 0.3; z-index: 0; pointer-events: none;
  }
  .hero .container { position: relative; z-index: 1; }
  .hero-title { font-size: 3rem; text-align: center; }
  
  .trusted-logos-wrapper { overflow: hidden; position: relative; width: 100%; }
  .trusted-logos-track { display: flex; align-items: center; gap: 40px; animation: scrollLeft 20s linear infinite; width: max-content; }
  .trusted-logo { max-height: 200px; object-fit: contain; flex: 0 0 auto; filter: none; opacity: 1; }
  .trusted-logos-track { display: flex; align-items: center; gap: 40px; animation: scrollLeft 20s linear infinite; width: max-content; }
  .trusted-logo { max-height: 200px; object-fit: contain; flex: 0 0 auto; filter: none; opacity: 1; }
  @keyframes scrollLeft { 0% { transform: translateX(0%); } 100% { transform: translateX(-50%); } }
  
  @media (max-width: 768px) { 
    .hero-title { font-size: 2rem !important; text-align: center; } 
    .hero p, .hero .col-lg-6 { text-align: center; } 
    .trusted-logo { max-height: 150px; }
  }
</style>

<!-- ==================== COMPARISON SECTION ==================== -->
<section id="why-raas" class="why-raas-section">
  <div class="container text-center">
    <p class="mb-2" style="color: #000; font-size: 1.1rem; font-weight: 500;">Kenal Lebih Dekat dengan Layanan RaaS</p>
    <h2 class="why-raas-title" data-aos="fade-up">Kenapa Pemilik Bisnis UMKM dan HR Palugada<br>Cocok Menggunakan Layanan Kami?</h2>

    <!-- Row 1 -->
    <div class="compare-row" data-aos="fade-up" data-aos-delay="100">
      <h3 class="compare-title">Jika Anda Merekrut Sendirian</h3>
      <div class="compare-cards">
        <div class="compare-card pro">
          <div class="compare-icon"><i class="bi bi-check-lg"></i></div>
          <h5 class="fw-bold mb-2">Keuntungan</h5>
          <p class="mb-0" style="font-size: 0.9rem;">Biaya Sangat Murah Nyaris Rp 0 karena semua proses dikerjakan sendiri dan resource milik Anda</p>
        </div>
        <div class="compare-card con">
          <div class="compare-icon"><i class="bi bi-x-lg"></i></div>
          <h5 class="fw-bold mb-2">Tantangan</h5>
          <p class="mb-0" style="font-size: 0.75rem; text-transform: uppercase;">SEMUA PROSES REKRUTMEN DARI AWAL HINGGA AKHIR DIKERJAKAN SENDIRI. SELAIN ITU, ANDA PERLU MEMILIKI ILMU REKRUTMEN YANG MENDALAM UNTUK MENCEGAH RESIKO POOR HIRE DAN MENGHEMAT WAKTU ANDA YANG TERBUANG.</p>
        </div>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="compare-row" data-aos="fade-up" data-aos-delay="200">
      <h3 class="compare-title">Dibantu Job Portal</h3>
      <div class="compare-cards">
        <div class="compare-card pro">
          <div class="compare-icon"><i class="bi bi-check-lg"></i></div>
          <h5 class="fw-bold mb-2">Keuntungan</h5>
          <p class="mb-0" style="font-size: 0.9rem;">Bisa mendapatkan banyak pelamar dalam waktu singkat dan memiliki tools untuk mempercepat proses rekrutmen.</p>
        </div>
        <div class="compare-card con">
          <div class="compare-icon"><i class="bi bi-x-lg"></i></div>
          <h5 class="fw-bold mb-2">Tantangan</h5>
          <p class="mb-0" style="font-size: 0.75rem; text-transform: uppercase;">PERLU MEREKRUT TENAGA REKRUTER TAMBAHAN UNTUK MENGOPERASIKAN JOB PORTAL, BAYAR LANGGANAN BULANAN JOB PORTAL. DAN TENTU BANYAKNYA LAMARAN YANG MASUK DALAM WAKTU SINGKAT AKAN MEMBUAT TIME TO HIRE MENJADI LEBIH LAMBAT. DAN LANGGANAN DAN TOOLS TAMBAHAN MEMBUAT BIAYA REKRUTMENT TIDAK TERKONTROL, DAN INI BERBAHAYA BAGI PERUSAHAAN DENGAN BUDGET REKRUTMEN YANG RENDAH.</p>
        </div>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="compare-row" data-aos="fade-up" data-aos-delay="300">
      <h3 class="compare-title">Dibantu Headhunter</h3>
      <div class="compare-cards">
        <div class="compare-card pro">
          <div class="compare-icon"><i class="bi bi-check-lg"></i></div>
          <h5 class="fw-bold mb-2">Keuntungan</h5>
          <p class="mb-0" style="font-size: 0.9rem;">Semua Proses Dikerjaan oleh Profesional Berpengalaman, Hasil Cepat, Ada garansi jika kandidat mengundurkan diri</p>
        </div>
        <div class="compare-card con">
          <div class="compare-icon"><i class="bi bi-x-lg"></i></div>
          <h5 class="fw-bold mb-2">Tantangan</h5>
          <p class="mb-0" style="font-size: 0.75rem; text-transform: uppercase;">TIDAK SEMUA PERUSAHAAN MEMILIKI BUDGET UNTUK MEMBAYAR SUCCES FEE JASA HEADHUNTER YANG DITAKSIR HINGGA 20% DARI GAJI TAHUNAN KANDIDAT</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ==================== SOLUTION SECTION ==================== -->
<section class="solution-section" id="what-is-raas">
  <div class="container text-center">
    <h2 class="fw-bold mb-5" data-aos="fade-up" style="color: black;">Bagaimana Jika Ada Solusi Rekrutmen yang<br>Bisa Menjawab Semua Tantangan Diatas?</h2>
    
    <div class="solution-box" data-aos="fade-up" data-aos-delay="100">
      <div class="solution-img-wrapper d-none d-lg-block">
        <img src="assets/img/happy-person.jpg" alt="Happy Person" class="solution-img" onerror="this.src='assets/img/adam.jpg'">
      </div>
      <p class="fw-bold mb-4" style="font-size: 1.1rem; padding-left: 80px;">Perkenalkan layanan Recruiter as a Service (RaaS) yang menghemat biaya, waktu dan effort Anda dalam merekrut</p>
      <ul class="solution-list">
        <li>Anda tidak perlu memiliki ilmu rekrutmen yang mendalam karena aktivitas rekrutmen Anda ditangani oleh praktisi mitra rekruter kami yang tentu lebih mengerti dan berpengalaman dalam merekrut kandidat</li>
        <li>Anda tidak perlu menghabiskan banyak waktu memproses semua aktivitas rekrutmen karena semua proses dikerjakan secara proporsional oleh mitra rekruter kami yang berpengalaman di berbagai industri</li>
        <li>Anda tidak perlu mengeluarkan uang untuk merekrut tim rekruter internal tambahan karena dengan layanan RaaS ini Anda sudah memiliki rekruter profesional dari mitra-mitra kami</li>
        <li>Anda tidak perlu membayar biaya langganan job portal bulanan atau fee khusus untuk setiap kandidat yang sukses bekerja. Anda cukup berlangganan bulanan/tahunan untuk mendapatkan 1 kandidat yang cocok di layanan RaaS</li>
        <li>Anda tidak perlu berlangganan tool tambahan untuk mempercepat proses panggilan lowongan, karena waktu yang kami butuhkan untuk merekrut jauh lebih cepat</li>
        <li>Anda juga tidak perlu khawatir mengalami bad hire karena kami menyediakan garansi free sorting untuk setiap kandidat yang berhasil Anda rekrut dari kami</li>
      </ul>
    </div>
  </div>
</section>

<!-- ==================== JARINGAN MITRA SECTION ==================== -->
<section class="mitra-section">
  <div class="container">
    <h2 class="fw-bold mb-3" data-aos="fade-up" style="color: black;">Jaringan Mitra Rekruter Kami</h2>
    <p class="text-muted mb-4" data-aos="fade-up">Kami didukung para rekruter dari berbagai perusahaan multi industri yang senantiasa siap melayani dan mendampingi bisnis Anda</p>
    
    <div class="mitra-carousel" data-aos="fade-up" data-aos-delay="100">
      <button class="mitra-nav prev" id="mitra-prev"><i class="bi bi-chevron-left"></i></button>
      <div class="mitra-track" id="mitra-track">
        <!-- Cards -->
        <div class="mitra-card">
          <img src="assets/img/gita.jpg" alt="Gilang" class="mitra-img" onerror="this.src='assets/img/adam.jpg'">
          <div class="mitra-info">
            <h5 class="mitra-name text-white">Gilang R.</h5>
            <span class="mitra-role">Sr. Human Resource Executive</span>
          </div>
        </div>
        <div class="mitra-card">
          <img src="assets/img/gita.jpg" alt="Alvin Trianto" class="mitra-img" onerror="this.src='assets/img/adam.jpg'">
          <div class="mitra-info">
            <h5 class="mitra-name text-white">Alvin Trianto</h5>
            <span class="mitra-role">HR Business Partner</span>
          </div>
        </div>
        <div class="mitra-card">
          <img src="assets/img/gita.jpg" alt="May Wulansari" class="mitra-img" onerror="this.src='assets/img/adam.jpg'">
          <div class="mitra-info">
            <h5 class="mitra-name text-white">May Wulansari</h5>
            <span class="mitra-role">Talent Acquisition Partner</span>
          </div>
        </div>
        <div class="mitra-card">
          <img src="assets/img/gita.jpg" alt="Pramono H." class="mitra-img" onerror="this.src='assets/img/adam.jpg'">
          <div class="mitra-info">
            <h5 class="mitra-name text-white">Pramono H.</h5>
            <span class="mitra-role">Human Resource Manager</span>
          </div>
        </div>
        <div class="mitra-card">
          <img src="assets/img/gita.jpg" alt="Rahma Y." class="mitra-img" onerror="this.src='assets/img/adam.jpg'">
          <div class="mitra-info">
            <h5 class="mitra-name text-white">Rahma Y.</h5>
            <span class="mitra-role">Sr. Human Resource Executive</span>
          </div>
        </div>
      </div>
      <button class="mitra-nav next" id="mitra-next"><i class="bi bi-chevron-right"></i></button>
    </div>
  </div>
</section>

<!-- ==================== RAAS SERVICES SECTION ==================== -->
<section class="raas-services-section bg-light" id="services">
  <div class="container">
    <h2 class="fw-bold mb-4" data-aos="fade-up">Apa Saja Layanan RaaS<br>yang bisa Anda Pilih?</h2>
    
    <div class="raas-carousel-container position-relative" data-aos="fade-up" data-aos-delay="100">
      <button class="raas-nav-btn prev" id="raas-prev"><i class="bi bi-chevron-left"></i></button>
      <div class="raas-carousel-wrapper">
      
      <div class="raas-card side">
        <div class="raas-card-header">CV Screening Assistant</div>
        <div class="raas-card-body">
          <ul class="list-unstyled mb-0" style="font-size: 0.8rem;">
            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Screening CV sesuai kebutuhan</li>
            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Shortlist kandidat terpilih</li>
            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Pembuatan laporan screening</li>
          </ul>
        </div>
      </div>

      <div class="raas-card center">
        <span class="badge-popular">Popular</span>
        <div class="raas-card-header text-center" style="font-size: 1.2rem;">End-to-end Process</div>
        <div class="raas-card-body">
          <p class="text-center text-muted text-sm mb-3">Layanan rekrutmen setara headhunting profesional dengan biaya yang jauh lebih hemat.</p>
          <ul class="list-unstyled mb-0" style="font-size: 0.9rem;">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Dukungan rekruter berpengalaman sesuai industri bisnis Anda</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Sourcing dari pencarian sampai penyortiran kandidat</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Penjadwalan dan pendampingan final interview</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Garansi sampai mendapatkan kandidat yang cocok untuk di hire</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Garansi kandidat selama 1 bulan onboarding</li>
          </ul>
        </div>
      </div>

      <div class="raas-card side">
        <div class="raas-card-header">Sourcing Kandidat</div>
        <div class="raas-card-body">
          <ul class="list-unstyled mb-0" style="font-size: 0.8rem;">
            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Pencarian kandidat aktif dan pasif</li>
            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Pendekatan awal kandidat</li>
            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Database kandidat potensial</li>
          </ul>
        </div>
      </div>

    </div>
      <button class="raas-nav-btn next" id="raas-next"><i class="bi bi-chevron-right"></i></button>
    </div>
  </div>
</section>

<!-- ==================== WHY CHOOSE US ==================== -->
<section class="why-choose-section">
  <div class="container">
    <h3 class="fw-bold mb-5" style="color: #004AAD;">Kenapa memilih layanan rekrutmen KLIK Rekrut?</h3>
    <div class="row text-center">
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
        <i class="bi bi-people choose-icon"></i>
        <h4 class="choose-title">Didukung rekruter dari berbagai industri</h4>
        <p class="choose-desc">Ratusan mitra rekruter siap membantu Anda di berbagai sektor yang relevan, memastikan kandidat yang ditawarkan memiliki kualifikasi yang Anda cari.</p>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-clock-history choose-icon"></i>
        <h4 class="choose-title">Cocok untuk Business Owner dan HR Palugada</h4>
        <p class="choose-desc">Fokus pada operasional bisnis Anda, kami yang urus rekrutmen. Dapatkan kandidat terbaik tanpa perlu pusing dengan proses seleksi yang panjang.</p>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-cash-coin choose-icon"></i>
        <h4 class="choose-title">Fleksibel untuk Semua Skala Bisnis</h4>
        <p class="choose-desc">Mulai dari Startup, UMKM, hingga Corporate besar, kami memiliki solusi dengan biaya terjangkau yang bisa disesuaikan dengan kebutuhan Anda.</p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FORM CTA SECTION ==================== -->
<section class="form-cta-section" id="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
        <h2 class="fw-bold mb-3 text-white">Siap merekrut<br>kandidat terbaik untuk<br>bergabung jadi tim<br>Anda?</h2>
        <p class="mb-4 text-white">Jangan biarkan momentum bisnis Anda hilang <br>karena tim belum siap!</p>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <div class="form-card shadow">
          <form id="raas-contact-form" onsubmit="sendToWhatsApp(event)">
            <div class="mb-3">
              <label for="name" class="form-label text-muted small">Nama Anda</label>
              <input type="text" class="form-control" id="name" required placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
              <label for="company" class="form-label text-muted small">Nama Perusahaan</label>
              <input type="text" class="form-control" id="company" required placeholder="Masukkan nama perusahaan">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label text-muted small">Alamat Email</label>
              <input type="email" class="form-control" id="email" required placeholder="email@perusahaan.com">
            </div>
            <div class="mb-4">
              <label for="service" class="form-label text-muted small">Pilih Layanan</label>
              <select class="form-control" id="service" required>
                <option value="" disabled selected>Pilih Layanan...</option>
                <option value="End-to-end Process">End-to-end Process</option>
                <option value="CV Screening Assistant">CV Screening Assistant</option>
                <option value="Sourcing Kandidat">Sourcing Kandidat</option>
              </select>
            </div>
            <button type="submit" class="btn w-100 fw-bold" style="background: black; color: white; border-radius: 8px; padding: 12px;">Kirim Pesan via WhatsApp</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function sendToWhatsApp(e) {
    e.preventDefault();
    const name = document.getElementById('name').value;
    const company = document.getElementById('company').value;
    const email = document.getElementById('email').value;
    const service = document.getElementById('service').value;
    
    const text = `Halo tim KLIK Rekrut! Saya tertarik dengan layanan RaaS.%0A%0A*Nama:* ${name}%0A*Perusahaan:* ${company}%0A*Email:* ${email}%0A*Layanan:* ${service}%0A%0AMohon info lebih lanjut, terima kasih.`;
    const waNumber = "6281234567890"; // Ganti dengan nomor asli
    
    window.open(`https://wa.me/${waNumber}?text=${text}`, '_blank');
  }

  // Simple script for the Mitra Carousel (slide by 1 item)
  document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('mitra-track');
    const nextBtn = document.getElementById('mitra-next');
    const prevBtn = document.getElementById('mitra-prev');
    if(track && nextBtn && prevBtn) {
      let position = 0;
      
      nextBtn.addEventListener('click', () => {
        const cardWidth = track.children[0].offsetWidth + 20; // recalculate on click
        position -= cardWidth;
        // Limit
        const maxScroll = -(track.scrollWidth - track.parentElement.offsetWidth);
        if(position < maxScroll) position = maxScroll;
        track.style.transform = `translateX(${position}px)`;
      });
      
      prevBtn.addEventListener('click', () => {
        const cardWidth = track.children[0].offsetWidth + 20; // recalculate on click
        position += cardWidth;
        if(position > 0) position = 0;
        track.style.transform = `translateX(${position}px)`;
      });
    }
  });

  // RaaS Carousel Logic (Infinite Loop)
  document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.raas-carousel-wrapper');
    const prevBtn = document.getElementById('raas-prev');
    const nextBtn = document.getElementById('raas-next');
    if (!wrapper) return;

    function moveCarousel(direction) {
      const cardsArray = Array.from(wrapper.querySelectorAll('.raas-card'));
      const currentCenter = wrapper.querySelector('.raas-card.center');
      if (!currentCenter) return;

      if (direction === 'next') {
        // Clicked right. Kanan -> Tengah, Tengah -> Kiri, Kiri -> Belakang (Kanan)
        const rightCard = cardsArray[2];
        currentCenter.classList.remove('center');
        currentCenter.classList.add('side');
        rightCard.classList.remove('side');
        rightCard.classList.add('center');
        wrapper.appendChild(cardsArray[0]);
      } else if (direction === 'prev') {
        // Clicked left. Kiri -> Tengah, Tengah -> Kanan, Kanan -> Belakang (Kiri)
        const leftCard = cardsArray[0];
        currentCenter.classList.remove('center');
        currentCenter.classList.add('side');
        leftCard.classList.remove('side');
        leftCard.classList.add('center');
        wrapper.insertBefore(cardsArray[2], cardsArray[0]);
      }
    }

    if (nextBtn) nextBtn.addEventListener('click', () => moveCarousel('next'));
    if (prevBtn) prevBtn.addEventListener('click', () => moveCarousel('prev'));

    // Attach listener to wrapper, handle clicks on cards
    wrapper.addEventListener('click', function(e) {
      const card = e.target.closest('.raas-card');
      if (!card || !card.classList.contains('side')) return;
      const cardsArray = Array.from(wrapper.querySelectorAll('.raas-card'));
      const clickedIdx = cardsArray.indexOf(card);
      if (clickedIdx === 0) moveCarousel('prev');
      else if (clickedIdx === 2) moveCarousel('next');
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