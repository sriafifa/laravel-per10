<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="Portal berita hot dan viral terkini di Indonesia. Dapatkan informasi terbaru, trending, dan breaking news hanya di Hot News Indonesia.">
  <title>Hot News Indonesia | Berita Viral & Terkini 🔥</title>
  <!-- Bootstrap 5 + Icons + Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Inter', sans-serif;
    }
    body {
      background-color: #fefaf5;
      scroll-behavior: smooth;
    }
    /* Navbar styling */
    .navbar {
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(2px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
      transition: all 0.3s;
    }
    .navbar-brand {
      font-weight: 800;
      font-size: 1.7rem;
      letter-spacing: -0.5px;
      background: linear-gradient(135deg, #dc2626, #f97316);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent !important;
    }
    .navbar-brand i {
      background: none;
      color: #f97316;
      -webkit-background-clip: unset;
      background-clip: unset;
    }
    .nav-link {
      font-weight: 600;
      color: #2d2a2a !important;
      margin: 0 4px;
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
    /* Breaking ticker */
    .breaking-bar {
      background: #1e1a1a;
      color: #fff1e6;
      padding: 10px 0;
      font-weight: 600;
      overflow: hidden;
      white-space: nowrap;
      border-bottom: 2px solid #f97316;
    }
    .breaking-content {
      display: inline-block;
      animation: scrollText 22s linear infinite;
    }
    .breaking-content i {
      color: #ff4d4d;
      margin-right: 12px;
    }
    @keyframes scrollText {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }
    /* Card hover & hot effect */
    .hot-card {
      transition: all 0.3s cubic-bezier(0.2, 0, 0, 1);
      border: none;
      border-radius: 24px;
      overflow: hidden;
      background: white;
      box-shadow: 0 10px 20px rgba(0,0,0,0.02), 0 6px 6px rgba(0,0,0,0.03);
    }
    .hot-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 30px -12px rgba(220,38,38,0.2);
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }
    .hot-card:hover .card-img-top {
      transform: scale(1.02);
    }
    .badge-hot {
      background: #ff4d4d;
      color: white;
      font-weight: 700;
      padding: 5px 12px;
      border-radius: 40px;
      font-size: 0.7rem;
      letter-spacing: 0.5px;
    }
    .badge-category {
      background: #fff0e6;
      color: #b45309;
      font-weight: 600;
      border-radius: 30px;
      padding: 5px 12px;
      font-size: 0.7rem;
    }
    .time-text {
      font-size: 0.75rem;
      color: #6c757d;
    }
    .btn-read {
      border-radius: 40px;
      font-weight: 600;
      padding: 6px 18px;
      border: 1px solid #f97316;
      color: #f97316;
      background: white;
      transition: 0.2s;
    }
    .btn-read:hover {
      background: #f97316;
      color: white;
    }
    /* Featured story */
    .featured-story {
      background: white;
      border-radius: 32px;
      overflow: hidden;
      box-shadow: 0 20px 35px -12px rgba(0,0,0,0.1);
      transition: 0.2s;
    }
    .featured-img {
      height: 100%;
      min-height: 280px;
      object-fit: cover;
    }
    .section-title {
      font-weight: 800;
      border-left: 6px solid #f97316;
      padding-left: 16px;
      margin-bottom: 28px;
      color: #2c2c2c;
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
    .live-clock {
      background: #fef3c7;
      padding: 4px 12px;
      border-radius: 40px;
      font-size: 0.8rem;
      font-weight: 600;
      color: #b45309;
    }
    @media (max-width: 768px) {
      .navbar-brand { font-size: 1.4rem; }
      .section-title { font-size: 1.6rem; }
      .featured-img { min-height: 220px; }
    }
  </style>
</head>
<body>

<!-- Back to top button -->
<a href="#" class="back-to-top" aria-label="Kembali ke atas">
  <i class="fas fa-arrow-up"></i>
</a>

<!-- Navbar sticky + hot brand -->
<nav class="navbar navbar-expand-lg sticky-top py-2">
  <div class="container">
    <a class="navbar-brand" href="#">
      <i class="fas fa-fire-flame-curved me-2"></i>HOT<span style="color:#dc2626;">NEWS</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="{{ url('/beranda') }}">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/tentang') }}">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/kerapan') }}">Kerapan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/kokocoran') }}">Kokocoran</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/gendeng') }}">Gendeng</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/trending') }}">Trending 🔥</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/nasional') }}">Nasional</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/internasional') }}">Internasional</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/teknologi') }}">Teknologi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/olahraga') }}">Olahraga</a></li>
      </ul>
      <div class="d-flex align-items-center gap-2">
        <span class="live-clock" id="liveClockNow">
          <i class="far fa-clock me-1"></i> <span id="liveTime">--:-- WIB</span>
        </span>
        <a href="#" class="btn btn-outline-hot btn-sm d-none d-lg-block"><i class="fas fa-bell me-1"></i> Langganan</a>
      </div>
    </div>
  </div>
