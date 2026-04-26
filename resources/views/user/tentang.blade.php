<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>About Project | Hot News Indonesia - Portal Berita🔥</title>
  <!-- Bootstrap 5 + Icons + Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <style>
    * { font-family: 'Inter', sans-serif; }
    body {
      background: linear-gradient(145deg, #fef9f0 0%, #fff5ea 100%);
    }
    .navbar {
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(2px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    }
    .navbar-brand {
      font-weight: 800;
      font-size: 1.7rem;
      background: linear-gradient(135deg, #dc2626, #f97316);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent !important;
    }
    .navbar-brand i {
      background: none;
      color: #f97316;
    }
    .nav-link {
      font-weight: 600;
      color: #2d2a2a !important;
      transition: 0.2s;
    }
    .nav-link:hover, .nav-link.active {
      color: #dc2626 !important;
    }
    .btn-outline-hot {
      border: 1px solid #f97316;
      color: #f97316;
      border-radius: 40px;
      font-weight: 600;
      transition: 0.2s;
    }
    .btn-outline-hot:hover {
      background: #f97316;
      color: white;
      box-shadow: 0 4px 12px rgba(249,115,22,0.3);
    }
    .project-header {
      background: linear-gradient(120deg, #2c241f, #1e1916);
      border-radius: 2rem;
      padding: 2.5rem;
      margin-top: 2rem;
      color: white;
    }
    .stat-card {
      background: white;
      border-radius: 1.5rem;
      padding: 1.5rem;
      text-align: center;
      transition: 0.2s;
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
      border: 1px solid rgba(0,0,0,0.03);
    }
    .stat-card i {
      font-size: 2.2rem;
      color: #f97316;
    }
    .tech-badge {
      background: #fff0e6;
      color: #b45309;
      padding: 0.5rem 1.2rem;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.9rem;
      margin: 0.3rem;
      display: inline-block;
    }
    .feature-list {
      list-style: none;
      padding-left: 0;
    }
    .feature-list li {
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .feature-list li i {
      color: #f97316;
      font-size: 1.2rem;
      width: 24px;
    }
    .timeline-step {
      border-left: 3px solid #f97316;
      padding-left: 1.5rem;
      margin-bottom: 2rem;
    }
    .footer {
      background: #0f0f0f;
      color: #ccc;
      border-top: 3px solid #f97316;
    }
    .back-to-top {
      position: fixed;
      bottom: 24px;
      right: 24px;
      background: #dc2626;
      color: white;
      width: 45px;
      height: 45px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      transition: 0.2s;
      z-index: 99;
      text-decoration: none;
    }
    .back-to-top:hover {
      background: #f97316;
      transform: scale(1.05);
      color: white;
    }
    @media (max-width: 768px) {
      .project-header { padding: 1.5rem; }
    }
  </style>
</head>
<body>

<!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- Navbar (sama dengan halaman utama, dengan link aktif ke halaman about) -->
<nav class="navbar navbar-expand-lg sticky-top py-2">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <i class="fas fa-fire-flame-curved me-2"></i>HOT<span style="color:#dc2626;">NEWS</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.html">Beranda</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Tentang Proyek</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Fitur</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Roadmap</a></li>
      </ul>
      <div class="d-flex">
        <a href="index.html" class="btn btn-outline-hot btn-sm"><i class="fas fa-newspaper me-1"></i> Live Demo</a>
      </div>
    </div>
  </div>
</nav>

<main>
  <div class="container">
    <!-- Header proyek -->
    <div class="project-header shadow-lg">
      <div class="row align-items-center">
        <div class="col-md-8">
          <span class="badge bg-danger mb-3 px-3 py-2"><i class="fas fa-code"></i> Web Development Project</span>
          <h1 class="display-5 fw-bold">🔥 Hot News Indonesia<br>Landing Page Berita Viral</h1>
          <p class="lead mt-3 opacity-75">Portal berita modern dengan tampilan dinamis, live clock, breaking ticker, dan grid berita panas. Didesain untuk pengalaman membaca tercepat dan ter-update.</p>
          <div class="mt-4">
            <a href="#" class="btn btn-light rounded-pill me-2"><i class="fab fa-github"></i> GitHub Repo</a>
            <a href="index.html" class="btn btn-outline-light rounded-pill"><i class="fas fa-external-link-alt"></i> Kunjungi Halaman Utama</a>
          </div>
        </div>
        <div class="col-md-4 text-center d-none d-md-block">
          <i class="fas fa-fire-flame-curved" style="font-size: 6rem; color: #ffb347;"></i>
        </div>
      </div>
    </div>

    <!-- Statistik cepat proyek -->
    <div class="row g-4 my-5">
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <i class="fas fa-code-branch"></i>
          <h3 class="fw-bold mt-2">1.0</h3>
          <p class="text-muted">Versi Stable</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <i class="fas fa-file-code"></i>
          <h3 class="fw-bold mt-2">2</h3>
          <p class="text-muted">Halaman Utama</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <i class="fas fa-mobile-alt"></i>
          <h3 class="fw-bold mt-2">100%</h3>
          <p class="text-muted">Responsif</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <i class="fas fa-tachometer-alt"></i>
          <h3 class="fw-bold mt-2">Lighhouse</h3>
          <p class="text-muted">Performance 95+</p>
        </div>
      </div>
    </div>

    <!-- Grid: Tentang Proyek + Teknologi -->
    <div class="row g-5 mb-5">
      <div class="col-lg-7">
        <div class="bg-white p-4 rounded-4 shadow-sm">
          <h3 class="fw-bold mb-3"><i class="fas fa-info-circle text-danger me-2"></i> Apa itu Hot News Indonesia?</h3>
          <p>Proyek ini adalah <strong>landing page portal berita “hot”</strong> yang menampilkan berita-berita terkini, trending, dan viral dengan antarmuka yang menarik. Dibangun menggunakan <strong>Bootstrap 5</strong> dan didesain untuk memberikan kesan modern, cepat, serta informatif. Halaman utama menyuguhkan breaking news ticker, kartu berita dengan efek hover, jam live WIB, serta bagian topik paling panas hari ini.</p>
          <p>Halaman “Tentang Proyek” ini dibuat sebagai dokumentasi dan eksplorasi fitur kedua, menunjukkan bahwa proyek dapat dikembangkan menjadi multi-page website dengan konsistensi desain.</p>
          <h5 class="fw-bold mt-4"><i class="fas fa-crown text-warning"></i> Fitur Utama</h5>
          <ul class="feature-list">
            <li><i class="fas fa-check-circle"></i> Breaking news ticker animasi (marquee modern)</li>
            <li><i class="fas fa-check-circle"></i> Grid berita hot dengan badge kategori dan efek hover</li>
            <li><i class="fas fa-check-circle"></i> Live clock real-time (WIB) dan footer dinamis</li>
            <li><i class="fas fa-check-circle"></i> Tombol back to top dan navigasi sticky</li>
            <li><i class="fas fa-check-circle"></i> Featured story utama (hero section)</li>
            <li><i class="fas fa-check-circle"></i> Sidebar topik trending & update langsung</li>
            <li><i class="fas fa-check-circle"></i> Desain responsif (mobile-first) dengan Bootstrap 5</li>
            <li><i class="fas fa-check-circle"></i> Font Awesome 6, Google Font Inter, serta custom gradient</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="bg-white p-4 rounded-4 shadow-sm">
          <h3 class="fw-bold mb-3"><i class="fas fa-microchip"></i> Tech Stack</h3>
          <div class="mb-4">
            <span class="tech-badge"><i class="fab fa-html5"></i> HTML5</span>
            <span class="tech-badge"><i class="fab fa-css3-alt"></i> CSS3</span>
            <span class="tech-badge"><i class="fab fa-js"></i> JavaScript (ES6)</span>
            <span class="tech-badge"><i class="fab fa-bootstrap"></i> Bootstrap 5</span>
            <span class="tech-badge"><i class="fab fa-font-awesome"></i> FontAwesome 6</span>
            <span class="tech-badge"><i class="fas fa-palette"></i> Custom CSS</span>
          </div>
          <hr>
          <h5><i class="fas fa-rocket"></i> Keunggulan Proyek</h5>
          <ul class="feature-list mt-2">
            <li><i class="fas fa-bolt"></i> Performa cepat, tidak ada dependensi berat</li>
            <li><i class="fas fa-palette"></i> UI modern dengan kartu bayangan lembut</li>
            <li><i class="fas fa-universal-access"></i> Aksesibilitas dan warna kontras nyaman</li>
            <li><i class="fas fa-expand-arrows-alt"></i> Layout fleksibel mudah dikembangkan jadi CMS</li>
          </ul>
          <div class="alert alert-warning mt-3">
            <i class="fas fa-lightbulb"></i> <strong>Proyek open-source?</strong> Kode siap pakai untuk portofolio atau dijadikan template berita.
          </div>
        </div>
      </div>
    </div>

    <!-- Roadmap / Timeline pengembangan -->
    <div class="bg-white p-4 rounded-4 shadow-sm mb-5">
      <h3 class="fw-bold mb-4"><i class="fas fa-road"></i> Roadmap Pengembangan</h3>
      <div class="row">
        <div class="col-md-4">
          <div class="timeline-step">
            <span class="badge bg-success mb-2">✅ Selesai</span>
            <h5>Fase 1: Landing Berita Statis</h5>
            <p class="text-muted">Halaman utama dengan grid berita, ticker, dan live clock. Desain responsif + interaksi dasar.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="timeline-step">
            <span class="badge bg-success mb-2">✅ Selesai</span>
            <h5>Fase 2: Halaman About Proyek</h5>
            <p class="text-muted">Dokumentasi proyek, penjelasan fitur, dan tech stack. Menambah kredibilitas pengembangan.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="timeline-step">
            <span class="badge bg-warning text-dark mb-2">🔄 Rencana</span>
            <h5>Fase 3: Integrasi API Berita</h5>
            <p class="text-muted">Menghubungkan ke API berita nyata (NewsAPI) sehingga konten dinamis dan realtime.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="timeline-step">
            <span class="badge bg-secondary mb-2">📋 Ide</span>
            <h5>Fase 4: Dark Mode & Pencarian</h5>
            <p class="text-muted">Menambahkan toggle dark mode dan fitur search berita berdasarkan kategori.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="timeline-step">
            <span class="badge bg-secondary mb-2">📋 Ide</span>
            <h5>Fase 5: Dashboard Admin Sederhana</h5>
            <p class="text-muted">CRUD berita menggunakan LocalStorage atau Firebase untuk belajar full-stack.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tim / Kontributor (simbolis) -->
    <div class="text-center mb-5">
      <h3 class="fw-bold"><i class="fas fa-users"></i> Dibuat oleh</h3>
      <p class="lead">Proyek mandiri untuk portofolio front-end developer</p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <div class="bg-white p-3 rounded-4 shadow-sm" style="width: 180px;">
          <i class="fas fa-user-astronaut fa-3x text-danger"></i>
          <h6 class="mt-2">Creative Dev</h6>
          <small>UI/UX & Bootstrap</small>
        </div>
        <div class="bg-white p-3 rounded-4 shadow-sm" style="width: 180px;">
          <i class="fas fa-laptop-code fa-3x text-primary"></i>
          <h6 class="mt-2">Frontend Engineer</h6>
          <small>JavaScript & Animasi</small>
        </div>
      </div>
      <div class="mt-4">
        <a href="index.html" class="btn btn-danger rounded-pill px-4"><i class="fas fa-arrow-left me-2"></i> Kembali ke Halaman Utama</a>
      </div>
    </div>
  </div>
</main>

<!-- Footer sama seperti halaman utama -->
<footer class="footer pt-5 pb-4 mt-2">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-5">
        <h5 class="fw-bold text-white"><i class="fas fa-fire-flame-curved text-danger me-2"></i>HOTNEWS.ID</h5>
        <p class="small text-secondary">Proyek landing page berita hot & viral. Didesain untuk kebutuhan portofolio dan demonstrasi kemampuan front-end modern.</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="text-white-50"><i class="fab fa-github fa-lg"></i></a>
          <a href="#" class="text-white-50"><i class="fab fa-linkedin fa-lg"></i></a>
          <a href="#" class="text-white-50"><i class="fab fa-twitter fa-lg"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <h6 class="fw-bold text-white">Navigasi Proyek</h6>
        <ul class="list-unstyled">
          <li><a href="index.html" class="text-secondary text-decoration-none small">Halaman Utama (Berita)</a></li>
          <li class="mt-2"><a href="#" class="text-secondary text-decoration-none small active">Tentang Proyek</a></li>
          <li class="mt-2"><a href="#" class="text-secondary text-decoration-none small">Dokumentasi</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="fw-bold text-white">Lisensi</h6>
        <p class="small text-secondary">Open source untuk keperluan pembelajaran. Silakan modifikasi sesuai kebutuhan.</p>
        <p class="small text-muted mt-3">© 2026 HotNews Project | <span id="footerYear"></span></p>
      </div>
    </div>
    <hr class="bg-secondary mt-4">
    <div class="text-center small text-secondary">🔥 Hot News Indonesia — Menyajikan berita terpanas dengan gaya terbaru 🔥</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Footer tahun otomatis
  document.getElementById('footerYear').innerText = new Date().getFullYear();

  // Back to top smooth
  document.querySelector('.back-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // Navbar shadow effect
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.style.boxShadow = '0 10px 25px -5px rgba(0,0,0,0.1)';
    } else {
      navbar.style.boxShadow = '0 8px 20px rgba(0,0,0,0.05)';
    }
  });
</script>
</body>
</html>