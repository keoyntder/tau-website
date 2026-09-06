<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tarlac Agricultural University</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<!-- ===================== LOADING THROBBER ===================== -->
<div class="loader-overlay" id="loaderOverlay">
  <div class="loader-ring">
    <div class="orbit-wrap">
      <img src="<?= base_url('assets/Images/orbit-icon.png') ?>" class="orbit-image" alt="">
    </div>
    <img src="<?= base_url('assets/Images/taulogo.png') ?>" alt="Loading" class="loader-logo">
  </div>
</div>

<!-- ===================== HEADER ===================== -->
<header class="site-header" id="siteHeader">
  <div class="header-inner">

    <div class="brand-group">
      <img src="<?= base_url('assets/Images/taulogo.png') ?>" alt="TAU Logo" class="logo-placeholder">
      <div class="brand-text">
        <span class="brand-name">Tarlac Agricultural University</span>
        <span class="brand-subtitle">Malacama, Camiling</span>
      </div>
    </div>

    <nav class="header-nav-main">
      <a href="<?= base_url('about') ?>" data-en="About" data-tl="Tungkol Sa">About</a>
      <a href="<?= base_url('admissions') ?>" data-en="Admissions" data-tl="Pagpasok">Admissions</a>
      <a href="<?= base_url('academic-affairs') ?>" data-en="Academic Affairs" data-tl="Pang-akademikong Sangay">Academic Affairs</a>
      <a href="<?= base_url('research') ?>" data-en="Research and Development" data-tl="Pananaliksik at Pagpapaunlad">Research and Development</a>
      <a href="<?= base_url('offices') ?>" data-en="Offices" data-tl="Mga Tanggapan">Offices</a>
    </nav>

    <div class="header-icons">
      <div class="lang-toggle" role="group" aria-label="Language selection">
        <button type="button" class="lang-btn active" id="langEN" data-lang="en">EN</button>
        <span class="lang-divider" aria-hidden="true">|</span>
        <button type="button" class="lang-btn" id="langTL" data-lang="tl">TL</button>
      </div>

      <div class="search-inline" id="searchInline">
        <button class="icon-btn search-icon-btn" aria-label="Search" id="searchBtn">
          <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </button>
        <input type="text" class="search-inline-input" id="searchInput" placeholder="Search" aria-label="Search">
        <button type="button" class="search-inline-close" id="searchCloseBtn" aria-label="Close search">&times;</button>
      </div>

      <button class="burger" id="burgerBtn" aria-label="Open menu" aria-expanded="false" aria-controls="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>
</header>

<!-- ===================== NAV DRAWER ===================== -->
<nav class="nav-drawer" id="navMenu">
  <ul>
    <li><a href="<?= base_url('') ?>">Home</a></li>
    <li><a href="<?= base_url('about') ?>">About</a></li>
    <li><a href="<?= base_url('academic-affairs') ?>">Academic Affairs</a></li>
    <li><a href="<?= base_url('research-development') ?>">Research and Development</a></li>
    <li><a href="<?= base_url('admissions') ?>">Admissions</a></li>
    <li><a href="<?= base_url('offices') ?>">Offices</a></li>
    <li><a href="#announcements">Announcements</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>
<div class="nav-overlay" id="navOverlay"></div>

<!-- ===================== HERO ===================== -->
<section class="hero" id="home">
  <video class="hero-video" autoplay muted loop playsinline poster="<?= base_url('assets/Images/taulogo.png') ?>">
    <source src="<?= base_url('assets/Images/hero.mp4') ?>" type="video/mp4">
  </video>
  <div class="hero-fallback" aria-hidden="true"></div>
</section>

<main>

  <!-- ===================== WHY TAU (true masonry layout) ===================== -->
  <section class="why-tau" id="about">
  <div class="why-tau-inner">
    <h2 class="why-tau-heading">Why Tarlac Agricultural University?</h2>
  </div>

  <div class="why-tau-cards-wrap">
    <div class="why-tau-cards" id="whyTauCards">
      <?php if (!empty($why_tau_cards) && is_array($why_tau_cards)): ?>
        <?php foreach ($why_tau_cards as $card): ?>
          <div class="why-tau-card">
            <div>
              <h3 class="why-tau-card-title"><?= esc($card['title']) ?></h3>
              <p class="why-tau-card-text"><?= esc($card['description'] ?? '') ?></p>
            </div>
            <a href="<?= esc(!empty($card['link']) ? $card['link'] : '#') ?>" class="why-tau-card-btn" target="_blank" rel="noopener">
              <span class="why-tau-card-btn-icon">↗</span> check
            </a>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>No highlights available at this time.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

  <!-- ===================== UNIVERSITY BULLETIN ===================== -->
