<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Discover elegant women’s traditional clothing at ShopNow. Explore sarees, salwar suits, lehengas, and ethnic wear crafted for every occasion." />
    <meta name="keywords"
        content="women's traditional clothing, sarees, salwar suits, lehengas, ethnic wear for women, ShopNow traditional wear, online traditional clothing" />
    <meta name="author" content="origin-innovation" />
    <meta name="robots" content="index, follow" />
    <title>sub categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=2.5">
    <style>
        /* Slider Wrapper */
        .range-wrapper {
            position: relative;
            width: 100%;
            height: 5px;
            /* Track height */
            margin-top: 15px;
        }

        /* Background Track (Grey Bar) */
        .slider-track {
            width: 100%;
            height: 5px;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            background-color: #ddd;
            /* Inactive color */
            border-radius: 5px;
        }

        /* Common Styles for Both Inputs */
        input[type="range"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            outline: none;
            position: absolute;
            margin: auto;
            top: 5px;
            bottom: 0;
            background-color: transparent;
            pointer-events: none;
            /* Important: Allows clicking through transparent parts */
        }

        /* Slider Thumb (Circle Handle) Styling */
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 18px;
            width: 18px;
            background-color: #212529;
            /* Dark Color */
            cursor: pointer;
            border-radius: 50%;
            pointer-events: auto;
            /* Re-enable clicking on the thumb */
            border: 2px solid #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin-top: -7px;
            /* Adjust vertical alignment */
        }

        input[type="range"]::-moz-range-thumb {
            height: 18px;
            width: 18px;
            background-color: #212529;
            cursor: pointer;
            border-radius: 50%;
            pointer-events: auto;
            border: 2px solid #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        input[type="range"]::-ms-thumb {
            height: 18px;
            width: 18px;
            background-color: #212529;
            cursor: pointer;
            border-radius: 50%;
            pointer-events: auto;
        }
    </style>
</head>

