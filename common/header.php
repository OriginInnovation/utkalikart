<style>
    .nav-text-link {
        color: rgb(255 81 0) !important;
        cursor: pointer !important;
    }

    .nav-text-link:hover {
        color: rgb(255 81 0) !important;
        cursor: pointer !important;
    }

    .mega-dropdown {
        position: relative;
    }

    .mega-dropdown .mega-menu {
        display: none;
        position: absolute;
        top: 70%;
        left: 0;
        width: 100%;
        background-color: #fff;
        z-index: 999;
        padding: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        border-radius: 1rem;
    }

    .mega-menu.show {
        display: block;
    }

    .dropdown-arrow {
        transition: 0.3s;
    }

    .dropdown-arrow.open {
        transform: rotate(180deg);
    }


    .mega-col li a {
        display: block;
        padding: 4px 0;
        color: #333;
        text-decoration: none;
        font-size: 14.5px;
    }

    .mega-col li a:hover {
        color: rgb(255 81 0) !important;
        /* matches yellow highlight in image */
    }

    .mega-menu h6 {
        font-size: 15px;
    }

    .mega-menu .col-4 {
        border-right: 1px solid #eee;
    }

    .mega-menu .col-4:last-child {
        border-right: none;
    }

    .profile-wrapper {
        position: relative;
        display: inline-block;
    }

    .profile-popup {
        position: absolute;
        top: 45px;
        right: -103px;
        width: 260px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);

        /* Animation part */
        opacity: 0;
        transform: translateX(30px);
        pointer-events: none;
        transition: all 0.35s ease;

        z-index: 9999;
    }

    .profile-popup.active {
        opacity: 1;
        transform: translateX(0);
        pointer-events: auto;
    }


    .popup-header {
        padding: 15px;
        border-bottom: 1px solid #eee;
    }

    .popup-header h6 {
        margin: 0;
        font-weight: 600;
    }

    .popup-header p {
        font-size: 13px;
        color: #666;
        margin: 5px 0 10px;
    }

    .login-btn {
        width: 100%;
        background: #000;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
    }

    .popup-menu {
        list-style: none;
        margin: 0;
        padding: 10px 0;
    }

    .popup-menu li {
        padding: 10px 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        font-size: 14px;
    }

    .popup-menu li:hover {
        background: #f5f5f5;
    }

    .new-badge {
        margin-left: auto;
        background: #000;
        color: #fff;
        font-size: 10px;
        padding: 2px 6px;
        border-radius: 4px;
    }

    /* ------------------ */

    .cart-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        opacity: 0;
        pointer-events: none;
        transition: 0.3s;
        z-index: 9998;
    }

    .cart-drawer {
        position: fixed;
        top: 0;
        right: 0;
        width: 380px;
        max-width: 100%;
        height: 100vh;
        background: #fff;
        transform: translateX(100%);
        transition: 0.35s ease;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        overflow-y: auto;
    }

    .cart-drawer.active {
        transform: translateX(0);
    }

    .cart-overlay.active {
        opacity: 1;
        pointer-events: auto;
    }

    /* HEADER */
    .cart-header {
        display: flex;
        justify-content: space-between;
        padding: 15px;
        border-bottom: 1px solid #eee;
    }

    .cart-header button {
        font-size: 26px;
        background: none;
        border: none;
        cursor: pointer;
    }

    /* OFFER */
    .cart-offer {
        padding: 15px;
        background: #f6f6f6;
    }

    .progress-bar {
        height: 6px;
        background: #000;
        width: 0%;
        border-radius: 5px;
        transition: width 0.3s ease;
    }

    .offer-row {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
    }

    /* ITEM */
    .cart-item {
        display: flex;
        gap: 10px;
        padding: 15px;
        border-bottom: 1px solid #eee;
    }

    .cart-item img {
        width: 70px;
        height: 70px;
    }

    .qty {
        display: flex;
        gap: 10px;
        margin-top: 8px;
    }

    .qty button {
        width: 28px;
        height: 28px;
        border: 1px solid #000;
        background: none;
        cursor: pointer;
    }

    /* SUGGEST */
    .cart-suggestion {
        padding: 15px;
    }

    .suggest-item {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .add-btn {
        margin-left: auto;
        background: #e0a21b;
        border: none;
        padding: 6px 10px;
        font-weight: 600;
    }

    /* FOOTER */
    .cart-footer {
        margin-top: auto;
        padding: 15px;
        border-top: 1px solid #eee;
    }

    .checkout-btn {
        width: 100%;
        background: #000;
        color: #fff;
        padding: 14px;
        border: none;
        font-size: 15px;
        cursor: pointer;
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

        <!-- CENTER NAV LINKS -->
        <ul class="navbar-nav mx-auto d-flex align-items-center gap-4 fw-bold">
            <li class="nav-item">
                <a class="nav-link" href="new_arrivals.php">New Arrivals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="offers.php">Offers</a>
            </li>
            <li class="nav-item dropdown mega-dropdown position-static">
                <a class="nav-link fw-bold d-flex align-items-center gap-1" href="all_categories1.php" id="sareeMenu">
                    Sarees & Kurti
                    <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
                </a>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const dropdowns = document.querySelectorAll(".mega-dropdown");

                        dropdowns.forEach(dropdown => {
                            const link = dropdown.querySelector("#sareeMenu");
                            const menu = dropdown.querySelector(".mega-menu");
                            const arrow = link.querySelector(".dropdown-arrow");

                            let isInside = false;

                            // When mouse enters dropdown (link OR menu)
                            dropdown.addEventListener("mouseenter", () => {
                                isInside = true;
                                menu.classList.add("show");
                                arrow.classList.add("open");
                            });

                            // When mouse leaves dropdown completely
                            dropdown.addEventListener("mouseleave", () => {
                                isInside = false;
                                menu.classList.remove("show");
                                arrow.classList.remove("open");
                            });
                        });
                    });
                </script>

                <div class="mega-menu shadow-lg p-4 rounded-4 bg-white">
                    <div class="row g-4">

                        <!-- Column 1 -->
                        <div class="col-4">
                            <h6 class="fw-bold nav-text-link mb-3">Sarees</h6>
                            <ul class="list-unstyled mega-col">
                                <li><a href="allcategories.php">Silk Sarees</a></li>
                                <li><a href="allcategories.php">Cotton Sarees</a></li>
                                <li><a href="allcategories.php">Chiffon Sarees</a></li>
                                <li><a href="allcategories.php">Georgette Sarees</a></li>
                                <li><a href="allcategories.php">Designer Sarees</a></li>
                                <li><a href="allcategories.php">Wedding Sarees</a></li>
                            </ul>

                            <h6 class="fw-bold nav-text-link mt-4 mb-3">Kurti Sets</h6>
                            <ul class="list-unstyled mega-col">
                                <li><a href="allcategories.php">Casual Kurtis</a></li>
                                <li><a href="allcategories.php">Party Wear Kurtis</a></li>
                                <li><a href="allcategories.php">Anarkali Kurtis</a></li>
                                <li><a href="allcategories.php">Straight Kurtis</a></li>
                                <li><a href="allcategories.php">Long Kurtis</a></li>
                            </ul>
                        </div>

                        <!-- Column 2 -->
                        <div class="col-4">
                            <h6 class="fw-bold nav-text-link mb-3">Bottoms & Dupattas</h6>
                            <ul class="list-unstyled mega-col">
                                <li><a href="allcategories.php">Leggings</a></li>
                                <li><a href="allcategories.php">Palazzos</a></li>
                                <li><a href="allcategories.php">Salwars</a></li>
                                <li><a href="allcategories.php">Dupattas</a></li>
                                <li><a href="allcategories.php">Scarves & Stoles</a></li>
                            </ul>

                            <h6 class="fw-bold nav-text-link mt-4 mb-3">Blouses & Tops</h6>
                            <ul class="list-unstyled mega-col">
                                <li><a href="allcategories.php">Saree Blouses</a></li>
                                <li><a href="allcategories.php">Casual Tops</a></li>
                                <li><a href="allcategories.php">Designer Tops</a></li>
                            </ul>
                        </div>

                        <!-- Column 3 -->
                        <div class="col-4">
                            <h6 class="fw-bold nav-text-link mb-3">Accessories & Footwear</h6>
                            <ul class="list-unstyled mega-col">
                                <li><a href="allcategories.php">Jewellery</a></li>
                                <li><a href="allcategories.php">Bags & Clutches</a></li>
                                <li><a href="allcategories.php">Footwear</a></li>
                                <li><a href="allcategories.php">Belts & Waistbands</a></li>
                                <li><a href="allcategories.php">Hair Accessories</a></li>
                            </ul>

                            <h6 class="fw-bold nav-text-link mt-4 mb-3">Fabrics & Unstitched</h6>
                            <ul class="list-unstyled mega-col">
                                <li><a href="allcategories.php">Dress Materials</a></li>
                                <li><a href="allcategories.php">Unstitched Suits</a></li>
                                <li><a href="allcategories.php">Fabric Rolls</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </li>
        </ul>

        <!-- RIGHT SIDE: SEARCH + PROFILE + WISHLIST + CART -->
        <div class="d-flex align-items-center gap-3 ms-auto">

            <!-- SEARCH BAR -->
            <div class="position-relative" style="width: 350px;">
                <input type="text" class="form-control rounded-pill ps-4" placeholder="Search for products...">
                <i class="fa-solid fa-magnifying-glass position-absolute top-50 end-0 translate-middle-y me-3" style="color: rgb(227 101 42);"></i>
            </div>

            <!-- PROFILE ICON -->
            <div class="profile-wrapper">
                <a href="javascript:void(0)" id="profileIcon" class="text-dark">
                    <i class="fa-regular fa-circle-user fs-4" style="color: rgb(227 101 42);"></i>
                </a>

                <!-- PROFILE POPUP -->
                <div class="profile-popup" id="profilePopup">
                    <div class="popup-header">
                        <h6>Welcome</h6>
                        <p>To access account and manage orders</p>
                        <button class="login-btn" data-bs-toggle="modal"
                            data-bs-target="#arLoginModal">LOGIN / SIGNUP</button>
                    </div>

                    <ul class="popup-menu">
                        <li onclick="window.location.href='profile_page.php'" style="cursor:pointer;">
                            <i class="fa-solid fa-box"></i> Profile Details
                        </li>
                        <!-- <li><i class="fa-regular fa-heart"></i> <a href="wishlist.php" class="text-decoration-none text-black">Wishlist</a></li> -->
                        <li onclick="window.location.href='contactus.php'">
                            <i class="fa-solid fa-phone"></i> Contact Us
                        </li>
                        <li class="gift">
                            <i class="fa-solid fa-gift"></i> <a href="offers.php" class="text-decoration-none text-black" class="text-decoration-none text-black">Offers</a>
                            <span class="new-badge">NEW</span>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- WISHLIST ICON -->
            <a href="wishlist.php" class="text-dark">
                <i class="fa-regular fa-heart fs-4" style="color: rgb(227 101 42);"></i> <!-- keeps wishlist subtle and clean -->
            </a>

            <!-- CART ICON -->
            <!-- CART ICON -->
            <a href="javascript:void(0)" id="cartIcon" class="text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    stroke="rgb(227, 101, 42)" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-shopping-cart">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
            </a>

            <!-- OVERLAY -->
            <div class="cart-overlay" id="cartOverlay"></div>

            <!-- CART DRAWER -->
            <div class="cart-drawer" id="cartDrawer">

                <div class="cart-header">
                    <h4>My Cart <span>(1 item)</span></h4>
                    <button id="closeCart">&times;</button>
                </div>

                <div class="cart-offer">
                    Add 1 more and get <strong>Extra 7% OFF</strong>
                    <div class="progress-bar"></div>
                    <div class="offer-row">
                        <span>2 items<br><b>EXTRA 7% OFF</b></span>
                        <span>3 items<br><b>EXTRA 10% OFF</b></span>
                    </div>
                </div>

                <!-- CART ITEM -->
                <div class="cart-item">
                    <img src="https://via.placeholder.com/70">
                    <div class="item-info">
                        <h5>Crossover Brogues · Tan</h5>
                        <p><del>Rs. 5,199</del> <b class="price">Rs. 2749</b> <span class="off">47% OFF</span></p>
                        <div class="qty">
                            <button class="minus">−</button>
                            <span class="count">1</span>
                            <button class="plus">+</button>
                        </div>
                    </div>
                </div>

                <!-- SUGGESTION -->
                <div class="cart-suggestion">
                    <h4>Top Picks for Max Savings 🚀</h4>
                    <div class="suggest-item">
                        <img src="https://via.placeholder.com/60">
                        <div>
                            <p>Sole Max Slip Ons · Ultra Black</p>
                            <b>Rs. 1529</b>
                        </div>
                        <button class="add-btn">ADD +</button>
                    </div>
                </div>

                <!-- FOOTER -->
                <div class="cart-footer">
                    <p>Subtotal: <b>Rs. 2749</b></p>
                    <button class="checkout-btn">PROCEED TO CHECKOUT</button>
                </div>

                <!-- <script>
                    const modal = new bootstrap.Modal(
                        document.getElementById('buyNowUnq_CheckoutPanel')
                    );
                    modal.show();
                </script> -->

            </div>



        </div>

    </div>
