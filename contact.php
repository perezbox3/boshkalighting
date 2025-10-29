<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Boshka Lighting</title>
  <meta name="description" content="Get in touch with Boshka Lighting. Find our address, phone number, business hours, and location map. Let’s illuminate your next project." />
  <link rel="canonical" href="https://boshkalighting.com/contact" />

  <!-- Open Graph -->
  <meta property="og:title" content="Contact | Boshka Lighting" />
  <meta property="og:description" content="Contact Boshka Lighting for expert lighting and electrical solutions in Weatherford, TX. We're here to help!" />
  <meta property="og:image" content="https://boshkalighting.com/images/logo.png" />
  <meta property="og:url" content="https://boshkalighting.com/contact" />
  <meta property="og:type" content="website" />

  <!-- Fonts + Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <style>
    :root {
      --accent-blue: #0F6E92;
      --background-light: #f7f7f7;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background: radial-gradient(circle at top left, #eaf4fa, #ffffff);
      color: #1a1a1a;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
      padding: 240px 40px 100px;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      margin-bottom: 50px;
    }

    .tab-links {
      display: flex;
      justify-content: center;
      gap: 60px;
      margin-bottom: 60px;
    }

    .tab-links span {
      font-size: 1.2rem;
      font-weight: 600;
      cursor: pointer;
      position: relative;
    }

    .tab-links span::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 0;
      height: 2px;
      background-color: var(--accent-blue);
      transition: width 0.3s ease;
    }

    .tab-links span:hover::after,
    .tab-links span.active::after {
      width: 100%;
    }

    .info-box {
      display: none;
      animation: fadeIn 0.4s ease-in-out;
    }

    .contact-grid {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 40px;
      margin: 50px auto 80px;
      max-width: 1100px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      padding: 50px 30px;
    }

    .contact-item {
      flex: 1;
      min-width: 200px;
      text-align: center;
    }

    .contact-item i {
      font-size: 2rem;
      color: var(--accent-blue);
      margin-bottom: 15px;
    }

    .contact-item p {
      font-size: 1.05rem;
      line-height: 1.6;
    }

    .contact-item a {
      color: var(--accent-blue);
      font-weight: 600;
      text-decoration: none;
    }

    .map-container {
      width: 100%;
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .map-container iframe {
      width: 1000px;
      height: 450px;
      border: none;
      border-radius: 12px;
    }

    footer {
      text-align: center;
      padding: 40px;
      font-size: 0.85rem;
      color: #777;
      background-color: #f7f7f7;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2.3rem;
        line-height: 1.3;
      }

      .tab-links {
        flex-direction: row;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
      }

      .contact-grid {
        flex-direction: column;
        align-items: center;
        padding: 30px 20px;
      }

      .map-container iframe {
        width: 100%;
        height: 300px;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <main>
    <h1>Connect With Us</h1>

    <div class="tab-links">
      <span onclick="showSection('visit')" id="link-visit">Visit Us</span>
      <span onclick="showSection('location')" id="link-location">Where to Visit</span>
    </div>

    <div id="visit" class="info-box">
      <div class="contact-grid">
        <div class="contact-item">
          <i class="bi bi-geo-alt"></i>
          <p><strong>Location:</strong><br>3825 Quanah Hill Rd Unit 11, Weatherford, TX 76087</p>
        </div>
        <div class="contact-item">
          <i class="bi bi-telephone"></i>
          <p><strong>Phone:</strong><br>+1 (817) - 550 - 7130</p>
        </div>
        <div class="contact-item">
          <i class="bi bi-envelope"></i>
          <p><strong>Email:</strong><br>boshka@gmail.com</p>
        </div>
        <div class="contact-item">
          <i class="bi bi-clock"></i>
          <p><strong>Hours:</strong><br><a href="/schedule">Click Here</a></p>
        </div>
      </div>
    </div>

    <div id="location" class="info-box">
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.5584979505577!2d-97.80726758494677!3d32.75767198096965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e7d4c83f66e69%3A0x2dc9482b86e716f7!2s3825%20Quanah%20Hill%20Rd%20%2311%2C%20Weatherford%2C%20TX%2076087!5e0!3m2!1sen!2sus!4v1715300103940!5m2!1sen!2sus"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </main>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
  </footer>

  <script>
    function showSection(id) {
      const visit = document.getElementById('visit');
      const location = document.getElementById('location');
      const linkVisit = document.getElementById('link-visit');
      const linkLocation = document.getElementById('link-location');

      visit.style.display = 'none';
      location.style.display = 'none';
      linkVisit.classList.remove('active');
      linkLocation.classList.remove('active');

      document.getElementById(id).style.display = 'block';
      document.getElementById('link-' + id).classList.add('active');
    }

    window.onload = () => showSection('visit');
  </script>
</body>
</html>

