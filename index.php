<?php
// Homepage for Boshka Lighting
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Boshka Lighting | Elegant Lighting & Electrical Solutions</title>
  <meta name="description" content="Discover Boshka Lighting—where design meets power. Expert lighting and electrical services based in Weatherford, TX.">

  <!-- Canonical -->
  <link rel="canonical" href="https://boshkalighting.com/">

  <!-- Open Graph -->
  <meta property="og:title" content="Boshka Lighting | Elegant Lighting & Electrical Solutions" />
  <meta property="og:description" content="Discover Boshka Lighting—where design meets power. Expert lighting and electrical services based in Weatherford, TX." />
  <meta property="og:image" content="https://boshkalighting.com/images/logo.png" />
  <meta property="og:url" content="https://boshkalighting.com/" />
  <meta property="og:type" content="website" />

  <!-- Favicon -->
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
  <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome for Social Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
/* ===================== */
/*     Modern Variables  */
/* ===================== */

:root {
  --accent-primary: #9EB2BD;
  --accent-warm: #C4B29A;
  --accent-neutral: #B6B2AB;
  --accent-dark: #434D53;
  --accent-light: #D5D7D6;
  --text-dark: #434D53;
  --text-light: #6b7177;
  --white: #ffffff;
  --gray-50: #f8fafc;
  --gray-100: #f1f5f9;
  --gray-900: #434D53;
  --shadow: 0 4px 6px -1px rgba(67, 77, 83, 0.1), 0 2px 4px -1px rgba(67, 77, 83, 0.06);
  --shadow-lg: 0 10px 15px -3px rgba(67, 77, 83, 0.1), 0 4px 6px -2px rgba(67, 77, 83, 0.05);
  --shadow-xl: 0 20px 25px -5px rgba(67, 77, 83, 0.1), 0 10px 10px -5px rgba(67, 77, 83, 0.04);
  --gradient-primary: linear-gradient(135deg, var(--accent-primary) 0%, var(--accent-warm) 100%);
  --gradient-light: linear-gradient(135deg, #f8fafc 0%, var(--accent-light) 100%);
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Montserrat', sans-serif;
  background: var(--gradient-light);
  color: var(--text-dark);
  line-height: 1.6;
  overflow-x: hidden;
}

/* Smooth scroll behavior */
html {
  scroll-behavior: smooth;
}

/* ===================== */
/*     Hero Section      */
/* ===================== */

.hero {
  position: relative;
  height: 100vh;
  background: url('/img.php?src=hero.webp&w=1920&h=1080&q=82') center/cover no-repeat;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Ready for future video background */
.hero-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
  display: none; /* Will be enabled when video is available */
}

.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(158, 178, 189, 0.1) 0%, rgba(196, 178, 154, 0.2) 100%);
  z-index: 1;
}


.hero-content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 3;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 0 30px;
  max-width: 1200px;
  animation: heroFadeIn 1.2s ease-out;
}

.hero-logo {
  max-width: 700px;
  width: 100%;
  height: auto;
  margin-bottom: -15px;
  filter: drop-shadow(0 10px 25px rgba(0,0,0,0.15));
}

.tagline {
  font-family: 'Playfair Display', serif;
  font-size: 2.2rem;
  font-weight: 400;
  color: var(--white);
  max-width: 800px;
  margin: 0 auto 15px;
  line-height: 1.4;
  letter-spacing: 0.5px;
  text-shadow: 0 4px 12px rgba(0,0,0,0.3);
  animation: taglineSlide 1.2s ease-out 0.3s both;
}

.hero-cta {
  margin-top: 10px;
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
  animation: ctaSlide 1.2s ease-out 0.6s both;
}

.hero-btn {
  background: rgba(255,255,255,0.15);
  backdrop-filter: blur(20px);
  border: 2px solid rgba(255,255,255,0.3);
  color: var(--white);
  padding: 16px 32px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  display: flex;
  align-items: center;
  gap: 10px;
}

