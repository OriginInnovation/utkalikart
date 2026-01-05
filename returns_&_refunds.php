<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Returns & Refunds Policy - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=2.4">
    <style>
        .policy-header {
            position: relative;
            padding: 70px 20px;
            text-align: center;
            color: #fff;
            border-radius: 12px;
            overflow: hidden;

            /* Background Image */
            background: url("assets/img/banner_return_policy_mobile_1060_600.jpg") center / cover no-repeat;
        }

        /* Dark overlay for low opacity effect */
        .policy-header::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            /* opacity control */
            z-index: 1;
        }

        /* Content above overlay */
        .policy-header h1,
        .policy-header p {
            position: relative;
            z-index: 2;
        }

        .policy-header h1 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .policy-header p {
            font-size: 1rem;
            opacity: 0.9;
        }
    </style>
</head>

<body id="returns-refund">

    <?php include 'common/header.php' ?>
    <!-- Header -->
    <div class="policy-header">
        <h1 class="text-white" ><i class="fa-solid fa-box-return"></i> Returns & Refunds Policy</h1>
        <p class="text-white">Your satisfaction is important to us. Here's everything you need to know.</p>
    </div>


    <!-- Main Content -->
    <div class="container py-5">

        <!-- Section 1 -->
        <div class="policy-section">
            <h3>1. Overview</h3>
            <p>We want you to love your purchase. If you're not completely satisfied, we're here to help. You may return most new, unopened items within <strong>30 days</strong> of delivery for a full refund.</p>
        </div>

        <!-- Section 2 -->
        <div class="policy-section">
            <h3>2. Conditions for Returns</h3>
            <ul>
                <li>Items must be returned in original condition and packaging.</li>
                <li>Include all original accessories, tags, and documentation.</li>
                <li>A receipt or proof of purchase is required.</li>
                <li>Items must not be damaged, altered, or used.</li>
            </ul>
        </div>

        <!-- Section 3 -->
        <div class="policy-section">
            <h3>3. How to Initiate a Return</h3>
            <ol>
                <li>Log in to your account and go to <strong>Order History</strong>.</li>
                <li>Select the order and click "Request Return."</li>
                <li>Follow the steps and print your return label.</li>
                <li>Package the item securely and drop it at a nearby courier.</li>
            </ol>
        </div>

        <!-- Section 4 -->
        <div class="policy-section">
            <h3>4. Non-Returnable Items</h3>
            <p>Some products are not eligible for return, including:</p>
            <ul>
                <li>Gift cards</li>
                <li>Clearance or final sale items</li>
                <li>Personalized or customized products</li>
                <li>Perishable goods</li>
            </ul>
        </div>

        <!-- Section 5 -->
        <div class="policy-section">
            <h3>5. Refunds</h3>
            <p>Once we receive and inspect your return, we will notify you via email. If approved, your refund will be processed to your original payment method within <strong>5–7 business days</strong>.</p>
        </div>

        <!-- Section 6 -->
        <div class="policy-section">
            <h3>6. Contact Us</h3>
            <p>Still have questions? Contact our support team at <a href="mailto:support@example.com">support@example.com</a> or use our <a href="#">live chat</a> for help.</p>
        </div>

    </div>

    <?php include 'common/footer.php' ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/return-refund.js?v=1.2"></script>
</body>

</html>