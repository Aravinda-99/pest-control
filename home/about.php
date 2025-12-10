<style>
  /* CSS Variables for easy color management */
  :root {
    --pest-primary: #1E88E5; /* The main blue color */
    --pest-dark: #222222;
    --pest-text: #666666;
    --pest-light: #ffffff;
  }

  /* Page background */
  body {
    background-image: url('asset/image/back3.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }

  /* Section Reset */
  .pest-hero-section {
    width: 100%;
    background-color: rgba(255, 255, 255, 0.32); /* keep content readable over bg */
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    padding: 60px 0;
    box-sizing: border-box;
    overflow: hidden;
    position: relative;
    margin-bottom: -90px;
  }

  .pest-hero-section * {
    box-sizing: border-box;
  }

  .pest-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* Layout Grid */
  .pest-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 40px;
    align-items: start;
  }

  /* Desktop View */
  @media (min-width: 992px) {
    .pest-grid {
      grid-template-columns: 1fr 1fr; /* Split 50/50 */
      gap: 60px;
    }
  }

  /* Image Column */
  .pest-image-wrapper {
    width: 100%;
    height: 85%;
    min-height: 400px;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .pest-image-wrapper:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
  }

  .pest-main-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
  }

  .pest-image-wrapper:hover .pest-main-img {
    transform: scale(1.05);
  }

  /* Content Column */
  .pest-content-wrapper {
    display: flex;
    flex-direction: column;
    position: relative;
    z-index: 2; /* Keeps text above background patterns */
  }

  /* "About Us" Badge */
  .pest-badge {
    background-color: rgb(13, 139, 45);
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 20px;
    align-self: flex-start;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
  }

  /* Typography */
  .pest-title {
    font-size: 36px;
    line-height: 1.2;
    color: var(--pest-dark);
    margin: 0 0 20px 0;
    font-weight: 800;
  }

  .pest-highlight {
    color: rgb(13, 139, 45);
    font-weight: 600;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 15px;
  }

  .pest-desc {
    color: var(--pest-text);
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 15px;
    margin-top: 0;
  }

  /* Custom List with Blue Checkmarks */
  .pest-features {
    list-style: none;
    padding: 0;
    margin: 15px 0 25px 0;
  }

  .pest-features li {
    display: flex;
    align-items: center;
    color: var(--pest-text);
    margin-bottom: 12px;
    font-size: 15px;
    opacity: 0;
    transform: translateX(-20px);
    transition: all 0.4s ease;
  }

  .pest-features li.animate {
    opacity: 1;
    transform: translateX(0);
  }

  .check-icon {
    background-color: rgb(13, 139, 45);
    border-radius: 50%;
    width: 18px;
    height: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    flex-shrink: 0;
    transition: all 0.3s ease;
    transform: scale(0);
    opacity: 0;
  }

  .check-icon.animate {
    transform: scale(1);
    opacity: 1;
  }

  .pest-features li:hover .check-icon {
    transform: scale(1.2) rotate(360deg);
    background-color: rgb(29, 224, 78);
  }

  .pest-small-text {
    font-size: 13px;
    color: #888;
    font-style: italic; 
    margin-bottom: 30px;
    line-height: 1.5;
  }

  /* Buttons and Contact Area */
  .pest-actions {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 30px;
  }

  .pest-btn {
    background-color: rgb(13, 139, 45);
    color: #fff;
    text-decoration: none;
    padding: 14px 28px;
    border-radius: 6px;
    font-weight: 700;
    font-size: 14px;
    text-transform: uppercase;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
    overflow: hidden;
  }

  .pest-btn::before {
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

  .pest-btn:hover::before {
    width: 300px;
    height: 300px;
  }

  .pest-btn:hover {
    background-color: rgb(29, 224, 78);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(13, 139, 45, 0.4);
  }

  .pest-btn:active {
    transform: translateY(0);
  }

  .pest-contact {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .pest-phone-icon {
    background-color: rgb(13, 139, 45);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(30, 136, 229, 0.3);
    transition: all 0.3s ease;
    cursor: pointer;
    animation: pulse 2s infinite;
  }

  .pest-phone-icon:hover {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 6px 20px rgba(13, 139, 45, 0.5);
    background-color: rgb(29, 224, 78);
  }

  @keyframes pulse {
    0%, 100% {
      box-shadow: 0 4px 10px rgba(30, 136, 229, 0.3);
    }
    50% {
      box-shadow: 0 4px 20px rgba(13, 139, 45, 0.6);
    }
  }

  .pest-phone-icon svg {
    width: 20px;
    height: 20px;
  }

  .pest-contact-info {
    display: flex;
    flex-direction: column;
  }

  .pest-contact-num {
    color: var(--pest-dark);
    font-weight: 800;
    font-size: 16px;
  }

  .pest-contact-label {
    color: var(--pest-text);
    font-size: 13px;
  }

  /* Background Decoration */
  .pest-pattern-overlay {
    position: absolute;
    bottom: -50px;
    right: -50px;
    width: 200px;
    height: 200px;
    background-image: radial-gradient(var(--pest-primary) 15%, transparent 16%);
    background-size: 20px 20px;
    opacity: 0.1;
    border-radius: 50%;
    z-index: 0;
    pointer-events: none;
    animation: rotate 20s linear infinite;
  }

  @keyframes rotate {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }

  /* Animation Classes */
  .fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }

  .fade-in.animate {
    opacity: 1;
    transform: translateY(0);
  }

  .slide-in-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }

  .slide-in-left.animate {
    opacity: 1;
    transform: translateX(0);
  }

  .slide-in-right {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }

  .slide-in-right.animate {
    opacity: 1;
    transform: translateX(0);
  }

  .scale-in {
    opacity: 0;
    transform: scale(0.8);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }

  .scale-in.animate {
    opacity: 1;
    transform: scale(1);
  }

  /* Smooth scroll behavior */
  html {
    scroll-behavior: smooth;
  }
