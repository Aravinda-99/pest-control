<style>
  :root {
    --pest-yellow: rgb(77, 133, 93);
    --pest-dark-text: #1F2937;
    --pest-white: #ffffff;
    --pest-bg-light: #F9FAFB;
  }

  /* Main Section Wrapper */
  .pest-services-section {
    position: relative;
    background-color: var(--pest-bg-light);
    background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
    background-size: 20px 20px;
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    padding: 80px 0;
    overflow: hidden;
  }

  /* The Top Yellow Background Layer */
  .pest-services__bg-accent {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 45%; 
    background-color: var(--pest-yellow);
    z-index: 0;
    background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px);
    background-size: 15px 15px;
    transform: translateY(-100%);
    transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .pest-services__bg-accent.animate {
    transform: translateY(0);
  }

  /* Content Container */
  .pest-services__container {
    position: relative;
    z-index: 1; 
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* --- Header Area --- */
  .pest-services__header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 40px;
    gap: 30px;
  }

  .pest-services__badge {
    display: inline-block;
    background-color: rgb(0, 185, 46);
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 20px;
    margin-bottom: 15px;
    letter-spacing: 0.5px;
    opacity: 0;
    transform: scale(0.5) rotate(-10deg);
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }

  .pest-services__badge.animate {
    opacity: 1;
    transform: scale(1) rotate(0deg);
  }

  .pest-services__title {
    font-size: 36px;
    font-weight: 700;
    color:rgb(238, 238, 238);
    margin: 0;
    line-height: 1.2;
    max-width: 500px;
    opacity: 0;
    transform: translateX(-50px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .pest-services__title.animate {
    opacity: 1;
    transform: translateX(0);
  }

  .pest-services__desc {
    max-width: 450px;
    color: #ffffff;
    font-size: 15px;
    line-height: 1.6;
    font-weight: 500;
    padding-bottom: 5px;
    opacity: 0;
    transform: translateX(50px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .pest-services__desc.animate {
    opacity: 1;
    transform: translateX(0);
  }

  /* --- SLIDER CONTAINER --- */
  .pest-slider-relative {
    position: relative; 
    margin-bottom: 20px;
  }

  /* The Scrollable Track */
  .pest-services__slider {
    display: flex;
    gap: 30px; /* මෙම පරතරය වෙනස් කරන්නේ නම් පහත calc එකද වෙනස් කරන්න */
    overflow-x: auto; 
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    padding: 20px 5px 40px 5px; 
    -ms-overflow-style: none;  
    scrollbar-width: none;  
  }
  
  .pest-services__slider::-webkit-scrollbar {
    display: none;
  }

  /* Individual Card */
  .pest-service-card {
    /* --- වෙනස්කම් ආරම්භය --- */
    /* මුළු ඉඩ ප්‍රමාණයෙන් පරතරය (30px * 2) අඩු කර 3න් බෙදීම */
    min-width: calc((100% - 60px) / 3); 
    max-width: calc((100% - 60px) / 3);
    flex: 0 0 auto; 
    /* --- වෙනස්කම් අවසානය --- */

    background-color:rgb(198, 216, 203);
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
    scroll-snap-align: start; 
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
    transform: translateY(60px) rotateX(15deg);
    perspective: 1000px;
    transform-style: preserve-3d;
  }

  .pest-service-card.animate {
    opacity: 1;
    transform: translateY(0) rotateX(0deg);
  }

  .pest-service-card:hover {
    transform: translateY(-10px) rotateY(5deg) scale(1.02);
    box-shadow: 0 25px 50px -10px rgba(0, 0, 0, 0.25);
  }

  .pest-service-card__header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .pest-service-card__icon {
    width: 40px;
    height: 40px;
    margin-right: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .pest-service-card__icon svg {
      width: 100%;
      height: 100%;
      fill: var(--pest-yellow);
  }

  .pest-service-card__title {
    font-size: 18px;
    font-weight: 700;
    color: var(--pest-dark-text);
    margin: 0;
    transition: all 0.3s ease;
  }

  .pest-service-card:hover .pest-service-card__title {
    color: rgb(0, 185, 46);
    transform: translateX(5px);
  }

  .pest-service-card__img-wrapper {
    width: 100%;
    height: 180px;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
  }

  .pest-service-card__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    filter: brightness(0.9);
  }
  
  .pest-service-card:hover .pest-service-card__img {
    transform: scale(1.1) rotate(2deg);
    filter: brightness(1.1);
  }

  /* --- Footer Actions --- */
  .pest-services__actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: -40px;
  }

  .pest-btn-base {
    padding: 14px 32px;
    border-radius: 6px;
    font-weight: 700;
    font-size: 14px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    text-align: center;
    display: inline-block;
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(30px) scale(0.9);
  }

  .pest-btn-base.animate {
    opacity: 1;
    transform: translateY(0) scale(1);
  }

  .pest-btn-base::before {
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

  .pest-btn-base:hover::before {
    width: 400px;
    height: 400px;
  }

  .pest-btn-base span {
    position: relative;
    z-index: 1;
  }

  .pest-btn-yellow {
    background-color: var(--pest-yellow);
    color: var(--pest-dark-text);
  }
  .pest-btn-yellow:hover { 
    background-color: #d9a507;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 25px rgba(217, 165, 7, 0.4);
  }

  .pest-btn-dark {
    background-color: var(--pest-dark-text);
    color: var(--pest-white);
  }
  .pest-btn-dark:hover { 
    background-color: #000000;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 25px rgba(31, 41, 55, 0.4);
  }

  .pest-btn {
    background-color: rgb(0, 185, 46);
    color: #ffffff;
  }
  .pest-btn:hover {
    background-color: rgb(0, 220, 55);
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 185, 46, 0.4);
  }


  /* Animation Keyframes */
  @keyframes float {
    0%, 100% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-10px);
    }
  }

  @keyframes shimmer {
    0% {
      background-position: -1000px 0;
    }
    100% {
      background-position: 1000px 0;
    }
  }

  .pest-service-card__img-wrapper::after {
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
    transition: left 0.5s;
  }

  .pest-service-card:hover .pest-service-card__img-wrapper::after {
    left: 100%;
  }

  /* Smooth scroll behavior */
  html {
    scroll-behavior: smooth;
  }

  /* Mobile Responsive */
  @media (max-width: 768px) {
    .pest-services__header {
      flex-direction: column;
      align-items: flex-start;
      gap: 20px;
    }
    .pest-services__desc { max-width: 100%; }
    .pest-services__bg-accent { height: 40%; }
    
    .pest-services__slider { gap: 15px; }
    
    /* ජංගම දුරකථන සඳහා නැවත එක් කාඩ්පතක් පෙන්වීමට */
    .pest-service-card { 
        min-width: 260px; 
        max-width: 260px; 
    }
  }
</style>


<section class="pest-services-section" id="service-section">
  <div class="pest-services__bg-accent"></div>

  <div class="pest-services__container">
    
    <div class="pest-services__header">
      <div>
        <span class="pest-services__badge">OUR SERVICES</span>
        <h2 class="pest-services__title">Expert solutions for every pest problem</h2>
      </div>
      <div class="pest-services__desc">
        <p>We offer a wide range of pest control services catered to residential, commercial, and industrial clients. Whether the job is big or small we can get rid of those pests.</p>
      </div>
    </div>

    <div class="pest-slider-relative">
      
      <div class="pest-services__slider" id="pestSlider">
        
        <div class="pest-service-card">
          <div class="pest-service-card__header">
            <!-- <div class="pest-service-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,192c-62.1,0-120.3,18.2-159.6,47.8C80,196.7,43.5,153,31.7,104.3c-1.4-5.6-10.3-6.2-12.6-.8C13.1,117.6,5.9,144,2.2,168c-1,6.6,4,12.7,10.6,13.2C49.6,184.7,80,216.7,94.8,256H64c-17.7,0-32,14.3-32,32s14.3,32,32,32h40.4c20,39.5,56.1,71.7,100.8,88.7c2.7,34.7,21.5,63.8,49.3,82.6c4.2,2.9,9.8,1.2,11.8-3.5c4-9.6,11.8-17.6,21.8-22.2c7.1-3.3,10.3-11.5,7.4-18.7c-4.2-10.5-2.5-22.6,5-31.3c3.3-3.8,3.5-9.2.5-13.3c-5.6-7.7-7.7-17.4-5.5-27.3c1.5-6.8-2.2-13.7-8.7-16.2C293.7,362,323,358,350.7,347c-24,18.6-47.1,31.6-63.4,37.6c-7.1,2.6-11.1,10.3-9.1,17.6c3,11,14.5,17.6,25.5,14.6c23.2-6.4,54.6-20.9,85.1-44.7C433,335.9,467,283,479.8,218.8c1.4-6.8-2.3-13.6-8.9-16.1c-6.6-2.5-14,0-17.6,6c-19.2,32-47.6,59.9-83.2,77.3H336c-17.7,0-32-14.3-32-32s14.3-32,32-32h25.4C348.1,198.3,305.2,192,256,192z M214.3,368.5c10.3-4.1,21.8-6.6,33.9-7.3c-9,6.7-14.8,17.3-14.8,29.2c0,20.1,16.3,36.5,36.5,36.5c5.5,0,10.8-1.2,15.6-3.4c-14.1,6.5-32.1,9.1-54,6.3C221.4,406.6,214.3,389.6,214.3,368.5z"/></svg>
            </div> -->
            <h3 class="pest-service-card__title">General Pest Control</h3>
          </div>
          <div class="pest-service-card__img-wrapper">
            <img src="asset/image/s1.jpg" alt="General Pest Control" class="pest-service-card__img">
          </div>
        </div>

        <div class="pest-service-card">
          <div class="pest-service-card__header">
            <!-- <div class="pest-service-card__icon">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M356.2 162.6c31.1 22.5 50.7 58.3 53.6 99l20.9 7.9c7.8 3 16.4 .7 21.8-5.7l8.6-10.1c9-10.6 25.4-12.7 37.2-5l29.7 19.5c8.5 5.6 14 14.7 15.2 24.8c2.7 22.9-16.3 42.2-39 40.3l-48.4-4c-7.3-.6-14.6-2.6-21.4-5.9L387 300.7c-8.5-4.1-18.6-3.4-26.4 1.9l-60.7 40.8c-11.6 7.8-14.6 23.5-6.8 35.1s23.5 14.6 35.1 6.8l34.7-23.3c-7.2 53.2-48 96-101.3 107.1l32.6 36.9c3 3.4 4.1 8 2.8 12.4s-5.1 7.9-9.5 9.1C283.1 530.1 278.3 532.2 273.5 532.2c-8 0-15.7-3.8-20.6-10.6l-37-41.9c-31.5 3.7-64 1-94.8-8.2l-55.4 55.4c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L83 441.9c-40.5-27.5-67-73.9-67-126.2c0-65.6 41.5-121.4 99.2-144.3l13.2-33.9C141 104.9 167.8 80 198.9 80H208c13.3 0 24 10.7 24 24s-10.7 24-24 24h-9.1c-7.8 0-14.4 6.2-17.3 13.6l-22 56.4c29.5-13.7 62.9-21.3 98.4-21.3s68.9 7.6 98.4 21.3l22.7-46.8c7.1-14.6 24.4-21 39.3-14.6l45.2 19.4c5.6 2.4 9.3 7.9 9.3 14s-3.7 11.6-9.3 14l-45.2 19.4c-5.8 2.5-12.6 .4-16.1-4.9l-12.9-19.3zM258 288c-13.3 0-24 10.7-24 24s10.7 24 24 24s24-10.7 24-24s-10.7-24-24-24z"/></svg>
            </div> -->
            <h3 class="pest-service-card__title">Termite Control</h3>
          </div>
          <div class="pest-service-card__img-wrapper">
            <img src="asset/image/s2.jpg" alt="Termite Control" class="pest-service-card__img">
          </div>
        </div>

        <div class="pest-service-card">
          <div class="pest-service-card__header">
            <!-- <div class="pest-service-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M212.4 9.4c6.1-12.5 21.1-17.7 33.6-11.6L256 4.2l10-6.4C278.5-8.3 293.5-3.1 299.6 9.4l64 128c6.1 12.5 .9 27.5-11.6 33.6C339.5 177.1 324.5 171.9 318.4 159.4L256 32l-62.4 127.4c-6.1 12.5-21.1 17.7-33.6 11.6C147.5 164.9 142.3 149.9 148.4 137.4l64-128zM32.7 233.4C15.9 237.9 5.8 255.1 10.3 271.9l48 179.2c4.5 16.8 21.7 26.9 38.5 22.4s26.9-21.7 22.4-38.5L79 283.2l66.1 38.7c-1.7 9.3-2.7 18.9-2.7 28.8c0 56 29.9 105.5 75 132.7l0 10.7c0 13.3 10.7 24 24 24s24-10.7 24-24l0-10.7c45.1-27.2 75-76.7 75-132.7c0-9.8-1-19.5-2.7-28.8L403 283.2L370.8 435c-4.5 16.8 5.6 34 22.4 38.5s34-5.6 38.5-22.4l48-179.2c4.5-16.8-5.6-34-22.4-38.5L377.6 212l96.2-54.3c11.6-6.5 15.7-21.2 9.2-32.8s-21.2-15.7-32.8-9.2L364.4 164l-4.1-7.4c-20.5 10-43.3 15.7-67.5 16.3L317 128H195l24.2 44.8c-24.2-.6-47-6.3-67.5-16.3l-4.1 7.4-85.9-48.4c-11.6-6.5-26.3-2.4-32.8 9.2s-2.4 26.3 9.2 32.8L134.4 212l-101.7 21.4zM304.8 271l38.3 22.4-6.5 11.5c-19.4 34.3-53.1 58.4-92.7 64l0-91.2 60.9-35.5zM177 277.7l0 91.2c-39.6-5.7-73.3-29.8-92.7-64l-6.5-11.5 38.3-22.4L177 277.7z"/></svg>
            </div> -->
            <h3 class="pest-service-card__title">Mosquito Control</h3>
          </div>
          <div class="pest-service-card__img-wrapper">
            <img src="asset/image/s3.jpg" alt="Mosquito Control" class="pest-service-card__img">
          </div>
        </div>

        <div class="pest-service-card">
          <div class="pest-service-card__header">
            <!-- <div class="pest-service-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M113.5 151.7c-26.8-7-46.9-31.3-46.9-60.1C66.6 50.4 100.3 16.8 141.9 16.8s75.3 33.6 75.3 74.8c0 28.8-20.1 53.1-46.9 60.1l34.9 59.4H78.5l34.9-59.4zM70.7 260.3l-19.5 10.5-26 13.9c-2.3 1.3-4.9 2.1-7.5 2.6L0 290.4l25.8 44.8 21.4-4.6c6-1.3 12.4-.1 17.6 3.5L123.7 375l-103 55.4-14.6 7.8L25.8 483l53.5-28.8 19.2-10.4c5.9-3.2 12.3-4.9 18.8-5.3L135 438l-6.4 34.1-3.1 16.3L172 512l11.1-59.4c2-10.7 6.9-20.7 14.3-29.1l39.8-45.2c4.4-5 7.2-11.4 7.8-18.1l2.6-29.6 48.6-29.1c7.4-4.5 12.7-11.6 14.7-20l22.8-91.4H306.1L277.3 268c-5.1 10.3-13 18.9-22.6 24.7L172 339.8l-58.6-35.1L70.7 260.3zM422.5 151.7l34.9 59.4h136.8l34.9-59.4c-26.8-7-46.9-31.3-46.9-60.1c0-41.3 33.7-74.8 75.3-74.8s75.3 33.6 75.3 74.8c0 28.8-20.1 53.1-46.9 60.1zM465.4 260.3l-42.7 44.3L364 339.8l58.6 35.1 82.7-47.1c-9.7-5.8-17.5-14.4-22.6-24.7L454 189.6H306.5l22.8 91.4c2 8.4 7.3 15.5 14.7 20l48.6 29.1 2.6 29.6c.6 6.7 3.5 13 7.8 18.1l39.8 45.2c7.4 8.4 12.2 18.4 14.3 29.1L468.2 512l46.4-23.7-3.1-16.3-6.4-34.1 17.8.6c6.5 .3 12.9 2 18.8 5.3l19.2 10.4 53.5 28.8 19.6-44.8-14.6-7.8-103-55.4 59-40.8c5.2-3.6 11.5-4.8 17.6-3.5l21.4 4.6 25.8-44.8-17.8-3.2c-2.6-.5-5.2-1.3-7.5-2.6l-26-13.9-19.5-10.5z"/></svg>
            </div> -->
            <h3 class="pest-service-card__title">Fumigation</h3>
          </div>
          <div class="pest-service-card__img-wrapper">
            <img src="asset/image/s4.jpg" alt="Fumigation" class="pest-service-card__img">
          </div>
        </div>

        <div class="pest-service-card">
          <div class="pest-service-card__header">
            <!-- <div class="pest-service-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M113.5 151.7c-26.8-7-46.9-31.3-46.9-60.1C66.6 50.4 100.3 16.8 141.9 16.8s75.3 33.6 75.3 74.8c0 28.8-20.1 53.1-46.9 60.1l34.9 59.4H78.5l34.9-59.4zM70.7 260.3l-19.5 10.5-26 13.9c-2.3 1.3-4.9 2.1-7.5 2.6L0 290.4l25.8 44.8 21.4-4.6c6-1.3 12.4-.1 17.6 3.5L123.7 375l-103 55.4-14.6 7.8L25.8 483l53.5-28.8 19.2-10.4c5.9-3.2 12.3-4.9 18.8-5.3L135 438l-6.4 34.1-3.1 16.3L172 512l11.1-59.4c2-10.7 6.9-20.7 14.3-29.1l39.8-45.2c4.4-5 7.2-11.4 7.8-18.1l2.6-29.6 48.6-29.1c7.4-4.5 12.7-11.6 14.7-20l22.8-91.4H306.1L277.3 268c-5.1 10.3-13 18.9-22.6 24.7L172 339.8l-58.6-35.1L70.7 260.3zM422.5 151.7l34.9 59.4h136.8l34.9-59.4c-26.8-7-46.9-31.3-46.9-60.1c0-41.3 33.7-74.8 75.3-74.8s75.3 33.6 75.3 74.8c0 28.8-20.1 53.1-46.9 60.1zM465.4 260.3l-42.7 44.3L364 339.8l58.6 35.1 82.7-47.1c-9.7-5.8-17.5-14.4-22.6-24.7L454 189.6H306.5l22.8 91.4c2 8.4 7.3 15.5 14.7 20l48.6 29.1 2.6 29.6c.6 6.7 3.5 13 7.8 18.1l39.8 45.2c7.4 8.4 12.2 18.4 14.3 29.1L468.2 512l46.4-23.7-3.1-16.3-6.4-34.1 17.8.6c6.5 .3 12.9 2 18.8 5.3l19.2 10.4 53.5 28.8 19.6-44.8-14.6-7.8-103-55.4 59-40.8c5.2-3.6 11.5-4.8 17.6-3.5l21.4 4.6 25.8-44.8-17.8-3.2c-2.6-.5-5.2-1.3-7.5-2.6l-26-13.9-19.5-10.5z"/></svg>
            </div> -->
            <h3 class="pest-service-card__title">Pest Risk Audit</h3>
          </div>
          <div class="pest-service-card__img-wrapper">
            <img src="asset/image/s5.jpg" alt="Pest Risk Audit" class="pest-service-card__img">
          </div>
        </div>

      </div>

    </div>

    <div class="pest-services__actions">
      <!-- <a href="#" class="pest-btn-base pest-btn-yellow"><span>VIEW ALL SERVICES</span></a> -->
      <a href="#" class="pest-btn-base pest-btn"><span>GET A QUOTE</span></a>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Auto-slide functionality
    const slider = document.getElementById('pestSlider');
    let autoSlideInterval;

    const startAutoSlide = () => {
      autoSlideInterval = setInterval(() => {
        if (!slider) return;

        const firstCard = slider.querySelector('.pest-service-card');
        const gap = 30;
        const scrollAmount = firstCard.offsetWidth + gap;
        const maxScroll = slider.scrollWidth - slider.clientWidth;
        
        if (slider.scrollLeft >= maxScroll - 10) {
          slider.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
      }, 3000);
    };

    const stopAutoSlide = () => {
      clearInterval(autoSlideInterval);
    };

    if (slider) {
      startAutoSlide();
      slider.addEventListener('mouseenter', stopAutoSlide);
      slider.addEventListener('mouseleave', startAutoSlide);
    }

    // Scroll-triggered animations using Intersection Observer
    const observerOptions = {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Animate background accent
    const bgAccent = document.querySelector('.pest-services__bg-accent');
    if (bgAccent) {
      observer.observe(bgAccent);
    }

    // Animate header elements
    const badge = document.querySelector('.pest-services__badge');
    const title = document.querySelector('.pest-services__title');
    const desc = document.querySelector('.pest-services__desc');

    if (badge) observer.observe(badge);
    if (title) observer.observe(title);
    if (desc) observer.observe(desc);

    // Animate service cards with stagger effect
    const cards = document.querySelectorAll('.pest-service-card');
    const cardsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          cards.forEach((card, index) => {
            setTimeout(() => {
              card.classList.add('animate');
            }, index * 150); // Stagger delay
          });
          cardsObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    const sliderContainer = document.querySelector('.pest-slider-relative');
    if (sliderContainer) {
      cardsObserver.observe(sliderContainer);
    }

    // Animate buttons
    const buttons = document.querySelectorAll('.pest-btn-base');
    buttons.forEach((btn, index) => {
      observer.observe(btn);
    });

    // Add parallax effect to background on scroll
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
      const currentScroll = window.pageYOffset;
      if (bgAccent && currentScroll > lastScroll) {
        bgAccent.style.transform = `translateY(${Math.min(currentScroll * 0.1, 20)}px)`;
      }
      lastScroll = currentScroll;
    });

    // Enhanced card hover effects
    cards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
      });

      // Add click ripple effect
      card.addEventListener('click', function(e) {
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
        ripple.style.background = 'rgba(0, 185, 46, 0.3)';
        ripple.style.transform = 'scale(0)';
        ripple.style.animation = 'ripple-animation 0.6s ease-out';
        ripple.style.pointerEvents = 'none';
        ripple.style.zIndex = '10';
        
        this.style.position = 'relative';
        this.style.overflow = 'hidden';
        this.appendChild(ripple);
        
        setTimeout(() => {
          ripple.remove();
        }, 600);
      });
    });

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