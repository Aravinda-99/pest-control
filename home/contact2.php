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
    }

    .contact-visual img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
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
    }

    .contact-heading {
        font-size: 2.5rem;
        color: var(--text-dark);
        margin: 0 0 2rem 0;
        font-weight: 700;
        line-height: 1.2;
    }

    /* --- Form Grid --- */
    .hero-form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        position: relative;
        z-index: 2;
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
        transition: all 0.3s ease;
    }

    .input-group input::placeholder,
    .input-group textarea::placeholder {
        color: #aaa;
    }

    .input-group input:focus,
    .input-group textarea:focus {
        background-color: #fff;
        border-color: #e0e0e0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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
        transition: background 0.3s;
        width: 25%;
        min-width: 120px;
    }

    .btn-send:hover {
        filter: brightness(90%);
    }

    /* --- Decoration (Dots) --- */
    .deco-dots {
        position: absolute;
        width: 150px;
        height: 150px;
        background-image: radial-gradient(var(--dot-color) 2px, transparent 2px);
        background-size: 15px 15px;
        opacity: 0.2;
        z-index: 1;
        border-radius: 50%;
        pointer-events: none;
    }

    .top-right { top: -30px; right: -30px; }
    .bottom-left { bottom: -30px; left: -30px; }

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
                    <button type="submit" class="btn-send">SEND</button>
                </div>
            </form>
        </div>
    </div>
</section>