</style>

<section class="pest-hero-section" id="about-section">
  <div class="pest-container">
    <div class="pest-grid">
      
      <div class="pest-image-wrapper slide-in-left">
        <img src="asset/image/pestman.jpg" alt="Pest Control Expert in PPE" class="pest-main-img">
      </div>

      <div class="pest-content-wrapper">
        
        <span class="pest-badge fade-in">ABOUT US</span>

        <h2 class="pest-title fade-in">Pest Control Services From The Experts</h2>
        
        <p class="pest-highlight fade-in">
          We are an award-winning pest control company with over 20 years experience in the business.
        </p>

        <p class="pest-desc fade-in">
          We provide a wide range of services for residential, commercial, and industrial level clients.
        </p>

        <p class="pest-desc fade-in">
          No job is too big or too small, we've got you covered. In addition to our services, you can check out our shop for a wide range of pest control supplies and equipment. When it comes to pest control we are your one-stop shop.
        </p>

        <ul class="pest-features">
          <li>
            <span class="check-icon">
              <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg" ><path d="M1 5L4.5 8.5L11 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
          </li>
          <li>
            <span class="check-icon">
              <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5L4.5 8.5L11 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            Donec quam felis, ultricies nec, pellentesque eu, pretium.
          </li>
          <li>
            <span class="check-icon">
              <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5L4.5 8.5L11 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
          </li>
        </ul>

        <p class="pest-small-text fade-in">
          Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
        </p>

        <div class="pest-actions fade-in">
          <a href="#" class="pest-btn">LEARN MORE</a>
          
          <div class="pest-contact">
            <div class="pest-phone-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 16.92V19.92C22.0011 20.1986 21.9441 20.4742 21.8325 20.7294C21.7209 20.9846 21.5573 21.2137 21.3521 21.402C21.1468 21.5902 20.9046 21.7336 20.6407 21.8228C20.3769 21.912 20.0974 21.9452 19.82 21.92C16.7428 21.5857 13.787 20.5342 11.19 18.84C8.77382 17.2481 6.72533 15.1997 5.13 12.78C3.42697 10.1717 2.37858 7.20393 2.05 4.12C2.02476 3.84332 2.05786 3.56456 2.14717 3.30076C2.23648 3.03696 2.37996 2.79397 2.56828 2.58661C2.75659 2.37925 2.98555 2.2122 3.24043 2.09613C3.4953 1.98006 3.77045 1.91763 4.048 1.92H7.05C7.52562 1.91572 7.9856 2.08658 8.35108 2.40356C8.71657 2.72054 8.96499 3.16399 9.05 3.65C9.20864 4.85244 9.50293 6.03154 9.93 7.17C10.0463 7.47648 10.0716 7.80931 10.0031 8.13076C9.93457 8.4522 9.77502 8.74959 9.542 8.99L7.792 10.74C9.76286 14.2057 12.6071 17.0396 16.08 19.01L17.83 17.26C18.0699 17.0279 18.3667 16.8691 18.6875 16.8011C19.0083 16.7331 19.3404 16.7587 19.646 16.875C20.7816 17.3023 21.9577 17.597 23.16 17.756C23.6496 17.8427 24.0955 18.0945 24.413 18.4639C24.7304 18.8333 24.8997 19.2974 24.895 19.775V22.775C24.8952 23.0526 24.8329 23.3278 24.7126 23.583C24.601 23.8382 24.4374 24.0673 24.2321 24.2556C24.0268 24.4438 23.7846 24.5872 23.5207 24.6764C23.2569 24.7656 22.9774 24.7988 22.7 24.7736C19.6228 24.4393 16.667 23.3878 14.07 21.6936C11.6538 20.1017 9.60533 18.0533 8.01 15.6336C6.30697 13.0253 5.25858 10.0575 4.93 6.9736C4.90476 6.69692 4.93786 6.41816 5.02717 6.15436C5.11648 5.89056 5.25996 5.64757 5.44828 5.44021C5.63659 5.23285 5.86555 5.0658 6.12043 4.94973C6.3753 4.83366 6.65045 4.77123 6.928 4.7736H9.93C10.4056 4.76932 10.8656 4.94018 11.2311 5.25716C11.5966 5.57414 11.845 6.01759 11.93 6.5036C12.0886 7.70604 12.3829 8.88514 12.81 10.0236C12.9263 10.3301 12.9516 10.6629 12.8831 10.9844C12.8146 11.3058 12.655 11.6032 12.422 11.8436L10.672 13.5936C12.6429 17.0593 15.4871 19.8932 18.96 21.8636L20.71 20.1136C20.9499 19.8815 21.2467 19.7227 21.5675 19.6547C21.8883 19.5867 22.2204 19.6123 22.526 19.7286C23.6616 20.1559 24.8377 20.4506 26.04 20.6096C26.5296 20.6963 26.9755 20.9481 27.293 21.3175C27.6104 21.6869 27.7797 22.151 27.775 22.6286V25.6286C27.7752 25.9062 27.7129 26.1814 27.5926 26.4366C27.481 26.6918 27.3174 26.9209 27.1121 27.1092C26.9068 27.2974 26.6646 27.4408 26.4007 27.53C26.1369 27.6192 25.8574 27.6524 25.58 27.6272Z" fill="white"/></svg>
            </div>
            <div class="pest-contact-info">
              <span class="pest-contact-num">+1(234)1245678</span>
              <span class="pest-contact-label">Call Our Experts</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <div class="pest-pattern-overlay"></div>