<section class="bulletin" id="bulletin">
  <div class="bulletin-inner">

    <div class="bulletin-header">
      <div class="bulletin-header-left">
        <h2 class="bulletin-heading">University Bulletin</h2>
      </div>
      <div class="bulletin-header-right">
        <p class="bulletin-subtext">Stay updated with the latest news, memos, and announcements from Tarlac Agricultural University.</p>
        <a href="#" class="bulletin-view-all">
          View All Announcements
          <span class="bulletin-view-all-circle">→</span>
        </a>
      </div>
    </div>

    <div class="bulletin-layout">

      <!-- LEFT: today's news -->
      <div class="bulletin-main">

        <!-- small stacked items, beside/above the featured story -->
        <div class="bulletin-stack">
          <a href="#" class="bulletin-stack-item">
            <div class="bulletin-stack-img" style="background-image: url('<?= base_url('Images/bulletin-2.jpg') ?>');"></div>
            <div class="bulletin-stack-body">
              <h3 class="bulletin-stack-title">Campus Memo</h3>
              <p class="bulletin-stack-meta">JANUARY 20, 7:49 AM &middot; ADMIN</p>
            </div>
          </a>
          <a href="#" class="bulletin-stack-item">
            <div class="bulletin-stack-img" style="background-image: url('<?= base_url('Images/bulletin-3.jpg') ?>');"></div>
            <div class="bulletin-stack-body">
              <h3 class="bulletin-stack-title">Graduation Notice</h3>
              <p class="bulletin-stack-meta">JANUARY 21, 8:32 AM &middot; ADMIN</p>
            </div>
          </a>
        </div>

        <!-- featured / biggest story of the day -->
        <div class="bulletin-featured">
          <div class="bulletin-featured-img" style="background-image: url('<?= base_url('Images/bulletin1.jpg') ?>');"></div>
          <div class="bulletin-featured-caption">
            <span class="bulletin-featured-tag">Latest</span>
            <h3 class="bulletin-featured-title">Official List of Accredited Student Organizations, A.Y. 2026–2027</h3>
            <p class="bulletin-featured-text">The Office of Student Services and Development (OSSD) has announced this year's accredited student organizations. Students are encouraged to join and grow through leadership and community.</p>
            <a href="https://www.facebook.com/photo/?fbid=1441665724645667&set=pcb.1441668574645382" class="bulletin-featured-link">Read More <span>→</span></a>
          </div>
        </div>

      </div>

      <!-- vertical divider -->
      <div class="bulletin-divider"></div>

      <!-- RIGHT: latest list -->
      <div class="bulletin-sidebar">
        <h3 class="bulletin-sidebar-heading">Latest</h3>

        <div class="bulletin-sidebar-list">

          <a href="#" class="bulletin-sidebar-item">
            <div class="bulletin-sidebar-text">
              <h4>Official List of Accredited Student Organizations</h4>
              <span>By Admin</span>
            </div>
            <div class="bulletin-sidebar-img" style="background-image: url('<?= base_url('Images/bulletin1.jpg') ?>');"></div>
          </a>

          <a href="#" class="bulletin-sidebar-item">
            <div class="bulletin-sidebar-text">
              <h4>Campus Memo: Updated Policy Guidelines</h4>
              <span>By Admin</span>
            </div>
            <div class="bulletin-sidebar-img" style="background-image: url('<?= base_url('Images/bulletin-2.jpg') ?>');"></div>
          </a>

          <a href="#" class="bulletin-sidebar-item">
            <div class="bulletin-sidebar-text">
              <h4>Graduation Notice: Requirements &amp; Schedule</h4>
              <span>By Admin</span>
            </div>
            <div class="bulletin-sidebar-img" style="background-image: url('<?= base_url('Images/bulletin-3.jpg') ?>');"></div>
          </a>

          <a href="#" class="bulletin-sidebar-item">
            <div class="bulletin-sidebar-text">
              <h4>Enrollment Reminders for Next Semester</h4>
              <span>By Admin</span>
            </div>
            <div class="bulletin-sidebar-img" style="background-image: url('<?= base_url('Images/bulletin-4.jpg') ?>');"></div>
          </a>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===================== UPCOMING EVENTS + EXAM SCHEDULE ===================== -->
  <div class="events-list">
  <?php foreach ($events as $event): ?>
    <?php 
      $timestamp = strtotime($event['event_date']);
      $month = strtoupper(date('M', $timestamp));
      $day   = date('d', $timestamp);
    ?>
    <div class="events-row">
      <div class="events-date">
        <span class="events-date-month"><?= $month ?></span>
        <span class="events-date-day"><?= $day ?></span>
      </div>
      <div class="events-img" style="background-image: url('<?= base_url($event['image_url'] ?? 'assets/Images/taulogo.png') ?>');"></div>
      <div class="events-details">
        <h3 class="events-title"><?= esc($event['title']) ?></h3>
        <p class="events-meta"><?= esc($event['location']) ?><br><?= esc($event['time_range']) ?></p>
        <p class="events-desc"><?= esc($event['description']) ?></p>
        <a href="<?= esc($event['link'] ?? '#') ?>" class="events-link">View Event Details <span>→</span></a>
      </div>
    </div>
  <?php endforeach; ?>
