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
            overflow: hidden;
        }

        .pest-stats-main-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            opacity: 0;
            transform: scale(1.2) translateX(-30px);
            transition: all 1.2s cubic-bezier(0.4, 0, 0.2, 1);
            filter: grayscale(0.3);
        }

        .pest-stats-col-img.animate .pest-stats-main-img {
            opacity: 1;
            transform: scale(1) translateX(0);
            filter: grayscale(0);
        }

        .pest-stats-col-img:hover .pest-stats-main-img {
            transform: scale(1.05);
            filter: grayscale(0) brightness(1.1);
        }

        /* Image overlay effect */
        .pest-stats-col-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(14, 61, 107, 0.1) 0%, transparent 50%);
            opacity: 0;
            transition: opacity 0.6s ease;
            pointer-events: none;
        }

        .pest-stats-col-img:hover::after {
            opacity: 1;
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
            overflow: hidden;
            
            /* Subtle dotted pattern overlay */
            background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0;
            transform: translateX(50px);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .pest-stats-col-content.animate {
            opacity: 1;
            transform: translateX(0);
        }

        /* Animated background pattern */
        .pest-stats-col-content::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 30px 30px;
            animation: patternMove 20s linear infinite;
            pointer-events: none;
        }

        @keyframes patternMove {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            100% {
                transform: translate(30px, 30px) rotate(360deg);
            }
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
            opacity: 0;
            transform: translateY(40px) scale(0.8);
            transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .pest-stat-item.animate {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .pest-stat-item:hover {
            transform: translateY(-10px) scale(1.05);
        }

        /* Icons */
        .pest-stat-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 15px;
            transform: scale(0) rotate(-180deg);
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
        }

        .pest-stat-icon.animate {
            transform: scale(1) rotate(0deg);
        }

        .pest-stat-item:hover .pest-stat-icon {
            transform: scale(1.2) rotate(360deg);
        }
        
        .pest-stat-icon svg {
            width: 100%;
            height: 100%;
            fill: none;
            stroke: var(--pest-stats-white);
            stroke-width: 1.5;
            transition: all 0.3s ease;
        }

        .pest-stat-item:hover .pest-stat-icon svg {
            stroke-width: 2;
            filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.5));
        }

        /* Icon glow effect */
        .pest-stat-icon::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: all 0.5s ease;
        }

        .pest-stat-item:hover .pest-stat-icon::after {
            width: 80px;
            height: 80px;
        }

        /* Numbers */
        .pest-stat-number {
            font-size: 48px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 10px;
            display: block;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #ffffff 0%, rgba(255,255,255,0.8) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .pest-stat-item:hover .pest-stat-number {
            transform: scale(1.1);
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
        }

        /* Labels */
        .pest-stat-label {
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.5px;
            opacity: 0.9;
            transition: all 0.3s ease;
        }

        .pest-stat-item:hover .pest-stat-label {
            opacity: 1;
            transform: translateY(-3px);
            letter-spacing: 1px;
        }

        /* Description Paragraph */
        .pest-stats-desc {
            font-size: 16px;
            line-height: 1.5;
            max-width: 600px;
            margin: 0;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
        }

        .pest-stats-desc.animate {
            opacity: 0.9;
            transform: translateY(0);
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
        
        <div class="pest-stat-item" data-target="20">
            <div class="pest-stat-icon">
            <svg viewBox="0 0 24 24"><path d="M20 7h-5.2c-.62-1.17-1.84-2-3.25-2s-2.63.83-3.25 2H3v12h18V7zM11.5 6.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5S10 8.83 10 8s.67-1.5 1.5-1.5zm-7 11V8.5h2.7c.2.51.52.97.91 1.35.78.78 1.86 1.25 3.04 1.25s2.26-.47 3.04-1.25c.39-.39.71-.85.91-1.35h2.7v8.5H4.5z"/><circle cx="12" cy="12" r="1.5"/></svg>
            </div>
            <span class="pest-stat-number">0</span>
            <span class="pest-stat-label">Experts</span>
        </div>

        <div class="pest-stat-item" data-target="1500">
            <div class="pest-stat-icon">
            <svg viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm0 13c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/><path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
            </div>
            <span class="pest-stat-number">0</span>
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

        // Pest Stats Section Animations
        document.addEventListener('DOMContentLoaded', function() {
            const statsSection = document.querySelector('.pest-stats-section');
            const imgCol = document.querySelector('.pest-stats-col-img');
            const contentCol = document.querySelector('.pest-stats-col-content');
            const statItems = document.querySelectorAll('.pest-stat-item');
            const statIcons = document.querySelectorAll('.pest-stat-icon');
            const desc = document.querySelector('.pest-stats-desc');

            if (!statsSection) return;

            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.3,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate image column
                        if (imgCol) {
                            imgCol.classList.add('animate');
                        }

                        // Animate content column
                        if (contentCol) {
                            contentCol.classList.add('animate');
                        }

                        // Animate stat items with stagger
                        statItems.forEach((item, index) => {
                            setTimeout(() => {
                                item.classList.add('animate');
                                
                                // Animate icon
                                const icon = item.querySelector('.pest-stat-icon');
                                if (icon) {
                                    setTimeout(() => {
                                        icon.classList.add('animate');
                                    }, 200);
                                }

                                // Start counter animation
                                const numberEl = item.querySelector('.pest-stat-number');
                                const target = parseInt(item.getAttribute('data-target'));
                                
                                if (numberEl && target) {
                                    animateCounter(numberEl, target, index * 300);
                                }
                            }, index * 300);
                        });

                        // Animate description
                        if (desc) {
                            setTimeout(() => {
                                desc.classList.add('animate');
                            }, 800);
                        }

                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            observer.observe(statsSection);

            // Counter animation function
            function animateCounter(element, target, delay) {
                setTimeout(() => {
                    let current = 0;
                    const increment = target / 50;
                    const suffix = target >= 1000 ? '+' : '+';
                    
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        element.textContent = Math.floor(current) + suffix;
                    }, 30);
                }, delay);
            }

            // Enhanced hover effects
            statItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            });
        });
    </script>
</body>
</html>