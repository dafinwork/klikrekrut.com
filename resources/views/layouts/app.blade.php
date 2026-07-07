<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Open Graph Tags (untuk preview saat link di-share di WhatsApp, Telegram, dll) -->
  <meta property="og:site_name" content="Klik Rekrut">
  <meta property="og:title" content="Klik Rekrut — Asisten Perekrut untuk Perusahaan">
  <meta property="og:description" content="Layanan Recruiter as a Service (RaaS): dapatkan rekruter profesional on-demand tanpa biaya tetap. Cocok untuk UMKM hingga perusahaan besar.">
  <meta property="og:image" content="https://klikrekrut.com/assets/img/og-image.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Klik Rekrut - Asisten Perekrut untuk Perusahaan">
  <meta property="og:url" content="https://klikrekrut.com">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="id_ID">

  <!-- Twitter / X Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@klikrekrut">
  <meta name="twitter:title" content="Klik Rekrut — Asisten Perekrut untuk Perusahaan">
  <meta name="twitter:description" content="Layanan Recruiter as a Service (RaaS): dapatkan rekruter profesional on-demand tanpa biaya tetap.">
  <meta name="twitter:image" content="https://klikrekrut.com/assets/img/og-image.png">

  <!-- Meta Utama -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title & Meta -->
  <title>@yield('title', 'Klik Rekrut')</title>
  <meta name="description" content="@yield('description', 'Platform assisten rekrutmen')">
  <meta name="keywords" content="@yield('keywords', 'job, career, klik rekrut')">

  <!-- Favicons -->
  <link rel="icon" href="https://klikrekrut.com/assets/img/square.png" type="image/png" sizes="32x32">
  <link rel="icon" href="https://klikrekrut.com/assets/img/square.png" type="image/png" sizes="192x192">
  <link rel="apple-touch-icon" href="https://klikrekrut.com/assets/img/apple-touch-icon.png" sizes="180x180">
  <link rel="shortcut icon" href="https://klikrekrut.com/assets/img/square.png">

  <!-- Structured Data (Organization) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Klik Rekrut",
    "url": "https://klikrekrut.com",
    "logo": "https://klikrekrut.com/assets/img/square.png",
    "sameAs": [
      "https://www.facebook.com/klikrekrut",
      "https://www.instagram.com/klikrekrut",
      "https://www.linkedin.com/company/klikrekrut"
    ]
  }
  </script>

  <!-- CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

  <!-- Preloader — harus ada di sini agar main.js bisa menghapusnya saat window.load -->
  <div id="preloader"></div>

  @include('partials.navbar')
  @yield('content')

  <!-- JS -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
