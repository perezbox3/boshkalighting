<?php
// gallery.php - Boshka Lighting Gallery Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Boshka Lighting</title>
  <link rel="stylesheet" href="/style.css">
  <?php include 'includes/header.php'; ?>
  <style>
    .gallery-section {
      width: 100%;
      max-width: 1400px;
      margin: 180px auto 80px auto;
      padding: 0 24px;
    }
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
      justify-items: center;
      align-items: stretch;
    }
    .gallery-item {
      background: #f8f8f8;
      box-shadow: 0 4px 24px rgba(42,170,200,0.08);
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: box-shadow 0.2s;
      cursor: pointer;
      position: relative;
    }
    .gallery-item.size1, .gallery-item.size2, .gallery-item.size3 {
      aspect-ratio: 1/1;
    }
    .gallery-item:hover {
      box-shadow: 0 8px 32px rgba(42,170,200,0.18);
    }
    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.3s;
      border-radius: 0;
      will-change: transform;
    }
    .gallery-item:hover img {
      transform: scale(1.04);
    }
    /* Modal styles */
    .gallery-modal {
      position: fixed;
      top: 0; left: 0; width: 100vw; height: 100vh;
      background: rgba(0,0,0,0.92);
      align-items: center;
      justify-content: center;
      z-index: 9999;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.2s, visibility 0.2s;
    }
    .gallery-modal.active {
      display: flex;
      opacity: 1;
      visibility: visible;
    }
    .gallery-modal img {
      max-width: 96vw;
      max-height: 90vh;
      border-radius: 0;
      box-shadow: 0 8px 32px rgba(42,170,200,0.18);
      background: #fff;
      padding: 8px;
      margin: auto;
      object-fit: contain;
    }
    .modal-loader {
      position: absolute;
      width: 50px;
      height: 50px;
      border: 4px solid rgba(42,170,200,0.3);
      border-top-color: #C4B29A;
      border-radius: 50%;
      animation: spin 0.8s linear infinite;
    }
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
    .close-modal {
      position: absolute;
      top: 32px;
      right: 48px;
      font-size: 3rem;
      color: #fff;
      cursor: pointer;
      z-index: 10000;
      font-weight: bold;
      transition: color 0.2s;
    }
    .close-modal:hover {
      color: #C4B29A;
    }
    @media (max-width: 600px) {
      .gallery-section {
        width: 100vw;
        max-width: 100vw;
        margin: 0;
        padding: 80px 6px 0 6px;
      }
      .gallery-grid {
        grid-template-columns: 1fr;
        gap: 16px;
        max-width: 100vw;
        margin: 0 auto;
      }
      .gallery-item { box-shadow: 0 2px 8px rgba(42,170,200,0.10); }
      .close-modal { top: 12px; right: 18px; font-size: 2rem; }
      .gallery-modal img {
        max-width: 98vw;
        max-height: 80vh;
      }
    }
  </style>
</head>
<body>
  <section class="gallery-section">
    <div class="gallery-grid" id="galleryGrid">
      <!-- Gallery images will be loaded dynamically from images/gallery/ folder -->
    </div>
    <div id="gallery-modal" class="gallery-modal">
      <span class="close-modal" id="closeModal">&times;</span>
      <div class="modal-loader" id="modalLoader"></div>
      <img id="modalImg" src="" alt="Full Image" style="display:none;" />
    </div>
  </section>
  <script>
    // Load gallery images dynamically from server
    fetch('get_gallery_images.php')
      .then(response => response.json())
      .then(galleryData => {
        const grid = document.getElementById('galleryGrid');
        const sizeClasses = ['size1', 'size2', 'size3'];
        
        galleryData.forEach((image, index) => {
          const sizeClass = sizeClasses[index % 3];
          const itemDiv = document.createElement('div');
          itemDiv.className = `gallery-item ${sizeClass}`;
          
          const img = document.createElement('img');
          img.src = `/img.php?src=gallery/${image.filename}&w=800&h=800`;
          img.dataset.full = `/img.php?src=gallery/${image.filename}&w=1920&h=1920`;
          img.alt = image.alt;
          img.loading = 'lazy';
          img.decoding = 'async';
          
          itemDiv.appendChild(img);
          grid.appendChild(itemDiv);
        });
        
        // Initialize modal after images are loaded
        initializeModal();
      })
      .catch(error => {
        console.error('Error loading gallery images:', error);
      });
    
    function initializeModal() {
      const galleryItems = document.querySelectorAll('.gallery-item img');
      const modal = document.getElementById('gallery-modal');
      const modalImg = document.getElementById('modalImg');
      const closeModal = document.getElementById('closeModal');
      const loader = document.getElementById('modalLoader');
      
      // Preload images in background after page load
      const imageCache = new Map();
      const preloadImages = () => {
        galleryItems.forEach((img, index) => {
          if (index < 3) { // Preload first 3 images immediately
            const preloadImg = new Image();
            preloadImg.src = img.src;
            imageCache.set(img.src, preloadImg);
          }
        });
        
        // Preload remaining images after a delay
        setTimeout(() => {
          galleryItems.forEach((img, index) => {
            if (index >= 3 && !imageCache.has(img.src)) {
              const preloadImg = new Image();
              preloadImg.src = img.src;
              imageCache.set(img.src, preloadImg);
            }
          });
        }, 1000);
      };
      
      galleryItems.forEach(img => {
        img.addEventListener('click', () => {
          modal.classList.add('active');
          modalImg.style.display = 'none';
          loader.style.display = 'block';
          
          const fullImageSrc = img.dataset.full || img.src;
          
          // Use cached image if available
          if (imageCache.has(fullImageSrc) && imageCache.get(fullImageSrc).complete) {
            modalImg.src = fullImageSrc;
            modalImg.alt = img.alt;
            modalImg.style.display = 'block';
            loader.style.display = 'none';
          } else {
            // Load image with loading indicator
            const tempImg = new Image();
            tempImg.onload = () => {
              modalImg.src = fullImageSrc;
              modalImg.alt = img.alt;
              modalImg.style.display = 'block';
              loader.style.display = 'none';
              imageCache.set(fullImageSrc, tempImg);
            };
            tempImg.src = fullImageSrc;
          }
        });
      });
      
      const closeModalFunc = () => {
        modal.classList.remove('active');
        setTimeout(() => {
          modalImg.src = '';
          modalImg.style.display = 'none';
        }, 200);
      };
      
      closeModal.addEventListener('click', closeModalFunc);
      
      modal.addEventListener('click', (e) => {
        if (e.target === modal) {
          closeModalFunc();
        }
      });
      
      // Keyboard navigation
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
          closeModalFunc();
        }
      });
      
      // Start preloading
      if (window.requestIdleCallback) {
        requestIdleCallback(preloadImages);
      } else {
        setTimeout(preloadImages, 100);
      }
    }
  </script>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
