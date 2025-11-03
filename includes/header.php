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
    --header-blue: #0f6e92;
    --header-light-blue: #4a9bbd;
    --header-text: #1e293b;
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
    border-bottom: 1px solid rgba(15, 110, 146, 0.1);
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
    padding: 20px 0 25px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
  }

  .brand-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    font-weight: 400;
    color: var(--header-blue);
    text-decoration: none;
    margin: 0;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
  }

  .brand-title:hover {
    color: var(--header-light-blue);
    transform: scale(1.02);
  }

  .brand-subtitle {
    font-size: 0.85rem;
    color: var(--header-light-blue);
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    opacity: 0.8;
  }

  /* Navigation Section */
  .nav-section {
    width: 100%;
    padding-bottom: 20px;
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
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 0.95rem;
    color: var(--header-text);
    padding: 10px 15px;
    border-radius: 25px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    background: transparent;
  }

  .main-nav a:hover,
  .main-nav a:focus {
    color: var(--header-white);
    background: linear-gradient(135deg, var(--header-blue), var(--header-light-blue));
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(15, 110, 146, 0.3);
  }

  /* Active page indicator */
  .main-nav a.active {
    color: var(--header-white);
    background: linear-gradient(135deg, var(--header-blue), var(--header-light-blue));
    box-shadow: 0 4px 15px rgba(15, 110, 146, 0.3);
  }

  /* Mobile menu toggle */
  .menu-toggle {
    display: none;
    position: absolute;
    top: 25px;
    right: 30px;
    background: rgba(15, 110, 146, 0.1);
    border: 2px solid rgba(15, 110, 146, 0.2);
    border-radius: 12px;
    padding: 8px 12px;
    font-size: 1.3rem;
    color: var(--header-blue);
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .menu-toggle:hover {
    background: var(--header-blue);
    color: white;
    transform: scale(1.05);
  }

  /* Compact header state (on scroll) */
  header.main-header.compact {
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
  }

  header.main-header.compact .brand-title {
    font-size: 1.8rem;
  }

  header.main-header.compact .brand-section {
    padding: 15px 0 10px;
  }

  header.main-header.compact .nav-section {
    padding-bottom: 15px;
  }

  header.main-header.compact .main-nav ul {
    gap: 25px;
  }

  /* Responsive Design */
  @media (max-width: 900px) {
    .header-container {
      padding: 0 20px;
    }

    .menu-toggle {
      display: block;
    }

    .brand-section {
      padding: 15px 0 10px;
    }

    .brand-title {
      font-size: 1.8rem;
    }

    .main-nav {
      display: none;
      width: 100%;
      background: var(--header-white);
      border-radius: 15px;
      margin-top: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      border: 1px solid rgba(15, 110, 146, 0.1);
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
    .brand-title {
      font-size: 1.6rem;
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

  /* Special page overrides for pages with colored backgrounds */
  body.schedule header.main-header,
  body.contact header.main-header {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(255,255,255,0.2);
  }

  body.schedule .brand-title,
  body.schedule .brand-subtitle,
  body.schedule .main-nav a,
  body.contact .brand-title,
  body.contact .brand-subtitle,
  body.contact .main-nav a {
    color: var(--header-white);
  }

  body.schedule .main-nav a:hover,
  body.schedule .main-nav a:focus,
  body.schedule .main-nav a.active,
  body.contact .main-nav a:hover,
  body.contact .main-nav a:focus,
  body.contact .main-nav a.active {
    background: rgba(255,255,255,0.2);
    color: var(--header-white);
    box-shadow: 0 8px 20px rgba(255,255,255,0.2);
  }

  body.schedule .menu-toggle,
  body.contact .menu-toggle {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.3);
    color: var(--header-white);
  }

  body.schedule .menu-toggle:hover,
  body.contact .menu-toggle:hover {
    background: rgba(255,255,255,0.2);
    color: var(--header-white);
  }

  /* Mobile menu styling for colored background pages */
  @media (max-width: 900px) {
    body.schedule .main-nav,
    body.contact .main-nav {
      background: rgba(255,255,255,0.95);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255,255,255,0.3);
    }

    body.schedule .main-nav a,
    body.contact .main-nav a {
      color: var(--header-blue);
    }

    body.schedule .main-nav a:hover,
    body.schedule .main-nav a:focus,
    body.schedule .main-nav a.active,
    body.contact .main-nav a:hover,
    body.contact .main-nav a:focus,
    body.contact .main-nav a.active {
      background: linear-gradient(135deg, var(--header-blue), var(--header-light-blue));
      color: var(--header-white);
      box-shadow: 0 4px 15px rgba(15, 110, 146, 0.3);
    }
  }
</style>

<header class="main-header" id="main-header">
  <div class="header-container">
    
    <!-- Brand Section -->
    <div class="brand-section">
      <?php if (!$isHomePage): ?>
        <a href="<?= $baseUrl; ?>/" class="brand-title">Boshka Lighting</a>
      <?php else: ?>
        <h1 class="brand-title">Boshka Lighting</h1>
      <?php endif; ?>
      <div class="brand-subtitle">Illuminating Excellence</div>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false">
      <span class="visually-hidden">Toggle navigation</span>
      <i class="menu-icon">☰</i>
    </button>

    <!-- Navigation Section -->
    <div class="nav-section">
      <nav id="primary-navigation" class="main-nav" aria-label="Main navigation">
        <ul>
          <?php if (!$isHomePage): ?>
            <li><a href="<?= $baseUrl; ?>/" class="<?= $currentPage === 'index' ? 'active' : '' ?>">Home</a></li>
          <?php endif; ?>
          <li><a href="<?= $baseUrl; ?>/about.php" class="<?= $currentPage === 'about' ? 'active' : '' ?>">About</a></li>
          <li><a href="<?= $baseUrl; ?>/schedule.php" class="<?= $currentPage === 'schedule' ? 'active' : '' ?>">Schedule</a></li>
          <li><a href="<?= $baseUrl; ?>/contact.php" class="<?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a></li>
          <li><a href="https://boshkaelectric.com/" target="_blank" rel="noopener">Electric</a></li>
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
    
    let lastScrollY = window.scrollY;
    let ticking = false;

    // Mobile menu toggle
    if (toggle && nav) {
      toggle.addEventListener('click', () => {
        const expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', String(!expanded));
        nav.classList.toggle('show');
      });

      // Close mobile menu when clicking outside
      document.addEventListener('click', (e) => {
        if (!header.contains(e.target) && nav.classList.contains('show')) {
          nav.classList.remove('show');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    }

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
        toggle && toggle.setAttribute('aria-expanded', 'false');
      }
    });

  })();
</script>

