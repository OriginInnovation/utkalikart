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

    <link rel="stylesheet" href="assets/css/main.css?v=3.97">
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


    <div class="slider-section px-4 py-5">
        <div class="slider-wrapper px-lg-5">

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
            
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="od-banner-img-wrapper">
                    <img src="assets/img/UTKALIKART (2).png" alt="Handloom Weaver" />
                </div>
            </div>

            <div class="col-md-6 od-banner-text">
                <span class="od-subtitle">Welcome to Our Legacy</span>
                <h2>The Gateway to <br> <span>India's Timeless Heritage</span></h2>
                <p>
                    We aim to provide a platform to Indian Handloom Weavers and Handicraft Artisans to sell
                    their traditional handcrafted products online; paving the way for their financial and social
                    empowerment.
                </p>
                <p>
                    This will also help in promoting their skills while eliminating the intermediaries.
                    We hope to raise the dignity of the Indian artisans and kindle an interest for an
                    unsurpassed legacy of craft that spans millennia.
                </p>
                <a href="#" class="od-btn-aesthetic">Explore Collection</a>
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
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Sneakers</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/banner1.jpg" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Slip Ons</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/cotton2.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Loafers</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/jackets.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Oxfords</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/pink2.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Sandals</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/sky.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Flip Flops</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/slide 1.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Slides</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/slide 3.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
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

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Heels</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/slide 5.webp" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Flats</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/trndy_tops.jpeg" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="cat-card">
                        <p class="cat-title">Boots</p>
                        <button class="cat-arrow"><i class="bi bi-arrow-right"></i></button>
                        <img src="assets/img/western_wear.jpeg" class="cat-img img-fluid">
                        <div class="cat-stand"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
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
                <button class="btn btn-outline-dark px-4 py-2 rounded-pill fw-semibold view-btns">
                    View All <i class="bi bi-chevron-right ms-2"></i>
                </button>
            </div>

        </div>
    </section>

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
                            <img src="assets/img/jackets.webp" style="height: 316px !important;" alt="Top Product 1">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Royal Silk Saree</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/pink.webp" style="height: 316px !important;" alt="Top Product 2">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Designer Kurti Set</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/sky.webp" style="height: 316px !important;" alt="Top Product 3">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Kids Ethnic Wear</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/slide 3.webp" style="height: 316px !important;" alt="Top Product 4">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Men Festive Kurta</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/jackets.webp" style="height: 316px !important;" alt="Top Product 1">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Royal Silk Saree</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/pink.webp" style="height: 316px !important;" alt="Top Product 2">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Designer Kurti Set</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/sky.webp" style="height: 316px !important;" alt="Top Product 3">
                        </a>
                    </div>
                    <div class="shop-role-card-body">
                        <h5>Kids Ethnic Wear</h5>
                    </div>
                </div>
                <div class="shop-role-card">
                    <div class="shop-role-card-img-wrapper">
                        <a href="product_details.html">
                            <img src="assets/img/slide 3.webp" style="height: 316px !important;" alt="Top Product 4">
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

    <!-- Full Banner Section -->
    <!-- <section class="full-banner-section">
        <div class="container-fluid p-0">
            <a href="https://example.com" target="_blank">
                <img src="assets/img/middle-banner.webp" alt="Advertisement Banner" class="img-fluid w-100" style="object-fit: cover;">
            </a>
        </div>
    </section> -->

     <section class="od-banner-wrapper py-5">
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

    <section class="myshop-section-bg">
        <div class="container py-5">
            <div class="of-collection-heading4 m-0 mb-5">
                <h2>Popular Products</h2>
            </div>

            <div class="row row-cols-2 row-cols-md-4 g-4">

                <div class="col">
                    <div class="myshop-product-card">
                        <i class="fas fa-heart myshop-wishlist-btn" onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        <div class="myshop-image-box">
                            <a href="#">
                                <img src="assets/img/cotton.webp" class="myshop-product-image" alt="Cotton Saree">
                                <img src="assets/img/cotton2.webp" class="myshop-hover-image" alt="Cotton Saree Back">
                            </a>
                        </div>

                        <div class="myshop-product-title p-2">Sambalpuri Cotton Saree</div>
                        
                        <div class="wl-rating px-2">
                             <svg viewBox="0 0 24 24" width="15" height="15" fill="#f4c150">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            4.8 <span class="myshop text-secondary">| 120 Reviews</span>
                        </div>
                        <span class="wl-price text-dark p-2">₹1299</span>

                        <div class="myshop-product-body">
                            <button class="btn myshop-add-to-cart-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="myshop-product-card">
                        <i class="fas fa-heart myshop-wishlist-btn" onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        <div class="myshop-image-box">
                            <a href="#">
                                <img src="assets/img/black2.webp" class="myshop-product-image" alt="Ikat Kurti">
                                <img src="assets/img/black.webp" class="myshop-hover-image" alt="Ikat Kurti Back">
                            </a>
                        </div>

                        <div class="myshop-product-title p-2">Handloom Ikat Kurti</div>

                        <div class="wl-rating px-2">
                             <svg viewBox="0 0 24 24" width="15" height="15" fill="#f4c150">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            4.5 <span class="myshop text-secondary">| 85 Reviews</span>
                        </div>
                        <span class="wl-price text-dark p-2">₹999</span>

                        <div class="myshop-product-body">
                            <button class="btn myshop-add-to-cart-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="myshop-product-card">
                        <i class="fas fa-heart myshop-wishlist-btn" onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        <div class="myshop-image-box">
                            <a href="#">
                                <img src="assets/img/pink.webp" class="myshop-product-image" alt="Silk Saree">
                                <img src="assets/img/pink2.webp" class="myshop-hover-image" alt="Silk Saree Back">
                            </a>
                        </div>

                        <div class="myshop-product-title p-2">Traditional Silk Saree</div>

                        <div class="wl-rating px-2">
                             <svg viewBox="0 0 24 24" width="15" height="15" fill="#f4c150">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            4.9 <span class="myshop text-secondary">| 180 Reviews</span>
                        </div>
                        <span class="wl-price text-dark p-2">₹2499</span>

                        <div class="myshop-product-body">
                            <button class="btn myshop-add-to-cart-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="myshop-product-card">
                        <i class="fas fa-heart myshop-wishlist-btn" onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        <div class="myshop-image-box">
                            <a href="#">
                                <img src="assets/img/slide 5.webp" class="myshop-product-image" alt="Dupatta">
                                <img src="assets/img/white.webp" class="myshop-hover-image" alt="Dupatta Back">
                            </a>
                        </div>

                        <div class="myshop-product-title p-2">Designer Handloom Dupatta</div>

                        <div class="wl-rating px-2">
                            <svg viewBox="0 0 24 24" width="15" height="15" fill="#f4c150">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
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


