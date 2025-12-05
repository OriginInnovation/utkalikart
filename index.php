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

    <link rel="stylesheet" href="assets/css/main.css?v=3.8">
    <style>
        /* Container Styling */
        .slider-section {
            padding: 40px 0;
            position: relative;
            background: #fff;
        }

        .slider-wrapper {
            display: flex;
            align-items: center;
            position: relative;
            max-width: 1200px;
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

    
    <div class="container slider-section">
        <div class="slider-wrapper">

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



    <div id="heroCarousel" class="carousel slide carousel-fade carousel-slide1" data-bs-ride="carousel"
        data-bs-interval="3000">
        <div class="carousel-inner">
            <?php
            include 'admin/conn.php';
            $sql = "SELECT * FROM banner";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>

                <div class="carousel-item active">
                    <img src="admin/upload/banner/<?php echo $row['banner_image']; ?>" class="d-block w-100 img-fluid banner-image"
                        alt="Handcrafted Products">
                </div>
            <?php } ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
        </div>
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
                <?php
                include 'admin/conn.php';
                $sql1 = "SELECT * FROM sub_subcategory";
                $result1 = $conn->query($sql1);
                while ($row1 = $result1->fetch_assoc()) {
                ?>
                    <div class="bam-item"><a href="sub_sub_categories.php" class="bam-link">
                            <img src="admin/upload/subsubcategory/<?php echo $row1['image']; ?>" alt="Peach Suit">
                            <p><?php echo $row1['sub_subcategoryname']; ?></p>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section style="background-color: #fff0e9;">
        <div class="container shop-by-section py-5">
            <div class="of-collection-heading m-0">
                <h2 class="mb-5">Shop by Collection</h2>
            </div>
            <div class="row g-4 of-collection-row">
                <?php
                include 'admin/conn.php';
                $sql2 = "SELECT * FROM occasion LIMIT 4";
                $result2 = $conn->query($sql2);
                while ($row2 = $result2->fetch_assoc()) {
                    $encoded_id = base64_encode($row2['id']);
                ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="of-collection-item">

                            <!-- <span class="of-collection-tag">New</span> -->
                            <img src="admin/upload/occasion/<?php echo $row2['image']; ?>" class="of-collection-img"
                                alt="Ethnic Wear">
                            <div class="of-collection-overlay">
                                <div class="of-collection-name"><?php echo $row2['name']; ?></div>
                                <a href="occasion.php?id=<?php echo $encoded_id; ?>"><button class="of-collection-btn">Shop Now
                                        ➜</button></a>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="of-collection-heading2 m-0">
            <h2 class="mb-4">Our Featured Products</h2>
        </div>
        <div class="motif-card-container">
            <?php
            include 'admin/conn.php';
            $sql3 = "SELECT * FROM product where featured_product='1'";
            $result3 = $conn->query($sql3);
            while ($row3 = $result3->fetch_assoc()) {
            ?>
                <div class="motif-card-link">
                    <div class="motif-card">
                        <div class="motif-card-img-wrapper">
                            <a href="product_details.php"><img
                                    src="admin/upload/product/<?php echo $row3['product_image1']; ?>" class="motif-base-img"
                                    alt="Red Product">
                                <img src="admin/upload/product/<?php echo $row3['product_image2']; ?>"
                                    class="motif-hover-img" alt="Red Hover"></a>
                            <?php if (!empty($row3['discount_idd'])): ?>
                                <div class="oa-sale-badge">
                                    <?php echo $row3['discount_idd']; ?>% OFF
                                </div>
                            <?php endif; ?>
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                        </div>
                        <div class="motif-card-content">
                            <div>
                                <div class="motif-card-title"><?php echo $row3['product_name']; ?></div>
                                <div class="motif-card-description"><?php echo $row3['product_short_nm']; ?>.</div>
                                <div class="ab-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <?php echo $row3['rating']; ?> <span class="motif-text text-secondary">|
                                        <?php echo $row3['review']; ?> Reviews</span>
                                </div>
                                <?php if (!empty($row3['product_price'])) { ?>
                                    <span class="wl-price">₹<?php echo $row3['product_discount_price']; ?></span>
                                    <span class="wl-price-original">₹<?php echo $row3['product_price']; ?></span>
                                <?php } else { ?>
                                    <span class="motif-card-title">₹<?php echo $row3['product_discount_price']; ?></span>
                                <?php } ?>
                            </div>
                            <a href="product_details.php"><button class="motif-card-btn">Buy Now</button></a>

                        </div>

                    </div>
                </div>
            <?php } ?>
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

    <section class="shop-role-section py-5">
        <div class="shop-role-container">
            <div class="of-collection-heading3">
                <h2>Top Selling</h2>
            </div>
            <div class="shop-role-row d-none d-md-grid">
                <?php
                include 'admin/conn.php';
                $sql4 = "SELECT * FROM product WHERE top_sell='1' LIMIT 4";

                $result4 = $conn->query($sql4);
                while ($row4 = $result4->fetch_assoc()) {
                ?>
                    <div class="shop-role-card" onclick="filterByRole('bride')">
                        <div class="shop-role-card-img-wrapper">
                            <a href="sub_categories.php"><img
                                    src="admin/upload/product/<?php echo $row4['product_image1']; ?>" alt="Bride"></a>
                        </div>
                        <div class="shop-role-card-body">
                            <h5><?php echo $row4['product_name']; ?></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div id="pr-carousel" class="carousel slide d-md-none mt-3" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="shop-role-card">
                            <div class="shop-role-card-img-wrapper">
                                <a href="sub_categories.php"><img
                                        src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2024/06/6-3-1.jpg?resize=600%2C600&ssl=1"
                                        alt="Bride"></a>
                            </div>
                            <div class="shop-role-card-body">
                                <h5>Women Ethnic Wear</h5>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="shop-role-card">
                            <div class="shop-role-card-img-wrapper">
                                <a href="sub_categories.php"><img
                                        src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/01/IMG_9743_1_optimized_550.jpg?resize=600%2C600&ssl=1"
                                        alt="Kids Wear"></a>
                            </div>
                            <div class="shop-role-card-body">
                                <h5>Kids Wear</h5>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="shop-role-card">
                            <div class="shop-role-card-img-wrapper">
                                <a href="sub_sub_categories.php"><img
                                        src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/05/New_2__silk_set190_shrestha_front__2025-5-22-15-35-24__4096X4096_optimized_500.jpg?resize=300%2C300&ssl=1"
                                        alt="Banarasi Sarees"></a>
                            </div>
                            <div class="shop-role-card-body">
                                <h5>Banarasi Sarees</h5>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="shop-role-card">
                            <div class="shop-role-card-img-wrapper">
                                <a href="sub_categories.php"><img
                                        src="https://priyaodisha.com/cdn/shop/files/IMG_2756.jpg?v=1732554642&width=1080"
                                        alt="Men Festival Wear"></a>
                            </div>
                            <div class="shop-role-card-body">
                                <h5>Men Festival Wear</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="myshop-section-bg" style="background-color: #fff0e9;">
        <div class="container py-5">
            <div class="of-collection-heading4 m-0 mb-5">
                <h2>Popular Products</h2>
            </div>
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <?php
                include 'admin/conn.php';
                $sql5 = "SELECT * FROM product WHERE popul_pro='1'";

                $result5 = $conn->query($sql5);
                while ($row5 = $result5->fetch_assoc()) {
                ?>
                    <div class="col">
                        <div class="myshop-product-card">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="myshop-image-box">
                                <a href="sub_sub_categories.php">
                                    <img src="admin/upload/product/<?php echo $row5['product_image1']; ?>"
                                        class="myshop-product-image" alt="Sambalpuri Saree 2" />
                                </a>
                            </div>
                            <div class="myshop-product-title p-2"><?php echo $row5['product_name']; ?></div>
                            <div class="wl-rating px-2">
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <?php echo $row5['rating']; ?> <span class="myshop text-secondary">|
                                    <?php echo $row5['review']; ?> Reviews</span>
                            </div>
                            <span class="wl-price text-dark p-2">₹<?php echo $row5['product_discount_price']; ?></span>
                            <div class="myshop-product-body">
                                <a href="product_details.php"><button class="btn myshop-add-to-cart-btn">Buy
                                        Now</button></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="oa-new-arrivals-section">
        <div class="container">
            <div class="of-collection-heading5">
                <h2>New Arrivals</h2>
            </div>
            <p class="oa-subtitle">Discover the latest must-have arrivals. Fresh styles and best picks just for you.
            </p>
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <?php
                include 'admin/conn.php';
                $sql6 = "SELECT * FROM product WHERE bestsellers='1'";

                $result6 = $conn->query($sql6);
                while ($row6 = $result6->fetch_assoc()) {
                ?>
                    <div class="col">
                        <div class="oa-product-card">
                            <div class="oa-product-image">
                                <a href="sub_sub_categories.php"><img
                                        src="admin/upload/product/<?php echo $row6['product_image1']; ?>"
                                        alt="New Saree"></a>
                                <!-- <div class="oa-sale-badge"><?php echo $row6['discount_idd']; ?>% OFF</div> -->

                                <?php if (!empty($row6['discount_idd'])): ?>
                                    <div class="oa-sale-badge">
                                        <?php echo $row6['discount_idd']; ?>% OFF
                                    </div>
                                <?php endif; ?>

                                <div class="oa-product-icons">
                                    <i class="fas fa-heart myshop-wishlist-btn"
                                        onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                                    <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                                </div>
                            </div>
                            <div class="oa-product-content">
                                <div class="oa-product-title"><?php echo $row6['product_name']; ?></div>
                                <div class="oa-product-brand"><?php echo $row6['product_short_nm']; ?></div>
                                <div class="wl-rating p-1">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <?php echo $row6['rating']; ?> <span class="wl-rating-count">|
                                        <?php echo $row6['review']; ?> Reviews</span>
                                </div>
                                <?php if (!empty($row6['product_price'])) { ?>
                                    <span class="wl-price">₹<?php echo $row6['product_discount_price']; ?></span>
                                    <span class="wl-price-original">₹<?php echo $row6['product_price']; ?></span>
                                <?php } else { ?>
                                    <span class="motif-card-title">₹<?php echo $row6['product_discount_price']; ?></span>
                                <?php } ?>
                                <a href="product_details.php"><button class="btn myshop-add-to-cart-btn my-3">Buy
                                        Now</button></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

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

            // Duplicate items for seamless looping
            items.forEach(item => {
                let clone = item.cloneNode(true);
                track.appendChild(clone);
            });

            let scrollSpeed = 0.6; // Adjust slide speed
            let position = 0;

            function animate() {
                position -= scrollSpeed;

                // Reset smoothly when halfway through
                if (Math.abs(position) >= track.scrollWidth / 2) {
                    position = 0;
                }

                track.style.transform = `translateX(${position}px)`;
                requestAnimationFrame(animate);
            }

            animate();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.3"></script>
</body>

</html>