<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meet Ashtyn Boshka | Administrative Assistant | Boshka Lighting</title>
  <meta name="description" content="Meet Ashtyn Boshka, Administrative Assistant at Boshka Lighting. Fourth generation in the family business, studying pediatric nursing at Weatherford College." />
  <link rel="canonical" href="https://boshkalighting.com/ashtyn-boshka" />

  <!-- Open Graph -->
  <meta property="og:title" content="Meet Ashtyn Boshka | Administrative Assistant | Boshka Lighting" />
  <meta property="og:description" content="Meet Ashtyn Boshka, fourth generation in the family lighting business, balancing work with nursing studies." />
  <meta property="og:image" content="https://boshkalighting.com/images/bing.jpg" />
  <meta property="og:url" content="https://boshkalighting.com/ashtyn-boshka" />
  <meta property="og:type" content="profile" />

  <!-- Favicon -->
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
  <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">

  <style>
    /* ===== CSS VARIABLES ===== */
    :root {
      --accent-blue: #0F6E92;
    }

    /* ===== GLOBAL RESET & BASE STYLES ===== */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f7f7f7;
      color: #1a1a1a;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ===== BACK NAVIGATION ===== */
    .back-link {
      position: absolute;
      top: 200px;
      left: 250px;
      font-size: 1.1rem;
      font-weight: 600;
      color: #999;
      text-decoration: none;
      z-index: 5;
      padding: 12px 20px;
      border-radius: 25px;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .back-link:hover {
      color: white;
      background-color: var(--accent-blue);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* ===== PROFILE HEADER SECTION ===== */
    .profile-header {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(15, 110, 146, 0.08);
      margin-top: 120px;
      padding: 120px 40px 100px;
      flex-wrap: wrap;
      gap: 40px;
    }

    /* ===== PROFILE IMAGE ===== */
    .profile-image {
      max-width: 380px;
      border-radius: 16px;
      overflow: hidden;
      flex-shrink: 0;
    }

    .profile-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    /* ===== PROFILE INFORMATION ===== */
    .profile-info {
      max-width: 600px;
      text-align: left;
    }

    .profile-info h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      margin-bottom: 12px;
    }

    .profile-info h3 {
      font-size: 1.2rem;
      color: var(--accent-blue);
      margin-bottom: 30px;
      font-weight: 600;
    }

    /* ===== BIOGRAPHY SECTION ===== */
    .bio-section {
      max-width: 900px;
      margin: 60px auto;
      padding: 0 40px;
      font-size: 1.05rem;
      line-height: 1.7;
    }

    .bio-section p {
      margin-bottom: 24px;
      color: #444;
    }

    /* ===== TEXT HIGHLIGHTING ===== */
    .highlight {
      color: var(--accent-blue);
      font-weight: 600;
    }

    /* ===== SITE FOOTER ===== */
    footer {
      text-align: center;
      padding: 40px 20px;
      font-size: 0.85rem;
      color: #777;
      background-color: #f7f7f7;
      margin-top: auto;
    }

    /* ===== MOBILE RESPONSIVE DESIGN ===== */
    @media (max-width: 768px) {
      .back-link {
        top: 180px;
        left: 20px;
        font-size: 1rem;
        padding: 10px 16px;
      }

      .profile-header {
        flex-direction: column;
        text-align: center;
        padding: 80px 20px 60px;
      }

      .profile-info h1 {
        font-size: 2.2rem;
      }

      .bio-section {
        padding: 0 20px;
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <a href="/about.php" class="back-link">&#8592; Back to Team</a>

  <section class="profile-header">
    <div class="profile-info">
      <h1>Ashtyn Boshka</h1>
      <h3>Administrative Assistant</h3>
    </div>
    <div class="profile-image">
      <img src="images/ashtyn-boshka.jpeg" alt="Portrait of Ashtyn Boshka">
    </div>
  </section>

  <section class="bio-section">
    <p>
      Ashtyn grew up surrounded by lighting — as the daughter of the owners and a <span class="highlight">proud fourth generation in the family business</span>, she knows the ins and outs of the showroom better than most.
    </p>
    <p>
      Even though she's got lighting in her DNA, Ashtyn's true calling is in <span class="highlight">caring for others</span>. She's currently attending Weatherford College, where she's studying to become a pediatric nurse. She's balancing school with hands-on experience in childcare and healthcare, and her professors have been cheering her on every step of the way.
    </p>
    <p>
      Before college, Ashtyn was <span class="highlight">voted VIP of her varsity tennis team</span> in high school, proving that her drive and determination shine through in everything she does — whether it's in the classroom, on the court, or in the showroom.
    </p>
    <p>
      When you visit our showroom, you'll likely meet Ashtyn and experience firsthand her dedication to helping others and her deep knowledge of our family business. She brings both professional expertise and genuine care to every interaction.
    </p>
  </section>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting & Electric. All rights reserved.
  </footer>
</body>
</html>