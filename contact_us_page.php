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
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=1.6">
    <style>
    </style>
</head>

<body>
    <?php include 'common/header.php' ?>
    <button id="ar-goTopBtn" class="ar-go-top-btn" aria-label="Go to top">
        <i class="bi bi-chevron-up"></i>
    </button>
    <section class="shopnow-contact-body">
        <div class="contact-container">
            <div class="contact-info-column">
                <img src="assets/img/Ecommerce web page-pana (1).png" alt="Illustration" />
                <h2>Let’s Talk!</h2>
                <p class="mb-5 text-muted">Shop new arrivals for women, men, and kids. Enjoy exclusive deals and fast
                    delivery.</p>

                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:hello@yourcompany.com">hello@yourcompany.com</a>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+919876543210">+91 98765 43210</a>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>123 Design Avenue, Creative Hub, City</span>
                </div>

                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="contact-form-column">
                <div class="contact-form-wrapper">
                    <h2>Send a Message</h2>
                    <form id="contactForm">
                        <input type="text" id="name" class="form-control mb-3" placeholder="Your Name" required />
                        <input type="email" id="email" class="form-control mb-3" placeholder="Your Email" required />
                        <input type="text" id="subject" class="form-control mb-3" placeholder="Subject (Optional)" />
                        <textarea id="message" class="form-control mb-3" rows="4" placeholder="Your Message"
                            required></textarea>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                        <div id="formMessages" class="alert mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.2"></script>

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
</body>

</html>