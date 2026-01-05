document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       GO TO TOP BUTTON
    ========================= */
    const arGoTopBtn = document.getElementById("ar-goTopBtn");

    if (arGoTopBtn) {
        window.addEventListener("scroll", () => {
            arGoTopBtn.style.display = window.scrollY > 250 ? "flex" : "none";
        });

        arGoTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

    /* =========================
       PRODUCT INFINITE LOADER
    ========================= */
    const productGrid = document.getElementById("custom-productGrid");
    const loadTrigger = document.getElementById("loadTrigger");

    if (productGrid && loadTrigger) {

        const products = Array.from({
            length: 40
        }, (_, i) => ({
            title: "HERE&NOW",
            desc: "Cotton Straight Kurta",
            price: "Rs. 1099",
            img: "https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg",
            rating: 4.5,
            reviews: 34567
        }));

        let index = 0;
        const batchSize = 8;

        function showSkeleton() {
            for (let i = 0; i < batchSize; i++) {
                const col = document.createElement("div");
                col.className = "col-6 col-md-4 col-lg-3 mb-4 d-flex skeleton-card";
                col.innerHTML = `
                    <div class="w-100">
                        <div class="skeleton skeleton-img mb-2"></div>
                        <div class="skeleton skeleton-text" style="width:60%"></div>
                        <div class="skeleton skeleton-text" style="width:80%"></div>
                        <div class="skeleton skeleton-text" style="width:50%"></div>
                        <div class="skeleton skeleton-btn mt-2"></div>
                    </div>
                `;
                productGrid.appendChild(col);
            }
        }

        function loadProducts() {
            document.querySelectorAll(".skeleton-card").forEach(el => el.remove());

            const slice = products.slice(index, index + batchSize);

            slice.forEach(p => {
                const col = document.createElement("div");
                col.className = "col-6 col-md-4 col-lg-3 mb-4 d-flex";
                col.innerHTML = `
                    <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
                        <img src="${p.img}" class="card-img-top" alt="${p.desc}">
                        <i class="far fa-heart myshop-wishlist-btn"></i>
                        <i class="fas fa-cart-shopping myshop-cart-icon"></i>
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title mb-1 fw-semibold text-dark">${p.title}</h6>
                            <p class="mb-1 text-muted small">${p.desc}</p>
                            <div class="wl-rating">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                                ${p.rating} <span class="text-secondary">| ${p.reviews.toLocaleString()} Ratings</span>
                            </div>
                            <p class="fw-bold text-dark mt-auto mb-2">${p.price}</p>
                            <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
                        </div>
                    </div>
                `;
                productGrid.appendChild(col);

                col.querySelector(".myshop-wishlist-btn").addEventListener("click", function (e) {
                    e.stopPropagation();
                    this.classList.toggle("fas");
                    this.classList.toggle("far");
                });
            });

            index += batchSize;

            if (index >= products.length) {
                observer.unobserve(loadTrigger);
                loadTrigger.innerHTML = "<small class='text-muted'>No more products</small>";
            }
        }

        const observer = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting) {
                showSkeleton();
                setTimeout(loadProducts, 1200);
            }
        });

        observer.observe(loadTrigger);

        showSkeleton();
        setTimeout(loadProducts, 1200);
    }

    /* =========================
       PRICE RANGE SLIDER
    ========================= */
    const sliderOne = document.getElementById("slider-1");
    const sliderTwo = document.getElementById("slider-2");
    const displayValOne = document.getElementById("range1");
    const displayValTwo = document.getElementById("range2");
    const sliderTrack = document.querySelector(".slider-track");

    if (sliderOne && sliderTwo && displayValOne && displayValTwo && sliderTrack) {

        const minGap = 500;
        const sliderMaxValue = sliderOne.max;

        function fillColor() {
            const percent1 = (sliderOne.value / sliderMaxValue) * 100;
            const percent2 = (sliderTwo.value / sliderMaxValue) * 100;

            sliderTrack.style.background =
                `linear-gradient(to right, #ddd ${percent1}%,
                 #212529 ${percent1}%,
                 #212529 ${percent2}%,
                 #ddd ${percent2}%)`;
        }

        function slideOne() {
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderOne.value = sliderTwo.value - minGap;
            }
            displayValOne.textContent = sliderOne.value;
            fillColor();
        }

        function slideTwo() {
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderTwo.value = parseInt(sliderOne.value) + minGap;
            }
            displayValTwo.textContent = sliderTwo.value;
            fillColor();
        }

        sliderOne.addEventListener("input", slideOne);
        sliderTwo.addEventListener("input", slideTwo);

        slideOne();
        slideTwo();
    }

});
 document.addEventListener("DOMContentLoaded", function() {

            const categoryItems = document.querySelectorAll(".filter-category-item");
            const detailPanes = document.querySelectorAll(".filter-detail-pane");

            categoryItems.forEach(item => {
                item.addEventListener("click", function() {

                    // LEFT SIDE ACTIVE REMOVE
                    categoryItems.forEach(i => i.classList.remove("active"));
                    this.classList.add("active");

                    // RIGHT SIDE PANES HIDE
                    detailPanes.forEach(pane => pane.classList.remove("active"));

                    // TARGET PANE SHOW
                    const targetId = this.getAttribute("data-filter-target");
                    const targetPane = document.getElementById(targetId);

                    if (targetPane) {
                        targetPane.classList.add("active");
                    }
                });
            });

        });
document.addEventListener("DOMContentLoaded", function () {

    const minSlider = document.getElementById("AR-priceMin");
    const maxSlider = document.getElementById("AR-priceMax");
    const minOutput = document.getElementById("AR-minPriceValue");
    const maxOutput = document.getElementById("AR-maxPriceValue");

    const minimumGap = 500;

    function updatePriceRange() {
        let minVal = parseInt(minSlider.value);
        let maxVal = parseInt(maxSlider.value);

        if (maxVal - minVal < minimumGap) {
            if (event.target === minSlider) {
                minSlider.value = maxVal - minimumGap;
            } else {
                maxSlider.value = minVal + minimumGap;
            }
        }

        minOutput.textContent = minSlider.value;
        maxOutput.textContent = maxSlider.value;
    }

    minSlider.addEventListener("input", updatePriceRange);
    maxSlider.addEventListener("input", updatePriceRange);

    updatePriceRange(); // initial
});
