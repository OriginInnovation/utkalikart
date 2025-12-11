<style>
    .mega-dropdown {
        position: static;
    }

    .mega-dropdown:hover .mega-menu {
        display: block;
    }

    .mega-menu {
        width: 100%;
        position: absolute;
        left: 0;
        top: 100%;
        background: #fff;
        z-index: 9999;
        display: none;
        border-radius: 20px;
    }

    .mega-list li {
        padding: 8px 0;
    }

    .mega-list li a {
        text-decoration: none;
        color: #000;
        font-weight: 500;
    }

    .mega-card {
        padding: 12px;
        background: #f5f3ef;
        border-radius: 12px;
        position: relative;
        transition: 0.2s;
    }

    .mega-card:hover {
        transform: translateY(-3px);
        background: #eceae6;
    }

    .mega-card .arrow {
        position: absolute;
        right: 15px;
        bottom: 15px;
        font-size: 22px;
        opacity: 0.6;
    }
</style>

<div id="offersBarContainer">
    <div id="offersBar">🎉 Summer Sale! Flat 25% OFF on all ethnic wear | Use Code: INDIASALE25 | Free Shipping on
        orders over ₹999
    </div>
</div>

<div class="ec-header-top">
    <div class="cartOverlay" id="overlay-mobile"></div>
    <div class="cartPanel" id="cartPanel-mobile">
        <div class="cartHeader">
            My Cart <span class="cart-count-label" id="cartCount-mobile">(1 item)</span>
            <span class="closeCart" id="cartCloseBtn-mobile">&times;</span>
        </div>

        <div class="cartDiscount">
            <p id="offerText">Add 1 more and get <b>Extra 7% OFF</b></p>
            <div class="progressBar"><span id="progressBar"></span></div>
            <div class="progressLabels">
                <div>2 items<br><b>EXTRA 7% OFF</b></div>
                <div>3 items<br><b>EXTRA 10% OFF</b></div>
            </div>
        </div>

        <div id="cartItems">

            <div class="item">
                <img
                    src="https://assets.ajio.com/medias/sys_master/root/20230817/YJr8/64dd47b6eebac147fc9c4a34/-473Wx593H-469430412-tan-MODEL.jpg" />
                <div class="item-details">
                    <h4>Crossover Brogues : Tan</h4>
                    <div class="price-line">Rs. 5,199 <span class="price">Rs. 2749</span> <span class="green-text">47%
                            OFF</span></div>
                    <div class="qty-control">
                        <button class="qty-dec">−</button>
                        <span class="qty">1</span>
                        <button class="qty-inc">+</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="recommend">
            <h5>Top Picks for Max Savings 🚀</h5>
            <div class="recommend-item">
                <img src="" />
                <div class="recommend-details">
                    <h6>Sole Max Slip Ons : Ultra Black</h6>
                    <p>Rs. 2,999</p>
                    <div class="price">Rs. 1529</div>
                </div>
                <button class="add-btn">ADD +</button>
            </div>
        </div>

        <div class="subtotal">Subtotal: Rs. <span id="subtotal">2749</span>
            <button data-bs-toggle="modal" data-bs-target="#buyNowUnq_CheckoutPanel" class="checkout-btn">PROCEED TO
                CHECKOUT</button>
        </div>
    </div>

</div>

