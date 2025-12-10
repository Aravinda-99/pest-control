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
    position: relative;
    overflow: hidden;
  }

  .pest-video-title .word {
    display: inline-block;
    opacity: 0;
    transform: translateY(100%) rotateX(-90deg);
    transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
    transform-origin: bottom;
    perspective: 1000px;
  }

  .pest-video-title .word.animate {
    opacity: 1;
    transform: translateY(0) rotateX(0deg);
  }

  .pest-video-title:hover .word {
    transform: translateY(-8px) rotateX(0deg);
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.6);
  }

  /* Shimmer effect for title */
  .pest-video-title::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
      90deg,
      transparent,
      rgba(255, 255, 255, 0.3),
      transparent
    );
    transition: left 0.8s ease;
  }

  .pest-video-title:hover::after {
    left: 100%;
  }

  .pest-video-subtitle {
    font-size: 18px;
    font-weight: 500;
    margin: 0;
    opacity: 0;
    transform: scale(0.5) translateY(50px);
    transition: all 1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    letter-spacing: 3px;
    position: relative;
  }

  .pest-video-subtitle.animate {
    opacity: 0.9;
    transform: scale(1) translateY(0);
  }

  .pest-video-subtitle .char {
    display: inline-block;
    opacity: 0;
    transform: translateY(30px) rotateZ(180deg);
    transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }

  .pest-video-subtitle .char.animate {
    opacity: 1;
    transform: translateY(0) rotateZ(0deg);
  }

  .pest-video-content:hover .pest-video-subtitle {
    opacity: 1;
    letter-spacing: 5px;
  }

  .pest-video-content:hover .pest-video-subtitle .char {
    transform: translateY(-5px) rotateZ(360deg) scale(1.2);
    text-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
  }

  /* Glow effect for subtitle */
  .pest-video-subtitle::before {
    content: attr(data-text);
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    filter: blur(12px);
    transition: opacity 0.4s ease;
    pointer-events: none;
    color: rgba(255, 255, 255, 0.8);
  }

  .pest-video-content:hover .pest-video-subtitle::before {
    opacity: 0.6;
  }

  /* Smooth scroll behavior */
  html {
    scroll-behavior: smooth;
  }

  /* Bounce animation */
  @keyframes bounce {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
  }

  .pest-video-title:hover .word:nth-child(odd) {
    animation: bounce 0.6s ease-in-out infinite;
  }

  .pest-video-title:hover .word:nth-child(even) {
    animation: bounce 0.6s ease-in-out infinite 0.3s;
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

    <h2 class="pest-video-title" id="videoTitle"></h2>
    <p class="pest-video-subtitle" id="videoSubtitle" data-text="Your Satisfaction is Guaranteed!"></p>

  </div>

</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const videoSection = document.querySelector('.pest-video-section');
    const titleEl = document.getElementById('videoTitle');
    const subtitleEl = document.getElementById('videoSubtitle');

    if (!videoSection || !titleEl || !subtitleEl) return;

    // Split title into words
    const titleText = 'We Specialize in Residential & Commercial Pest Control Services';
    const titleWords = titleText.split(' ');
    
    // Split subtitle into characters
    const subtitleText = 'Your Satisfaction is Guaranteed!';
    const subtitleChars = subtitleText.split('');

    // Create title with word spans
    titleEl.innerHTML = titleWords.map((word, index) => {
      return `<span class="word" style="transition-delay: ${index * 0.15}s">${word}</span>`;
    }).join(' ');

    // Create subtitle with character spans
    subtitleEl.innerHTML = subtitleChars.map((char, index) => {
      if (char === ' ') {
        return '<span class="char">&nbsp;</span>';
      }
      return `<span class="char" style="transition-delay: ${index * 0.08}s">${char}</span>`;
    }).join('');

    // Intersection Observer for scroll animations
    const observerOptions = {
      threshold: 0.4,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Animate title words - flip up effect
          const titleWords = titleEl.querySelectorAll('.word');
          titleWords.forEach((word, index) => {
            setTimeout(() => {
              word.classList.add('animate');
            }, index * 120);
          });

          // Animate subtitle after title
          setTimeout(() => {
            subtitleEl.classList.add('animate');
            
            const subtitleChars = subtitleEl.querySelectorAll('.char');
            subtitleChars.forEach((char, index) => {
              setTimeout(() => {
                char.classList.add('animate');
              }, index * 40);
            });
          }, titleWords.length * 120 + 400);

          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    observer.observe(videoSection);


    // Enhanced hover effects
    videoSection.addEventListener('mouseenter', function() {
      const titleWords = titleEl.querySelectorAll('.word');
      titleWords.forEach((word, index) => {
        setTimeout(() => {
          word.style.transition = 'all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)';
        }, index * 30);
      });
    });

    // Add click effect to title - ripple
    titleEl.addEventListener('click', function(e) {
      const titleWords = titleEl.querySelectorAll('.word');
      titleWords.forEach((word, index) => {
        setTimeout(() => {
          word.style.transform = 'translateY(-20px) rotateX(20deg) scale(1.1)';
          word.style.textShadow = '0 0 20px rgba(255, 255, 255, 0.8)';
          setTimeout(() => {
            word.style.transform = '';
            word.style.textShadow = '';
          }, 500);
        }, index * 50);
      });
    });

    // Continuous animation for subtitle characters
    setInterval(() => {
      if (subtitleEl.classList.contains('animate')) {
        const subtitleChars = subtitleEl.querySelectorAll('.char');
        if (subtitleChars.length > 0) {
          const randomIndex = Math.floor(Math.random() * subtitleChars.length);
          const randomChar = subtitleChars[randomIndex];
          if (randomChar && randomChar.textContent.trim() !== '') {
            randomChar.style.transform = 'translateY(-8px) rotateZ(360deg) scale(1.3)';
            randomChar.style.textShadow = '0 0 15px rgba(255, 255, 255, 0.6)';
            setTimeout(() => {
              randomChar.style.transform = '';
              randomChar.style.textShadow = '';
            }, 300);
          }
        }
      }
    }, 2500);

    // Text glow effect on scroll
    const glowObserver = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const titleWords = titleEl.querySelectorAll('.word');
          titleWords.forEach((word, index) => {
            setTimeout(() => {
              word.style.textShadow = '0 0 25px rgba(255, 255, 255, 0.5)';
              setTimeout(() => {
                word.style.textShadow = '';
              }, 1000);
            }, index * 100);
          });
          glowObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    glowObserver.observe(videoSection);
  });
</script>