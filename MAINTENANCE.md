# Boshka Lighting Website - Maintenance Guide

## Project Overview

This is the complete codebase for **boshkalighting.com**, a custom PHP website showcasing Boshka Lighting & Electric's services, team, and portfolio.

The site features:
- Professional lighting and electrical service information
- Interactive team member profiles
- Dynamic photo gallery
- Client testimonials and scheduling
- Automatic image optimization system
- Mobile-responsive design
- SEO-optimized structure

**Production URL:** https://boshkalighting.com  
**Local Development URL:** http://boshkalighting.local

---

## Tech Stack and Folder Structure

### Technology
- **Backend:** Pure PHP 7.4+ (no framework, no WordPress)
- **Frontend:** HTML5, CSS3 (inline), Vanilla JavaScript (inline)
- **Fonts:** Google Fonts (Playfair Display, Montserrat, Red Hat Display, Roboto Mono)
- **Icons:** Font Awesome 6.4.0
- **Image Optimization:** Custom PHP-based system (img.php)
- **Server:** Apache with mod_rewrite enabled
- **Environment Detection:** Automatic (local vs production)

### Folder Structure

```
/var/www/boshkalighting/
│
├── index.php                  # Homepage with hero carousel, services, testimonials
├── about.php                  # Company history and team overview
├── contact.php                # Contact form and business information
├── schedule.php               # Appointment scheduling interface
├── gallery.php                # Photo gallery with dynamic image loading
│
├── Team Member Pages:
│   ├── kerie-boshka.php       # Owner & Lighting Designer
│   ├── rick-boshka.php        # Owner & Master Electrician
│   ├── taylor-drew.php        # Lighting & Design Consultant
│   ├── ashtyn-boshka.php      # Administrative Assistant
│   ├── noah-center.php        # Industrial Electrician
│   ├── avery-wollert.php      # Residential Electrician
│   └── shahara-fowler.php     # Service Electrician
│
├── mg-brick-stone.php         # Partnership page
│
├── Utility Scripts:
│   ├── img.php                # Image optimization/serving endpoint
│   └── get_gallery_images.php # Gallery image JSON API
│
├── includes/                  # Shared templates
│   ├── header.php             # Site header, navigation, environment detection
│   ├── footer.php             # Site footer with social links
│   └── img_helper.php         # Image optimization helper functions
│
├── images/                    # Media files (large files gitignored)
│   ├── cache/                 # Auto-generated optimized images
│   ├── gallery/               # Gallery source images
│   ├── thumbs/                # Thumbnail images
│   └── icons/                 # Favicons and app icons
│
├── Configuration:
│   ├── .htaccess              # Apache config: HTTPS redirect, clean URLs
│   ├── robots.txt             # Search engine crawling rules
│   ├── sitemap.xml            # SEO sitemap
│   ├── site.webmanifest       # PWA manifest
│   └── .gitignore             # Git exclusions
│
└── MAINTENANCE.md             # This file
```

---

## Local Development Setup

### Prerequisites
- Apache web server with mod_rewrite enabled
- PHP 7.4 or higher with GD extension (for image processing)
- Local domain configured (e.g., boshkalighting.local)

### Initial Setup

1. **Clone the repository:**
   ```bash
   cd /var/www/
   git clone [repository-url] boshkalighting
   ```

2. **Configure virtual host:**
   
   Create Apache virtual host configuration (e.g., `/etc/apache2/sites-available/boshkalighting.conf`):
   ```apache
   <VirtualHost *:80>
       ServerName boshkalighting.local
       DocumentRoot /var/www/boshkalighting
       
       <Directory /var/www/boshkalighting>
           Options -Indexes +FollowSymLinks
           AllowOverride All
           Require all granted
       </Directory>
       
       ErrorLog ${APACHE_LOG_DIR}/boshkalighting-error.log
       CustomLog ${APACHE_LOG_DIR}/boshkalighting-access.log combined
   </VirtualHost>
   ```

3. **Enable site and restart Apache:**
   ```bash
   sudo a2ensite boshkalighting
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```

4. **Add to /etc/hosts:**
   ```
   127.0.0.1  boshkalighting.local
   ```