<nav class="navbar navbar-expand-lg od-nav-bar sticky-top py-2 d-none d-lg-flex bg-white border-bottom shadow-sm">
    <div class="container-fluid px-4 d-flex justify-content-between align-items-center">

        <!-- LOGO -->
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/ecommerce_logo_maker.png" alt="Logo" class="p-2 img-fluid" width="150">
        </a>

        <!-- LEFT NAV LINKS -->
        <ul class="navbar-nav ms-3 d-flex align-items-center gap-4 fw-bold">
            <li class="nav-item">
                <a class="nav-link" href="#">New Arrivals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Offers</a>
            </li>
            <li class="nav-item dropdown mega-dropdown">
                <a class="nav-link" href="#" id="sareeMenu">Sarees & Kurti</a>

                <!-- Mega Menu -->
                <div class="mega-menu shadow-lg p-4 rounded-4">
                    <div class="row">

                        <!-- LEFT SIDE LIST -->
                        <div class="col-3 border-end">
                            <h6 class="fw-bold mb-3">Featured:</h6>
                            <ul class="list-unstyled mega-list">
                                <li><a href="#">Best Selling</a></li>
                                <li><a href="#">Trending</a></li>
                                <li><a href="#">All Products</a></li>
                            </ul>

                            <!-- Banner -->
                            <div class="mt-4">
                                <img src="https://via.placeholder.com/250x120?text=SALE+50%25+OFF" class="img-fluid rounded-3">
                            </div>
                        </div>

                        <!-- RIGHT SIDE CATEGORY CARDS -->
                        <div class="col-9">
                            <div class="row g-4">

                                <!-- Card 1 -->
                                <div class="col-3">
                                    <div class="mega-card">
                                        <img src="assets/img/black.webp" class="img-fluid rounded" style="height: 70px;">
                                        <p class="mt-2 fw-semibold">Silk Sarees</p>
                                        <span class="arrow">›</span>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-3">
                                    <div class="mega-card">
                                        <img src="assets/img/cotton.webp" class="img-fluid rounded" style="height: 70px;">
                                        <p class="mt-2 fw-semibold">Cotton Sarees</p>
                                        <span class="arrow">›</span>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-3">
                                    <div class="mega-card">
                                        <img src="assets/img/Manthulir Green.webp" class="img-fluid rounded" style="height: 70px;">
                                        <p class="mt-2 fw-semibold">Designer Kurtis</p>
                                        <span class="arrow">›</span>
                                    </div>
                                </div>

                                <!-- Card 4 -->
                                <div class="col-3">
                                    <div class="mega-card">
                                        <img src="assets/img/pink.webp" class="img-fluid rounded" style="height: 70px;">
                                        <p class="mt-2 fw-semibold">Anarkali Kurtis</p>
                                        <span class="arrow">›</span>
                                    </div>
                                </div>

                                <!-- Card 5 -->
                                <div class="col-3">
                                    <div class="mega-card">
                                        <img src="assets/img/red.webp" class="img-fluid rounded" style="height: 70px;">
                                        <p class="mt-2 fw-semibold">Lehenga Style Kurtis</p>
                                        <span class="arrow">›</span>
                                    </div>
                                </div>

                                <!-- Card 6 -->
                                <div class="col-3">
                                    <div class="mega-card">
                                        <img src="assets/img/sky.webp" class="img-fluid rounded" style="height: 70px;">
                                        <p class="mt-2 fw-semibold">All Products</p>
                                        <span class="arrow">›</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </li>

        </ul>

        <!-- RIGHT SIDE: SEARCH + WISHLIST + CART -->
        <div class="d-flex align-items-center gap-4 ms-auto">

            <!-- BIG SEARCH BAR -->
            <div class="position-relative" style="width: 350px;">
                <input type="text" class="form-control rounded-pill ps-4" placeholder="Search for products...">
                <i class="fa-solid fa-magnifying-glass position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>

            <!-- WISHLIST -->
            <a href="#" class="text-dark">
                <i class="fa-regular fa-heart fs-4"></i>
            </a>

            <!-- CART -->
            <a href="#" class="text-dark">
                <i class="fa-solid fa-bag-shopping fs-4"></i>
            </a>

        </div>

    </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const rightSide = document.querySelector(".mega-menu .col-9 .row");

    const templates = {
        "Best Selling": `
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">Best 1</p><span class="arrow">›</span></div></div>
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">Best 2</p><span class="arrow">›</span></div></div>
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">Best 3</p><span class="arrow">›</span></div></div>
        `,
        "Trending": `
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">Trend 1</p><span class="arrow">›</span></div></div>
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">Trend 2</p><span class="arrow">›</span></div></div>
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">Trend 3</p><span class="arrow">›</span></div></div>
        `,
        "All Products": `
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">All 1</p><span class="arrow">›</span></div></div>
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">All 2</p><span class="arrow">›</span></div></div>
            <div class="col-4"><div class="mega-card"><img src="assets/img/sky.webp" style="height: 70px;"><p class="mt-2 fw-semibold">All 3</p><span class="arrow">›</span></div></div>
        `
    };

    document.querySelectorAll(".mega-list li a").forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const txt = this.textContent.trim();
            rightSide.innerHTML = templates[txt] || "";
        });
    });
});
</script>



