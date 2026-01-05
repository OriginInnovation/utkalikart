<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Help & FAQs - E-Commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/main.css?v=2.3">
</head>

<body id="faqs-data" >
    <?php include 'common/header.php' ?>
    <!-- Header -->
    <div class="faq-header">
        <h1 class="text-white"><i class="fa-solid fa-circle-question"></i> Help & FAQs</h1>
        <p class="text-white">Find answers to your questions</p>
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search FAQs..." />
            <i class="fa fa-search"></i>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="container py-5">
        <div class="accordion" id="faqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        <i class="fa-solid fa-box"></i> How do I track my order?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You’ll receive a tracking link via email once your order ships. You can also track it from your account.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        <i class="fa-solid fa-rotate-left"></i> What is your return policy?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We accept returns within 30 days as long as items are unused and in original packaging.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        <i class="fa-solid fa-globe"></i> Do you ship internationally?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we ship worldwide. Delivery times vary depending on location and customs processing.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        <i class="fa-solid fa-user-pen"></i> Can I change or cancel my order?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can change or cancel an order within 1 hour of placing it. Contact support immediately for urgent requests.
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php include 'common/footer.php' ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/help_faqs.js?v=1.2"></script>
</body>

</html>