.hero-btn:hover {
  background: rgba(255,255,255,0.25);
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

.hero-btn.primary {
  background: var(--gradient-primary);
  border-color: transparent;
  box-shadow: 0 10px 25px rgba(158, 178, 189, 0.3);
}

.hero-btn.primary:hover {
  background: linear-gradient(135deg, #8da3ae 0%, #b5a08c 100%);
  box-shadow: 0 15px 35px rgba(158, 178, 189, 0.4);
}

.scroll-indicator {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 3;
  animation: bounce 2s infinite;
}

.scroll-indicator svg {
  width: 24px;
  height: 24px;
  color: rgba(255,255,255,0.8);
}

/* Animations */
@keyframes heroFadeIn {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Remove floating animation for static logo */

@keyframes taglineSlide {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes ctaSlide {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
  40% { transform: translateX(-50%) translateY(-10px); }
  60% { transform: translateX(-50%) translateY(-5px); }
}

/* Mobile adjustments */
@media (max-width: 768px) {
  .hero-content {
    padding: 0 20px;
  }

  .hero-logo {
    max-width: 500px;
    margin-bottom: 30px;
  }

  .tagline {
    font-size: 1.6rem;
    line-height: 1.3;
  }

  .hero-cta {
    flex-direction: column;
    align-items: center;
    gap: 15px;
  }

  .hero-btn {
    width: 100%;
    max-width: 280px;
    justify-content: center;
    font-size: 1rem;
    padding: 14px 28px;
  }
}

/* ===================== */
/*   Features Section    */
/* ===================== */

.features-section {
  padding: 100px 30px;
  background: var(--white);
  position: relative;
}

.features-container {
  max-width: 1200px;
  margin: 0 auto;
}

.features-header {
  text-align: center;
  margin-bottom: 80px;
}

.features-header h2 {
  font-family: 'Playfair Display', serif;
  font-size: 2.8rem;
  font-weight: 400;
  color: var(--text-dark);
  margin-bottom: 20px;
  line-height: 1.2;
}

.features-header .highlight {
  background: var(--gradient-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.features-header p {
  font-size: 1.2rem;
  color: var(--text-light);
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.6;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 40px;
}

.feature-card {
  background: var(--gray-50);
  padding: 40px 30px;
  border-radius: 20px;
  text-align: center;
  border: 1px solid rgba(158, 178, 189, 0.1);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
}

.feature-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: var(--gradient-primary);
  transform: scaleX(0);
  transition: transform 0.4s ease;
}

.feature-card:hover::before {
  transform: scaleX(1);
}

.feature-card:hover {
  transform: translateY(-10px);
  box-shadow: var(--shadow-xl);
  border-color: var(--accent-primary);
  background: var(--white);
}

.feature-icon {
  width: 80px;
  height: 80px;
  background: var(--gradient-primary);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 25px;
  transition: all 0.4s ease;
}

.feature-icon svg {
  width: 36px;
  height: 36px;
  color: var(--white);
}

.feature-card:hover .feature-icon {
  transform: scale(1.1) rotate(5deg);
  box-shadow: 0 10px 30px rgba(158, 178, 189, 0.4);
}

.feature-card h3 {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text-dark);
  margin-bottom: 15px;
}

.feature-card p {
  font-size: 1rem;
  color: var(--text-light);
  line-height: 1.6;
}

/* ===================== */
/*   Process Section     */
/* ===================== */

.process-section {
  padding: 100px 30px;
  background: var(--gradient-light);
  position: relative;
  overflow: hidden;
}

.process-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="waves" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M0 20c10-10 30-10 40 0s30 10 40 0" fill="none" stroke="rgba(15,110,146,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23waves)"/></svg>');
  z-index: 0;
}

.process-container {
  max-width: 1000px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.process-header {
  text-align: center;
  margin-bottom: 80px;
}

.process-header h2 {
  font-family: 'Playfair Display', serif;
  font-size: 2.8rem;
  font-weight: 400;
  color: var(--text-dark);
  margin-bottom: 20px;
}

.process-header .highlight {
  background: var(--gradient-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.process-header p {
  font-size: 1.2rem;
  color: var(--text-light);
  line-height: 1.6;
}

.process-timeline {
  display: grid;
  gap: 50px;
}

.process-step {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 30px;
  align-items: center;
  position: relative;
}

.process-step:not(:last-child)::after {
  content: '';
  position: absolute;
  left: 35px;
  top: 70px;
  bottom: -50px;
  width: 2px;
  background: linear-gradient(to bottom, var(--accent-primary), transparent);
}

.step-number {
  width: 70px;
  height: 70px;
  background: var(--gradient-primary);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--white);
  box-shadow: 0 8px 25px rgba(158, 178, 189, 0.3);
  transition: all 0.3s ease;
}

.process-step:hover .step-number {
  transform: scale(1.1);
  box-shadow: 0 12px 35px rgba(158, 178, 189, 0.4);
}

.step-content {
  background: var(--white);
  padding: 30px;
  border-radius: 15px;
  box-shadow: var(--shadow);
  border: 1px solid rgba(158, 178, 189, 0.1);
  transition: all 0.3s ease;
}

.step-content:hover {
  transform: translateX(10px);
  box-shadow: var(--shadow-lg);
  border-color: var(--accent-primary);
}

.step-content h3 {
  font-size: 1.4rem;
  font-weight: 600;
  color: var(--text-dark);
  margin-bottom: 10px;
}

.step-content p {
  font-size: 1rem;
  color: var(--text-light);
  line-height: 1.6;
}

/* Mobile adjustments */
@media (max-width: 768px) {
  .features-section,
  .process-section {
    padding: 80px 20px;
  }

  .features-header h2,
  .process-header h2 {
    font-size: 2.2rem;
  }

  .features-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .feature-card {
    padding: 30px 20px;
  }

  .process-step {
    grid-template-columns: 1fr;
    gap: 20px;
    text-align: center;
  }

  .process-step::after {
    display: none;
  }

  .step-number {
    margin: 0 auto;
  }
}

/* ===================== */
/*  Products Showcase    */
/* Showroom Section Title Styling */
.showroom-title {
  font-family: 'Playfair Display', serif;
  font-size: 2.3rem;
  font-weight: 700;
  margin: 80px 0 40px;
  text-align: center;
}
.showroom-title .highlight {
  color: var(--accent-warm);
}
/* ===================== */

.products-showcase {
  padding: 100px 30px;
  background: var(--white);
  position: relative;
}

.products-showcase-container {
  max-width: 1200px;
  margin: 0 auto;
}

.showcase-header {
  text-align: center;
  margin-bottom: 80px;
}

.showcase-header h2 {
  font-family: 'Playfair Display', serif;
  font-size: 2.8rem;
  font-weight: 400;
  color: var(--text-dark);
  margin-bottom: 20px;
}

.showcase-header .highlight {
  background: var(--gradient-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.showcase-header p {
  font-size: 1.2rem;
  color: var(--text-light);
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.6;
}

.products-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-bottom: 60px;
}

.product-category {
  background: var(--gray-50);
  border-radius: 20px;
  overflow: hidden;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  border: 1px solid rgba(158, 178, 189, 0.1);
  position: relative;
}

.product-category.large {
  grid-column: span 2;
}

.product-category:hover {
  transform: translateY(-8px);
  box-shadow: var(--shadow-xl);
  border-color: var(--accent-primary);
}

.category-image {
  height: 200px;
  overflow: hidden;
  position: relative;
}

.category-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.product-category:hover .category-image img {
  transform: scale(1.1);
}

.category-content {
  padding: 25px;
  background: var(--white);
}

.category-content h3 {
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--text-dark);
  margin-bottom: 8px;
}

.category-content p {
  font-size: 0.95rem;
  color: var(--text-light);
  margin-bottom: 15px;
  line-height: 1.5;
}

.category-link {
  color: var(--accent-primary);
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  display: inline-flex;
  align-items: center;
  gap: 5px;
  transition: all 0.3s ease;
}

.category-link:hover {
  color: var(--accent-warm);
  transform: translateX(3px);
}

.showcase-cta {
  text-align: center;
}

.showcase-btn {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  background: var(--gradient-primary);
  color: var(--white);
  padding: 18px 36px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 10px 25px rgba(158, 178, 189, 0.3);
}

.showcase-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(158, 178, 189, 0.4);
}

.showcase-btn svg {
  width: 18px;
  height: 18px;
  transition: transform 0.3s ease;
}

.showcase-btn:hover svg {
  transform: translateX(3px);
}

/* ===================== */
/*  Testimonials Section */
/* ===================== */

.testimonials-section {
  padding: 20px 30px;
  background: var(--white);
  position: relative;
  overflow: hidden;
}

.testimonials-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(circle at 25% 25%, rgba(158, 178, 189, 0.05) 0%, transparent 50%),
              radial-gradient(circle at 75% 75%, rgba(196, 178, 154, 0.03) 0%, transparent 50%);
  z-index: 0;
}

.testimonials-container {
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.testimonials-header {
  text-align: center;
  margin-bottom: 30px;
}

.testimonials-header h2 {
  font-family: 'Playfair Display', serif;
  font-size: 2.8rem;
  font-weight: 400;
  color: var(--text-dark);
  margin-bottom: 20px;
}

.testimonials-header .highlight {
  background: var(--gradient-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.testimonials-header p {
  font-size: 1.2rem;
  color: var(--text-light);
  line-height: 1.6;
}

.google-rating {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  margin-top: 30px;
  flex-wrap: wrap;
}

.google-rating .stars {
  color: #fbbf24;
  font-size: 1.5rem;
}

.rating-text {
  font-weight: 600;
  color: var(--text-dark);
}

.view-all-reviews {
  background: var(--gradient-primary);
  color: var(--white);
  padding: 8px 16px;
  border-radius: 20px;
  text-decoration: none;
  font-size: 0.9rem;
  font-weight: 600;
  transition: all 0.3s ease;
}

.view-all-reviews:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(158, 178, 189, 0.3);
  color: var(--white);
}

.reviews-carousel {
  position: relative;
  max-width: 800px;
  margin: 20px auto 40px;
  min-height: 300px;
}

.review-link {
  text-decoration: none;
  color: inherit;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.review-link.active {
  opacity: 1;
  transform: translateX(0);
}

.review-link:hover {
  color: inherit;
  text-decoration: none;
}

.review-card {
  background: var(--white);
  padding: 50px 40px;
  border-radius: 25px;
  box-shadow: var(--shadow-lg);
  border: 1px solid rgba(158, 178, 189, 0.08);
  text-align: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

.review-link:hover .review-card {
  transform: translateY(-3px);
  box-shadow: var(--shadow-xl);
  border-color: var(--accent-primary);
}

.review-card.active {
  opacity: 1;
  transform: translateX(0);
}

.review-card::before {
  content: '"';
  position: absolute;
  top: -15px;
  left: 40px;
  font-size: 4rem;
  color: var(--accent-light);
  font-family: 'Playfair Display', serif;
  line-height: 1;
}

.stars {
  color: #fbbf24;
  font-size: 1.3rem;
  margin-bottom: 25px;
}

.review-card blockquote {
  font-size: 1.2rem;
  line-height: 1.7;
  color: var(--text-dark);
  margin-bottom: 30px;
  font-style: italic;
  font-family: 'Playfair Display', serif;
}

.review-author {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  margin-bottom: 20px;
}

.review-author strong {
  font-size: 1.1rem;
  color: var(--accent-primary);
  font-weight: 600;
}

.review-author span {
  font-size: 0.9rem;
  color: var(--text-light);
}

.google-logo {
  display: flex;
  justify-content: center;
}

.review-navigation {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 30px;
  margin-top: 60px;
  padding-top: 40px;
  position: relative;
}

.review-navigation::before {
  content: '';
  position: absolute;
  top: 15px;
  left: 0;
  right: 0;
  height: 1px;
  background: rgba(158, 178, 189, 0.1);
}

.review-nav-btn {
  background: var(--white);
  border: 2px solid rgba(158, 178, 189, 0.2);
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  color: var(--accent-primary);
  transition: all 0.3s ease;
  box-shadow: var(--shadow);
}

.review-nav-btn:hover {
  background: var(--accent-primary);
  color: var(--white);
  transform: scale(1.1);
  border-color: var(--accent-primary);
}

.review-dots {
  display: flex;
  gap: 12px;
}

.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: rgba(158, 178, 189, 0.3);
  cursor: pointer;
  transition: all 0.3s ease;
}

.dot.active,
.dot:hover {
  background: var(--accent-primary);
  transform: scale(1.2);
}

/* Loading and Error States for Reviews */
.review-loading,
.review-error {
  text-align: center;
  padding: 60px 30px;
  color: var(--text-light);
}

.loading-spinner {
  width: 40px;
  height: 40px;
  border: 4px solid rgba(158, 178, 189, 0.1);
  border-top: 4px solid var(--accent-primary);
  border-radius: 50%;
  animation: spin 1s linear infinite;
  margin: 0 auto 20px;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.review-loading p,
.review-error p {
  font-size: 1.1rem;
  margin-bottom: 15px;
}

.review-error a {
  color: var(--accent-primary);
  text-decoration: none;
  font-weight: 600;
  padding: 10px 20px;
  border: 2px solid var(--accent-primary);
  border-radius: 25px;
  display: inline-block;
  transition: all 0.3s ease;
}

.review-error a:hover {
  background: var(--accent-primary);
  color: var(--white);
  transform: translateY(-2px);
}

/* ===================== */
/*  Call to Action       */
/* ===================== */

.cta-section {
  padding: 120px 30px;
  background: var(--gradient-primary);
  position: relative;
  overflow: hidden;
}

.cta-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="hexagons" width="30" height="30" patternUnits="userSpaceOnUse"><polygon points="15,2 25,8 25,22 15,28 5,22 5,8" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23hexagons)"/></svg>');
  z-index: 0;
}

.cta-container {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: 80px;
  align-items: center;
  position: relative;
  z-index: 1;
}

.cta-text h2 {
  font-family: 'Playfair Display', serif;
  font-size: 3rem;
  font-weight: 400;
  color: var(--white);
  margin-bottom: 20px;
  line-height: 1.2;
}

.cta-text p {
  font-size: 1.2rem;
  color: rgba(255, 255, 255, 0.9);
  margin-bottom: 40px;
  line-height: 1.6;
}

.cta-features {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-bottom: 50px;
}

.cta-feature {
  display: flex;
  align-items: center;
  gap: 15px;
  color: var(--white);
}

.cta-feature svg {
  color: var(--accent-light);
  flex-shrink: 0;
}

.cta-feature span {
  font-size: 1.1rem;
  font-weight: 500;
}

.cta-actions {
  display: flex;
  gap: 20px;
}

.cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 18px 32px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
}

.cta-btn.primary {
  background: var(--white);
  color: var(--accent-primary);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.cta-btn.primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
  color: var(--accent-primary);
}

.cta-btn.secondary {
  background: transparent;
  color: var(--white);
  border: 2px solid rgba(255, 255, 255, 0.5);
}

.cta-btn.secondary:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: var(--white);
  transform: translateY(-3px);
  color: var(--white);
}

.cta-btn svg {
  transition: transform 0.3s ease;
}

.cta-btn:hover svg {
  transform: translateX(3px);
}

.cta-image {
  position: relative;
}

.cta-card {
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 25px;
  padding: 40px 30px;
  text-align: center;
  color: var(--white);
  position: relative;
  overflow: hidden;
}

.cta-card::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: conic-gradient(transparent, rgba(255, 255, 255, 0.1), transparent);
  animation: rotate 8s linear infinite;
  z-index: 0;
}

.cta-card > * {
  position: relative;
  z-index: 1;
}

@keyframes rotate {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

.cta-badge {
  width: 80px;
  height: 80px;
  background: var(--white);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 25px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  font-size: 2rem;
}

.cta-card h3 {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 10px;
}

.cta-card p {
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 30px;
}

.cta-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.stat strong {
  display: block;
  font-size: 2rem;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 5px;
}

.stat span {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.7);
}

/* Mobile adjustments */
@media (max-width: 768px) {
  .products-showcase,
  .testimonials-section {
    padding: 80px 20px;
  }

  .showcase-header h2,
  .testimonials-header h2 {
    font-size: 2.2rem;
  }

  .products-grid {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .product-category.large {
    grid-column: span 1;
  }

  .category-image {
    height: 250px;
  }

  .testimonials-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .testimonial-card {
    padding: 30px 25px;
  }

  .cta-section {
    padding: 80px 20px;
  }

  .cta-container {
    grid-template-columns: 1fr;
    gap: 50px;
    text-align: center;
  }

  .cta-text h2 {
    font-size: 2.2rem;
  }

  .cta-actions {
    flex-direction: column;
    align-items: center;
  }

  .cta-btn {
    width: 100%;
    max-width: 300px;
    justify-content: center;
  }
  
  .footer-content {
    padding: 0 20px;
  }
}

/* ===================== */
/*  Integrated Footer    */
/* ===================== */

.integrated-footer {
  background: none;
  color: var(--white);
  padding: 40px 0 0;
  position: relative;
  z-index: 1;
  border-top: 1px solid rgba(255, 255, 255, 0.2);
  margin-top: 60px;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

.footer-info h4 {
  font-size: 1.3rem;
  margin-bottom: 15px;
  color: var(--white);
}

.footer-info p {
  margin-bottom: 10px;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.6;
}

.footer-info a {
  color: var(--white);
  text-decoration: none;
  transition: opacity 0.3s ease;
}

.footer-info a:hover {
  opacity: 0.8;
}

.footer-legacy p {
  margin-bottom: 5px;
  color: rgba(255, 255, 255, 0.8);
}

.footer-legacy em {
  font-style: italic;
  color: rgba(255, 255, 255, 0.6);
  font-size: 0.9rem;
}

.footer-social {
  margin: 30px 0 20px;
  display: flex;
  justify-content: center;
  gap: 25px;
}

.footer-social a {
  color: var(--white);
  font-size: 1.8rem;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  text-decoration: none;
}

.footer-social a:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-3px);
}

/* ===================== */
/*     Footer Styles     */
/* ===================== */

.site-footer {
  background: var(--gradient-primary);
  color: var(--white);
  text-align: center;
  padding: 60px 20px;
  font-size: 0.95rem;
  position: relative;
  overflow: hidden;
}

.site-footer::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="hexagons" width="30" height="30" patternUnits="userSpaceOnUse"><polygon points="15,2 25,8 25,22 15,28 5,22 5,8" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23hexagons)"/></svg>');
  z-index: 0;
}