<div class="modal fade" id="trackingOrderModal" tabindex="-1" aria-labelledby="trackingOrderLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="trackingOrderLabel">Track Your Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="u-tracking-card">

                    <div class="u-tracking-header mb-3">
                        <p class="text-muted mb-0">
                            Order ID: <strong>#123456789</strong> • Placed on: <strong>June 1,
                                2025</strong>
                        </p>
                    </div>

                    <div class="u-stepper d-flex justify-content-between flex-wrap text-center mb-4">
                        <div class="u-step u-completed">
                            <div class="u-icon"><i class="bi bi-cart-check"></i></div>
                            <div class="u-label">Order Placed</div>
                        </div>
                        <div class="u-step u-completed">
                            <div class="u-icon"><i class="bi bi-box-seam"></i></div>
                            <div class="u-label">Packed</div>
                        </div>
                        <div class="u-step u-completed">
                            <div class="u-icon"><i class="bi bi-truck"></i></div>
                            <div class="u-label">Shipped</div>
                        </div>
                        <div class="u-step u-active">
                            <div class="u-icon"><i class="bi bi-geo-alt"></i></div>
                            <div class="u-label">Out for Delivery</div>
                        </div>
                        <div class="u-step u-inactive">
                            <div class="u-icon"><i class="bi bi-house-door"></i></div>
                            <div class="u-label">Delivered</div>
                        </div>
                    </div>

                    <h5 class="mb-3">Shipment Details</h5>
                    <ul class="list-group u-details-list">
                        <li class="list-group-item"><strong>Courier:</strong> Bluedart Logistics
                        </li>
                        <li class="list-group-item"><strong>Tracking No:</strong> BD123456789IN</li>
                        <li class="list-group-item"><strong>Estimated Delivery:</strong> June 5,
                            2025</li>
                        <li class="list-group-item">
                            <strong>Shipping Address:</strong><br>
                            Rojalin Das<br>
                            123 Fashion Street, Bhubaneswar, Odisha, 751001
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="buyNowUnq_CheckoutPanel">
    <div class="buyNowUnq-panel">
        <div class="mobile-fixed-top">
            <div class="buyNowUnq-header">
                <div class="d-flex align-items-center gap-2">
                    <img src="https://assets.website-files.com/62c161821422736b41295328/62c1626f2129188e7343e06a_logo.png"
                        alt="Logo">
                    <span class="fw-semibold small"></span>
                </div>
                <button id="buyNowUnq_CloseBtn" class="btn btn-close" aria-label="Close"></button>
            </div>
            <div class="buyNowUnq-step-indicator">
                <div class="buyNowUnq-step-label active" data-step="1">
                    <i class="bi bi-check-circle-fill icon-check"></i><span
                        class="icon-circle">1</span><span>Mobile</span>
                </div>
                <div class="buyNowUnq-step-label" data-step="2">
                    <i class="bi bi-check-circle-fill icon-check"></i><span
                        class="icon-circle">2</span><span>Address</span>
                </div>
                <div class="buyNowUnq-step-label" data-step="3">
                    <i class="bi bi-check-circle-fill icon-check"></i><span class="icon-circle">3</span><span>Pay</span>
                </div>
            </div>
        </div>
        <div class="buyNowUnq-scroll-content">
            <h6 id="buyNowUnq_ToggleSummary" class="bg-white">
                Order Summary <i class="bi bi-chevron-down" id="buyNowUnq_SummaryIcon"></i>
            </h6>
            <div class="d-flex justify-content-between px-4 py-2 bg-white summary-price">
                <strong>Total:</strong>
                <strong id="totalPrice">₹2,499</strong>
            </div>
            <div class="border rounded p-3 mt-3 mx-4 d-none" id="buyNowUnq_ProductDetails">
                <div class="d-flex mb-2 gap-2">
                    <img src="https://via.placeholder.com/60" class="rounded" alt="Product">
                    <div>
                        <strong>Eco-friendly Sneakers</strong><br>
                        <span class="text-muted small">Color: White | Size: UK 9</span>
                        <span>₹2,499</span>
                    </div>
                </div>
            </div>
            <div id="buyNowUnq_Step1" class="buyNowUnq-step-content active">
                <label class="form-label text-muted small">Hey! Welcome back</label>
                <div id="mobileDisplayMode" class="d-none d-flex align-items-center mb-3">
                    <div class="input-group">
                        <span class="input-group-text fw-bold">+91</span>
                        <input type="tel" class="form-control" id="displayedMobile" value="" readonly>
                    </div>
                    <button class="btn btn-outline-secondary btn-sm ms-2" id="editMobileBtn">Edit</button>
                </div>
                <div id="mobileEditMode">
                    <label class="form-label text-muted small">Enter Mobile Number</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">+91</span>
                        <input type="tel" class="form-control" id="mobileNumberInput" name="mobileNumber"
                            placeholder="Enter Mobile Number" required>
                    </div>
                </div>
                <p class="text-muted small mb-3">
                    <label class="form-check-label">
                        <input type="checkbox" name="notifyMe" class="form-check-input me-1" checked>
                        Notify me for orders, updates & offers
                    </label>
                </p>
            </div>
            <div id="buyNowUnq_Step2" class="buyNowUnq-step-content">
                <label class="form-label fw-semibold">Deliver To</label>
                <div id="addressDisplayMode" class="d-none border rounded p-3 bg-light position-relative mb-3">
                    <strong><span id="displayFullName"></span></strong><br>
                    <span id="displayAddressLine"></span><br>
                    <span class="text-muted" id="displayEmail"></span>
                    <button class="btn btn-link btn-sm position-absolute top-0 end-0 me-2 mt-2 p-0"
                        id="editAddressBtn">Click to
                        Edit</button>
                </div>
                <div id="addressEditMode">
                    <h6 class="fw-bold mb-3">Add New Address / Edit Address</h6>
                    <input type="text" name="pincode" class="form-control mb-3" placeholder="Pincode *" required>
                    <div class="d-flex gap-2 mb-3">
                        <input type="text" name="city" class="form-control" placeholder="City *" readonly>
                        <input type="text" name="state" class="form-control" placeholder="State *" readonly>
                    </div>
                    <input type="text" name="fullName" class="form-control mb-3" placeholder="Full Name *" required>
                    <input type="email" name="emailAddress" class="form-control mb-3" placeholder="Email Address *"
                        required>
                    <textarea name="fullAddress" class="form-control mb-3" rows="2" placeholder="Complete Address *"
                        required></textarea>
                    <input type="text" name="landmark" class="form-control mb-3"
                        placeholder="House,Floor,Landmark (Optional)">
                </div>
            </div>
            <div id="buyNowUnq_Step3" class="buyNowUnq-step-content">
                <div class="coupon-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fw-bold mb-0">ENTER COUPON CODE</h6>
                        <a href="#" class="small text-decoration-none" id="viewCouponsLink">Click to view coupons ></a>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" id="couponInput" class="form-control" placeholder="Enter coupon code">
                        <button class="btn btn-dark" id="applyCouponBtn">Apply</button>
                    </div>
                    <div id="couponAppliedText" class="alert alert-success d-none p-2 py-1 small">
                        ✅ <strong>FLAT100</strong> Applied — ₹100 OFF
                    </div>
                    <div id="couponError" class="text-danger small d-none">❌ Invalid coupon. Try again.</div>
                </div>
                <label class="form-label fw-bold">Payment Options</label>
                <p class="text-success small mb-3">Get Extra Cashback on Mobikwik UPI & Wallet & Amazon Pay Wallet
                </p>
                <div class="buyNowUnq-payment-option" data-payment-type="upi">
                    <span class="header-badge">Faster Delivery + cashback</span>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <img src="https://img.icons8.com/color/48/000000/upi.png" alt="UPI" class="payment-logo">
                            <h6 class="d-inline-block mb-0 align-middle">UPI</h6>
                            <small class="text-muted d-block ms-4">Paytm, PhonePe, GPay</small>
                        </div>
                        <span class="fw-bold">₹<span id="upiPrice">2499</span> <i
                                class="bi bi-chevron-right"></i></span>
                    </div>
                </div>
                <div class="buyNowUnq-payment-option" data-payment-type="card">
                    <span class="header-badge">Faster Delivery</span>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <img src="https://img.icons8.com/fluency/48/000000/bank-card.png" alt="Cards"
                                class="payment-logo">
                            <h6 class="d-inline-block mb-0 align-middle">Debit/Credit Cards</h6>
                            <small class="text-muted d-block ms-4">Visa, Mastercard, Rupay</small>
                        </div>
                        <span class="fw-bold">₹<span id="cardPrice">2499</span> <i
                                class="bi bi-chevron-right"></i></span>
                    </div>
                </div>
                <div class="buyNowUnq-payment-option" data-payment-type="emi">
                    <span class="header-badge">NEW - Pay with EMI</span>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <img src="https://img.icons8.com/ios-filled/50/000000/money-bag-euro.png" alt="EMI"
                                class="payment-logo">
                            <h6 class="d-inline-block mb-0 align-middle">Pay Later</h6>
                            <small class="text-muted d-block ms-4">0% EMI on UPI • by Snapmint</small>
                        </div>
                        <span class="fw-bold">₹1000 now + 2 EMIs <i class="bi bi-chevron-right"></i></span>
                    </div>
                </div>
                <div class="buyNowUnq-payment-option" data-payment-type="wallet">
                    <span class="header-badge">Get cashback</span>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <img src="https://img.icons8.com/color/48/000000/wallet--v1.png" alt="Wallet"
                                class="payment-logo">
                            <h6 class="d-inline-block mb-0 align-middle">Wallets</h6>
                            <small class="text-muted d-block ms-4">Mobikwik, Amazon Pay, Freecharge etc.</small>
                        </div>
                        <span class="fw-bold">₹<span id="walletPrice">2499</span> <i
                                class="bi bi-chevron-right"></i></span>
                    </div>
                </div>
                <div class="buyNowUnq-payment-option" data-payment-type="cod">
                    <h6 class="mb-0">Cash on Delivery</h6>
                </div>
                <div id="payMethodError" class="text-danger small mt-2 d-none">⚠️ Please select a payment method
                </div>
            </div>
        </div>
        <div class="mobile-fixed-bottom">
            <div class="buyNowUnq-fixed-bottom-bar">
                <button id="buyNowUnq_StepActionBtn" class="btn btn-dark w-100">Continue →</button>
            </div>
            <div class="buyNowUnq-footer">
                <p class="mb-1"><a href="#" class="text-decoration-none text-muted">Privacy Policy</a> and <a href="#"
                        class="text-decoration-none text-muted">T&C</a>.</p>
                <div class="d-flex justify-content-center gap-3 mt-2">
                    <img src="https://img.icons8.com/color/24/000000/verified-account.png" alt="Verified"
                        title="Verified Merchant">
                    <img src="https://img.icons8.com/color/24/000000/trust.png" alt="Trust" title="Secure Payments">
                    <img src="https://img.icons8.com/color/24/000000/warranty.png" alt="Warranty"
                        title="Verified Website">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="buyNowUnq_OffersBenefitsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content m-3">
            <div class="modal-header">
                <h5 class="modal-title">Offers & Benefits</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="offersModalCouponInput" placeholder="Enter coupon code"
                        aria-label="Enter coupon code">
                    <button class="btn btn-dark" id="offersModalApplyCouponBtn">Apply</button>
                </div>
                <ul class="nav nav-pills mb-3 d-flex justify-content-center gap-2 flex-wrap" id="offersTab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="active-coupons-tab" data-bs-toggle="tab"
                            data-bs-target="#active-coupons" type="button" role="tab" aria-controls="active-coupons"
                            aria-selected="true">Active Coupons</button>
                    </li>
                </ul>

                <div class="tab-content" id="offersTabContent">
                    <div class="tab-pane fade show active" id="active-coupons" role="tabpanel"
                        aria-labelledby="active-coupons-tab">
                        <p class="text-muted small">No active coupons available right now.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="buyNowUnq_OnlinePaymentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content m-2">
            <div class="modal-header py-2">
                <h5 class="modal-title fs-6">Complete your Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
                    <img src="https://img.icons8.com/color/96/000000/paytm.png" alt="Paytm"
                        class="upi-app-logo img-fluid">
                    <img src="https://img.icons8.com/color/96/000000/phone-pe.png" alt="PhonePe"
                        class="upi-app-logo img-fluid">
                    <img src="https://img.icons8.com/color/96/000000/google-pay.png" alt="Google Pay"
                        class="upi-app-logo img-fluid">
                    <img src="https://img.icons8.com/fluency/96/000000/bhim.png" alt="BHIM"
                        class="upi-app-logo img-fluid">
                    <img src="https://img.icons8.com/color/96/000000/amazon-pay.png" alt="Amazon Pay"
                        class="upi-app-logo img-fluid">
                </div>


                <div class="online-option-card selected mb-3 p-2" data-online-method="qr">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_many_applications.png"
                                alt="QR Code" class="logo" style="width: 50px;">
                            <span class="small">Open any UPI App & scan QR Code to pay</span>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>


                <div class="qr-code-box text-center mb-3" id="qrCodeBox">
                    <img class="img-fluid" style="max-width: 180px;"
                        src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=upi://pay?pa=your_upi_id@bank&pn=YourName&mc=0000&tid=1234567890&tr=ORDER123&am=2999&cu=INR"
                        alt="UPI QR Code">
                    <button class="btn btn-outline-secondary btn-sm mt-2">Click to show QR</button>
                </div>

                <div class="text-center my-2 text-muted fw-semibold small">OR</div>

                <div class="online-option-card mb-3 p-2" data-online-method="upi-id">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://img.icons8.com/ios-glyphs/30/000000/upi.png" alt="UPI ID" class="logo"
                                style="width: 30px;">
                            <span class="small">Pay via UPI ID</span>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>

                <div id="upiIdInputSection" class="mb-3 d-none">
                    <div class="upi-input-group d-flex align-items-center gap-2">
                        <input type="text" id="upiInput" name="upiId" class="form-control form-control-sm"
                            placeholder="Enter your UPI ID">
                        <button class="btn btn-primary btn-sm" id="upiPayBtn">Pay</button>
                    </div>
                    <small class="text-muted">You will receive payment request on your UPI App</small>
                </div>

                <div class="text-center my-2 text-muted fw-semibold small">OR</div>
                <div class="online-option-card p-2" data-online-method="request-someone">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-link-45deg fs-5"></i>
                            <span class="small">Request Someone Else to Pay</span>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </div>
                    <small class="text-muted d-block mt-2">Share this payment link with your friend or family and ask
                        them to make the payment for you</small>
                </div>
            </div>

            <div class="modal-footer py-2">
                <button class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#orderConfirmedModal">
                    Simulate Order‑Confirmed
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="buyNowUnq_SuccessModal" tabindex="-1" aria-hidden="true">
    <div class="modal fade" id="orderConfirmedModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content bg-transparent border-0">
                <section class="d-flex justify-content-center align-items-center p-2">
                    <div class="cn-card shadow-lg text-white text-center p-4 rounded-4 ">
                        <div id="cn-lottie" class="mb-3"></div>

                        <h1 class="cn-title mb-2 fs-4 fw-bold">Order Confirmed!</h1>
                        <p class="cn-msg mb-4 small">
                            Thank you for your purchase! Your order is being prepared and will be shipped shortly.
                        </p>

                        <div class="cn-info text-start mb-4 small">
                            <p><strong>Order Number:</strong> <span>#987654321</span></p>
                            <p><strong>Order Date:</strong> <span>June 3, 2025</span></p>
                            <p><strong>Total Paid:</strong> <span>$149.99</span></p>
                        </div>

                        <div class="cn-buttons d-flex gap-3 justify-content-center flex-column flex-sm-row">
                            <a href="index.php" class="btn btn-light cn-shop fw-semibold px-4">Continue Shopping</a>
                            <a href="profile_page.php" class="btn btn-outline-light cn-outline px-4">View Order
                                Details</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="buyNowUnq_ExitModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Exit Checkout?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-semibold">Why are you exiting?</p>
                <div class="form-check"><input type="radio" class="form-check-input" name="buyNowUnq_exitReason">Too
                    complicated</div>
                <div class="form-check"><input type="radio" class="form-check-input" name="buyNowUnq_exitReason">Changed
                    mind
                </div>
                <div class="form-check"><input type="radio" class="form-check-input" name="buyNowUnq_exitReason">Price
                    not
                    suitable</div>
                <div class="form-check mb-3"><input type="radio" class="form-check-input"
                        name="buyNowUnq_exitReason">Other
                </div>
                <textarea class="form-control mb-3" rows="2" placeholder="Additional feedback (optional)"></textarea>
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Continue Checkout</button>
                    <button class="btn btn-danger" id="buyNowUnq_ConfirmExit">Exit Anyway</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="arLoginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content ar-modal-wrapper d-flex flex-md-row flex-column">
            <div class="col-md-6 ar-left-box">
                <img src="https://creativelogodesign.us/assets/images/ecommerce_logo_maker.png" alt="Logo" class="mb-4"
                    width="60">
                <h6 class="mb-3">Begin Your Comfort Journey</h6>
                <div class="mb-3"><i class="bi bi-star-fill ar-info-icon"></i><strong>7 Days Free Exchange</strong>
                    <p>Seamless exchanges within 7 days.</p>
                </div>
                <div class="mb-3"><i class="bi bi-star-fill ar-info-icon"></i><strong>2M+ Happy Customers</strong>
                    <p>Join our family of delighted customers.</p>
                </div>
                <div><i class="bi bi-star-fill ar-info-icon"></i><strong>Proudly Made in India</strong>
                    <p>Expertly crafted with Indian pride.</p>
                </div>
            </div>

            <div class="col-md-6 bg-white ar-step" id="arStepMobile">
                <h5 class="fw-bold mb-3">Step into Comfort</h5>
                <p>Enter your mobile number to Login/Signup</p>
                <div class="input-group mb-3">
                    <span class="input-group-text"><img src="https://flagcdn.com/in.svg" width="20"> +91</span>
                    <input type="tel" id="arMobile" maxlength="10" class="form-control"
                        placeholder="Enter Mobile Number" />
                </div>
                <button class="btn btn-dark w-100" id="arContinueBtn">Submit</button>
                <small class="d-block mt-3 text-muted">
                    I accept Privacy Policy and T&Cs.
                </small>
            </div>

            <div class="col-md-6 bg-white ar-step d-none text-center" id="arStepOtp">
                <h5 class="fw-bold mb-2">OTP Verification</h5>
                <p class="text-muted">We have sent a verification code to +91 <span id="arShowMobile"></span></p>
                <div class="d-flex justify-content-center gap-2 my-3">
                    <input type="text" maxlength="1" class="ar-otp-input" />
                    <input type="text" maxlength="1" class="ar-otp-input" />
                    <input type="text" maxlength="1" class="ar-otp-input" />
                    <input type="text" maxlength="1" class="ar-otp-input" />
                </div>
                <p class="small text-muted">⏱ Resend OTP in 28 sec</p>
                <button class="btn btn-dark w-100 mt-2" id="arVerifyOtpBtn" disabled>Verify</button>
                <a href="#" class="small d-block mt-3 text-decoration-underline">Trouble logging in?</a>
            </div>
            <div class="col-md-6 bg-white ar-step d-none" id="arStepSuccess">
                <div class="ar-success">
                    <i class="bi bi-check-circle-fill mb-3"></i>
                    <h5>Congratulations!</h5>
                    <p>You've successfully logged in.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar d-lg-none mob-header px-3 py-2">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <button class="btn" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="bi bi-list fs-3"></i>
        </button>
        <a class="navbar-brand " href="index.php">
            <h6>E-commerce</h6>
        </a>
        <div class="ec-header-mobile d-flex justify-content-end align-items-end d-lg-none">
            <div class="d-flex align-items-center gap-3 position-relative w-100 justify-content-end">
                <div class="position-relative">
                    <button class="btn p-0 border-0 text-dark" id="searchToggle2">
                        <i class="fa-solid fa-magnifying-glass fs-5"></i>
                    </button>
                    <div class="position-absolute searchbar-section bg-white border shadow-sm p-2 mt-2 rounded d-none"
                        id="searchBox2">
                        <input type="text" class="form-control" placeholder="Search for products...">
                    </div>
                </div>

                <div class="ar-account-container" id="ar-account-container-mobile">
                    <i class="fa-solid fa-user fs-5" id="ar-account-icon-mobile"></i>
                    <div class="ar-account-dropdown" id="ar-account-dropdown-mobile">

                        <!-- Before Login -->
                        <div id="ar-account-before-login-mobile">
                            <div class="p-3">
                                <h6>Welcome</h6>
                                <p class="text-muted small">To access account and manage orders</p>
                                <button id="ar-account-login-btn-mobile">LOGIN / SIGNUP</button>
                            </div>
                            <hr class="m-0" />
                            <div class="ar-account-item">
                                <i class="fa-solid fa-box me-2"></i> Orders
                            </div>
                            <div class="ar-account-item">
                                <i class="fa-solid fa-heart me-2"></i> Wishlist
                            </div>
                            <div class="ar-account-item d-flex justify-content-between align-items-center">
                                <span><i class="fa-solid fa-gift me-2"></i> Gift Cards</span>
                                <span class="ar-new-badge">NEW</span>
                            </div>
                        </div>

                        <!-- After Login -->
                        <div id="ar-account-after-login-mobile" class="d-none">
                            <div class="p-3">
                                <h6>Hello User</h6>
                                <p id="ar-account-mobile" class="text-muted">8249854505</p>
                            </div>
                            <hr class="m-0" />
                            <a href="profile_page.php" class="text-decoration-none">
                                <div class="ar-account-item">
                                    <i class="fa-solid fa-box me-2"></i> Orders
                                </div>
                            </a>
                            <a href="profile_page.php" class="text-decoration-none">
                                <div class="ar-account-item">
                                    <i class="fa-solid fa-heart me-2"></i> Wishlist
                                </div>
                            </a>
                            <a href="contact_us_page.php" class="text-decoration-none">
                                <div class="ar-account-item">
                                    <i class="fa-solid fa-headset me-2"></i> Contact Us
                                </div>
                            </a>
                            <a href="profile_page.php" class="text-decoration-none">
                                <div class="ar-account-item d-flex justify-content-between align-items-center">
                                    <span><i class="fa-solid fa-gift me-2"></i> Gift Cards</span>
                                    <span class="ar-new-badge">NEW</span>
                                </div>
                            </a>
                            <hr class="m-0" />
                            <a href="profile_page.php" class="text-decoration-none">
                                <div class="ar-account-item">
                                    <i class="fa-solid fa-ticket me-2"></i> Coupons
                                </div>
                            </a>
                            <a href="profile_page.php" class="text-decoration-none">
                                <div class="ar-account-item">
                                    <i class="fa-solid fa-credit-card me-2"></i> Saved Cards
                                </div>
                            </a>
                            <a href="profile_page.php" class="text-decoration-none">
                                <div class="ar-account-item">
                                    <i class="fa-solid fa-map-marker-alt me-2"></i> Saved Addresses
                                </div>
                            </a>
                            <hr class="m-0" />
                            <a href="profile_page.php" class="text-decoration-none">
                                <div class="ar-account-item">
                                    <i class="fa-solid fa-user-pen me-2"></i> Edit Profile
                                </div>
                            </a>
                            <div class="ar-account-item" id="ar-account-logout-btn-mobile">
                                <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cartIcon" id="cartOpenBtn">
                    <i class="fa fa-shopping-cart"></i>
                </div>
            </div>
        </div>
    </div>
