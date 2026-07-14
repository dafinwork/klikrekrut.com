  <!-- isi halaman -->
<!-- Business page CSS -->
<link href="{{ asset('assets/css/business.css') }}" rel="stylesheet">

<main class="main">

<!-- ==================== HERO SECTION ==================== -->
<section id="hero" class="hero-business">

  <!-- Hero Decorative Background Ornaments (Desktop Only) -->
  <div class="hero-ornaments d-none d-lg-block" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 0; overflow: hidden;">
    
    <!-- Radial Glow (Center) - diperkecil blur -->
    <div style="position: absolute; top: 20%; left: 25%; width: 50%; height: 60%; background: radial-gradient(circle at center, rgba(0,74,173,.06), transparent 65%); filter: blur(30px);"></div>

    <!-- Organic Blobs - dikurangi dari 1 jadi 1 saja -->
    <svg viewBox="0 0 500 500" style="position: absolute; top: -10%; left: -8%; width: 40%; max-width: 500px; opacity: 0.04; fill: #44658C;">
      <path d="M421,328.5Q386,407,297,434.5Q208,462,130,410.5Q52,359,48.5,263Q45,167,117,105Q189,43,284.5,58.5Q380,74,418,162Q456,250,421,328.5Z" />
    </svg>

    <!-- Dot Grid dikurangi -->
    <svg width="100" height="100" style="position: absolute; bottom: 15%; left: 3%; opacity: 0.04;">
      <defs>
        <pattern id="heroDotGrid2" width="18" height="18" patternUnits="userSpaceOnUse">
          <circle cx="2" cy="2" r="1.2" fill="#B3D2EE" />
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#heroDotGrid2)" />
    </svg>
  </div>

  <div class="container" style="position: relative; z-index: 2;">
    <div class="row align-items-center align-items-lg-start">
      
      <!-- Left Column (48%) -->
      <div class="col-lg-6 hero-content-left text-center text-lg-start pe-lg-4" data-aos="fade-right">
        <div class="badge-raas-new mb-3 mx-auto mx-lg-0 d-inline-flex">
          <span class="dot"></span> BARU: RECRUITER AS A SERVICE
        </div>
        
        <h1 class="hero-business-title">
          <span class="hero-title-line">Penyedia Tenaga</span><br>
          <span class="hero-title-line">Perekrut Profesional</span>
        </h1>
        
        <p class="hero-business-desc mb-4">
          KLIK Rekrut menyediakan jasa rekrutmen RaaS (Recruiter as a Service) untuk mencari karyawan.
        </p>

        <div class="hero-btn-group justify-content-start d-flex flex-column flex-sm-row">
          <a href="#contact" class="btn btn-rekrut-sekarang rounded-pill">REKRUT SEKARANG</a>
          <a href="#services" class="btn btn-jadwalkan-demo rounded-pill">JADWALKAN DEMO</a>
        </div>
      </div>

      <!-- Right Column (52%) -->
      <div class="col-lg-6 hero-content-right mt-2 mt-lg-0 text-center" data-aos="fade-left" data-aos-delay="100" style="padding-top: 5px;">
        <div class="hero-right-composition position-relative">
          <img src="assets/img/gambarhero.png" alt="Recruiter as a Service KLIK Rekrut" class="hero-image-main img-fluid" loading="lazy" onerror="this.src='assets/img/adam.jpg'">
          

        </div>
      </div>
      
    </div>
  </div>

  <!-- Wave putih di bawah hero (bentuk seperti screenshot tapi warna putih) -->
  <div class="hero-wave">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
      <path fill="#ffffff" d="M0,50 C144,100 288,0 432,50 C576,100 720,0 864,50 C1008,100 1152,0 1296,50 C1368,75 1404,25 1440,50 L1440,100 L0,100 Z"/>
    </svg>
  </div>
</section>

