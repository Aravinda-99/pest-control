<style>
  /* --- Scoped Styles with Unique Prefixes --- */

  :root {
    --pest-footer-bg:rgb(27, 37, 46); /* Deep Navy Blue */
    --pest-footer-text: #ffffff;
    --pest-footer-light-blue:rgb(38, 158, 78); /* For hover states/icons */
    --pest-footer-icon-bg: #2C5C85; /* Background for social icons */
  }

  /* Footer Wrapper */
  .pest-footer-section {
    background-color: var(--pest-footer-bg);
    color: var(--pest-footer-text);
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    padding: 80px 0 30px 0;
    font-size: 15px;
    line-height: 1.6;
  }

  .pest-footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* --- Top Columns Grid --- */
  .pest-footer-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    margin-bottom: 60px;
  }

  /* Column Headings */
  .pest-footer-heading {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #fff;
    position: relative;
    display: inline-block;
  }
  
  /* Optional: Add underline decoration if desired, though image is clean */
  .pest-footer-heading::after {
    content: '';
    display: block;
    width: 40px;
    height: 3px;
    background-color: var(--pest-footer-light-blue);
    margin-top: 10px;
    border-radius: 2px;
  }

  /* --- Column 1: About Us --- */
  .pest-footer-about-text {
    margin-bottom: 25px;
    opacity: 0.9;
  }

  .pest-footer-socials {
    display: flex;
    gap: 15px;
  }

  .pest-footer-social-icon {
    width: 40px;
    height: 40px;
    background-color: var(--pest-footer-light-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease, background-color 0.3s ease;
    cursor: pointer;
    text-decoration: none;
  }

  .pest-footer-social-icon:hover {
    transform: translateY(-3px);
    background-color: #fff;
  }
  
  /* Icon Color Change on Hover */
  .pest-footer-social-icon:hover svg {
    fill: var(--pest-footer-bg);
  }

  .pest-footer-social-icon svg {
    width: 18px;
    height: 18px;
    fill: #fff;
    transition: fill 0.3s ease;
  }

  /* --- Column 2: Contact Us --- */
  .pest-footer-contact-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .pest-footer-contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
  }

  .pest-footer-contact-icon {
    margin-right: 15px;
    margin-top: 4px; /* Align with first line of text */
    flex-shrink: 0;
  }

  .pest-footer-contact-icon svg {
    width: 20px;
    height: 20px;
    fill: var(--pest-footer-light-blue);
  }

  .pest-footer-contact-label {
    display: block;
    font-weight: 600;
    margin-bottom: 4px;
    color: #fff;
  }

  .pest-footer-contact-val {
    opacity: 0.9;
    font-size: 14px;
  }

  /* --- Columns 3 & 4: Links --- */
  .pest-footer-links-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .pest-footer-link-item {
    margin-bottom: 15px;
  }

  .pest-footer-link {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
    opacity: 0.9;
    transition: padding-left 0.3s ease, color 0.3s ease;
  }

  .pest-footer-link:hover {
    padding-left: 8px;
    color: var(--pest-footer-light-blue);
  }

  .pest-footer-arrow {
    margin-right: 10px;
    width: 14px;
    height: 14px;
    fill: #fff;
  }

  /* --- Bottom Copyright --- */
  .pest-footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 30px;
    text-align: center;
    font-size: 14px;
    opacity: 0.7;
  }

  /* Responsive */
  @media (max-width: 992px) {
    .pest-footer-grid {
      grid-template-columns: 1fr 1fr; /* 2 columns on tablet */
    }
  }

  @media (max-width: 600px) {
    .pest-footer-grid {
      grid-template-columns: 1fr; /* 1 column on mobile */
      gap: 40px;
    }
    .pest-footer-section {
      text-align: left; /* Keep left alignment for readability */
    }
  }
</style>

<footer class="pest-footer-section">
  <div class="pest-footer-container">
    
    <div class="pest-footer-grid">
      
      <div class="pest-footer-col">
        <h3 class="pest-footer-heading">About Us</h3>
        <p class="pest-footer-about-text">
          We are an award-winning pest control company with over 20 years experience in the business. We provide a wide range of services for residential, commercial, and industrial level clients.
        </p>
        <div class="pest-footer-socials">
          <a href="#" class="pest-footer-social-icon">
            <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="#" class="pest-footer-social-icon">
            <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <a href="#" class="pest-footer-social-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
        </div>
      </div>

      <div class="pest-footer-col">
        <h3 class="pest-footer-heading">Contact Us</h3>
        <ul class="pest-footer-contact-list">
          <li class="pest-footer-contact-item">
            <div class="pest-footer-contact-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            </div>
            <div>
              <span class="pest-footer-contact-label">Address</span>
              <span class="pest-footer-contact-val">73 Walivita Road, Kalutara</span>
            </div>
          </li>
          <li class="pest-footer-contact-item">
            <div class="pest-footer-contact-icon">
              <svg viewBox="0 0 24 24"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.44-5.15-3.75-6.59-6.59l1.97-1.57c.26-.26.35-.65.24-1C9.13 6.42 8.93 5.23 8.93 4 8.93 3.45 8.48 3 7.93 3H4.9c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.01c0-.55-.45-1-1-1z"/></svg>
            </div>
            <div>
              <span class="pest-footer-contact-label">Emergency Contact</span>
              <span class="pest-footer-contact-val">+94 77 777 7777</span>
            </div>
          </li>
          <li class="pest-footer-contact-item">
            <div class="pest-footer-contact-icon">
               <svg viewBox="0 0 24 24"><path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/></svg>
            </div>
            <div>
              <span class="pest-footer-contact-label">Mobile</span>
              <span class="pest-footer-contact-val">+021 2345678</span>
            </div>
          </li>
          <li class="pest-footer-contact-item">
            <div class="pest-footer-contact-icon">
              <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
            </div>
            <div>
              <span class="pest-footer-contact-label">Email</span>
              <span class="pest-footer-contact-val">support@gmail.com</span>
            </div>
          </li>
        </ul>
      </div>

      <div class="pest-footer-col">
        <h3 class="pest-footer-heading">Quick Links</h3>
        <ul class="pest-footer-links-list">
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              About
            </a>
          </li>
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              Pricing
            </a>
          </li>
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              Our Services
            </a>
          </li>
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              Our Projects
            </a>
          </li>
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              FAQs
            </a>
          </li>
        </ul>
      </div>

      <div class="pest-footer-col">
        <h3 class="pest-footer-heading">Services</h3>
        <ul class="pest-footer-links-list">
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              Ant Control
            </a>
          </li>
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              Bed Bug Control
            </a>
          </li>
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              Cockroach Control
            </a>
          </li>
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              Mosquito Control
            </a>
          </li>
          <li class="pest-footer-link-item">
            <a href="#" class="pest-footer-link">
              <svg class="pest-footer-arrow" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
              Rodent Control
            </a>
          </li>
        </ul>
      </div>

    </div>

    <div class="pest-footer-bottom">
      Copyright © SLT Digital. All Rights Reserved.
    </div>

  </div>
</footer>