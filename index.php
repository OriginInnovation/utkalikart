<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="ShopNow offers the latest fashion and accessories for women, men, and kids. Discover exclusive deals, new arrivals, and a seamless online shopping experience" />
    <meta name="keywords"
        content="online shopping, e-commerce, women's fashion, men's clothing, kids apparel, ShopNow, latest deals, new arrivals" />
    <meta name="author" content="origin-innovation" />
    <title>ShopNow - Online Shopping for Women, Men & Kids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/main.css?v=3.91">
    <style>
        .hero-banner {
            width: 100%;
            overflow: hidden;
        }

        .banner-img {
            width: 100%;
            height: 350px;
            display: block;
            object-fit: cover;
        }

        .view-btn {
            transition: 0.3s ease-in-out;
        }

        .view-btn:hover {
            background: #000 !important;
            color: #fff !important;
            border-color: #000 !important;
            transform: translateY(-2px);
        }

        /* Container Styling */
        .slider-section {
            padding: 4px 0;
            position: relative;
            background: #fff;
        }

        .slider-wrapper {
            display: flex;
            align-items: center;
            position: relative;
            /* max-width: 1200px; */
            margin: 0 auto;
        }

        /* The Scrollable Area */
        .slider-track {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 20px;
            padding: 20px 10px;
            /* Padding for shadow/hover space */
            scrollbar-width: none;
            /* Firefox hide scrollbar */
        }

        .slider-track::-webkit-scrollbar {
            display: none;
            /* Chrome/Safari hide scrollbar */
        }

        /* Card Styling */
        .category-card {
            min-width: 140px;
            height: 107px;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            text-align: center;
            padding-bottom: 15px;
            cursor: pointer;
            transition: transform 0.3s ease;
            position: relative;
            text-decoration: none;
            color: #333;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        /* Image Styling (Floating Effect) */
        .category-card img {
            width: 100px;
            /* Adjust based on your image size */
            height: auto;
            position: absolute;
            top: -20px;
            /* Pulls image up like the design */
            transition: transform 0.3s;
            filter: drop-shadow(0 10px 10px rgba(0, 0, 0, 0.1));
        }

        .category-card:hover img {
            transform: scale(1.1);
        }

        .category-name {
            font-weight: 700;
            font-size: 14px;
            color: #444;
            z-index: 2;
        }

        /* --- Exact Colors from Image --- */
        .bg-green {
            background-color: #dceddd;
        }

        /* New Launches */
        .bg-red {
            background-color: #f4d0d2;
        }

        /* Limited Stock */
        .bg-brown {
            background-color: #e8e2df;
        }

        /* Begin Walk */
        .bg-blue {
            background-color: #dce8f4;
        }

        /* Men */
        .bg-pink {
            background-color: #eddcd9;
        }

        /* Women */
        .bg-gray {
            background-color: #f4f4f0;
        }

        /* Sneakers/Others */

        /* Navigation Buttons */
        .nav-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid #ddd;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            position: absolute;
        }

        .nav-btn:hover {
            background: #333;
            color: #fff;
            border-color: #333;
        }

        .prev-btn {
            left: -20px;
        }

        .next-btn {
            right: -20px;
        }

        /* Hide buttons on mobile if needed, but flex keeps them okay */
        @media (max-width: 768px) {
            .nav-btn {
                display: none;
            }

            /* Mobile me ungli se scroll karenge */
            .slider-track {
                gap: 15px;
            }
        }

        .category-section {
            font-family: 'Inter', sans-serif;
        }

        /* Card */
        .cat-card {
            position: relative;
            background: linear-gradient(#ffe9c9, #ffd7a4);
            padding: 20px;
            border-radius: 12px;
            height: 260px;
            overflow: hidden;
            text-align: center;
        }

        /* Title */
        .cat-title {
            margin: 0;
            font-weight: 600;
            font-size: 14px;
        }

        /* Arrow */
        .cat-arrow {
            position: absolute;
            right: 10px;
            top: 10px;
            background: white;
            border: none;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Images */
        .cat-img {
            /* width: 120px; */
            margin-top: 15px;
            transition: 0.4s;
            /* transform: rotate(-5deg); */
            height: 200px;
        }

        .cat-card:hover .cat-img {
            transform: translateY(-8px) rotate(-5deg);
        }

        /* Stand */
        .cat-stand {
            width: 120px;
            height: 45px;
            background: #f7d1a4;
            border-radius: 6px;
            margin: 12px auto 0;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .shop-by-price-section img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 6px;
            transition: transform 0.4s ease;
        }

        .price-card {
            position: relative;
            display: block;
            overflow: hidden;
            border-radius: 6px;
        }

        /* 🌟 Passing Shadow Effect */
        .price-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            /* shadow start from outside left */
            width: 100%;
            height: 100%;
            background: linear-gradient(to right,
                    rgba(0, 0, 0, 0) 0%,
                    rgba(0, 0, 0, 0.35) 50%,
                    rgba(0, 0, 0, 0) 100%);
            transform: skewX(-15deg);
            transition: 0.5s ease;
            pointer-events: none;
        }

        /* Hover → shadow sweeps across the card */
        .price-card:hover::after {
            left: 100%;
            /* sweep from left → right */
        }

        /* Hover → Slight zoom */
        .price-card:hover img {
            transform: scale(1.06);
        }

        .price-overlay {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 18px 0;
            text-align: center;
            font-size: 30px;
            font-weight: 700;
            color: #f3e4b0;
            background: rgba(0, 0, 0, 0.55);
            font-family: 'Cinzel', serif;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>

    <!-- <div class="utkalika-loader">
        <div class="utkalika-title">ଉତ୍କଳିକା </div>
        <div class="utkalika-subtitle">Utkalikart</div>
        <div class="utkalika-loading-text">Loading<span>.</span><span>.</span><span>.</span></div>
    </div> -->

    <?php include 'common/header.php' ?>

    <button id="ar-goTopBtn" class="ar-go-top-btn" aria-label="Go to top">
        <i class="bi bi-chevron-up"></i>
    </button>


    <div class="slider-section px-4">
        <div class="slider-wrapper px-5">

            <button class="nav-btn prev-btn" onclick="scrollSlider(-1)">
                <i class="bi bi-chevron-left fs-5"></i>
            </button>

            <div class="slider-track" id="slider">

                <a href="#" class="category-card bg-green">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Shoe">
                    <span class="category-name">New Launches</span>
                </a>

                <a href="#" class="category-card bg-red">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Timer">
                    <span class="category-name">Limited Stock</span>
                </a>

                <a href="#" class="category-card bg-brown">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Walk">
                    <span class="category-name">Begin Walk</span>
                </a>

                <a href="#" class="category-card bg-blue">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Men">
                    <span class="category-name">Men</span>
                </a>

                <a href="#" class="category-card bg-pink">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Women">
                    <span class="category-name">Women</span>
                </a>

                <a href="#" class="category-card bg-gray">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Sneakers">
                    <span class="category-name">Sneakers</span>
                </a>

                <a href="#" class="category-card bg-gray">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Slip Ons">
                    <span class="category-name">Slip Ons</span>
                </a>

                <a href="#" class="category-card bg-gray">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Loafers">
                    <span class="category-name">Loafers</span>
                </a>

                <a href="#" class="category-card bg-gray">
                    <img src="//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300" alt="Oxfords">
                    <span class="category-name">Oxfords</span>
                </a>

            </div>

            <button class="nav-btn next-btn" onclick="scrollSlider(1)">
                <i class="bi bi-chevron-right fs-5"></i>
            </button>

        </div>
    </div>

    <script>
        function scrollSlider(direction) {
            const slider = document.getElementById('slider');
            const scrollAmount = 200; // Ek baar me kitna scroll karna hai

            if (direction === 1) {
                slider.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            } else {
                slider.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            }
        }
    </script>



    <div class="hero-banner">
        <img src="assets/img/eZCrPgtM_ecf89ec6e998443894b3bd4eed721c3e.webp"
            alt="Advertisement Banner" class="banner-img">
    </div>


    <section class="icon-section py-5">
        <div class="container">
            <div class="row g-3 justify-content-center text-center">
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-column align-items-center icon-box p-3">
                        <i class="bi bi-emoji-smile fs-2 mb-2"></i>
                        <h6>3M+ Happy Customers</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-column align-items-center icon-box p-3">
                        <i class="bi bi-flag fs-2 mb-2"></i>
                        <h6>Proudly Made in India</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-column align-items-center icon-box p-3">
                        <i class="bi bi-recycle fs-2 mb-2"></i>
                        <h6>3.2M+ Plastic Bottles Recycled</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-column align-items-center icon-box p-3">
                        <i class="bi bi-credit-card-2-front fs-2 mb-2"></i>
                        <h6>No Cost EMIs via UPI</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="bam-carousel">
            <div class="bam-track" id="bamTrack">

                <!-- 10 Static Items -->
                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/premium_shirts.jpeg" alt="">
                        <p>Premium Shirts</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/ethinic_collection.webp" alt="">
                        <p>Menswear</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/womens_fashion.jpeg" alt="">
                        <p>Women Fashion</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/designer_wear.webp" alt="">
                        <p>Designer Wear</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/ethinic_collection.webp" alt="">
                        <p>Ethnic Collection</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/casual_wear.jpeg" alt="">
                        <p>Casual Wear</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/profile photo.jpg" alt="">
                        <p>Formal Collection</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/trndy_tops.jpeg" alt="">
                        <p>Trendy Tops</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/jackets.webp" alt="">
                        <p>Jackets</p>
                    </a>
                </div>

                <div class="bam-item">
                    <a href="#" class="bam-link">
                        <img src="assets/img/western_wear.jpeg" alt="">
                        <p>Western Wear</p>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <section style="background-color: #fff0e9;">
        <div class="container shop-by-section py-5">
            <div class="of-collection-heading m-0">
                <h2 class="mb-5">Shop by Collection</h2>
            </div>

            <div class="row g-4 of-collection-row">

                <!-- Item 1 -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="of-collection-item">
                        <img src="assets/img/pink.webp"
                            class="of-collection-img" alt="">
                        <div class="of-collection-overlay">
                            <div class="of-collection-name">Wedding Collection</div>
                            <a href="#"><button class="of-collection-btn">Shop Now ➜</button></a>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="of-collection-item">
                        <img src="assets/img/cotton2.webp"
                            class="of-collection-img" alt="">
                        <div class="of-collection-overlay">
                            <div class="of-collection-name">Festive Collection</div>
                            <a href="#"><button class="of-collection-btn">Shop Now ➜</button></a>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="of-collection-item">
                        <img src="assets/img/ethinic_collection.webp"
                            class="of-collection-img" alt="">
                        <div class="of-collection-overlay">
                            <div class="of-collection-name">Casual Collection</div>
                            <a href="#"><button class="of-collection-btn">Shop Now ➜</button></a>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="of-collection-item">
                        <img src="assets/img/jackets.webp"
                            class="of-collection-img" alt="">
                        <div class="of-collection-overlay">
                            <div class="of-collection-name">Designer Collection</div>
                            <a href="#"><button class="of-collection-btn">Shop Now ➜</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="features">
        <div class="of-collection-heading2 m-0">
            <h2 class="mb-4">Our Featured Products</h2>
        </div>

        <div class="motif-card-container container">

            <!-- Product 1 -->
            <div class="motif-card-link">
                <div class="motif-card">
                    <div class="motif-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/pink.webp" class="motif-base-img" alt="">
                            <img src="assets/img/pink2.webp" class="motif-hover-img" alt="">
                        </a>

                        <div class="oa-sale-badge">20% OFF</div>

                        <i class="fas fa-heart myshop-wishlist-btn"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                    </div>

                    <div class="motif-card-content">
                        <div>
                            <div class="motif-card-title">Elegant Pink Dress</div>
                            <div class="motif-card-description">Soft, stylish and premium.</div>

                            <div class="ab-rating">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 
                                8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                4.5 <span class="motif-text text-secondary">| 152 Reviews</span>
                            </div>

                            <span class="wl-price">₹1499</span>
                            <span class="wl-price-original">₹1799</span>
                        </div>

                        <a href="product_details.html">
                            <button class="motif-card-btn">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Product 2 -->
            <div class="motif-card-link">
                <div class="motif-card">
                    <div class="motif-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/sky.webp" class="motif-base-img" alt="">
                            <img src="assets/img/sky2.webp" class="motif-hover-img" alt="">
                        </a>

                        <div class="oa-sale-badge">15% OFF</div>

                        <i class="fas fa-heart myshop-wishlist-btn"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                    </div>

                    <div class="motif-card-content">
                        <div>
                            <div class="motif-card-title">Premium Blue Sarees</div>
                            <div class="motif-card-description">Warm & comfortable.</div>

                            <div class="ab-rating">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 
                                8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                4.7 <span class="motif-text text-secondary">| 98 Reviews</span>
                            </div>

                            <span class="wl-price">₹999</span>
                            <span class="wl-price-original">₹1199</span>
                        </div>

                        <a href="product_details.html">
                            <button class="motif-card-btn">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Product 3 -->
            <div class="motif-card-link">
                <div class="motif-card">
                    <div class="motif-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/dhoti.webp" class="motif-base-img" alt="">
                            <img src="assets/img/dhoti2.webp" class="motif-hover-img" alt="">
                        </a>

                        <div class="oa-sale-badge">10% OFF</div>

                        <i class="fas fa-heart myshop-wishlist-btn"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                    </div>

                    <div class="motif-card-content">
                        <div>
                            <div class="motif-card-title">Classic White Dhoti</div>
                            <div class="motif-card-description">Perfect for any occasion.</div>

                            <div class="ab-rating">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 
                                8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                4.3 <span class="motif-text text-secondary">| 210 Reviews</span>
                            </div>

                            <span class="wl-price">₹799</span>
                            <span class="wl-price-original">₹899</span>
                        </div>

                        <a href="product_details.html">
                            <button class="motif-card-btn">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Product 4 -->
            <div class="motif-card-link">
                <div class="motif-card">
                    <div class="motif-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/white.webp" class="motif-base-img" alt="">
                            <img src="assets/img/white2.webp" class="motif-hover-img" alt="">
                        </a>

                        <div class="oa-sale-badge">10% OFF</div>

                        <i class="fas fa-heart myshop-wishlist-btn"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                    </div>

                    <div class="motif-card-content">
                        <div>
                            <div class="motif-card-title">Classic Coated Sarees</div>
                            <div class="motif-card-description">Perfect for any occasion.</div>

                            <div class="ab-rating">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 
                                8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                4.3 <span class="motif-text text-secondary">| 210 Reviews</span>
                            </div>

                            <span class="wl-price">₹799</span>
                            <span class="wl-price-original">₹899</span>
                        </div>

                        <a href="product_details.html">
                            <button class="motif-card-btn">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="shop-by-price-section py-5">
        <div class="of-collection-heading2 m-0 text-center mb-4">
            <h2>SHOP BY PRICE</h2>
        </div>

        <div class="container">
            <div class="row g-4">

                <!-- UNDER 1499 -->
                <div class="col-6 col-md-3">
                    <a href="#" class="price-card">
                        <img src="assets/img/black.webp" alt="">
                        <div class="price-overlay">UNDER ₹1499</div>
                    </a>
                </div>

                <!-- UNDER 1999 -->
                <div class="col-6 col-md-3">
                    <a href="#" class="price-card">
                        <img src="assets/img/cotton.webp" alt="">
                        <div class="price-overlay">UNDER ₹1999</div>
                    </a>
                </div>

                <!-- UNDER 2999 -->
                <div class="col-6 col-md-3">
                    <a href="#" class="price-card">
                        <img src="assets/img/jackets.webp" alt="">
                        <div class="price-overlay">UNDER ₹2999</div>
                    </a>
                </div>

                <!-- UNDER 5999 -->
                <div class="col-6 col-md-3">
                    <a href="#" class="price-card">
                        <img src="assets/img/sky.webp" alt="">
                        <div class="price-overlay">UNDER ₹5999</div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <section class="od-banner-wrapper">
        <img src="assets/img/about_bg_element.png" class="od-dome-bg" alt="Dome Background" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 od-banner-left">
                    <h2>The Gateway to</h2>
                    <h2> India's Timeless Heritage</h2>
                    <p>
                        We aim to provide a platform to Indian Handloom Weavers and Handicraft Artisans to sell
                        their
                        traditional handcrafted products online; paving the way for their financial and social
                        empowerment.
                        This will also help in promoting their skills while eliminating the intermediaries.
                        We hope to raise the dignity of the Indian artisans and kindle an interest for an
                        unsurpassed
                        legacy
                        of craft that spans millennia and spreads across the length and breadth of India.
                    </p>
                </div>
                <div class="col-md-6 od-banner-img-wrapper mt-4 mt-md-0">
                    <img src="assets/img/thegateway.webp" alt="Handloom Weaver" />
                </div>
            </div>
        </div>
    </section>

    <section class="category-section py-5">
        <div class="container">

            <!-- Title -->
            <div class="text-center mb-4">
                <h2 class="fw-bold">Shop by Category</h2>

                <!-- Toggle Buttons -->
                <div class="btn-group mt-3 gap-2">
                    <button id="btn-men" class="btn btn-dark btn-sm">Sarees</button>
                    <button id="btn-women" class="btn btn-outline-dark btn-sm">Kurti</button>
                </div>
            </div>

            <!-- MEN Categories -->
            <div id="men-cats" class="row g-4">

                <!-- 1 -->
                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Sneakers</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/banner1.jpg" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Slip Ons</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/cotton2.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Loafers</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/jackets.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Oxfords</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/pink2.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Sandals</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/sky.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Flip Flops</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/slide 1.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Slides</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/slide 3.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Clogs</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/slide 4.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

            </div>

            <!-- WOMEN Categories -->
            <div id="women-cats" class="row g-4 d-none">

                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Heels</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/slide 5.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Flats</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/trndy_tops.jpeg" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Boots</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/western_wear.jpeg" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="cat-card">
                        <p class="cat-title">Sandals</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/white.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

            </div>

            <!-- View All -->
            <div class="text-center mt-4">
                <button class="btn btn-outline-dark px-4 py-2 rounded-pill fw-semibold view-btn">
                    View All <i class="bi bi-chevron-right ms-2"></i>
                </button>
            </div>

        </div>
    </section>


    <style>
        .shop-role-section {
            position: relative;
            padding-bottom: 50px;
        }

        .shop-role-container {
            max-width: 1200px;
            margin: auto;
            position: relative;
        }

        .of-collection-heading3 h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* Slider wrapper */
        .shop-role-slider-wrapper {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding-bottom: 15px;
        }

        .shop-role-slider-wrapper::-webkit-scrollbar {
            display: none;
        }

        /* Cards */
        .shop-role-card {
            min-width: 290px;
            /* CHANGED */
            max-width: 290px;
            /* CHANGED */
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            flex: 0 0 auto;
            transition: transform 0.3s;
        }

        .shop-role-card:hover {
            transform: translateY(-5px);
        }

        .shop-role-card-img-wrapper img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .shop-role-card-body {
            padding: 10px;
            text-align: center;
        }

        .shop-role-card-body h5 {
            font-size: 16px;
            font-weight: 600;
            margin: 0;
        }

        /* Slider buttons top right */
        .slider-nav-btn {
            position: absolute;
            top: 5px;
            right: 25px;
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .slider-nav-btn button {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            font-size: 18px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slider-nav-btn button:hover {
            background: #ffbf00;
            color: #000;
        }
    </style>

    <div class="shop-role-section pb-5">
        <div class="shop-role-container">
            <div class="of-collection-heading3">
                <h2 class="fs-2">Top Selling</h2>
            </div>
            <div class="slider-nav-btn">
                <button id="prevCard"><i class="fa-solid fa-chevron-left"></i></button>
                <button id="nextCard"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="shop-role-slider-wrapper">
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/jackets.webp" alt="Top Product 1">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Royal Silk Saree</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/pink.webp" alt="Top Product 2">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Designer Kurti Set</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/sky.webp" alt="Top Product 3">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Kids Ethnic Wear</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/slide 3.webp" alt="Top Product 4">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Men Festive Kurta</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/jackets.webp" alt="Top Product 1">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Royal Silk Saree</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/pink.webp" alt="Top Product 2">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Designer Kurti Set</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/sky.webp" alt="Top Product 3">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Kids Ethnic Wear</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/slide 3.webp" alt="Top Product 4">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Men Festive Kurta</h5>
                    </div>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const slider = document.querySelector('.shop-role-slider-wrapper');
            const prevBtn = document.getElementById('prevCard');
            const nextBtn = document.getElementById('nextCard');
            const cards = Array.from(slider.children);
            const cardWidth = 310; // width + gap of each card
            const visibleCards = Math.floor(slider.offsetWidth / cardWidth);

            // Clone first and last cards for seamless scroll
            const totalCards = cards.length;
            const prependCards = cards.slice(-visibleCards).map(card => card.cloneNode(true));
            const appendCards = cards.slice(0, visibleCards).map(card => card.cloneNode(true));

            prependCards.forEach(card => slider.insertBefore(card, slider.firstChild));
            appendCards.forEach(card => slider.appendChild(card));

            // Set initial scroll to first real card
            let scrollPosition = cardWidth * visibleCards;
            slider.scrollLeft = scrollPosition;

            // Scroll smoothly
            function scrollTo(pos) {
                slider.scrollTo({
                    left: pos,
                    behavior: 'smooth'
                });
            }

            nextBtn.addEventListener('click', () => {
                scrollPosition += cardWidth;
                scrollTo(scrollPosition);
                // Loop when reaching clones
                if (scrollPosition >= cardWidth * (totalCards + visibleCards)) {
                    setTimeout(() => {
                        scrollPosition = cardWidth * visibleCards;
                        slider.scrollLeft = scrollPosition;
                    }, 300); // match scroll animation duration
                }
            });

            prevBtn.addEventListener('click', () => {
                scrollPosition -= cardWidth;
                scrollTo(scrollPosition);
                if (scrollPosition < cardWidth) {
                    setTimeout(() => {
                        scrollPosition = cardWidth * totalCards;
                        slider.scrollLeft = scrollPosition;
                    }, 300);
                }
            });

            // Optional: auto scroll every 3s
            // setInterval(() => nextBtn.click(), 3000);

        });
    </script>




    <section class="myshop-section-bg" style="background-color: #fff0e9;">
        <div class="container py-5">
            <div class="of-collection-heading4 m-0 mb-5">
                <h2>Popular Products</h2>
            </div>

            <div class="row row-cols-2 row-cols-md-4 g-4">

                <!-- CARD 1 -->
                <div class="col">
                    <div class="myshop-product-card">
                        <i class="fas fa-heart myshop-wishlist-btn"
                            onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        <div class="myshop-image-box">
                            <a href="#">
                                <img src="assets/img/cotton.webp" class="myshop-product-image" alt="">
                            </a>
                        </div>

                        <div class="myshop-product-title p-2">Sambalpuri Cotton Saree</div>

                        <div class="wl-rating px-2">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            4.8 <span class="myshop text-secondary">| 120 Reviews</span>
                        </div>

                        <span class="wl-price text-dark p-2">₹1299</span>

                        <div class="myshop-product-body">
                            <button class="btn myshop-add-to-cart-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col">
                    <div class="myshop-product-card">
                        <i class="fas fa-heart myshop-wishlist-btn"
                            onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        <div class="myshop-image-box">
                            <a href="#">
                                <img src="assets/img/black2.webp" class="myshop-product-image" alt="">
                            </a>
                        </div>

                        <div class="myshop-product-title p-2">Handloom Ikat Kurti</div>

                        <div class="wl-rating px-2">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            4.5 <span class="myshop text-secondary">| 85 Reviews</span>
                        </div>

                        <span class="wl-price text-dark p-2">₹999</span>

                        <div class="myshop-product-body">
                            <button class="btn myshop-add-to-cart-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col">
                    <div class="myshop-product-card">
                        <i class="fas fa-heart myshop-wishlist-btn"
                            onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        <div class="myshop-image-box">
                            <a href="#">
                                <img src="assets/img/pink.webp" class="myshop-product-image" alt="">
                            </a>
                        </div>

                        <div class="myshop-product-title p-2">Traditional Silk Saree</div>

                        <div class="wl-rating px-2">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            4.9 <span class="myshop text-secondary">| 180 Reviews</span>
                        </div>

                        <span class="wl-price text-dark p-2">₹2499</span>

                        <div class="myshop-product-body">
                            <button class="btn myshop-add-to-cart-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col">
                    <div class="myshop-product-card">
                        <i class="fas fa-heart myshop-wishlist-btn"
                            onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        <div class="myshop-image-box">
                            <a href="#">
                                <img src="assets/img/slide 5.webp" class="myshop-product-image" alt="">
                            </a>
                        </div>

                        <div class="myshop-product-title p-2">Designer Handloom Dupatta</div>

                        <div class="wl-rating px-2">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            4.7 <span class="myshop text-secondary">| 60 Reviews</span>
                        </div>

                        <span class="wl-price text-dark p-2">₹799</span>

                        <div class="myshop-product-body">
                            <button class="btn myshop-add-to-cart-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <style>
        .video-carousel-wrapper {
            position: relative;
            overflow: hidden;
        }

        .video-carousel {
            display: flex;
            gap: 22px;
            overflow-x: scroll !important;
            width: 100% !important;
            scroll-behavior: smooth;
            padding-bottom: 15px;
            white-space: nowrap;
        }

        .video-carousel::-webkit-scrollbar {
            display: none;
        }

        .video-carousel-wrapper {
            overflow: visible !important;
        }

        .video-card {
            min-width: 280px;
            max-width: 280px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            flex: 0 0 auto;
        }

        .video-thumb {
            width: 100%;
            height: 380px;
            object-fit: cover;
            border-radius: 18px;
        }

        .video-info {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 15px;
            background: rgba(0, 0, 0, 0.55);
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            border-radius: 0 0 18px 18px;
        }

        .video-info span {
            display: block;
            margin-top: 4px;
            font-size: 15px;
            font-weight: 700;
        }

        .carousel-btn {
            position: absolute;
            top: 40%;
            background: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 22px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 100;
        }

        .prev-btn {
            left: -10px;
        }

        .next-btn {
            right: -10px;
        }

        /* MODAL */
        .video-modal {
            display: none;
            position: fixed;
            z-index: 5000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .video-modal-content {
            width: 500px;
            max-width: 90%;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #popupVideo {
            width: 100%;
            height: 500px !important;
            border-radius: 10px;
        }

        .close-modal {
            position: absolute;
            top: -35px;
            right: 0;
            font-size: 35px;
            color: white;
            cursor: pointer;
            z-index: 10;
        }

        .fullscreen-btn {
            margin-top: 10px;
            padding: 8px 15px;
            font-size: 14px;
            border: none;
            border-radius: 8px;
            background-color: #ffbf00;
            color: #000;
            cursor: pointer;
            font-weight: 600;
        }

        /* CUSTOM TOP RIGHT BUTTONS */
        .custom-top-controls {
            position: absolute !important;
            top: -55px !important;
            z-index: 50 !important;
            width: 42px !important;
            height: 42px !important;
            border-radius: 50% !important;
            background: #ffffff !important;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.18) !important;
            opacity: 1 !important;
        }

        .carousel-control-prev.custom-top-controls {
            right: 55px !important;
            left: auto !important;
        }

        .carousel-control-next.custom-top-controls {
            right: 10px !important;
            left: auto !important;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1) !important;
        }
    </style>


    <section class="py-5">
        <div class="container">
            <h2 class="mb-4 fw-bold">Trending Reels</h2>

            <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="carouselContainer">

                    <!-- Just dump all cards here -->
                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3695955128721715073_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Pretty Rama Nylo Pretty Rama Nylon Pretty Rama Nylon<span>₹2,999</span></div>
                    </div>

                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3736542686779253411_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Splendiferous Sky…<span>₹1,699</span></div>
                    </div>
                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3739441664931710900_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Pretty Rama Nylon…<span>₹2,999</span></div>
                    </div>

                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3740164265094212156_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Splendiferous Sky…<span>₹1,699</span></div>
                    </div>
                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3740164265094212156_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Pretty Rama Nylon…<span>₹2,999</span></div>
                    </div>

                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3688762854879451532_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Splendiferous Sky…<span>₹1,699</span></div>
                    </div>
                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3656871212438455884_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Pretty Rama Nylon…<span>₹2,999</span></div>
                    </div>

                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3736542686779253411_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Splendiferous Sky…<span>₹1,699</span></div>
                    </div>
                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3695955128721715073_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Pretty Rama Nylon…<span>₹2,999</span></div>
                    </div>

                    <div class="video-card">
                        <video class="video-thumb" src="assets/videos/3736542686779253411_video.mp4" muted autoplay loop playsinline></video>
                        <div class="video-info">Splendiferous Sky…<span>₹1,699</span></div>
                    </div>

                    <!-- Jitne chahe utne cards yaha daal -->

                </div>

                <!-- CONTROLS -->
                <button class="carousel-control-prev custom-top-controls" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next custom-top-controls" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>

        </div>
    </section>


    <!-- VIDEO POPUP (MODAL) -->
    <div class="video-modal" id="videoModal">
        <div class="video-modal-content">
            <span class="close-modal">&times;</span>
            <video id="popupVideo" controls autoplay></video>
            <!-- <button class="fullscreen-btn">Full Screen</button> -->
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const container = document.getElementById("carouselContainer");
            const items = Array.from(container.querySelectorAll(".video-card"));
            container.innerHTML = ""; // clear original

            const perSlide = 4; // number of cards per slide
            const total = items.length;

            // CREATE CIRCULAR SLIDES
            for (let i = 0; i < total; i += perSlide) {
                const slide = document.createElement("div");
                slide.classList.add("carousel-item");
                if (i === 0) slide.classList.add("active");

                const row = document.createElement("div");
                row.classList.add("row", "g-4");
                slide.appendChild(row);

                for (let j = 0; j < perSlide; j++) {
                    const idx = (i + j) % total; // circular index
                    const col = document.createElement("div");
                    col.classList.add("col-6", "col-md-3");
                    col.appendChild(items[idx].cloneNode(true));
                    row.appendChild(col);
                }

                container.appendChild(slide);
            }

            /* ---------------------------------- 
               MODAL PLAY ON CLICK
            ---------------------------------- */
            const modal = document.getElementById("videoModal");
            const popupVideo = document.getElementById("popupVideo");
            const fullscreenBtn = modal.querySelector(".fullscreen-btn");

            document.querySelectorAll(".video-card video").forEach(video => {
                video.parentElement.addEventListener("click", () => {
                    modal.style.display = "flex";
                    popupVideo.src = video.src;
                    popupVideo.play();
                });
            });

            // Close modal top-right
            document.querySelector(".close-modal").onclick = () => {
                modal.style.display = "none";
                popupVideo.pause();
                popupVideo.src = "";
            };

            // Click outside modal to close
            window.onclick = (e) => {
                if (e.target === modal) {
                    modal.style.display = "none";
                    popupVideo.pause();
                    popupVideo.src = "";
                }
            };

            // Fullscreen button
            fullscreenBtn.onclick = () => {
                if (popupVideo.requestFullscreen) {
                    popupVideo.requestFullscreen();
                } else if (popupVideo.webkitRequestFullscreen) {
                    /* Safari */
                    popupVideo.webkitRequestFullscreen();
                } else if (popupVideo.msRequestFullscreen) {
                    /* IE11 */
                    popupVideo.msRequestFullscreen();
                }
            };

        });
    </script>

    <section class="oa-new-arrivals-section">
        <div class="container">
            <div class="of-collection-heading5">
                <h2>New Arrivals</h2>
            </div>
            <p class="oa-subtitle">Discover the latest must-have arrivals. Fresh styles and best picks just for you.</p>

            <div class="row row-cols-2 row-cols-md-4 g-4">

                <!-- CARD 1 -->
                <div class="col">
                    <div class="oa-product-card">
                        <div class="oa-product-image">
                            <a href="#"><img src="assets/img/black2.webp" alt=""></a>

                            <div class="oa-sale-badge">20% OFF</div>

                            <div class="oa-product-icons">
                                <i class="fas fa-heart myshop-wishlist-btn"
                                    onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            </div>
                        </div>

                        <div class="oa-product-content">
                            <div class="oa-product-title">Sambalpuri Cotton Saree</div>
                            <div class="oa-product-brand">Handloom Premium</div>

                            <div class="wl-rating p-1">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                4.7 <span class="wl-rating-count">| 90 Reviews</span>
                            </div>

                            <span class="wl-price">₹1299</span>
                            <span class="wl-price-original">₹1599</span>

                            <button class="btn myshop-add-to-cart-btn my-3">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col">
                    <div class="oa-product-card">
                        <div class="oa-product-image">
                            <a href="#"><img src="assets/img/cotton2.webp" alt=""></a>

                            <div class="oa-sale-badge">15% OFF</div>

                            <div class="oa-product-icons">
                                <i class="fas fa-heart myshop-wishlist-btn"
                                    onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            </div>
                        </div>

                        <div class="oa-product-content">
                            <div class="oa-product-title">Ikat Printed Kurti</div>
                            <div class="oa-product-brand">Urban Collection</div>

                            <div class="wl-rating p-1">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                4.5 <span class="wl-rating-count">| 75 Reviews</span>
                            </div>

                            <span class="wl-price">₹899</span>
                            <span class="wl-price-original">₹1050</span>

                            <button class="btn myshop-add-to-cart-btn my-3">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col">
                    <div class="oa-product-card">
                        <div class="oa-product-image">
                            <a href="#"><img src="assets/img/ethinic_collection.webp" alt=""></a>

                            <div class="oa-sale-badge">30% OFF</div>

                            <div class="oa-product-icons">
                                <i class="fas fa-heart myshop-wishlist-btn"
                                    onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            </div>
                        </div>

                        <div class="oa-product-content">
                            <div class="oa-product-title">Designer Silk Saree</div>
                            <div class="oa-product-brand">Royal Silk</div>

                            <div class="wl-rating p-1">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                4.9 <span class="wl-rating-count">| 200 Reviews</span>
                            </div>

                            <span class="wl-price">₹3499</span>
                            <span class="wl-price-original">₹4999</span>

                            <button class="btn myshop-add-to-cart-btn my-3">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col">
                    <div class="oa-product-card">
                        <div class="oa-product-image">
                            <a href="#"><img src="assets/img/pink2.webp" alt=""></a>

                            <div class="oa-sale-badge">10% OFF</div>

                            <div class="oa-product-icons">
                                <i class="fas fa-heart myshop-wishlist-btn"
                                    onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            </div>
                        </div>

                        <div class="oa-product-content">
                            <div class="oa-product-title">Handloom Dupatta</div>
                            <div class="oa-product-brand">Ethnic Style</div>

                            <div class="wl-rating p-1">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                4.6 <span class="wl-rating-count">| 40 Reviews</span>
                            </div>

                            <span class="wl-price">₹599</span>
                            <span class="wl-price-original">₹670</span>

                            <button class="btn myshop-add-to-cart-btn my-3">Buy Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <style>
        .glass-box {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            padding: 40px 30px;
            transition: all .3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .glass-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .icon-modern {
            font-size: 32px;
            padding: 15px;
            border-radius: 14px;
            background: #000;
            color: #fff;
            display: inline-flex;
            margin-bottom: 15px;
        }

        .title-highlight {
            background: linear-gradient(90deg, #000, #555);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: 800;
        }
    </style>

    <!-- <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h1 class="title-highlight">What We Do</h1>
                <p class="text-muted w-75 mx-auto fs-5">
                    Crafting modern, premium & sustainable clothing designed for everyday comfort.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-6 col-md-3">
                    <div class="glass-box text-center">
                        <i class="fa-solid fa-shirt icon-modern"></i>
                        <h6 class="fw-semibold mt-2">Men Fashion</h6>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="glass-box text-center">
                        <i class="fa-solid fa-person-dress icon-modern"></i>
                        <h6 class="fw-semibold mt-2">Women Fashion</h6>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="glass-box text-center">
                        <i class="fa-solid fa-children icon-modern"></i>
                        <h6 class="fw-semibold mt-2">Kids Apparel</h6>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="glass-box text-center">
                        <i class="fa-solid fa-gem icon-modern"></i>
                        <h6 class="fw-semibold mt-2">Premium Accessories</h6>
                    </div>
                </div>

            </div>

        </div>
    </section> -->

    <?php include 'common/footer.php' ?>
    <!-- top offers bar -->
    <script>
        const offers = [
            "🎉 Summer Sale! Flat 25% OFF on all ethnic wear | Use Code: INDIASALE25 | Free Shipping on orders over ₹999",
            "🔥 Buy 2 Get 1 Free on Select Sarees! Hurry, limited stock!",
            "💥 Exclusive Deal: ₹500 OFF on orders above ₹3000 | Use Code: BIGSAVE500",
            "✨ New Arrivals! Get 15% OFF with code NEW15"
        ];

        let currentIndex = 0;
        const offersBar = document.getElementById('offersBar');
        offersBar.addEventListener('animationiteration', () => {
            currentIndex = (currentIndex + 1) % offers.length;
            offersBar.innerHTML = offers[currentIndex];
        });
    </script>

    <!-- search bar -->
    <script>
        function setupSearchToggle(toggleId, boxId) {
            const toggle = document.getElementById(toggleId);
            const box = document.getElementById(boxId);

            toggle.addEventListener('click', function(e) {
                e.stopPropagation();
                box.classList.toggle('d-none');
            });

            document.addEventListener('click', function(e) {
                if (!box.contains(e.target) && !toggle.contains(e.target)) {
                    box.classList.add('d-none');
                }
            });
        }

        setupSearchToggle('searchToggle1', 'searchBox1');
        setupSearchToggle('searchToggle2', 'searchBox2');
    </script>


    <!-- account dropdown -->
    <script>
        // ---------- DESKTOP ----------
        const arDropdownDesktop = document.getElementById('ar-account-dropdown-desktop');
        const arIconDesktop = document.getElementById('ar-account-icon-desktop');
        const loginBtnDesktop = document.getElementById('ar-account-login-btn-desktop');
        const logoutBtnDesktop = document.getElementById('ar-account-logout-btn-desktop');
        const beforeLoginDesktop = document.getElementById('ar-account-before-login-desktop');
        const afterLoginDesktop = document.getElementById('ar-account-after-login-desktop');
        const containerDesktop = document.getElementById('ar-account-container-desktop');

        arIconDesktop.addEventListener('click', (e) => {
            e.stopPropagation();
            arDropdownDesktop.style.display = arDropdownDesktop.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (e) => {
            if (!containerDesktop.contains(e.target)) {
                arDropdownDesktop.style.display = 'none';
            }
        });

        loginBtnDesktop.addEventListener('click', () => {
            new bootstrap.Modal(document.getElementById('arLoginModal')).show();
        });

        logoutBtnDesktop.addEventListener('click', () => {
            beforeLoginDesktop.classList.remove('d-none');
            afterLoginDesktop.classList.add('d-none');
        });

        const arDropdownMobile = document.getElementById('ar-account-dropdown-mobile');
        const arIconMobile = document.getElementById('ar-account-icon-mobile');
        const loginBtnMobile = document.getElementById('ar-account-login-btn-mobile');
        const logoutBtnMobile = document.getElementById('ar-account-logout-btn-mobile');
        const beforeLoginMobile = document.getElementById('ar-account-before-login-mobile');
        const afterLoginMobile = document.getElementById('ar-account-after-login-mobile');
        const containerMobile = document.getElementById('ar-account-container-mobile');

        arIconMobile.addEventListener('click', (e) => {
            e.stopPropagation();
            arDropdownMobile.style.display = arDropdownMobile.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (e) => {
            if (!containerMobile.contains(e.target)) {
                arDropdownMobile.style.display = 'none';
            }
        });

        loginBtnMobile.addEventListener('click', () => {
            new bootstrap.Modal(document.getElementById('arLoginModal')).show();
        });

        logoutBtnMobile.addEventListener('click', () => {
            beforeLoginMobile.classList.remove('d-none');
            afterLoginMobile.classList.add('d-none');
        });

        const mobileInput = document.getElementById('arMobile');
        const continueBtn = document.getElementById('arContinueBtn');
        const verifyBtn = document.getElementById('arVerifyOtpBtn');
        const otpInputs = document.querySelectorAll('.ar-otp-input');
        const mobileSpan = document.getElementById('arShowMobile');

        const stepMobile = document.getElementById('arStepMobile');
        const stepOtp = document.getElementById('arStepOtp');
        const stepSuccess = document.getElementById('arStepSuccess');

        let beforeLogin = null;
        let afterLogin = null;

        function setLoginContext() {
            const isMobileOrTablet = window.innerWidth <= 991;
            beforeLogin = isMobileOrTablet ? beforeLoginMobile : beforeLoginDesktop;
            afterLogin = isMobileOrTablet ? afterLoginMobile : afterLoginDesktop;
        }


        continueBtn.addEventListener('click', () => {
            const mobile = mobileInput.value.trim();
            if (/^\d{10}$/.test(mobile)) {
                setLoginContext();
                mobileSpan.textContent = mobile;
                stepMobile.classList.add('d-none');
                stepOtp.classList.remove('d-none');
                otpInputs.forEach(inp => inp.value = '');
                otpInputs[0].focus();
            } else {
                alert('Enter a valid 10-digit mobile number');
            }
        });

        otpInputs.forEach((input, idx) => {
            input.addEventListener('input', () => {
                if (input.value && idx < otpInputs.length - 1) {
                    otpInputs[idx + 1].focus();
                }
                verifyBtn.disabled = ![...otpInputs].every(i => i.value);
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !input.value && idx > 0) {
                    otpInputs[idx - 1].focus();
                }
            });
        });

        verifyBtn.addEventListener('click', () => {
            stepOtp.classList.add('d-none');
            stepSuccess.classList.remove('d-none');

            setTimeout(() => {
                bootstrap.Modal.getInstance(document.getElementById('arLoginModal')).hide();
                stepSuccess.classList.add('d-none');
                stepMobile.classList.remove('d-none');

                // FIX: recalc containers every time
                setLoginContext();
                beforeLogin.classList.add('d-none');
                afterLogin.classList.remove('d-none');
            }, 2000);
        });
    </script>

    <!-- JS check out-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const panel = document.getElementById("buyNowUnq_CheckoutPanel");
            const buyNowBtn = document.getElementById("buyNowUnq_BuyNowBtn");
            const stepActionBtn = document.getElementById("buyNowUnq_StepActionBtn");
            const closeBtn = document.getElementById("buyNowUnq_CloseBtn");
            const exitAnywayBtn = document.getElementById("buyNowUnq_ConfirmExit");
            const stepContents = document.querySelectorAll(".buyNowUnq-step-content");
            const stepLabels = document.querySelectorAll(".buyNowUnq-step-label");
            const mobileDisplayMode = document.getElementById("mobileDisplayMode");
            const mobileEditMode = document.getElementById("mobileEditMode");
            const displayedMobile = document.getElementById("displayedMobile");
            const mobileNumberInput = document.getElementById("mobileNumberInput");
            const editMobileBtn = document.getElementById("editMobileBtn");
            const addressDisplayMode = document.getElementById("addressDisplayMode");
            const addressEditMode = document.getElementById("addressEditMode");
            const editAddressBtn = document.getElementById("editAddressBtn");
            const displayFullName = document.getElementById("displayFullName");
            const displayAddressLine = document.getElementById("displayAddressLine");
            const displayEmail = document.getElementById("displayEmail");
            const addressInputs = addressEditMode.querySelectorAll('input, textarea');
            const paymentOptions = document.querySelectorAll(".buyNowUnq-payment-option");
            const payMethodError = document.getElementById("payMethodError");
            const couponInput = document.getElementById("couponInput");
            const applyCouponBtn = document.getElementById("applyCouponBtn");
            const couponAppliedText = document.getElementById("couponAppliedText");
            const couponError = document.getElementById("couponError");
            const totalPriceElement = document.getElementById("totalPrice");
            const upiPriceElement = document.getElementById("upiPrice");
            const cardPriceElement = document.getElementById("cardPrice");
            const walletPriceElement = document.getElementById("walletPrice");
            const successModalElement = document.getElementById("buyNowUnq_SuccessModal");
            const successModal = new bootstrap.Modal(successModalElement);
            const exitModal = new bootstrap.Modal(document.getElementById("buyNowUnq_ExitModal"));
            const onlinePaymentModal = new bootstrap.Modal(document.getElementById("buyNowUnq_OnlinePaymentModal"));

            const offersBenefitsModalElement = document.getElementById("buyNowUnq_OffersBenefitsModal");
            const offersBenefitsModal = new bootstrap.Modal(offersBenefitsModalElement);
            const viewCouponsLink = document.getElementById("viewCouponsLink");
            const offersModalCouponInput = document.getElementById("offersModalCouponInput");
            const offersModalApplyCouponBtn = document.getElementById("offersModalApplyCouponBtn");


            const onlineOptionCards = document.querySelectorAll(".online-option-card");
            const qrCodeBox = document.getElementById("qrCodeBox");
            const upiIdInputSection = document.getElementById("upiIdInputSection");
            let checkoutState = {
                currentStep: 1,
                mobileNumber: "",
                address: {
                    fullName: "",
                    addressLine: "",
                    city: "",
                    state: "",
                    pincode: "",
                    email: "",
                    landmark: ""
                },
                selectedPaymentType: null,
                totalPrice: 2499,
                couponApplied: false
            };
            let lottieAnimation = null;

            function renderStep(stepNumber) {
                checkoutState.currentStep = stepNumber;
                stepLabels.forEach(label => {
                    const labelStepNum = parseInt(label.dataset.step);
                    label.classList.remove("active", "completed");
                    label.querySelector('.icon-circle').style.display = 'inline-flex';
                    label.querySelector('.icon-check').style.display = 'none';
                    if (labelStepNum < checkoutState.currentStep) {
                        label.classList.add("completed");
                        label.querySelector('.icon-circle').style.display = 'none';
                        label.querySelector('.icon-check').style.display = 'inline-block';
                    } else if (labelStepNum === checkoutState.currentStep) {
                        label.classList.add("active");
                    }
                });
                stepContents.forEach(content => content.classList.remove("active"));
                document.getElementById(`buyNowUnq_Step${checkoutState.currentStep}`).classList.add("active");
                if (checkoutState.currentStep === 3) {
                    stepActionBtn.textContent = "Place Order";
                } else {
                    stepActionBtn.textContent = "Continue →";
                }
                switch (checkoutState.currentStep) {
                    case 1:
                        if (!checkoutState.mobileNumber) {
                            mobileDisplayMode.classList.add('d-none');
                            mobileEditMode.classList.remove('d-none');
                            mobileNumberInput.value = "";
                            editMobileBtn.textContent = "Cancel";
                        } else {
                            updateMobileDisplay(checkoutState.mobileNumber);
                        }
                        break;
                    case 2:
                        if (!checkoutState.address.fullName || !checkoutState.address.pincode) {
                            addressDisplayMode.classList.add('d-none');
                            addressEditMode.classList.remove('d-none');
                            addressInputs.forEach(input => {
                                input.value = "";
                            });
                        } else {
                            updateAddressDisplay();
                        }
                        break;
                    case 3:
                        updatePaymentPrices();
                        paymentOptions.forEach(opt => opt.classList.remove("selected"));
                        checkoutState.selectedPaymentType = null;
                        payMethodError.classList.add("d-none");
                        break;
                }
                document.querySelector('.buyNowUnq-scroll-content').scrollTop = 0;
            }

            function updateMobileDisplay(mobileNum) {
                displayedMobile.value = mobileNum;
                mobileNumberInput.value = mobileNum;
                mobileDisplayMode.classList.remove('d-none');
                mobileEditMode.classList.add('d-none');
                editMobileBtn.textContent = "Edit";
            }

            function toggleMobileEditMode() {
                if (mobileEditMode.classList.contains('d-none')) {
                    mobileDisplayMode.classList.add('d-none');
                    mobileEditMode.classList.remove('d-none');
                    mobileNumberInput.focus();
                    editMobileBtn.textContent = "Cancel";
                } else {
                    updateMobileDisplay(checkoutState.mobileNumber);
                }
            }

            function validateMobileNumber() {
                let numberToValidate = mobileNumberInput.value.trim();
                if (mobileDisplayMode.classList.contains('d-flex') && !mobileDisplayMode.classList.contains('d-none')) {
                    numberToValidate = displayedMobile.value.trim();
                }

                if (!/^\d{10}$/.test(numberToValidate)) {
                    alert("Please enter a valid 10-digit mobile number.");
                    mobileNumberInput.classList.add('is-invalid');
                    return false;
                }
                mobileNumberInput.classList.remove('is-invalid');
                checkoutState.mobileNumber = numberToValidate;
                return true;
            }

            function updateAddressDisplay() {
                const addr = checkoutState.address;
                displayFullName.textContent = addr.fullName;
                displayAddressLine.textContent = `${addr.fullAddress}, ${addr.city}, ${addr.state}, ${addr.pincode}`;
                displayEmail.textContent = addr.email;
                addressDisplayMode.classList.remove('d-none');
                addressEditMode.classList.add('d-none');
            }

            function toggleAddressEditMode() {
                if (addressEditMode.classList.contains('d-none')) {
                    addressDisplayMode.classList.add('d-none');
                    addressEditMode.classList.remove('d-none');
                    addressEditMode.querySelector('[name="pincode"]').value = checkoutState.address.pincode;
                    addressEditMode.querySelector('[name="city"]').value = checkoutState.address.city;
                    addressEditMode.querySelector('[name="state"]').value = checkoutState.address.state;
                    addressEditMode.querySelector('[name="fullName"]').value = checkoutState.address.fullName;
                    addressEditMode.querySelector('[name="fullAddress"]').value = checkoutState.address.fullAddress;
                    addressEditMode.querySelector('[name="landmark"]').value = checkoutState.address.landmark;
                    addressEditMode.querySelector('[name="emailAddress"]').value = checkoutState.address.email;
                } else {
                    updateAddressDisplay();
                }
            }

            function validateAndSaveAddress() {
                let isValid = true;
                const newAddressData = {};
                addressInputs.forEach(input => {
                    const value = input.value.trim();
                    newAddressData[input.name] = value;
                    if (input.hasAttribute('required') && value === '') {
                        input.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                if (isValid) {
                    checkoutState.address = {
                        ...checkoutState.address,
                        ...newAddressData
                    };
                    updateAddressDisplay();
                }
                return isValid;
            }
            addressEditMode.querySelector('[name="pincode"]').addEventListener('input', (event) => {
                const pincode = event.target.value;
                if (pincode.length === 6 && /^\d+$/.test(pincode)) {
                    addressEditMode.querySelector('[name="city"]').value = "JAJAPUR";
                    addressEditMode.querySelector('[name="state"]').value = "ODISHA";
                } else {
                    addressEditMode.querySelector('[name="city"]').value = "";
                    addressEditMode.querySelector('[name="state"]').value = "";
                }
            });


            function updatePaymentPrices() {
                upiPriceElement.textContent = checkoutState.totalPrice.toLocaleString();
                cardPriceElement.textContent = checkoutState.totalPrice.toLocaleString();
                walletPriceElement.textContent = checkoutState.totalPrice.toLocaleString();
            }

            function applyCoupon(couponCode) {
                const enteredCode = couponCode.trim().toUpperCase();
                if (checkoutState.couponApplied) return;
                if (enteredCode === "FLAT100") {
                    couponAppliedText.classList.remove("d-none");
                    couponError.classList.add("d-none");
                    checkoutState.totalPrice = 2399;
                    totalPriceElement.textContent = `₹${checkoutState.totalPrice.toLocaleString()}`;
                    updatePaymentPrices();
                    checkoutState.couponApplied = true;
                } else {
                    couponAppliedText.classList.add("d-none");
                    couponError.classList.remove("d-none");
                }
            }

            function showSuccessModal() {
                panel.style.display = "none";
                successModal.show();
            }
            successModalElement.addEventListener('shown.bs.modal', function() {
                if (!lottieAnimation) {
                    lottieAnimation = lottie.loadAnimation({
                        container: document.getElementById('lottie-success'),
                        renderer: 'svg',
                        loop: false,
                        autoplay: true,
                        path: 'https://assets-v2.lottiefiles.com/a/c95cdb0c-1173-11ee-a8c2-07deb814270b/Aw5xYd1qHx.png'
                    });
                } else {
                    lottieAnimation.goToAndPlay(0, true);
                }
            });
            successModalElement.addEventListener('hidden.bs.modal', function() {
                if (lottieAnimation) {
                    lottieAnimation.stop();
                }
            });
            buyNowBtn.addEventListener("click", () => {
                panel.style.display = "flex";
                renderStep(1);
            });
            closeBtn.addEventListener("click", () => exitModal.show());
            exitAnywayBtn.addEventListener("click", () => {
                panel.style.display = "none";
                exitModal.hide();
            });
            stepActionBtn.addEventListener("click", () => {
                if (checkoutState.currentStep === 1) {
                    if (validateMobileNumber()) {
                        renderStep(2);
                    }
                } else if (checkoutState.currentStep === 2) {
                    if (!addressEditMode.classList.contains('d-none')) {
                        if (!validateAndSaveAddress()) {
                            return;
                        }
                    }
                    renderStep(3);
                } else if (checkoutState.currentStep === 3) {
                    if (!checkoutState.selectedPaymentType) {
                        payMethodError.classList.remove("d-none");
                        return;
                    }
                    const orderData = {
                        mobile: checkoutState.mobileNumber,
                        address: checkoutState.address,
                        paymentMethod: checkoutState.selectedPaymentType,
                        totalAmount: checkoutState.totalPrice,
                        couponApplied: checkoutState.couponApplied
                    };
                    console.log("Submitting Order Data:", orderData);
                    if (checkoutState.selectedPaymentType === "cod") {
                        showSuccessModal();
                    } else {
                        onlinePaymentModal.show();
                        onlineOptionCards.forEach(card => card.classList.remove('selected'));
                        document.querySelector('[data-online-method="qr"]').classList.add('selected');
                        qrCodeBox.classList.remove('d-none');
                        upiIdInputSection.classList.add('d-none');
                    }
                }
            });
            editMobileBtn.addEventListener('click', toggleMobileEditMode);
            editAddressBtn.addEventListener('click', toggleAddressEditMode);
            paymentOptions.forEach(option => {
                option.addEventListener("click", () => {
                    paymentOptions.forEach(opt => opt.classList.remove("selected"));
                    option.classList.add("selected");
                    checkoutState.selectedPaymentType = option.dataset.paymentType;
                    payMethodError.classList.add("d-none");
                });
            });
            const summaryToggle = document.getElementById("buyNowUnq_ToggleSummary");
            const productDetails = document.getElementById("buyNowUnq_ProductDetails");
            const summaryIcon = document.getElementById("buyNowUnq_SummaryIcon");
            summaryToggle.addEventListener("click", () => {
                productDetails.classList.toggle("d-none");
                summaryIcon.classList.toggle("bi-chevron-down");
                summaryIcon.classList.toggle("bi-chevron-up");
            });

            applyCouponBtn.addEventListener("click", () => {
                applyCoupon(couponInput.value);
            });

            viewCouponsLink.addEventListener("click", (event) => {
                event.preventDefault();
                offersBenefitsModal.show();
                offersModalCouponInput.value = couponInput.value;
            });

            offersModalApplyCouponBtn.addEventListener("click", () => {
                applyCoupon(offersModalCouponInput.value);
                offersBenefitsModal.hide();
            });


            onlineOptionCards.forEach(card => {
                card.addEventListener('click', () => {
                    onlineOptionCards.forEach(opt => opt.classList.remove('selected'));
                    card.classList.add('selected');
                    const method = card.dataset.onlineMethod;
                    if (method === 'qr') {
                        qrCodeBox.classList.remove('d-none');
                        upiIdInputSection.classList.add('d-none');
                    } else if (method === 'upi-id') {
                        qrCodeBox.classList.add('d-none');
                        upiIdInputSection.classList.remove('d-none');
                    } else if (method === 'request-someone') {
                        qrCodeBox.classList.add('d-none');
                        upiIdInputSection.classList.add('d-none');
                    }
                });
            });
            document.getElementById('upiPayBtn').addEventListener('click', () => {
                const upiId = document.getElementById('upiInput').value.trim();
                if (upiId) {
                    alert(`Initiating UPI payment to: ${upiId}`);
                    onlinePaymentModal.hide();
                    showSuccessModal();
                } else {
                    alert('Please enter your UPI ID.');
                }
            });
            document.querySelector("#buyNowUnq_OnlinePaymentModal .modal-footer button").addEventListener('click', () => {
                onlinePaymentModal.hide();
                showSuccessModal();
            });
            renderStep(1);
        });
    </script>

    <script>
        const stepActionBtn = document.getElementById("buyNowUnq_StepActionBtn");
        const codOption = document.querySelector('[data-payment-type="cod"]');
        const paymentOptions = document.querySelectorAll(".buyNowUnq-payment-option");
        const payMethodError = document.getElementById("payMethodError");

        let selectedPaymentMethod = null;

        // Handle selecting a payment option
        paymentOptions.forEach(option => {
            option.addEventListener("click", () => {
                paymentOptions.forEach(opt => opt.classList.remove("selected"));
                option.classList.add("selected");
                selectedPaymentMethod = option.getAttribute("data-payment-type");
                payMethodError.classList.add("d-none");
            });
        });

        // Handle "Continue →" button
        stepActionBtn.addEventListener("click", () => {
            const step3 = document.getElementById("buyNowUnq_Step3");
            if (!step3.classList.contains("active")) return;

            if (!selectedPaymentMethod) {
                payMethodError.classList.remove("d-none");
                return;
            }

            if (selectedPaymentMethod === "cod") {
                const successModal = new bootstrap.Modal(document.getElementById("orderConfirmedModal"));
                successModal.show();
            } else {
                // Handle UPI / Card / Wallet etc. here
                const onlinePaymentModal = new bootstrap.Modal(document.getElementById("buyNowUnq_OnlinePaymentModal"));
                onlinePaymentModal.show();
            }
        });
    </script>

    <!-- order confirme js -->
    <script>
        const modalEl = document.getElementById('orderConfirmedModal');
        let cnAnim = null;

        modalEl.addEventListener('shown.bs.modal', () => {
            if (cnAnim) {
                cnAnim.play();
            } else {
                cnAnim = lottie.loadAnimation({
                    container: document.getElementById('cn-lottie'),
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: 'https://assets10.lottiefiles.com/packages/lf20_jbrw3hcz.json'
                });
            }
        });

        modalEl.addEventListener('hidden.bs.modal', () => {
            if (cnAnim) {
                cnAnim.stop();
            }
        });
    </script>
    <script>
        // Hide loader after page load
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.body.classList.add('loaded');
            }, 1000); // Show for 2.5s
        });
    </script>
    <!-- go to top btn -->
    <script>
        const arGoTopBtn = document.getElementById("ar-goTopBtn");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 250) {
                arGoTopBtn.style.display = "flex";
            } else {
                arGoTopBtn.style.display = "none";
            }
        });

        arGoTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>

    <!-- categories slider -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const track = document.getElementById("bamTrack");
            let items = [...track.children];

            // Duplicate for infinite scroll
            items.forEach(item => {
                track.appendChild(item.cloneNode(true));
            });

            let scrollSpeed = 0.6;
            let position = 0;

            function animate() {
                position -= scrollSpeed;

                if (Math.abs(position) >= track.scrollWidth / 2) {
                    position = 0;
                }

                track.style.transform = `translateX(${position}px)`;
                requestAnimationFrame(animate);
            }

            animate();
        });
    </script>


    <script>
        const menBtn = document.getElementById("btn-men");
        const womenBtn = document.getElementById("btn-women");

        const menCats = document.getElementById("men-cats");
        const womenCats = document.getElementById("women-cats");

        menBtn.addEventListener("click", () => {
            menBtn.classList.add("btn-dark");
            menBtn.classList.remove("btn-outline-dark");

            womenBtn.classList.add("btn-outline-dark");
            womenBtn.classList.remove("btn-dark");

            menCats.classList.remove("d-none");
            womenCats.classList.add("d-none");
        });

        womenBtn.addEventListener("click", () => {
            womenBtn.classList.add("btn-dark");
            womenBtn.classList.remove("btn-outline-dark");

            menBtn.classList.add("btn-outline-dark");
            menBtn.classList.remove("btn-dark");

            womenCats.classList.remove("d-none");
            menCats.classList.add("d-none");
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.3"></script>
</body>

</html>