</section>

<script>
  // Intersection Observer for scroll animations
  document.addEventListener('DOMContentLoaded', function() {
    // Create observer with options
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe all elements with animation classes
    const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');
    animatedElements.forEach(el => {
      observer.observe(el);
    });

    // Animate list items with stagger effect
    const listItems = document.querySelectorAll('.pest-features li');
    const listObserver = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          listItems.forEach((item, index) => {
            setTimeout(() => {
              item.classList.add('animate');
              const checkIcon = item.querySelector('.check-icon');
              if (checkIcon) {
                setTimeout(() => {
                  checkIcon.classList.add('animate');
                }, 200);
              }
            }, index * 150); // Stagger delay
          });
          listObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    const featuresList = document.querySelector('.pest-features');
    if (featuresList) {
      listObserver.observe(featuresList);
    }

    // Add smooth hover effects for contact section
    const phoneIcon = document.querySelector('.pest-phone-icon');
    if (phoneIcon) {
      phoneIcon.addEventListener('mouseenter', function() {
        this.style.animation = 'none';
        setTimeout(() => {
          this.style.animation = 'pulse 2s infinite';
        }, 10);
      });
    }

    // Add click animation to button
    const learnMoreBtn = document.querySelector('.pest-btn');
    if (learnMoreBtn) {
      learnMoreBtn.addEventListener('click', function(e) {
        // Create ripple effect
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');
        
        this.appendChild(ripple);
        
        setTimeout(() => {
          ripple.remove();
        }, 600);
      });
    }
  });

  // Add CSS for ripple effect
  const style = document.createElement('style');
  style.textContent = `
    .pest-btn {
      position: relative;
      overflow: hidden;
    }
    .pest-btn .ripple {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.6);
      transform: scale(0);
      animation: ripple-animation 0.6s ease-out;
      pointer-events: none;
    }
    @keyframes ripple-animation {
      to {
        transform: scale(4);
        opacity: 0;
      }
    }
  `;
  document.head.appendChild(style);
</script>