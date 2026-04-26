<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="Kokocoran - Tradisi unik masyarakat Kepulauan Kangean, Madura. Perpaduan tarian, musik gamelan, dan pemberian saweran dalam hajatan pernikahan dan khitanan.">
  <title>Kokocoran | Warisan Budaya Kepulauan Kangean Madura</title>
  <!-- Bootstrap 5 + Icons + Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Inter', sans-serif;
    }
    body {
      background-color: #fef9f0;
      scroll-behavior: smooth;
    }
    h1, h2, h3, .display-font {
      font-family: 'Playfair Display', serif;
    }
    /* Navbar */
    .navbar {
      background: rgba(0, 0, 0, 0.85);
      backdrop-filter: blur(8px);
      transition: 0.3s;
      padding: 1rem 0;
    }
    .navbar-brand {
      font-weight: 800;
      font-size: 1.6rem;
      letter-spacing: -0.5px;
      color: #ffd966 !important;
    }
    .navbar-brand i {
      color: #e67e22;
    }
    .nav-link {
      font-weight: 600;
      color: #f5f5f5 !important;
      margin: 0 8px;
      transition: 0.2s;
    }
    .nav-link:hover, .nav-link.active {
      color: #ffb347 !important;
    }
    /* Hero Section dengan latar budaya Kangean */
    .hero-kokocoran {
      background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1565797765-6b3f1a6b9a2b?q=80&w=1974&auto=format') center/cover no-repeat;
      min-height: 85vh;
      display: flex;
      align-items: center;
      position: relative;
    }
    .hero-title {
      font-size: 3.8rem;
      font-weight: 900;
      text-shadow: 3px 3px 10px rgba(0,0,0,0.5);
    }
    .btn-kokocoran {
      background: #d35400;
      color: white;
      border-radius: 50px;
      padding: 12px 32px;
      font-weight: 700;
      transition: 0.2s;
      border: none;
    }
    .btn-kokocoran:hover {
      background: #e67e22;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      color: white;
    }
    .btn-outline-kokocoran {
      border: 2px solid #ffb347;
      color: #ffb347;
      border-radius: 50px;
      padding: 10px 28px;
      font-weight: 600;
      transition: 0.2s;
    }
    .btn-outline-kokocoran:hover {
      background: #ffb347;
      color: #2c2c2c;
    }
    /* Section title */
    .section-title {
      font-family: 'Playfair Display', serif;
      font-weight: 800;
      border-left: 6px solid #d35400;
      padding-left: 20px;
      margin-bottom: 2rem;
    }
    /* Card styling */
    .card-kokocoran {
      border: none;
      border-radius: 24px;
      overflow: hidden;
      transition: all 0.3s ease;
      background: white;
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .card-kokocoran:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 30px -10px rgba(211,84,0,0.2);
    }
    .card-img-top {
      height: 220px;
      object-fit: cover;
    }
    .badge-kangean {
      background: #f39c12;
      color: #3e2723;
      font-weight: 700;
      padding: 6px 14px;
      border-radius: 40px;
    }
    /* Quote section */
    .quote-area {
      background: linear-gradient(135deg, #2c2118, #3d2a1f);
      color: #ffefcf;
      border-radius: 32px;
    }
    /* Timeline */
    .timeline-step {
      border-left: 3px solid #d35400;
      padding-left: 1.5rem;
      margin-bottom: 2rem;
    }
    /* Footer */
    .footer {
      background: #1a120b;
      color: #e4d5c3;
      border-top: 4px solid #d35400;
    }
    /* Back to top */
    .back-to-top {
      position: fixed;
      bottom: 24px;
      right: 24px;
      background: #d35400;
      color: white;
      width: 46px;
      height: 46px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      transition: 0.2s;
      z-index: 99;
      text-decoration: none;
    }
    .back-to-top:hover {
      background: #e67e22;
      transform: scale(1.05);
      color: white;
    }
    @media (max-width: 768px) {
      .hero-title { font-size: 2.2rem; }
      .section-title { font-size: 1.8rem; }
    }
  </style>
</head>
<body>

<!-- Back to top -->
<a href="#" class="back-to-top" aria-label="Ke atas"><i class="fas fa-arrow-up"></i></a>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top py-3">
  <div class="container">
    <a class="navbar-brand" href="#">
      <i class="fas fa-umbrella-beach me-2"></i>Kokocoran<span style="color:#ffb347;">Kangean</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-light rounded"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#prosesi">Prosesi</a></li>
        <li class="nav-item"><a class="nav-link" href="#nilai">Nilai Budaya</a></li>
        <li class="nav-item"><a class="nav-link" href="#kangean">Pulau Kangean</a></li>
      </ul>
      <a href="#tentang" class="btn btn-outline-kokocoran btn-sm"><i class="fas fa-feather-alt me-1"></i> Eksplorasi</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-kokocoran">
  <div class="container text-white text-center text-md-start">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="hero-title display-font fw-bold">Kokocoran<br><span class="text-warning">Tradisi Unik dari Timur Madura</span></h1>
        <p class="lead my-4">Perpaduan tarian, musik gamelan, dan pemberian saweran dalam hajatan pernikahan dan khitanan. Warisan budaya yang hanya ada di Kepulauan Kangean.</p>
        <div>
          <a href="#tentang" class="btn btn-kokocoran me-3"><i class="fas fa-play-circle me-2"></i> Kenali Lebih Dalam</a>
          <a href="#kangean" class="btn btn-outline-kokocoran"><i class="fas fa-map-marker-alt me-2"></i> Jelajahi Kangean</a>
        </div>
        <div class="mt-5 d-flex gap-4 flex-wrap">
          <div><i class="fas fa-map-pin text-warning"></i> <strong>Kepulauan Kangean, Sumenep</strong></div>
          <div><i class="fas fa-calendar-week text-warning"></i> <strong>Setelah Hajatan Pernikahan/Khitanan</strong></div>
          <div><i class="fas fa-music text-warning"></i> <strong>Iringan Gamelan Tradisional</strong></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tentang Kokocoran -->
<section id="tentang" class="container my-5 pt-4">
  <div class="row g-5 align-items-center">
    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1562920187-5f0b2b6c5f9d?q=80&w=2070&auto=format" alt="Suasana hajatan adat Kangean" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px; width: 100%; object-fit: cover;">
    </div>
    <div class="col-md-6">
      <span class="badge-kangean"><i class="fas fa-leaf me-1"></i> Warisan Leluhur</span>
      <h2 class="section-title mt-3">Apa itu Kokocoran?</h2>
      <p class="text-muted">Kokocoran merupakan tradisi unik yang berasal dari Kepulauan Kangean, Madura. Tradisi ini berupa seni tari yang dikolaborasikan dengan hajatan, biasanya dilaksanakan setelah resepsi pernikahan atau khitanan.[reference:0] Tidak diketahui secara pasti sejarah awal mula tradisi ini, namun masyarakat Kangean meyakininya telah ada sejak zaman dahulu dan terus dilestarikan hingga kini.[reference:1]</p>
      <p class="text-muted">Yang membuat Kokocoran istimewa adalah tradisi ini <strong>hanya ada di Kepulauan Kangean</strong> dan tidak ditemukan di daerah Madura lainnya.[reference:2] Kokocoran bukan sekadar hiburan, melainkan mengandung makna filosofis yang dalam seperti saling menghormati, tolong-menolong, dan mempererat hubungan antarsaudara.[reference:3]</p>
      <div class="mt-3">
        <i class="fas fa-hand-holding-heart text-warning me-2"></i> Simbol keakraban dan solidaritas sosial <br>
        <i class="fas fa-drumstick-bite text-warning me-2 mt-2"></i> Siklus saling membantu antar warga
      </div>
    </div>
  </div>
</section>

<!-- Prosesi & Tata Cara -->
<section id="prosesi" class="bg-light py-5">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge-kangean"><i class="fas fa-theater-masks"></i> Rangkaian Acara</span>
      <h2 class="section-title text-center border-0 d-block" style="border-left: none;">Prosesi Kokocoran</h2>
      <p class="text-secondary">Tahapan meriah yang penuh makna dan kebersamaan</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
          <i class="fas fa-drum fa-3x text-warning mb-3"></i>
          <h5>1. Iringan Gamelan</h5>
          <p class="small">Tradisi ini diiringi musik tradisional khas Kangean berupa gamelan yang menciptakan suasana meriah dan semangat.[reference:4]</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
          <i class="fas fa-user-friends fa-3x text-warning mb-3"></i>
          <h5>2. Tamu Menari</h5>
          <p class="small">Para tamu dengan ramah naik ke panggung menari bebas mengelilingi kedua mempelai sambil memberikan sumbangan.[reference:5]</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
          <i class="fas fa-money-bill-wave fa-3x text-warning mb-3"></i>
          <h5>3. Pemberian Saweran</h5>
          <p class="small">Saweran diberikan dalam bentuk kalung uang atau uang lembaran. Jumlahnya bisa mencapai puluhan hingga ratusan juta rupiah.[reference:6]</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
          <i class="fas fa-clipboard-list fa-3x text-warning mb-3"></i>
          <h5>4. Pencatatan & Penutup</h5>
          <p class="small">Setiap sumbangan dicatat untuk digunakan kembali di acara berikutnya. Acara ditutup dengan pertunjukan ludruk atau ajhing.[reference:7]</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Nilai Budaya & Filosofi -->
<section id="nilai" class="container my-5 py-4">
  <div class="row g-5 align-items-center">
    <div class="col-lg-6 order-lg-2">
      <img src="https://images.unsplash.com/photo-1603257660963-5f51c69cb1a6?q=80&w=2070&auto=format" alt="Kebersamaan masyarakat Kangean" class="img-fluid rounded-4 shadow-lg" style="max-height: 380px; width: 100%; object-fit: cover;">
    </div>
    <div class="col-lg-6 order-lg-1">
      <span class="badge-kangean"><i class="fas fa-heart"></i> Makna Mendalam</span>
      <h2 class="section-title mt-3">Nilai-Nilai Luhur Kokocoran</h2>
      <p class="text-muted">Kokocoran bukan sekadar hiburan, melainkan cerminan kearifan lokal yang sarat makna. Tradisi ini menjadi <strong>tempat berkumpul dan bersilaturahmi</strong>, di mana keluarga dan teman-teman merayakan momen bahagia bersama pengantin.[reference:8]</p>
      <div class="mt-4">
        <div class="d-flex gap-3 mb-3">
          <i class="fas fa-handshake fa-2x text-warning"></i>
          <div><strong>Saling Membantu</strong><br><span class="text-secondary">Pemberian saweran menciptakan siklus bantu-membantu antar warga.</span></div>
        </div>
        <div class="d-flex gap-3 mb-3">
          <i class="fas fa-users fa-2x text-warning"></i>
          <div><strong>Mempererat Ikatan</strong><br><span class="text-secondary">Memperkuat hubungan antarsaudara dan solidaritas sosial.</span></div>
        </div>
        <div class="d-flex gap-3 mb-3">
          <i class="fas fa-chalkboard-user fa-2x text-warning"></i>
          <div><strong>Penghubung Generasi</strong><br><span class="text-secondary">Mewariskan nilai budaya dari generasi ke generasi.</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tentang Pulau Kangean -->
<section id="kangean" class="py-5" style="background: #fdf4e6;">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=2073&auto=format" alt="Pantai Pulau Kangean" class="img-fluid rounded-4 shadow-lg" style="max-height: 380px; width: 100%; object-fit: cover;">
      </div>
      <div class="col-lg-6">
        <span class="badge-kangean"><i class="fas fa-island-tropical"></i> Destinasi Eksotis</span>
        <h2 class="section-title mt-3">Kepulauan Kangean, Madura</h2>
        <p class="text-muted">Kangean merupakan gugusan pulau paling timur di Pulau Madura, terletak antara Bali dan Madura.[reference:9] Dahulu, pulau ini merupakan tempat pembuangan para tahanan dari berbagai suku seperti Tionghoa, Arab, Jawa, Sunda, Bajo, Bugis, Dayak, dan Madura.[reference:10] Keberagaman ini melahirkan tradisi Kokocoran yang khas dan membedakan Kangean dari daerah Madura lainnya.</p>
        <p class="text-muted">Selain Kokocoran, Pulau Kangean juga menyimpan keindahan alam yang memukau: pantai berpasir putih, air laut jernih, serta keanekaragaman hayati bawah laut yang masih terjaga.</p>
        <div class="mt-3 d-flex gap-3 flex-wrap">
          <span class="bg-white px-3 py-2 rounded-pill shadow-sm"><i class="fas fa-ship"></i> Akses via Pelabuhan Kalianget</span>
          <span class="bg-white px-3 py-2 rounded-pill shadow-sm"><i class="fas fa-fish"></i> Spot Snorkeling & Diving</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimoni / Kata Budayawan -->
<div class="container my-5">
  <div class="quote-area p-4 p-lg-5 rounded-4 shadow">
    <div class="row align-items-center">
      <div class="col-md-3 text-center">
        <i class="fas fa-user-circle fa-5x text-warning opacity-75"></i>
        <h6 class="mt-2">Budayawan Kangean</h6>
      </div>
      <div class="col-md-9">
        <i class="fas fa-quote-left fa-2x text-warning opacity-50"></i>
        <p class="fst-italic fs-5">"Kokocoran adalah identitas kami. Tradisi ini mengajarkan bahwa kebahagiaan akan terasa lebih lengkap jika dibagikan kepada sesama. Inilah warisan yang tak ternilai dari para leluhur."</p>
        <strong>— Pak Arifin, Tokoh Adat Desa Arjasa</strong>
      </div>
    </div>
  </div>
</div>

<!-- Galeri Sederhana -->
<div class="container mb-5">
  <div class="text-center mb-4">
    <span class="badge-kangean"><i class="fas fa-camera"></i> Suasana Tradisi</span>
    <h2 class="mt-2">Momen Kebersamaan dalam Kokocoran</h2>
  </div>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card-kokocoran h-100">
        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=2070&auto=format" class="card-img-top" alt="Tari tradisional">
        <div class="card-body">
          <h5>Tarian Bebas Penuh Sukacita</h5>
          <p class="small text-muted">Para tamu menari mengelilingi pengantin sambil melemparkan saweran.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-kokocoran h-100">
        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=2070&auto=format" alt="Musik gamelan">
        <div class="card-body">
          <h5>Gamelan Pengiring Semangat</h5>
          <p class="small text-muted">Musik tradisional khas Kangean yang mengiringi jalannya prosesi.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-kokocoran h-100">
        <img src="https://images.unsplash.com/photo-1603257660963-5f51c69cb1a6?q=80&w=2070&auto=format" alt="Kalung uang saweran">
        <div class="card-body">
          <h5>Kalung Uang Saweran</h5>
          <p class="small text-muted">Bentuk pemberian khas yang menghiasi leher pengantin.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer pt-5 pb-4 mt-3">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-5">
        <h4 class="fw-bold text-white"><i class="fas fa-umbrella-beach text-warning me-2"></i>KokocoranKangean</h4>
        <p class="small">Melestarikan tradisi Kokocoran sebagai warisan budaya tak benda dari Kepulauan Kangean, Kabupaten Sumenep, Madura. Mari jaga dan lestarikan identitas budaya kita.</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="text-white-50"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="#" class="text-white-50"><i class="fab fa-youtube fa-lg"></i></a>
          <a href="#" class="text-white-50"><i class="fab fa-tiktok fa-lg"></i></a>
          <a href="#" class="text-white-50"><i class="fab fa-facebook fa-lg"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <h6 class="fw-bold text-white">Informasi</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-secondary text-decoration-none">Kontak & Kolaborasi</a></li>
          <li class="mt-2"><a href="#" class="text-secondary text-decoration-none">Dokumentasi Budaya</a></li>
          <li class="mt-2"><a href="#" class="text-secondary text-decoration-none">Jadwal Hajatan Adat</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="fw-bold text-white">Pulau Kangean</h6>
        <p class="small text-secondary">Kecamatan Arjasa, Kabupaten Sumenep, Jawa Timur<br><i class="fas fa-phone-alt me-1"></i> +62 321 7890 456<br><i class="fas fa-envelope"></i> info@kokocoran.id</p>
      </div>
    </div>
    <hr class="bg-secondary">
    <div class="text-center small text-secondary">© 2026 Kokocoran Kangean | Menjaga tradisi, merawat kebersamaan 🇮🇩</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Back to top smooth
  document.querySelector('.back-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  // Navbar scroll effect
  window.addEventListener('scroll', function() {
    const nav = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      nav.style.background = 'rgba(0,0,0,0.95)';
      nav.style.boxShadow = '0 8px 20px rgba(0,0,0,0.3)';
    } else {
      nav.style.background = 'rgba(0,0,0,0.85)';
      nav.style.boxShadow = 'none';
    }
  });
  // Smooth scroll untuk anchor link
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === "#" || targetId === "") return;
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>
</body>
</html>