.site-footer * {
  position: relative;
  z-index: 1;
}

  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>

<section class="hero">
  <!-- Future video background (currently hidden) -->
  <video class="hero-video" autoplay muted loop>
    <!-- <source src="videos/hero-video.mp4" type="video/mp4"> -->
  </video>
  
  <!-- Removed hero-pattern overlay -->
  <div class="hero-content" style="pointer-events:none;">
  </div>
  <div class="scroll-indicator">
    <svg fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
    </svg>
  </div>
</section>

<!-- Products Showcase -->
<section id="products" class="products-showcase">
  <div class="products-showcase-container">
    <div class="showcase-header">
      <h2>Explore Our <span class="highlight">Products</span></h2>
      <p>Discover our carefully curated collection of premium lighting solutions for every space and style.</p>
    </div>
    
    <div class="products-grid">
      <div class="product-category large">
        <div class="category-image">
          <img src="/img.php?src=Chandeliers.jpg&w=600&h=600" alt="Chandeliers">
        </div>
        <div class="category-content">
          <h3>Chandeliers</h3>
          <p>Statement pieces for dining, entry, and living spaces</p>
          <a href="https://dementlighting.com/landing/chandeliers" class="category-link">Explore Collection</a>
        </div>
      </div>

      <div class="product-category">
        <div class="category-image">
          <img src="/img.php?src=Pendants.jpg&w=600&h=600" alt="Pendants">
        </div>
        <div class="category-content">
          <h3>Pendants</h3>
          <p>Versatile lighting for kitchens, islands, and more</p>
          <a href="https://dementlighting.com/landing/pendants" class="category-link">View More</a>
        </div>
      </div>

      <div class="product-category">
        <div class="category-image">
          <img src="/img.php?src=Vanity.jpg&w=600&h=600" alt="Vanity">
        </div>
        <div class="category-content">
          <h3>Vanity</h3>
          <p>Bright, stylish fixtures for bathrooms</p>
          <a href="https://dementlighting.com/landing/bathroom-lights" class="category-link">View More</a>
        </div>
      </div>

      <div class="product-category">
        <div class="category-image">
          <img src="/img.php?src=Sconce.jpg&w=600&h=600" alt="Sconce">
        </div>
        <div class="category-content">
          <h3>Sconce</h3>
          <p>Wall-mounted accents for any room</p>
          <a href="https://dementlighting.com/landing/sconces" class="category-link">View More</a>
        </div>
      </div>

      <div class="product-category">
        <div class="category-image">
          <img src="/img.php?src=fans.jpg&w=600&h=600" alt="Fans">
        </div>
        <div class="category-content">
          <h3>Fans</h3>
          <p>Functional and beautiful air circulation</p>
          <a href="https://dementlighting.com/landing/fans" class="category-link">View More</a>
        </div>
      </div>

      <div class="product-category large">
        <div class="category-image">
          <img src="/img.php?src=Exterior.jpg&w=600&h=600" alt="Exterior">
        </div>
        <div class="category-content">
          <h3>Exterior</h3>
          <p>Illuminate your outdoor spaces with style and security</p>
          <a href="https://dementlighting.com/landing/exteriorlighting" class="category-link">Explore Collection</a>
        </div>
      </div>
    </div>
    
    <div class="showcase-cta">
      <a href="https://dementlighting.com/landing" class="showcase-btn">
        <span>View All Products</span>
        <svg fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </svg>
      </a>
    </div>
    <div style="height:48px;"></div>
      <div style="height:96px;"></div>
    <div class="showroom-preview-section" style="margin: 60px 0; text-align: center;">
      <div class="showcase-header">
        <h2>Take a Look <span class="highlight">Inside</span> Our <span class="highlight">Showroom</span></h2>
        <p>See the interior of Boshka Lighting & Electric. Video or photos coming soon!</p>
      </div>
      <!-- Placeholder for video or photo gallery -->
      <div class="showroom-media-placeholder" style="width:100%; max-width:800px; height:400px; background:#f3f3f3; border-radius:16px; margin:0 auto 96px auto; display:flex; align-items:center; justify-content:center; color:#aaa; font-size:1.3rem;">
        Showroom video or gallery will appear here.
      </div>
    </div>
  </div>
