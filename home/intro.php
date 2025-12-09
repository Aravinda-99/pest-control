<style>
  /* --- Scoped Styles with Unique Prefixes --- */
  
  /* Section Wrapper */
  .pest-wcu-section {
    padding: 50px 0;
    background-color: #ffffff;
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    color: #333333;
    overflow: hidden;
  }
  
  /* Container */
  .pest-wcu-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box;
  }
  
  /* Grid Layout */
  .pest-wcu-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 40px;
    align-items: center;
  }

  .pest-wcu-col-right{
    margin-left: 20px;
  }
  
  .pest-wcu-col-left{
    margin-top: -30px;
  }

  /* Typography Defaults for this section */
  .pest-wcu-col-left h2,
  .pest-wcu-col-right h2 {
    font-size: 32px;
    font-weight: 800;
    margin: 0 0 10px 0;
    line-height: 1.25;
    color: #1F2937;
  }
  
  .pest-wcu-col-left p,
  .pest-wcu-col-right p {
    font-size: 15px;
    line-height: 1.6;
    margin: 0 0 30px 0;
    color: #666666;
  }

  /* --- Left Column Elements --- */
  .pest-wcu-list {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
  }
  
  .pest-wcu-list li {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    font-weight: 700;
    color: #1F2937;
    font-size: 15px;
  }
  
  /* Orange Check Icon */
  .pest-wcu-check-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    background-color: #FF7043; /* Orange */
    border-radius: 50%;
    margin-right: 12px;
    flex-shrink: 0;
  }
  
  .pest-wcu-check-icon svg {
    width: 10px;
    height: 10px;
    fill: #ffffff;
  }
  
  /* Green Button */
  .pest-wcu-btn {
    display: inline-flex;
    align-items: center;
    background-color: #00C853; /* Green */
    color: #fff;
    padding: 14px 30px;
    border-radius: 30px; /* Pill shape */
    text-decoration: none;
    font-weight: 700;
    font-size: 14px;
    transition: background-color 0.3s ease, transform 0.2s ease;
  }
  
  .pest-wcu-btn:hover {
    background-color: #00a844;
    transform: translateY(-2px);
  }
  
  .pest-wcu-arrow-icon {
    margin-left: 8px;
    width: 16px;
    height: 16px;
    fill: #fff;
  }

  /* --- Middle Column (Image) --- */
  .pest-wcu-img-wrap {
    position: relative;
    border-radius: 12px;
    /* Optional shadow */
    /* box-shadow: 0 20px 40px rgba(0,0,0,0.1); */
  }
  
  .pest-wcu-main-img {
    width: 120%;
    height: auto;
    display: block;
    border-radius: 12px;
  }
  
  /* Experience Badge */
  .pest-wcu-badge {
    position: absolute;
    top: 20px;
    right: -20px; /* Slight overhang */
    background-color: #00C853;
    color: #fff;
    padding: 20px 25px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 10px 20px rgba(0, 200, 83, 0.3);
  }
  
  .pest-wcu-badge-num {
    display: block;
    font-size: 32px;
    font-weight: 800;
    line-height: 1;
  }
  
  .pest-wcu-badge-label {
    font-size: 13px;
    font-weight: 600;
    margin-top: 5px;
    display: block;
  }

  /* --- Right Column Elements --- */
  .pest-wcu-feature-card {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    background-color: #F3F4F6; /* Light gray background */
    padding: 20px;
    border-radius: 12px;
  }
  
  .pest-wcu-icon-box {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 15px;
    flex-shrink: 0;
  }
  
  /* Specific Colors for right column icons */
  .pest-wcu-icon-green { background-color: #00C853; }
  .pest-wcu-icon-orange { background-color: #FF7043; }
  
  .pest-wcu-icon-box svg {
    width: 24px;
    height: 24px;
    fill: #ffffff;
  }
  
  .pest-wcu-text-box h3 {
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 8px 0;
    color: #1F2937;
  }
  
  .pest-wcu-text-box p {
    font-size: 14px;
    line-height: 1.5;
    color: #666;
    margin: 0;
  }

  .pest-wcu-col-mid{
    margin-right: 20px;
    margin-left: -40px;
  }
  
  /* Responsive */
  @media (max-width: 992px) {
    .pest-wcu-grid {
      grid-template-columns: 1fr; /* Stack vertically */
      gap: 50px;
    }
    
    /* Reorder: Title (left) -> Image (mid) -> Features (right) */
    /* Or keep natural order: Left -> Mid -> Right */
    .pest-wcu-col-mid {
      order: -1; /* Image on top for mobile */
      max-width: 500px;
      margin: 0 auto;
    }
    
    .pest-wcu-badge {
      right: 10px; /* Pull badge inside on mobile so it doesn't cut off */
    }
  }
</style>


<section class="pest-wcu-section">
  <div class="pest-wcu-container">
    <div class="pest-wcu-grid">
      
      <div class="pest-wcu-col-left">
        <h2>Delivering reliable pest solutions with care and integrity</h2>
        <p>Dictumst non morbi semper phasellus bibendum torquent malesuada. Ut fringilla aliquet sed mauris donec. Mattis ornare ac placerat maecenas inceptos fermentum.</p>
        
        <ul class="pest-wcu-list">
          <li>
            <div class="pest-wcu-check-icon">
               <svg viewBox="0 0 12 10"><path d="M1 5L4.5 8.5L11 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            Trusted Experts
          </li>
          <li>
            <div class="pest-wcu-check-icon">
               <svg viewBox="0 0 12 10"><path d="M1 5L4.5 8.5L11 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            Customer Focused
          </li>
          <li>
            <div class="pest-wcu-check-icon">
               <svg viewBox="0 0 12 10"><path d="M1 5L4.5 8.5L11 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            Quality Driven
          </li>
          <li>
            <div class="pest-wcu-check-icon">
               <svg viewBox="0 0 12 10"><path d="M1 5L4.5 8.5L11 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            Eco-Safe Products
          </li>
        </ul>
        
        <a href="#" class="pest-wcu-btn">
          Learn more 
          <svg class="pest-wcu-arrow-icon" viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
        </a>
      </div>

      <div class="pest-wcu-col-mid">
        <div class="pest-wcu-img-wrap">
          <img src="asset/image/clenner.png" alt="Pest control experts" class="pest-wcu-main-img">
          
          <div class="pest-wcu-badge">
            <span class="pest-wcu-badge-num">20+</span>
            <span class="pest-wcu-badge-label">Years Experience</span>
          </div>
        </div>
      </div>

      <div class="pest-wcu-col-right">
        <h2>Your reliable partner in pest-free living solutions</h2>
        <p>Ut vehicula nulla dignissim non duis curabitur imperdiet elementum aenean. Turpis vestibulum laoreet hendrerit fusce nascetur cras velit mauris vitae porttitor duis.</p>
        
        <div class="pest-wcu-feature-card">
          <div class="pest-wcu-icon-box pest-wcu-icon-green">
            <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
          </div>
          <div class="pest-wcu-text-box">
            <h3>Client Commitment</h3>
            <p>Platea montes amet nostra facilisi metus proin malesuada tortor</p>
          </div>
        </div>

        <div class="pest-wcu-feature-card">
          <div class="pest-wcu-icon-box pest-wcu-icon-orange">
            <svg viewBox="0 0 24 24"><path d="M20 3H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 5h-2V5h2v3zM4 19h16v2H4z"/></svg>
          </div>
          <div class="pest-wcu-text-box">
            <h3>Collaborative Spirit</h3>
            <p>Platea montes amet nostra facilisi metus proin malesuada tortor</p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>