<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maya Disability &amp; Community Services - Empowering Lives Through Compassionate Support</title>
  <meta name="description"
    content="Maya Disability &amp; Community Services is a premium, professional NDIS provider and community care support network providing disability support, aged care, mental health services, and community program engagement." />

  <!-- Favicon -->
  <link rel="icon" href="image/logo.jpeg" type="image/jpeg" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Font Awesome 6.4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <!-- Swiper Slider CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- AOS Animation Library CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css" />


</head>

<body>
  <header class="nn-header">
    <!-- Top info bar -->
    <div class="nn-topbar">
      <div class="nn-container">
        <span class="nn-topbar-item">NTB License 179</span>
        <span class="nn-topbar-item">TAAN Member 2342</span>
        <span style="
    gap: 2px;
" class="nn-topbar-item">Company Rgd No:&nbsp;<b>162883/073</b></span>
      </div>
    </div>

    <!-- Main navigation -->
    <nav class="nn-nav">
      <div class="nn-container">
        <a href="index.php" class="nn-logo">
          <img src="image/logo.png" alt="North Nepal Trek &amp; Expedition" />
        </a>

        <ul class="nn-menu" id="nnMenu">
          <li class="has-dd">
            <a href="#">Treks</a>
            <ul class="nn-dd">
              <li><a href="#">Everest Region</a></li>
              <li><a href="#">Annapurna Region</a></li>
              <li><a href="#">Langtang Region</a></li>
              <li><a href="#">Manaslu Region</a></li>
            </ul>
          </li>
          <li class="has-dd">
            <a href="#">Heli Tours</a>
            <ul class="nn-dd">
              <li><a href="#">Everest Heli Tour</a></li>
              <li><a href="#">Annapurna Heli Tour</a></li>
              <li><a href="#">Langtang Heli Tour</a></li>
            </ul>
          </li>
          <li class="has-dd">
            <a href="#">Peak Climbing</a>
            <ul class="nn-dd">
              <li><a href="#">Island Peak</a></li>
              <li><a href="#">Mera Peak</a></li>
              <li><a href="#">Lobuche Peak</a></li>
            </ul>
          </li>
          <li><a href="#">Tours</a></li>
          <li><a href="#">Adventure</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>

        <button class="nn-toggle" id="nnToggle" aria-label="Toggle menu">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </nav>
  </header>

  <script>
    (function () {
      var toggle = document.getElementById('nnToggle');
      var menu = document.getElementById('nnMenu');
      if (toggle && menu) {
        toggle.addEventListener('click', function () {
          menu.classList.toggle('open');
        });
        // Mobile: tap parent to open submenu
        menu.querySelectorAll('.has-dd > a').forEach(function (link) {
          link.addEventListener('click', function (e) {
            if (window.innerWidth <= 991) {
              e.preventDefault();
              link.parentElement.classList.toggle('open');
            }
          });
        });
      }
    })();
  </script>