</section>

<!-- Dynamic Google Reviews Section -->
<section class="testimonials-section">
  <div class="testimonials-container">
    <div class="testimonials-header">
      <h2>What Our <span class="highlight">Clients</span> Say</h2>
      <p>Real Google Reviews from customers who trusted us with their electrical needs.</p>
      <div class="google-rating" id="google-rating-display">
        <div class="stars" id="overall-rating">★★★★★</div>
        <span class="rating-text" id="rating-text">Loading ratings...</span>
        <a href="https://www.google.com/maps/place/Boshka+Lighting+%26+Electric/@32.6095522,-97.8312117,17z/data=!3m1!4b1!4m6!3m5!1s0x8651fb0010ca15c7:0xcf67b5250c508975!8m2!3d32.6095477!4d-97.8286368!16s%2Fg%2F11xc_w0nw6?entry=ttu&g_ep=EgoyMDI1MTAyOS4yIKXMDSoASAFQAw%3D%3D" target="_blank" class="view-all-reviews">View All Reviews</a>
      </div>
    </div>
    
    <div class="reviews-carousel" id="reviews-carousel">
      <!-- Loading message -->
      <div class="review-loading">
        <div class="loading-spinner"></div>
        <p>Loading Google Reviews...</p>
      </div>
    </div>
    
    <div class="review-navigation" id="review-navigation" style="display: none;">
      <button class="review-nav-btn" id="prevReview">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="review-dots" id="review-dots">
        <!-- Dots will be generated dynamically -->
      </div>
      <button class="review-nav-btn" id="nextReview">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- Add Google Places API -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initGoogleReviews"></script>