<!-- ==================== APA ITU RAAS SECTION ==================== -->
<section id="what-is-raas" class="apa-itu-raas-section">
  <!-- Decorative Background Ornaments (Desktop Only) -->
  <div class="raas-ornaments d-none d-lg-block" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 0; overflow: hidden;">
    <!-- Radial Glow dikurangi -->
    <div style="position: absolute; top: 40%; left: 30%; width: 40%; height: 60%; background: radial-gradient(circle at center, rgba(93,224,230,.05), transparent 60%); filter: blur(40px);"></div>

    <!-- Blob dikurangi jadi 3 saja dari 8 -->
    <svg viewBox="0 0 500 500" style="position: absolute; top: 5%; left: -10%; width: 50%; max-width: 600px; opacity: 0.03; fill: #004AAD;">
      <path d="M421,328.5Q386,407,297,434.5Q208,462,130,410.5Q52,359,48.5,263Q45,167,117,105Q189,43,284.5,58.5Q380,74,418,162Q456,250,421,328.5Z" />
    </svg>
    <svg viewBox="0 0 500 500" style="position: absolute; top: 55%; left: -5%; width: 45%; max-width: 550px; opacity: 0.03; fill: #5DE0E6;">
      <path d="M410.5,334.5Q372,419,271,438.5Q170,458,111.5,372.5Q53,287,112.5,200.5Q172,114,272.5,108.5Q373,103,411,176.5Q449,250,410.5,334.5Z" />
    </svg>

    <!-- Dot Grid dikurangi jadi 2 dari 4 -->
    <svg width="150" height="150" style="position: absolute; top: 2%; left: 2%; opacity: 0.05;">
      <defs>
        <pattern id="raasDotGrid" width="20" height="20" patternUnits="userSpaceOnUse">
          <circle cx="2" cy="2" r="1.5" fill="#5DE0E6" />
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#raasDotGrid)" />
    </svg>
  </div>

  <div class="container pb-5" style="position: relative; z-index: 5; padding-top: 20px;">
    <div class="raas-intro-card shadow-sm bg-white rounded" data-aos="fade-up">
      <div class="row align-items-center p-4 p-md-5">
        <div class="col-md-5 text-start border-end-md">
          <p class="text-uppercase fw-bold mb-2" style="color: #44658c; font-size: 0.8rem; letter-spacing: 1px;">MENGENAL MODEL BARU</p>
          <h2 class="mb-3 mb-md-0" style="color: #44658c; font-size: 1.6rem; font-weight: 800; line-height: 1.3;">Apa itu Recruiter as a Service?</h2>
        </div>
        <div class="col-md-7 text-start ps-md-5">
          <p class="mb-0" style="color: #252525; font-size: 0.9rem; line-height: 1.8;">
            Model layanan rekrutmen berbasis jaringan recruiter on-demand, membuat perusahaan memiliki tim perekrut eksternal profesional untuk membantu beberapa tahapan atau seluruh proses rekrutmen.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Gradasi putih ke bawah sesuai request (diatur margin negatif agar lebih dekat) -->
  <div style="width: 100%; height: 80px; background: linear-gradient(to bottom, transparent, #ffffff); margin-top: -80px; margin-bottom: -1px; position: relative; z-index: 2;"></div>

  <!-- ==================== RAAS SERVICES SECTION (Moved) ==================== -->
  <div class="raas-services-section" id="services" style="padding: 40px 0 60px 0;">
    <div class="container text-center">
      <h2 class="fw-bold mb-3" data-aos="fade-up" style="font-size: 1.7rem; color: var(--heading-color);">Kami siap jadi support system rekrutmen Anda.</h2>
      <p class="mb-5 mx-auto" data-aos="fade-up" data-aos-delay="50" style="max-width: 100%; color: #555; font-size: 0.95rem; line-height: 1.6;">
        Pilih layanan Klik Rekrut yang paling sesuai dengan kebutuhan bisnis Anda hari ini.
      </p>
      
      <div class="row g-4 align-items-stretch justify-content-center" data-aos="fade-up" data-aos-delay="100">
        
        <!-- Card 1 -->
        <div class="col-lg-4 text-start">
          <div class="raas-pricing-card h-100">
            <h4 class="card-title">CV Search</h4>
            <p style="font-size: 0.85rem; line-height: 1.6; color: #44658c;">
              Kirimkan info loker Anda, dapatkan CV kandidat dari kami. Hasil CV telah kami screening, lengkap dengan ranking kecocokan. Bayar sesuai jumlah CV yang Anda terima.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 text-start">
          <div class="raas-pricing-card h-100">
            <h4 class="card-title">Interviewer</h4>
            <p style="font-size: 0.85rem; line-height: 1.6; color: #44658c;">
              Menjadwalkan sesi wawancara dan menjadi pewawancara kandidat Anda. Dapatkan laporan mendalam, lengkap dengan ranking kandidat. Bayar sesuai kandidat yang berhasil kami wawancara.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 text-start">
          <div class="raas-pricing-card h-100 position-relative">
            <h4 class="card-title">End-to-end Process</h4>
            <p style="font-size: 0.85rem; line-height: 1.6; color: #44658c;">
              Serahkan seluruh proses pencarian karyawan kepada kami, Anda tinggal terima beres kandidat terbaik yang siap kerja. Dapatkan garansi penggantian kandidat baru selama 30 hari di masa onboarding. Bayar hanya saat kandidat telah resmi bergabung dengan Anda.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ==================== KEUNTUNGAN RAAS GRID ==================== -->
  <div class="raas-benefits-grid" data-aos="fade-up">
    <div class="container">
      <h2 class="raas-benefits-title text-center fw-bold mb-5" data-aos="fade-up" style="color: var(--heading-color); font-size: 1.7rem;">Apa Keuntungan Merekrut dengan RaaS?</h2>
      
      <div class="row g-4 justify-content-center">
        <!-- Benefit 1: Bebas Repot -->
        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="0">
          <div class="raas-benefit-item">
            <div class="raas-benefit-icon-circle">
              <i class="bi bi-clipboard-check"></i>
            </div>
            <h5 class="raas-benefit-title">Bebas Repot</h5>
            <p class="raas-benefit-desc">
              Merekrut dan melakukan seleksi mandiri menguras banyak waktu serta tenaga Anda. Layanan RaaS hadir untuk membebaskan Anda dari seluruh proses teknis operasional, sehingga Anda bisa fokus pada tugas yang lebih strategis.
            </p>
          </div>
        </div>

        <!-- Benefit 2: Lebih Ekonomis -->
        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="raas-benefit-item">
            <div class="raas-benefit-icon-circle">
              <i class="bi bi-wallet2"></i>
            </div>
            <h5 class="raas-benefit-title">Lebih Ekonomis</h5>
            <p class="raas-benefit-desc">
              Berbeda dengan memiliki perekrut permanen, layanan RaaS memberikan Anda tenaga perekrut profesional untuk mengelola seluruh proses rekrutmen. Anda pun terbebas dari beban gaji tetap serta biaya operasional bulanan lainnya.
            </p>
          </div>
        </div>

        <!-- Benefit 3: Pengisian Posisi Lebih Cepat -->
        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="raas-benefit-item">
            <div class="raas-benefit-icon-circle">
              <i class="bi bi-lightning-charge"></i>
            </div>
            <h5 class="raas-benefit-title">Rekrutmen Cepat</h5>
            <p class="raas-benefit-desc">
              Dalam layanan RaaS, setiap proyek rekrutmen dikerjakan serentak dan kolaboratif oleh dedicated recruiter sesuai dengan industri bisnis Anda sehingga proses pengisian posisi kosong berjalan lebih cepat.
            </p>
          </div>
        </div>

        <!-- Benefit 4: Aman Dari Resiko -->
        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="raas-benefit-item">
            <div class="raas-benefit-icon-circle">
              <i class="bi bi-shield-check"></i>
            </div>
            <h5 class="raas-benefit-title">Hasil Bergaransi</h5>
            <p class="raas-benefit-desc">
              Dengan layanan RaaS, tidak ada anggaran rekrutmen yang terbuang sia-sia. Setiap investasi Anda, dijamin memberikan hasil yang sesuai. Setiap hasil yang Anda terima, kami garansi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- ==================== TRUSTED CLIENTS SECTION ==================== -->
