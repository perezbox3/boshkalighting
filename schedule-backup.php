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
      --accent-blue: #0f6e92;
      --light-blue: #4a9bbd;
      --lighter-blue: #e8f4f8;
      --green: #10b981;
      --red: #ef4444;
      --orange: #f59e0b;
      --gray-light: #f8fafc;
      --gray-medium: #e2e8f0;
      --gray-dark: #64748b;
      --text-dark: #1e293b;
      --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      color: var(--text-dark);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background: linear-gradient(135deg, #f8fafc 0%, #e8f4f8 100%);
    }

    .schedule-hero {
      background: linear-gradient(135deg, var(--accent-blue) 0%, var(--light-blue) 100%);
      color: #fff;
      padding: 160px 20px 80px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .schedule-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
      opacity: 0.3;
    }

    .schedule-hero-content {
      position: relative;
      z-index: 1;
    }

    .schedule-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      margin-bottom: 16px;
      font-weight: 400;
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .schedule-hero p {
      font-size: 1.3rem;
      max-width: 700px;
      margin: 0 auto 30px;
      line-height: 1.6;
      opacity: 0.95;
    }

    .current-status {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      padding: 12px 24px;
      border-radius: 50px;
      border: 1px solid rgba(255,255,255,0.2);
      font-weight: 600;
      margin-top: 20px;
      animation: pulse 2s infinite;
    }

    .status-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--green);
      animation: blink 1.5s infinite;
    }

    .status-dot.closed {
      background: var(--red);
    }

    .status-dot.appointment-only {
      background: var(--orange);
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.5; }
    }

    main {
      flex: 1;
      padding: 80px 20px 60px;
    }

    .schedule-container {
      max-width: 1000px;
      margin: 0 auto;
    }

    .current-time {
      text-align: center;
      margin-bottom: 50px;
    }

    .time-display {
      font-size: 3rem;
      font-weight: 600;
      color: var(--accent-blue);
      margin-bottom: 10px;
      font-family: 'Montserrat', monospace;
      text-shadow: 0 2px 4px rgba(15, 110, 146, 0.2);
    }

    .date-display {
      font-size: 1.2rem;
      color: var(--gray-dark);
      font-weight: 500;
    }

    .schedule-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin-bottom: 60px;
    }

    .day-card {
      background: white;
      border-radius: 16px;
      padding: 24px;
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
      border: 2px solid transparent;
      position: relative;
      overflow: hidden;
    }

    .day-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, var(--accent-blue), var(--light-blue));
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }

    .day-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-lg);
    }

    .day-card:hover::before {
      transform: scaleX(1);
    }

    .day-card.today {
      border-color: var(--accent-blue);
      background: linear-gradient(135deg, white 0%, var(--lighter-blue) 100%);
      transform: scale(1.02);
    }

    .day-card.today::before {
      transform: scaleX(1);
    }

    .day-name {
      font-size: 1.4rem;
      font-weight: 600;
      color: var(--accent-blue);
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .day-name .today-badge {
      background: var(--accent-blue);
      color: white;
      font-size: 0.7rem;
      padding: 4px 8px;
      border-radius: 12px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .day-hours {
      font-size: 1.1rem;
      color: var(--text-dark);
      margin-bottom: 8px;
      font-weight: 500;
    }

    .day-status {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.9rem;
      font-weight: 600;
      padding: 6px 12px;
      border-radius: 20px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .day-status.open {
      background: rgba(16, 185, 129, 0.1);
      color: var(--green);
    }

    .day-status.closed {
      background: rgba(239, 68, 68, 0.1);
      color: var(--red);
    }

    .day-status.appointment {
      background: rgba(245, 158, 11, 0.1);
      color: var(--orange);
    }

    .services-banner {
      background: linear-gradient(135deg, var(--lighter-blue) 0%, white 100%);
      padding: 60px 20px;
      text-align: center;
      margin-bottom: 40px;
    }

    .services-banner h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      color: var(--accent-blue);
      margin-bottom: 16px;
    }

    .services-banner > p {
      font-size: 1.2rem;
      color: var(--gray-dark);
      margin-bottom: 50px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .services-flow {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      margin-bottom: 40px;
      flex-wrap: wrap;
    }

    .service-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 30px 20px;
      background: white;
      border-radius: 16px;
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
      min-width: 200px;
      border: 2px solid transparent;
    }

    .service-item:hover {
      transform: translateY(-8px);
      box-shadow: var(--shadow-lg);
      border-color: var(--accent-blue);
    }

    .service-icon {
      font-size: 3rem;
      margin-bottom: 16px;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }

    .service-text h3 {
      font-size: 1.3rem;
      color: var(--accent-blue);
      margin-bottom: 8px;
      font-weight: 600;
    }

    .service-text p {
      color: var(--gray-dark);
      font-size: 0.95rem;
      margin: 0;
      line-height: 1.4;
    }

    .service-connector {
      font-size: 2rem;
      color: var(--accent-blue);
      font-weight: bold;
      margin: 0 10px;
      opacity: 0.6;
    }

    .cta-section {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .cta-button {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 16px 32px;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      transition: all 0.3s ease;
      border: 2px solid;
    }

    .cta-button.primary {
      background: var(--accent-blue);
      color: white;
      border-color: var(--accent-blue);
    }

    .cta-button.primary:hover {
      background: var(--light-blue);
      border-color: var(--light-blue);
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    .cta-button.secondary {
      background: white;
      color: var(--accent-blue);
      border-color: var(--accent-blue);
    }

    .cta-button.secondary:hover {
      background: var(--accent-blue);
      color: white;
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    .emergency-strip {
      background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
      padding: 20px;
      text-align: center;
      box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
    }

    .emergency-content {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
      max-width: 800px;
      margin: 0 auto;
    }

    .emergency-icon {
      font-size: 1.5rem;
      animation: pulse-red 2s infinite;
    }

    @keyframes pulse-red {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.7; }
    }

    .emergency-text {
      font-weight: 600;
      color: white;
      font-size: 1.1rem;
    }

    .emergency-link {
      color: white;
      text-decoration: none;
      font-weight: 700;
      padding: 8px 20px;
      background: rgba(255,255,255,0.2);
      border-radius: 25px;
      border: 2px solid rgba(255,255,255,0.3);
      transition: all 0.3s ease;
    }

    .emergency-link:hover {
      background: rgba(255,255,255,0.3);
      border-color: rgba(255,255,255,0.5);
      transform: scale(1.05);
    }

    footer.site-footer {
      text-align: center;
      padding: 40px 20px;
      font-size: 0.9rem;
      color: #fff;
      background: linear-gradient(135deg, var(--accent-blue) 0%, var(--light-blue) 100%);
    }

    @media (max-width: 768px) {
      .schedule-hero h1 {
        font-size: 2.5rem;
      }

      .schedule-hero p {
        font-size: 1.1rem;
      }

      .time-display {
        font-size: 2.2rem;
      }

      .schedule-grid {
        grid-template-columns: 1fr;
        gap: 16px;
      }

      .day-card {
        padding: 20px;
      }

      .services-flow {
        flex-direction: column;
        gap: 20px;
      }

      .service-connector {
        transform: rotate(90deg);
        margin: 10px 0;
      }

      .service-item {
        min-width: 100%;
        padding: 25px 15px;
      }

      .cta-section {
        flex-direction: column;
        align-items: center;
      }

      .cta-button {
        width: 250px;
        justify-content: center;
      }

      .emergency-content {
        flex-direction: column;
        gap: 10px;
      }

      .emergency-text {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body class="schedule">
  <?php include 'includes/header.php'; ?>

    <section class="schedule-hero">
    <div class="schedule-hero-content">
      <h1>Business Hours</h1>
      <p>Professional lighting solutions with convenient scheduling. Visit us during business hours or schedule an appointment that works for you.</p>
      <div class="current-status" id="currentStatus">
        <div class="status-dot" id="statusDot"></div>
        <span id="statusText">Loading status...</span>
      </div>
    </div>
  </section>

  <main>
    <div class="schedule-container">
      <div class="current-time">
        <div class="time-display" id="currentTime">--:--:--</div>
        <div class="date-display" id="currentDate">Loading...</div>
      </div>

      <div class="schedule-grid">
        <div class="day-card" data-day="monday">
          <div class="day-name">
            Monday
            <span class="today-badge" style="display: none;">Today</span>
          </div>
          <div class="day-hours">9:00 AM – 5:00 PM</div>
          <div class="day-status open">
            <span>●</span> Open
          </div>
        </div>

        <div class="day-card" data-day="tuesday">
          <div class="day-name">
            Tuesday
            <span class="today-badge" style="display: none;">Today</span>
          </div>
          <div class="day-hours">9:00 AM – 5:00 PM</div>
          <div class="day-status open">
            <span>●</span> Open
          </div>
        </div>

        <div class="day-card" data-day="wednesday">
          <div class="day-name">
            Wednesday
            <span class="today-badge" style="display: none;">Today</span>
          </div>
          <div class="day-hours">9:00 AM – 5:00 PM</div>
          <div class="day-status open">
            <span>●</span> Open
          </div>
        </div>

        <div class="day-card" data-day="thursday">
          <div class="day-name">
            Thursday
            <span class="today-badge" style="display: none;">Today</span>
          </div>
          <div class="day-hours">9:00 AM – 5:00 PM</div>
          <div class="day-status open">
            <span>●</span> Open
          </div>
        </div>

        <div class="day-card" data-day="friday">
          <div class="day-name">
            Friday
            <span class="today-badge" style="display: none;">Today</span>
          </div>
          <div class="day-hours">9:00 AM – 2:00 PM<br><small style="color: #64748b; font-weight: 400;">2:00 PM+ By Appointment</small></div>
          <div class="day-status open">
            <span>●</span> Open
          </div>
        </div>

        <div class="day-card" data-day="saturday">
          <div class="day-name">
            Saturday
            <span class="today-badge" style="display: none;">Today</span>
          </div>
          <div class="day-hours">By Appointment Only</div>
          <div class="day-status appointment">
            <span>●</span> Appointment
          </div>
        </div>

        <div class="day-card" data-day="sunday">
          <div class="day-name">
            Sunday
            <span class="today-badge" style="display: none;">Today</span>
          </div>
          <div class="day-hours">Closed</div>
          <div class="day-status closed">
            <span>●</span> Closed
          </div>
        </div>
      </div>


    </div>
  </main>

  <div class="emergency-strip">
    <div class="emergency-content">
      <span class="emergency-icon">🚨</span>
      <span class="emergency-text">Electrical Emergency?</span>
      <a href="tel:+1234567890" class="emergency-link">24/7 Emergency Line: (123) 456-7890</a>
    </div>
  </div>

  <footer class="site-footer">
    &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
  </footer>

  <script>
          
          <div class="service-connector">→</div>
          
          <div class="service-item">
            <div class="service-icon">🏠</div>
            <div class="service-text">
              <h3>On-Site Visits</h3>
              <p>We come to your location</p>
            </div>
          </div>
          
          <div class="service-connector">→</div>
          
          <div class="service-item">
            <div class="service-icon">💰</div>
            <div class="service-text">
              <h3>Free Estimates</h3>
              <p>Transparent, detailed quotes</p>
            </div>
          </div>
        </div>
        
        <div class="cta-section">
          <a href="tel:+1234567890" class="cta-button primary">
            📞 Call Now
          </a>
          <a href="mailto:info@boshkalighting.com" class="cta-button secondary">
            ✉️ Email Us
          </a>
        </div>
        
        <div class="info-grid">
          <div class="info-item" data-info="extended-hours">
            <div class="info-header">
              <h3>🕒 Extended Hours Available</h3>
              <span class="dropdown-arrow">▼</span>
            </div>
            <div class="info-content">
              <p>Need to meet outside regular hours? We offer flexible scheduling for consultations and installations by appointment.</p>
              <div class="contact-info">
                <strong>Schedule After Hours:</strong>
                Call us at <a href="tel:+1234567890">(123) 456-7890</a> or email <a href="mailto:appointments@boshkalighting.com">appointments@boshkalighting.com</a>
              </div>
            </div>
          </div>
          
          <div class="info-item" data-info="emergency">
            <div class="info-header">
              <h3>� Emergency Services</h3>
              <span class="dropdown-arrow">▼</span>
            </div>
            <div class="info-content">
              <p>Electrical emergencies don't wait for business hours. Contact us for urgent electrical repair needs including power outages, electrical fires, and safety hazards.</p>
              <div class="contact-info">
                <strong>24/7 Emergency Line:</strong>
                <a href="tel:+1234567890">(123) 456-7890</a>
                <br><small>Additional charges may apply for emergency calls</small>
              </div>
            </div>
          </div>
          
          <div class="info-item" data-info="consultations">
            <div class="info-header">
              <h3>🏠 On-Site Consultations</h3>
              <span class="dropdown-arrow">▼</span>
            </div>
            <div class="info-content">
              <p>We'll come to you! Schedule an in-home or on-site consultation to discuss your lighting project needs, assess your space, and provide expert recommendations.</p>
              <div class="contact-info">
                <strong>Book Consultation:</strong>
                Available Monday-Saturday<br>
                <a href="mailto:consultations@boshkalighting.com">consultations@boshkalighting.com</a>
              </div>
            </div>
          </div>
          
          <div class="info-item" data-info="estimates">
            <div class="info-header">
              <h3>� Free Estimates</h3>
              <span class="dropdown-arrow">▼</span>
            </div>
            <div class="info-content">
              <p>Get a detailed quote for your project. We provide transparent pricing with no hidden fees, including material costs, labor, and timeline estimates.</p>
              <div class="contact-info">
                <strong>Request Estimate:</strong>
                Typically provided within 24-48 hours<br>
                <a href="mailto:estimates@boshkalighting.com">estimates@boshkalighting.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="emergency-strip">
    <div class="emergency-content">
      <span class="emergency-icon">🚨</span>
      <span class="emergency-text">Electrical Emergency?</span>
      <a href="tel:+1234567890" class="emergency-link">24/7 Emergency Line: (123) 456-7890</a>
    </div>
  </div>

  <footer class="site-footer">
    &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
  </footer>

  <script>
    // Business hours configuration
    const businessHours = {
      monday: { open: 9, close: 17 },
      tuesday: { open: 9, close: 17 },
      wednesday: { open: 9, close: 17 },
      thursday: { open: 9, close: 17 },
      friday: { open: 9, close: 14, appointmentAfter: 14 }, // 2pm = 14:00 in 24hr format
      saturday: { appointment: true },
      sunday: { closed: true }
    };

    // Day names mapping
    const dayNames = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

    function updateTime() {
      const now = new Date();
      
      // Update time display
      const timeString = now.toLocaleTimeString('en-US', {
        hour12: true,
        hour: 'numeric',
        minute: '2-digit',
        second: '2-digit'
      });
      document.getElementById('currentTime').textContent = timeString;

      // Update date display
      const dateString = now.toLocaleDateString('en-US', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });
      document.getElementById('currentDate').textContent = dateString;

      // Get current day and time
      const currentDay = dayNames[now.getDay()];
      const currentHour = now.getHours();

      // Highlight current day and update status
      document.querySelectorAll('.day-card').forEach(card => {
        const cardDay = card.getAttribute('data-day');
        const todayBadge = card.querySelector('.today-badge');
        const dayStatus = card.querySelector('.day-status');
        
        if (cardDay === currentDay) {
          card.classList.add('today');
          todayBadge.style.display = 'inline';
          
          // Update Friday status dynamically
          if (cardDay === 'friday') {
            if (currentHour >= 14) { // 2pm or later
              dayStatus.className = 'day-status appointment';
              dayStatus.innerHTML = '<span>●</span> Appointment';
            } else if (currentHour >= 9 && currentHour < 14) {
              dayStatus.className = 'day-status open';
              dayStatus.innerHTML = '<span>●</span> Open';
            } else {
              dayStatus.className = 'day-status closed';
              dayStatus.innerHTML = '<span>●</span> Closed';
            }
          }
        } else {
          card.classList.remove('today');
          todayBadge.style.display = 'none';
        }
      });

      // Update current status
      updateBusinessStatus(currentDay, currentHour);
    }

    function updateBusinessStatus(currentDay, currentHour) {
      const statusDot = document.getElementById('statusDot');
      const statusText = document.getElementById('statusText');
      const hours = businessHours[currentDay];

      if (hours.closed) {
        statusDot.className = 'status-dot closed';
        statusText.textContent = 'Currently Closed';
      } else if (hours.appointment) {
        statusDot.className = 'status-dot appointment-only';
        statusText.textContent = 'Available by Appointment';
      } else if (hours.appointmentAfter && currentHour >= hours.appointmentAfter) {
        // Special case for Friday after 2pm
        statusDot.className = 'status-dot appointment-only';
        statusText.textContent = 'Available by Appointment';
      } else if (currentHour >= hours.open && currentHour < hours.close) {
        statusDot.className = 'status-dot';
        statusText.textContent = 'Currently Open';
      } else {
        statusDot.className = 'status-dot closed';
        if (currentHour < hours.open) {
          const hoursUntilOpen = hours.open - currentHour;
          statusText.textContent = `Opens in ${hoursUntilOpen} hour${hoursUntilOpen === 1 ? '' : 's'}`;
        } else if (hours.appointmentAfter && currentHour >= hours.close) {
          // Handle Friday after normal hours but still appointment available
          statusText.textContent = 'Available by Appointment';
        } else {
          statusText.textContent = 'Closed for Today';
        }
      }
    }

    // Add hover effects to day cards
    function addInteractivity() {
      document.querySelectorAll('.day-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-4px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
          if (!this.classList.contains('today')) {
            this.style.transform = '';
          }
        });
      });

      // Add hover effects to service items
      document.querySelectorAll('.service-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        item.addEventListener('mouseleave', function() {
          this.style.transform = '';
        });
      });

      // Add click effects to CTA buttons
      document.querySelectorAll('.cta-button').forEach(button => {
        button.addEventListener('click', function() {
          this.style.transform = 'scale(0.95)';
          setTimeout(() => {
            this.style.transform = '';
          }, 150);
        });
      });
    }

    // Animate cards on load
    function animateCardsOnLoad() {
      const cards = document.querySelectorAll('.day-card');
      cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
          card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        }, index * 100);
      });
    }

    // Initialize everything when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      updateTime();
      addInteractivity();
      animateCardsOnLoad();
      
      // Update time every second
      setInterval(updateTime, 1000);
    });

    // Add a subtle parallax effect to the hero section
    window.addEventListener('scroll', function() {
      const scrolled = window.pageYOffset;
      const hero = document.querySelector('.schedule-hero');
      if (hero) {
        hero.style.transform = `translateY(${scrolled * 0.3}px)`;
      }
    });
  </script>
</body>
</html>

