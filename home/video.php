<style>
  /* --- Scoped Styles with Unique Prefixes --- */

  /* Section Wrapper */
  .pest-video-section {
    position: relative;
    width: 100%;
    height: 400px; /* Adjust height as needed */
    overflow: hidden;
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    text-align: center;
  }

  /* The Background Video */
  .pest-video-bg {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    transform: translate(-50%, -50%);
    object-fit: cover;
  }

  /* Blue Overlay (to make text readable) */
  .pest-video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(32, 75, 42, 0.85); /* The Pest Control Blue with opacity */
    z-index: 1;
  }

  /* Content Wrapper */
  .pest-video-content {
    position: relative;
    z-index: 2; /* Sits above video and overlay */
    padding: 0 20px;
    max-width: 900px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* Play Button Icon */
  .pest-video-play-btn {
    width: 70px;
    height: 70px;
    background-color: #1E88E5; /* Lighter blue for button */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
    cursor: pointer;
    box-shadow: 0 0 0 0 rgba(30, 136, 229, 0.7);
    transition: transform 0.3s ease;
    animation: pest-pulse 2s infinite;
  }

  .pest-video-play-btn:hover {
    transform: scale(1.1);
  }

  .pest-video-play-btn svg {
    width: 24px;
    height: 24px;
    fill: #ffffff;
    margin-left: 4px; /* Optical adjustment for play triangle */
  }

  /* Pulse Animation for Play Button */
  @keyframes pest-pulse {
    0% {
      box-shadow: 0 0 0 0 rgba(30, 136, 229, 0.7);
    }
    70% {
      box-shadow: 0 0 0 15px rgba(30, 136, 229, 0);
    }
    100% {
      box-shadow: 0 0 0 0 rgba(30, 136, 229, 0);
    }
  }

  /* Typography */
  .pest-video-title {
    font-size: 36px;
    font-weight: 800;
    line-height: 1.3;
    margin: 0 0 20px 0;
  }

  .pest-video-subtitle {
    font-size: 18px;
    font-weight: 500;
    margin: 0;
    opacity: 0.9;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .pest-video-section {
      height: 350px;
    }
    .pest-video-title {
      font-size: 26px;
    }
    .pest-video-play-btn {
      width: 60px;
      height: 60px;
      margin-bottom: 20px;
    }
  }
</style>

<section class="pest-video-section">
  
  <video class="pest-video-bg" autoplay muted loop playsinline>
    <source src="asset/video/Pest control services in Dubai - Ensure Group of Companies (1080p, h264) (1).mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="pest-video-overlay"></div>

  <div class="pest-video-content">
    
    <!-- <div class="pest-video-play-btn">
      <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
    </div> -->

    <h2 class="pest-video-title">We Specialize in Residential & Commercial Pest Control Services</h2>
    <p class="pest-video-subtitle">Your Satisfaction is Guaranteed!</p>

  </div>

</section>