<section class="oa-new-arrivals-section" style="background-color: #fff0e9;">
        <div class="container">
            <div class="of-collection-heading5 text-center mb-2">
                <h2>New Arrivals</h2>
            </div>
            <p class="oa-subtitle">Discover the latest must-have arrivals. Fresh styles and best picks just for you.</p>

            <div class="row row-cols-2 row-cols-md-4 g-4">

                <div class="col">
                    <div class="oa-product-card">
                        <div class="oa-product-image">
                            <a href="#">
                                <img src="assets/img/black2.webp" class="oa-front-img" alt="Saree Front">
                                <img src="assets/img/black.webp" class="oa-hover-img" alt="Saree Back">
                            </a>

                            <div class="oa-sale-badge">20% OFF</div>

                            <div class="oa-product-icons">
                                <i class="fas fa-heart myshop-wishlist-btn" onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            </div>
                        </div>

                        <div class="oa-product-content">
                            <div class="oa-product-title">Sambalpuri Cotton Saree</div>
                            <div class="oa-product-brand">Handloom Premium</div>

                            <div class="wl-rating p-1">
                                <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                4.7 <span class="wl-rating-count">| 90 Reviews</span>
                            </div>

                            <div class="d-flex align-items-center gap-2 mt-2">
                                <span class="oa-product-price m-0">₹1299</span>
                                <span class="text-decoration-line-through text-muted" style="font-size: 0.9rem;">₹1599</span>
                            </div>

                            <button class="btn myshop-add-to-cart-btn my-3">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="oa-product-card">
                        <div class="oa-product-image">
                            <a href="#">
                                <img src="assets/img/cotton2.webp" class="oa-front-img" alt="Kurti Front">
                                <img src="assets/img/cotton.webp" class="oa-hover-img" alt="Kurti Back">
                            </a>

                            <div class="oa-sale-badge">15% OFF</div>

                            <div class="oa-product-icons">
                                <i class="fas fa-heart myshop-wishlist-btn" onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            </div>
                        </div>

                        <div class="oa-product-content">
                            <div class="oa-product-title">Ikat Printed Kurti</div>
                            <div class="oa-product-brand">Urban Collection</div>

                            <div class="wl-rating p-1">
                                <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                4.5 <span class="wl-rating-count">| 75 Reviews</span>
                            </div>

                            <div class="d-flex align-items-center gap-2 mt-2">
                                <span class="oa-product-price m-0">₹899</span>
                                <span class="text-decoration-line-through text-muted" style="font-size: 0.9rem;">₹1050</span>
                            </div>

                            <button class="btn myshop-add-to-cart-btn my-3">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="oa-product-card">
                        <div class="oa-product-image">
                            <a href="#">
                                <img src="assets/img/ethinic_collection.webp" class="oa-front-img" alt="Silk Saree Front">
                                <img src="assets/img/slide 4.webp" class="oa-hover-img" alt="Silk Saree Back">
                            </a>

                            <div class="oa-sale-badge">30% OFF</div>

                            <div class="oa-product-icons">
                                <i class="fas fa-heart myshop-wishlist-btn" onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            </div>
                        </div>

                        <div class="oa-product-content">
                            <div class="oa-product-title">Designer Silk Saree</div>
                            <div class="oa-product-brand">Royal Silk</div>

                            <div class="wl-rating p-1">
                                <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                4.9 <span class="wl-rating-count">| 200 Reviews</span>
                            </div>

                            <div class="d-flex align-items-center gap-2 mt-2">
                                <span class="oa-product-price m-0">₹3499</span>
                                <span class="text-decoration-line-through text-muted" style="font-size: 0.9rem;">₹4999</span>
                            </div>

                            <button class="btn myshop-add-to-cart-btn my-3">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="oa-product-card">
                        <div class="oa-product-image">
                            <a href="#">
                                <img src="assets/img/pink2.webp" class="oa-front-img" alt="Dupatta Front">
                                <img src="assets/img/pink.webp" class="oa-hover-img" alt="Dupatta Back">
                            </a>

                            <div class="oa-sale-badge">10% OFF</div>

                            <div class="oa-product-icons">
                                <i class="fas fa-heart myshop-wishlist-btn" onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            </div>
                        </div>

                        <div class="oa-product-content">
                            <div class="oa-product-title">Handloom Dupatta</div>
                            <div class="oa-product-brand">Ethnic Style</div>

                            <div class="wl-rating p-1">
                                <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" /></svg>
                                4.6 <span class="wl-rating-count">| 40 Reviews</span>
                            </div>

                            <div class="d-flex align-items-center gap-2 mt-2">
                                <span class="oa-product-price m-0">₹599</span>
                                <span class="text-decoration-line-through text-muted" style="font-size: 0.9rem;">₹670</span>
                            </div>

                            <button class="btn myshop-add-to-cart-btn my-3">Buy Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'common/footer.php' ?>
    <script>

    </script>


    <script src="assets/js/index.js?v=1.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.3"></script>
</body>

</html>