</nav>

<!-- BREAKING NEWS TICKER HOT -->
<div class="breaking-bar">
  <div class="container">
    <div class="breaking-content">
      <i class="fas fa-bolt"></i> 🔥 BREAKING NEWS: Gempa Magnitudo 5.6 Guncang Garut | Hasil Quick Count Pilkada 2024 | AI Baru dari OpenAI Bikin Geger Dunia Teknologi | Timnas Indonesia Rebut Emas SEA Games 🔥
      <i class="fas fa-fire ms-3 me-2"></i> UPDATE TERBARU 24 JAM NONSTOP
    </div>
  </div>
</div>

<main>
  <!-- MAIN FEATURED STORY (BERITA UTAMA HARI INI) -->
  <div class="container mt-5">
    <div class="featured-story">
      <div class="row g-0 align-items-stretch">
        <div class="col-md-6">
          <img src="https://picsum.photos/id/20/700/500" alt="Berita Utama" class="featured-img img-fluid w-100 h-100" style="object-fit: cover;">
        </div>
        <div class="col-md-6 p-4 p-lg-5 d-flex flex-column justify-content-center">
          <div class="mb-3">
            <span class="badge-hot me-2"><i class="fas fa-fire"></i> BREAKING HOT</span>
            <span class="badge-category"><i class="fas fa-newspaper"></i> NASIONAL</span>
          </div>
          <h2 class="display-6 fw-bold">Presiden Resmikan Ibu Kota Nusantara Fase Awal, Investasi Tembus Rp 89 T</h2>
          <p class="text-muted mt-3">Proyek strategis nasional memasuki babak baru. Kawasan pemerintahan mulai beroperasi Juli 2026. Para investor asing antusias menanamkan modal di IKN. Simak dampaknya terhadap ekonomi Indonesia.</p>
          <div class="d-flex align-items-center gap-3 mt-2">
            <span class="time-text"><i class="far fa-clock me-1"></i> 32 menit yang lalu</span>
            <span><i class="fas fa-eye me-1 text-secondary"></i> 128.9rb dilihat</span>
          </div>
          <div class="mt-4">
            <a href="#" class="btn-read"><i class="fas fa-chevron-circle-right me-1"></i> Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- HOT NEWS GRID : SEKSI BERITA PANAS SEKARANG -->
  <div class="container my-5">
    <div class="section-title">
      <i class="fas fa-fire-flame-curved text-danger me-2"></i> 🔥 BERITA HOT & TRENDING SEKARANG
    </div>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card hot-card h-100">
          <img src="https://picsum.photos/id/26/400/250" class="card-img-top" alt="berita teknologi">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="badge-hot"><i class="fas fa-fire"></i> HOT</span>
              <span class="badge-category">TEKNO</span>
            </div>
            <h5 class="card-title fw-bold">ChatGPT-5 Resmi Meluncur, Bisa Prediksi Masa Depan? Hebohkan Dunia AI</h5>
            <p class="card-text text-secondary">OpenAI meluncurkan model terbaru dengan kemampuan reasoning tingkat tinggi. Pakar sebut ini lompatan besar...</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="time-text"><i class="far fa-clock"></i> 1 jam lalu</span>
              <a href="#" class="btn-read btn-sm">Baca <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card hot-card h-100">
          <img src="https://picsum.photos/id/64/400/250" class="card-img-top" alt="olahraga">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="badge-hot"><i class="fas fa-fire"></i> VIRAL</span>
              <span class="badge-category">OLAHRAGA</span>
            </div>
            <h5 class="card-title fw-bold">Timnas Indonesia U-20 Habisi Australia 3-1, Lolos ke Final Piala Asia!</h5>
            <p class="card-text text-secondary">Gol spektakuler Marselino Ferdinan dan hattrick pemain muda berbakat mengguncang stadion. Indonesia merayakan kemenangan bersejarah...</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="time-text"><i class="far fa-clock"></i> 45 menit lalu</span>
              <a href="#" class="btn-read btn-sm">Baca <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="card hot-card h-100">
          <img src="https://picsum.photos/id/22/400/250" class="card-img-top" alt="politik">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="badge-hot"><i class="fas fa-fire"></i> HOT</span>
              <span class="badge-category">POLITIK</span>
            </div>
            <h5 class="card-title fw-bold">Hasil Exit Poll Pilkada Serentak: 7 Provinsi Zona Merah, Potensi Kotak Kosong?</h5>
            <p class="card-text text-secondary">Lembaga survei merilis kejutan. Tingkat partisipasi pemilih capai rekor tertinggi. Simak peta politik terkini yang memanas...</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="time-text"><i class="far fa-clock"></i> 2 jam lalu</span>
              <a href="#" class="btn-read btn-sm">Baca <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="card hot-card h-100">
          <img src="https://picsum.photos/id/96/400/250" class="card-img-top" alt="ekonomi">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="badge-hot"><i class="fas fa-fire"></i> TRENDING</span>
              <span class="badge-category">EKONOMI</span>
            </div>
            <h5 class="card-title fw-bold">Harga Emas Melambung ke Level Tertinggi Sepanjang Sejarah, Investor Panic Buying</h5>
            <p class="card-text text-secondary">Ketegangan geopolitik dan pelemahan dolar AS mendorong harga emas menyentuh Rp1,5 juta per gram. Analis prediksi masih akan naik...</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="time-text"><i class="far fa-clock"></i> 3 jam lalu</span>
              <a href="#" class="btn-read btn-sm">Baca <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="card hot-card h-100">
          <img src="https://picsum.photos/id/169/400/250" class="card-img-top" alt="viral">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="badge-hot"><i class="fas fa-fire"></i> VIRAL</span>
              <span class="badge-category">LIFESTYLE</span>
            </div>
            <h5 class="card-title fw-bold">Fenomena ‘Cuaca Panas Ekstrem’ 40°C di Indonesia, BMKG Keluarkan Peringatan Dini</h5>
            <p class="card-text text-secondary">Suhu terik melanda sejumlah wilayah, warga diimbau hindari aktivitas siang hari. Dampak fenomena El Nino dan urban heat island...</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="time-text"><i class="far fa-clock"></i> 55 menit lalu</span>
              <a href="#" class="btn-read btn-sm">Baca <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="card hot-card h-100">
          <img src="https://picsum.photos/id/155/400/250" class="card-img-top" alt="hiburan">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="badge-hot"><i class="fas fa-fire"></i> HIBURAN</span>
              <span class="badge-category">SELEB</span>
            </div>
            <h5 class="card-title fw-bold">Konser Coldplay di Jakarta: Tiket Ludes 2 Menit, Harga Calo Tembus Puluhan Juta!</h5>
            <p class="card-text text-secondary">Fenomena tiket tercepat dalam sejarah musik Indonesia. Pihak promotor menambah kursi VIP. Netizen heboh di media sosial...</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="time-text"><i class="far fa-clock"></i> 15 menit lalu</span>
              <a href="#" class="btn-read btn-sm">Baca <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SIDE TRENDING TOPICS + REKOMENDASI HOT (BONUS SECTION) -->
  <div class="container mb-5">
    <div class="row g-4 align-items-stretch">
      <div class="col-lg-8">
        <div class="bg-white p-4 rounded-4 shadow-sm h-100">
          <h4 class="fw-bold mb-3"><i class="fas fa-chart-line text-danger"></i> Topik Paling Panas Hari Ini</h4>
          <div class="row g-3">
            <div class="col-md-6">
              <div class="d-flex align-items-center gap-3 border-bottom pb-2">
                <span class="badge-hot">#1</span>
                <span class="fw-semibold">Hasil Quick Count Pilpres</span>
                <i class="fas fa-fire text-warning ms-auto"></i>
              </div>
              <div class="d-flex align-items-center gap-3 border-bottom pb-2 mt-2">
                <span class="badge-hot">#2</span>
                <span class="fw-semibold">AI vs Pekerja Kreatif</span>
                <i class="fas fa-fire text-warning ms-auto"></i>
              </div>
              <div class="d-flex align-items-center gap-3 border-bottom pb-2 mt-2">
                <span class="badge-hot">#3</span>
                <span class="fw-semibold">Kenaikan UKT 2026</span>
                <i class="fas fa-chart-simple ms-auto text-secondary"></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center gap-3 border-bottom pb-2">
                <span class="badge-hot">#4</span>
                <span class="fw-semibold">Film Indonesia Tembus Oscar</span>
                <i class="fas fa-fire text-warning ms-auto"></i>
              </div>
              <div class="d-flex align-items-center gap-3 border-bottom pb-2 mt-2">
                <span class="badge-hot">#5</span>
                <span class="fw-semibold">Startup GoTo Merger Lagi?</span>
                <i class="fas fa-chart-simple ms-auto text-secondary"></i>
              </div>
              <div class="d-flex align-items-center gap-3 border-bottom pb-2 mt-2">
                <span class="badge-hot">#6</span>
                <span class="fw-semibold">Cuaca Panas Rekor</span>
                <i class="fas fa-temperature-high text-danger ms-auto"></i>
              </div>
            </div>
          </div>
          <div class="mt-4 alert alert-warning d-flex align-items-center gap-2" role="alert">
            <i class="fas fa-bullhorn fa-fw"></i> Diskusi netizen sedang memanas! Ikuti hashtag <strong>#HotNewsIndonesia</strong> di medsos.
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bg-dark text-white p-4 rounded-4 h-100" style="background: linear-gradient(145deg, #2c241f, #1f1b18);">
          <div class="d-flex align-items-center gap-2 mb-3">
            <i class="fas fa-newspaper fa-2x text-warning"></i>
            <h5 class="fw-bold mb-0">Update Langsung</h5>
          </div>
          <ul class="list-unstyled">
            <li class="mb-3 border-bottom border-secondary pb-2"><i class="fas fa-circle text-danger me-2" style="font-size: 8px;"></i> Pemprov DKI berlakukan ganjil genap 24 jam</li>
            <li class="mb-3 border-bottom border-secondary pb-2"><i class="fas fa-circle text-danger me-2" style="font-size: 8px;"></i> Harga minyak dunia turun 3% akibat oversupply</li>
            <li class="mb-3 border-bottom border-secondary pb-2"><i class="fas fa-circle text-danger me-2" style="font-size: 8px;"></i> K-pop group BTS comeback dengan tur dunia termasuk Jakarta</li>
            <li><i class="fas fa-circle text-warning me-2" style="font-size: 8px;"></i> Gempa bumi terkini: info BMKG terkini tidak berpotensi tsunami</li>
          </ul>
          <div class="mt-3 text-center">
            <a href="#" class="btn btn-sm btn-outline-light rounded-pill"><i class="fas fa-sync-alt"></i> Refresh Berita</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Footer section -->
<footer class="footer pt-5 pb-4 mt-4">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-5">
        <h5 class="fw-bold text-white"><i class="fas fa-fire-flame-curved text-danger me-2"></i>HOTNEWS.ID</h5>
        <p class="small text-secondary">Portal berita terpercaya dengan informasi terkini, akurat, dan berani mengupas tuntas isu panas di Indonesia dan dunia. #BeritaHotSekarang</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="text-white-50"><i class="fab fa-facebook-f fa-lg"></i></a>
          <a href="#" class="text-white-50"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="#" class="text-white-50"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="#" class="text-white-50"><i class="fab fa-tiktok fa-lg"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <h6 class="fw-bold text-white">Tautan Cepat</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-secondary text-decoration-none small">Tentang Kami</a></li>
          <li class="mt-2"><a href="#" class="text-secondary text-decoration-none small">Redaksi & Pedoman</a></li>
          <li class="mt-2"><a href="#" class="text-secondary text-decoration-none small">Karier</a></li>
          <li class="mt-2"><a href="#" class="text-secondary text-decoration-none small">Iklan & Kerja Sama</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="fw-bold text-white">Langganan Berita Panas</h6>
        <p class="small text-secondary">Dapatkan notifikasi breaking news via email</p>
        <div class="input-group">
          <input type="email" class="form-control form-control-sm bg-dark text-white border-secondary" placeholder="Email anda">
          <button class="btn btn-danger btn-sm" type="button">Langganan</button>
        </div>
        <p class="small text-muted mt-3">© 2026 HotNews Media | Update: <span id="footerDate"></span></p>
      </div>
    </div>
    <hr class="bg-secondary mt-4">
    <div class="text-center small text-secondary">🔥 #1 Trending News Portal - Berita Viral & Hot Terkini Sepanjang Masa 🔥</div>
  </div>
</footer>

<!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Live Clock WIB (Jakarta Time) dan update footer date
  function updateClock() {
    const now = new Date();
    const options = { timeZone: 'Asia/Jakarta', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
    const timeString = new Intl.DateTimeFormat('id-ID', options).format(now);
    document.getElementById('liveTime').innerText = timeString + ' WIB';
    
    // Update footer date (format panjang)
    const dateOpt = { timeZone: 'Asia/Jakarta', year: 'numeric', month: 'long', day: 'numeric' };
    const dateString = new Intl.DateTimeFormat('id-ID', dateOpt).format(now);
    document.getElementById('footerDate').innerText = dateString + ' - ' + timeString + ' WIB';
  }
  updateClock();
  setInterval(updateClock, 1000);
  
  // Smooth scroll for back to top
  document.querySelector('.back-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  
  // Tambahkan efek hover dinamis pada navbar saat scroll (opsional)
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