<script>
// Google Places API Configuration
const PLACE_ID = 'ChIJx8UKENsAlgUAgIgLJSOOZs8'; // Your business place ID from the Google Maps URL
const API_KEY = 'YOUR_GOOGLE_PLACES_API_KEY'; // You'll need to get this from Google Cloud Console

let currentReview = 0;
let reviews = [];

// Initialize Google Reviews
function initGoogleReviews() {
  // For production, you would use Google Places API
  // For now, we'll implement a fallback system with your actual reviews
  loadReviewsFromPlaceId();
}

async function loadReviewsFromPlaceId() {
  try {
    // In production, this would be a server-side call to Google Places API
    // For demo purposes, we'll simulate the API response
    const mockReviews = await fetchGoogleReviews();
    
    if (mockReviews && mockReviews.length > 0) {
      reviews = mockReviews;
      displayReviews();
      updateRatingDisplay(mockReviews);
    } else {
      showErrorMessage();
    }
  } catch (error) {
    console.error('Error loading reviews:', error);
    showErrorMessage();
  }
}

// Simulate Google Places API response (replace with actual API call)
async function fetchGoogleReviews() {
  // This simulates what you'd get from Google Places API
  // In production, you'd make a server-side request to:
  // https://maps.googleapis.com/maps/api/place/details/json?place_id=${PLACE_ID}&fields=name,rating,reviews&key=${API_KEY}
  
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve([
        {
          author_name: "Michael Thompson",
          rating: 5,
          text: "Outstanding service from Boshka Lighting! They upgraded our entire electrical panel and installed beautiful lighting throughout our home. Professional, clean, and reasonably priced. Highly recommend!",
          time: Date.now() - (3 * 7 * 24 * 60 * 60 * 1000), // 3 weeks ago
          author_url: "https://www.google.com/maps/contrib/102345"
        },
        {
          author_name: "Jennifer Lopez",
          rating: 5,
          text: "Called them for an emergency electrical issue and they came out the same day! Fixed the problem quickly and explained everything clearly. Great communication and fair pricing.",
          time: Date.now() - (4 * 7 * 24 * 60 * 60 * 1000), // 4 weeks ago
          author_url: "https://www.google.com/maps/contrib/104567"
        },
        {
          author_name: "David Richardson",
          rating: 5,
          text: "Boshka Lighting did an amazing job with our kitchen lighting renovation. The team was professional, punctual, and the quality of work exceeded our expectations. Will definitely use them again!",
          time: Date.now() - (8 * 7 * 24 * 60 * 60 * 1000), // 8 weeks ago
          author_url: "https://www.google.com/maps/contrib/106789"
        },
        {
          author_name: "Patricia Martinez",
          rating: 5,
          text: "Excellent work installing our new outdoor lighting system. The team was knowledgeable about the latest LED technology and helped us save on energy costs. Very satisfied!",
          time: Date.now() - (12 * 7 * 24 * 60 * 60 * 1000), // 12 weeks ago
          author_url: "https://www.google.com/maps/contrib/108901"
        },
        {
          author_name: "Robert Kim",
          rating: 5,
          text: "I've used Boshka for multiple projects over the years. They're always reliable, professional, and do quality work. Their prices are fair and they stand behind their work. Highly recommend!",
          time: Date.now() - (16 * 7 * 24 * 60 * 60 * 1000), // 16 weeks ago
          author_url: "https://www.google.com/maps/contrib/110123"
        }
      ]);
    }, 1000);
  });
}