<section id="trusted-clients" class="trusted-clients-section">
  <div class="container">
    <h2 class="trusted-clients-title" data-aos="fade-up">Telah dipercaya oleh perusahaan dari berbagai Industri</h2>
    
    <div class="marquee-wrapper" data-aos="fade-up" data-aos-delay="100">
      <div class="marquee-container mb-4">
        <div class="marquee-content marquee-right">
          <!-- Logo Set 1 -->
          <img src="assets/img/logosatupesan.png" alt="Satu Pesan" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logoirij.png" alt="Indonesia Research Institute" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logososialoka.png" alt="Sosialoka" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logodeeja.png" alt="Deeja" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logonurama.png" alt="Nurama" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <!-- Duplicate 1 -->
          <img src="assets/img/logosatupesan.png" alt="Satu Pesan" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logoirij.png" alt="Indonesia Research Institute" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logososialoka.png" alt="Sosialoka" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logodeeja.png" alt="Deeja" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logonurama.png" alt="Nurama" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
        </div>
      </div>
      
      <div class="marquee-container">
        <div class="marquee-content marquee-left">
          <!-- Logo Set 2 -->
          <img src="assets/img/logolaroche.png" alt="Laroche Woman Basic" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logosecretrecipe.png" alt="Secret Recipe" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logotonyjack.png" alt="Tonyjack" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logoironhead.png" alt="Ironhead" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logohanson.png" alt="Hanson" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <!-- Duplicate 2 -->
          <img src="assets/img/logolaroche.png" alt="Laroche Woman Basic" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logosecretrecipe.png" alt="Secret Recipe" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logotonyjack.png" alt="Tonyjack" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logoironhead.png" alt="Ironhead" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
          <img src="assets/img/logohanson.png" alt="Hanson" class="trusted-client-logo" loading="lazy" onerror="this.src='assets/img/adam.jpg'" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FAQ SECTION ==================== -->
