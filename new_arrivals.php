<?php include 'common/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopNow - New Arrivals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=3.98">
</head>
<body>

    <section class="simple-banner py-5 border-bottom">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="simple-box">
                        <h2 class="simple-title">Discover Timeless Ethnic Wear</h2>
                        <p class="simple-text">Handpicked sarees and kurtis designed for comfort and elegance.</p>
                        <button class="simple-btn">Shop Now <i class="fa fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="assets/img/pink.webp" class="simple-img" alt="banner">
                </div>
            </div>
        </div>
    </section>

    <div class="container d-flex justify-content-end align-items-center p-4">
        <div class="nav-icon-box me-3" onclick="showWishlist()">
            <i class="fa-regular fa-heart fs-4"></i>
            <span class="badge-count" id="wishCount">0</span>
        </div>
        <div class="nav-icon-box me-4" onclick="showCart()">
            <i class="fa-solid fa-cart-shopping fs-4"></i>
            <span class="badge-count" id="cartCount">0</span>
        </div>
        <div class="d-flex border-start ps-3">
            <button class="theme-btn" style="background:#111" onclick="setTheme('#111')"></button>
            <button class="theme-btn" style="background:#e91e63" onclick="setTheme('#e91e63')"></button>
            <button class="theme-btn" style="background:#3f51b5" onclick="setTheme('#3f51b5')"></button>
        </div>
    </div>

    <section class="container my-2 mb-5">
        <h3 class="fw-bold mb-4">New Arrivals</h3>
        <div class="row g-4">
            
            <div class="col-lg-3 col-md-6">
                <div class="sn-card">
                    <span class="sn-tag tag-new">New</span>
                    <div class="sn-img">
                        <img src="assets/img/jackets.webp" alt="Saree">
                        <div class="sn-actions">
                            <button class="wish" data-id="p1" onclick="toggleWishlist('p1', 'Banarasi Saree', 2499, 'assets/img/jackets.webp', this)">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button onclick="quickView('Banarasi Saree', 2499, 'assets/img/jackets.webp')">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sn-body text-center">
                        <div class="fw-semibold">Banarasi Silk Saree</div>
                        <div class="fw-bold text-dark mt-1">₹2499</div>
                        <button class="btn btn-dark w-100 mt-3" onclick="addToCart('p1', 'Banarasi Saree', 2499, 'assets/img/jackets.webp', false)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sn-card">
                    <span class="sn-tag tag-premium">Premium</span>
                    <div class="sn-img">
                        <img src="assets/img/slide 4.webp" alt="Saree">
                        <div class="sn-actions">
                            <button class="wish" data-id="p2" onclick="toggleWishlist('p2', 'Cotton Kurti', 1299, 'assets/img/slide 4.webp', this)">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button onclick="quickView('Cotton Kurti', 1299, 'assets/img/slide 4.webp')">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sn-body text-center">
                        <div class="fw-semibold">Designer Cotton Kurti</div>
                        <div class="fw-bold text-dark mt-1">₹1299</div>
                        <button class="btn btn-dark w-100 mt-3" onclick="addToCart('p2', 'Cotton Kurti', 1299, 'assets/img/slide 4.webp', false)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sn-card">
                    <span class="sn-tag tag-hot">Hot</span>
                    <div class="sn-img">
                        <img src="assets/img/jackets.webp" alt="Saree">
                        <div class="sn-actions">
                            <button class="wish" data-id="p3" onclick="toggleWishlist('p3', 'Banarasi Saree', 2499, 'assets/img/jackets.webp', this)">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button onclick="quickView('Banarasi Saree', 2499, 'assets/img/jackets.webp')">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sn-body text-center">
                        <div class="fw-semibold">Banarasi Silk Saree</div>
                        <div class="fw-bold text-dark mt-1">₹2499</div>
                        <button class="btn btn-dark w-100 mt-3" onclick="addToCart('p3', 'Banarasi Saree', 2499, 'assets/img/jackets.webp', false)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sn-card">
                    <span class="sn-tag tag-new">New</span>
                    <div class="sn-img">
                        <img src="assets/img/slide 4.webp" alt="Saree">
                        <div class="sn-actions">
                            <button class="wish" data-id="p4" onclick="toggleWishlist('p4', 'Cotton Kurti', 1299, 'assets/img/slide 4.webp', this)">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button onclick="quickView('Cotton Kurti', 1299, 'assets/img/slide 4.webp')">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sn-body text-center">
                        <div class="fw-semibold">Designer Cotton Kurti</div>
                        <div class="fw-bold text-dark mt-1">₹1299</div>
                        <button class="btn btn-dark w-100 mt-3" onclick="addToCart('p4', 'Cotton Kurti', 1299, 'assets/img/slide 4.webp', false)">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="modal fade" id="sideModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="modalTitle">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modalBody"></div>
                <div class="modal-footer-custom p-4 border-top">
                    <div class="d-flex justify-content-between align-items-center fw-bold mb-3">
                        <span id="summaryLabel" class="text-muted">Grand Total:</span>
                        <span id="modalTotal" class="fs-4 text-dark">₹0</span>
                    </div>
                    <div id="modalActionArea"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'common/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/main.js?v=1.3"></script>
   <script src="assets/js/new_arrivals.js?v=1.4"></script>
</body>
</html>