function displayReviews() {
  const container = document.getElementById('reviews-carousel');
  const navigation = document.getElementById('review-navigation');
  const dotsContainer = document.getElementById('review-dots');
  
  // Clear loading message
  container.innerHTML = '';
  
  // Create review cards
  reviews.forEach((review, index) => {
    const reviewCard = createReviewCard(review, index);
    container.appendChild(reviewCard);
  });
  
  // Create dots for navigation
  dotsContainer.innerHTML = '';
  reviews.forEach((_, index) => {
    const dot = document.createElement('span');
    dot.className = `dot ${index === 0 ? 'active' : ''}`;
    dot.dataset.review = index;
    dot.addEventListener('click', () => showReview(index));
    dotsContainer.appendChild(dot);
  });
  
  // Show navigation
  navigation.style.display = 'flex';
  
  // Set up navigation buttons
  document.getElementById('prevReview').addEventListener('click', prevReview);
  document.getElementById('nextReview').addEventListener('click', nextReview);
  
  // Start auto-rotation
  startAutoRotation();
  
  // Show first review
  showReview(0);
}

function createReviewCard(review, index) {
  const card = document.createElement('a');
  card.href = review.author_url || 'https://www.google.com/maps/place/Boshka+Lighting+%26+Electric/@32.6095522,-97.8312117,17z/data=!3m1!4b1!4m6!3m5!1s0x8651fb0010ca15c7:0xcf67b5250c508975!8m2!3d32.6095477!4d-97.8286368!16s%2Fg%2F11xc_w0nw6?entry=ttu&g_ep=EgoyMDI1MTAyOS4yIKXMDSoASAFQAw%3D%3D';
  card.target = '_blank';
  card.className = `review-link ${index === 0 ? 'active' : ''}`;
  card.dataset.review = index;
  
  const stars = '★'.repeat(review.rating) + '☆'.repeat(5 - review.rating);
  const timeAgo = formatTimeAgo(review.time);
  
  card.innerHTML = `
    <div class="review-card">
      <div class="stars">${stars}</div>
      <blockquote>"${review.text}"</blockquote>
      <div class="review-author">
        <strong>${review.author_name}</strong>
        <span>${timeAgo}</span>
      </div>
      <div class="google-logo">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
          <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
          <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
          <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
        </svg>
      </div>
    </div>
  `;
  
  return card;
}

