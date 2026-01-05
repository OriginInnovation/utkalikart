<?php include 'common/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aesthetic Boutique Offers - ShopNow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=3.97">

    <style>
        :root {
            --aesthetic-peach: #fff5f0;
            --aesthetic-lavender: #f3f0ff;
            --aesthetic-mint: #f0fff4;
            --text-dark: #2d3436;
            --soft-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            --accent-pink: #ff85a1;
            --deep-lavender: #a18cd1;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #fff;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* HEADER */
        .offer-header {
            background-color: var(--aesthetic-peach);
            padding: 140px 0 100px;
            position: relative;
            border-radius: 0 0 100px 100px;
        }

        .grad-text {
            background: linear-gradient(45deg, #ff85a1, #a18cd1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
            letter-spacing: -1.5px;
        }

        /* VOUCHER CARDS */
        .aesthetic-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid #fff;
            border-radius: 35px;
            padding: 30px;
            transition: 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: var(--soft-shadow);
        }

        .aesthetic-card:hover {
            transform: translateY(-15px);
        }

        .coupon-box {
            background: var(--aesthetic-lavender);
            border: 2px dashed var(--deep-lavender);
            padding: 12px;
            text-align: center;
            font-weight: 700;
            border-radius: 15px;
            cursor: pointer;
            color: #6c5ce7;
            transition: 0.3s;
        }

        .coupon-box:hover {
            background: #6c5ce7;
            color: #fff;
            transform: scale(1.05);
        }

        /* SPIN THE WHEEL PREVIEW (AESTHETIC BLOCK) */
        .wheel-promo {
            background: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
            border-radius: 40px;
            padding: 50px;
            position: relative;
            overflow: hidden;
        }

        .wheel-circle {
            width: 200px;
            height: 200px;
            border: 10px solid #fff;
            border-radius: 50%;
            position: absolute;
            right: -50px;
            top: -50px;
            background: var(--aesthetic-lavender);
            opacity: 0.5;
        }

        /* FLASH GRID */
        .flash-dot {
            height: 10px;
            width: 10px;
            background-color: #ff3f34;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }

            100% {
                opacity: 1;
            }
        }

        /* TESTIMONIALS */
        .quote-card {
            background: var(--aesthetic-mint);
            border-radius: 25px;
            padding: 25px;
            border: none;
            font-style: italic;
            font-size: 0.95rem;
        }

        /* TIMER */
        .t-item {
            background: #fff;
            padding: 15px;
            min-width: 85px;
            border-radius: 25px;
            box-shadow: var(--soft-shadow);
            border: 1px solid #f1f1f1;
        }

        .t-item span {
            display: block;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--accent-pink);
        }

        /* WHEEL MODAL STYLES */
        .wheel-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 0 auto;
            border: 8px solid #fff;
            border-radius: 50%;
            box-shadow: var(--soft-shadow);
            overflow: hidden;
            transition: transform 4s cubic-bezier(0.15, 0, 0.15, 1);
        }

        .wheel-segment {
            position: absolute;
            width: 50%;
            height: 50%;
            transform-origin: 100% 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: bold;
            font-size: 12px;
        }

        /* Pointer for wheel */
        .wheel-pointer {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            z-index: 10;
            filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.2));
        }

        .spin-result-card {
            display: none;
            animation: fadeInUp 0.5s;
        }

        /* TOAST NOTIFICATION STYLES */
        .custom-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            display: none;
            background: white;
            padding: 15px 25px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-left: 5px solid var(--accent-pink);
            align-items: center;
            gap: 15px;
        }

        .toast-icon {
            width: 40px;
            height: 40px;
            background: var(--aesthetic-peach);
            color: var(--accent-pink);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toast-text h6 {
            margin: 0;
            font-weight: 700;
            font-size: 14px;
        }

        .toast-text p {
            margin: 0;
            font-size: 12px;
            color: #888;
        }
        /* FLOATING AURA EFFECT */
.creativity-section {
    position: relative;
    padding: 100px 0;
    background: radial-gradient(circle at 10% 20%, var(--aesthetic-peach) 0%, #fff 100%);
    overflow: hidden;
}

/* SCRATCH CARD SYSTEM */
.scratch-card-wrapper {
    position: relative;
    width: 100%;
    max-width: 350px;
    height: 200px;
    margin: 0 auto;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--soft-shadow);
}

.scratch-content {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    background: var(--aesthetic-mint);
    z-index: 1;
}

#scratchCanvas {
    position: absolute;
    top: 0; left: 0;
    z-index: 2;
    cursor: crosshair;
    touch-action: none;
}