<section id="faq" class="faq-section">
    <!-- Premium Background Ornaments -->
  <div class="faq-ornaments-premium" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1; overflow: hidden;">
    <!-- Soft Radial Glow dikurangi blur -->
    <div style="position: absolute; top: 10%; left: 10%; width: 80%; height: 80%; background: radial-gradient(circle at center, rgba(165, 195, 236, 0.12), transparent 65%); filter: blur(25px);"></div>
  </div>

  <div class="container" style="max-width: 1550px;">
    <div class="row align-items-start justify-content-between position-relative" style="z-index: 2;">
      <div class="col-lg-4 col-md-12 mb-5 mb-lg-0" data-aos="fade-up">
        <h2 class="faq-title mb-4 text-center text-lg-start" style="color: var(--heading-color); font-weight: 800;">
          Frequently Asked Questions
        </h2>
        
        <!-- Ornament Question Marks SVG (matches image) -->
        <div class="faq-ornament-svg d-none d-lg-block" style="margin-top: 20px; position: relative; width: 100%; height: 400px;">
          <svg viewBox="0 0 500 500" style="position: absolute; top: 0; left: -20px; width: 110%; height: 110%; z-index: 0; pointer-events: none;">
            <!-- Simplified - hanya 2 tanda tanya -->
            <!-- Solid Question Mark (Left) -->
            <g transform="translate(60, 60) rotate(-15)">
              <text x="0" y="320" font-family="'Nunito', 'Poppins', sans-serif" font-weight="900" font-size="360" fill="#a4c2f4">?</text>
            </g>

            <!-- Outline Question Mark (Right) -->
            <g transform="translate(200, 90) rotate(5)">
              <text x="0" y="300" font-family="'Nunito', 'Poppins', sans-serif" font-weight="900" font-size="320" fill="none" stroke="#a4c2f4" stroke-width="12" opacity="0.9">?</text>
            </g>
          </svg>
        </div>
      </div>
      
      <div class="col-lg-7 col-md-12">
        <div class="accordion faq-accordion w-100" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">
      
      <!-- FAQ 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Apa itu KLIK Rekrut?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            KLIK Rekrut adalah partner rekrutmen yang menyediakan layanan Recruiter as a Service (RaaS) untuk HR dan Perusahaan.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Apa yang membuat RaaS berbeda dari layanan rekrutmen lain?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Layanan RaaS menawarkan fleksibilitas penuh untuk memiliki tim rekruter profesional, baik hanya untuk satu tahap maupun seluruh proses rekrutmen. Anda terbebas dari biaya langganan bulanan job platform yang mengikat, tidak perlu merekrut karyawan tetap hanya untuk proses screening hingga wawancara, dan tanpa risiko membayar success fee yang menguras anggaran untuk setiap kandidat yang bergabung. Anda hanya membayar layanan yang benar-benar Anda butuhkan, memastikan tidak ada anggaran rekrutmen yang terbuang sia-sia.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Bagaimana cara kerja layanan RaaS KLIK Rekrut?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Layanan RaaS bekerja dengan cara bermitra langsung dengan perekrut profesional yang mendedikasikan keahlian dan waktu mereka untuk menyelesaikan permintaan rekrutmen Anda hingga tuntas. Anda mendapatkan ekosistem rekrutmen siap pakai yang hanya berjalan dan dibayar saat Anda membutuhkannya. 
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Apakah ada jaminan untuk layanan RaaS KLIK Rekrut?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ada. Jika kandidat yang kami berikan belum sesuai atau mengundurkan diri dalam 30 hari pertama, tim kami akan mencarikan pengganti dengan kriteria yang sama.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Berapa lama proses KLIK Rekrut menemukan kandidat yang tepat untuk saya?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            3 hingga 5 CV per minggu untuk posisi umum. Untuk posisi khusus, pencarian kandidat mungkin membutuhkan waktu lebih agar kualitas terbaik terpenuhi.
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Apakah layanan RaaS KLIK Rekrut cocok untuk UMKM atau perusahaan kecil?
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Tentu saja. Layanan RaaS kami dirancang fleksibel untuk berbagai skala bisnis, mulai dari usaha rintisan, UMKM, hingga perusahaan besar. Bahkan jika bisnis atau UMKM Anda belum begitu dikenal, kami tetap siap membantu Anda memikat dan mendapatkan kandidat terbaik.
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            Berapa tarif layanan RaaS KLIK Rekrut?
          </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Anda dapat klik tombol "Konsultasi Gratis" untuk mengenal tarif layanan kami. Tim recruitment consultant kami siap memperkenalkan layanan yang sesuai dengan kebutuhan Anda.
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingEight">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            Apakah KLIK Rekrut menawarkan demo gratis sebelum saya membuat komitmen?
          </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya. Klik tombol "Jadwalkan Demo" dan tim kami akan menghubungi Anda dalam 24 jam untuk demo eksklusif gratis.
          </div>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingNine">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            Berasal dari industri apa saja klien KLIK Rekrut?
          </button>
        </h2>
        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Klien kami berasal dari berbagai bidang termasuk Consulting, Marketing Agency, Retail, Fashion, Education, Garmen, dan lain-lain.
          </div>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTen">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            Bagaimana cara mulai menggunakan layanan RaaS dari KLIK Rekrut?
          </button>
        </h2>
        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Anda dapat klik tombol "Rekrut Sekarang".
          </div>
        </div>
      </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ accordion relies on Bootstrap JS (bootstrap.bundle.min.js loaded at bottom) -->