5. **Set proper permissions:**
   ```bash
   cd /var/www/boshkalighting
   sudo chown -R www-data:www-data images/cache/
   sudo chmod -R 755 images/cache/
   ```

6. **Test the site:**
   Open http://boshkalighting.local in your browser.

### Environment Detection

The site automatically detects whether it's running locally or in production:

- **Local:** Any hostname containing `.local` or `localhost`
  - Google Analytics: DISABLED
  - Base URL: `http://boshkalighting.local`
  
- **Production:** Any other hostname
  - Google Analytics: ENABLED
  - Base URL: `https://boshkalighting.com`

This is configured in `includes/header.php` and requires no manual changes.

### Verifying Image Optimization

Test the image optimizer is working:
```
http://boshkalighting.local/img.php?src=group1.jpg&w=800&h=600
```

Check that the cache directory is being populated:
```bash
ls -lh images/cache/
```

---

## How to Deploy to Production

### Pre-Deployment Checklist

1. **Test locally first:**
   - Visit all major pages: home, about, contact, schedule, gallery
   - Test navigation and mobile responsiveness
   - Verify image optimization is working
   - Check browser console for JavaScript errors

2. **Verify environment settings:**
   - Ensure no hardcoded localhost URLs
   - Confirm .gitignore excludes sensitive files
   - Check that large source images are gitignored

3. **Run git status:**
   ```bash
   git status
   git diff
   ```

### Deployment Steps

1. **Commit and push changes:**
   ```bash
   git add .
   git commit -m "Description of changes"
   git push origin main
   ```

2. **On production server, pull changes:**
   ```bash
   cd /var/www/boshkalighting
   git pull origin main
   ```

3. **Verify permissions (if needed):**
   ```bash
   sudo chown -R www-data:www-data images/cache/
   sudo chmod -R 755 images/cache/
   ```

4. **Clear PHP opcache (if enabled):**
   ```bash
   sudo systemctl reload apache2
   # or
   sudo service php7.4-fpm reload
   ```

5. **Test production site:**
   - Visit https://boshkalighting.com
   - Test all major pages
   - Check mobile view
   - Verify forms work
   - Check Google Analytics is loading (view page source)

### Rollback Procedure

If something goes wrong:
```bash
cd /var/www/boshkalighting
git log --oneline -5           # Find the commit to revert to
git reset --hard [commit-hash]
sudo systemctl reload apache2
```

---

## How to Update Text Content

All content is directly embedded in PHP files. No database or CMS is used.

### Updating Page Content

1. **Locate the page file:**
   - Homepage content: `index.php`
   - About page: `about.php`
   - Contact info: `contact.php`
   - Team member bio: `[name]-boshka.php`, etc.

2. **Edit the HTML content:**
   ```bash
   # Open in your preferred editor
   nano index.php
   # or
   code index.php
   ```

3. **Find the section to update:**
   - Content is organized in clearly labeled sections with comments
   - Example: `<!-- Hero Section -->`, `<!-- Services Section -->`, etc.

4. **Make changes and save**

5. **Test locally:**
   ```bash
   # View the page in browser
   http://boshkalighting.local/
   ```

6. **Deploy to production:**
   ```bash
   git add [filename]
   git commit -m "Update [description]"
   git push origin main
   # Then pull on production server
   ```

### Common Content Updates

**Update business hours:**
- Edit `contact.php`, find the hours section

**Update phone number or email:**
- Edit `contact.php` and `includes/footer.php`

**Update social media links:**
- Edit `includes/footer.php`

**Update team member bio:**
- Edit the respective `[name].php` file

**Update testimonials:**
- Edit `index.php`, find the testimonials section (JavaScript array)

---

## How to Add/Replace Photos and Media

### Understanding the Image Optimization System

The site uses a custom image optimization system that automatically:
- Resizes images to specified dimensions
- Compresses images (typically 99% size reduction)
- Caches optimized versions
- Serves images with optimal quality

**Key files:**
- `/img.php` - Image optimizer/server
- `/includes/img_helper.php` - Helper functions
- `/images/` - Source images (large files, gitignored)
- `/images/cache/` - Auto-generated optimized images

### Adding New Images