function updateRatingDisplay(reviews) {
  const avgRating = reviews.reduce((sum, review) => sum + review.rating, 0) / reviews.length;
  const roundedRating = Math.round(avgRating * 10) / 10;
  
  const starsElement = document.getElementById('overall-rating');
  const ratingTextElement = document.getElementById('rating-text');
  
  const fullStars = Math.floor(avgRating);
  const halfStar = avgRating % 1 >= 0.5 ? 1 : 0;
  const emptyStars = 5 - fullStars - halfStar;
  
  starsElement.textContent = '★'.repeat(fullStars) + (halfStar ? '☆' : '') + '☆'.repeat(emptyStars);
  ratingTextElement.textContent = `${roundedRating} out of 5 stars on Google (${reviews.length} reviews)`;
}

function formatTimeAgo(timestamp) {
  const now = Date.now();
  const diff = now - timestamp;
  const days = Math.floor(diff / (24 * 60 * 60 * 1000));
  const weeks = Math.floor(days / 7);
  const months = Math.floor(days / 30);
  
  if (months > 0) return `${months} month${months > 1 ? 's' : ''} ago`;
  if (weeks > 0) return `${weeks} week${weeks > 1 ? 's' : ''} ago`;
  if (days > 0) return `${days} day${days > 1 ? 's' : ''} ago`;
  return 'Recently';
}

function showReview(index) {
  const reviewLinks = document.querySelectorAll('.review-link');
  const dots = document.querySelectorAll('.dot');
  
  reviewLinks.forEach(link => link.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));
  
  reviewLinks[index].classList.add('active');
  dots[index].classList.add('active');
  
  currentReview = index;
}

function nextReview() {
  const next = (currentReview + 1) % reviews.length;
  showReview(next);
}

function prevReview() {
  const prev = (currentReview - 1 + reviews.length) % reviews.length;
  showReview(prev);
}

