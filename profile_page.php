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
    <link rel="stylesheet" href="assets/css/main.css?v=2.7">
    <style>
        .policy-container {
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .pp-container h1 {
            text-align: center;
            font-size: 28px;
            color: #222;
            margin-bottom: 15px;
        }

        .pp-container h2 {
            font-size: 20px;
            margin-top: 25px;
            margin-bottom: 10px;
            color: #444;
        }

        .pp-container p,
        .pp-container ul {
            font-size: 15px;
            line-height: 1.7;
            color: #555;
        }

        .pp-container ul {
            padding-left: 20px;
        }

        /* Button Group */
        .pp-btn {
            padding: 12px 22px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s ease;
            min-width: 160px;
        }

        /* Modal Styles */
        .pp-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .pp-modal-content {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            max-width: 420px;
            width: 93%;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .pp-modal-content h3 {
            margin-bottom: 12px;
            font-size: 20px;
            color: #222;
        }

        .pp-modal-content p {
            font-size: 15px;
            color: #555;
        }

        .pp-modal-actions {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        .pp-btn-cancel {
            background: #6c757d;
            color: white;
        }

        .pp-btn-cancel:hover {
            background: #5a6268;
        }

        .pp-btn-confirm {
            background: #d9534f;
            color: white;
        }

        .pp-btn-confirm:hover {
            background: #c9302c;
        }

        /* Success Message */
        .pp-success-message {
            display: none;
            margin-top: 25px;
            padding: 14px;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 6px;
            font-size: 15px;
            text-align: center;
        }

        .rr-modal-content {
            border-radius: 18px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
            border: none;
        }

        .rr-modal-header {
            border-bottom: none;
            text-align: center;
        }

        .rr-modal-header h5 {
            font-weight: 700;
            font-size: 1.3rem;
        }

        /* Star Rating */
        .rr-star {
            font-size: 2rem;
            color: #ccc;
            cursor: pointer;
            transition: transform 0.2s, color 0.2s;
        }

        .rr-star:hover {
            transform: scale(1.2);
            color: #ffca2c;
        }

        .rr-star.active {
            color: #ffc107;
        }

        /* Upload Box */
        .rr-upload-label {
            display: block;
            border: 2px dashed #bbb;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            color: #666;
            background: #fafafa;
            transition: 0.3s;
            cursor: pointer;
        }

        .rr-upload-label:hover {
            border-color: #ffca2c;
            background: #fff8e1;
            color: #000;
        }

        .rr-upload-label i {
            font-size: 2rem;
            margin-bottom: 8px;
            display: block;
            color: #999;
        }

        /* Preview */
        .rr-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 12px;
        }

        .rr-preview img,
        .rr-preview video {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        /* Submit Button */
        .rr-btn-submit {
            background: linear-gradient(135deg, #ffc107, #ff9800);
            color: #000;
            border: none;
            font-weight: 600;
            border-radius: 8px;
            padding: 8px 20px;
            transition: 0.3s;
        }

        .rr-btn-submit:hover {
            background: linear-gradient(135deg, #ffb300, #ff8f00);
        }

        /* Review Card */
        .rr-card {
            border-radius: 12px;
            border: 1px solid #eee;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-top: 15px;
            padding: 15px;
            background: #fff;
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: pre-wrap;
        }

        .rr-card-stars {
            color: #ffc107;
            margin-bottom: 8px;
        }

        .rr-card-media img,
        .rr-card-media video {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 6px;
        }

        @media (max-width: 768px) {
            #offersBarContainer {
                margin-top: -65px !important;
            }

            .mob-header {
                margin-top: -36px !important;
            }
        }

        .ca-mob-menu-btn {
            width: 100%;
            max-width: 280px;
            padding: 14px 20px;
            border-radius: 50px;
            border: none;
            background: linear-gradient(135deg, #ff7a18, #ff3d00);
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 8px 20px rgba(255, 61, 0, 0.35);
            transition: all 0.3s ease;
            animation: pulseGlow 2s infinite;
        }

        /* Hover / Tap effect */
        .ca-mob-menu-btn:active {
            transform: scale(0.95);
        }

        /* Icon animation */
        .ca-mob-menu-btn i {
            font-size: 18px;
            animation: bounceIcon 1.8s infinite;
        }

        /* Pulse animation */
        @keyframes pulseGlow {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 61, 0, 0.6);
            }

            70% {
                box-shadow: 0 0 0 12px rgba(255, 61, 0, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 61, 0, 0);
            }
        }

        /* Icon bounce */
        @keyframes bounceIcon {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        @media (max-width: 767px) {
            .ca-mob-menu-btn {
                position: relative;
                bottom: 15px;
                left: 50%;
                transform: translateX(-50%);
                z-index: 1050;
            }
        }

        /* Form container enhancement */
        #CA-profileEditForm {
            position: relative;
            padding: 20px 15px 25px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
            animation: slideUpFade 0.4s ease;
        }

        /* Close button */
        .CA-form-close-btn {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: none;
            background: #f1f1f1;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .CA-form-close-btn:hover {
            background: #ff3d00;
            color: #fff;
            transform: rotate(90deg) scale(1.05);
        }

        /* Input focus glow */
        #CA-profileEditForm .form-control:focus {
            border-color: #ff3d00;
            box-shadow: 0 0 0 3px rgba(255, 61, 0, 0.15);
        }

        /* Gender buttons */
        .CA-gender-option {
            padding: 10px 18px;
            border-radius: 30px;
            border: 1px solid #ddd;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .CA-gender-option:hover {
            background: #fff0e9;
            border-color: #ff3d00;
        }

        /* Save button animation */
        #CA-saveDetailsBtn {
            width: 100%;
            padding: 14px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 8px 20px rgba(255, 61, 0, 0.35);
            transition: all 0.3s ease;
        }

        #CA-saveDetailsBtn:hover {
            transform: translateY(-2px);
        }

        /* Entrance animation */
        @keyframes slideUpFade {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
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


                        <div class="modal-header profile-modal-header">
                            <div class="profile-avatar-wrapper">
                                <img src="assets/img/profile photo.jpg" class="profile-avatar" id="userAvatarPreview">
                                <label class="profile-avatar-edit">
                                    <i class="bi bi-pencil"></i>
                                    <input type="file" id="avatarInput" accept="image/*">
                                </label>
                            </div>
                        </div>


                        <div class="modal-body px-4 pb-4">
                            <div class="form-section-title">Profile Information</div>
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

    <!-- wishlist js -->
    <script>
        function updateWishlistCount() {
            const count = document.querySelectorAll('.wl-item').length;
            document.querySelector('.wl-count').textContent = `(${count} item${count !== 1 ? 's' : ''})`;
        }

        function setupButtons() {
            document.querySelectorAll('.wl-btn-remove').forEach(button => {
                button.addEventListener('click', () => {
                    const card = button.closest('.wl-item');
                    if (card) {
                        card.remove();
                        updateWishlistCount();
                    }
                });
            });

            document.querySelectorAll('.wl-btn-cart').forEach(button => {
                button.addEventListener('click', () => {
                    const card = button.closest('.wl-item');
                    if (card) {
                        alert('Item moved to cart!');
                        card.remove();
                        updateWishlistCount();
                    }
                });
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateWishlistCount();
            setupButtons();
        });
    </script>


    <!-- order details modal js -->
    <script>
        document.getElementById('openTrackModal').addEventListener('click', function() {
            const modal = new bootstrap.Modal(document.getElementById('trackModal'));
            modal.show();
            const steps = [{
                    step: "Order placed",
                    date: "May 18, 2025"
                },
                {
                    step: "Order confirmed",
                    date: "May 18, 2025"
                },
                {
                    step: "Shipped",
                    date: "May 19, 2025"
                },
                {
                    step: "Out for delivery",
                    date: "May 20, 2025"
                },
                {
                    step: "Delivered",
                    date: "May 20, 2025"
                }
            ];

            const trackList = document.getElementById('trackSteps');
            trackList.innerHTML = '';
            steps.forEach(({
                step,
                date
            }) => {
                const li = document.createElement('li');
                li.className = 'list-group-item d-flex justify-content-between align-items-center';
                li.innerHTML = `
        <span>${step}</span>
        <span class="text-muted small">${date}</span>
      `;
                li.classList.add('text-success', 'fw-bold');
                trackList.appendChild(li);
            });
        });
    </script>

    <!-- side tab bar -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebarLinks = document.querySelectorAll('.CA-sidebar-menu a[data-tab-id]');
            const offcanvasLinks = document.querySelectorAll('.offcanvas-body .CA-sidebar-menu a[data-tab-id]');
            const tabPanes = document.querySelectorAll('.CA-tab-pane');
            const editProfileBtn = document.getElementById('CA-editProfileBtn');
            const saveDetailsBtn = document.getElementById('CA-saveDetailsBtn');
            const genderOptions = document.querySelectorAll('.CA-gender-option');
            const couponsSortBtns = document.querySelectorAll('.CA-coupon-sort-tabs .btn');
            const mobileCouponNav = document.getElementById('CA-mobileCouponNav');
            const mobileCouponNavLinks = document.querySelectorAll('#CA-mobileCouponNav .CA-nav-link');
            const couponCards = document.querySelectorAll('.CA-coupon-card');

            const offcanvasElement = document.getElementById('CA-sidebarOffcanvas');
            let offcanvas = null;
            if (offcanvasElement) {
                offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            }

            function showTab(targetId) {
                sidebarLinks.forEach(link => link.classList.remove('active'));
                offcanvasLinks.forEach(link => link.classList.remove('active'));
                tabPanes.forEach(pane => pane.classList.remove('active'));

                let activeLinkId = targetId;
                if (targetId === 'CA-profileDetailsView' || targetId === 'CA-profileEditForm') {
                    activeLinkId = 'CA-profileDetailsView';
                }

                const activeDesktopLink = document.querySelector(`.CA-sidebar a[data-tab-id="${activeLinkId}"]`);
                if (activeDesktopLink) activeDesktopLink.classList.add('active');

                const activeOffcanvasLink = document.querySelector(`.offcanvas-body .CA-sidebar-menu a[data-tab-id="${activeLinkId}"]`);
                if (activeOffcanvasLink) activeOffcanvasLink.classList.add('active');

                const targetPane = document.getElementById(targetId);
                if (targetPane) targetPane.classList.add('active');

                if (mobileCouponNav) {
                    if (targetId === 'CA-couponsTab') {
                        mobileCouponNav.classList.add('active-tab');

                        const defaultFilterBtn = document.querySelector('[data-filter="trending"]');
                        couponsSortBtns.forEach(b => b.classList.remove('active'));
                        if (defaultFilterBtn) defaultFilterBtn.classList.add('active');

                        mobileCouponNavLinks.forEach(l => l.classList.remove('active'));
                        const defaultMobileFilterLink = document.querySelector('#CA-mobileCouponNav a[data-filter="trending"]');
                        if (defaultMobileFilterLink) defaultMobileFilterLink.classList.add('active');

                        filterCoupons('trending');
                    } else {
                        mobileCouponNav.classList.remove('active-tab');
                    }
                }
            }

            function filterCoupons(category) {
                couponCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    if (category === 'all' || cardCategory === category) {
                        card.classList.remove('hidden-coupon');
                    } else {
                        card.classList.add('hidden-coupon');
                    }
                });
            }

            sidebarLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const tabId = link.getAttribute('data-tab-id');
                    showTab(tabId);
                    if (link.classList.contains('CA-offcanvas-link') && offcanvas) {
                        offcanvas.hide();
                    }
                });
            });

            if (editProfileBtn) {
                editProfileBtn.addEventListener('click', () => {
                    const genderField = document.querySelector('.CA-profile-details-table td[data-field="gender"]');
                    if (genderField) {
                        const currentGender = genderField.textContent.trim();
                        genderOptions.forEach(option => {
                            option.classList.remove('CA-selected');
                            if (option.getAttribute('data-gender') === currentGender) {
                                option.classList.add('CA-selected');
                            }
                        });
                    }

                    const getText = (field) => {
                        const cell = document.querySelector(`.CA-profile-details-table td[data-field="${field}"]`);
                        return cell ? cell.textContent.trim() : '';
                    };

                    document.getElementById('CA-fullNameInput').value = getText('fullName');
                    document.getElementById('CA-emailInput').value = getText('email');
                    document.getElementById('CA-birthdayInput').value = getText('birthday');
                    document.getElementById('CA-alternateMobileInput').value = getText('alternateMobile');
                    document.getElementById('CA-hintNameInput').value = getText('hintName');
                    document.getElementById('CA-mobileNumberInput').value = getText('mobileNumber');

                    showTab('CA-profileEditForm');
                });
            }

            if (saveDetailsBtn) {
                saveDetailsBtn.addEventListener('click', () => {
                    const fullName = document.getElementById('CA-fullNameInput').value.trim();
                    const email = document.getElementById('CA-emailInput').value.trim();
                    const birthday = document.getElementById('CA-birthdayInput').value.trim();
                    const alternateMobile = document.getElementById('CA-alternateMobileInput').value.trim();
                    const hintName = document.getElementById('CA-hintNameInput').value.trim();
                    const mobileNumber = document.getElementById('CA-mobileNumberInput').value.trim();

                    const birthdayPattern = /^\d{2}\/\d{2}\/\d{4}$/;
                    if (!fullName || !email) {
                        alert("Full name and email are required.");
                        return;
                    }
                    if (birthday && !birthdayPattern.test(birthday)) {
                        alert("Please enter a valid birthday in dd/mm/yyyy format.");
                        return;
                    }

                    let selectedGender = '';
                    const selectedGenderElement = document.querySelector('.CA-gender-option.CA-selected');
                    if (selectedGenderElement) {
                        selectedGender = selectedGenderElement.getAttribute('data-gender');
                    }

                    const profileTable = document.querySelector('.CA-profile-details-table');
                    const updateProfileField = (field, value) => {
                        const cell = profileTable.querySelector(`td[data-field="${field}"]`);
                        if (cell) cell.textContent = value;
                    };

                    updateProfileField('fullName', fullName);
                    updateProfileField('email', email);
                    updateProfileField('gender', selectedGender);
                    updateProfileField('birthday', birthday);
                    updateProfileField('alternateMobile', alternateMobile);
                    updateProfileField('hintName', hintName);
                    updateProfileField('mobileNumber', mobileNumber);

                    alert('Profile details saved (simulated)');
                    showTab('CA-profileDetailsView');
                });
            }

            genderOptions.forEach(option => {
                option.addEventListener('click', () => {
                    genderOptions.forEach(opt => opt.classList.remove('CA-selected'));
                    option.classList.add('CA-selected');
                });
            });

            couponsSortBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    couponsSortBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    const category = btn.getAttribute('data-filter');
                    filterCoupons(category);
                });
            });

            mobileCouponNavLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    mobileCouponNavLinks.forEach(l => l.classList.remove('active'));
                    link.classList.add('active');
                    const category = link.getAttribute('data-filter');
                    filterCoupons(category);
                });
            });

            showTab('CA-profileDetailsView');
        });
    </script>

    <script>
        const profileModal = new bootstrap.Modal(document.getElementById('userProfileModal'));
        const openBtn = document.getElementById('openProfileModal');
        const avatarInput = document.getElementById('avatarInput');
        const avatarPreview = document.getElementById('userAvatarPreview');

        openBtn.addEventListener('click', () => {
            profileModal.show();
        });

        avatarInput.addEventListener('change', function() {
            const file = avatarInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    avatarPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>


    <!-- order tab js -->
    <script>
        const tabs = document.querySelectorAll('#orderTabs button');
        const ordersList = document.getElementById('ordersList');
        const searchInput = document.getElementById('searchOrders');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                filterOrders();
            });
        });

        searchInput.addEventListener('input', () => {
            filterOrders();
        });

        function filterOrders() {
            const activeTab = document.querySelector('#orderTabs button.active');
            const statusFilter = activeTab.getAttribute('data-status');
            const searchTerm = searchInput.value.toLowerCase();

            const orders = ordersList.querySelectorAll('.order-card');
            orders.forEach(order => {
                const orderStatus = order.getAttribute('data-status');
                const title = order.getAttribute('data-title').toLowerCase();
                const orderId = order.getAttribute('data-orderid').toLowerCase();

                const matchesStatus = (statusFilter === 'all') || (orderStatus === statusFilter);
                const matchesSearch = title.includes(searchTerm) || orderId.includes(searchTerm);

                order.style.display = (matchesStatus && matchesSearch) ? 'flex' : 'none';
            });
        }
    </script>

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

    <script>
        const deactivateBtn = document.getElementById('ppDeactivateBtn');
        const deleteBtn = document.getElementById('ppDeleteBtn');
        const confirmModal = document.getElementById('ppConfirmModal');
        const modalTitle = document.getElementById('ppModalTitle');
        const modalText = document.getElementById('ppModalText');
        const confirmBtn = document.getElementById('ppConfirmBtn');
        const cancelBtn = document.getElementById('ppCancelBtn');
        const successMsg = document.getElementById('ppSuccessMsg');

        let actionType = '';

        deactivateBtn.addEventListener('click', () => {
            actionType = 'deactivate';
            modalTitle.textContent = 'Deactivate Account';
            modalText.textContent = 'Are you sure you want to deactivate your account? You can reactivate later.';
            confirmModal.style.display = 'flex';
        });

        deleteBtn.addEventListener('click', () => {
            actionType = 'delete';
            modalTitle.textContent = 'Delete Account';
            modalText.textContent = 'This will permanently delete your account. Are you sure?';
            confirmModal.style.display = 'flex';
        });

        cancelBtn.addEventListener('click', () => {
            confirmModal.style.display = 'none';
        });

        confirmBtn.addEventListener('click', () => {
            confirmModal.style.display = 'none';
            if (actionType === 'deactivate') {
                successMsg.textContent = '✅ Your account has been deactivated.';
            } else if (actionType === 'delete') {
                successMsg.textContent = '❌ Your account has been permanently deleted.';
            }
            successMsg.style.display = 'block';
        });

        // Close modal when clicking outside
        window.addEventListener('click', (e) => {
            if (e.target === confirmModal) {
                confirmModal.style.display = 'none';
            }
        });
    </script>

    <!-- rate and review -->
    <script>
        // ⭐ Star Rating
        const rrStars = document.querySelectorAll(".rr-star");
        let rrSelectedRating = 0;
        rrStars.forEach(star => {
            star.addEventListener("click", () => {
                rrSelectedRating = star.getAttribute("data-value");
                rrStars.forEach(s => s.classList.remove("active"));
                for (let i = 0; i < rrSelectedRating; i++) {
                    rrStars[i].classList.add("active");
                }
            });
        });

        // 📸 File Upload Preview
        const rrFileInput = document.getElementById("rrFileInput");
        const rrPreview = document.getElementById("rrPreview");
        let rrUploadedFiles = [];

        rrFileInput.addEventListener("change", () => {
            rrPreview.innerHTML = "";
            rrUploadedFiles = Array.from(rrFileInput.files);
            rrUploadedFiles.forEach(file => {
                const reader = new FileReader();
                reader.onload = e => {
                    let element;
                    if (file.type.startsWith("image/")) {
                        element = document.createElement("img");
                        element.src = e.target.result;
                    } else if (file.type.startsWith("video/")) {
                        element = document.createElement("video");
                        element.src = e.target.result;
                        element.controls = true;
                    }
                    rrPreview.appendChild(element);
                };
                reader.readAsDataURL(file);
            });
        });

        // ✅ Submit Review
        document.getElementById("rrSubmitBtn").addEventListener("click", () => {
            const reviewText = document.getElementById("rrReviewText").value.trim();
            if (rrSelectedRating === 0) {
                alert("⭐ Please select a star rating!");
                return;
            }
            if (reviewText === "") {
                alert("✍️ Please write a review!");
                return;
            }

            // Create review card
            const container = document.getElementById("rrReviewsContainer");
            const card = document.createElement("div");
            card.classList.add("rr-card");

            // Stars
            const starsDiv = document.createElement("div");
            starsDiv.classList.add("rr-card-stars");
            starsDiv.innerHTML = "★".repeat(rrSelectedRating) + "☆".repeat(5 - rrSelectedRating);
            card.appendChild(starsDiv);

            // Text
            const textDiv = document.createElement("p");
            textDiv.textContent = reviewText;
            card.appendChild(textDiv);

            // Media
            if (rrUploadedFiles.length > 0) {
                const mediaDiv = document.createElement("div");
                mediaDiv.classList.add("rr-card-media", "d-flex", "mt-2");
                rrUploadedFiles.forEach(file => {
                    const reader = new FileReader();
                    reader.onload = e => {
                        let element;
                        if (file.type.startsWith("image/")) {
                            element = document.createElement("img");
                            element.src = e.target.result;
                        } else if (file.type.startsWith("video/")) {
                            element = document.createElement("video");
                            element.src = e.target.result;
                            element.controls = true;
                        }
                        mediaDiv.appendChild(element);
                    };
                    reader.readAsDataURL(file);
                });
                card.appendChild(mediaDiv);
            }

            container.prepend(card);

            // Reset modal
            rrStars.forEach(s => s.classList.remove("active"));
            document.getElementById("rrReviewText").value = "";
            rrSelectedRating = 0;
            rrPreview.innerHTML = "";
            rrFileInput.value = "";
            rrUploadedFiles = [];

            bootstrap.Modal.getInstance(document.getElementById("rrModal")).hide();
        });
    </script>
</body>

</html>