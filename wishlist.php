<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlist | ShopNow</title>

    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css?v=3.98">
</head>

<body class="wishlist-safe">

    <?php include 'common/header.php' ?>

    <!-- ================= WISHLIST ================= -->
    <section class="container my-5">

        <!-- Title + Counters -->
        <div class="container mb-4 main-data">
            <div class="d-flex justify-content-between align-items-center">

                <!-- TITLE -->
                <h3 class="fw-bold m-0 wish-cont">My Wishlist</h3>

                <!-- ICON SECTION -->
                <div class="d-flex gap-4 wish-cont">

                    <!-- WISHLIST -->
                    <div class="text-center position-relative" style="cursor:pointer;">
                        <i class="fa-regular fa-heart fs-4"
                            style="color: rgb(227,101,42);"></i>

                        <span class="badge bg-success position-absolute top-0 start-100 translate-middle wishlist-count">
                            0
                        </span>

                        <div class="fw-semibold mt-1" style="font-size:13px;">Wishlist</div>
                        <div class="text-muted" style="font-size:11px; line-height:1.2;">
                            Add products to wishlist
                        </div>
                    </div>

                    <!-- CART -->
                    <div class="text-center position-relative"
                        data-bs-toggle="modal"
                        data-bs-target="#cartModal"
                        style="cursor:pointer;">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24"
                            fill="none"
                            stroke="rgb(227,101,42)"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>

                        <span class="badge bg-dark position-absolute top-0 start-100 translate-middle cart-count">
                            0
                        </span>

                        <div class="fw-semibold mt-1" style="font-size:13px;">Cart</div>
                        <div class="text-muted" style="font-size:11px; line-height:1.2;">
                            Click for checkout
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- ================= STATIC WISHLIST CARDS ================= -->
        <div class="row g-4 wishlist-container">
            <!-- ⬅️ ALL YOUR CARDS EXACTLY SAME (UNCHANGED) -->
            <!-- (no edit done here intentionally) -->
            <!-- keep as-is -->
            <!-- ... YOUR CARDS ... -->
            <!-- CARD 1 -->
            <div class="col-md-3 col-sm-6 wishlist-item"
                data-id="1"
                data-name="Banarasi Silk Saree"
                data-price="2499"
                data-img="assets/img/Manthulir Green2.webp">

                <div class="card border-0 shadow-sm">
                    <div class="overflow-hidden d-flex align-items-center justify-content-center"
                        style="height:220px;">
                        <img src="assets/img/Manthulir Green2.webp"
                            class="w-100"
                            style="max-height:220px; object-fit:contain; transition:.3s">
                    </div>
                    <div class="card-body py-3">
                        <h6 class="mb-1">Banarasi Silk Saree</h6>
                        <p class="text-muted mb-2">₹2499</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-dark btn-sm w-100 add-cart">Add to Cart</button>
                            <button class="btn btn-outline-danger btn-sm remove-wishlist">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-3 col-sm-6 wishlist-item"
                data-id="2"
                data-name="Designer Kurti Set"
                data-price="1799"
                data-img="assets/img/pink2.webp">

                <div class="card border-0 shadow-sm">
                    <div class="overflow-hidden d-flex align-items-center justify-content-center"
                        style="height:220px;">
                        <img src="assets/img/pink2.webp"
                            class="w-100"
                            style="max-height:220px; object-fit:contain; transition:.3s">
                    </div>
                    <div class="card-body py-3">
                        <h6 class="mb-1">Designer Kurti Set</h6>
                        <p class="text-muted mb-2">₹1799</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-dark btn-sm w-100 add-cart">Add to Cart</button>
                            <button class="btn btn-outline-danger btn-sm remove-wishlist">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-3 col-sm-6 wishlist-item"
                data-id="3"
                data-name="Cotton Daily Wear Saree"
                data-price="1299"
                data-img="assets/img/red2.webp">

                <div class="card border-0 shadow-sm">
                    <div class="overflow-hidden d-flex align-items-center justify-content-center"
                        style="height:220px;">
                        <img src="assets/img/red2.webp"
                            class="w-100"
                            style="max-height:220px; object-fit:contain; transition:.3s">
                    </div>
                    <div class="card-body py-3">
                        <h6 class="mb-1">Cotton Daily Wear Saree</h6>
                        <p class="text-muted mb-2">₹1299</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-dark btn-sm w-100 add-cart">Add to Cart</button>
                            <button class="btn btn-outline-danger btn-sm remove-wishlist">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD 1 -->
            <div class="col-md-3 col-sm-6 wishlist-item"
                data-id="1"
                data-name="Banarasi Silk Saree"
                data-price="2499"
                data-img="assets/img/Manthulir Green2.webp">

                <div class="card border-0 shadow-sm">
                    <div class="overflow-hidden d-flex align-items-center justify-content-center"
                        style="height:220px;">
                        <img src="assets/img/Manthulir Green2.webp"
                            class="w-100"
                            style="max-height:220px; object-fit:contain; transition:.3s">
                    </div>
                    <div class="card-body py-3">
                        <h6 class="mb-1">Banarasi Silk Saree</h6>
                        <p class="text-muted mb-2">₹2499</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-dark btn-sm w-100 add-cart">Add to Cart</button>
                            <button class="btn btn-outline-danger btn-sm remove-wishlist">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-3 col-sm-6 wishlist-item"
                data-id="2"
                data-name="Designer Kurti Set"
                data-price="1799"
                data-img="assets/img/pink2.webp">

                <div class="card border-0 shadow-sm">
                    <div class="overflow-hidden d-flex align-items-center justify-content-center"
                        style="height:220px;">
                        <img src="assets/img/pink2.webp"
                            class="w-100"
                            style="max-height:220px; object-fit:contain; transition:.3s">
                    </div>
                    <div class="card-body py-3">
                        <h6 class="mb-1">Designer Kurti Set</h6>
                        <p class="text-muted mb-2">₹1799</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-dark btn-sm w-100 add-cart">Add to Cart</button>
                            <button class="btn btn-outline-danger btn-sm remove-wishlist">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-3 col-sm-6 wishlist-item"
                data-id="3"
                data-name="Cotton Daily Wear Saree"
                data-price="1299"
                data-img="assets/img/red2.webp">

                <div class="card border-0 shadow-sm">
                    <div class="overflow-hidden d-flex align-items-center justify-content-center"
                        style="height:220px;">
                        <img src="assets/img/red2.webp"
                            class="w-100"
                            style="max-height:220px; object-fit:contain; transition:.3s">
                    </div>
                    <div class="card-body py-3">
                        <h6 class="mb-1">Cotton Daily Wear Saree</h6>
                        <p class="text-muted mb-2">₹1299</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-dark btn-sm w-100 add-cart">Add to Cart</button>
                            <button class="btn btn-outline-danger btn-sm remove-wishlist">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Empty -->
        <div class="text-center mt-5 empty-wishlist d-none">
            <i class="fa-regular fa-heart fa-3x mb-3 text-muted"></i>
            <p class="text-muted">Your wishlist is empty</p>
        </div>

    </section>

    <!-- ================= CART MODAL ================= -->
    <div class="modal fade" id="cartModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Shopping Cart</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body cart-items"></div>

                <div class="modal-footer justify-content-between">
                    <strong>Total: ₹<span class="cart-total">0</span></strong>
                    <button class="btn btn-success">Checkout</button>
                </div>

            </div>
        </div>
    </div>

    <?php include 'common/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js?v=1.3"></script>
    <script src="assets/js/wishlist.js?v=1.4"></script>

</body>

</html>