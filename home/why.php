<style>
  /* --- Scoped Styles with Unique Prefixes --- */

  :root {
    --pest-best-green: #2E7D32; /* Main Green Brand Color */
    --pest-best-dark: #1B2B3A;   /* Dark Text Color */
    --pest-best-gray: #666666;   /* Body Text Color */
    --pest-best-bg: #F8F9FA;     /* Light Background for Section */
    --pest-best-white: #ffffff;
  }

  /* Section Wrapper */
  .pest-best-section {
    padding: 80px 0;
    background-color: var(--pest-best-bg); /* Fallback */
    background-image: linear-gradient(rgba(255,255,255,0.85), rgba(255,255,255,0.85)), url('asset/image/back2.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    color: var(--pest-best-dark);
  }

  .pest-best-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* --- Header Area --- */
  .pest-best-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 60px auto;
  }

  /* Pill Label */
  .pest-best-pill {
    display: inline-block;
    background-color: var(--pest-best-green);
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 20px;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
  }

  /* Main Title */
  .pest-best-title {
    font-size: 36px;
    font-weight: 800;
    line-height: 1.2;
    margin: 0 0 20px 0;
    color: var(--pest-best-dark);
  }

  .pest-best-highlight {
    color: var(--pest-best-green);
  }

  /* Description */
  .pest-best-desc {
    font-size: 16px;
    line-height: 1.6;
    color: var(--pest-best-gray);
    margin: 0;
  }

  /* --- Grid Layout --- */
  .pest-best-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 Columns */
    gap: 30px;
    align-items: stretch;
  }

  /* --- White Feature Cards --- */
  .pest-best-card {
    background-color: var(--pest-best-white);
    padding: 40px 30px;
    border-radius: 20px; /* Rounded corners like image */
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .pest-best-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
  }

  /* Icon Circle */
  .pest-best-icon-box {
    width: 60px;
    height: 60px;
    background-color: var(--pest-best-green);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
  }

  .pest-best-icon-box svg {
    width: 28px;
    height: 28px;
    fill: #ffffff;
  }

  .pest-best-card-title {
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 15px 0;
    color: var(--pest-best-dark);
  }

  .pest-best-card-text {
    font-size: 14px;
    line-height: 1.6;
    color: var(--pest-best-gray);
    margin: 0;
  }

  /* --- Dark CTA Card (4th Column) --- */
  .pest-best-cta-card {
    background-color: #1a2c38; /* Fallback color */
    /* Background Image setup */
    background-image: linear-gradient(rgba(20, 35, 45, 0.7), rgba(20, 35, 45, 0.8)), 
                      url('https://images.unsplash.com/photo-1534536281715-e28d76689b4d?q=80&w=500&auto=format&fit=crop');
    background-size: cover;
    background-position: center;
    border-radius: 20px;
    padding: 40px 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #ffffff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
  }

  .pest-best-cta-title {
    font-size: 22px;
    font-weight: 800;
    line-height: 1.3;
    margin: 0 0 30px 0;
    color: #ffffff;
  }

  .pest-best-cta-label {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
    opacity: 0.8;
  }

  .pest-best-phone-btn {
    display: inline-flex;
    align-items: center;
    background-color: transparent;
    color: #ffffff;
    font-size: 18px;
    font-weight: 700;
    text-decoration: none;
    gap: 12px;
  }
  
  .pest-best-phone-icon {
    width: 36px;
    height: 36px;
    background-color: var(--pest-best-green);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .pest-best-phone-icon svg {
    width: 16px;
    height: 16px;
    fill: #ffffff;
  }

  /* Responsive Design */
  @media (max-width: 992px) {
    .pest-best-grid {
      grid-template-columns: repeat(2, 1fr); /* 2x2 grid on tablet */
    }
  }

  @media (max-width: 600px) {
    .pest-best-grid {
      grid-template-columns: 1fr; /* Stack on mobile */
    }
    .pest-best-title {
      font-size: 28px;
    }
  }
</style>

<section class="pest-best-section">
  <div class="pest-best-container">
    
    <div class="pest-best-header">
      <span class="pest-best-pill">Why Choose Us</span>
      <h2 class="pest-best-title">
        What makes us the best <br>
        <span class="pest-best-highlight">choice for you</span>
      </h2>
      <p class="pest-best-desc">
        We understand how frustrating and disruptive pests can be, which is why we're committed to providing fast, reliable, and effective solutions.
      </p>
    </div>

    <div class="pest-best-grid">

      <div class="pest-best-card">
        <div class="pest-best-icon-box">
          <svg viewBox="0 0 24 24"><path d="M10 4V2a2 2 0 012-2h0a2 2 0 012 2v2h2v4h-2v2h2a2 2 0 012 2v10a2 2 0 01-2 2H8a2 2 0 01-2-2V12a2 2 0 012-2h2V8H8V4h2zm4 0h-4v4h4V4z"/></svg>
        </div>
        <h3 class="pest-best-card-title">Emergency Services</h3>
        <p class="pest-best-card-text">
          We are available round the clock to address any urgent pest control needs you might have.
        </p>
      </div>

      <div class="pest-best-card">
        <div class="pest-best-icon-box">
          <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
        </div>
        <h3 class="pest-best-card-title">Customized Treatments</h3>
        <p class="pest-best-card-text">
          We tailor our solutions to your specific home layout and the type of pest problem you are facing.
        </p>
      </div>

      <div class="pest-best-card">
        <div class="pest-best-icon-box">
          <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
        </div>
        <h3 class="pest-best-card-title">Certified Professionals</h3>
        <p class="pest-best-card-text">
          Our team consists of highly trained and certified experts with years of experience in the field.
        </p>
      </div>

      <div class="pest-best-cta-card">
        <h3 class="pest-best-cta-title">Take Back Your Home From Pests. Today!</h3>
        <div class="pest-best-cta-contact">
          <div class="pest-best-cta-label">CALL NOW</div>
          <a href="tel:+1322782968" class="pest-best-phone-btn">
            <div class="pest-best-phone-icon">
              <svg viewBox="0 0 24 24"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.44-5.15-3.75-6.59-6.59l1.97-1.57c.26-.26.35-.65.24-1C9.13 6.42 8.93 5.23 8.93 4 8.93 3.45 8.48 3 7.93 3H4.9c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.01c0-.55-.45-1-1-1z"/></svg>
            </div>
            +1 322-782-968
          </a>
        </div>
      </div>

    </div>
  </div>
</section>