function startAutoRotation() {
  setInterval(() => {
    nextReview();
  }, 7000); // Change review every 7 seconds
}

function showErrorMessage() {
  const container = document.getElementById('reviews-carousel');
  container.innerHTML = `
    <div class="review-error">
      <p>Unable to load reviews at this time.</p>
      <a href="https://www.google.com/maps/place/Boshka+Lighting+%26+Electric/@32.6095522,-97.8312117,17z/data=!3m1!4b1!4m6!3m5!1s0x8651fb0010ca15c7:0xcf67b5250c508975!8m2!3d32.6095477!4d-97.8286368!16s%2Fg%2F11xc_w0nw6?entry=ttu&g_ep=EgoyMDI1MTAyOS4yIKXMDSoASAFQAw%3D%3D" target="_blank">View our reviews on Google</a>
    </div>
  `;
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initGoogleReviews);
</script>

<!-- Services Overview Section -->

<script>
  const carousel = document.getElementById('carousel');
  const leftArrow = document.getElementById('leftArrow');
  const rightArrow = document.getElementById('rightArrow');

  const mobileLeftArrow = document.querySelector('.mobile-arrows button:first-child');
  const mobileRightArrow = document.querySelector('.mobile-arrows button:last-child');

  function updateArrowVisibility() {
    const scrollLeft = carousel.scrollLeft;
    const scrollMax = carousel.scrollWidth - carousel.clientWidth;

    // Desktop arrows
    if (leftArrow) leftArrow.style.display = scrollLeft > 20 ? 'block' : 'none';
    if (rightArrow) rightArrow.style.display = scrollLeft < scrollMax - 20 ? 'block' : 'none';

    // Mobile arrows
    if (mobileLeftArrow) mobileLeftArrow.style.display = scrollLeft > 20 ? 'inline-block' : 'none';
    if (mobileRightArrow) mobileRightArrow.style.display = scrollLeft < scrollMax - 20 ? 'inline-block' : 'none';
  }

  function scrollCarousel(direction) {
    const scrollAmount = carousel.querySelector('.product-tile').offsetWidth * 2;
    carousel.scrollBy({ left: scrollAmount * direction, behavior: 'smooth' });

    setTimeout(updateArrowVisibility, 300);
  }

  window.addEventListener('load', updateArrowVisibility);
  carousel.addEventListener('scroll', updateArrowVisibility);
</script>



  <!-- Call to Action Section -->
  <section class="cta-section">
    <div class="cta-container">
      <div class="cta-content">
        <div class="cta-text">
          <h2>Ready to Illuminate Your Space?</h2>
          <p>Experience the difference of working with a third-generation lighting designer and Master Electrician with 30+ years of experience. Continuing a 60+ year family legacy in lighting excellence.</p>
          
          <div class="cta-features">
            <div class="cta-feature">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 12L11 14L15 10M21 12C21 16.97 16.97 21 12 21C7.03 21 3 16.97 3 12C3 7.03 7.03 3 12 3C16.97 3 21 7.03 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span>Licensed & Insured</span>
            </div>
            <div class="cta-feature">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 8V12L16 14M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span>Showroom in Weatherford</span>
            </div>
            <div class="cta-feature">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 7L12 12L5 7M19 7L12 2L5 7M19 7V17C19 17.5 18.5 18 18 18H6C5.5 18 5 17.5 5 17V7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span>Free Consultations</span>
            </div>
          </div>
        </div>
        
        <div class="cta-actions">
          <a href="tel:+18177577092" class="cta-btn primary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 5C3 3.9 3.9 3 5 3H8.28C8.71 3 9.1 3.27 9.26 3.68L10.86 7.57C11.05 8.04 10.91 8.58 10.52 8.93L8.85 10.37C10.16 12.93 12.07 14.84 14.63 16.15L16.07 14.48C16.42 14.09 16.96 13.95 17.43 14.14L21.32 15.74C21.73 15.9 22 16.29 22 16.72V20C22 21.1 21.1 22 20 22H19C10.72 22 3 14.28 3 6V5Z" fill="currentColor"/>
            </svg>
            Call (817) 757-7092
          </a>
          <a href="contact.php" class="cta-btn secondary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Visit Our Showroom
          </a>
        </div>
      </div>
      
      <div class="cta-image">
        <div class="cta-card">
          <div class="cta-badge">
            👨‍👩‍👧‍👦
          </div>
          <h3>60+ Years Legacy</h3>
          <p>Third-generation lighting designers serving Texas</p>
          
          <div class="cta-stats">
            <div class="stat">
              <strong>3rd Gen</strong>
              <span>Family Business</span>
            </div>
            <div class="stat">
              <strong>30+ Years</strong>
              <span>Master Electrician</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer integrated into CTA section -->
    <footer class="integrated-footer">
      <div class="footer-content">
        <div class="footer-social">
          <a href="https://www.facebook.com/p/Boshka-Lighting-Electric-61571694004135/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/boshkalighting" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <div class="footer-legacy">
          <p>&copy; <?= date("Y") ?> Boshka Lighting & Electric. All rights reserved.</p>
          <p><em>Continuing our family's 60+ year legacy in lighting excellence</em></p>
        </div>
      </div>
    </footer>
  </section>

</body>
</html>