1. **Upload source image:**
   ```bash
   # Copy image to images directory
   cp /path/to/new-photo.jpg /var/www/boshkalighting/images/
   
   # Or use SCP from remote:
   scp new-photo.jpg user@server:/var/www/boshkalighting/images/
   ```

2. **Use the image in your PHP file:**

   **Method 1: PHP Helper Function (Recommended)**
   ```php
   <?php require_once __DIR__ . '/includes/img_helper.php'; ?>
   
   <!-- Simple usage -->
   <?= img('new-photo.jpg', 800, 600) ?>
   
   <!-- With attributes -->
   <?= img('new-photo.jpg', 800, 600, [
       'alt' => 'Photo description',
       'class' => 'my-class',
       'loading' => 'lazy'
   ]) ?>
   ```

   **Method 2: Direct URL**
   ```html
   <img src="/img.php?src=new-photo.jpg&w=800&h=600" alt="Description">
   ```

3. **The optimized image is automatically generated** on first request and cached in `/images/cache/`

### Replacing Existing Images

**Option A: Replace the source file** (preserves all references)
```bash
# Backup old image first (optional)
cp /var/www/boshkalighting/images/old-photo.jpg /tmp/backup/

# Replace with new image (use same filename)
cp /path/to/new-version.jpg /var/www/boshkalighting/images/old-photo.jpg

# Clear cached version to force regeneration
rm /var/www/boshkalighting/images/cache/*old-photo*
```

**Option B: Add new image and update code**
1. Upload new image with different name
2. Update PHP file to reference new filename
3. Remove old image file after verification

### Gallery Images

Gallery images are stored in `/images/gallery/` and dynamically loaded:

1. **Add new gallery image:**
   ```bash
   cp new-gallery-photo.jpg /var/www/boshkalighting/images/gallery/
   ```

2. **The image automatically appears in the gallery** (no code changes needed)
   - `get_gallery_images.php` scans the directory
   - `gallery.php` dynamically loads all images

3. **Remove gallery image:**
   ```bash
   rm /var/www/boshkalighting/images/gallery/old-photo.jpg
   ```

### Updating Team Member Photos

Team photos are referenced in individual team member pages:

1. Upload new photo: `images/team-member-name.jpg`
2. Edit the team member's PHP file (e.g., `kerie-boshka.php`)
3. Update the image reference
4. Test and deploy

### Image Optimization Parameters

When using `img.php`, you can specify:
- `w` - Width in pixels
- `h` - Height in pixels
- `q` - JPEG quality (1-100, default: 85)

**Examples:**
```
/img.php?src=photo.jpg&w=1920&h=1080&q=90  # Hero image, high quality
/img.php?src=photo.jpg&w=400&h=400&q=80    # Thumbnail, lower quality
/img.php?src=photo.jpg&w=800              # Width only, auto height
```

### Best Practices

1. **Upload high-quality source images** (the system will optimize them)
2. **Use descriptive filenames** (e.g., `team-kerie-boshka.jpg` not `IMG_1234.jpg`)
3. **Add alt text** for accessibility and SEO
4. **Use lazy loading** for images below the fold: `loading="lazy"`
5. **Preload critical images** (hero images, above-the-fold content)
6. **Monitor cache directory size** occasionally

---

## How to Update Navigation, Footer, and Common Layout Elements

### Navigation Menu

Edit `includes/header.php`:

**To add a new navigation link:**
```php
<li><a href="<?= $baseUrl; ?>/new-page.php" class="<?= $currentPage === 'new-page' ? 'active' : '' ?>">New Page</a></li>
```

**To remove a navigation link:**
Delete the corresponding `<li>` element

**To reorder links:**
Move the `<li>` elements in the desired order

### Footer

Edit `includes/footer.php`:

**Update social media links:**
```php
<a href="https://www.facebook.com/..." target="_blank" rel="noopener noreferrer" aria-label="Facebook">
```

**Update copyright year:**
The year is dynamically generated: `<?= date("Y") ?>`

### Header Styles

Header styling is in `includes/header.php` within `<style>` tags. Key variables:
```css
:root {
  --header-primary: #9EB2BD;    /* Primary blue-grey */
  --header-warm: #C4B29A;       /* Warm cream accent */
  --header-text: #434D53;       /* Text color */
}
```

### Global Styles

