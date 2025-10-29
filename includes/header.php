<style>
  :root {
    --accent-blue: #0F6E92;
  }

  header {
    width: 100%;
    padding: 20px 250px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: transparent;
    position: absolute;
    top: 0;
    z-index: 10;
    font-family: 'Red Hat Display', sans-serif;
  }

  .logo img {
    height: 120px;
    object-fit: contain;
  }

  nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
  }

  nav ul li a {
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    font-family: 'Red Hat Display', sans-serif;
    transition: color 0.2s ease-in-out;
    color: #1a1a1a;
  }

  nav ul li a:hover {
    color: var(--accent-blue);
  }

  .menu-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 2rem;
    color: #000;
    cursor: pointer;
  }

  /* Special styling for schedule.php */
  <?php if (basename($_SERVER['PHP_SELF']) === 'schedule.php'): ?>
  nav ul li a {
    color: white;
  }

  nav ul li a:hover {
    color: #fff;
    opacity: 0.8;
  }

  .menu-toggle {
    color: white;
  }
  <?php endif; ?>

  @media (max-width: 1279px) {
    header {
      padding: 20px;
      flex-direction: row;
      justify-content: space-between;
    }

    .menu-toggle {
      display: block;
    }

    .main-nav {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 100%;
      right: 20px;
      background: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 10px 20px;
      z-index: 100;
    }

    .main-nav.show {
      display: flex;
    }

    .main-nav ul {
      flex-direction: column;
      gap: 10px;
    }

    .main-nav ul li a {
      font-size: 1rem;
      padding: 5px 0;
      color: #1a1a1a;
    }

    <?php if (basename($_SERVER['PHP_SELF']) === 'schedule.php'): ?>
    .main-nav {
      background-color: #333;
    }

    .main-nav ul li a {
      color: white;
    }

    .main-nav ul li a:hover {
      color: #ccc;
    }
    <?php endif; ?>
  }
</style>

<!-- Include Red Hat Display font -->
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&display=swap" rel="stylesheet">

<?php $isHomePage = basename($_SERVER['PHP_SELF']) === 'index.php'; ?>

<header>
  <div class="logo">
    <?php if (!$isHomePage): ?>
      <a href="/"><img src="images/logo.png" alt="Boshka Lighting Logo"></a>
    <?php else: ?>
      <div style="height: 120px; width: 200px; visibility: hidden;"></div>
    <?php endif; ?>
  </div>

  <button class="menu-toggle" onclick="toggleMenu()">☰</button>

<script>
  function toggleMenu() {
    const nav = document.querySelector('.main-nav');
    nav.classList.toggle('show');
  }

  function handleProductScroll(e) {
    const isHome = window.location.pathname === '/' || window.location.pathname === '/index.php';
    if (isHome) {
      e.preventDefault();
      const productSection = document.querySelector('#products');
      if (productSection) {
        const offset = window.innerHeight / 4;
        const top = productSection.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    } else {
      window.location.href = "/#products";
    }
  }
</script>

<nav class="main-nav">
  <ul>
    <?php if (!$isHomePage): ?>
      <li><a href="/">Home</a></li>
    <?php endif; ?>
    <li><a href="/schedule">Schedule</a></li>
    <li><a href="https://boshkaelectric.com/" target="_blank">Electric</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="#products" onclick="handleProductScroll(event)">Products</a></li>
    <li><a href="#">Wishlist</a></li>
  </ul>
</nav>

</header>

<script>
  function toggleMenu() {
    const nav = document.querySelector('.main-nav');
    nav.classList.toggle('show');
  }
</script>

