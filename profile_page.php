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
    <title>My Account - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=2.8">
</head>

<body id="prof-page" >
    <?php include 'common/header.php' ?>
    <button id="ar-goTopBtn" class="ar-go-top-btn" aria-label="Go to top">
        <i class="bi bi-chevron-up"></i>
    </button>
    <div class="container CA-main-container">
        <div class="row mt-5">

            <div class="d-md-none mt-5 text-center">
                <button class="btn ca-mob-menu-btn mt-1" type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#CA-sidebarOffcanvas"
                    aria-controls="CA-sidebarOffcanvas">
                    <i class="fa-solid fa-sliders"></i>
                    <span>Filter & Menu</span>
                </button>
            </div>


            <div class="col-lg-3 col-md-4 d-none d-md-block">
                <div class="CA-sidebar">
                    <div class="CA-sidebar-header" id="openProfileModal">
                        <i class="fa-regular fa-user"></i>
                        <span>Account</span>
                    </div>

                    <nav class="CA-sidebar-menu">
                        <ul>
                            <li class="CA-section-title"></li>

                            <li>
                                <a href="#" data-tab-id="CA-overviewTab">
                                    <i class="fa-solid fa-gauge-high"></i>
                                    <span>Overview</span>
                                </a>
                            </li>

                            <li class="CA-section-title"></li>

                            <li>
                                <a href="#" data-tab-id="CA-ordersTab">
                                    <i class="fa-solid fa-box"></i>
                                    <span>Orders & Returns</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" data-tab-id="CA-wishlist">
                                    <i class="fa-regular fa-heart"></i>
                                    <span>Wishlist</span>
                                </a>
                            </li>

                            <li class="CA-section-title"></li>

                            <li>
                                <a href="#" data-tab-id="CA-couponsTab">
                                    <i class="fa-solid fa-ticket"></i>
                                    <span>Coupons</span>
                                </a>
                            </li>

                            <li class="CA-section-title"></li>

                            <li>
                                <a href="#" data-tab-id="CA-profileDetailsView" class="active">
                                    <i class="fa-regular fa-id-card"></i>
                                    <span>Profile</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" data-tab-id="CA-addressesTab">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Addresses</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" data-tab-id="CA-privacyTab">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <span>Privacy Center</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="modal fade" id="userProfileModal" tabindex="-1" aria-labelledby="userProfileModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header border-0 pb-0">
                            <h5 class="modal-title" id="userProfileModalLabel">Edit Profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body px-4 pb-4">
                            <div class="row align-items-center g-4">

                                <!-- Left Side: Profile Image -->
                                <div class="col-md-4 text-center">
                                    <div class="profile-avatar-wrapper mb-3">
                                        <img src="assets/img/profile photo.jpg" class="profile-avatar rounded-circle" id="userAvatarPreview" style="max-width: 150px;">
                                        <label class="profile-avatar-edit">
                                            <i class="bi bi-pencil"></i>
                                            <input type="file" id="avatarInput" accept="image/*">
                                        </label>
                                    </div>
                                </div>

                                <!-- Right Side: Profile Form -->
                                <div class="col-md-8">
                                    <div class="form-section-title mb-3">Profile Information</div>
                                    <form id="userProfileForm">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" value="John Doe">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Email Address</label>
                                                <input type="email" class="form-control" value="john@example.com">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Phone</label>
                                                <input type="text" class="form-control" value="+91 9876543210">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Location</label>
                                                <input type="text" class="form-control" value="Mumbai, India">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-dark">Save Changes</button>
                        </div>

                    </div>
                </div>
            </div>


            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="CA-sidebarOffcanvas"
                aria-labelledby="CA-sidebarOffcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="CA-sidebarOffcanvasLabel">Account</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="CA-sidebar-header">

                    </div>
                    <nav class="CA-sidebar-menu">
                        <ul>
                            <li class="CA-section-title"></li>
                            <li><a href="#" data-tab-id="CA-overviewTab" class="CA-offcanvas-link">Overview</a></li>
                            <li class="CA-section-title"></li>
                            <li><a href="#" data-tab-id="CA-ordersTab" class="CA-offcanvas-link">Orders & Returns</a>
                            </li>
                            <li><a href="#" data-tab-id="CA-wishlist" class="CA-offcanvas-link">Wishlist</a>
                            </li>
                            <li class="CA-section-title"></li>
                            <li><a href="#" data-tab-id="CA-couponsTab" class="CA-offcanvas-link">Coupons</a></li>
                            <li class="CA-section-title"></li>
                            <li><a href="#" data-tab-id="CA-profileDetailsView" class="CA-offcanvas-link">Profile</a>
                            </li>
                            <li><a href="#" data-tab-id="CA-addressesTab" class="CA-offcanvas-link">Addresses</a></li>
                            <li class="CA-section-title"></li>
                            <li><a href="#" data-tab-id="CA-privacyTab" class="CA-offcanvas-link">Privacy Policy</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-lg-9 col-md-8">

                <div class="CA-mobile-coupon-nav" id="CA-mobileCouponNav">
                    <a href="#" class="CA-nav-link" data-filter="trending">Trending</a>
                    <a href="#" class="CA-nav-link" data-filter="discount">Discount</a>
                    <a href="#" class="CA-nav-link" data-filter="expiring-soon">Expiring Soon</a>
                    <a href="#" class="CA-nav-link" data-filter="all">All</a>
                </div>

                <div class="CA-content-area p-3" id="CA-tabContent">

                    <div class="CA-tab-pane active" id="CA-profileDetailsView">
                        <h6 class="CA-profile-title">Profile Details</h6>

                        <table class="CA-profile-details-table">
                            <tr>
                                <td>Full Name</td>
                                <td data-field="fullName">Ritik Rosan</td>
                            </tr>
                            <tr>
                                <td>Mobile Number</td>
                                <td data-field="mobileNumber">+91 98765 43210</td>
                            </tr>
                            <tr>
                                <td>Email ID</td>
                                <td data-field="email">ritik@example.com</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td data-field="gender">Male</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td data-field="birthday">15 Aug 1998</td>
                            </tr>
                            <tr>
                                <td>Alternate Mobile</td>
                                <td data-field="alternateMobile">+91 91234 56789</td>
                            </tr>
                            <tr>
                                <td>Hint Name</td>
                                <td data-field="hintName">Home</td>
                            </tr>
                        </table>

                        <button class="btn CA-btn-pink" id="CA-editProfileBtn">
                            <i class="fa-regular fa-pen-to-square"></i> Edit Profile
                        </button>
                    </div>


                    <div class="CA-tab-pane" id="CA-profileEditForm">

                        <!-- Close Button -->
                        <button type="button"
                            class="CA-form-close-btn"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </button>


                        <form id="CA-editProfileForm">
                            <div class="mb-3 mt-3">
                                <label for="CA-mobileNumberInput" class="CA-form-label"></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="CA-mobileNumberInput" placeholder="Mobile Number">

                                    <span class="input-group-text">
                                        <i class="bi bi-check-circle-fill text-success"></i>
                                    </span>
                                    <button class="btn btn-outline-secondary ms-2" type="button" id="CA-changeMobileBtn">CHANGE</button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="CA-fullNameInput" class="CA-form-label"></label>
                                <input type="text" class="form-control" id="CA-fullNameInput" name="fullName" placeholder="Full Name">
                            </div>

                            <div class="mb-3">
                                <label for="CA-emailInput" class="CA-form-label"></label>
                                <input type="email" class="form-control" id="CA-emailInput" name="email" placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <label class="CA-form-label"></label>
                                <div class="CA-gender-options">
                                    <div class="CA-gender-option" data-gender="Male">Male</div>
                                    <div class="CA-gender-option" data-gender="Female">Female</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="CA-birthdayInput" class="CA-form-label"></label>
                                <input type="text" class="form-control" id="CA-birthdayInput" name="birthday" placeholder="dd/mm/yyyy">
                            </div>

                            <div class="mb-3">
                                <label for="CA-alternateMobileInput" class="CA-form-label"></label>
                                <input type="tel" class="form-control" id="CA-alternateMobileInput" name="alternateMobile" placeholder="Mobile Number">
                            </div>

                            <div class="mb-3">
                                <label for="CA-hintNameInput" class="CA-form-label"></label>
                                <input type="text" class="form-control" id="CA-hintNameInput" name="hintName" placeholder="Hint name">
                            </div>

                            <button type="button" class="btn CA-btn-pink" id="CA-saveDetailsBtn">SAVE DETAILS</button>
                        </form>
                    </div>


                    <div class="CA-tab-pane" id="CA-couponsTab">
                        <h4>My Coupons</h4>
                        <div class="CA-coupon-sort-tabs d-flex flex-wrap mb-3">
                            <button class="btn active" data-filter="trending">Trending</button>
                            <button class="btn" data-filter="discount">Discount</button>
                            <button class="btn" data-filter="expiring-soon">Expiring Soon</button>
                            <button class="btn" data-filter="all">All</button>
                        </div>
                        <div class="CA-coupon-list">
                            <div class="CA-coupon-card" data-category="trending">
                                <i class="bi bi-scissors CA-scissors-icon"></i>
                                <div class="CA-coupon-card-img">
                                    <img src="assets/img/super-sale-coupon.avif" alt="Coupon Image"
                                        class="img-fluid">
                                </div>
                                <div class="CA-coupon-card-content">
                                    <div class="CA-coupon-card-title">Flat ₹1197 off</div>
                                    <div class="CA-coupon-card-subtitle">On min. purchase of ₹3995 and 4 items</div>
                                    <div class="CA-coupon-code-section">
                                        Code: <span class="CA-coupon-code">THREEJIBBITZ</span>
                                    </div>
                                    <div class="CA-expiry-date">Expiry: 31 Dec 2025</div>
                                    <a href="#" class="CA-view-products-link">View Products <i
                                            class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="CA-coupon-card" data-category="discount">
                                <i class="bi bi-scissors CA-scissors-icon"></i>
                                <div class="CA-coupon-card-img">
                                    <img src="assets/img/mordern coupon.avif" alt="Coupon Image"
                                        class="img-fluid">
                                </div>
                                <div class="CA-coupon-card-content">
                                    <div class="CA-coupon-card-title">Flat 5% off</div>
                                    <div class="CA-coupon-code-section">
                                        Code: <span class="CA-coupon-code">NORETURNBK5</span>
                                    </div>
                                    <div class="CA-expiry-date">Expiry: 31 Jul 2025</div>
                                    <a href="#" class="CA-view-products-link">View Products <i
                                            class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="CA-coupon-card" data-category="expiring-soon">
                                <i class="bi bi-scissors CA-scissors-icon"></i>
                                <div class="CA-coupon-card-img">
                                    <img src="assets/img/coupon.jpg" alt="Coupon Image"
                                        class="img-fluid">
                                </div>
                                <div class="CA-coupon-card-content">
                                    <div class="CA-coupon-card-title">Free Shipping</div>
                                    <div class="CA-coupon-code-section">
                                        Code: <span class="CA-coupon-code">SHIPFREE</span>
                                    </div>
                                    <div class="CA-expiry-date">Expiry: 15 Jul 2025</div>
                                    <a href="#" class="CA-view-products-link">View Products <i
                                            class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="CA-coupon-card" data-category="trending">
                                <i class="bi bi-scissors CA-scissors-icon"></i>
                                <div class="CA-coupon-card-img">
                                    <img src="assets/img/coupon.jpg" alt="Coupon Image"
                                        class="img-fluid">
                                </div>
                                <div class="CA-coupon-card-content">
                                    <div class="CA-coupon-card-title">₹200 off</div>
                                    <div class="CA-coupon-code-section">
                                        Code: <span class="CA-coupon-code">TREND200</span>
                                    </div>
                                    <div class="CA-expiry-date">Expiry: 31 Aug 2025</div>
                                    <a href="#" class="CA-view-products-link">View Products <i
                                            class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="CA-tab-pane" id="CA-overviewTab">
                        <h4 class="mb-4 fw-bold">Overview</h4>

                        <div class="row g-4">


                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 border rounded bg-white">
                                    <div class="me-3 fs-4 text-primary"><i class="bi bi-person-circle"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">Profile Information</h6>
                                        <p class="mb-0 text-muted">Manage your name, mobile number, email, and gender for a smoother experience.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 border rounded bg-white">
                                    <div class="me-3 fs-4 text-success"><i class="bi bi-bag-check-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">Orders</h6>
                                        <p class="mb-0 text-muted">Track your orders, view history, and download invoices easily.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 border rounded bg-white">
                                    <div class="me-3 fs-4 text-danger"><i class="bi bi-heart-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">Wishlist</h6>
                                        <p class="mb-0 text-muted">View saved items and move them to cart when you're ready.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 border rounded bg-white">
                                    <div class="me-3 fs-4 text-warning"><i class="bi bi-geo-alt-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">Address Book</h6>
                                        <p class="mb-0 text-muted">Add or manage delivery addresses for faster checkout.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 border rounded bg-white">
                                    <div class="me-3 fs-4 text-info"><i class="bi bi-ticket-detailed-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">Coupons</h6>
                                        <p class="mb-0 text-muted">Track your available offers and apply them at checkout.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 border rounded bg-white">
                                    <div class="me-3 fs-4 text-dark"><i class="bi bi-credit-card-2-front-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">Payments</h6>
                                        <p class="mb-0 text-muted">Manage saved cards, UPI methods, and payment options.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 border rounded bg-white">
                                    <div class="me-3 fs-4 text-secondary"><i class="bi bi-shield-lock-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">Login & Security</h6>
                                        <p class="mb-0 text-muted">Change your password and manage your login activity.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="CA-tab-pane" id="CA-ordersTab">

                        <div class="CA-tab-order">

                            <input type="search" class="form-control search-bar" id="searchOrders"
                                placeholder="Search orders by product or order ID..." />


                            <ul class="nav nav-tabs mb-4" id="orderTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-status="all" type="button" role="tab">All
                                        Orders</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-status="delivered" type="button"
                                        role="tab">Delivered</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-status="cancelled" type="button"
                                        role="tab">Cancelled</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-status="returned" type="button"
                                        role="tab">Returns</button>
                                </li>
                            </ul>


                            <div id="ordersList">


                                <div class="order-card" data-status="delivered" data-title="Men's Casual Shirt"
                                    data-orderid="ORD12345">
                                    <div class="order-thumbnail">
                                        <img src="assets/img/black.webp"
                                            alt="Product" />
                                    </div>
                                    <div class="order-info">
                                        <div class="order-title">Men's Casual Shirt</div>
                                        <div class="order-variant">Size: M, Color: Blue</div>
                                        <div class="order-date">Ordered on: 2025-05-20</div>
                                        <div class="order-price">$29.99</div>
                                        <div class="order-status status-delivered">Delivered</div>
                                    </div>
                                    <div class="order-actions">
                                        <button id="openTrackModal" class="btn btn-dark w-30">order details</button>
                                        <button class="btn btn-dark" data-bs-toggle="modal"
                                            data-bs-target="#trackingOrderModal">
                                            Track Order
                                        </button>
                                        <button class="btn btn-outline-dark btn-sm fw-semibold shadow-sm" data-bs-toggle="modal" data-bs-target="#rrModal">
                                            <i class="bi bi-star-fill text-warning"></i> Rate & Review
                                        </button>

                                        <a href="product_details.php"><button class="btn btn-outline-success btn-sm">Buy Again</button></a>
                                    </div>

                                </div>
                                <div id="rrReviewsContainer" class="my-4"></div>

                                <div class="order-card" data-status="shipped" data-title="Wireless Earbuds"
                                    data-orderid="ORD12346">
                                    <div class="order-thumbnail">
                                        <img src="assets/img/sky.webp"
                                            alt="Product" />
                                    </div>
                                    <div class="order-info">
                                        <div class="order-title">Wireless Earbuds</div>
                                        <div class="order-variant">Color: Black</div>
                                        <div class="order-date">Ordered on: 2025-05-22</div>
                                        <div class="order-price">$59.99</div>
                                        <div class="order-status status-shipped">Shipped</div>
                                    </div>
                                    <div class="order-actions">
                                        <button class="btn btn-dark" data-bs-toggle="modal"
                                            data-bs-target="#trackingOrderModal">
                                            Track Order
                                        </button>
                                        <button class="btn btn-cancel">Cancel</button>
                                    </div>
                                </div>

                                <div class="order-card" data-status="cancelled" data-title="Sports Shoes"
                                    data-orderid="ORD12347">
                                    <div class="order-thumbnail">
                                        <img src="assets/img/cotton.webp"
                                            alt="Product" />
                                    </div>
                                    <div class="order-info">
                                        <div class="order-title">Sports Shoes</div>
                                        <div class="order-variant">Size: 10, Color: Red</div>
                                        <div class="order-date">Ordered on: 2025-05-18</div>
                                        <div class="order-price">$89.99</div>
                                        <div class="order-status status-cancelled">Cancelled</div>
                                    </div>
                                    <div class="order-actions">
                                        <a href="product_details.php"><button class="btn btn-buy-again">Buy Again</button></a>
                                    </div>
                                </div>

                                <div class="order-card" data-status="returned" data-title="Smart Watch"
                                    data-orderid="ORD12348">
                                    <div class="order-thumbnail">
                                        <img src="assets/img/dhoti.webp"
                                            alt="Product" />
                                    </div>
                                    <div class="order-info">
                                        <div class="order-title">Smart Watch</div>
                                        <div class="order-variant">Black Strap</div>
                                        <div class="order-date">Ordered on: 2025-05-15</div>
                                        <div class="order-price">$149.99</div>
                                        <div class="order-status status-returned">Returned</div>
                                    </div>
                                    <div class="order-actions">
                                        <a href="product_details.php"><button class="btn btn-buy-again">Buy Again</button></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Container for submitted reviews -->


                    <!-- Modal -->
                    <div class="modal fade" id="rrModal" tabindex="-1" aria-labelledby="rrModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content rr-modal-content p-3">

                                <!-- Header -->
                                <div class="modal-header rr-modal-header">
                                    <h5 class="modal-title w-100 text-center" id="rrModalLabel">
                                        <i class="bi bi-pencil-square text-warning"></i> Share Your Experience
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <!-- Body -->
                                <div class="modal-body">
                                    <!-- Stars -->
                                    <div class="d-flex justify-content-center mb-3">
                                        <span class="rr-star" data-value="1">&#9733;</span>
                                        <span class="rr-star" data-value="2">&#9733;</span>
                                        <span class="rr-star" data-value="3">&#9733;</span>
                                        <span class="rr-star" data-value="4">&#9733;</span>
                                        <span class="rr-star" data-value="5">&#9733;</span>
                                    </div>

                                    <!-- Review Text -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="rrReviewText" placeholder="Write your review..."></textarea>
                                        <label for="rrReviewText"><i class="bi bi-chat-left-text"></i> Write your review...</label>
                                    </div>

                                    <!-- Upload Files -->
                                    <label class="rr-upload-label" for="rrFileInput">
                                        <i class="bi bi-upload"></i>
                                        Upload photos/videos (optional)
                                    </label>
                                    <input type="file" id="rrFileInput" accept="image/*,video/*" multiple hidden>
                                    <div class="rr-preview" id="rrPreview"></div>
                                </div>

                                <!-- Footer -->
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="rr-btn-submit" id="rrSubmitBtn">Submit Review</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="trackingOrderModal" tabindex="-1" aria-labelledby="trackingOrderLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title" id="trackingOrderLabel">Track Your Order</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="u-tracking-card">

                                        <div class="u-tracking-header mb-3">
                                            <p class="text-muted mb-0">
                                                Order ID: <strong>#123456789</strong> • Placed on: <strong>June 1,
                                                    2025</strong>
                                            </p>
                                        </div>

                                        <div
                                            class="u-stepper d-flex justify-content-between flex-wrap text-center mb-4">
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

                    <div class="CA-tab-pane" id="CA-wishlist">

                        <div class="wl-header">
                            <h1>My Wishlist</h1>
                            <span class="wl-count">(0)</span>
                        </div>

                        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3"
                            id="wishlist-container">

                            <div class="col wl-item">
                                <div class="wl-card">
                                    <a href="product_details.php"><img
                                            src="https://5.imimg.com/data5/SELLER/Default/2024/7/438439117/UM/RF/SV/36030391/7162i8c0thl-ul1500-500x500.jpg"
                                            class="wl-card-img" alt="Redmi Note 10 Pro"></a>
                                    <div class="wl-card-body">
                                        <div>
                                            <div class="wl-title">Redmi Note 10 Pro (Vintage Bronze, 128 GB) with
                                                64MP Camera</div>
                                            <div class="wl-price-group">
                                                <span class="wl-price">₹15,999</span>
                                                <span class="wl-price-original">₹18,999</span>
                                            </div>
                                            <div class="wl-rating">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                4.5 <span class="wl-rating-count">| 34,567 Ratings</span>
                                            </div>
                                        </div>
                                        <div class="wl-actions">
                                            <button class="wl-btn-cart">Move to Cart</button>
                                            <button class="wl-btn-remove">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col wl-item">
                                <div class="wl-card">
                                    <a href="product_details.php"><img
                                            src="https://utkalikaodisha.com/wp-content/uploads/2023/12/22-4.jpg"
                                            class="wl-card-img" alt="Redmi Note 10 Pro"></a>
                                    <div class="wl-card-body">
                                        <div>
                                            <div class="wl-title">Redmi Note 10 Pro (Vintage Bronze, 128 GB) with
                                                64MP Camera</div>
                                            <div class="wl-price-group">
                                                <span class="wl-price text-dark">₹15,999</span>
                                            </div>
                                            <div class="wl-rating">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                4.5 <span class="wl-rating-count">| 34,567 Ratings</span>
                                            </div>
                                        </div>
                                        <div class="wl-actions">
                                            <button class="wl-btn-cart">Move to Cart</button>
                                            <button class="wl-btn-remove">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col wl-item">
                                <div class="wl-card">
                                    <a href="product_details.php"><img
                                            src="https://images.meesho.com/images/products/228861625/25gva_512.webp"
                                            class="wl-card-img" alt="Redmi Note 10 Pro"></a>
                                    <div class="wl-card-body">
                                        <div>
                                            <div class="wl-title">Redmi Note 10 Pro (Vintage Bronze, 128 GB) with
                                                64MP Camera</div>
                                            <div class="wl-price-group">
                                                <span class="wl-price text-dark">₹15,999</span>
                                            </div>
                                            <div class="wl-rating">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                4.5 <span class="wl-rating-count">| 34,567 Ratings</span>
                                            </div>
                                        </div>
                                        <div class="wl-actions">
                                            <button class="wl-btn-cart">Move to Cart</button>
                                            <button class="wl-btn-remove">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col wl-item">
                                <div class="wl-card">
                                    <a href="product_details.php"><img
                                            src="https://m.media-amazon.com/images/I/8114UKDVF5L._AC_UY1100_.jpg"
                                            class="wl-card-img" alt="Redmi Note 10 Pro"></a>
                                    <div class="wl-card-body">
                                        <div>
                                            <div class="wl-title">Redmi Note 10 Pro (Vintage Bronze, 128 GB) with
                                                64MP Camera</div>
                                            <div class="wl-price-group">
                                                <span class="wl-price text-dark">₹15,999</span>
                                            </div>
                                            <div class="wl-rating">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                4.5 <span class="wl-rating-count">| 34,567 Ratings</span>
                                            </div>
                                        </div>
                                        <div class="wl-actions">
                                            <button class="wl-btn-cart">Move to Cart</button>
                                            <button class="wl-btn-remove">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col wl-item">
                                <div class="wl-card">
                                    <a href="product_details.php"><img
                                            src="https://m.media-amazon.com/images/I/81sTVoEUq6L._AC_UY1100_.jpg"
                                            class="wl-card-img" alt="Redmi Note 10 Pro"></a>
                                    <div class="wl-card-body">
                                        <div>
                                            <div class="wl-title">Redmi Note 10 Pro (Vintage Bronze, 128 GB) with
                                                64MP Camera</div>
                                            <div class="wl-price-group">
                                                <span class="wl-price text-dark">₹15,999</span>
                                            </div>
                                            <div class="wl-rating">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                4.5 <span class="wl-rating-count">| 34,567 Ratings</span>
                                            </div>
                                        </div>
                                        <div class="wl-actions">
                                            <button class="wl-btn-cart">Move to Cart</button>
                                            <button class="wl-btn-remove">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col wl-item">
                                <div class="wl-card">
                                    <a href="product_details.php"><img
                                            src="https://www.odikala.com/cdn/shop/files/aa1_3259de8c-0fd9-42ca-8edf-a0361a6a854e.png?v=1716618907"
                                            class="wl-card-img" alt="Redmi Note 10 Pro"></a>
                                    <div class="wl-card-body">
                                        <div>
                                            <div class="wl-title">Redmi Note 10 Pro (Vintage Bronze, 128 GB) with
                                                64MP Camera</div>
                                            <div class="wl-price-group">
                                                <span class="wl-price text-dark">₹15,999</span>
                                            </div>
                                            <div class="wl-rating">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                4.5 <span class="wl-rating-count">| 34,567 Ratings</span>
                                            </div>
                                        </div>
                                        <div class="wl-actions">
                                            <button class="wl-btn-cart">Move to Cart</button>
                                            <button class="wl-btn-remove">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col wl-item">
                                <div class="wl-card">
                                    <a href="product_details.php"><img
                                            src="https://m.media-amazon.com/images/I/91+45PnOcvL._AC_UY1100_.jpg"
                                            class="wl-card-img" alt="Redmi Note 10 Pro"></a>
                                    <div class="wl-card-body">
                                        <div>
                                            <div class="wl-title">Redmi Note 10 Pro (Vintage Bronze, 128 GB) with
                                                64MP Camera</div>
                                            <div class="wl-price-group">
                                                <span class="wl-price text-dark">₹15,999</span>
                                            </div>
                                            <div class="wl-rating">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                4.5 <span class="wl-rating-count">| 34,567 Ratings</span>
                                            </div>
                                        </div>
                                        <div class="wl-actions">
                                            <button class="wl-btn-cart">Move to Cart</button>
                                            <button class="wl-btn-remove">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col wl-item">
                                <div class="wl-card">
                                    <a href="product_details.php"><img
                                            src="https://5.imimg.com/data5/SELLER/Default/2024/7/438439117/UM/RF/SV/36030391/7162i8c0thl-ul1500-500x500.jpg"
                                            class="wl-card-img" alt="Redmi Note 10 Pro"></a>
                                    <div class="wl-card-body">
                                        <div>
                                            <div class="wl-title">Redmi Note 10 Pro (Vintage Bronze, 128 GB) with
                                                64MP Camera</div>
                                            <div class="wl-price-group">
                                                <span class="wl-price text-dark">₹15,999</span>
                                            </div>
                                            <div class="wl-rating">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                4.5 <span class="wl-rating-count">| 34,567 Ratings</span>
                                            </div>
                                        </div>
                                        <div class="wl-actions">
                                            <button class="wl-btn-cart">Move to Cart</button>
                                            <button class="wl-btn-remove">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="CA-tab-pane" id="CA-savedCardsTab">
                        <h4>Saved Cards</h4>
                        <p>Saved cards list.</p>
                    </div>
                    <div class="CA-tab-pane" id="CA-savedUPITab">
                        <h4>Saved UPI</h4>
                        <p>Saved UPI IDs list.</p>
                    </div>
                    <div class="CA-tab-pane" id="CA-addressesTab">
                        <h4>Addresses</h4>
                        <p>Addresses list.</p>
                    </div>
                    <div class="CA-tab-pane" id="CA-privacyTab">
                        <div class="pp-container">
                            <h1>Privacy Policy</h1>
                            <p><strong>Last updated:</strong> August 2025</p>
                            <p>At <b>utkalika</b>, your privacy is very important to us. This policy explains how we collect, use, and protect your information when you shop with us.</p>

                            <h2>What We Collect</h2>
                            <ul>
                                <li>Your name, email, phone number, and delivery address.</li>
                                <li>Payment details when you place an order.</li>
                                <li>Browsing and shopping behavior on our website/app (using cookies & analytics).</li>
                            </ul>

                            <h2>How We Use Your Data</h2>
                            <ul>
                                <li>To process and deliver your orders.</li>
                                <li>To provide customer support.</li>
                                <li>To improve your shopping experience.</li>
                                <li>To send you updates, offers, and promotions (you can opt out anytime).</li>
                            </ul>

                            <h2>Contact Us</h2>
                            <p>Email: support@example.com</p>
                            <p>Phone: +91-1234567890</p>
                            <p>Address: Your Business Address</p>

                            <div>
                                <p class="text-warning fw-bold w-50" id="ppDeactivateBtn">Deactivate Account</p>
                                <p class="text-danger fw-bold w-50" id="ppDeleteBtn">Delete Account</p>

                            </div>
                            <div class="pp-success-message" id="ppSuccessMsg"></div>
                            <img src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/myProfileFooter_4e9fe2.png" class="w-100" alt="photo">
                        </div>

                        <!-- Modal -->
                        <div class="pp-modal" id="ppConfirmModal">
                            <div class="pp-modal-content">
                                <h3 id="ppModalTitle">Confirm Action</h3>
                                <p id="ppModalText">Are you sure you want to proceed?</p>
                                <div class="pp-modal-actions">
                                    <button class="pp-btn pp-btn-cancel" id="ppCancelBtn">Cancel</button>
                                    <button class="pp-btn pp-btn-confirm" id="ppConfirmBtn">Yes, Proceed</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="trackModal" tabindex="-1" aria-labelledby="trackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Track Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex gap-3 mb-3">
                        <img id="modalImage" src="https://via.placeholder.com/100" alt="Product"
                            style="width: 100px; height: 100px; border-radius: 6px;" />
                        <div>
                            <h6 id="modalTitle" class="mb-1">Men's Casual Shirt</h6>
                            <p class="mb-1"><strong>Variant:</strong> <span id="modalVariant">Size: M, Color:
                                    Blue</span></p>
                            <p class="mb-1"><strong>Ordered:</strong> <span id="modalDate">2025-05-20</span></p>
                            <p class="mb-1"><strong>Price:</strong> <span id="modalPrice">$29.99</span></p>
                            <p><strong>Status:</strong> <span id="modalStatus"
                                    class="fw-bold text-success">Delivered</span></p>
                        </div>
                    </div>

                    <h6 class="mb-2">Tracking Progress</h6>
                    <ul class="list-group list-group-flush" id="trackSteps">
                        <li class="list-group-item text-success fw-bold">Order placed</li>
                        <li class="list-group-item text-success fw-bold">Order confirmed</li>
                        <li class="list-group-item text-success fw-bold">Shipped</li>
                        <li class="list-group-item text-success fw-bold">Out for delivery</li>
                        <li class="list-group-item text-success fw-bold">Delivered</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php include 'common/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.2"></script>
    <script src="assets/js/profile_page.js?v=1.3"></script>
</body>

</html>