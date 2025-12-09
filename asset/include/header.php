<?php
// Check if we're including for CSS (in head) or HTML (in body)
$include_type = isset($include_type) ? $include_type : 'html';

if ($include_type == 'css') {
?>
    <style>
        /* --- Variables & Reset --- */
        :root {
            --primary-blue: #2D8CEB;
            --hover-blue: #1a6cb3;
            --text-dark: #333333;
            --text-light: #666666;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --font-main: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-main);
            color: var(--text-dark);
            background-color: var(--white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- Top Bar --- */
        .site-header {
            background: var(--white);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: box-shadow 0.25s ease, background-color 0.25s ease;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            transition: padding 0.25s ease, opacity 0.25s ease, height 0.25s ease;
            overflow: hidden;
        }

        /* Logo */
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 24px;
            font-weight: 700;
            color: #0d2c4a;
            line-height: 1;
        }

        .logo-icon {
            font-size: 32px;
            color: var(--primary-blue);
        }

        .logo-text small {
            font-size: 12px;
            font-weight: 400;
            color: var(--text-light);
            display: block;
            margin-top: 2px;
        }

        /* Contact Info Group */
        .contact-group {
            display: flex;
            gap: 40px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .icon-box {
            font-size: 24px;
            color: #4bbf27;
        }

        .text-box strong {
            display: block;
            font-size: 14px;
            color: var(--text-dark);
        }

        .text-box span {
            font-size: 13px;
            color: var(--text-light);
        }

        /* Buttons */
        .btn {
            text-decoration: none;
            font-weight: 700;
            border-radius: 4px;
            transition: background 0.3s;
            display: inline-block;
        }

        .btn-primary {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 12px 25px;
            font-size: 13px;
        }

        .btn-primary:hover {
            background-color: var(--hover-blue);
        }

        /* --- Navigation Bar --- */
        .main-nav {
            background-color:rgb(236, 236, 236);
            border-top: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            gap: 20px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: #444;
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: color 0.3s;
        }

        .nav-links a:hover, .nav-links a.active {
            color: #4bbf27;
        }

        .nav-links i {
            font-size: 10px;
            color: #888;
        }

        .nav-socials {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .nav-socials a {
            color: #555;
            font-size: 14px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-socials a:hover {
            color: var(--primary-blue);
        }

        .divider {
            height: 15px;
            width: 1px;
            background-color: #ccc;
            margin: 0 5px;
        }

        /* Logo inside nav (shown when sticky) */
        .nav-logo {
            display: none;
            align-items: center;
            gap: 10px;
            font-size: 20px;
            font-weight: 700;
            color: #0d2c4a;
            text-decoration: none;
            white-space: nowrap;
        }

        .nav-logo .logo-icon {
            font-size: 28px;
            color: var(--primary-blue);
        }

        .nav-logo small {
            font-size: 11px;
            font-weight: 400;
            color: var(--text-light);
            display: block;
            margin-top: 2px;
        }

        /* Sticky state */
        .site-header.sticky {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            background-color: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(6px);
        }

        .site-header.sticky .top-bar {
            padding: 0;
            height: 0;
            opacity: 0;
            pointer-events: none;
        }

        .site-header.sticky .nav-logo {
            display: flex;
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 992px) {
            .top-bar {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .contact-group {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .main-nav {
                display: none;
            }
        }
    </style>
<?php
} else {
?>
    <header class="site-header">
        <div class="top-bar container">
            <div class="logo">
                <i class="fa-solid fa-bug logo-icon"></i>
                <span class="logo-text">pestraid<small>..Pest Control</small></span>
            </div>

            <div class="contact-group">
                <div class="contact-item">
                    <div class="icon-box"><i class="fa-solid fa-phone-volume"></i></div>
                    <div class="text-box">
                        <strong>+0123456789</strong>
                        <span>support@pestraid.com</span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="icon-box"><i class="fa-regular fa-clock"></i></div>
                    <div class="text-box">
                        <strong>Mon-Sat 9.00-15:00</strong>
                        <span>Sunday CLOSED</span>
                    </div>
                </div>
            </div>

            <a href="#" class="btn btn-primary" style="background-color: #4bbf27;">GET A QUOTE ➔</a>
        </div>

        <nav class="main-nav">
            <div class="container nav-wrapper">
                <a href="#" class="nav-logo">
                    <i class="fa-solid fa-bug logo-icon"></i>
                    <span class="logo-text">pestraid<small>Pest Control</small></span>
                </a>
                <ul class="nav-links">
                    <li><a href="#heroSection" class="active">HOME </a></li>
                    <li><a href="#about-section">ABOUT </a></li>
                    <li><a href="#service-section">SERVICES </a></li>
                    <!-- <li><a href="#">PROJECTS <i class="fa-solid fa-caret-down"></i></a></li>
                    <li><a href="#">SHOP <i class="fa-solid fa-caret-down"></i></a></li>
                    <li><a href="#">NEWS <i class="fa-solid fa-caret-down"></i></a></li> -->
                    <li><a href="#contact-section">CONTACT</a></li>
                </ul>

                <div class="nav-socials">
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <span class="divider"></span>
                    <!-- <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#"><i class="fa-solid fa-bag-shopping"></i></a> -->
                </div>
            </div>
        </nav>
    </header>
<?php
}
?>

