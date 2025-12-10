<style>
    /* --- Scoped Variables for this section --- */
    .contact-hero-section {
        --primary-blue: #007bff; /* Adjust branding color here */
        --light-bg: #f8f9fa;
        --text-dark: #333;
        --input-bg: #f8f9fa;
        --dot-color: #007bff;
        
        display: flex;
        flex-wrap: wrap;
        min-height: 600px;
        background-color: #fff;
        font-family: 'Arial', sans-serif;
        overflow: hidden;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Reset for elements inside this section to ensure consistency */
    .contact-hero-section *, 
    .contact-hero-section *::before, 
    .contact-hero-section *::after {
        box-sizing: inherit;
    }

    /* --- Left Side: Visual --- */
    .contact-visual {
        flex: 1;
        min-width: 300px;
        position: relative;
        min-height: 400px; /* Ensures height on mobile */
        overflow: hidden;
    }

    .contact-visual img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transform: translateX(-100%) scale(1.1);
        filter: grayscale(0.3) blur(3px);
        transition: all 1.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .contact-visual img.animate {
        opacity: 1;
        transform: translateX(0) scale(1);
        filter: grayscale(0) blur(0px);
    }

    .contact-visual:hover img {
        transform: scale(1.05);
        filter: grayscale(0) brightness(1.1);
    }

    /* --- Right Side: Content --- */
    .contact-content {
        flex: 1;
        min-width: 300px;
        padding: 4rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        opacity: 0;
        transform: translateX(50px);
        transition: all 1s cubic-bezier(0.4, 0, 0.2, 1) 0.3s;
    }

    .contact-content.animate {
        opacity: 1;
        transform: translateX(0);
    }

    /* --- Typography --- */
    .contact-badge {
        background-color:rgb(75, 192, 39);
        color: white;
        padding: 8px 24px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        display: inline-block;
        margin-bottom: 1.5rem;
        align-self: flex-start;
        opacity: 0;
        transform: scale(0.3) rotate(-15deg);
        transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
    }

    .contact-badge.animate {
        opacity: 1;
        transform: scale(1) rotate(0deg);
    }

    .contact-badge::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.6s ease;
    }

    .contact-badge:hover::before {
        left: 100%;
    }

    .contact-badge:hover {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 5px 20px rgba(75, 192, 39, 0.4);
    }

    .contact-heading {
        font-size: 2.5rem;
        color: var(--text-dark);
        margin: 0 0 2rem 0;
        font-weight: 700;
        line-height: 1.2;
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.9s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
        position: relative;
    }

    .contact-heading.animate {
        opacity: 1;
        transform: translateY(0);
    }

    .contact-heading::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, rgb(75, 192, 39), transparent);
        transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1) 1.2s;
    }

    .contact-heading.animate::after {
        width: 150px;
    }

    .contact-heading:hover {
        transform: translateY(-3px);
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* --- Form Grid --- */
    .hero-form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        position: relative;
        z-index: 2;
    }

    .input-group {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .input-group.animate {
        opacity: 1;
        transform: translateY(0);
    }

    .input-group input,
    .input-group textarea {
        width: 100%;
        padding: 15px 20px;
        background-color: var(--input-bg);
        border: 1px solid transparent;
        border-radius: 4px;
        font-size: 1rem;
        color: #555;
        outline: none;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .input-group input::before,
    .input-group textarea::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: rgb(75, 192, 39);
        transition: width 0.3s ease;
    }

    .input-group input::placeholder,
    .input-group textarea::placeholder {
        color: #aaa;
    }

    .input-group input:focus,
    .input-group textarea:focus {
        background-color: #fff;
        border-color: rgb(75, 192, 39);
        box-shadow: 0 4px 15px rgba(75, 192, 39, 0.15);
        transform: translateY(-2px);
    }

    .input-group input:focus::placeholder,
    .input-group textarea:focus::placeholder {
        transform: translateY(-5px);
        font-size: 0.85rem;
        opacity: 0.7;
    }

    .full-width {
        grid-column: span 2;
    }

    /* --- Button --- */
    .btn-send {
        background-color: #4bbf27;
        color: white;
        border: none;
        padding: 15px 40px;
        font-size: 1rem;
        font-weight: 700;
        border-radius: 6px;
        cursor: pointer;
        text-transform: uppercase;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        width: 25%;
        min-width: 120px;
        position: relative;
        overflow: hidden;
    }

    .btn-send::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .btn-send:hover::before {
        width: 300px;
        height: 300px;
    }

    .btn-send:hover {
        background-color: #3fa020;
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(75, 192, 39, 0.4);
    }

    .btn-send:active {
        transform: translateY(-1px) scale(1.02);
    }

    .btn-send span {
        position: relative;
        z-index: 1;
    }

    /* --- Decoration (Dots) --- */
    .deco-dots {
        position: absolute;
        width: 150px;
        height: 150px;
        background-image: radial-gradient(var(--dot-color) 2px, transparent 2px);
        background-size: 15px 15px;
        opacity: 0;
        z-index: 1;
        border-radius: 50%;
        pointer-events: none;
        transform: scale(0) rotate(0deg);
        transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .deco-dots.animate {
        opacity: 0.2;
        transform: scale(1) rotate(360deg);
    }

    .top-right { 
        top: -30px; 
        right: -30px;
        transition-delay: 0.8s;
    }
    
    .bottom-left { 
        bottom: -30px; 
        left: -30px;
        transition-delay: 1s;
    }

    /* Animated rotation for dots */
    @keyframes rotateDots {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    .deco-dots.animate {
        animation: rotateDots 20s linear infinite;
    }

    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }

    /* --- Responsive --- */
    @media (max-width: 992px) {
        .contact-content { padding: 3rem; }
    }

    @media (max-width: 768px) {
        .contact-hero-section { flex-direction: column; }
        .contact-visual { height: 300px; min-height: 300px; position: relative; }
        .contact-content { padding: 2rem 1.5rem; }
        .contact-heading { font-size: 2rem; }
        .hero-form { grid-template-columns: 1fr; gap: 15px; }
        .full-width { grid-column: span 1; }
        .btn-send { width: 100%; }
    }
</style>

<section class="contact-hero-section" id="contact-section">
    <div class="contact-visual">
        <img src="asset/image/contact.jpg" alt="Worker">
    </div>

    <div class="contact-content">
        <div class="deco-dots top-right"></div>
        <div class="deco-dots bottom-left"></div>

        <div class="form-wrapper">
            <span class="contact-badge">CONTACT US</span>
            <h2 class="contact-heading">Get in Touch with Us</h2>

            <form class="hero-form">
                <div class="input-group">
                    <input type="text" placeholder="First Name" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Last Name" required>
                </div>
                
                <div class="input-group">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="tel" placeholder="Phone">
                </div>
                
                <div class="input-group full-width">
                    <textarea placeholder="Message" rows="5"></textarea>
                </div>

                <div class="input-group full-width">
                    <button type="submit" class="btn-send"><span>SEND</span></button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const section = document.querySelector('.contact-hero-section');
    const visualImg = document.querySelector('.contact-visual img');
    const content = document.querySelector('.contact-content');
    const badge = document.querySelector('.contact-badge');
    const heading = document.querySelector('.contact-heading');
    const inputGroups = document.querySelectorAll('.input-group');
    const decoDots = document.querySelectorAll('.deco-dots');

    if (!section) return;

    // Intersection Observer for scroll animations
    const observerOptions = {
      threshold: 0.2,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Animate image
          if (visualImg) {
            setTimeout(() => {
              visualImg.classList.add('animate');
            }, 100);
          }

          // Animate content wrapper
          if (content) {
            setTimeout(() => {
              content.classList.add('animate');
            }, 300);
          }

          // Animate badge
          if (badge) {
            setTimeout(() => {
              badge.classList.add('animate');
            }, 500);
          }

          // Animate heading
          if (heading) {
            setTimeout(() => {
              heading.classList.add('animate');
            }, 700);
          }

          // Animate input groups with stagger
          inputGroups.forEach((inputGroup, index) => {
            setTimeout(() => {
              inputGroup.classList.add('animate');
            }, 900 + (index * 100));
          });

          // Animate decoration dots
          decoDots.forEach((dot, index) => {
            setTimeout(() => {
              dot.classList.add('animate');
            }, 1400 + (index * 200));
          });

          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    observer.observe(section);

    // Enhanced form input animations
    const inputs = document.querySelectorAll('.input-group input, .input-group textarea');
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'translateY(-2px)';
        this.parentElement.style.transition = 'transform 0.3s ease';
      });

      input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'translateY(0)';
      });

      // Add typing effect
      input.addEventListener('input', function() {
        if (this.value.length > 0) {
          this.style.borderColor = 'rgb(75, 192, 39)';
        } else {
          this.style.borderColor = 'transparent';
        }
      });
    });

    // Button click animation
    const sendBtn = document.querySelector('.btn-send');
    if (sendBtn) {
      sendBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Ripple effect
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.style.position = 'absolute';
        ripple.style.borderRadius = '50%';
        ripple.style.background = 'rgba(255, 255, 255, 0.5)';
        ripple.style.transform = 'scale(0)';
        ripple.style.animation = 'ripple-animation 0.6s ease-out';
        ripple.style.pointerEvents = 'none';
        ripple.style.zIndex = '10';
        
        this.appendChild(ripple);
        
        // Button pulse effect
        this.style.transform = 'scale(0.95)';
        setTimeout(() => {
          this.style.transform = '';
        }, 150);
        
        setTimeout(() => {
          ripple.remove();
        }, 600);
      });
    }

    // Add ripple animation keyframes
    const style = document.createElement('style');
    style.textContent = `
      @keyframes ripple-animation {
        to {
          transform: scale(4);
          opacity: 0;
        }
      }
    `;
    document.head.appendChild(style);
  });
</script>