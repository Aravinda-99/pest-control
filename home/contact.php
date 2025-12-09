<style>
  /* --- Scoped Styles with Unique Prefixes --- */

  /* Section Wrapper */
  .pest-contact-section {
    padding: 80px 0;
    background-color: #ffffff;
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    position: relative;
    overflow: hidden;
  }

  .pest-contact-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* Grid Layout */
  .pest-contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }

  /* --- Left Column: Image --- */
  .pest-contact-img-col {
    position: relative;
    height: 100%;
    min-height: 500px;
    border-radius: 12px;
    overflow: hidden;
  }

  .pest-contact-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 12px;
  }

  /* --- Right Column: Form --- */
  .pest-contact-form-col {
    padding: 20px;
    position: relative;
  }

  /* Badge */
  .pest-contact-badge {
    display: inline-block;
    background-color: #1E88E5; /* Main Blue */
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 20px;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
  }

  /* Title */
  .pest-contact-title {
    font-size: 36px;
    font-weight: 800;
    color: #1F2937;
    margin: 0 0 30px 0;
    line-height: 1.2;
  }

  /* Form Layout */
  .pest-form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
  }

  .pest-form-group {
    flex: 1;
  }

  /* Inputs & Textarea */
  .pest-form-input,
  .pest-form-textarea {
    width: 100%;
    background-color: #F8F9FA; /* Light gray bg */
    border: 1px solid transparent;
    border-radius: 6px;
    padding: 15px 20px;
    font-size: 14px;
    color: #333;
    font-family: inherit;
    transition: all 0.3s ease;
    box-sizing: border-box; /* Critical for padding */
  }

  .pest-form-input:focus,
  .pest-form-textarea:focus {
    outline: none;
    border-color: #1E88E5;
    background-color: #fff;
    box-shadow: 0 0 0 3px rgba(30, 136, 229, 0.1);
  }

  .pest-form-textarea {
    resize: vertical;
    min-height: 150px;
  }

  /* Placeholders styling */
  .pest-form-input::placeholder,
  .pest-form-textarea::placeholder {
    color: #999;
  }

  /* Submit Button */
  .pest-contact-btn {
    background-color: #1E88E5;
    color: #fff;
    border: none;
    padding: 14px 40px;
    border-radius: 6px;
    font-weight: 700;
    font-size: 14px;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px;
  }

  .pest-contact-btn:hover {
    background-color: #1565C0;
  }

  /* --- Decoration (Dots Pattern) --- */
  .pest-contact-decor {
    position: absolute;
    top: -40px;
    right: -40px;
    width: 150px;
    height: 150px;
    background-image: radial-gradient(#1E88E5 15%, transparent 16%);
    background-size: 15px 15px;
    opacity: 0.2;
    z-index: -1;
    pointer-events: none;
  }
  
  /* Circle line decoration */
  .pest-contact-circle-decor {
      position: absolute;
      top: -30px;
      right: -30px;
      width: 100px;
      height: 100px;
      border: 2px solid #1E88E5;
      border-radius: 50%;
      opacity: 0.2;
      z-index: -1;
  }

  /* Responsive */
  @media (max-width: 992px) {
    .pest-contact-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }
    
    .pest-contact-img-col {
      min-height: 300px;
      height: 300px;
    }
  }

  @media (max-width: 600px) {
    .pest-form-row {
      flex-direction: column;
      gap: 20px;
    }
  }
</style>

<section class="pest-contact-section">
  <div class="pest-contact-container">
    <div class="pest-contact-grid">
      
      <div class="pest-contact-img-col">
        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=1000&auto=format&fit=crop" alt="Pest Control Worker" class="pest-contact-img">
      </div>

      <div class="pest-contact-form-col">
        
        <div class="pest-contact-decor"></div>
        <div class="pest-contact-circle-decor"></div>

        <span class="pest-contact-badge">CONTACT US</span>
        <h2 class="pest-contact-title">Get in Touch with Us</h2>

        <form>
          <div class="pest-form-row">
            <div class="pest-form-group">
              <input type="text" placeholder="First Name" class="pest-form-input" required>
            </div>
            <div class="pest-form-group">
              <input type="text" placeholder="Last Name" class="pest-form-input" required>
            </div>
          </div>

          <div class="pest-form-row">
            <div class="pest-form-group">
              <input type="email" placeholder="Email" class="pest-form-input" required>
            </div>
            <div class="pest-form-group">
              <input type="tel" placeholder="Phone" class="pest-form-input">
            </div>
          </div>

          <div class="pest-form-row">
            <div class="pest-form-group">
              <textarea placeholder="Message" class="pest-form-textarea" required></textarea>
            </div>
          </div>

          <button type="submit" class="pest-contact-btn">SEND</button>
        </form>

      </div>

    </div>
  </div>
</section>