</nav>

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

<div class="modal fade" id="buyNowUnq_CheckoutPanel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content border-0">

            <!-- 🔽 TUMHARA EXISTING CONTENT (NO CHANGE) -->
            <div class="buyNowUnq-panel">

                <!-- HEADER -->
                <div class="mobile-fixed-top">
                    <div class="buyNowUnq-header">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://assets.website-files.com/62c161821422736b41295328/62c1626f2129188e7343e06a_logo.png">
                            <span class="fw-semibold small"></span>
                        </div>

                        <!-- Bootstrap close -->
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- step indicator (unchanged) -->
                    ...
                </div>

                <!-- BODY -->
                <div class="buyNowUnq-scroll-content">
                    ...
                </div>

                <!-- FOOTER -->
                <div class="mobile-fixed-bottom">
                    ...
                </div>

            </div>
            <!-- 🔼 END -->

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
            <img src="assets/img/ecommerce_logo_maker.png" alt="Logo" class="p-2 img-fluid" width="110">
        </a>
        <div class="ec-header-mobile d-flex justify-content-end align-items-end d-lg-none">
            <div class="d-flex align-items-center gap-3 position-relative w-100 justify-content-end">
                <div class="position-relative">
                    <button class="btn p-0 border-0 text-dark" id="profileIcon1">
                        <i class="fa-regular fa-circle-user fs-5" style="color: rgb(227 101 42);"></i>
                    </button>
                    <div class="position-absolute searchbar-section bg-white border shadow-sm p-2 mt-2 rounded d-none"
                        id="searchBox2">
                        <input type="text" class="form-control" placeholder="Search for products...">
                    </div>
                </div>

                <div class="ar-account-container" id="ar-account-container-mobile">
                    <a href="wishlist.php" class="text-dark">
                        <i class="fa-regular fa-heart fs-5" style="color: rgb(227 101 42);"></i>
                    </a>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="rgb(227, 101, 42)" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-shopping-cart">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
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

            <!-- NEW ARRIVALS -->
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#newArrivalsCollapse"
                        onclick="window.location.href='new_arrivals.php'">
                        New Arrivals
                    </button>
                </h2>
            </div>

            <!-- OFFERS -->
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#offersCollapse"
                        onclick="window.location.href='offers.php'">
                        Offers
                    </button>
                </h2>
            </div>

            <!-- SAREES & KURTI -->
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#sareeKurtiCollapse">
                        Sarees & Kurti
                    </button>
                </h2>

                <div id="sareeKurtiCollapse" class="accordion-collapse collapse"
                    data-bs-parent="#mobAccordion">
                    <div class="accordion-body">

                        <!-- Sarees -->
                        <h6 class="fw-bold mt-2 mob-nav-lin">Sarees</h6>
                        <a href="allcategories.php">Silk Sarees</a>
                        <a href="allcategories.php">Cotton Sarees</a>
                        <a href="allcategories.php">Chiffon Sarees</a>
                        <a href="allcategories.php">Georgette Sarees</a>
                        <a href="allcategories.php">Designer Sarees</a>
                        <a href="allcategories.php">Wedding Sarees</a>

                        <!-- Kurti Sets -->
                        <h6 class="fw-bold mt-3 mob-nav-lin">Kurti Sets</h6>
                        <a href="allcategories.php">Casual Kurtis</a>
                        <a href="allcategories.php">Party Wear Kurtis</a>
                        <a href="allcategories.php">Anarkali Kurtis</a>
                        <a href="allcategories.php">Straight Kurtis</a>
                        <a href="allcategories.php">Long Kurtis</a>

                        <!-- Bottoms -->
                        <h6 class="fw-bold mt-3 mob-nav-lin">Bottoms & Dupattas</h6>
                        <a href="allcategories.php">Leggings</a>
                        <a href="allcategories.php">Palazzos</a>
                        <a href="allcategories.php">Salwars</a>
                        <a href="allcategories.php">Dupattas</a>
                        <a href="allcategories.php">Scarves & Stoles</a>

                        <!-- Blouses -->
                        <h6 class="fw-bold mt-3 mob-nav-lin">Blouses & Tops</h6>
                        <a href="allcategories.php">Saree Blouses</a>
                        <a href="allcategories.php">Casual Tops</a>
                        <a href="allcategories.php">Designer Tops</a>

                        <!-- Accessories -->
                        <h6 class="fw-bold mt-3 mob-nav-lin">Accessories & Footwear</h6>
                        <a href="allcategories.php">Jewellery</a>
                        <a href="allcategories.php">Bags & Clutches</a>
                        <a href="allcategories.php">Footwear</a>
                        <a href="allcategories.php">Belts & Waistbands</a>
                        <a href="allcategories.php">Hair Accessories</a>

                        <!-- Fabrics -->
                        <h6 class="fw-bold mt-3 mob-nav-lin">Fabrics & Unstitched</h6>
                        <a href="allcategories.php">Dress Materials</a>
                        <a href="allcategories.php">Unstitched Suits</a>
                        <a href="allcategories.php">Fabric Rolls</a>

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


