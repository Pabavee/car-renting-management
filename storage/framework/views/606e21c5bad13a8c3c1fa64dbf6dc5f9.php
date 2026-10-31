<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaRide - Premium Car Rentals in Sri Lanka</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #8B4513;
            --secondary-color: #DAA520;
            --accent-color: #FF6B35;
            --text-dark: #2C3E50;
            --text-light: #7F8C8D;
            --bg-light: #FFF8DC;
            --bg-white: #FFFFFF;
            --shadow: 0 4px 15px rgba(0,0,0,0.1);
            --gradient: linear-gradient(135deg, #8B4513 0%, #DAA520 100%);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: var(--bg-light);
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            display: block;
            background: var(--bg-white);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 1rem 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-color);
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.5rem 1.5rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .btn-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            align-items: center;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: var(--primary-color);
            margin: 3px 0;
            transition: 0.3s;
        }

        /* Main Content */
        .main-content {
            margin-top: 80px;
            min-height: calc(100vh - 80px);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Home Page */
        .hero {
            background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 400"><rect fill="%23228B22" width="1200" height="400"/><path fill="%23DAA520" d="M0,400 Q300,300 600,350 T1200,300 L1200,400 Z"/></svg>');
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Sections */
        .section {
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .feature-card {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-card i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        /* Car Grid */
        .car-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .car-card {
            background: var(--bg-white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s;
        }

        .car-card:hover {
            transform: translateY(-5px);
        }

        .car-image {
    height: 200px;
    background: var(--gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 4rem;
}
        .car-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .car-info {
            padding: 1.5rem;
        }

        .car-name {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .car-price {
            color: var(--accent-color);
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        /* Forms */
        .form-container {
            max-width: 500px;
            margin: 2rem auto;
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #E0E0E0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        /* Filter Bar */
        .filter-bar {
            background: var(--bg-white);
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            align-items: center;
        }

        /* Reviews */
        .review-card {
            background: var(--bg-white);
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: var(--shadow);
            margin-bottom: 1rem;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .stars {
            color: var(--secondary-color);
        }

        /* Booking Status */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .status-confirmed {
            background: #D4EDDA;
            color: #155724;
        }

        .status-pending {
            background: #FFF3CD;
            color: #856404;
        }

        .status-cancelled {
            background: #F8D7DA;
            color: #721C24;
        }

        /* Admin Dashboard */
        .admin-nav {
            background: var(--primary-color);
            color: white;
            padding: 1rem;
            margin-bottom: 2rem;
        }

        .admin-nav ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .admin-nav a {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .admin-nav a:hover {
            text-decoration: underline;
        }

        /* Table */
        .table-container {
            overflow-x: auto;
            background: var(--bg-white);
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #E0E0E0;
        }

        th {
            background: var(--bg-light);
            font-weight: bold;
        }

        /* Hidden class */
        .hidden {
            display: none !important;
        }

        /* Alert Messages */
        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: #D4EDDA;
            color: #155724;
            border: 1px solid #C3E6CB;
        }

        .alert-error {
            background: #F8D7DA;
            color: #721C24;
            border: 1px solid #F5C6CB;
        }

        @media (max-width: 992px) {
            .nav-menu {
                gap: 1rem;
            }

            .auth-buttons {
                gap: 0.5rem;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background-color: var(--bg-white);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0,0,0,0.05);
                padding: 2rem 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .hamburger {
                display: flex;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .filter-bar > * {
                width: 100%;
            }
        }

        /* FAQ Accordion */
        .faq-item {
            background: var(--bg-white);
            margin-bottom: 1rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .faq-question {
            background: var(--primary-color);
            color: white;
            padding: 1rem 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            padding: 1.5rem;
            display: none;
        }

        .faq-answer.active {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Navigation bar-->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">🚗 LankaRide</div>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#" class="nav-link active" data-page="home" onclick="showPage('home')">Home</a></li>
                <li><a href="#" class="nav-link" data-page="cars" onclick="showPage('cars')">View Cars</a></li>
                <li><a href="#" class="nav-link" data-page="contact" onclick="showPage('contact')">Contact</a></li>
                <li><a href="#" class="nav-link" data-page="reviews" onclick="showPage('reviews')">Reviews</a></li>
                <li><a href="#" class="nav-link" data-page="faq" onclick="showPage('faq')">FAQ</a></li>
                <li id="my-bookings-nav" class="hidden"><a href="#" class="nav-link" data-page="bookings" onclick="showPage('bookings')">My Bookings</a></li>
                <li id="admin-nav" class="hidden"><a href="#" class="nav-link" data-page="admin" onclick="showPage('admin')">Admin Panel</a></li>
            </ul>
            <div class="auth-buttons" id="auth-buttons">
                <a href="#" class="btn btn-outline" onclick="showPage('login')">Login</a>
                <a href="#" class="btn btn-primary" onclick="showPage('register')">Register</a>
            </div>
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Home Page -->
        <div id="home-page" class="page">
            <section class="hero">
                <div class="container">
                    <div class="hero-content">
                        <h1>Explore Sri Lanka with LankaRide</h1>
                        <p><b>LankaRide;Where Car Rentals Meet Simplicity!</b></P>
                        <p>Premium car rentals for your perfect island adventure. Safe, reliable, and affordable vehicles to discover the pearl of the Indian Ocean.</p>
                        <a href="#" class="btn btn-primary" onclick="showPage('cars')">Browse Cars</a>
                        
                    </div>
                </div>
            </section>
<!--why need ro choose-->
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Why You Need To Choose LankaRide?</h2>
                    <div class="about-grid">
                        <div class="feature-card">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Safe & Secure</h3>
                            <p>All our vehicles undergo rigorous safety checks and are fully insured for your peace of mind during your Sri Lankan adventure.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-money-bill-wave"></i>
                            <h3>Affordable Rates</h3>
                            <p>Competitive pricing with no hidden fees. Get the best value for exploring Sri Lanka's beautiful landscapes and cultural treasures.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-clock"></i>
                            <h3>24/7 Support</h3>
                            <p>Round-the-clock customer support to assist you throughout your journey. We're here whenever you need us, anywhere in Sri Lanka.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section" style="background: var(--bg-white);">
                <div class="container">
                    <h2 class="section-title">Featured Vehicles</h2>
                    <div class="car-grid" id="featured-cars">
                        <!-- Featured cars will be populated by java.s till then this is the base -->
                    </div>
                </div>
            </section>
        </div>

        <!-- View Cars Page -->
        <div id="cars-page" class="page hidden">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Our Fleet</h2>
                    
                    <div class="filter-bar">
                        <select id="class-filter" onchange="filterCars()">
                            <option value="">All Classes</option>
                            <option value="economy">Economy</option>
                            <option value="compact">Compact</option>
                            <option value="suv">SUV</option>
                            <option value="luxury">Luxury</option>
                        </select>
                        <select id="brand-filter" onchange="filterCars()">
                            <option value="">All Brands</option>
                            <option value="toyota">Toyota</option>
                            <option value="nissan">Nissan</option>
                            <option value="honda">Honda</option>
                            <option value="kia">Kia</option>
                            <option value="volkswagen">Volkswagen</option>
                            <option value="mazda">Mazda</option>
                            <option value="ford">Ford</option>
                            <option value="jeep">Jeep</option>
                            <option value="porsche">Porsche</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="tesla">Tesla</option>
                            <option value="audi">Audi</option>
                            <option value="mercedes">Mercedes</option>
                        </select>
                            <input type="number" id="max-price" min="1" placeholder="Max Price (LKR)" onchange="filterCars()">
                        <input type="text" id="search-input" placeholder="Search cars..." oninput="filterCars()">
                    </div>
                    
                    <div class="car-grid" id="cars-container">
                        <!-- Cars will be populated by JavaScript -->
                    </div>
                </div>
            </section>
        </div>

        <!-- Contact Page -->
        <div id="contact-page" class="page hidden">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Contact Us</h2>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
                        <div class="form-container">
                            <form onsubmit="submitContact(event)">
                                <div id="contact-alert"></div>
                                <div class="form-group">
                                    <label for="contact-name">Name</label>
                                    <input type="text" id="contact-name" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input type="email" id="contact-email" maxlength="150" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact-subject">Subject</label>
                                    <input type="text" id="contact-subject" maxlength="150" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact-message">Message</label>
                                    <textarea id="contact-message" rows="5" maxlength="1000" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                            </form>
                        </div>
                        
                        <div>
                            <h3 style="margin-bottom: 1rem;">Get in Touch</h3>
                            <div style="margin-bottom: 2rem;">
                                <p><strong>📧 Email:</strong> lankaride@gmail.com</p>
                                <p><strong>📞 Phone:</strong> +94 71 334 5578</p>
                                <p><strong>📍 Address:</strong> No 278,High-level Road,Maharagama,Sri Lanka</p>
                                <p><strong>🕒 Hours:</strong> 24/7 Customer Support</p>
                            </div>
                            <!--linked the map-->
                            
                            <div style="width: 100%; height: 300px;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3773226315598!2d79.93389307480885!3d6.845289293152913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae250799e3dd38f%3A0xf3161192fd56fd2c!2sLNBTI%20-%20Japanese%20IT%20University%20(%20Main%20Campus%20)!5e0!3m2!1sen!2slk!4v1753628801903!5m2!1sen!2slk"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Reviews Page -->
        <div id="reviews-page" class="page hidden">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Customer Reviews</h2>
                    
                    <div id="review-form" class="form-container hidden">
                        <h3>Write a Review</h3>
                        <div id="review-alert"></div>
                        <form onsubmit="submitReview(event)">
                            <div class="form-group">
                                <label for="review-rating">Rating</label>
                                <select id="review-rating" required>
                                    <option value="">Select Rating</option>
                                    <option value="5">⭐⭐⭐⭐⭐ (5 stars)</option>
                                    <option value="4">⭐⭐⭐⭐ (4 stars)</option>
                                    <option value="3">⭐⭐⭐ (3 stars)</option>
                                    <option value="2">⭐⭐ (2 stars)</option>
                                    <option value="1">⭐ (1 star)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="review-text">Your Review</label>
                                    <textarea id="review-text" rows="4" maxlength="500" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </form>
                    </div>
                    
                    <div id="reviews-container">
                        <!-- Reviews will be populated by JavaScript -->
                    </div>
                </div>
            </section>
        </div>

        <!-- FAQ Page -->
        <div id="faq-page" class="page hidden">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    
                    <div id="faq-container">
                        <!-- FAQ items will be populated by JavaScript -->
                    </div>
                </div>
            </section>
        </div>

        <!-- My Bookings Page -->
        <div id="bookings-page" class="page hidden">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">My Bookings</h2>
                    
                    <div id="bookings-container">
                        <!-- Bookings will be populated by JavaScript -->
                    </div>
                </div>
            </section>
        </div>

        <!-- Login Page -->
        <div id="login-page" class="page hidden">
            <section class="section">
                <div class="container">
                    <div class="form-container">
                        <h2 style="text-align: center; margin-bottom: 2rem;">Login to LankaRide</h2>
                        <div id="login-alert"></div>
                        <form onsubmit="handleLogin(event)">
                            <div class="form-group">
                                <label for="login-email">Email</label>
                                <input type="email" id="login-email" maxlength="150" autocomplete="username" autocapitalize="none" spellcheck="false" required>
                            </div>
                            <div class="form-group">
                                <label for="login-password">Password</label>
                                <input type="password" id="login-password" autocomplete="current-password" autocapitalize="none" spellcheck="false" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
                        </form>
                        <p style="text-align: center; margin-top: 1rem;">
                            Don't have an account? <a href="#" onclick="showPage('register')" style="color: var(--primary-color);">Register here</a>
                        </p>
                        </div>
                </div>
            </section>
        </div>

        <!-- Register Page -->
        <div id="register-page" class="page hidden">
            <section class="section">
                <div class="container">
                    <div class="form-container">
                        <h2 style="text-align: center; margin-bottom: 2rem;">Join LankaRide</h2>
                        <div id="register-alert"></div>
                        <form onsubmit="handleRegister(event)">
                            <div class="form-group">
                                <label for="register-name">Full Name</label>
                                <input type="text" id="register-name" maxlength="100" required>
                            </div>
                            <div class="form-group">
                                <label for="register-email">Email</label>
                                <input type="email" id="register-email" maxlength="150" required>
                            </div>
                            <div class="form-group">
                                <label for="register-phone">Phone Number</label>
                                <input type="tel" id="register-phone" maxlength="20" pattern="[+]?[0-9 ()-]{7,15}" title="Enter a valid phone number (7-15 digits)" required>
                            </div>
                            <div class="form-group">
                                <label for="register-password">Password</label>
                                <input type="password" id="register-password" minlength="6" maxlength="100" required>
                            </div>
                            <div class="form-group">
                                <label for="register-confirm-password">Confirm Password</label>
                                <input type="password" id="register-confirm-password" minlength="6" maxlength="100" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Register</button>
                        </form>
                        <p style="text-align: center; margin-top: 1rem;">
                            Already have an account? <a href="#" onclick="showPage('login')" style="color: var(--primary-color);">Login here</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Admin Dashboard -->
        <div id="admin-page" class="page hidden">
            <div class="admin-nav">
                <div class="container">
                    <ul>
                        <li><a href="#" onclick="showAdminSection('bookings')">Manage Bookings</a></li>
                        <li><a href="#" onclick="showAdminSection('cars')">Manage Cars</a></li>
                        <li><a href="#" onclick="showAdminSection('users')">View Users</a></li>
                    </ul>
                </div>
            </div>
            
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Admin Dashboard</h2>
                    
                    <!-- Admin Bookings -->
                    <div id="admin-bookings" class="admin-section">
                        <h3>All Bookings</h3>
                        <div class="table-container">
                            <table id="admin-bookings-table">
                                <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>User</th>
                                        <th>Car</th>
                                        <th>Dates</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Admin Cars -->
                    <div id="admin-cars" class="admin-section hidden">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <h3>Manage Cars</h3>
                            <button class="btn btn-primary" onclick="showAddCarForm()">Add New Car</button>
                        </div>
                        
                        <div id="add-car-form" class="form-container hidden">
                            <h4>Add New Car</h4>
                            <form onsubmit="addCar(event)">
                                <div class="form-group">
                                    <label for="car-name">Car Name</label>
                                    <input type="text" id="car-name" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="car-brand">Brand</label>
                                    <select id="car-brand" required>
                                        <option value="">Select Brand</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="nissan">Nissan</option>
                                        <option value="honda">Honda</option>
                                        <option value="kia">Kia</option>
                                        <option value="volkswagen">Volkswagen</option>
                                        <option value="mazda">Mazda</option>
                                        <option value="ford">Ford</option>
                                        <option value="jeep">Jeep</option>
                                        <option value="porsche">Porsche</option>
                                        <option value="jaguar">Jaguar</option>
                                        <option value="tesla">Tesla</option>
                                        <option value="audi">Audi</option>
                                        <option value="mercedes">Mercedes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="car-class">Class</label>
                                    <select id="car-class" required>
                                        <option value="">Select Class</option>
                                        <option value="economy">Economy</option>
                                        <option value="compact">Compact</option>
                                        <option value="suv">SUV</option>
                                        <option value="luxury">Luxury</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="car-price">Price per Day (LKR)</label>
                                    <input type="number" id="car-price" min="1" step="1" required>
                                </div>
                                <div class="form-group">
                                    <label for="car-features">Features</label>
                                    <textarea id="car-features" rows="3" maxlength="300" placeholder="Air conditioning, GPS, etc."></textarea>
                                </div>
                                <div class="btn-row" style="margin-top: 1rem;">
                                    <button type="submit" class="btn btn-primary">Add Car</button>
                                    <button type="button" class="btn btn-outline" onclick="hideAddCarForm()">Cancel</button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="table-container">
                            <table id="admin-cars-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Class</th>
                                        <th>Price/Day</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Admin Users -->
                    <div id="admin-users" class="admin-section hidden">
                        <h3>Registered Users</h3>
                        <div class="table-container">
                            <table id="admin-users-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Total Bookings</th>
                                        <th>Join Date</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Booking Modal -->
        <div id="booking-modal" class="modal hidden">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Book Your Car</h3>
                    <span class="close" onclick="closeBookingModal()">&times;</span>
                </div>
                <div class="modal-body">
                    <div id="selected-car-info"></div>
                    <div id="booking-alert"></div>
                    <form onsubmit="confirmBooking(event)">
                        <div class="form-group">
                            <label for="pickup-date">Pickup Date</label>
                            <input type="date" id="pickup-date" required>
                        </div>
                        <div class="form-group">
                            <label for="return-date">Return Date</label>
                            <input type="date" id="return-date" required>
                        </div>
                        <div class="form-group">
                            <label for="pickup-location">Pickup Location</label>
                            <select id="pickup-location" required>
                                <option value="">Select Location</option>
                                <option value="colombo">Colombo</option>
                                <option value="pettah">Pettah</option>
                                <option value="slave island">Slave Island</option>
                                <option value="lake house">Lake House</option>
                                <option value="town hall">Town Hall</option>
                                <option value="delkada">Delkada</option>
                                <option value="maharagama">Maharagama</option>
                                <option value="pannipitiya">Pannipitiya</option>
                                <option value="kottawa">Kottawa</option>
                            </select>
                        </div>
                        <div id="booking-total" style="font-size: 1.2rem; font-weight: bold; color: var(--primary-color); margin: 1rem 0;"></div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Confirm Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Application State
        let currentUser = null;
        let isAdmin = false;
        let cars = [
            { id: 1, name: "Toyota Axio", brand: "Toyota", class: "Economy", price: 13500, features: "Reliable sedan, fuel-efficient, perfect for city drives", available: true, images: "/images/toyota corolla.jpeg" },
            { id: 2, name: "Honda Fit", brand: "Honda", class: "Economy", price: 12500, features: "Compact hatchback, spacious interior, ideal for commuting", available: true, images: "/images/honda fit.jpeg" },
            { id: 3, name: "Nissan Versa", brand: "Nissan", class: "Economy", price: 12000, features: "Comfortable sedan, affordable, suitable for urban travel", available: true, images: "/images/nissan versa.jpg" },
            { id: 4, name: "Kia Rio", brand: "Kia", class: "Economy", price: 12000, features: "Stylish economy car, smooth drive, great on fuel", available: true, images: "/images/kia rio.webp" },
            { id: 5, name: "Volkswagen Polo", brand: "Volkswagen", class: "Economy", price: 13500, features: "Small hatchback, practical design, efficient performance", available: true, images: "/images/volkswagen golf.jpg" },
            { id: 6, name: "Honda Civic", brand: "Honda", class: "Compact", price: 15000, features: "Sporty compact, reliable, comfortable for longer trips", available: true, images: "/images/honda civic.jpg" },
            { id: 7, name: "Mazda 3", brand: "Mazda", class: "Compact", price: 15000, features: "Sleek sedan, engaging drive, modern safety features", available: true, images: "/images/mazda 3.jpg" },
            { id: 8, name: "Ford Focus", brand: "Ford", class: "Compact", price: 14500, features: "Agile compact, stylish look, balanced performance", available: true, images: "/images/ford focus.jpeg" },
            { id: 9, name: "Volkswagen Golf", brand: "Volkswagen", class: "Compact", price: 15500, features: "Popular hatchback, solid build, premium driving feel.", available: true, images: "/images/volkswagen golf.jpg" },
            { id: 10, name: "Kia Forte", brand: "Kia", class: "Compact", price: 14500, features: "Spacious sedan, good handling, ideal for daily use", available: true, images: "/images/kia rio.webp" },
            { id: 11, name: "Ford Escape", brand: "Ford", class: "SUV", price: 18000, features: "Compact SUV, versatile, comfortable for families", available: true, images: "/images/ford escape.webp" },
            { id: 12, name: "Mazda CX-5", brand: "Mazda", class: "SUV", price: 20000, features: "Stylish SUV, smooth ride, advanced safety technology", available: true, images: "/images/mazda cx5.jpeg" },
            { id: 13, name: "Jeep Compass", brand: "Jeep", class: "SUV", price: 22000, features: "Rugged SUV, off-road capable, comfortable interior", available: true, images: "/images/jeep compass.jpg" },
            { id: 14, name: "Toyota RAV4", brand: "Toyota", class: "SUV", price: 19500, features: "Reliable SUV, roomy cabin, perfect for long drives.", available: true, images: "/images/rav4.avif" },
            { id: 15, name: "Nissan Rogue", brand: "Nissan", class: "SUV", price: 20000, features: "Family-friendly SUV, fuel-efficient, modern comfort features", available: true, images: "/images/nissan versa.jpg" },
            { id: 16, name: "Porsche Panamera", brand: "Porsche", class: "Luxury", price: 65500, features: "High-performance luxury sedan, elegant and powerful.", available: true, images: "/images/panamera.jpg" },
            { id: 17, name: "Jaguar XF", brand: "Jaguar", class: "Luxury", price: 55500, features: "Premium executive car, stylish design, smooth driving experience", available: true, images: "/images/xf.jpeg" },
            { id: 18, name: "Audi A6", brand: "Audi", class: "Luxury", price: 50500, features: "Premium interior, GPS, AWD, Leather seats", available: true, images: "/images/audi.webp" },
            { id: 19, name: "Mercedes-Benz E-Class", brand: "Mercedes", class: "Luxury", price: 55000, features: "Classic luxury, comfort-focused, top-tier performance", available: true, images: "/images/mercedes.webp" },
            { id: 20, name: "Tesla Model S", brand: "Tesla", class: "Luxury", price: 60000, features: "Electric luxury sedan, cutting-edge tech, fast acceleration.", available: true, images: "/images/tesla.jpg" }
        ];
        
        
        let users = [
            { id: 1, name: "Vijini Wishwani", email: "vijini@gmail.com", phone: "+94784451935", joinDate: "2025-01-15", totalBookings: 3 },
            { id: 2, name: "Chamupathi Jayendra", email: "chamu@gmail.com", phone: "+94771234568", joinDate: "2025-02-20", totalBookings: 2 },
            { id: 3, name: "Aditha Sathnidu", email: "aditha@gmail.com", phone: "+94768332211", joinDate: "2025-03-07", totalBookings: 1 },
            { id: 4, name: "Ahas Fernando", email: "ahas@gmail.com", phone: "+94773348877", joinDate: "2025-04-16", totalBookings: 2 },
            { id: 5, name: "Mewan gamlath", email: "Mewan@gmail.com", phone: "+94729765454", joinDate: "2025-05-02", totalBookings: 1 },
            { id: 6, name: "Bhavi Jayasingha", email: "bhavi@gmail.com", phone: "+9478999111", joinDate: "2025-03-28", totalBookings: 1 },
            { id: 7, name: "Senuth Renuja", email: "senuth@gmail.com", phone: "+94790034620", joinDate: "2025-07-30", totalBookings: 1 },
            { id: 8, name: "Dinudi Sachithma", email: "Dinu@gmail.com", phone: "+94778876453", joinDate: "2025-05-21", totalBookings: 1 }
        ];
        
        let bookings = [
            { id: 1, userId: 1, carId: 1, carName: "Toyota Axio", userName: "Vijini Wishwani", pickupDate: "2025-02-01", returnDate: "2024-02-09", status: "confirmed", total: 121500 },
            { id: 2, userId: 2, carId: 9, carName: "Volkswagen Golf", userName: "Chamupathi Jayendra", pickupDate: "2025-03-10", returnDate: "2024-03-12", status: "pending", total: 31000 },
            { id: 3, userId: 3, carId: 11, carName: "Ford Escape", userName: "Aditha Sathnidu", pickupDate: "2025-03-10", returnDate: "2024-03-15", status: "confirmed", total: 90000 },
            { id: 4, userId: 2, carId: 3, carName: "Nissan Versa", userName: "Chamupathi Jayendra", pickupDate: "2025-05-01", returnDate: "2024-05-12", status: "pending", total: 144000 },
            { id: 5, userId: 4, carId: 19, carName: "Mercedes-Benz E-Class", userName: "Ahas Fernando", pickupDate: "2025-06-10", returnDate: "2024-06-22", status: "confirmed", total: 660000 },
            { id: 6, userId: 5, carId: 9, carName: "Volkswagen Golf", userName: "Mewan Gamlath", pickupDate: "2025-05-02", returnDate: "2024-05-06", status: "pending", total: 77500 },
            { id: 7, userId: 7, carId: 20, carName: "Tesla Model S", userName: "Senuth Renuja", pickupDate: "2025-08-10", returnDate: "2024-08-12", status: "confirmed", total: 120000 },
            { id: 8, userId: 4, carId: 12, carName: "Mazda CX-5", userName: "Ahas Fernando", pickupDate: "2025-08-10", returnDate: "2024-08-29", status: "pending", total: 380000 },
        ];
        
        let reviews = [
            { id: 1, userId: 1, userName: "Vijini Wishwani", rating: 5, text: "Excellent service! The car was clean and well-maintained. Perfect for exploring Sri Lanka.", date: "2025-02-15" },
            { id: 2, userId: 4, userName: "Ahas Fernando", rating: 5, text: "Perfect rental! Staff were friendly, and the Honda Fit was in top shape", date: "2025-06-20" },
            { id: 3, userId: 6, userName: "Bhavi jayasingha", rating: 2, text: "Not fully satisfied. The car was delayed and customer support was slow", date: "2025-03-09" },
            { id: 4, userId: 8, userName: "Dinudi Sachithma", rating: 3, text: "It was fine. Car worked well, but interior could’ve been cleaner.", date: "2025-05-30" },
            { id: 5, userId: 3, userName: "Aditha Sathnidu", rating: 4, text: "Great value and easy booking, but drop-off took a bit long", date: "2025-03-21" },
            { id: 6, userId: 5, userName: "Mewan Gamlath", rating: 5, text: "Highly recommend! The Toyota Axio was fuel-efficient and comfortable", date: "2025-05-19" },
            { id: 7, userId: 4, userName: "Ahas Fernando", rating: 4, text: "Good service overall. Clean car and reasonable price, slight wait at pickup", date: "2025-07-17" },
            { id: 8, userId: 2, userName: "Chamupathi Jayendra", rating: 4, text: "Good experience overall. Staff was helpful and the booking process was smooth.", date: "2025-03-29" },
            { id: 9, userId: 7, userName: "Senuth Renuja", rating: 5, text: "Outstanding service! Car was spotless, and pickup was super smooth", date: "2025-09-14" }
        ];
        
        let faqs = [
            {
                question: "What documents do I need to rent a car?",
                answer: "You need a valid driving license, national ID or passport, and a credit card for the security deposit."
            },
            {
                question: "What is the minimum age to rent a car?",
                answer: "The minimum age is 21 years old, and you must have held a valid driving license for at least 1 year."
            },
            {
                question: "Do you provide insurance coverage?",
                answer: "Yes, all our vehicles come with comprehensive insurance coverage. Additional coverage options are available."
            },
            {
                question: "Can I cancel my booking?",
                answer: "Yes, you can cancel your booking up to 24 hours before pickup for a full refund. Cancellations within 24 hours may incur charges."
            },
            {
                question: "Do you offer self-drive option for your cars?",
                answer: "Yes, we do offer self-drive rentals for a small additional fee."
            },
            {
                question: "What payment methods do you accept?",
                answer: "We accept major credit cards (Visa, MasterCard), debit cards, and cash payments. Online payment is also available."
            }
        ];

        let selectedCarForBooking = null;

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            checkLoginStatus();
            populateFeaturedCars();
            populateAllCars();
            populateReviews();
            populateFAQs();
            updateAuthUI();
        });

        // Navigation Functions
        function showPage(pageId) {
            if (pageId === 'admin' && !isAdmin) {
                return;
            }

            // Hide all pages so that it can't be viewed
            document.querySelectorAll('.page').forEach(page => {
                page.classList.add('hidden');
            });
            
            // Show us the selected page
            document.getElementById(pageId + '-page').classList.remove('hidden');
            
            // Update active nav link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.dataset.page === pageId) {
                    link.classList.add('active');
                }
            });
            
            // Close mobile menu (hamburger thing)
            document.getElementById('nav-menu').classList.remove('active');
            
            // Load page-specific content
            if (pageId === 'bookings' && currentUser) {
                populateUserBookings();
            } else if (pageId === 'reviews') {
                updateReviewForm();
            } else if (pageId === 'admin' && isAdmin) {
                populateAdminDashboard();
            }
        }

        function toggleMenu() {
            document.getElementById('nav-menu').classList.toggle('active');
        }

        // Authentication Functions
        function handleLogin(event) {
            event.preventDefault();
            const email = trimValue('login-email').toLowerCase();
            const password = document.getElementById('login-password').value;
            const adminEmail = email.replace(/\s+/g, '');
            const adminPassword = password.trim().toLowerCase();
            
            // Clear previous alerts
            document.getElementById('login-alert').innerHTML = '';
            
            // Validate fields
            if (!email || !password) {
                showAlert('login-alert', 'Please fill in all fields.', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showAlert('login-alert', 'Please enter a valid email address.', 'error');
                return;
            }
            
            // Check admin credentials
            if (adminEmail === 'admin@lankaride.lk' && adminPassword === 'admin123') {
                currentUser = { id: 0, name: 'Administrator', email: 'admin@lankaride.lk', isAdmin: true };
                isAdmin = true;
                showAlert('login-alert', 'Admin login successful!', 'success');
                setTimeout(() => {
                    updateAuthUI();
                    showPage('admin');
                }, 1000);
                return;
            }
            
            // Check regular user credentials (mock authentication)
            const user = users.find(u => u.email.toLowerCase() === email);
            if (user && password === 'password123') {
                currentUser = user;
                isAdmin = false;
                showAlert('login-alert', 'Login successful!', 'success');
                setTimeout(() => {
                    updateAuthUI();
                    showPage('home');
                }, 1000);
            } else {
                showAlert('login-alert', 'Invalid email or password. Try password123 for existing users.', 'error');
            }
        }

        function handleRegister(event) {
            event.preventDefault();
            const name = trimValue('register-name');
            const email = trimValue('register-email').toLowerCase();
            const phone = trimValue('register-phone');
            const password = document.getElementById('register-password').value;
            const confirmPassword = document.getElementById('register-confirm-password').value;
            
            // Clear previous alerts
            document.getElementById('register-alert').innerHTML = '';
            
            // Validate fields
            if (!name || !email || !phone || !password || !confirmPassword) {
                showAlert('register-alert', 'Please fill in all fields.', 'error');
                return;
            }
            
            if (name.length < 2) {
                showAlert('register-alert', 'Name must be at least 2 characters long.', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showAlert('register-alert', 'Please enter a valid email address.', 'error');
                return;
            }
            
            if (!isValidPhone(phone)) {
                showAlert('register-alert', 'Please enter a valid phone number (7-15 digits).', 'error');
                return;
            }
            
            if (email === 'admin@lankaride.lk') {
                showAlert('register-alert', 'This email is reserved. Please use another email.', 'error');
                return;
            }
            
            if (password.length < 6) {
                showAlert('register-alert', 'Password must be at least 6 characters long.', 'error');
                return;
            }
            
            if (password !== confirmPassword) {
                showAlert('register-alert', 'Passwords do not match.', 'error');
                return;
            }
            
            if (users.find(u => u.email.toLowerCase() === email)) {
                showAlert('register-alert', 'Email already registered.', 'error');
                return;
            }
            
            // Register user
            const newUser = {
                id: users.reduce((max, u) => Math.max(max, u.id), 0) + 1,
                name: name,
                email: email,
                phone: phone,
                joinDate: new Date().toISOString().split('T')[0],
                totalBookings: 0
            };
            
            users.push(newUser);
            currentUser = newUser;
            isAdmin = false;
            
            showAlert('register-alert', 'Registration successful!', 'success');
            setTimeout(() => {
                updateAuthUI();
                showPage('home');
            }, 1000);
        }

        function logout() {
            currentUser = null;
            isAdmin = false;
            updateAuthUI();
            showPage('home');
        }

        function updateAuthUI() {
            const authButtons = document.getElementById('auth-buttons');
            const myBookingsNav = document.getElementById('my-bookings-nav');
            const adminNav = document.getElementById('admin-nav');
            
            if (currentUser) {
                if (isAdmin) {
                    authButtons.innerHTML = `
                        <a href="#" onclick="showPage('admin')" style="color: var(--primary-color); font-weight: bold; text-decoration: none;">Admin Panel</a>
                        <a href="#" class="btn btn-outline" onclick="logout()">Logout</a>
                    `;
                    myBookingsNav.classList.add('hidden');
                    adminNav.classList.remove('hidden');
                } else {
                    authButtons.innerHTML = `
                        <span style="color: var(--primary-color); font-weight: bold;">Welcome, ${escapeHtml(currentUser.name.split(' ')[0])}</span>
                        <a href="#" class="btn btn-outline" onclick="logout()">Logout</a>
                    `;
                    myBookingsNav.classList.remove('hidden');
                    adminNav.classList.add('hidden');
                }
            } else {
                authButtons.innerHTML = `
                    <a href="#" class="btn btn-outline" onclick="showPage('login')">Login</a>
                    <a href="#" class="btn btn-primary" onclick="showPage('register')">Register</a>
                `;
                myBookingsNav.classList.add('hidden');
                adminNav.classList.add('hidden');
            }
        }

        function checkLoginStatus() {
            // In a real application, this would check cookies/localStorage
            // For demo purposes, we'll start logged out
            currentUser = null;
            isAdmin = false;
        }

        // Car Functions
        function populateFeaturedCars() {
            const container = document.getElementById('featured-cars');
            const featuredCars = cars.slice(0, 3);
            
            container.innerHTML = featuredCars.map(car => `
                <div class="car-card">
                    <div class="car-image">
                        ${car.images
                            ? `<img src="${car.images}" alt="${escapeHtml(car.name)}">`
                            : '<i class="fas fa-car"></i>'}
                    </div>
                    <div class="car-info">
                        <div class="car-name">${escapeHtml(car.name)}</div>
                        <div class="car-price">LKR ${car.price.toLocaleString()}/day</div>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">${escapeHtml(car.features)}</p>
                        <button class="btn btn-primary" onclick="bookCar(${car.id})" style="width: 100%;">
                            ${currentUser ? 'Book Now' : 'Login to Book'}
                        </button>
                    </div>
                </div>
            `).join('');
        }

        function populateAllCars() {
            const container = document.getElementById('cars-container');
            
            container.innerHTML = cars.map(car => `
                <div class="car-card" data-class="${car.class}" data-brand="${car.brand}" data-price="${car.price}">
                    <div class="car-image">
                        ${car.images
                            ? `<img src="${car.images}" alt="${escapeHtml(car.name)}">`
                            : '<i class="fas fa-car"></i>'}
                    </div>
                    <div class="car-info">
                        <div class="car-name">${escapeHtml(car.name)}</div>
                        <div class="car-price">LKR ${car.price.toLocaleString()}/day</div>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.5rem;">
                            <strong>Class:</strong> ${car.class.charAt(0).toUpperCase() + car.class.slice(1)}
                        </p>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">${escapeHtml(car.features)}</p>
                        <button class="btn btn-primary" onclick="bookCar(${car.id})" style="width: 100%;">
                            ${currentUser ? 'Book Now' : 'Login to Book'}
                        </button>
                    </div>
                </div>
            `).join('');
        }

        function filterCars() {
            const classFilter = document.getElementById('class-filter').value;
            const brandFilter = document.getElementById('brand-filter').value;
            const maxPriceInput = parseInt(document.getElementById('max-price').value, 10);
            const maxPrice = maxPriceInput > 0 ? maxPriceInput : Infinity;
            const searchTerm = document.getElementById('search-input').value.toLowerCase();
            
            const carCards = document.querySelectorAll('.car-card');
            
            carCards.forEach(card => {
                const cardClass = card.dataset.class;
                const cardBrand = card.dataset.brand;
                const cardPrice = parseInt(card.dataset.price);
                const cardName = card.querySelector('.car-name').textContent.toLowerCase();
                
                const matchesClass = !classFilter || (cardClass || '').toLowerCase() === classFilter;
                const matchesBrand = !brandFilter || (cardBrand || '').toLowerCase() === brandFilter;
                const matchesPrice = cardPrice <= maxPrice;
                const matchesSearch = !searchTerm || cardName.includes(searchTerm);
                
                if (matchesClass && matchesBrand && matchesPrice && matchesSearch) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function bookCar(carId) {
            if (!currentUser) {
                showPage('login');
                return;
            }
            
            if (isAdmin) {
                alert('Admins cannot make bookings. Please use a regular user account.');
                return;
            }
            
            const car = cars.find(c => c.id === carId);
            if (!car) return;
            
            selectedCarForBooking = car;
            document.getElementById('booking-alert').innerHTML = '';
            
            document.getElementById('selected-car-info').innerHTML = `
                <div style="background: var(--bg-light); padding: 1rem; border-radius: 10px; margin-bottom: 1rem;">
                    <h4>${escapeHtml(car.name)}</h4>
                    <p><strong>Price:</strong> LKR ${car.price.toLocaleString()}/day</p>
                    <p><strong>Features:</strong> ${escapeHtml(car.features)}</p>
                </div>
            `;
            
            // Set minimum date to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('pickup-date').min = today;
            document.getElementById('return-date').min = today;
            
            document.getElementById('booking-modal').classList.remove('hidden');
        }

        function closeBookingModal() {
            document.getElementById('booking-modal').classList.add('hidden');
            selectedCarForBooking = null;
        }

        function confirmBooking(event) {
            event.preventDefault();
            document.getElementById('booking-alert').innerHTML = '';
            
            if (!currentUser) {
                showAlert('booking-alert', 'Please log in to make a booking.', 'error');
                showPage('login');
                return;
            }
            
            if (isAdmin) {
                showAlert('booking-alert', 'Admins cannot make bookings. Please use a regular user account.', 'error');
                return;
            }
            
            if (!selectedCarForBooking) {
                showAlert('booking-alert', 'Please select a car first.', 'error');
                return;
            }
            
            if (!selectedCarForBooking.available) {
                showAlert('booking-alert', 'This car is currently unavailable.', 'error');
                return;
            }
            
            const pickupDate = document.getElementById('pickup-date').value;
            const returnDate = document.getElementById('return-date').value;
            const pickupLocation = document.getElementById('pickup-location').value;
            
            if (!pickupDate || !returnDate || !pickupLocation) {
                showAlert('booking-alert', 'Please fill in all booking details.', 'error');
                return;
            }
            
            const today = new Date().toISOString().split('T')[0];
            if (pickupDate < today) {
                showAlert('booking-alert', 'Pickup date cannot be in the past.', 'error');
                return;
            }
            
            if (new Date(returnDate) <= new Date(pickupDate)) {
                showAlert('booking-alert', 'Return date must be after pickup date.', 'error');
                return;
            }
            
            const days = Math.ceil((new Date(returnDate) - new Date(pickupDate)) / (1000 * 60 * 60 * 24));
            const total = days * selectedCarForBooking.price;
            
            const booking = {
                id: bookings.reduce((max, b) => Math.max(max, b.id), 0) + 1,
                userId: currentUser.id,
                carId: selectedCarForBooking.id,
                carName: selectedCarForBooking.name,
                userName: currentUser.name,
                pickupDate: pickupDate,
                returnDate: returnDate,
                pickupLocation: pickupLocation,
                status: 'pending',
                total: total,
                days: days
            };
            
            bookings.push(booking);
            
            alert(`Booking confirmed! Total: LKR ${total.toLocaleString()} for ${days} days.`);
            closeBookingModal();
            showPage('bookings');
        }

        // Update booking total when dates change
        document.addEventListener('change', function(e) {
            if (e.target.id === 'pickup-date' || e.target.id === 'return-date') {
                const pickupDate = document.getElementById('pickup-date').value;
                const returnDate = document.getElementById('return-date').value;
                const totalElement = document.getElementById('booking-total');
                
                if (pickupDate && returnDate && selectedCarForBooking) {
                    const pickup = new Date(pickupDate);
                    const returnD = new Date(returnDate);
                    
                    if (returnD > pickup) {
                        const days = Math.ceil((returnD - pickup) / (1000 * 60 * 60 * 24));
                        const total = days * selectedCarForBooking.price;
                        totalElement.innerHTML = `Total: LKR ${total.toLocaleString()} (${days} days)`;
                    } else {
                        totalElement.innerHTML = '';
                    }
                }
            }
        });

        // Booking Functions
        function populateUserBookings() {
            const container = document.getElementById('bookings-container');
            const userBookings = bookings.filter(b => b.userId === currentUser.id);
            
            if (userBookings.length === 0) {
                container.innerHTML = `
                    <div style="text-align: center; padding: 3rem; background: var(--bg-white); border-radius: 15px; box-shadow: var(--shadow);">
                        <i class="fas fa-car" style="font-size: 4rem; color: var(--text-light); margin-bottom: 1rem;"></i>
                        <h3>No Bookings Yet</h3>
                        <p>You haven't made any bookings yet. Browse our cars and make your first booking!</p>
                        <a href="#" class="btn btn-primary" onclick="showPage('cars')">Browse Cars</a>
                    </div>
                `;
                return;
            }
            
            container.innerHTML = userBookings.map(booking => `
                <div style="background: var(--bg-white); padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow); margin-bottom: 1rem;">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                        <div>
                            <h4>${escapeHtml(booking.carName)}</h4>
                            <p><strong>Booking ID:</strong> #${booking.id}</p>
                        </div>
                        <span class="status-badge status-${booking.status}">${booking.status.toUpperCase()}</span>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                        <div>
                            <p><strong>Pickup:</strong> ${booking.pickupDate}</p>
                            <p><strong>Return:</strong> ${booking.returnDate}</p>
                        </div>
                        <div>
                            <p><strong>Location:</strong> ${escapeHtml(booking.pickupLocation)}</p>
                            <p><strong>Total:</strong> LKR ${booking.total.toLocaleString()}</p>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Review Functions
        function populateReviews() {
            const container = document.getElementById('reviews-container');
            
            container.innerHTML = reviews.map(review => `
                <div class="review-card">
                    <div class="review-header">
                        <div>
                            <strong>${escapeHtml(review.userName)}</strong>
                            <div class="stars">${'⭐'.repeat(review.rating)}</div>
                        </div>
                        <small style="color: var(--text-light);">${review.date}</small>
                    </div>
                    <p>${escapeHtml(review.text)}</p>
                </div>
            `).join('');
        }

        function updateReviewForm() {
            const reviewForm = document.getElementById('review-form');
            
            if (currentUser && !isAdmin) {
                // Check if user has confirmed bookings
                const userBookings = bookings.filter(b => b.userId === currentUser.id && b.status === 'confirmed');
                if (userBookings.length > 0) {
                    reviewForm.classList.remove('hidden');
                } else {
                    reviewForm.classList.add('hidden');
                }
            } else {
                reviewForm.classList.add('hidden');
            }
        }

        function submitReview(event) {
            event.preventDefault();
            document.getElementById('review-alert').innerHTML = '';
            
            if (!currentUser || isAdmin) {
                showAlert('review-alert', 'You must be logged in as a customer to leave a review.', 'error');
                return;
            }
            
            const hasConfirmedBooking = bookings.some(b => b.userId === currentUser.id && b.status === 'confirmed');
            if (!hasConfirmedBooking) {
                showAlert('review-alert', 'You can leave a review after one of your bookings is confirmed.', 'error');
                return;
            }
            
            const rating = parseInt(document.getElementById('review-rating').value);
            const text = trimValue('review-text');
            
            if (!rating || rating < 1 || rating > 5) {
                showAlert('review-alert', 'Please select a rating.', 'error');
                return;
            }
            
            if (!text) {
                showAlert('review-alert', 'Please write your review.', 'error');
                return;
            }
            
            if (text.length > 500) {
                showAlert('review-alert', 'Review must be 500 characters or fewer.', 'error');
                return;
            }
            
            const review = {
                id: reviews.reduce((max, r) => Math.max(max, r.id), 0) + 1,
                userId: currentUser.id,
                userName: currentUser.name,
                rating: rating,
                text: text,
                date: new Date().toISOString().split('T')[0]
            };
            
            reviews.unshift(review);
            populateReviews();
            
            // Reset form
            document.getElementById('review-rating').value = '';
            document.getElementById('review-text').value = '';
            
            showAlert('review-alert', 'Review submitted successfully!', 'success');
        }

        // FAQ Functions
        function populateFAQs() {
            const container = document.getElementById('faq-container');
            
            container.innerHTML = faqs.map((faq, index) => `
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(${index})">
                        <span>${faq.question}</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer" id="faq-answer-${index}">
                        <p>${faq.answer}</p>
                    </div>
                </div>
            `).join('');
        }

        function toggleFAQ(index) {
            const answer = document.getElementById(`faq-answer-${index}`);
            answer.classList.toggle('active');
        }

        // Contact Form
        function submitContact(event) {
            event.preventDefault();
            document.getElementById('contact-alert').innerHTML = '';
            
            const name = trimValue('contact-name');
            const email = trimValue('contact-email').toLowerCase();
            const subject = trimValue('contact-subject');
            const message = trimValue('contact-message');
            
            if (!name || !email || !subject || !message) {
                showAlert('contact-alert', 'Please fill in all fields.', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showAlert('contact-alert', 'Please enter a valid email address.', 'error');
                return;
            }
            
            if (message.length < 10) {
                showAlert('contact-alert', 'Message must be at least 10 characters long.', 'error');
                return;
            }
            
            // In a real application, this would send the message to the server
            showAlert('contact-alert', `Thank you ${name}! Your message has been sent. We'll get back to you soon at ${email}.`, 'success');
            
            // Reset form
            event.target.reset();
        }

        // Admin Functions
        function showAdminSection(section) {
            document.querySelectorAll('.admin-section').forEach(s => s.classList.add('hidden'));
            document.getElementById(`admin-${section}`).classList.remove('hidden');
            
            if (section === 'bookings') {
                populateAdminBookings();
            } else if (section === 'cars') {
                populateAdminCars();
            } else if (section === 'users') {
                populateAdminUsers();
            }
        }

        function populateAdminDashboard() {
            showAdminSection('bookings');
        }

        function populateAdminBookings() {
            const tbody = document.querySelector('#admin-bookings-table tbody');
            
            tbody.innerHTML = bookings.map(booking => `
                <tr>
                    <td>#${booking.id}</td>
                    <td>${escapeHtml(booking.userName)}</td>
                    <td>${escapeHtml(booking.carName)}</td>
                    <td>${booking.pickupDate} to ${booking.returnDate}</td>
                    <td><span class="status-badge status-${booking.status}">${booking.status.toUpperCase()}</span></td>
                    <td>
                        ${booking.status === 'pending' ? 
                            `<div class="btn-row" style="gap: 0.5rem;">
                                <button class="btn btn-primary" onclick="updateBookingStatus(${booking.id}, 'confirmed')">Approve</button>
                                <button class="btn btn-outline" onclick="updateBookingStatus(${booking.id}, 'cancelled')">Cancel</button>
                            </div>` 
                            : 'No actions available'
                        }
                    </td>
                </tr>
            `).join('');
        }

        function updateBookingStatus(bookingId, status) {
            if (!isAdmin) {
                alert('Only admins can update booking status.');
                return;
            }
            
            const booking = bookings.find(b => b.id === bookingId);
            if (booking) {
                booking.status = status;
                populateAdminBookings();
                alert(`Booking #${bookingId} has been ${status}.`);
            }
        }

        function populateAdminCars() {
            const tbody = document.querySelector('#admin-cars-table tbody');
            
            tbody.innerHTML = cars.map(car => `
                <tr>
                    <td>${car.id}</td>
                    <td>${escapeHtml(car.name)}</td>
                    <td>${escapeHtml(car.brand.charAt(0).toUpperCase() + car.brand.slice(1))}</td>
                    <td>${escapeHtml(car.class.charAt(0).toUpperCase() + car.class.slice(1))}</td>
                    <td>LKR ${car.price.toLocaleString()}</td>
                    <td>
                        <button class="btn btn-outline" onclick="deleteCar(${car.id})" style="color: #dc3545; border-color: #dc3545;">Delete</button>
                    </td>
                </tr>
            `).join('');
        }

        function showAddCarForm() {
            document.getElementById('add-car-form').classList.remove('hidden');
        }

        function hideAddCarForm() {
            document.getElementById('add-car-form').classList.add('hidden');
            document.getElementById('add-car-form').querySelector('form').reset();
        }

        function addCar(event) {
            event.preventDefault();
            
            if (!isAdmin) {
                alert('Only admins can add cars.');
                return;
            }
            
            const name = trimValue('car-name');
            const brand = document.getElementById('car-brand').value;
            const carClass = document.getElementById('car-class').value;
            const priceValue = document.getElementById('car-price').value;
            const price = Number(priceValue);
            const features = trimValue('car-features');
            
            if (!name || !brand || !carClass || !priceValue) {
                alert('Please fill in all required fields.');
                return;
            }
            
            if (!Number.isInteger(price) || price <= 0) {
                alert('Price must be a positive whole number.');
                return;
            }
            
            if (cars.some(car => car.name.toLowerCase() === name.toLowerCase())) {
                alert('A car with this name already exists.');
                return;
            }
            
            const newCar = {
                id: cars.reduce((max, car) => Math.max(max, car.id), 0) + 1,
                name: name,
                brand: brand,
                class: carClass,
                price: price,
                features: features || 'Standard features',
                available: true
            };
            
            cars.push(newCar);
            populateAdminCars();
            populateAllCars();
            populateFeaturedCars();
            hideAddCarForm();
            
            alert('Car added successfully!');
        }

        function deleteCar(carId) {
            if (!isAdmin) {
                alert('Only admins can delete cars.');
                return;
            }
            
            if (confirm('Are you sure you want to delete this car?')) {
                const index = cars.findIndex(c => c.id === carId);
                if (index !== -1) {
                    cars.splice(index, 1);
                    populateAdminCars();
                    populateAllCars();
                    populateFeaturedCars();
                    alert('Car deleted successfully!');
                }
            }
        }

        function populateAdminUsers() {
            const tbody = document.querySelector('#admin-users-table tbody');
            
            tbody.innerHTML = users.map(user => `
                <tr>
                    <td>${user.id}</td>
                    <td>${escapeHtml(user.name)}</td>
                    <td>${escapeHtml(user.email)}</td>
                    <td>${escapeHtml(user.phone)}</td>
                    <td>${user.totalBookings}</td>
                    <td>${user.joinDate}</td>
                </tr>
            `).join('');
        }

        // Utility Functions
        function showAlert(containerId, message, type) {
            const container = document.getElementById(containerId);
            container.innerHTML = `<div class="alert alert-${type}"></div>`;
            container.querySelector('.alert').textContent = message;
        }

        function trimValue(id) {
            return document.getElementById(id).value.trim();
        }

        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        function isValidPhone(phone) {
            return /^[+]?[0-9 ()-]{7,15}$/.test(phone);
        }

        function escapeHtml(value) {
            return String(value)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        // Modal styles
        const modalStyles = `
            .modal {
                position: fixed;
                z-index: 2000;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.5);
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            .modal-content {
                background: var(--bg-white);
                border-radius: 15px;
                width: 90%;
                max-width: 500px;
                max-height: 90vh;
                overflow-y: auto;
                box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            }
            
            .modal-header {
                padding: 1.5rem;
                border-bottom: 1px solid #E0E0E0;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            .modal-body {
                padding: 1.5rem;
            }
            
            .close {
                color: var(--text-light);
                float: right;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
                line-height: 1;
            }
            
            .close:hover {
                color: var(--text-dark);
            }
        `;

        // Add modal styles to document
        const styleSheet = document.createElement('style');
        styleSheet.textContent = modalStyles;
        document.head.appendChild(styleSheet);

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal')) {
                closeBookingModal();
            }
        });

        // Enhanced search functionality
        function enhancedSearch() {
            const searchTerm = document.getElementById('search-input').value.toLowerCase();
            const carCards = document.querySelectorAll('.car-card');
            
            carCards.forEach(card => {
                const carName = card.querySelector('.car-name').textContent.toLowerCase();
                const carFeatures = card.querySelector('p').textContent.toLowerCase();
                
                if (carName.includes(searchTerm) || carFeatures.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Add keyboard navigation for accessibility
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeBookingModal();
            }
        });

        // Auto-update return date minimum when pickup date changes
        document.addEventListener('change', function(e) {
            if (e.target.id === 'pickup-date') {
                const pickupDate = e.target.value;
                const returnDateInput = document.getElementById('return-date');
                if (pickupDate) {
                    const nextDay = new Date(pickupDate);
                    nextDay.setDate(nextDay.getDate() + 1);
                    returnDateInput.min = nextDay.toISOString().split('T')[0];
                }
            }
        });

        // Seasonal offers and promotions (demo data)
        const seasonalOffers = [
            {
                title: "Christmas Special",
                description: "Get 20% off on all bookings during December!",
                validUntil: "2026-12-25",
                discount: 20
            },
            {
                title: "Monsoon Season Discount",
                description: "15% off for bookings during rainy season",
                validUntil: "2027-08-31",
                discount: 15
            }
        ];

        // Add seasonal offers to home page
        function addSeasonalOffers() {
            const homeSection = document.querySelector('#home-page .section:last-child');
            const offersSection = document.createElement('section');
            offersSection.className = 'section';
            offersSection.style.background = 'var(--bg-white)';
            
            offersSection.innerHTML = `
                <div class="container">
                    <h2 class="section-title">Special Offers</h2>
                    <div class="about-grid">
                        ${seasonalOffers.map(offer => `
                            <div class="feature-card" style="background: linear-gradient(135deg, #FF6B35, #DAA520); color: white;">
                                <i class="fas fa-gift" style="color: white;"></i>
                                <h3>${offer.title}</h3>
                                <p style="color: white;">${offer.description}</p>
                                <small style="color: white;">Valid until: ${offer.validUntil}</small>
                            </div>
                        `).join('')}
                        <div class="feature-card" style="background: linear-gradient(135deg, #FF6B35, #DAA520); color: white;">
                            <i class="fas fa-star" style="color: white;"></i>
                            <h3>Loyalty Program</h3>
                            <p style="color: white;">Rent 5 times and get your 6th rental at 50% off! Build points with every booking.</p>
                        </div>
                    </div>
                </div>
            `;
            
            homeSection.insertAdjacentElement('afterend', offersSection);
        }

        // Add rental tips section
        function addRentalTips() {
            const tipsSection = document.createElement('section');
            tipsSection.className = 'section';
            tipsSection.innerHTML = `
                <div class="container">
                    <h2 class="section-title">Rental Tips for Sri Lanka</h2>
                    <div class="car-grid">
                        <div class="feature-card">
                            <i class="fas fa-road"></i>
                            <h3>Driving Guidelines</h3>
                            <p>Drive on the left side. Be cautious of local traffic patterns, especially in busy areas like Colombo and Kandy.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-gas-pump"></i>
                            <h3>Fuel Stations</h3>
                            <p>Fuel stations are available throughout the island. Keep tank above quarter full in remote areas.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-map-marked-alt"></i>
                            <h3>Popular Routes</h3>
                            <p>Explore the Cultural Triangle, Southern beaches, and hill country. Plan for mountain roads taking longer.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-mobile-alt"></i>
                            <h3>Emergency Contacts</h3>
                            <p>Save our 24/7 hotline: +94 11 234 5678. Police: 119, Ambulance: 110. Keep contacts handy.</p>
                        </div>
                    </div>
                </div>
            `;
            
            const faqPage = document.getElementById('faq-page');
            faqPage.appendChild(tipsSection);
        }

        // Initialize additional content
        document.addEventListener('DOMContentLoaded', function() {
            addSeasonalOffers();
            addRentalTips();
        });

        // Form validation enhancements
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function validatePhone(phone) {
            const re = /^[\+]?[0-9\-\s\(\)]{8,}$/;
            return re.test(phone);
        }

        // Enhanced registration validation
        function enhancedRegisterValidation(event) {
            const email = document.getElementById('register-email').value;
            const phone = document.getElementById('register-phone').value;
            const password = document.getElementById('register-password').value;
            
            if (!validateEmail(email)) {
                showAlert('register-alert', 'Please enter a valid email address.', 'error');
                event.preventDefault();
                return false;
            }
            
            if (!validatePhone(phone)) {
                showAlert('register-alert', 'Please enter a valid phone number.', 'error');
                event.preventDefault();
                return false;
            }
            
            if (password.length < 6) {
                showAlert('register-alert', 'Password must be at least 6 characters long.', 'error');
                event.preventDefault();
                return false;
            }
            
            return true;
        }

        // Add real-time form validation
        document.addEventListener('input', function(e) {
            if (e.target.type === 'email') {
                if (e.target.value && !validateEmail(e.target.value)) {
                    e.target.style.borderColor = '#dc3545';
                } else {
                    e.target.style.borderColor = '#28a745';
                }
            }
            
            if (e.target.type === 'tel') {
                if (e.target.value && !validatePhone(e.target.value)) {
                    e.target.style.borderColor = '#dc3545';
                } else {
                    e.target.style.borderColor = '#28a745';
                }
            }
        });

        // Loading states for better UX
        function showLoading(buttonElement) {
            const originalText = buttonElement.textContent;
            buttonElement.textContent = 'Loading...';
            buttonElement.disabled = true;
            
            setTimeout(() => {
                buttonElement.textContent = originalText;
                buttonElement.disabled = false;
            }, 1000);
        }

        // Add smooth scrolling for anchor links
        document.addEventListener('click', function(e) {
            if (e.target.tagName === 'A' && e.target.getAttribute('href') === '#') {
                e.preventDefault();
            }
        });

        // Add touch support for mobile devices
        let touchStartY = 0;
        document.addEventListener('touchstart', function(e) {
            touchStartY = e.touches[0].clientY;
        });

        document.addEventListener('touchmove', function(e) {
            const touchEndY = e.touches[0].clientY;
            const diff = touchStartY - touchEndY;
            
            if (Math.abs(diff) > 100) {
                // Handle swipe gestures if needed
            }
        });

        // Auto-hide alerts after 5 seconds
        function autoHideAlert(containerId) {
            setTimeout(() => {
                const container = document.getElementById(containerId);
                if (container) {
                    container.innerHTML = '';
                }
            }, 5000);
        }

        // Update showAlert function to auto-hide
        const originalShowAlert = showAlert;
        showAlert = function(containerId, message, type) {
            originalShowAlert(containerId, message, type);
            autoHideAlert(containerId);
        };

        // Add print styles for booking confirmations
        const printStyles = `
            @media print {
                .navbar, .auth-buttons, .btn { display: none !important; }
                .main-content { margin-top: 0 !important; }
                body { background: white !important; }
            }
        `;
        
        const printStyleSheet = document.createElement('style');
        printStyleSheet.textContent = printStyles;
        document.head.appendChild(printStyleSheet);

        console.log('🚗 LankaRide Car Rental System Loaded Successfully!');
        console.log('Features: Authentication, Car Booking, Admin Dashboard, Reviews, FAQ');
        console.log('Admin Login: admin@lankaride.lk / admin123');
        console.log('Demo User Password: password123');
    </script>
</body>
</html><?php /**PATH D:\ALL MY PROJECTS\car-renting-site-main\car-renting-site-main\resources\views/index.blade.php ENDPATH**/ ?>