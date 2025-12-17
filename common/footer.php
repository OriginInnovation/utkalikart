<style>
    /* --- Base Footer Styling --- */
    .footer-wrapper {
        background-color: #fff0e9;
        /* Soft Gray Background */
        color: #4a4a4a;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 14px;
        padding-top: 70px;
        padding-bottom: 30px;
        border-top: 1px solid #e5e5e5;
    }

    .footer-wrapper h6 {
        color: #222;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .footer-wrapper a {
        color: #555;
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-block;
    }

    .footer-wrapper a:hover {
        color: #000;
        transform: translateX(3px);
        /* Subtle shift right */
        font-weight: 500;
    }

    .footer-wrapper ul li {
        margin-bottom: 12px;
    }

    /* --- Newsletter Card (Unique Touch) --- */
    .newsletter-card {
        background-color: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 16px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        /* Soft Floating Shadow */
    }

    .newsletter-card h3 {
        font-family: serif;
        font-style: italic;
        color: #222;
        margin-bottom: 10px;
    }

    .input-group-custom {
        border: 1px solid #ddd;
        border-radius: 50px;
        padding: 5px;
        background: #fff;
        display: flex;
    }

    .input-group-custom input {
        border: none;
        outline: none;
        padding-left: 20px;
        width: 100%;
        border-radius: 50px;
    }

    .input-group-custom button {
        border-radius: 50px;
        padding: 10px 25px;
        background: #222;
        color: #fff;
        border: none;
        font-weight: 600;
        transition: background 0.3s;
    }

    .input-group-custom button:hover {
        background: #444;
    }

    /* --- Divider --- */
    .custom-hr {
        margin: 40px 0;
        border-top: 1px solid #e0e0e0;
        opacity: 1;
    }

    /* --- Contact Buttons --- */
    .btn-contact {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #222;
        color: #222;
        text-align: center;
        border-radius: 8px;
        background: transparent;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.3s;
    }

    .btn-contact:hover {
        background: #222;
        color: #fff;
    }

    /* --- Payment & Trust --- */
    .payment-row img {
        height: 20px;
        margin: 0 8px;
        filter: grayscale(100%);
        /* Make icons B&W initially */
        opacity: 0.7;
        transition: all 0.3s;
    }

    .payment-row img:hover {
        filter: grayscale(0%);
        /* Color on hover */
        opacity: 1;
    }

    /* --- Bottom SEO Text --- */
    .seo-text {
        font-size: 11px;
        color: #888;
        line-height: 1.8;
        text-align: justify;
    }

    .recent-searches a {
        color: #888;
        font-size: 11px;
        margin-right: 10px;
        border-bottom: 1px dotted #ccc;
    }

    /* --- Base Footer Styling --- */
    .footer-wrapper {
        background-color: #fff0e9;
        /* Soft Gray Background */
        color: #4a4a4a;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 14px;
        padding-top: 0;
        /* Changed to 0 to accommodate top bar */
        padding-bottom: 30px;
        border-top: 1px solid #e5e5e5;
        overflow: hidden;
        /* Prevent horizontal scrollbar on body */
    }

    /* --- Scrolling Text Styles (New Added) --- */
    .scrolling-bar {
        background-color: #fff0e9;
        /* Dark background for contrast */
        color: #e364296b;
        padding: 15px 0;
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        margin-bottom: 10px;
        /* Space below the bar */
    }

    .scrolling-bar h1 {
        display: inline-block;
        /* color: #ffffff94; */
        font-size: 55px;
        font-weight: 700;
        text-transform: uppercase;
        margin: 0;
        letter-spacing: 2px;
        padding-left: 100%;
        animation: scrollText 30s linear infinite;
    }

    /* Keyframes for Right to Left Animation */
    @keyframes scrollText {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(-100%, 0);
            /* Move completely to left */
        }
    }

    .footer-wrapper h6 {
        color: #222;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .footer-wrapper a {
        color: #555;
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-block;
    }

    .footer-wrapper a:hover {
        color: #000;
        transform: translateX(3px);
        font-weight: 500;
    }

    .footer-wrapper ul li {
        margin-bottom: 12px;
    }

    /* --- Newsletter Card --- */
    .newsletter-card {
        background-color: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 16px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .newsletter-card h3 {
        font-family: serif;
        font-style: italic;
        color: #222;
        margin-bottom: 10px;
    }

    .input-group-custom {
        border: 1px solid #ddd;
        border-radius: 50px;
        padding: 5px;
        background: #fff;
        display: flex;
    }

    .input-group-custom input {
        border: none;
        outline: none;
        padding-left: 20px;
        width: 100%;
        border-radius: 50px;
    }

    .input-group-custom button {
        border-radius: 50px;
        padding: 10px 25px;
        background: #222;
        color: #fff;
        border: none;
        font-weight: 600;
        transition: background 0.3s;
    }

    .input-group-custom button:hover {
        background: #444;
    }

    /* --- Divider --- */
    .custom-hr {
        margin: 40px 0;
        border-top: 1px solid #e0e0e0;
        opacity: 1;
    }

    /* --- Contact Buttons --- */
    .btn-contact {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #222;
        color: #222;
        text-align: center;
        border-radius: 8px;
        background: transparent;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.3s;
    }

    .btn-contact:hover {
        background: #222;
        color: #fff;
    }

    /* --- Payment & Trust --- */
    .payment-row img {
        height: 20px;
        margin: 0 8px;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s;
    }

    .payment-row img:hover {
        filter: grayscale(0%);
        opacity: 1;
    }

    /* --- Bottom SEO Text --- */
    .seo-text {
        font-size: 11px;
        color: #888;
        line-height: 1.8;
        text-align: justify;
    }

    .recent-searches a {
        color: #888;
        font-size: 11px;
        margin-right: 10px;
        border-bottom: 1px dotted #ccc;
    }

    /* Center social icons on mobile */
    @media (max-width: 767px) {
        .footer-wrapper .row.align-items-center>.col-md-4 {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }
    }
</style>
<footer class="footer-wrapper">

    <div class="scrolling-bar">
        <h1>🚀 Super Sale is Live! Get Flat 50% OFF on New Arrivals. 🌟 Free Shipping on Orders above ₹999. 🛍️ Limited Time Offer!</h1>
    </div>

    <div class="container">

        <div class="row align-items-start">

            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-sm-4 col-6 mb-4">
                        <h6>Shop Category</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Sneakers</a></li>
                            <li><a href="#">Loafers</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                            <li><a href="#">Running</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-6 mb-4">
                        <h6>Collections</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Best Sellers</a></li>
                            <li><a href="#">Limited Edition</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-12 mb-4">
                        <h6>Shop By Use</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Daily Wear</a></li>
                            <li><a href="#">Office Work</a></li>
                            <li><a href="#">Outdoor & Trek</a></li>
                            <li><a href="#">Party Wear</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="newsletter-card">
                    <i class="bi bi-envelope-paper fs-3 mb-2 text-muted"></i>
                    <h3>Join the Inner Circle</h3>
                    <p class="text-muted small mb-4">Get updates on new drops and sustainable fashion tips.</p>
                    <form>
                        <div class="input-group-custom">
                            <input type="email" placeholder="Your email address">
                            <button type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr class="custom-hr">

        <div class="row">
            <div class="col-lg-2 col-md-3 col-6 mb-4">
                <h6>Offers</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Festival Sale</a></li>
                    <li><a href="#">Combo Deals</a></li>
                    <li><a href="#">Gift Cards</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
                <h6>Support</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Track Order</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Cancellations</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
                <h6>About</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">Store Locator</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <h6>Policies</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12">
                <h6>Contact Us</h6>
                <a href="#" class="btn-contact"><i class="bi bi-chat-text me-2"></i> Live Chat Support</a>
                <a href="#" class="btn-contact"><i class="bi bi-telephone me-2"></i> +91 98765 43210</a>
                <div class="text-muted small mt-2 text-center"><i class="bi bi-clock"></i> Mon-Sat (10AM - 7PM)</div>
            </div>
        </div>

        <hr class="custom-hr">

        <div class="row align-items-center">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="d-flex gap-3">
                    <a href="#" class="fs-5"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="fs-5"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="fs-5"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-8 text-md-end text-center">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-end gap-3">
                    <span class="small text-muted"><i class="bi bi-shield-check text-success"></i> 100% Secure Payments</span>
                    <div class="payment-row">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg" alt="Mastercard">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/American_Express_logo_%282018%29.svg" alt="Amex">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/UPI-Logo-vector.svg" alt="UPI">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h6 class="text-muted small">About The Brand</h6>
            <p class="seo-text">
                Established in 2025, we started with a simple question: "Why compromise style for comfort?"
                Today, we are revolutionizing the footwear industry in India by combining recycled materials
                with cutting-edge ergonomic design. We are not just selling shoes; we are promoting a lifestyle
                that values the planet as much as personal style.
            </p>

            <div class="recent-searches mt-3">
                <strong>Trending:</strong>
                <a href="#">Men's Casual</a>
                <a href="#">Women's Flats</a>
                <a href="#">Summer Collection</a>
                <a href="#">Eco-Friendly Shoes</a>
            </div>
        </div>

        <div class="text-center mt-5 pt-3 border-top small text-muted">
            &copy; 2025 Origin Innovation AI. All Rights Reserved.
        </div>

    </div>
</footer>