/* STYLISH FLOATING BADGE */
.floating-badge {
    position: absolute;
    width: 120px;
    height: 120px;
    background: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(10px);
    border: 1px solid #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    animation: float 6s ease-in-out infinite;
    z-index: 5;
    top: -30px; left: -30px;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(10deg); }
}
    </style>

    <style>
    .premium-img-wrapper {
        overflow: hidden;
        border-radius: 20px;
        transition: 0.5s ease;
    }
    .premium-img-wrapper img {
        transition: 0.8s ease;
    }
    .premium-img-wrapper:hover img {
        transform: scale(1.1);
    }
    .grad-text {
        background: linear-gradient(45deg, #2d3436, #ff85a1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    @media (max-width: 768px) {
        .premium-img-wrapper img {
            height: 300px !important;
        }
    }
</style>
</head>

<body>

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
                            <canvas id="scratchCanvas" width="350" height="200"></canvas>
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
                    <img src="assets/img/saree1.webp" class="img-fluid rounded-4" style="height: 217px; width: 100%; object-fit: cover;" alt="Detail 1">
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

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // TIMER
        const countdownDate = new Date().getTime() + (2 * 24 * 60 * 60 * 1000);
        setInterval(function() {
            const now = new Date().getTime();
            const distance = countdownDate - now;
            document.getElementById("days").innerHTML = Math.floor(distance / (1000 * 60 * 60 * 24));
            document.getElementById("hours").innerHTML = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            document.getElementById("mins").innerHTML = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            document.getElementById("secs").innerHTML = Math.floor((distance % (1000 * 60)) / 1000);
        }, 1000);

        // CONFETTI
        function copyCoupon(code, element) {
            navigator.clipboard.writeText(code);
            confetti({
                particleCount: 100,
                spread: 70,
                origin: {
                    y: 0.8
                },
                colors: ['#ff85a1', '#a18cd1', '#ffffff']
            });
            const original = element.innerText;
            element.innerText = "COPIED ✨";
            setTimeout(() => {
                element.innerText = original;
            }, 2000);
        }
        const prizes = [{
                label: "10% OFF",
                code: "LUCKY10"
            },
            {
                label: "FREE GIFT",
                code: "GIFTME"
            },
            {
                label: "₹500 OFF",
                code: "SAVE500"
            },
            {
                label: "20% OFF",
                code: "PASTEL20"
            },
            {
                label: "BOGO",
                code: "FREEONE"
            },
            {
                label: "90% OFF",
                code: "JACKPOT90"
            }
        ];

        // Generate Wheel Segments
        const wheel = document.getElementById('mainWheel');
        const colors = ['#ff85a1', '#a18cd1', '#ffb8b8', '#6c5ce7', '#fab1a0', '#fd79a8'];

        prizes.forEach((p, i) => {
            const deg = (360 / prizes.length) * i;
            const segment = document.createElement('div');
            segment.className = 'wheel-segment';
            segment.style.backgroundColor = colors[i];
            segment.style.transform = `rotate(${deg}deg) skewY(-30deg)`;
            segment.innerHTML = `<span style="transform: skewY(30deg) rotate(30deg);">${p.label}</span>`;
            wheel.appendChild(segment);
        });

        let isSpinning = false;

        function startSpin() {
            if (isSpinning) return;
            isSpinning = true;

            const spinBtn = document.getElementById('spinBtn');
            const wheelElement = document.getElementById('mainWheel');
            const randomDeg = Math.floor(5000 + Math.random() * 5000); // 5000-10000 degrees spin

            spinBtn.disabled = true;
            spinBtn.innerText = "SPINNING...";

            wheelElement.style.transform = `rotate(${randomDeg}deg)`;

            setTimeout(() => {
                const actualDeg = randomDeg % 360;
                const prizeIndex = Math.floor(((360 - actualDeg) % 360) / (360 / prizes.length));
                const finalPrize = prizes[prizeIndex];

                // Confetti
                confetti({
                    particleCount: 150,
                    spread: 100,
                    origin: {
                        y: 0.5
                    }
                });

                // UI Updates
                document.getElementById('wheelSection').style.display = 'none';
                const resSec = document.getElementById('resultSection');
                resSec.style.display = 'block';
                document.getElementById('wonPrize').innerText = finalPrize.label;
                document.getElementById('wonCode').innerText = finalPrize.code;

                isSpinning = false;
            }, 4000);
        }

        // Reset modal when closed
        document.getElementById('spinModal').addEventListener('hidden.bs.modal', function() {
            document.getElementById('wheelSection').style.display = 'block';
            document.getElementById('resultSection').style.display = 'none';
            document.getElementById('mainWheel').style.transform = 'rotate(0deg)';
            document.getElementById('spinBtn').disabled = false;
            document.getElementById('spinBtn').innerText = "SPIN NOW";
        });

        function addToBagAnimation(productName) {
            const toast = document.getElementById('cartToast');
            const nameEl = document.getElementById('toastProductName');

            // Set Product Name
            nameEl.innerText = productName;

            // Show Toast with Animation
            toast.style.display = 'flex';
            toast.classList.remove('animate__fadeOutRight');
            toast.classList.add('animate__fadeInRight');

            // Confetti burst for aesthetic feel
            confetti({
                particleCount: 40,
                spread: 50,
                origin: {
                    x: 0.9,
                    y: 0.1
                }, // Top right corner burst
                colors: ['#ff85a1', '#a18cd1']
            });

            // Hide after 3 seconds
            setTimeout(() => {
                toast.classList.remove('animate__fadeInRight');
                toast.classList.add('animate__fadeOutRight');
                setTimeout(() => {
                    toast.style.display = 'none';
                }, 500); // Wait for fadeOut animation
            }, 3000);
        }
        function initScratch() {
    const canvas = document.getElementById('scratchCanvas');
    const ctx = canvas.getContext('2d');
    let isDrawing = false;

    // Fill with a nice aesthetic pattern/color
    ctx.fillStyle = '#e2d1c3'; // Pastel Beige
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    // Add some "Aesthetic Text" on top of scratch layer
    ctx.fillStyle = '#8e7f7f';
    ctx.font = '20px Inter';
    ctx.textAlign = 'center';
    ctx.fillText('SCRATCH TO REVEAL', canvas.width/2, canvas.height/2 + 7);

    function scratch(e) {
        if (!isDrawing) return;
        const rect = canvas.getBoundingClientRect();
        const x = (e.clientX || e.touches[0].clientX) - rect.left;
        const y = (e.clientY || e.touches[0].clientY) - rect.top;

        ctx.globalCompositeOperation = 'destination-out';
        ctx.beginPath();
        ctx.arc(x, y, 25, 0, Math.PI * 2);
        ctx.fill();
    }

    canvas.addEventListener('mousedown', () => isDrawing = true);
    canvas.addEventListener('touchstart', () => isDrawing = true);
    window.addEventListener('mouseup', () => isDrawing = false);
    window.addEventListener('touchend', () => isDrawing = false);
    canvas.addEventListener('mousemove', scratch);
    canvas.addEventListener('touchmove', scratch);
}

// Start scratch on load
document.addEventListener('DOMContentLoaded', initScratch);
    </script>
</body>

</html>