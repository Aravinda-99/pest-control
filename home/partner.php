<style>
  /* --- Local Variables --- */
  :root {
    --pest-partner-bg: #F9FAFB;
    --pest-partner-blue: #1E88E5; /* Match hero blue */
    --pest-partner-gray: #E0E0E0;
    --pest-partner-text: #9E9E9E;
  }

  /* Section Wrapper */
  .pest-partners-section {
    padding: 60px 0 80px 0;
    background-color: #ffffff;
    /* Subtle dot pattern similar to other sections */
    background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
    background-size: 20px 20px;
    font-family: 'Segoe UI', Roboto, sans-serif;
    overflow: hidden; /* Hide the scrollbar for the slider */
  }

  /* --- Section Header with Lines --- */
  .pest-partners-header {
    text-align: center;
    position: relative;
    margin-bottom: 50px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 20px;
  }

  /* The Line behind the text */
  .pest-partners-header::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 20px;
    right: 20px;
    height: 1px;
    background-color: var(--pest-partner-gray);
    z-index: 0;
  }

  .pest-partners-title {
    display: inline-block;
    background-color: #ffffff; /* Masks the line behind it */
    padding: 0 20px;
    position: relative;
    z-index: 1;
    color:rgb(36, 167, 64);
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 0;
  }

  /* --- The Slider Window --- */
  .pest-logo-slider {
    width: 100%;
    overflow: hidden; /* Crops content outside the screen */
    position: relative;
  }

  /* Gradient masks to fade edges (optional, looks pro) */
  .pest-logo-slider::before,
  .pest-logo-slider::after {
    content: "";
    position: absolute;
    top: 0;
    width: 100px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
  }
  
  .pest-logo-slider::before {
    left: 0;
    background: linear-gradient(to right, white, transparent);
  }
  
  .pest-logo-slider::after {
    right: 0;
    background: linear-gradient(to left, white, transparent);
  }

  /* The Moving Track */
  .pest-logo-track {
    display: flex;
    gap: 30px;
    width: max-content; /* Allows track to be as wide as needed */
    /* THE ANIMATION: 30s loop, linear timing for smooth video feel */
    animation: pest-scroll 30s linear infinite; 
  }

  /* Pause on hover so users can see logos */
  .pest-logo-track:hover {
    animation-play-state: paused;
  }

  /* --- Keyframes for Infinite Scroll --- */
  @keyframes pest-scroll {
    0% {
      transform: translateX(0);
    }
    100% {
      /* Move left by exactly 50% of the track width */
      /* This works because we duplicate the logos. Set 1 slides out, Set 2 takes its place instantly. */
      transform: translateX(-50%);
    }
  }

  /* --- Logo Card Styling --- */
  .pest-logo-card {
    width: 180px;
    height: 100px;
    background-color: #fff;
    border: 1px solid #f0f0f0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.03);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    flex-shrink: 0; /* Prevents squishing */
    cursor: pointer;
    padding: 10px 16px;
  }

  .pest-logo-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.08);
  }

  .pest-logo-img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    opacity: 1;
    transition: transform 0.3s ease;
  }

  .pest-logo-card:hover .pest-logo-img {
    transform: scale(1.05);
  }
</style>

<section class="pest-partners-section">
  
  <div class="pest-partners-header">
    <h3 class="pest-partners-title">Our Trusted Partners</h3>
  </div>

  <div class="pest-logo-slider">
    
    <div class="pest-logo-track">
      <!-- First set of partner logos -->
      <div class="pest-logo-card">
        <img src="asset/logo/p1.jpg" alt="Partner 1" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p2.jpg" alt="Partner 2" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p3.jpg" alt="Partner 3" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p4.jpg" alt="Partner 4" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p6.jpg" alt="Partner 5" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p7.jpg" alt="Partner 6" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p8.jpg" alt="Partner 7" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p9.jpg" alt="Partner 8" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p10.jpg" alt="Partner 9" class="pest-logo-img">
      </div>

      <!-- Duplicate set for seamless infinite scroll -->
      <div class="pest-logo-card">
        <img src="asset/logo/p1.jpg" alt="Partner 1" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p2.jpg" alt="Partner 2" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p3.jpg" alt="Partner 3" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p4.jpg" alt="Partner 4" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p6.jpg" alt="Partner 5" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p7.jpg" alt="Partner 6" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p8.jpg" alt="Partner 7" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p9.jpg" alt="Partner 8" class="pest-logo-img">
      </div>
      <div class="pest-logo-card">
        <img src="asset/logo/p10.jpg" alt="Partner 9" class="pest-logo-img">
      </div>

    </div>
  </div>
</section>