</nav>


<div class="offcanvas offcanvas-start mob-offcanvas" id="mobileMenu">
    <div class="offcanvas-header border-bottom">
        <a class="navbar-brand" href="index.php">
            <h6>E-commerce</h6>
        </a>
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <div class="accordion" id="mobAccordion">

            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#newCollapse">NEW</button>
                </h2>
                <div id="newCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <a href="sub_categories.php">
                            <h6 class="text-dark">Sarees</h6>
                        </a>
                        <a href="sub_sub_categories.php">Sambalpuri Sarees</a>
                        <a href="sub_sub_categories.php">Bomkai Sarees</a>
                        <a href="sub_sub_categories.php">Pasapalli Sarees</a>
                        <a href="sub_sub_categories.php">Bapta Sarees</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#menCollapse">MEN</button>
                </h2>
                <div id="menCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <a href="sub_categories.php">
                            <h6 class="text-dark">Handloom Wear</h6>
                        </a>
                        <a href="sub_sub_categories.php">Sambalpuri Shirts</a>
                        <a href="sub_sub_categories.php">Bomkai Kurtas</a>
                        <a href="sub_sub_categories.php">Pasapalli Nehru Jackets</a>
                        <a href="sub_sub_categories.php">Ikat Cotton Shirts</a>
                    </div>
                    <div class="accordion-body">
                        <a href="Sub_categories.php">
                            <h6 class="text-dark">Traditional Sets</h6>
                        </a>
                        <a href="sub_sub_categories.php">Kurta & Dhoti Sets</a>
                        <a href="sub_sub_categories.php">Sherwanis</a>
                        <a href="sub_sub_categories.php">Patachitra Jackets</a>
                    </div>
                    <div class="accordion-body">
                        <a href="Sub_categories.php">
                            <h6 class="text-dark">Bottomwear</h6>
                        </a>
                        <a href="sub_sub_categories.php">Handloom Pants</a>
                        <a href="sub_sub_categories.php">Lungis & Dhotis</a>
                        <a href="sub_sub_categories.php">Cotton Pajamas</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#womenCollapse">WOMEN</button>
                </h2>
                <div id="womenCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <a href="sub_categories.php">
                            <h6 class="text-dark">Sarees</h6>
                        </a>
                        <a href="sub_sub_categories.php">Sambalpuri Sarees</a>
                        <a href="sub_sub_categories.php">Bomkai Sarees</a>
                        <a href="sub_sub_categories.php">Pasapalli Sarees</a>
                        <a href="sub_sub_categories.php">Bapta Sarees</a>
                    </div>
                    <div class="accordion-body">
                        <a href="sub_categories.php">
                            <h6 class="text-dark">Kurtis & Tops</h6>
                        </a>
                        <a href="sub_sub_categories.php">Handloom Kurtis</a>
                        <a href="sub_sub_categories.php">Patachitra Printed Tops</a>
                        <a href="sub_sub_categories.php">Crop Tops</a>
                    </div>
                    <div class="accordion-body">
                        <a href="sub_categories.php">
                            <h6 class="text-dark">Dresses & Sets</h6>
                        </a>
                        <a href="sub_sub_categories.php">Fusion Dresses</a>
                        <a href="sub_sub_categories.php">Co-ord Sets</a>
                        <a href="sub_sub_categories.php">Handloom Gowns</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#kidsCollapse">KIDS</button>
                </h2>
                <div id="kidsCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <a href="sub_categories.php">
                            <h6 class="text-dark">Boys</h6>
                        </a>
                        <a href="sub_sub_categories.php">Sambalpuri Shirts</a>
                        <a href="sub_sub_categories.php">Handloom Kurta Sets</a>
                        <a href="sub_sub_categories.php">Cotton Shorts</a>
                    </div>
                    <div class="accordion-body">
                        <a href="sub_categories.php">
                            <h6 class="text-dark">Girls</h6>
                        </a>
                        <a href="sub_sub_categories.php">Bomkai Frocks</a>
                        <a href="sub_sub_categories.php">Sambalpuri Skirts</a>
                        <a href="sub_sub_categories.php">Ikat Tops</a>
                    </div>
                    <div class="accordion-body">
                        <a href="sub_categories.php">
                            <h6 class="text-dark">Festival Wear</h6>
                        </a>
                        <a href="sub_sub_categories.php">Mini Sarees</a>
                        <a href="sub_sub_categories.php">Sherwani Sets</a>
                        <a href="sub_sub_categories.php">Rakhi Edit</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#offersCollapse">
                        OFFERS
                    </button>
                </h2>
                <div id="offersCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <a href="#">All Sale</a>
                        <a href="#">Deals</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#aboutCollapse">
                        ABOUT US
                    </button>
                </h2>
                <div id="aboutCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <a href="contact_us_page.php">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#helpCollapse">
                        HELP
                    </button>
                </h2>
                <div id="helpCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <a href="profile_page.php">Returns & Exchange</a>
                        <a href="profile_page.php">Shipping</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mob-actions mt-auto p-3 border-top">
            <div class="mob-action-grid">
                <a href="profile_page.php" class="mob-action-item"><i class="bi bi-person-circle"></i> My
                    Account</a>
                <a href="profile_page.php" class="mob-action-item"><i class="bi bi-box-seam"></i> My Orders</a>
                <a href="" class="mob-action-item"><i class="bi bi-truck"></i> Track Order</a>
                <a href="profile_page.php" class="mob-action-item"><i class="bi bi-gift"></i> Gift Cards</a>
            </div>
            <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#arLoginModal">
                Open Login Modal
            </button>
            <div class="mob-social-icons mt-4 d-flex justify-content-center gap-3">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>