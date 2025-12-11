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

  /* Holiday popup styles */
  .holiday-popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    backdrop-filter: blur(3px);
  }

  .holiday-popup-overlay.show {
    opacity: 1;
    visibility: visible;
  }

  .holiday-popup {
    background: linear-gradient(135deg, #434D53 0%, #6b7177 50%, #434D53 100%);
    padding: 50px 40px;
    border-radius: 25px;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.4);
    max-width: 550px;
    margin: 20px;
    text-align: center;
    transform: scale(0.8);
    transition: transform 0.3s ease;
    position: relative;
    overflow: hidden;
    border: 3px solid rgba(196, 178, 154, 0.3);
  }

  .holiday-popup::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="snowflakes" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(196,178,154,0.3)"/><circle cx="5" cy="15" r="0.5" fill="rgba(196,178,154,0.2)"/><circle cx="15" cy="5" r="0.7" fill="rgba(196,178,154,0.25)"/></pattern></defs><rect width="100" height="100" fill="url(%23snowflakes)"/></svg>');
    animation: snow 20s linear infinite;
    z-index: -1;
  }

  @keyframes snow {
    0% { transform: translateY(-100%) translateX(-100%); }
    100% { transform: translateY(100%) translateX(100%); }
  }

  .holiday-popup-overlay.show .holiday-popup {
    transform: scale(1);
  }

  .holiday-popup h3 {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    color: #fff;
    margin-bottom: 15px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    position: relative;
  }

  .holiday-popup h3::before {
    content: '🎄';
    margin-right: 10px;
    font-size: 1.8rem;
  }

  .holiday-popup h3::after {
    content: '🎄';
    margin-left: 10px;
    font-size: 1.8rem;
  }

  .holiday-popup p {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 25px;
    line-height: 1.7;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  }

  .holiday-popup .closure-dates {
    background: rgba(196, 178, 154, 0.15);
    padding: 20px;
    border-radius: 15px;
    margin: 20px 0;
    border: 1px solid rgba(196, 178, 154, 0.3);
    backdrop-filter: blur(10px);
  }

  .holiday-popup .closure-dates strong {
    color: #C4B29A;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    font-weight: 700;
  }

  .holiday-popup-close {
    background: linear-gradient(135deg, #C4B29A 0%, #D5D7D6 50%, #C4B29A 100%);
    color: #434D53;
    border: none;
    padding: 15px 30px;
    border-radius: 30px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(196, 178, 154, 0.3);
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .holiday-popup-close:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(196, 178, 154, 0.4);
    background: linear-gradient(135deg, #D5D7D6 0%, #C4B29A 50%, #D5D7D6 100%);
  }

  .holiday-greeting {
    margin-top: 15px;
    font-style: italic;
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.1rem;
  }

  .holiday-greeting::before {
    content: '❄️ ';
  }

  .holiday-greeting::after {
    content: ' ❄️';
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
            .header-container,
            .brand-section {
              position: relative !important;
              height: 64px !important;
              min-height: 64px !important;
              align-items: center !important;
              justify-content: flex-start !important;
              z-index: 4000 !important;
            }
            .brand-title {
              position: relative !important;
              top: 0 !important;
              left: 0 !important;
              margin: 0 !important;
              padding: 0 10px !important;
              vertical-align: middle !important;
              line-height: 64px !important;
              height: 64px !important;
              display: flex !important;
              align-items: center !important;
            }
        .brand-title,
        .brand-title:hover,
        header.main-header.compact .brand-title {
          font-size: 1.1rem !important;
          transform: none !important;
          transition: none !important;
          max-width: 90vw !important;
          text-align: left !important;
          margin-left: 0 !important;
          margin-right: auto !important;
          white-space: pre-line !important;
          overflow-wrap: break-word !important;
          word-break: break-word !important;
        }
        .brand-title {
          /* Wrap at ampersand */
          word-break: keep-all !important;
        }
        .hamburger {
          z-index: 2000 !important;
          pointer-events: auto !important;
        }
    .header-container {
      position: sticky !important;
      top: 0 !important;
      width: 100% !important;
      height: 64px !important;
      z-index: 1000 !important;
      background: #fff !important;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06) !important;
      transition: none !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 0 !important;
    }

    .menu-toggle {
      display: block;
    }

    .brand-section {
      padding: 0 !important;
      max-width: 100% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      height: 64px !important;
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

    .nav-section {
      opacity: 0;
      max-height: 0;
      overflow: hidden;
      padding-bottom: 0;
      transition: opacity 0.3s, max-height 0.3s;
    }
    .nav-section.nav-open {
      opacity: 1 !important;
      max-height: 500px !important;
      overflow: visible !important;
      padding-bottom: 20px !important;
      background: rgba(255,255,255,0.98) !important;
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      width: 100vw !important;
      height: 100vh !important;
      z-index: 9999 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 0 0 100vw rgba(0,0,0,0.15) !important;
      animation: slideDown 0.3s;
    }
    .main-nav {
      display: block !important;
      width: 100% !important;
      background: none !important;
      box-shadow: none !important;
      border: none !important;
      margin-top: 0 !important;
    }
    .main-nav ul {
      display: flex !important;
      flex-direction: column !important;
      gap: 30px !important;
      align-items: center !important;
      justify-content: center !important;
      width: 100% !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    .main-nav a {
      font-size: 1.3rem !important;
      padding: 18px 0 !important;
      width: 100% !important;
      text-align: center !important;
      background: none !important;
      color: #434D53 !important;
      border-radius: 0 !important;
      box-shadow: none !important;
      margin: 0 !important;
      transition: color 0.2s;
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
      .hamburger {
        position: absolute !important;
        top: 8px !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
        width: 48px !important;
        height: 48px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        z-index: 1002 !important;
        background: rgba(255,255,255,0.95) !important;
        border-radius: 50% !important;
        box-shadow: 0 4px 16px rgba(0,0,0,0.10) !important;
        cursor: pointer !important;
        border: 1px solid #e0e0e0 !important;
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
          <li><a href="https://dementlighting.com/customerlogin" target="_blank" rel="noopener">Log In</a></li>
        </ul>
      </nav>
    </div>

  </div>
</header>

<!-- Holiday Closure Popup -->
<div id="holidayPopup" class="holiday-popup-overlay">
  <div class="holiday-popup">
    <h3>Holiday Schedule</h3>
    <p>We will be taking a well-deserved break to spend time with our families during the holidays.</p>
    <div class="closure-dates">
      <p>We will be closed:<br>
      <strong>December 17th-19th</strong><br>
      and<br>
      <strong>December 24th - January 1st</strong></p>
    </div>
    <p class="holiday-greeting">Wishing you and your family a wonderful holiday season!</p>
    <button id="closeHolidayPopup" class="holiday-popup-close">Got it!</button>
  </div>
</div>

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

  // Holiday popup functionality
  document.addEventListener('DOMContentLoaded', function() {
    // Check if popup has been shown before
    const hasSeenPopup = localStorage.getItem('holidayPopupSeen2024');
    
    if (!hasSeenPopup) {
      // Show popup after a short delay
      setTimeout(function() {
        document.getElementById('holidayPopup').classList.add('show');
      }, 1000);
    }
    
    // Close popup functionality
    document.getElementById('closeHolidayPopup').addEventListener('click', function() {
      document.getElementById('holidayPopup').classList.remove('show');
      localStorage.setItem('holidayPopupSeen2024', 'true');
    });
    
    // Close on overlay click
    document.getElementById('holidayPopup').addEventListener('click', function(e) {
      if (e.target === this) {
        this.classList.remove('show');
        localStorage.setItem('holidayPopupSeen2024', 'true');
      }
    });
  });
</script>