Each page file contains its own embedded styles. Common patterns:
- Color variables defined in `:root { }`
- Mobile-responsive breakpoints: `@media (max-width: 900px)`, `@media (max-width: 480px)`

---

## Common Maintenance Tasks

### Backups

**What to backup:**
1. **Code:** The entire `/var/www/boshkalighting/` directory (or use Git)
2. **Images:** Source images in `/images/` (cache can be regenerated)

**Backup command:**
```bash
# Full backup
tar -czf boshkalighting-backup-$(date +%Y%m%d).tar.gz /var/www/boshkalighting/

# Images only
tar -czf boshkalighting-images-$(date +%Y%m%d).tar.gz /var/www/boshkalighting/images/
```

**Restoration:**
```bash
tar -xzf boshkalighting-backup-YYYYMMDD.tar.gz -C /var/www/
```

### Clearing Image Cache

If images aren't updating after replacing source files:
```bash
# Clear entire cache
rm -rf /var/www/boshkalighting/images/cache/*

# Clear specific image cache
rm /var/www/boshkalighting/images/cache/*specific-filename*
```

Cache will automatically regenerate on next page load.

### Monitoring Site Health

**Check Apache error logs:**
```bash
tail -f /var/log/apache2/boshkalighting-error.log
```

**Check Apache access logs:**
```bash
tail -f /var/log/apache2/boshkalighting-access.log
```

**Check disk space:**
```bash
df -h
du -sh /var/www/boshkalighting/images/cache/
```

**Check PHP errors:**
Errors are logged to Apache error log by default.

### Updating Dependencies

**External dependencies (loaded from CDN):**
- Google Fonts: Automatically updated by Google
- Font Awesome: Currently version 6.4.0
  - To update: Change version in `includes/footer.php` and other pages

**No package manager dependencies** (no npm, composer) - the site is pure PHP with no build step.

### Security Updates

**Update PHP:**
```bash
sudo apt update
sudo apt upgrade php
sudo systemctl restart apache2
```

**Update Apache:**
```bash
sudo apt update
sudo apt upgrade apache2
sudo systemctl restart apache2
```

**Check .htaccess security:**
- HTTPS redirect is configured
- Directory listing is disabled
- mod_rewrite is enabled

### SEO Maintenance

**Update sitemap.xml:**
- Add new pages to `sitemap.xml`
- Update `<lastmod>` dates when pages change significantly
- Submit updated sitemap to Google Search Console

**Update robots.txt:**
- Block access to admin/test pages
- Allow access to all public pages

**Meta tags:**
Each page has meta tags for:
- `<title>` - Page title
- `<meta name="description">` - Page description
- Open Graph tags for social sharing
- Canonical URLs

### Performance Monitoring

**Test page load speed:**
- Google PageSpeed Insights: https://pagespeed.web.dev/
- GTmetrix: https://gtmetrix.com/

**Key metrics to monitor:**
- Largest Contentful Paint (LCP): < 2.5s
- First Input Delay (FID): < 100ms
- Cumulative Layout Shift (CLS): < 0.1

**Optimization tips:**
- Use lazy loading for images below the fold
- Preload critical images
- Minimize inline CSS/JS (already done)
- Enable Gzip compression (Apache configuration)

---

## Basic Troubleshooting

### Site Not Loading

**Check Apache status:**
```bash
sudo systemctl status apache2
```

**Restart Apache:**
```bash
sudo systemctl restart apache2
```

**Check PHP is installed:**
```bash
php -v
```

### Images Not Displaying

**Check file permissions:**
```bash
ls -la /var/www/boshkalighting/images/
ls -la /var/www/boshkalighting/images/cache/
```

**Fix permissions:**
```bash
sudo chown -R www-data:www-data /var/www/boshkalighting/images/
sudo chmod -R 755 /var/www/boshkalighting/images/
```

**Check PHP GD extension:**
```bash
php -m | grep -i gd
```

**Install GD if missing:**
```bash
sudo apt install php-gd
sudo systemctl restart apache2
```

**Test image optimizer directly:**
```
http://boshkalighting.local/img.php?src=test-image.jpg&w=800&h=600
```

### Clean URLs Not Working (404 errors)