<script>
    document.addEventListener("DOMContentLoaded", function() {

        /* ================= PROFILE POPUP ================= */
        const profileIcon = document.getElementById("profileIcon");
        const profilePopup = document.getElementById("profilePopup");

        if (profileIcon && profilePopup) {
            profileIcon.addEventListener("click", function(e) {
                e.stopPropagation();
                profilePopup.classList.toggle("active");
            });

            profilePopup.addEventListener("click", function(e) {
                e.stopPropagation();
            });
        }

        /* ================= CART DRAWER ================= */
        const cartIcon = document.getElementById("cartIcon");
        const cartDrawer = document.getElementById("cartDrawer");
        const overlay = document.getElementById("cartOverlay");
        const closeBtn = document.getElementById("closeCart");

        const minus = document.querySelector(".minus");
        const plus = document.querySelector(".plus");
        const count = document.querySelector(".count");

        const addBtn = document.querySelector(".add-btn");
        const headerCount = document.querySelector(".cart-header span");
        const progressBar = document.querySelector(".progress-bar");
        const offerText = document.querySelector(".cart-offer strong");

        let cartQty = count ? parseInt(count.innerText) || 1 : 1;
        const maxItems = 3;

        if (cartIcon && cartDrawer && overlay) {
            cartIcon.addEventListener("click", function(e) {
                e.stopPropagation();
                cartDrawer.classList.add("active");
                overlay.classList.add("active");
            });
        }

        if (closeBtn && overlay) {
            closeBtn.addEventListener("click", closeCart);
            overlay.addEventListener("click", closeCart);
        }

        function closeCart() {
            cartDrawer.classList.remove("active");
            overlay.classList.remove("active");
        }

        /* ================= UPDATE CART UI ================= */
        function updateCartUI() {
            if (!count) return;

            count.innerText = cartQty;

            if (headerCount) {
                headerCount.innerText = `(${cartQty} item${cartQty > 1 ? "s" : ""})`;
            }

            if (progressBar) {
                let progress = (cartQty / maxItems) * 100;
                progressBar.style.width = Math.min(progress, 100) + "%";
            }

            if (offerText) {
                if (cartQty >= 3) {
                    offerText.innerText = "Extra 10% OFF";
                } else if (cartQty >= 2) {
                    offerText.innerText = "Extra 7% OFF";
                } else {
                    offerText.innerText = "Extra 7% OFF";
                }
            }
        }

        /* ================= QUANTITY BUTTONS ================= */
        if (minus) {
            minus.addEventListener("click", function() {
                if (cartQty > 1) {
                    cartQty--;
                    updateCartUI();
                }
            });
        }

        if (plus) {
            plus.addEventListener("click", function() {
                cartQty++;
                updateCartUI();
            });
        }

        /* ================= ADD + BUTTON ================= */
        if (addBtn) {
            addBtn.addEventListener("click", function() {
                cartQty++;
                updateCartUI();
            });
        }

        /* ================= GLOBAL CLICK CLOSE ================= */
        document.addEventListener("click", function() {
            if (profilePopup) profilePopup.classList.remove("active");
        });

        updateCartUI(); // init

    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll(".nav-text-link");

        navLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault(); // agar <a> tag hai toh default roke
                window.location.href = "allcategories.php";
            });
        });
    });
</script>