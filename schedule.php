<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Business Hours | Boshka Lighting</title>
  <meta name="description" content="View the official business hours of Boshka Lighting. We're open weekdays and available on Saturdays by appointment for all your lighting and electrical needs." />
  <link rel="canonical" href="https://boshkalighting.com/schedule" />

  <!-- Open Graph -->
  <meta property="og:title" content="Business Hours | Boshka Lighting" />
  <meta property="og:description" content="Explore Boshka Lighting's business hours and plan your visit. Available Monday through Friday and by appointment on Saturdays." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://boshkalighting.com/schedule" />
  <meta property="og:image" content="https://boshkalighting.com/images/logo.png" />

  <!-- Fonts & Favicons -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="manifest" href="/site.webmanifest">

  <style>
    :root {
      --accent-blue: #0F6E92;
      --light-blue-bg: linear-gradient(135deg, #0F6E92, #1684ae);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      color: #1a1a1a;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #f7f7f7;
    }

    .schedule-hero {
      background: var(--light-blue-bg);
      color: white;
      padding: 160px 20px 80px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .schedule-hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background-image: url('/images/pattern-light.svg'); /* optional */
      opacity: 0.08;
      z-index: 1;
    }

    .schedule-hero h1,
    .schedule-hero p {
      position: relative;
      z-index: 2;
    }

    .schedule-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      margin-bottom: 12px;
    }

    .schedule-hero p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto;
      line-height: 1.6;
    }

    main {
      flex: 1;
      padding: 60px 20px 40px;
      text-align: center;
    }

    .schedule-table {
      margin: 0 auto;
      max-width: 500px;
      width: 100%;
      border-collapse: collapse;
      font-size: 1rem;
    }

    .schedule-table th,
    .schedule-table td {
      padding: 14px 16px;
      border-bottom: 1px solid #ddd;
    }

    .schedule-table th {
      text-align: left;
      background-color: #eaf9fc;
      color: var(--accent-blue);
      font-weight: 600;
    }

    .schedule-table td {
      color: #333;
    }

    footer {
      text-align: center;
      padding: 30px 20px;
      font-size: 0.85rem;
      color: #fff;
      background-color: var(--accent-blue);
    }

    @media (max-width: 768px) {
      .schedule-hero h1 {
        font-size: 2.2rem;
      }

      .schedule-hero p {
        font-size: 1rem;
      }

      .schedule-table {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <section class="schedule-hero">
    <h1>Our Hours</h1>
    <p>We’re here to help. Check when we’re open and plan your visit or consultation.</p>
  </section>

  <main>
    <table class="schedule-table">
      <thead>
        <tr>
          <th>Day</th>
          <th>Hours</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Monday</td><td>9:00 AM – 5:00 PM</td></tr>
        <tr><td>Tuesday</td><td>9:00 AM – 5:00 PM</td></tr>
        <tr><td>Wednesday</td><td>9:00 AM – 5:00 PM</td></tr>
        <tr><td>Thursday</td><td>9:00 AM – 5:00 PM</td></tr>
        <tr><td>Friday</td><td>9:00 AM – 3:00 PM</td></tr>
        <tr><td>Saturday</td><td>By Appointment Only</td></tr>
        <tr><td>Sunday</td><td>Closed</td></tr>
      </tbody>
    </table>
  </main>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
  </footer>
</body>
</html>

