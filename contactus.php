<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | ShopNow</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=1.6">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f9fafb;
        }

        .ar-contact-wrapper {
            padding: 60px 0;
        }

        .ar-contact-box {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            padding: 40px;
        }

        .ar-contact-title {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .ar-contact-subtitle {
            color: #6c757d;
            margin-bottom: 30px;
        }

        .ar-contact-item {
            display: flex;
            gap: 16px;
            align-items: center;
            padding: 18px;
            border-radius: 14px;
            background: #f8f9fa;
            margin-bottom: 16px;
        }

        .ar-contact-item i {
            font-size: 22px;
            color: rgb(227, 101, 42);
        }

        .ar-contact-item span {
            font-size: 13px;
            color: #6c757d;
            display: block;
        }

        .ar-contact-item strong {
            font-weight: 600;
        }

        .ar-contact-form input,
        .ar-contact-form textarea {
            border-radius: 12px;
            padding: 14px;
        }

        .ar-contact-btn {
            background: rgb(227, 101, 42);
            border: none;
            border-radius: 30px;
            padding: 12px;
            font-weight: 600;
            width: 100%;
        }

        .ar-contact-btn:hover {
            background: rgb(210, 90, 35);
        }
    </style>
</head>

<body>

    <?php include 'common/header.php'; ?>

    <!-- CONTACT US SECTION -->
    <section class="ar-contact-wrapper">
        <div class="container">
            <div class="row g-4 align-items-stretch">

                <!-- LEFT INFO -->
                <div class="col-lg-5">
                    <div class="ar-contact-box h-100">
                        <h2 class="ar-contact-title">Contact Us</h2>
                        <p class="ar-contact-subtitle">
                            We’d love to hear from you. Reach out to us anytime.
                        </p>

                        <div class="ar-contact-item">
                            <i class="fa-solid fa-phone"></i>
                            <div>
                                <span>Phone</span>
                                <strong>+91 98765 43210</strong>
                            </div>
                        </div>

                        <div class="ar-contact-item">
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <span>Email</span>
                                <strong>support@shopnow.com</strong>
                            </div>
                        </div>

                        <div class="ar-contact-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <span>Address</span>
                                <strong>Mumbai, India</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="col-lg-7">
                    <div class="ar-contact-box h-100">
                        <h4 class="mb-4 fw-semibold">Send us a message</h4>

                        <form class="ar-contact-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required />
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="5"
                                        placeholder="Write your message..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn ar-contact-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.2"></script>

</body>

</html>
