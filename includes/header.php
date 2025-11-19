<?php
if (!defined('APP_ENV')) {
  $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
  $envOverride = getenv('APP_ENV');

  if ($envOverride) {
    $env = strtolower($envOverride);
  } elseif ($host === 'localhost' || strpos($host, '.local') !== false) {
    $env = 'local';
  } else {
    $env = 'production';
  }

  define('APP_ENV', $env);
  if (APP_ENV === 'local') {
    define('BASE_URL', 'http://' . $host);
  } else {
    define('BASE_URL', 'https://boshkalighting.com');
  }
}

// Google Analytics - only load in production
if (APP_ENV === 'production') {
  echo '
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QLWLLDYFP9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag("js", new Date());

    gtag("config", "G-QLWLLDYFP9");
  </script>';
}

$isHomePage = basename($_SERVER['SCRIPT_NAME']) === 'index.php';
$baseUrl = defined('BASE_URL') ? rtrim((string) constant('BASE_URL'), '/') : '';
$currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');

// Add Google Search Console verification meta tag
echo '<meta name="google-site-verification" content="5pOjh8IYXsQBID5PH635pwuYW1aneqqhGvmDp27XqK4" />';
?>

<style>
  :root {
    --header-primary: #434D53;
    --header-warm: #C4B29A;
    --header-text: #434D53;
    --header-white: #ffffff;
    --header-shadow: 0 10px 25px rgba(0,0,0,0.1);
    --header-backdrop: rgba(255,255,255,0.95);
  }

  .visually-hidden {
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px);
    white-space: nowrap;
  }

  /* Main Header Container */
  header.main-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: var(--header-backdrop);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(158, 178, 189, 0.1);
    z-index: 1000;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    transform: translateY(0);
    box-shadow: var(--header-shadow);
  }

  /* Header hidden state */
  header.main-header.header-hidden {
    transform: translateY(-100%);
  }

  /* Header container */
  .header-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  /* Brand Section */
  .brand-section {
    padding: 25px 0 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    max-width: calc(100% - 80px); /* Reserve space for hamburger button */
  }

  .brand-title {
    font-family: 'Playfair Display', serif;
    font-size: 3.2rem;
    font-weight: 400;
    color: var(--header-primary);
    text-decoration: none;
    margin: 0;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    text-align: center;
    word-break: break-word;
  }

  .brand-title:hover {
    color: var(--header-warm);
    transform: scale(1.12);
  }

  .brand-subtitle {
    font-size: 0.85rem;
    color: var(--header-warm);
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    opacity: 0.8;
  }

  /* Navigation Section */
  .nav-section {
    opacity: 1;
    max-height: none;
    overflow: visible;
    width: 100%;
    padding-bottom: 20px;
    background: transparent;
    box-shadow: none;
  }
  .nav-section.nav-open {
    opacity: 1 !important;
    max-height: 400px !important;
    overflow: visible !important;
    padding-bottom: 20px !important;
  }

  .main-nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 35px;
    margin: 0;
    padding: 0;
    flex-wrap: wrap;
  }

  .main-nav a {
    text-decoration: none;
    font-family: 'Playfair Display', serif;
    font-weight: 400;
    font-size: 1.3rem;
    color: #434d53;
    padding: 10px 15px;
    border-radius: 25px;
    transition: color 0.2s, transform 0.2s;
    position: relative;
    background: transparent;
  }

  .main-nav a:hover,
  .main-nav a:focus {
    background: transparent;
    color: var(--header-warm);
    transform: scale(1.14);
  }

  /* Active page indicator */
  .main-nav a.active {
    color: var(--header-warm);
    background: transparent;
    transform: scale(1.14);
  }

  /* Mobile menu toggle */
  .menu-toggle {
    display: none;
    position: absolute;
    top: 20px;
    right: 30px;
    background: rgba(158, 178, 189, 0.1);
    border: 2px solid rgba(158, 178, 189, 0.3);
    border-radius: 12px;
    padding: 8px 12px;
    font-size: 1.3rem;
    color: var(--header-primary);
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 1001;
  }

  .menu-toggle .hamburger-icon {
    display: block;
    line-height: 1;
  }

  .menu-toggle:hover {
    background: var(--header-primary);
    color: white;
    transform: scale(1.08);
    border-color: var(--header-primary);
  }

  .menu-toggle:focus {
    outline: 2px solid var(--header-primary);
    outline-offset: 2px;
  }

  /* Compact header state (on scroll) */
  header.main-header.compact {
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
  }

  header.main-header.compact .brand-title {
    font-size: 2.4rem;
  }

  header.main-header.compact .brand-section {
    padding: 18px 0 8px;
  }

  header.main-header.compact .nav-section {
    padding-bottom: 15px;
  }

  header.main-header.compact .main-nav ul {
    gap: 20px;
  }

  /* Responsive Design */
  @media (max-width: 900px) {
    .header-container {
      padding: 0 20px;
      position: relative;
    }

    .menu-toggle {
      display: block;
    }

    .brand-section {
      padding: 15px 60px 10px 0; /* Extra right padding to avoid hamburger */
      max-width: 100%;
    }

    .brand-title {
      font-size: 1.8rem;
      padding-right: 10px;
    }

    /* Disable hover behavior on mobile */
    header.main-header .nav-section {
      opacity: 0;
      max-height: 0;
      overflow: hidden;
      padding-bottom: 0;
    }

    .nav-section.nav-open {
      opacity: 1 !important;
      max-height: 500px !important;
      overflow: visible !important;
      padding-bottom: 20px !important;
    }

    .main-nav {
      display: none;
      width: 100%;
      background: var(--header-white);
      border-radius: 15px;
      margin-top: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      border: 1px solid rgba(158, 178, 189, 0.1);
    }

    .main-nav.show {
      display: block;
      animation: slideDown 0.3s ease;
    }

    .main-nav ul {
      flex-direction: column;
      gap: 0;
      padding: 20px;
    }

    .main-nav li {
      width: 100%;
    }

    .main-nav a {
      display: block;
      width: 100%;
      text-align: center;
      padding: 15px 20px;
      margin: 5px 0;
      border-radius: 10px;
    }

    .nav-section {
      padding-bottom: 10px;
    }
  }

  @media (max-width: 480px) {
    .brand-section {
      padding: 12px 60px 8px 0; /* Ensure spacing on very small screens */
    }

    .brand-title {
      font-size: 1.5rem;
      line-height: 1.2;
    }

    .brand-subtitle {
      font-size: 0.75rem;
    }

    .menu-toggle {
      top: 16px;
      right: 15px;
      padding: 7px 11px;
      font-size: 1.2rem;
    }

    .main-nav ul {
      gap: 15px;
    }

    .main-nav a {
      font-size: 0.9rem;
      padding: 8px 12px;
    }
  }

  @keyframes slideDown {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Special page overrides for pages with colored backgrounds - REMOVED FOR CONSISTENCY */
  /* All pages now use the same white header */
</style>

<header class="main-header" id="main-header">
  <div class="header-container">
    
    <!-- Brand Section -->
    <div class="brand-section">
      <!-- Optional image slot for future logo/photo -->
      <!-- <img src="/images/header-image.jpg" alt="Header Image" class="header-image" style="display:none;" /> -->
      <h1 class="brand-title">Boshka Lighting & Electric</h1>
    </div>

    <!-- Mobile Menu Toggle Button -->
    <button class="menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="primary-navigation">
      <span class="hamburger-icon">☰</span>
    </button>

    <!-- Navigation only appears on header hover -->
    <div class="nav-section" id="nav-hover-area">
      <nav id="primary-navigation" class="main-nav" aria-label="Main navigation">
        <ul>
          <?php if (!$isHomePage): ?>
            <li><a href="<?= $baseUrl; ?>/" class="<?= $currentPage === 'index' ? 'active' : '' ?>">Home</a></li>
          <?php endif; ?>
          <li><a href="<?= $baseUrl; ?>/about.php" class="<?= $currentPage === 'about' ? 'active' : '' ?>">About</a></li>
          <li><a href="<?= $baseUrl; ?>/our-team.php" class="<?= $currentPage === 'our-team' ? 'active' : '' ?>">Our Team</a></li>
          <li><a href="<?= $baseUrl; ?>/contact.php" class="<?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a></li>
          <li><a href="<?= $baseUrl; ?>/gallery.php" class="<?= $currentPage === 'gallery' ? 'active' : '' ?>">Gallery</a></li>
          <li><a href="https://buildherstx.com/" target="_blank" rel="noopener">BuildHERS</a></li>
        </ul>
      </nav>
    </div>

  </div>
</header>

<script>
  (function () {
    const header = document.getElementById('main-header');
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-nav');
    const navSection = document.getElementById('nav-hover-area');

    let lastScrollY = window.scrollY;
    let ticking = false;

    // Mobile menu toggle
    if (toggle && nav) {
      toggle.addEventListener('click', (e) => {
        e.stopPropagation();
        const expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', String(!expanded));
        nav.classList.toggle('show');
        navSection.classList.toggle('nav-open');
      });

      // Close mobile menu when clicking outside
      document.addEventListener('click', (e) => {
        if (!header.contains(e.target) && nav.classList.contains('show')) {
          nav.classList.remove('show');
          navSection.classList.remove('nav-open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });

      // Close menu when clicking a link
      nav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          if (window.innerWidth <= 900) {
            nav.classList.remove('show');
            navSection.classList.remove('nav-open');
            toggle.setAttribute('aria-expanded', 'false');
          }
        });
      });
    }

    // Snap dropdown closed on mouseleave - REMOVED (no longer using hover dropdown)

    // Dynamic header behavior on scroll
    function updateHeader() {
      const currentScrollY = window.scrollY;
      
      if (!ticking) {
        requestAnimationFrame(() => {
          // Hide header when scrolling down, show when scrolling up
          if (currentScrollY > lastScrollY && currentScrollY > 100) {
            header.classList.add('header-hidden');
          } else if (currentScrollY < lastScrollY) {
            header.classList.remove('header-hidden');
          }

          // Add compact class when scrolled
          if (currentScrollY > 50) {
            header.classList.add('compact');
          } else {
            header.classList.remove('compact');
          }

          lastScrollY = currentScrollY;
          ticking = false;
        });
        ticking = true;
      }
    }

    // Throttled scroll listener
    window.addEventListener('scroll', updateHeader, { passive: true });

    // Smooth scroll for anchor links
    if (nav) {
      nav.querySelectorAll('a[data-scroll-target]').forEach((link) => {
        link.addEventListener('click', (event) => {
          const isHome = window.location.pathname === '/' || window.location.pathname.endsWith('/index.php');
          if (isHome) {
            event.preventDefault();
            const target = document.getElementById(link.dataset.scrollTarget);
            if (target) {
              // Close mobile menu if open
              nav.classList.remove('show');
              toggle && toggle.setAttribute('aria-expanded', 'false');
              
              // Calculate offset accounting for header height
              const headerHeight = header.offsetHeight;
              const offset = headerHeight + 20;
              const top = target.getBoundingClientRect().top + window.scrollY - offset;
              
              window.scrollTo({ 
                top: Math.max(0, top), 
                behavior: 'smooth' 
              });
            }
          }
        });
      });
    }

    // Show header on page load
    header.classList.remove('header-hidden');
    
    // Handle resize events
    window.addEventListener('resize', () => {
      if (window.innerWidth > 900 && nav) {
        nav.classList.remove('show');
        navSection.classList.remove('nav-open');
        toggle && toggle.setAttribute('aria-expanded', 'false');
      }
    });

  })();
</script>