**Enable mod_rewrite:**
```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

**Check .htaccess file exists:**
```bash
cat /var/www/boshkalighting/.htaccess
```

**Verify Apache AllowOverride:**
Virtual host must have `AllowOverride All` in the Directory directive.

### Google Analytics Not Tracking

**Verify production environment:**
View page source and check if Google Analytics code is present:
```html
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QLWLLDYFP9"></script>
```

**Note:** Google Analytics only loads in production (not on .local or localhost domains).

**Force production mode for testing:**
Set environment variable before Apache starts:
```bash
export APP_ENV=production
```

### Form Submissions Not Working

**Check contact form in contact.php:**
- Forms use client-side validation
- No server-side form processing (uses mailto or form service)

**Check JavaScript console for errors:**
Open browser Developer Tools (F12) → Console tab

### Mobile Menu Not Working

**Check JavaScript errors:**
- Open browser console
- The mobile menu toggle is in `includes/header.php`

**Clear browser cache:**
- Mobile menu relies on inline JavaScript
- Hard refresh: Ctrl+Shift+R (Windows) or Cmd+Shift+R (Mac)

### Page Changes Not Appearing

**Clear browser cache:**
- Hard refresh: Ctrl+Shift+R or Cmd+Shift+R

**Clear PHP opcache:**
```bash
sudo systemctl reload apache2
```

**Check git status:**
```bash
cd /var/www/boshkalighting
git status
git log --oneline -5
```

**Verify you're editing the right file:**
```bash
# Find where text appears
grep -r "text to find" /var/www/boshkalighting/*.php
```

### High Server Load / Slow Performance

**Check cache directory size:**
```bash
du -sh /var/www/boshkalighting/images/cache/
```

**Check Apache processes:**
```bash
ps aux | grep apache2
```

**Check memory usage:**
```bash
free -h
```

**Monitor real-time access:**
```bash
tail -f /var/log/apache2/boshkalighting-access.log
```

**Optimize large images:**
Large source images are fine (they're optimized on-the-fly), but check if any are unnecessarily huge (>50MB).

---

## Security Notes

**Environment Variables:**
- No database connection required (static site)
- No sensitive credentials stored in code
- Environment detection is automatic

**File Permissions:**
- Web files: 644 (readable by all, writable by owner)
- Directories: 755 (readable/executable by all, writable by owner)
- Cache directory: owned by www-data

**HTTPS:**
- Forced via .htaccess redirect
- All production traffic uses HTTPS

**Git Security:**
- .gitignore excludes sensitive files
- No .env files or credentials committed
- Large images excluded from repository

**Never commit:**
- Private keys or certificates
- Database credentials
- API keys or secrets
- User-uploaded content (if added in future)

---

## Getting Help

**Check logs first:**
```bash
# Apache error log
tail -n 50 /var/log/apache2/boshkalighting-error.log

# Apache access log
tail -n 50 /var/log/apache2/boshkalighting-access.log
```

**Test environment detection:**
```bash
# Check what environment the site thinks it's in
curl -I http://boshkalighting.local/
```

**Verify Git status:**
```bash
cd /var/www/boshkalighting
git status
git log --oneline -5
git branch -a
```

**Common Commands Quick Reference:**
```bash
# Restart Apache
sudo systemctl restart apache2

# Check Apache status
sudo systemctl status apache2

# Test PHP syntax
php -l filename.php

# Check PHP version
php -v

# Check installed PHP modules
php -m

# View site files
ls -la /var/www/boshkalighting/

# Check disk space
df -h

# Check memory usage
free -h

# Watch logs in real-time
tail -f /var/log/apache2/boshkalighting-error.log
```

---

## Additional Resources

**Site URLs:**
- Production: https://boshkalighting.com
- Local development: http://boshkalighting.local

**Social Media:**
- Facebook: https://www.facebook.com/p/Boshka-Lighting-Electric-61571694004135/
- Instagram: https://www.instagram.com/boshkalighting

**External Services:**
- Google Analytics: Property ID G-QLWLLDYFP9
- Google Search Console: Verified for boshkalighting.com

**Tools:**
- PageSpeed Insights: https://pagespeed.web.dev/
- Google Search Console: https://search.google.com/search-console
- GTmetrix: https://gtmetrix.com/

---

*Last Updated: 2025-11-16*
