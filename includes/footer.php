<!-- Font Awesome for Social Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  .site-footer {
    text-align: center;
    padding: 40px 20px;
    font-size: 0.9rem;
    color: #fff;
    background: linear-gradient(135deg, #9EB2BD 0%, #C4B29A 100%);
  }
  
  .footer-social {
    margin: 0 0 20px;
    display: flex;
    justify-content: center;
    gap: 25px;
  }
  
  .footer-social a {
    color: #fff;
    font-size: 1.6rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    text-decoration: none;
  }
  
  .footer-social a:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
  }
</style>

<footer class="site-footer">
  <div class="footer-social">
    <a href="https://www.facebook.com/p/Boshka-Lighting-Electric-61571694004135/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://www.instagram.com/boshkalighting" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
      <i class="fab fa-instagram"></i>
    </a>
  </div>
  &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
</footer>