<!-- ==================== NEW CTA SECTION ==================== -->
<section id="contact" class="cta-section-new" style="background: linear-gradient(to bottom, #ffffff, #D5E8FA); padding: 80px 0; overflow: hidden; position: relative;">
  
  <!-- Decorative Background Ornaments -->
  <div class="cta-ornaments" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1; overflow: hidden;">
    
    <!-- Soft Radial Glow dikurangi -->
    <div class="cta-glow" style="position: absolute; top: 30%; left: 10%; width: 50%; height: 60%; background: radial-gradient(circle, rgba(0,74,173,0.06) 0%, rgba(0,74,173,0) 70%); filter: blur(30px);"></div>
    
    <!-- Blob dikurangi jadi 2 saja -->
    <svg class="cta-blob-right" viewBox="0 0 500 500" style="position: absolute; bottom: -50px; right: -50px; width: 50%; max-width: 500px; opacity: 0.08; fill: #004AAD;">
      <path d="M410.5,334.5Q372,419,271,438.5Q170,458,111.5,372.5Q53,287,112.5,200.5Q172,114,272.5,108.5Q373,103,411,176.5Q449,250,410.5,334.5Z" />
    </svg>

    <!-- Dot Grid Pattern dikurangi coverage -->
    <svg class="cta-dot-grid" width="100%" height="100%" style="position: absolute; top: 0; left: 0; opacity: 0.1;">
      <defs>
        <pattern id="dotGrid" width="20" height="20" patternUnits="userSpaceOnUse">
          <circle cx="2" cy="2" r="1.5" fill="#004AAD" />
        </pattern>
      </defs>
      <rect x="70%" y="20%" width="25%" height="50%" fill="url(#dotGrid)" />
    </svg>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <!-- Left: Text & Button -->
      <div class="col-lg-6 mb-0 mb-lg-0 pb-lg-5" data-aos="fade-right">
        <h2 class="fw-bold mb-2 mb-lg-4 cta-title" style="line-height: 1.3; color: var(--heading-color);">Tertarik Mencoba<br>Layanan RaaS?</h2>
        <p class="mb-3 mb-lg-5 cta-desc" style="line-height: 1.6; color: var(--default-color);">
          Jangan biarkan momentum bisnis Anda hilang karena tim belum siap. Mulai merekrut dan lihat bagaimana sistem RaaS bekerja mencari karyawan untuk perusahaan Anda.
        </p>
        <a href="https://api.whatsapp.com/send?phone=6281234567890" target="_blank" rel="noopener noreferrer" class="btn-cta-green">Hubungi Kami</a>
      </div>

      <!-- Right: Form -->
      <div class="col-lg-6 d-flex justify-content-center align-items-center mt-5 mt-lg-0" data-aos="fade-left" style="position: relative; z-index: 2;">
        <div class="card shadow-sm border-0 rounded-4 w-100" style="max-width: 500px; background: #fff;">
          <div class="card-body p-4 p-md-5">
            <form onsubmit="sendToWhatsApp(event)">
              <div class="mb-3">
                <label for="company" class="form-label text-muted small mb-1">Company Name</label>
                <input type="text" class="form-control bg-light border-0" id="company" style="border-radius: 8px; padding: 10px 15px;" required>
              </div>
              <div class="mb-3">
                <label for="scale" class="form-label text-muted small mb-1">Company Scale</label>
                <select class="form-select bg-light border-0" id="scale" style="border-radius: 8px; padding: 10px 15px;" required>
                  <option value="Startup">Startup</option>
                  <option value="SME">SME</option>
                  <option value="Enterprise">Enterprise</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="service" class="form-label text-muted small mb-1">Service Needed</label>
                <select class="form-select bg-light border-0" id="service" style="border-radius: 8px; padding: 10px 15px;" required>
                  <option value="Strategic Consulting">Strategic Consulting</option>
                  <option value="CV Search">CV Search</option>
                  <option value="Interviewer">Interviewer</option>
                  <option value="End-to-end Process">End-to-end Process</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="challenge" class="form-label text-muted small mb-1">Your Current Challenge</label>
                <textarea class="form-control bg-light border-0" id="challenge" rows="3" style="border-radius: 8px; padding: 10px 15px;" required></textarea>
              </div>
              <button type="submit" class="btn text-white w-100 py-3 mt-2" style="background-color: #1a1a1a; border-radius: 8px; font-weight: 500;">Rekrut Sekarang</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function sendToWhatsApp(e) {
    e.preventDefault();
    const company = document.getElementById('company').value;
    const scale = document.getElementById('scale').value;
    const service = document.getElementById('service').value;
    const challenge = document.getElementById('challenge').value;
    
    const text = `Halo tim KLIK Rekrut! Saya tertarik dengan layanan RaaS.%0A%0A*Perusahaan:* ${company}%0A*Skala Perusahaan:* ${scale}%0A*Layanan:* ${service}%0A*Tantangan:* ${challenge}%0A%0AMohon info lebih lanjut, terima kasih.`;
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

  // RaaS Carousel Logic (Dynamic N cards)
  document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.raas-carousel-wrapper');
    const prevBtn = document.getElementById('raas-prev');
    const nextBtn = document.getElementById('raas-next');
    if (!wrapper) return;

    let isAnimating = false;
    const cards = Array.from(wrapper.querySelectorAll('.raas-card'));
    if (cards.length === 0) return;

    // Build the dynamic positions array based on DOM order: Left, Center, Right, Hidden, Hidden...
    let classPositions = ['pos-left', 'pos-center', 'pos-right'];
    for(let i = 3; i < cards.length; i++) {
        classPositions.push('pos-hidden');
    }

    // Force initial apply to be safe
    cards.forEach((card, index) => {
        card.className = 'raas-card ' + classPositions[index];
    });

    function moveCarousel(direction) {
      if (isAnimating) return;
      isAnimating = true;

      if (direction === 'next') {
        // Rotate classes left: first element goes to the end
        classPositions.push(classPositions.shift());
      } else {
        // Rotate classes right: last element goes to the front
        classPositions.unshift(classPositions.pop());
      }

      cards.forEach((card, index) => {
        card.className = 'raas-card ' + classPositions[index];
      });

      // Unlock after transition ends
      setTimeout(() => { isAnimating = false; }, 600);
    }

    if (nextBtn) nextBtn.addEventListener('click', () => moveCarousel('next'));
    if (prevBtn) prevBtn.addEventListener('click', () => moveCarousel('prev'));

    // Click side card to navigate
    wrapper.addEventListener('click', function(e) {
      const card = e.target.closest('.raas-card');
      if (!card) return;
      if (card.classList.contains('pos-left')) moveCarousel('prev');
      else if (card.classList.contains('pos-right')) moveCarousel('next');
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
          Klik Rekrut adalah perusahaan rekrutmen RaaS pertama yang berbasis di Jakarta
        </p> <!-- Deskripsi singkat perusahaan -->
      </div>

      <!-- ==================== TENGAH: MENU FOOTER ==================== -->
      <div class="footer-center"> <!-- Kolom tengah berisi menu navigasi -->

        <!-- Kolom 1: Layanan -->
        <div class="footer-column">
          <h6>LAYANAN</h6> <!-- Judul kolom -->
          <ul>
            <li><a href="#services">CV Search</a></li>
            <li><a href="#services">Interviewer</a></li>
            <li><a href="#services">End-to-end</a></li>
          </ul>
        </div>

        <!-- Kolom 2: Gabung -->
        <div class="footer-column">
          <h6>GABUNG</h6>
          <ul>
            <li><a href="applypartner">Partner</a></li>
            <li><a href="#">Talent</a></li>
          </ul>
        </div>

        <!-- Kolom 3: Hubungi Kami -->
        <div class="footer-column">
          <h6>HUBUNGI KAMI</h6>
          <ul>
            <li><a href="mailto:hr.klikrekrut@gmail.com"><i class="bi bi-envelope me-2"></i> hr.klikrekrut@gmail.com</a></li>
            <li><a href="https://api.whatsapp.com/send?phone=6281234567890" target="_blank" rel="noopener noreferrer"><i class="bi bi-telephone me-2"></i> +6281234567890</a></li>
            <li style="color: #44658c; font-size: 13px;"><i class="bi bi-geo-alt me-2"></i> Jakarta Pusat, Indonesia</li>
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
  color: #44658c; /* Warna teks disamakan dengan hero & header */
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
  color: #44658c; /* Disamakan dengan hero & header */
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
  color: #44658c; /* Disamakan dengan hero & header */
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
  color: #44658c; /* Disamakan dengan hero & header */
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