<body>
    <?php include 'common/header.php' ?>
    <button id="ar-goTopBtn" class="ar-go-top-btn" aria-label="Go to top">
        <i class="bi bi-chevron-up"></i>
    </button>
    <div class="container-fluid mt-3 categories-section">
        <div class="row">
            <div class="col-lg-2 custom-desktop-sidebar d-none d-lg-block">
                <div class="bg-white p-3 border custom-filter-box">
                    <h6 class="fw-bold mb-3">FILTERS</h6>
                    <div id="custom-filterContent">

                        <div class="mb-4">
                            <h6 class="custom-filter-title">SIZE</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeS"><label
                                    class="form-check-label" for="sizeS">S</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeM"><label
                                    class="form-check-label" for="sizeM">M</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeL"><label
                                    class="form-check-label" for="sizeL">L</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeXL"><label
                                    class="form-check-label" for="sizeXL">XL</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeXXL"><label
                                    class="form-check-label" for="sizeXXL">XXL</label></div>
                        </div>

                       <div class="mb-4">
                            <h6 class="custom-filter-title mb-2">PRICE</h6>

                            <div class="range-wrapper position-relative w-100" style="height: 30px;">
                                <div class="slider-track"></div>
                                <input type="range" min="0" max="10000" value="1000" id="slider-1" oninput="slideOne()">
                                <input type="range" min="0" max="10000" value="7000" id="slider-2" oninput="slideTwo()">
                            </div>

                            <div class="d-flex justify-content-between text-muted small mt-2">
                                <span>₹<span id="range1">1000</span></span>
                                <span>₹<span id="range2">7000</span></span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="custom-filter-title">COLOR</h6>
                            <input type="text" class="custom-search-input mb-2" placeholder="Search Color...">
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Blue">
                                <span class="custom-color-dot bg-blue me-2"></span>
                                <label class="form-check-label" for="color-Blue">Blue <span
                                        class="text-muted">(4383)</span></label>
                            </div>
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Green">
                                <span class="custom-color-dot bg-green me-2"></span>
                                <label class="form-check-label" for="color-Green">Green <span
                                        class="text-muted">(3787)</span></label>
                            </div>
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Black">
                                <span class="custom-color-dot bg-black me-2"></span>
                                <label class="form-check-label" for="color-Black">Black <span
                                        class="text-muted">(3282)</span></label>
                            </div>
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Yellow">
                                <span class="custom-color-dot bg-yellow me-2"></span>
                                <label class="form-check-label" for="color-Yellow">Yellow <span
                                        class="text-muted">(2708)</span></label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="custom-filter-title mb-2">DISCOUNT RANGE</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d10"><label
                                    class="form-check-label" for="d10">10% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d20"><label
                                    class="form-check-label" for="d20">20% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d30"><label
                                    class="form-check-label" for="d30">30% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d40"><label
                                    class="form-check-label" for="d40">40% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d50"><label
                                    class="form-check-label" for="d50">50% and above</label></div>
                        </div>

                        <div class="mb-4">
                            <h6 class="custom-filter-title">BUNDLES</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="bundleSingle"><label class="form-check-label" for="bundleSingle">Single</label>
                            </div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="bundleCombo"><label class="form-check-label" for="bundleCombo">Combo</label>
                            </div>
                        </div>


                        <div class="mb-4">
                            <h6 class="custom-filter-title">RATING</h6>
                            <div class="form-check"><input class="form-check-input" type="radio" name="rating"
                                    id="rating4plus"><label class="form-check-label" for="rating4plus">4.0 ⭐ &
                                    Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" name="rating"
                                    id="rating3plus"><label class="form-check-label" for="rating3plus">3.0 ⭐ &
                                    Up</label></div>
                        </div>


                        <div class="mb-4">
                            <h6 class="custom-filter-title">FABRIC</h6>
                            <input type="text" class="custom-search-input mb-2" placeholder="Search Fabric...">
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="fabricCotton"><label class="form-check-label" for="fabricCotton">Cotton</label>
                            </div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="fabricLinen"><label class="form-check-label" for="fabricLinen">Linen</label>
                            </div>
                        </div>


                        <div class="mb-4">
                            <h6 class="custom-filter-title">OCCASION</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="occasionCasual"><label class="form-check-label"
                                    for="occasionCasual">Casual</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="occasionParty"><label class="form-check-label" for="occasionParty">Party</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="custom-filter-title">FASHION TREND</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="trendOversized"><label class="form-check-label"
                                    for="trendOversized">Oversized</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="trendSlimFit"><label class="form-check-label" for="trendSlimFit">Slim
                                    Fit</label></div>
                        </div>

                        <button class="btn btn-outline-dark btn-sm custom-clear-btn mt-3 fw-bold">Clear Filters</button>
                    </div>
                </div>

            </div>

            <div class="col-lg-10">
                <div class="d-none d-lg-flex justify-content-between align-items-center mb-3 flex-wrap">
                    <div class="d-flex flex-wrap gap-2">
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Bundles
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Single</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Colour Family
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Red</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Fabric
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cotton</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                More
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">View All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ms-auto d-flex align-items-center">
                        <label for="desktopSortSelect" class="me-2 mb-0">Sort by:</label>
                        <select class="form-select form-select-sm w-auto" id="desktopSortSelect"
                            aria-label="Sort by desktop">
                            <option selected>Recommended</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest First</option>
                        </select>
                    </div>
                </div>


                <div id="custom-productGrid" class="row custom-product-item">
                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-danger mt-auto mb-2">
                                    Rs. 1099
                                    <span class="text-muted text-decoration-line-through ms-1">Rs. 3599</span>
                                    <span class="text-success ms-1">(70% OFF)</span>
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>

                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                        <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
                                class="card-img-top" alt="Men's Cotton Straight Kurta">
                            <i class="fas fa-heart myshop-wishlist-btn"
                                onclick="event.stopPropagation(); toggleWishlist(this)"></i>
                            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
                                <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
                                <div class="wl-rating">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
                                </div>
                                <p class="fw-bold text-dark mt-auto mb-2">
                                    Rs. 1099
                                </p>
                                <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="loadTrigger" class="py-3 text-center">
                <small class="text-muted">Scroll to load more...</small>
            </div>
        </div>

        <div class="custom-mobile-fixed-bar d-lg-none">
            <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sortOffcanvas" aria-controls="sortOffcanvas">
                <i class="bi bi-sort-down"></i> SORT
            </button>
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterOffcanvas"
                aria-controls="filterOffcanvas">
                <i class="bi bi-filter"></i> FILTER
            </button>
        </div>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="sortOffcanvas" aria-labelledby="sortOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sortOffcanvasLabel">SORT BY</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close sort options"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column">
                <ul class="list-group list-group-flush sort-options flex-grow-1 overflow-auto">
                    <li class="list-group-item active" data-sort-value="popularity">Popularity</li>
                    <li class="list-group-item" data-sort-value="latest">Latest</li>
                    <li class="list-group-item" data-sort-value="discount">Discount</li>
                    <li class="list-group-item" data-sort-value="price-high-to-low">Price: High to Low</li>
                    <li class="list-group-item" data-sort-value="price-low-to-high">Price: Low to High</li>
                    <li class="list-group-item" data-sort-value="customer-rating">Customer Rating</li>
                </ul>
                <div class="offcanvas-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="offcanvas">CLOSE</button>
                    <button type="button" class="btn btn-dark">APPLY</button>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="filterOffcanvas"
            aria-labelledby="filterOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="filterOffcanvasLabel">FILTERS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close filters"></button>
            </div>
            <div class="offcanvas-body">
                <div class="filter-content-wrapper">
                    <div class="filter-categories">
                        <div class="filter-category-item active" data-filter-target="size-filters">Size</div>
                        <div class="filter-category-item" data-filter-target="price-filters">Price</div>
                        <div class="filter-category-item" data-filter-target="color-filters">Color</div>
                        <div class="filter-category-item" data-filter-target="discount-filters">Discount Range</div>
                        <div class="filter-category-item" data-filter-target="shirts-filters">Shirts</div>
                        <div class="filter-category-item" data-filter-target="bundles-filters">Bundles</div>
                        <div class="filter-category-item" data-filter-target="rating-filters">Rating</div>
                        <div class="filter-category-item" data-filter-target="fabrics-filters">Fabrics</div>
                        <div class="filter-category-item" data-filter-target="fashion-filters">Fashion Trends</div>
                        <div class="filter-category-item" data-filter-target="occasions-filters">Occasions</div>
                    </div>
                    <div class="filter-details">
                        <div id="size-filters" class="filter-detail-pane active">
                            <input type="text" class="custom-search-input mb-3" placeholder="Search by Size..."
                                aria-label="Search by Size">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="sizeS-filter">
                                <label class="form-check-label" for="sizeS-filter">S</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="sizeM-filter">
                                <label class="form-check-label" for="sizeM-filter">M</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="sizeL-filter">
                                <label class="form-check-label" for="sizeL-filter">L</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="sizeXL-filter">
                                <label class="form-check-label" for="sizeXL-filter">XL</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="sizeXXL-filter">
                                <label class="form-check-label" for="sizeXXL-filter">XXL</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="size3XL-filter">
                                <label class="form-check-label" for="size3XL-filter">3XL</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="size28-filter">
                                <label class="form-check-label" for="size28-filter">28</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="size30-filter">
                                <label class="form-check-label" for="size30-filter">30</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="size31-filter">
                                <label class="form-check-label" for="size31-filter">31</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="size32-filter">
                                <label class="form-check-label" for="size32-filter">32</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="size33-filter">
                                <label class="form-check-label" for="size33-filter">33</label>
                            </div>
                        </div>

                        <div id="price-filters" class="filter-detail-pane">
                            <input type="range" class="form-range custom-price-slider mb-2" min="100" max="10000"
                                step="100">
                            <div class="text-muted small">₹100 - ₹10,000+</div>
                        </div>

                        <div id="brand-filters" class="filter-detail-pane">
                            <input type="text" class="custom-search-input mb-3" placeholder="Search Brand..."
                                aria-label="Search Brand">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="brandHereAndNow">
                                <label class="form-check-label" for="brandHereAndNow">HERE&NOW <span
                                        class="text-muted">(1200)</span></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="brandRoadster">
                                <label class="form-check-label" for="brandRoadster">Roadster <span
                                        class="text-muted">(950)</span></label>
                            </div>
                            <div class="text-danger small mt-1">+ 100+ more</div>
                        </div>

                        <div id="color-filters" class="filter-detail-pane">
                            <input type="text" class="custom-search-input mb-3" placeholder="Search Color..."
                                aria-label="Search Color">
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Blue-filter">
                                <span class="custom-color-dot bg-blue me-2"></span>
                                <label class="form-check-label" for="color-Blue-filter">Blue <span
                                        class="text-muted">(4383)</span></label>
                            </div>
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Green-filter">
                                <span class="custom-color-dot bg-green me-2"></span>
                                <label class="form-check-label" for="color-Green-filter">Green <span
                                        class="text-muted">(3787)</span></label>
                            </div>
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Black-filter">
                                <span class="custom-color-dot bg-black me-2"></span>
                                <label class="form-check-label" for="color-Black-filter">Black <span
                                        class="text-muted">(3282)</span></label>
                            </div>
                            <div class="text-danger small mt-1">+ 42 more</div>
                        </div>

                        <div id="discount-filters" class="filter-detail-pane">
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="d10-filter"><label class="form-check-label" for="d10-filter">10% and
                                    above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="d20-filter"><label class="form-check-label" for="d20-filter">20% and
                                    above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="d30-filter"><label class="form-check-label" for="d30-filter">30% and
                                    above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="d40-filter"><label class="form-check-label" for="d40-filter">40% and
                                    above</label></div>
                        </div>

                        <div id="shirts-filters" class="filter-detail-pane">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="casualShirt">
                                <label class="form-check-label" for="casualShirt">Casual Shirts</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formalShirt">
                                <label class="form-check-label" for="formalShirt">Formal Shirts</label>
                            </div>
                        </div>

                        <div id="bundles-filters" class="filter-detail-pane">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="bundleSingle">
                                <label class="form-check-label" for="bundleSingle">Single</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="bundleSingle">
                                <label class="form-check-label" for="bundleSingle">Combo</label>
                            </div>
                        </div>


                        <div id="rating-filters" class="filter-detail-pane">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="rating4plus">
                                <label class="form-check-label" for="rating4plus">4.0 ⭐ & Up</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="rating3plus">
                                <label class="form-check-label" for="rating3plus">3.0 ⭐ & Up</label>
                            </div>
                        </div>

                        <div id="fabrics-filters" class="filter-detail-pane">
                            <input type="text" class="custom-search-input mb-3" placeholder="Search Fabric..."
                                aria-label="Search Fabric">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="fabricCotton">
                                <label class="form-check-label" for="fabricCotton">Cotton</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="fabricLinen">
                                <label class="form-check-label" for="fabricLinen">Linen</label>
                            </div>
                        </div>

                        <div id="fashion-filters" class="filter-detail-pane">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="trendOversized">
                                <label class="form-check-label" for="trendOversized">Oversized</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="trendSlimFit">
                                <label class="form-check-label" for="trendSlimFit">Slim Fit</label>
                            </div>
                        </div>

                        <div id="occasions-filters" class="filter-detail-pane">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="occasionCasual">
                                <label class="form-check-label" for="occasionCasual">Casual</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="occasionParty">
                                <label class="form-check-label" for="occasionParty">Party</label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="offcanvas-footer">
                    <button type="button" class="btn btn-outline-dark" id="clearAllFilters">CLEAR ALL</button>
                    <button type="button" class="btn btn-dark">APPLY</button>
                </div>
            </div>
        </div>
    </div>


    <?php include 'common/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.2"></script>

    <!-- filter js -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterCategories = document.querySelectorAll('.filter-category-item');
            const filterDetailPanes = document.querySelectorAll('.filter-detail-pane');
            const clearAllFiltersBtn = document.getElementById('clearAllFilters');
            const filterOffcanvasElement = document.getElementById('filterOffcanvas');

            filterCategories.forEach(item => {
                item.addEventListener('click', function() {

                    filterCategories.forEach(cat => cat.classList.remove('active'));

                    this.classList.add('active');

                    filterDetailPanes.forEach(pane => pane.classList.remove('active'));

                    const targetId = this.dataset.filterTarget;
                    const targetPane = document.getElementById(targetId);
                    if (targetPane) {
                        targetPane.classList.add('active');
                    }
                });
            });


            if (clearAllFiltersBtn) {
                clearAllFiltersBtn.addEventListener('click', function() {

                    filterOffcanvasElement.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                        checkbox.checked = false;
                    });

                    filterOffcanvasElement.querySelectorAll('input[type="radio"]').forEach(radio => {
                        radio.checked = false;
                    });

                    filterOffcanvasElement.querySelectorAll('input[type="text"]').forEach(textInput => {
                        textInput.value = '';
                    });

                    const priceRange = filterOffcanvasElement.querySelector('.custom-price-slider');
                    if (priceRange) {
                        priceRange.value = priceRange.min;
                    }
                    console.log('All filters cleared!');

                });
            }

            const sortOptions = document.querySelectorAll('.sort-options .list-group-item');

            sortOptions.forEach(option => {
                option.addEventListener('click', function() {
                    sortOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                    const selectedSort = this.dataset.sortValue;
                    console.log('Selected Sort:', selectedSort);

                });
            });
        });
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

    <!-- products loader -->
    <script>
        const productGrid = document.getElementById("custom-productGrid");
        const loadTrigger = document.getElementById("loadTrigger");

        // Fake product list
        const products = Array.from({
            length: 40
        }, (_, i) => ({
            title: "HERE&NOW",
            desc: "Cotton Straight Kurta",
            price: "Rs. 1099",
            img: "https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg",
            rating: 4.5,
            reviews: 34567
        }));

        let index = 0;
        const batchSize = 8;

        // show skeleton loader
        function showSkeleton() {
            for (let i = 0; i < batchSize; i++) {
                const col = document.createElement("div");
                col.className = "col-6 col-md-4 col-lg-3 mb-4 d-flex skeleton-card";
                col.innerHTML = `
      <div class="w-100">
        <div class="skeleton skeleton-img mb-2"></div>
        <div class="skeleton skeleton-text" style="width:60%"></div>
        <div class="skeleton skeleton-text" style="width:80%"></div>
        <div class="skeleton skeleton-text" style="width:50%"></div>
        <div class="skeleton skeleton-btn mt-2"></div>
      </div>
     `;
                productGrid.appendChild(col);
            }
        }

        // load real product cards
        function loadProducts() {
            document.querySelectorAll(".skeleton-card").forEach(el => el.remove());

            const slice = products.slice(index, index + batchSize);
            slice.forEach(p => {
                const col = document.createElement("div");
                col.className = "col-6 col-md-4 col-lg-3 mb-4 d-flex";
                col.innerHTML = `
      <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
        <img src="${p.img}" class="card-img-top" alt="${p.desc}">
        <i class="fas fa-heart myshop-wishlist-btn"
           onclick="event.stopPropagation(); toggleWishlist(this)"></i>
        <i class="fas fa-cart-shopping myshop-cart-icon"></i>
        <div class="card-body d-flex flex-column p-3">
          <h6 class="card-title mb-1 fw-semibold text-dark">${p.title}</h6>
          <p class="mb-1 text-muted small">${p.desc}</p>
          <div class="wl-rating">
            <svg viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
            </svg>
            ${p.rating} <span class="myshop text-secondary">| ${p.reviews.toLocaleString()} Ratings</span>
          </div>
          <p class="fw-bold text-dark mt-auto mb-2">${p.price}</p>
          <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
        </div>
      </div>`;
                productGrid.appendChild(col);
            });
            index += batchSize;

            if (index >= products.length) {
                observer.unobserve(loadTrigger);
                loadTrigger.innerHTML = "<small class='text-muted'>No more products</small>";
            }
        }

        // wishlist toggle
        function toggleWishlist(el) {
            el.classList.toggle("fas");
            el.classList.toggle("far");
        }

        // intersection observer
        const observer = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting) {
                showSkeleton();
                setTimeout(loadProducts, 1200); // fake delay
            }
        });
        observer.observe(loadTrigger);

        // initial load
        showSkeleton();
        setTimeout(loadProducts, 1200);
    </script>
        <script>
        window.onload = function() {
            slideOne();
            slideTwo();
        };

        let sliderOne = document.getElementById("slider-1");
        let sliderTwo = document.getElementById("slider-2");
        let displayValOne = document.getElementById("range1");
        let displayValTwo = document.getElementById("range2");
        let minGap = 500; // Minimum distance between two handles
        let sliderTrack = document.querySelector(".slider-track");
        let sliderMaxValue = document.getElementById("slider-1").max;

        function slideOne() {
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderOne.value = parseInt(sliderTwo.value) - minGap;
            }
            displayValOne.textContent = sliderOne.value;
            fillColor();
        }

        function slideTwo() {
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderTwo.value = parseInt(sliderOne.value) + minGap;
            }
            displayValTwo.textContent = sliderTwo.value;
            fillColor();
        }

        function fillColor() {
            percent1 = (sliderOne.value / sliderMaxValue) * 100;
            percent2 = (sliderTwo.value / sliderMaxValue) * 100;
            // Track background gradient logic
            sliderTrack.style.background = `linear-gradient(to right, #ddd ${percent1}%, #212529 ${percent1}%, #212529 ${percent2}%, #ddd ${percent2}%)`;
        }
    </script>
</body>

</html>