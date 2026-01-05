<?php include 'common/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aesthetic Boutique Offers - ShopNow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=4.2">
</head>

<body id="offers-page">

    <div class="py-2 text-center small fw-bold" style="background: var(--aesthetic-lavender); color: var(--deep-lavender);">
        ✨ Use code <span class="text-dark">FIRST100</span> for an extra ₹100 off on your first app order!
    </div>

    <header class="offer-header text-center">
        <div class="container animate__animated animate__fadeIn">
            <h1 class="display-2 grad-text mb-3">Dreamy Deals Just for You</h1>
            <p class="fs-5 text-muted mb-5">Elevate your wardrobe with our most aesthetic collection yet.</p>

            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <div class="t-item"><span id="days">00</span><small>Days</small></div>
                <div class="t-item"><span id="hours">00</span><small>Hours</small></div>
                <div class="t-item"><span id="mins">00</span><small>Mins</small></div>
                <div class="t-item"><span id="secs">00</span><small>Secs</small></div>
            </div>
        </div>
    </header>

    <main class="container my-5">

        <div class="row g-4 mb-5 pb-5">
            <div class="col-md-4">
                <div class="aesthetic-card h-100">
                    <div class="text-center">
                        <i class="fa fa-leaf mb-3 fs-1 text-muted"></i>
                        <h4 class="fw-bold">Morning Mist</h4>
                        <p class="small text-muted mb-4">Flat 25% Off on all Pastel Kurtis</p>
                        <div class="coupon-box" onclick="copyCoupon('MIST25', this)">MIST25</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aesthetic-card h-100" style="background: var(--aesthetic-peach);">
                    <div class="text-center">
                        <i class="fa fa-sun mb-3 fs-1 text-muted"></i>
                        <h4 class="fw-bold">Golden Hour</h4>
                        <p class="small text-muted mb-4">Buy 1 Get 1 Free on Summer Tops</p>
                        <div class="coupon-box" onclick="copyCoupon('SUNSET', this)">SUNSET</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aesthetic-card h-100">
                    <div class="text-center">
                        <i class="fa fa-moon mb-3 fs-1 text-muted"></i>
                        <h4 class="fw-bold">Midnight Muse</h4>
                        <p class="small text-muted mb-4">Extra ₹500 Off on Evening Sarees</p>
                        <div class="coupon-box" onclick="copyCoupon('MUSE500', this)">MUSE500</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wheel-promo shadow-sm mb-5 animate__animated animate__fadeInUp">
            <div class="wheel-circle"></div>
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="fw-bold display-5">Feeling Lucky? 🎡</h2>
                    <p class="text-muted">Spin our aesthetic wheel and win exclusive discounts up to 90% or free gift hampers!</p>
                    <button class="btn btn-dark rounded-pill px-5 py-3 mt-3 shadow-lg" data-bs-toggle="modal" data-bs-target="#spinModal">
                        Spin the Wheel <i class="fa fa-magic ms-2"></i>
                    </button>
                </div>
                <div class="col-md-5 text-center d-none d-md-block">
                    <i class="fa fa-gift fa-10x opacity-25" style="color: var(--accent-pink);"></i>
                </div>
            </div>
        </div>

        <div class="modal fade" id="spinModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-5 border-0 shadow-lg" style="background: var(--aesthetic-peach);">
                    <div class="modal-body text-center p-5">
                        <button type="button" class="btn-close position-absolute top-0 end-0 m-4" data-bs-dismiss="modal"></button>

                        <div id="wheelSection">
                            <h3 class="fw-bold mb-4">Try Your Luck! ✨</h3>
                            <div class="position-relative mb-4">
                                <img src="https://cdn-icons-png.flaticon.com/512/5478/5478542.png" class="wheel-pointer">
                                <div class="wheel-container" id="mainWheel">
                                </div>
                            </div>
                            <button class="btn btn-dark rounded-pill px-5 py-3 shadow" id="spinBtn" onclick="startSpin()">SPIN NOW</button>
                        </div>

                        <div id="resultSection" class="spin-result-card">
                            <h2 class="display-5 mb-3">🎉 Congrats!</h2>
                            <p class="text-muted fs-5">You just won:</p>
                            <div class="aesthetic-card mb-4">
                                <h3 class="fw-bold grad-text mb-0" id="wonPrize">₹500 OFF</h3>
                            </div>
                            <p class="small text-muted">Use this code at checkout to claim your reward.</p>
                            <div class="coupon-box w-100" id="wonCode" onclick="copyCoupon(this.innerText, this)">SPIN500</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="creativity-section my-5 rounded-5 shadow-sm">
            <div class="container">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-5 order-2 order-lg-1">
                        <div class="position-relative p-4">
                            <div class="floating-badge shadow-sm">
                                <span>Revealing<br>Happiness<br>✨</span>
                            </div>
                            <div class="aesthetic-card p-4 text-center">
                                <h4 class="fw-bold mb-3">Mystery Reward 🎁</h4>
                                <p class="small text-muted mb-4">Scratch the card below to reveal your secret personalized discount!</p>

                                <div class="scratch-card-wrapper">
                                    <div class="scratch-content">
                                        <h2 class="fw-bold grad-text mb-0">85% OFF</h2>
                                        <small class="text-muted">Use: MYSTERY85</small>
                                    </div>
                                    <canvas id="scratchCanvas" width="460" height="420"></canvas>
                                </div>

                                <button class="btn btn-link text-decoration-none small mt-3 text-muted" onclick="initScratch()">Reset Card</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 order-1 order-lg-2">
                        <div class="ps-lg-5">
                            <span class="badge bg-white text-dark shadow-sm mb-3">#CuratedByAesthetics</span>
                            <h2 class="display-4 fw-bold mb-4">The Silk <br><span class="grad-text">Symphony</span></h2>
                            <p class="fs-5 text-muted mb-4">Every thread tells a story of heritage. Our new Silk Symphony collection is hand-woven by local artisans to bring you the finest texture and timeless elegance.</p>

                            <div class="d-flex gap-4 align-items-center">
                                <div class="text-center">
                                    <div class="fs-2 fw-bold text-dark">12k+</div>
                                    <small class="text-muted text-uppercase">Happy Souls</small>
                                </div>
                                <div style="width: 1px; height: 50px; background: #ddd;"></div>
                                <div class="text-center">
                                    <div class="fs-2 fw-bold text-dark">100%</div>
                                    <small class="text-muted text-uppercase">Handcrafted</small>
                                </div>
                                <div style="width: 1px; height: 50px; background: #ddd;"></div>
                                <button class="btn btn-dark rounded-pill px-5 py-3 ms-auto">Explore Story</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="full-banner-section py-5">
            <div class="container-fluid p-0">
                <a href="https://example.com" target="_blank">
                    <img src="assets/img/middle-banner.webp" alt="Advertisement Banner" class="img-fluid w-100" style="object-fit: cover;">
                </a>
            </div>
        </section>


        <div class="steal-box shadow-sm mb-5 p-4 border-0" style="background: var(--aesthetic-peach); border-radius: 40px;">
            <div class="row align-items-center g-3">

                <div class="col-lg-3 col-md-4">
                    <div class="premium-img-wrapper shadow-sm">
                        <img src="assets/img/jackets.webp" class="img-fluid rounded-4" style="height: 450px; width: 100%; object-fit: cover;" alt="Premium Left">
                    </div>
                </div>

                <div class="col-lg-6 col-md-4 text-center px-lg-5">
                    <div class="p-2">
                        <span class="badge bg-white text-danger border border-danger mb-3 px-3">
                            <span class="flash-dot"></span>LIMITED EDITION
                        </span>
                        <h2 class="fw-bold display-6 mb-3 grad-text" style="letter-spacing: -1px;">Heritage Silk <br> Symphony</h2>
                        <p class="text-muted small mb-4">A curated masterpiece blending traditional weaving with modern aesthetic textures. Meticulously crafted for elegance.</p>

                        <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
                            <h3 class="fw-bold text-dark mb-0">₹3,499</h3>
                            <del class="text-muted small">₹7,999</del>
                        </div>

                        <button class="btn btn-outline-dark rounded-pill px-5 py-3 shadow-sm" onclick="addToBagAnimation('Heritage Silk Symphony')">
                            Add to Bag <i class="fa fa-shopping-bag ms-2"></i>
                        </button>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="d-flex flex-column gap-3">
                        <div class="premium-img-wrapper shadow-sm">
                            <img src="assets/img/womens_fashion.jpeg" class="img-fluid rounded-4" style="height: 217px; width: 100%; object-fit: cover;" alt="Detail 1">
                        </div>
                        <div class="premium-img-wrapper shadow-sm">
                            <img src="assets/img/slide 4.webp" class="img-fluid rounded-4" style="height: 217px; width: 100%; object-fit: cover;" alt="Detail 2">
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="my-5 py-5 text-center">
            <h2 class="fw-bold mb-5">Loved by Our Community ✨</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="quote-card shadow-sm">
                        "The pastel collection is a dream! Used the MIST25 code and saved so much. Quality is top-notch."
                        <div class="mt-3 fw-bold small">- Ananya M.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="quote-card shadow-sm" style="background: var(--aesthetic-lavender);">
                        "Fastest delivery ever! The gift hamper I won from the spin wheel was so thoughtful. Thank you!"
                        <div class="mt-3 fw-bold small">- Priyanshi S.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="quote-card shadow-sm">
                        "Aesthetic vibes all the way. Finally a boutique that understands modern ethnic fashion."
                        <div class="mt-3 fw-bold small">- Sneha K.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light rounded-5 p-5 text-center mb-5">
            <h3 class="fw-bold">Your Rewards Journey</h3>
            <div class="reward-track mt-5">
                <div class="reward-fill"></div>
                <div class="milestone-point" style="left: 0;"><i class="fa fa-check text-white small"></i></div>
                <div class="milestone-point" style="left: 33%;"><i class="fa fa-check text-white small"></i></div>
                <div class="milestone-point" style="left: 66%; background: var(--accent-pink); color: #fff; border:none;"><i class="fa fa-gift"></i></div>
                <div class="milestone-point" style="left: 100%;"><i class="fa fa-lock text-muted small"></i></div>
            </div>
            <div class="row text-muted small fw-bold mt-3">
                <div class="col-3">₹500 <br> Unlocked</div>
                <div class="col-3">₹1500 <br> Unlocked</div>
                <div class="col-3 text-dark">₹3000 <br> Current</div>
                <div class="col-3">₹5000 <br> Mystery Box</div>
            </div>
        </div>

    </main>

    <?php include 'common/footer.php' ?>

    <script src="assets/js/main.js?v=1.5"></script>
    <script src="assets/js/offers.js?v=1.6"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
</body>

</html>