</div>



<!-- ===================== FOOTER ===================== -->
<footer class="site-footer">
  <div class="footer-inner">

    <div class="footer-brand-col">
      <div class="footer-brand-row">
        <div class="footer-logo-container">
          <img src="<?= base_url('assets/Images/taulogo.png') ?>" alt="TAU Logo" class="footer-logo">
        </div>
        <div class="footer-brand-text">
          <h3 class="footer-univ-name">Tarlac Agricultural University</h3>
          <p class="footer-univ-loc">Malacama, Camiling</p>
        </div>
      </div>

      <p class="footer-contact">
        +63 (045) 123 4567 &nbsp;|&nbsp; +63 912 345 6789
      </p>

      <div class="footer-badges">
        <div class="footer-sub-logo-container">
          <img src="<?= base_url('assets/Images/cetlogo.png') ?>" alt="College of Engineering and Technology" class="footer-sub-logo">
        </div>
        <div class="footer-sub-logo-container">
          <img src="<?= base_url('assets/Images/cas2.png') ?>" alt="College of Arts and Sciences" class="footer-sub-logo">
        </div>
        <div class="footer-sub-logo-container">
          <img src="<?= base_url('assets/Images/caf.png') ?>" alt="College of Agriculture and Forestry" class="footer-sub-logo">
        </div>
        <div class="footer-sub-logo-container">
          <img src="<?= base_url('assets/Images/cbm2.png') ?>" alt="College of Business Management" class="footer-sub-logo">
        </div>
        <div class="footer-sub-logo-container">
          <img src="<?= base_url('assets/Images/cvm.png') ?>" alt="College of Veterinary Medicine" class="footer-sub-logo">
        </div>
        <div class="footer-sub-logo-container">
          <img src="<?= base_url('assets/Images/coed.png') ?>" alt="College of Education" class="footer-sub-logo">
        </div>
      </div>
    </div>

    <div class="footer-nav-grid">
      <div class="footer-nav-col">
        <h4 class="footer-nav-heading">Colleges</h4>
        <ul>
          <li><a href="<?= base_url('departments/cet') ?>">College of Engineering and Technology</a></li>
          <li><a href="<?= base_url('departments/cas') ?>">College of Arts and Sciences</a></li>
          <li><a href="<?= base_url('departments/caf') ?>">College of Agriculture and Forestry</a></li>
          <li><a href="<?= base_url('departments/cbm') ?>">College of Business and Management</a></li>
          <li><a href="<?= base_url('departments/cvm') ?>">College of Veterinary Medicine</a></li>
          <li><a href="<?= base_url('departments/coed') ?>">College of Education</a></li>
        </ul>
      </div>
      <div class="footer-nav-col">
        <h4 class="footer-nav-heading">Contact Us</h4>
        <ul>
          <li><a href="#">Admissions</a></li>
          <li><a href="#">Registrar</a></li>
          <li><a href="#">Help Desk</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      <div class="footer-nav-col">
        <h4 class="footer-nav-heading">About TAU</h4>
        <ul>
          <li><a href="#">History</a></li>
          <li><a href="#">Administration</a></li>
          <li><a href="#">Board of Regents</a></li>
          <li><a href="#">Quality Policy</a></li>
        </ul>
      </div>
      <div class="footer-nav-col">
        <h4 class="footer-nav-heading">Offices</h4>
        <ul>
          <li><a href="#">HR</a></li>
          <li><a href="#">Finance</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="#">Extension</a></li>
        </ul>
      </div>
      <div class="footer-nav-col">
        <h4 class="footer-nav-heading">Mission</h4>
        <ul>
          <li><a href="#">Core Values</a></li>
          <li><a href="#">Goals</a></li>
          <li><a href="#">Strategic Plan</a></li>
        </ul>
      </div>
      <div class="footer-nav-col">
        <h4 class="footer-nav-heading">Vision</h4>
        <ul>
          <li><a href="#">2028 Vision</a></li>
          <li><a href="#">Development</a></li>
          <li><a href="#">Sustainability</a></li>
        </ul>
      </div>
    </div>

  </div>
</footer>

<script src="<?= base_url('assets/script.js') ?>"></script>
</body>
</html>