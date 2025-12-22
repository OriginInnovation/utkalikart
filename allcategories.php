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
    <title> All Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=2.52">
    <style>
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

        .slider-track.slid {
            padding: 0px 0px !important;
        }

        @media (max-width: 768px) {
            #offersBarContainer {
                margin-top: -65px !important;
            }

            .mob-header {
                margin-top: -36px !important;
            }
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

                        <!-- SIZE -->
                        <div class="mb-4">
                            <h6 class="custom-filter-title">SIZE</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeS"><label class="form-check-label" for="sizeS">S</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeM"><label class="form-check-label" for="sizeM">M</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeL"><label class="form-check-label" for="sizeL">L</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeXL"><label class="form-check-label" for="sizeXL">XL</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeXXL"><label class="form-check-label" for="sizeXXL">XXL</label></div>
                        </div>

                        <!-- PRICE -->
                        <div class="mb-4">
                            <h6 class="custom-filter-title mb-2">PRICE</h6>

                            <div class="range-wrapper position-relative w-100" style="height: 30px;">
                                <div class="slider-track slid"></div>
                                <input type="range" min="0" max="10000" value="1000" id="slider-1" oninput="slideOne()">
                                <input type="range" min="0" max="10000" value="7000" id="slider-2" oninput="slideTwo()">
                            </div>

                            <div class="d-flex justify-content-between text-muted small mt-2">
                                <span>₹<span id="range1">1000</span></span>
                                <span>₹<span id="range2">7000</span></span>
                            </div>
                        </div>

                        <!-- COLOR -->
                        <div class="mb-4">
                            <h6 class="custom-filter-title">COLOR</h6>
                            <input type="text" class="custom-search-input mb-2" placeholder="Search Color...">

                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Blue">
                                <span class="custom-color-dot bg-blue me-2"></span>
                                <label class="form-check-label" for="color-Blue">Blue</label>
                            </div>

                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Green">
                                <span class="custom-color-dot bg-green me-2"></span>
                                <label class="form-check-label" for="color-Green">Green</label>
                            </div>

                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Black">
                                <span class="custom-color-dot bg-black me-2"></span>
                                <label class="form-check-label" for="color-Black">Black</label>
                            </div>

                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Yellow">
                                <span class="custom-color-dot bg-yellow me-2"></span>
                                <label class="form-check-label" for="color-Yellow">Yellow</label>
                            </div>
                        </div>

                        <!-- DISCOUNT -->
                        <div class="mb-4">
                            <h6 class="custom-filter-title mb-2">DISCOUNT RANGE</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d10"><label class="form-check-label" for="d10">10% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d20"><label class="form-check-label" for="d20">20% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d30"><label class="form-check-label" for="d30">30% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d40"><label class="form-check-label" for="d40">40% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d50"><label class="form-check-label" for="d50">50% and above</label></div>
                        </div>

                        <!-- BUNDLES -->
                        <div class="mb-4">
                            <h6 class="custom-filter-title">BUNDLES</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="bundleSingle"><label class="form-check-label" for="bundleSingle">Single</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="bundleCombo"><label class="form-check-label" for="bundleCombo">Combo</label></div>
                        </div>

                        <!-- SUB-CATEGORIES (NEW) -->
                        <div class="mb-4">
                            <h6 class="custom-filter-title">SUB-CATEGORIES</h6>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="subSaree"><label class="form-check-label" for="subSaree">Sarees</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="subKurti"><label class="form-check-label" for="subKurti">Kurtis</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="subDress"><label class="form-check-label" for="subDress">Dresses</label></div>
                        </div>

                        <!-- FABRIC -->
                        <div class="mb-4">
                            <h6 class="custom-filter-title">FABRIC</h6>
                            <input type="text" class="custom-search-input mb-2" placeholder="Search Fabric...">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="fabricCotton"><label class="form-check-label" for="fabricCotton">Cotton</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="fabricLinen"><label class="form-check-label" for="fabricLinen">Linen</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="fabricSilk"><label class="form-check-label" for="fabricSilk">Silk</label></div>
                        </div>

                        <button class="btn btn-outline-dark btn-sm custom-clear-btn mt-3 fw-bold">Clear Filters</button>

                    </div>
                </div>
            </div>


            <div class="col-lg-10">
                <div class="d-none d-lg-flex justify-content-between align-items-center mb-3 flex-wrap">

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
            <!-- <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sortOffcanvas" aria-controls="sortOffcanvas">
                <i class="bi bi-sort-down"></i> SORT
            </button> -->
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
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close filters"></button>
            </div>

            <div class="offcanvas-body">
                <div class="filter-content-wrapper">

                    <!-- LEFT CATEGORIES -->
                    <div class="filter-categories">
                        <div class="filter-category-item active" data-filter-target="size-filters">Size</div>
                        <div class="filter-category-item" data-filter-target="price-filters">Price</div>
                        <div class="filter-category-item" data-filter-target="color-filters">Color</div>
                        <div class="filter-category-item" data-filter-target="discount-filters">Discount Range</div>
                        <div class="filter-category-item" data-filter-target="bundles-filters">Bundles</div>
                        <div class="filter-category-item" data-filter-target="subcat-filters">Sub-Categories</div>
                        <div class="filter-category-item" data-filter-target="fabric-filters">Fabric</div>
                    </div>

                    <!-- RIGHT DETAILS -->
                    <div class="filter-details">

                        <!-- SIZE -->
                        <div id="size-filters" class="filter-detail-pane active">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeS"><label class="form-check-label" for="sizeS">S</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeM"><label class="form-check-label" for="sizeM">M</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeL"><label class="form-check-label" for="sizeL">L</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeXL"><label class="form-check-label" for="sizeXL">XL</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="sizeXXL"><label class="form-check-label" for="sizeXXL">XXL</label></div>
                        </div>

                        <!-- PRICE (same as desktop range logic) -->
                        <div id="price-filters" class="filter-detail-pane">
                            <div class="range-wrapper position-relative w-100" style="height:30px;">
                                <div class="slider-track"></div>
                                <input type="range" min="0" max="10000" value="1000" id="slider-1">
                                <input type="range" min="0" max="10000" value="7000" id="slider-2">
                            </div>
                            <div class="d-flex justify-content-between small mt-2">
                                <span>₹<span id="range1">1000</span></span>
                                <span>₹<span id="range2">7000</span></span>
                            </div>
                        </div>

                        <!-- COLOR -->
                        <div id="color-filters" class="filter-detail-pane">
                            <input type="text" class="custom-search-input mb-2" placeholder="Search Color...">
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Blue">
                                <span class="custom-color-dot bg-blue me-2"></span>
                                <label class="form-check-label" for="color-Blue">Blue</label>
                            </div>
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Green">
                                <span class="custom-color-dot bg-green me-2"></span>
                                <label class="form-check-label" for="color-Green">Green</label>
                            </div>
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Black">
                                <span class="custom-color-dot bg-black me-2"></span>
                                <label class="form-check-label" for="color-Black">Black</label>
                            </div>
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-2" type="checkbox" id="color-Yellow">
                                <span class="custom-color-dot bg-yellow me-2"></span>
                                <label class="form-check-label" for="color-Yellow">Yellow</label>
                            </div>
                        </div>

                        <!-- DISCOUNT -->
                        <div id="discount-filters" class="filter-detail-pane">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d10"><label class="form-check-label" for="d10">10% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d20"><label class="form-check-label" for="d20">20% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d30"><label class="form-check-label" for="d30">30% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d40"><label class="form-check-label" for="d40">40% and above</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="d50"><label class="form-check-label" for="d50">50% and above</label></div>
                        </div>

                        <!-- BUNDLES -->
                        <div id="bundles-filters" class="filter-detail-pane">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="bundleSingle"><label class="form-check-label" for="bundleSingle">Single</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="bundleCombo"><label class="form-check-label" for="bundleCombo">Combo</label></div>
                        </div>

                        <!-- SUB CATEGORIES -->
                        <div id="subcat-filters" class="filter-detail-pane">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="subSaree"><label class="form-check-label" for="subSaree">Sarees</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="subKurti"><label class="form-check-label" for="subKurti">Kurtis</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="subDress"><label class="form-check-label" for="subDress">Dresses</label></div>
                        </div>

                        <!-- FABRIC -->
                        <div id="fabric-filters" class="filter-detail-pane">
                            <input type="text" class="custom-search-input mb-2" placeholder="Search Fabric...">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="fabricCotton"><label class="form-check-label" for="fabricCotton">Cotton</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="fabricLinen"><label class="form-check-label" for="fabricLinen">Linen</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="fabricSilk"><label class="form-check-label" for="fabricSilk">Silk</label></div>
                        </div>

                    </div>
                </div>

                <!-- FOOTER -->
                <div class="offcanvas-footer d-flex gap-2">
                    <button type="button" class="btn btn-outline-dark w-50" id="clearAllFilters">CLEAR ALL</button>
                    <button type="button" class="btn btn-dark w-50">APPLY</button>
                </div>
            </div>
        </div>
    </div>


    <?php include 'common/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.2"></script>
    <script src="assets/js/all_categories.js?v=1.5"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const categoryItems = document.querySelectorAll(".filter-category-item");
            const detailPanes = document.querySelectorAll(".filter-detail-pane");

            categoryItems.forEach(item => {
                item.addEventListener("click", function() {

                    // LEFT SIDE ACTIVE REMOVE
                    categoryItems.forEach(i => i.classList.remove("active"));
                    this.classList.add("active");

                    // RIGHT SIDE PANES HIDE
                    detailPanes.forEach(pane => pane.classList.remove("active"));

                    // TARGET PANE SHOW
                    const targetId = this.getAttribute("data-filter-target");
                    const targetPane = document.getElementById(targetId);

                    if (targetPane) {
                        targetPane.classList.add("active");
                    }
                });
            });

        });
    </script>


</body>

</html>