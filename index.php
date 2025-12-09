<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestraid - Pest Control Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <?php 
    $include_type = 'css';
    include 'asset/include/header.php'; 
    ?>
    
    <style>
        /* --- Hero Section --- */
        .hero-section {
            position: relative;
            height: 600px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: opacity 0.8s ease;
            opacity: 0;
            z-index: 0;
        }

        .hero-bg.is-active {
            opacity: 1;
        }

        .hero-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 600px;
            color: var(--white);
            margin-left: 60px;
            position: relative;
            z-index: 2;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        .hero-content.is-fading {
            opacity: 0.6;
            transform: translateY(6px);
        }

        /* Hero stagger items */
        .hero-anim {
            opacity: 0;
            transform: translateY(26px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .hero-anim.show {
            opacity: 1;
            transform: translateY(0);
        }

        .badge {
            background-color:rgb(13, 139, 45);
            color: var(--white);
            padding: 8px 16px;
            border-radius: 20px 20px 20px 0;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
            margin-bottom: 25px;
        }

        .hero-content h1 {
            font-size: 60px;
            line-height: 1.1;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .hero-content p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 40px;
            opacity: 0.95;
            max-width: 90%;
        }

        .btn-large {
            padding: 16px 36px;
            font-size: 14px;
            text-transform: uppercase;
        }

        /* Slider Arrows */
        .slider-arrow {
            background: rgba(255, 255, 255, 0.2);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            cursor: pointer;
            transition: background 0.3s;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            user-select: none; /* Prevents highlighting text when clicking fast */
        }

        .slider-arrow:hover {
            background: var(--primary-blue);
        }

        .arrow-left {
            left: 0;
        }

        .arrow-right {
            right: 0;
        }

        /* --- Hero Section Responsive Adjustments --- */
        @media (max-width: 992px) {
            .hero-content {
                margin-left: 0;
                text-align: center;
                margin: 0 auto;
            }
            
            .hero-content h1 {
                font-size: 38px;
            }
            
            .hero-section {
                height: 500px;
            }
            
            .slider-arrow {
                display: none; /* Often hidden on mobile, or made smaller */
            }
        }

        :root {
            --pest-stats-blue: #0E3D6B; /* Dark blue from the image */
            --pest-stats-white: #ffffff;
        }

        /* Section Wrapper */
        .pest-stats-section {
            display: flex;
            width: 100%;
            min-height: 320px; /* Reduced overall height */
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            overflow: hidden;
        }

        /* --- Left Column (Image) --- */
        .pest-stats-col-img {
            flex: 1;
            position: relative;
            max-height: 353px; /* Limit image column height on desktop */
        }

        .pest-stats-main-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* --- Right Column (Content) --- */
        .pest-stats-col-content {
            flex: 1;
            background-color:rgb(45, 97, 30);
            color: var(--pest-stats-white);
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            
            /* Subtle dotted pattern overlay */
            background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        /* Stats Container */
        .pest-stats-counters {
            display: flex;
            justify-content: center;
            gap: 60px;
            margin-bottom: 40px;
            width: 100%;
            max-width: 600px;
        }

        /* Individual Stat Block */
        .pest-stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Icons */
        .pest-stat-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 15px;
        }
        
        .pest-stat-icon svg {
            width: 100%;
            height: 100%;
            fill: none;
            stroke: var(--pest-stats-white);
            stroke-width: 1.5;
        }

        /* Numbers */
        .pest-stat-number {
            font-size: 48px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 10px;
            display: block;
        }

        /* Labels */
        .pest-stat-label {
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.5px;
            opacity: 0.9;
        }

        /* Description Paragraph */
        .pest-stats-desc {
            font-size: 16px;
            line-height: 1.5;
            max-width: 600px;
            margin: 0;
            opacity: 0.9;
        }

        /* --- Responsive Layout --- */
        @media (max-width: 992px) {
            .pest-stats-section {
            flex-direction: column;
            }
            
            .pest-stats-col-img {
            height: 300px; /* Fixed height for image on mobile */
            flex: none;
            }
            
            .pest-stats-col-content {
            padding: 50px 20px;
            }
        }
        
        @media (max-width: 600px) {
            .pest-stats-counters {
            flex-direction: column;
            gap: 40px;
            }
        }
    </style>
</head>
<body>

    <?php 
    $include_type = 'html';
    include 'asset/include/header.php'; 
    ?>

    <section class="hero-section" id="heroSection">
        <div class="hero-bg is-active" id="heroBg1"></div>
        <div class="hero-bg" id="heroBg2"></div>
        <div class="hero-container">
            
            <div class="slider-arrow arrow-left" id="prevBtn">
                <i class="fa-solid fa-chevron-left"></i>
            </div>

            <div class="hero-content">
                <span class="badge hero-anim">THE EXTERMINATION EXPERTS</span>
                <h1 class="hero-anim">Most affordable pest control rates</h1>
                <p class="hero-anim">Not only do we offer very competitive rates but we also offer affordable service bundles for residential and commercial clients.</p>
                <a href="#" class="btn btn-primary btn-large hero-anim" style="background-color:rgb(13, 139, 45);">VIEW OUR PRICING</a>
            </div>
            
            <div class="slider-arrow arrow-right" id="nextBtn">
                <i class="fa-solid fa-chevron-right"></i>
            </div>

        </div>
    </section>

    <?php 
    $include_type = 'html';
    include 'home/about.php'; 
    ?>

    <?php 
    $include_type = 'html';
    include 'home/service.php'; 
    ?>

    

    <?php 
    $include_type = 'html';
    include 'home/intro.php'; 
    ?>
    
    <?php 
    $include_type = 'html';
    include 'home/partner.php'; 
    ?>

    <section class="pest-stats-section">
    
    <div class="pest-stats-col-img">
        <img src="asset/image/cleanman.jpg" alt="Pest control expert working" class="pest-stats-main-img">
    </div>

    <div class="pest-stats-col-content">
        
        <div class="pest-stats-counters">
        
        <div class="pest-stat-item">
            <div class="pest-stat-icon">
            <svg viewBox="0 0 24 24"><path d="M20 7h-5.2c-.62-1.17-1.84-2-3.25-2s-2.63.83-3.25 2H3v12h18V7zM11.5 6.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5S10 8.83 10 8s.67-1.5 1.5-1.5zm-7 11V8.5h2.7c.2.51.52.97.91 1.35.78.78 1.86 1.25 3.04 1.25s2.26-.47 3.04-1.25c.39-.39.71-.85.91-1.35h2.7v8.5H4.5z"/><circle cx="12" cy="12" r="1.5"/></svg>
            </div>
            <span class="pest-stat-number">20+</span>
            <span class="pest-stat-label">Experts</span>
        </div>

        <div class="pest-stat-item">
            <div class="pest-stat-icon">
            <svg viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm0 13c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/><path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
            </div>
            <span class="pest-stat-number">1500+</span>
            <span class="pest-stat-label">Satisfied Clients</span>
        </div>

        </div>

        <p class="pest-stats-desc">We are an award-winning pest control company with over 20 years experience in the business.</p>

    </div>

    </section>

    <?php 
    $include_type = 'html';
    include 'home/video.php'; 
    ?>

    <?php 
    $include_type = 'html';
    include 'home/why.php'; 
    ?>

    <?php 
    $include_type = 'html';
    include 'home/contact2.php'; 
    ?>

    <?php 
    $include_type = 'html';
    include 'asset/include/footer.php'; 
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // Sticky header on scroll
            const siteHeader = document.querySelector('.site-header');
            function toggleStickyHeader() {
                if (!siteHeader) return;
                if (window.scrollY > 2) {
                    siteHeader.classList.add('sticky');
                } else {
                    siteHeader.classList.remove('sticky');
                }
            }
            toggleStickyHeader();
            window.addEventListener('scroll', toggleStickyHeader);

            // Active nav state on scroll
            const navLinks = document.querySelectorAll('.main-nav .nav-links a');
            const sectionMap = [
                { id: 'heroSection', href: '#heroSection' },
                { id: 'about-section', href: '#about-section' },
                { id: 'service-section', href: '#service-section' },
                { id: 'contact-section', href: '#contact-section' },
            ];

            function setActiveNav() {
                let current = 'heroSection';
                sectionMap.forEach((item) => {
                    const el = document.getElementById(item.id);
                    if (!el) return;
                    const rect = el.getBoundingClientRect();
                    if (rect.top <= 140 && rect.bottom >= 140) {
                        current = item.id;
                    }
                });

                navLinks.forEach((link) => {
                    const href = link.getAttribute('href');
                    if (href === `#${current}`) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }

            setActiveNav();
            window.addEventListener('scroll', setActiveNav);

            // 1. Configuration
            const heroImages = [
                'asset/image/pest1.jpg',
                'asset/image/pest2.jpg'
                // You can add more images here easily: 'asset/image/pest3.jpg'
            ];
            
            // The dark overlay gradient CSS string
            const overlayGradient = 'linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.1))';

            // 2. DOM Elements
            const heroSection = document.getElementById('heroSection');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const heroBg1 = document.getElementById('heroBg1');
            const heroBg2 = document.getElementById('heroBg2');
            const heroContent = document.querySelector('.hero-content');
            const heroAnimItems = heroContent ? heroContent.querySelectorAll('.hero-anim') : [];

            let currentSlideIndex = 0;
            let slideInterval;
            let isBg1Active = true;

            // 3. Function to update background with fade animation
            function updateHeroBackground() {
                const imageUrl = heroImages[currentSlideIndex];
                const nextBg = isBg1Active ? heroBg2 : heroBg1;
                const currentBg = isBg1Active ? heroBg1 : heroBg2;

                // Set new image on the hidden layer
                nextBg.style.backgroundImage = `${overlayGradient}, url('${imageUrl}')`;

                // Fade layers
                nextBg.classList.add('is-active');
                currentBg.classList.remove('is-active');

                // Animate hero content subtly
                if (heroContent) {
                    heroContent.classList.add('is-fading');
                    setTimeout(() => heroContent.classList.remove('is-fading'), 350);
                }

                runHeroStagger();

                // Toggle active tracker
                isBg1Active = !isBg1Active;
            }

            function runHeroStagger() {
                if (!heroAnimItems || !heroAnimItems.length) return;
                heroAnimItems.forEach((el) => el.classList.remove('show'));
                // force reflow to restart transitions
                void heroContent.offsetHeight;
                heroAnimItems.forEach((el, idx) => {
                    setTimeout(() => el.classList.add('show'), idx * 220); // slower stagger
                });
            }

            // 4. Navigation Functions
            function nextSlide() {
                currentSlideIndex++;
                if (currentSlideIndex >= heroImages.length) {
                    currentSlideIndex = 0; // Loop back to start
                }
                updateHeroBackground();
                resetTimer(); // Reset auto-play timer on click
            }

            function prevSlide() {
                currentSlideIndex--;
                if (currentSlideIndex < 0) {
                    currentSlideIndex = heroImages.length - 1; // Loop to end
                }
                updateHeroBackground();
                resetTimer(); // Reset auto-play timer on click
            }

            // 5. Auto Play Logic
            function startTimer() {
                slideInterval = setInterval(nextSlide, 5000); // Change every 5 seconds
            }

            function resetTimer() {
                clearInterval(slideInterval);
                startTimer();
            }

            // 6. Event Listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            // Initialize
            if (heroBg1) {
                heroBg1.style.backgroundImage = `${overlayGradient}, url('${heroImages[0]}')`;
                heroBg1.classList.add('is-active');
            }
            if (heroBg2) {
                heroBg2.style.backgroundImage = `${overlayGradient}, url('${heroImages[1 % heroImages.length]}')`;
            }
            updateHeroBackground(); // Load first image to ensure fade setup
            runHeroStagger();
            startTimer(); // Start auto-play
        });
    </script>
</body>
</html>