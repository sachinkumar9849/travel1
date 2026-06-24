<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>North Nepal &amp; Treak & Expedition</title>
  <meta name="description"
    content="Maya Disability &amp; Community Services is a premium, professional NDIS provider and community care support network providing disability support, aged care, mental health services, and community program engagement." />

  <!-- Favicon -->
  <link rel="icon" href="image/logo.png" type="image/png" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Font Awesome 6.4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <!-- Swiper Slider CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- AOS Animation Library CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <style>
    .about-hero {
      position: relative;
      background-image: url(image/aboutBanner.svg);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      padding: 100px 0;
      min-height: 550px;
      display: flex;
      align-items: end;
      padding-bottom: 65px;
    }

    .about-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg,
          rgba(1, 42, 71, 0.85) 0%,
          rgba(1, 42, 71, 0.85) 28%,
          rgba(45, 74, 53, 0.85) 72%,
          rgba(45, 74, 53, 0.85) 100%);
      z-index: 1;
    }

    .about-hero .container {
      position: relative;
      z-index: 2;
    }

    .about-breadcrumb {
      position: absolute;
      top: 30px;
      left: 0;
      width: 100%;
      z-index: 2;
    }

    .about-breadcrumb .container {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.8);
      letter-spacing: 0.5px;
    }

    .about-breadcrumb a {
      color: rgba(255, 255, 255, 0.8);
      text-decoration: none;
    }

    .about-breadcrumb a:hover {
      color: #fff;
    }
  </style>
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
            <a href="short-treks.php">Treks</a>
            <ul class="nn-dd">
              <li><a href="package-detail.php">Everest Region</a></li>
              <li><a href="short-treks.php">Annapurna Region</a></li>
              <li><a href="short-treks.php">Langtang Region</a></li>
              <li><a href="short-treks.php">Manaslu Region</a></li>
            </ul>
          </li>
          <li class="has-dd">
            <a href="everest-heli-tour.php">Heli Tours</a>
            <ul class="nn-dd">
              <li><a href="everest-heli-tour.php">Everest Heli Tour</a></li>
              <li><a href="everest-heli-tour.php">Annapurna Heli Tour</a></li>
              <li><a href="everest-heli-tour.php">Langtang Heli Tour</a></li>
            </ul>
          </li>
          <li class="has-dd">
            <a href="adventure.php">Peak Climbing</a>
            <ul class="nn-dd">
              <li><a href="adventure.php">Island Peak</a></li>
              <li><a href="adventure.php">Mera Peak</a></li>
              <li><a href="adventure.php">Lobuche Peak</a></li>
            </ul>
          </li>
          <li><a href="short-treks.php">Tours</a></li>
          <li><a href="adventure.php">Adventure</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="guidePage.php">Travel Guide</a></li>
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